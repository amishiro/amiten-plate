/**
 * use...
 * % npm run dev = 更新を検知して自動でブラウザを更新
 * % npm run css = scssをcssへ書き出し
 * % npm run js = es20xxをes2015へ後方互換
 * % npm run dist = 納品用に整形して書き出し
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
import path from 'path'
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
import gulpPostcss from 'gulp-postcss'
import gulpSassGlob from 'gulp-sass-glob'
import gulpSourcemaps from 'gulp-sourcemaps'
import gulpRename from 'gulp-rename'
import autoprefixer from 'autoprefixer'
import gulpCleanCSS from 'gulp-clean-css'
// Compile js to es2015
import webpack from 'webpack'
import webpackStream from 'webpack-stream'
import VueLoaderPlugin from 'vue-loader/lib/plugin'
// dist
import del from 'del'
// deploy & .env
import FtpDeploy from 'ftp-deploy'
import open from 'open'
import dotenv from 'dotenv'
dotenv.config()

// gulpSassのみしてによりrequireで読み込み
const gulpSass = require('gulp-sass')(require('sass'))

/**
 * env settings
 * sync用ポート番号を初め、各種パラメーターを設定します。
 * minimistを利用して、gulp実行時にオプションを渡します。
 * dotenvを利用して、process.envにデーターを渡します。
 */
class EnvSettings {
  constructor() {
    // proxyのport設定
    this.port = process.env.PORT || 8080
    // proxyのhost設定
    this.host = process.env.HOST || 'localhost'
    // srcファイルの格納ディレクトリ
    this.srcDir = process.env.SRC_DIR || './src/'
    // 書き出し先のディレクトリ
    this.distDir = process.env.DIST_DIR || './dist/'
    // windowsまたはphpのバージョンを指定したい場合はpathを指定
    this.phpPath = process.env.PHP_PATH || 'php'
    // deploy先のディレクトリを指定
    this.deployDir = process.env.DEPLOY_DIR || 'test'
    // deploy先のディレクトリへissue番号をつけてたい場合にissue番号を記載
    this.issue = process.env.ISSUE || null
    // deploy先のURLを指定
    this.deployUrl =
      process.env.DEPLOY_URL || 'https://xxxxx.aws-testserver.com/'
    // deploy先のドキュメントルートを指定
    this.deployRoot = process.env.DEPLOY_ROOT || '/var/www/html/xxxxx/'
    // 以下deploy先のFTP情報
    this.ftpUser = process.env.FTP_USER || null
    this.ftpPassword = process.env.FTP_PASS || null
    this.ftpHost = process.env.FTP_HOST || null
    this.ftpPort = process.env.FTP_PORT || null
  }
}
const settings = new EnvSettings()

// setting update
const argv = minimist(process.argv.slice(2))
for (const key in argv) {
  key === 'i' ? (settings.issue = argv[key]) : (settings[key] = argv[key])
}
console.log('settings: ', settings)

/**
 * set mode
 * 実行モードを設定 ※通常は変更の必要はありません。
 */
const mode = {
  development: true,
  production: false,
  dist: false
}
// mode update
if (settings._.indexOf('dist') >= 0 || settings.dist) {
  mode.development = false
  mode.production = true
  mode.dist = true
}
// env set
if (mode.development) process.env.NODE_ENV = mode.development
console.log('mode:', mode)

/**
 * set paths
 * 各種パスを指定 ※通常は変更の必要はありません。
 */
const paths = {
  js: settings.srcDir + 'assets/js/',
  css: settings.srcDir + 'assets/css/',
  target: {
    php: settings.srcDir + '**/*.php',
    css: settings.srcDir + 'assets/_css/**/*.scss',
    cssFile: settings.srcDir + 'assets/_css/app.scss',
    js: [
      settings.srcDir + 'assets/_js/**/*.js',
      settings.srcDir + 'assets/_js/**/*.vue',
      settings.srcDir + 'assets/_components/**/*.js',
      settings.srcDir + 'assets/_components/**/*.vue'
    ],
    jsFiles: {
      app: settings.srcDir + 'assets/_js/app.js',
      form: settings.srcDir + 'assets/_js/form.js'
    },
    dist: [
      settings.srcDir + '**/*',
      '!' + settings.srcDir + '**/_**',
      '!' + settings.srcDir + '**/_**/**/*',
      '!' + settings.srcDir + '**/_*'
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
 * 対象: paths.target.js
 * 作業中ターミナルへeslintErrorを出力
 * etc: npm run lint:js でeslintErrorを出力
 * etc: npm run lint:js -- --fix でeslintErrorを修正
 */
export const eslint = () => {
  return gulp
    .src(paths.target.js)
    .pipe(gulpEslint())
    .pipe(gulpEslint.format())
}

/**
 * stylelint: stylelint with stylelint-config-standard-scss & order
 * 対象: paths.target.css
 * 作業中ターミナルへstylelintErrorを出力
 * etc: npm run lint:css でstylelintErrorを出力
 * etc: npm run lint:css -- --fix でstylelintErrorを修正
 */
export const stylelint = () => {
  return gulp.src(paths.target.css).pipe(
    gulpStylelint({
      reporters: [{ formatter: 'string', console: true }]
    })
  )
}

export const lint = gulp.series(eslint, stylelint)

/**
 * css: Compile scss to css
 * 対象：paths.target.cssFile
 * scssをコンパイルしてcssへ書き出します。
 * 1. パターンマッチでファイルをimport ※アンダーバー付きファイルを除外
 * 2. scssソースマップを出力
 * 3. ベンダープレフィックスを付与
 * 4. *.bundle.css名でcssフォルダへ書き出し
 * 5. distモードの場合は、圧縮してdistフォルダへ出力
 */
export const css = () => {
  return gulp
    .src(paths.target.cssFile)
    .pipe(gulpSourcemaps.init())
    .pipe(
      gulpSassGlob({
        ignorePathss: ['**/_*.*']
      })
    )
    .pipe(gulpSass({ outputStyle: 'expanded' }).on('error', gulpSass.logError))
    .pipe(gulpPostcss([autoprefixer({ grid: 'autoplace' })]))
    .pipe(gulpSourcemaps.write())
    .pipe(gulpRename({ suffix: '.bundle' }))
    .pipe(gulpIf(mode.development, gulp.dest(paths.css)))
    .pipe(
      gulpIf(
        mode.dist,
        gulpCleanCSS({
          format: 'keep-breaks'
        })
      )
    )
    .pipe(gulpIf(mode.dist, gulp.dest(paths.dist.css)))
}

/**
 * js: Compile js to es2015
 * 対象：paths.target.js
 * 1. es20xx をes2015へ書き出す
 * 2。*.bundle.js名でjsフォルダへ書き出し
 * 3. distモードの場合は、圧縮してdistフォルダへ出力
 */
export const js = () => {
  const modeName = mode.development ? 'development' : 'production'
  return webpackStream(
    {
      mode: modeName,
      entry: paths.target.jsFiles,
      output: {
        filename: '[name].bundle.js'
      },
      optimization: {
        // 2回以上利用している共通箇所を切り出して出力
        // Docs: https://webpack.js.org/plugins/split-chunks-plugin/
        splitChunks: {
          cacheGroups: {
            // 2回以上利用しているnode_moduleをまとめる
            vendor: {
              test: /node_modules/,
              name: 'vendor',
              chunks: 'initial',
              minChunks: 2,
              enforce: true
            },
            components: {
              // 2回以上利用しているコンポーネントをまとめる
              test: /src\/assets\/_js\/components/,
              name: 'components',
              chunks: 'initial',
              minChunks: 2,
              enforce: true
            }
          }
        }
      },
      module: {
        rules: [
          // vue-loaderセッティング
          // doc: https://github.com/shakacode/sass-resources-loader#example-of-webpack-4-config-for-vue
          {
            test: /\.vue$/,
            use: 'vue-loader'
          },
          {
            test: /\.css$/,
            use: [
              { loader: 'vue-style-loader' },
              { loader: 'css-loader', options: { sourceMap: true } }
            ]
          },
          {
            test: /\.scss$/,
            use: [
              { loader: 'vue-style-loader' },
              { loader: 'css-loader', options: { sourceMap: true } },
              { loader: 'sass-loader', options: { sourceMap: true } },
              {
                loader: 'sass-resources-loader',
                options: {
                  sourceMap: true,
                  resources: [
                    path.resolve(
                      __dirname,
                      'src/assets/_css/settings/variables.scss'
                    ),
                    path.resolve(
                      __dirname,
                      'src/assets/_css/settings/mixins.scss'
                    )
                  ]
                }
              }
            ]
          },

          {
            test: /\.js$/,
            exclude: /node_modules/,
            use: ['babel-loader']
          }
        ]
      },
      resolve: {
        extensions: ['.js', '.vue'],
        alias: {
          // vue-template-compilerに読ませてコンパイルするために必要
          vue$: 'vue/dist/vue.esm.js'
        }
      },
      plugins: [new VueLoaderPlugin()]
    },
    webpack
  )
    .pipe(gulpIf(mode.development, gulp.dest(paths.js)))
    .pipe(gulpIf(mode.dist, gulp.dest(paths.dist.js)))
}

/**
 * dist
 * 対象：paths.dist
 * 1. distディレクトリを削除
 * 2. srcディレクトリをdistへコピー
 * 3. gulpTaskのcss、jsを実行
 */
const removeDistDir = () => {
  return del(paths.dist.dir)
}
export const copy = () => {
  return gulp.src(paths.target.dist).pipe(gulp.dest(paths.dist.dir))
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
export const sync = done => {
  gulpConnect.server(
    {
      port: settings.port,
      base: settings.srcDir,
      stdio: 'ignore',
      bin: settings.phpPath
    },
    () => {
      browserSync.init({
        proxy: `${settings.host}:${settings.port}`
      })
    }
  )
  done()
}
export const disconnect = done => {
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
const reload = done => {
  browserSync.reload()
  done()
}
const watch = () => {
  gulp.watch(paths.target.php, reload)
  gulp.watch(paths.target.css, gulp.series(stylelint, css, js, reload))
  gulp.watch(paths.target.js, gulp.series(eslint, js, reload))
}

export default gulp.series(sync, disconnect, watch)

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
const upload = done => {
  const config = {
    user: settings.ftpUser,
    password: settings.ftpPassword,
    host: settings.ftpHost,
    port: settings.ftpPort,
    localRoot: paths.dist.dir,
    remoteRoot: remoteRoot,
    include: ['**/*'],
    deleteRemote: false,
    forcePasv: false
  }
  ftpDeploy
    .deploy(config)
    .then(() => {
      console.log('ftp deploy finished')
      done()
    })
    .catch(err => {
      console.log(err)
      done()
    })
}
export const openWindow = done => {
  open(openUrl)
  done()
}
export const deploy = gulp.series(
  removeDistDir,
  copy,
  css,
  js,
  upload,
  openWindow
)
