/*

$ npm run dev = 更新を検知して、自動で書き出し＆ブラウザを更新
$ npm run dist = 納品用に整形してdistフォルダーへ書き出し
$ npm run css = scssをcssへ書き出し
$ npm run js = es201xを後方互換
$ npm run deploy = distデーターをdeploy

etc....

npm run deployは、.envファイルが必要です。管理者に確認をしてください。
npm run deployは、issueナンバー付きで実行可(githubIssueと連動させる場合便利)。
例：npm run deploy -- -i 999

*/

/* import plagins */

// gulp
import gulp from 'gulp'
// brosersync&php
import browserSync from 'browser-sync'
import gulpConnect from 'gulp-connect-php'
// scss
import sass from 'gulp-sass'
import postcss from 'gulp-postcss'
import autoprefixer from 'autoprefixer'
import rename from 'gulp-rename'
import sassGlob from 'gulp-sass-glob'
// js
import webpack from 'webpack'
import webpackStream from 'webpack-stream'
// dist
import del from 'del'
import cleanCSS from 'gulp-clean-css'
import uglify from 'gulp-uglify'
// deploy
import FtpDeploy from 'ftp-deploy'
import open from 'open'
// .env & options
import dotenv from 'dotenv'
import minimist from 'minimist'
dotenv.config()

/* settings */

const settings = {
  paths: {
    proxy: '127.0.0.1:8000'
  },
  default: {
    issue: null,
    deployDir: 'dirName', // deploy先のディレクトリを指定
    deployUrl: 'https://example.com/', // deploy先のURLを指定
    deployRoot: '/var/www/html/example/', // deploy先のドキュメントルートを指定
    ftpUser: process.env.FTP_USER,
    ftpPassword: process.env.FTP_PASS,
    ftpHost: process.env.FTP_HOST,
    ftpPort: process.env.FTP_PORT,
  }
}
const options = minimist(process.argv.slice(2), settings)
const paths = settings.paths
console.log(options)

/* gulp functions */

// brosersync&php
const browsersync = (done) => {
  gulpConnect.server({}, () => {
    browserSync.init({
      proxy: paths.proxy + '/src/',
    })
  })
  done()
}
const reload = (done) => {
  browserSync.reload()
  done()
}

// scss
export const css = () => {
  return gulp.src(['./src/_lib/*.scss'])
    .pipe(sassGlob({
      ignorePaths: [
        '**/_*.scss'
      ]
    }))
    .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
    .pipe(postcss([
      autoprefixer({ grid: 'autoplace' }),
    ]))
    .pipe(rename({ suffix: '.bandle' }))
    .pipe(gulp.dest('./src/_assets/css'))
}

// js
export const js = () => {
  return gulp.src('./src/_lib/app.js')
    .pipe(
      webpackStream({
        mode: 'development',
        entry: {
          app: './src/_lib/app.js'
        },
        output: {
          filename: '[name].bandle.js'
        },
        module: {
          rules: [
            {
              test: /\.js$/,
              exclude: /node_modules/,
              use: [
                'babel-loader',
              ],
            }
          ]
        },
      }, webpack)
    )
    .pipe(gulp.dest('./src/_assets/js'))
}

// watch
const watchs = () => {
  gulp.watch(['./**/*.{php,html}'], reload)
  gulp.watch(['./**/*.scss'], gulp.series(css, reload))
  gulp.watch(['./src/**/*.js', '!./**/*.bandle.js'], gulp.series(js, reload))
}
export default gulp.series(browsersync, watchs)

// dist
const delFn = () => {
  return del(['./dist/'])
}
const distFn = () => {
  return gulp.src(['./src/**/*', '!./src/_lib/**'])
    .pipe(gulp.dest('./dist/'))
}
const cleanCssFn = () => {
  return gulp.src(['./dist/**/*.bandle.css'])
    .pipe(cleanCSS({
      format: 'keep-breaks'
    }))
    .pipe(gulp.dest('./dist/'))
}
const cleanJsFn = () => {
  return gulp.src(['./dist/**/*.bandle.js'])
    .pipe(uglify({}))
    .pipe(gulp.dest('./dist/'))
}
export const dist = gulp.series(delFn, distFn, cleanCssFn, cleanJsFn)

// deploy
const ftpDeploy = new FtpDeploy()
const deployRoot = options.deployRoot + options.deployDir
const deployUrl = options.deployUrl + options.deployDir
const issueNum = options.i ? options.i : options.issue
const remoteRoot = issueNum ? deployRoot + '_' + issueNum : deployRoot
const openUrl = issueNum ? deployUrl + '_' + issueNum : deployUrl
const uploadFn = (done) => {
  const config = {
    user: options.ftpUser,
    password: options.ftpPassword,
    host: options.ftpHost,
    port: options.ftpPort,
    localRoot: './dist/',
    remoteRoot: remoteRoot,
    include: ['**/*'],
    deleteRemote: false,
    forcePasv: false
  }
  ftpDeploy.deploy(config).then(() => {
    console.log('ftp deploy finished')
    done()
  }).catch((err) => {
    console.log(err)
    done()
  })
}
export const opneFn = (done) => {
  open(openUrl)
  done()
}
export const deploy = gulp.series(delFn, distFn, cleanCssFn, cleanJsFn, uploadFn, opneFn)
