/**
 * use...
 * % npm run dev = 更新を検知して、自動で書き出し＆ブラウザを更新
 * % npm run dist = 納品用に整形してdistフォルダーへ書き出し
 * % npm run css = scssをcssへ書き出し
 * % npm run js = es201xを後方互換
 * % npm run deploy = distデーターをdeploy
 * % npm run disconnect = sync終了後もportが閉じない場合に利用
 *
 * etc...
 * % npm run deployは、.envファイルが必要です。管理者に確認をしてください。
 * % npm run deployは、issueナンバー付きで実行(GitHubIssueとテストを連動させる場合便利)。
 * 例：npm run deploy -- -i 999
 */

/**
 * import files
 */

import gulp from 'gulp'
import gulpIf from 'gulp-if'
import minimist from 'minimist'
// sync & php server
import browserSync from 'browser-sync'
import gulpConnect from 'gulp-connect-php'
// for javascript
import gulpEslint from 'gulp-eslint'
// Compile scss to css
import gulpStylelint from 'gulp-stylelint'
import gulpSass from 'gulp-sass'
import gulpPostcss from 'gulp-postcss'
import gulpSassGlob from 'gulp-sass-glob'
import gulpSourcemaps from 'gulp-sourcemaps'
import gulpRename from 'gulp-rename'
import autoprefixer from 'autoprefixer'
import gulpCleanCSS from 'gulp-clean-css'
// Compile js to es2015
import webpack from 'webpack'
import webpackStream from 'webpack-stream'
// dist
import del from 'del'
// deploy & .env
import FtpDeploy from 'ftp-deploy'
import open from 'open'
import dotenv from 'dotenv'
dotenv.config()

/**
 * parameter settings
 * sync用ポート番号を初め、各種パラメーターを設定します。
 * minimistを利用して、gulp実行時にオプションを渡します。
 * dotenvを利用して、process.envにデーターを渡します。
 */
const settings = {
  port: 8080,
  srcDir: './src/',
  distDir: './dist/',
  issue: null,
  deployDir: 'test', // deploy先のディレクトリを指定
  deployUrl: 'https://xxxxx.aws-testserver.com/', // deploy先のURLを指定
  deployRoot: '/var/www/html/xxxxx/', // deploy先のドキュメントルートを指定
  ftpUser: process.env.FTP_USER,
  ftpPassword: process.env.FTP_PASS,
  ftpHost: process.env.FTP_HOST,
  ftpPort: process.env.FTP_PORT,
}
// setting update
const argv = minimist(process.argv.slice(2))
for (const key in argv) {
  key === 'i' ? settings.issue = argv[key] : settings[key] = argv[key]
}
console.log('settings: ', settings)

/**
 * set mode
 * 実行モードを設定 ※通常は変更の必要はありません。
 */
const mode = {
  development: true,
  production: false,
  dist: false,
}
// mode update
if (settings._.indexOf('dist') >= 0 || settings.dist) {
  mode.development = false
  mode.production = true
  mode.dist = true
}
console.log('mode:', mode)

/**
 * set path
 * 各種パスを指定 ※通常は変更の必要はありません。
 */
const path = {
  js: settings.srcDir + 'assets/js/',
  css: settings.srcDir + 'assets/css/',
  target: {
    php: settings.srcDir + '**/*.{php, html}',
    css: settings.srcDir + 'assets/_css/**/*.scss',
    cssFile: settings.srcDir + 'assets/_css/app.scss',
    js: settings.srcDir + 'assets/_js/**/*.js',
    jsFile: settings.srcDir + 'assets/_js/app.js',
    dist: [
      settings.srcDir + '**/*',
      '!' + settings.srcDir + '**/_**',
      '!' + settings.srcDir + '**/_**/**/*',
      '!' + settings.srcDir + '**/_*',
    ]
  },
  dist: {
    dir: settings.distDir,
    css: settings.distDir + 'assets/css/',
    js: settings.distDir + 'assets/js/'
  }
}

/**
 * eslint: eslint with eslint-config-standard
 * 対象: path.target.js
 * 作業中ターミナルへeslintErrorを出力
 * etc: npm run lint:js でeslintErrorを出力
 * etc: npm run lint:js -- --fix でeslintErrorを修正
 */
export const eslint = () => {
  return gulp.src(path.target.js)
    .pipe(gulpEslint())
    .pipe(gulpEslint.format())
}

/**
 * stylelint: stylelint with stylelint-config-standard-scss & order
 * 対象: path.target.css
 * 作業中ターミナルへstylelintErrorを出力
 * etc: npm run lint:css でstylelintErrorを出力
 * etc: npm run lint:css -- --fix でstylelintErrorを修正
 */
export const stylelint = () => {
  return gulp.src(path.target.css)
    .pipe(gulpStylelint({
      reporters: [{ formatter: 'string', console: true }]
    }))
}

export const lint = gulp.series(eslint, stylelint)

/**
 * css: Compile scss to css
 * 対象：path.target.cssFile
 * scssをコンパイルしてcssへ書き出します。
 * 1. パターンマッチでファイルをimport ※アンダーバー付きファイルを除外
 * 2. scssソースマップを出力
 * 3. ベンダープレフィックスを付与
 * 4. *.bundle.css名でcssフォルダへ書き出し
 * 5. distモードの場合は、圧縮してdistフォルダへ出力
 */
export const css = () => {
  return gulp.src(path.target.cssFile)
    .pipe(gulpSourcemaps.init())
    .pipe(gulpSassGlob({
      ignorePaths: ['**/_*.*']
    }))
    .pipe(gulpSass({ outputStyle: 'expanded' }).on('error', gulpSass.logError))
    .pipe(gulpPostcss([
      autoprefixer({ grid: 'autoplace' }),
    ]))
    .pipe(gulpSourcemaps.write())
    .pipe(gulpRename({ suffix: '.bundle' }))
    .pipe(gulpIf(mode.development, gulp.dest(path.css)))
    .pipe(gulpIf(mode.dist, gulpCleanCSS({
      format: 'keep-breaks'
    })))
    .pipe(gulpIf(mode.dist, gulp.dest(path.dist.css)))
}

/**
 * js: Compile js to es2015
 * 対象：path.target.js
 * 1. es20xx をes2015へ書き出す
 * 2。*.bundle.js名でjsフォルダへ書き出し
 * 3. distモードの場合は、圧縮してdistフォルダへ出力
 */
export const js = () => {
  const modeName = mode.development ? 'development' : 'production'
  return gulp.src(path.target.jsFile)
    .pipe(
      webpackStream({
        mode: modeName,
        entry: {
          app: path.target.jsFile
        },
        output: {
          filename: '[name].bundle.js'
        },
        module: {
          rules: [
            {
              test: /\.js$/,
              exclude: /node_modules/,
              use: ['babel-loader'],
            }
          ]
        },
      }, webpack)
    )
    .pipe(gulpIf(mode.development, gulp.dest(path.js)))
    .pipe(gulpIf(mode.dist, gulp.dest(path.dist.js)))
}

/**
 * dist
 * 対象：path.dist
 * 1. distディレクトリを削除
 * 2. srcディレクトリをdistへコピー
 * 3. gulpTaskのcss、jsを実行
 */
const removeDistDir = () => {
  return del(path.dist.dir)
}
export const copy = () => {
  return gulp.src(path.target.dist)
    .pipe(gulp.dest(path.dist.dir))
}
export const dist = gulp.series(removeDistDir, copy, css, js)

/**
 * sync
 * 対象：settings.port / settings.srcDir
 * phpサーバーを立ち上げ、ブラウザと連携
 *
 * disconnect
 * 対象：settings.port
 * sync終了後もportが閉じない場合に利用
 */
export const sync = (done) => {
  gulpConnect.server({
    port: settings.port,
    base: settings.srcDir,
  }, () => {
    browserSync.init({
      proxy: `localhost:${settings.port}`
    })
  })
  done()
}
export const disconnect = (done) => {
  console.log('port disConnected')
  gulpConnect.closeServer()
  done()
}

/**
 * watch
 * 対象：settings.srcDir
 * ファイル更新を検知して、ブラウザを更新
 */
// watch
const reload = (done) => {
  browserSync.reload()
  done()
}
const watch = () => {
  gulp.watch(path.target.php, reload)
  gulp.watch(path.target.css, gulp.series(stylelint, css, reload))
  gulp.watch(path.target.js, gulp.series(eslint, js, reload))
}

export default gulp.series(sync, watch, disconnect)

// deploy
/**
 * deploy & browserOpen
 * settingsで指定したサーバーへdistデーターをデプロイ
 * デプロイ後、該当のページをブラウザで開く
 */
const ftpDeploy = new FtpDeploy()
const deployRoot = settings.deployRoot + settings.deployDir
const deployUrl = settings.deployUrl + settings.deployDir
const issueNum = settings.issue
const remoteRoot = issueNum ? deployRoot + '_' + issueNum : deployRoot
const openUrl = issueNum ? deployUrl + '_' + issueNum : deployUrl
const upload = (done) => {
  const config = {
    user: settings.ftpUser,
    password: settings.ftpPassword,
    host: settings.ftpHost,
    port: settings.ftpPort,
    localRoot: path.dist.dir,
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
export const openWindow = (done) => {
  open(openUrl)
  done()
}
export const deploy = gulp.series(removeDistDir, copy, css, js, upload, openWindow)
