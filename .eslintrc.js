module.exports = {
  root: true,
  env: {
    browser: true,
    node: true
  },
  globals: { "_": true },
  extends: [
    'standard'
  ],
  // add your custom rules here
  rules: {
    // ↓末尾のセミコロンを許容する。
    'comma-dangle': ['error', 'only-multiline'],
    // ↓空白行に対してwarnのみ出るようにする。
    'no-multiple-empty-lines': ['warn', {max: 1}]
  }
}