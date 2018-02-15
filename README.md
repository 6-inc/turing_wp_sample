# WPサイトの学習サンプル

## 準備

テーマを作る前の準備

### ワードプレスをMAMPにインストール

1. MAMP起動
2. データベース作成
3. ディレクトリ作成
4. WPインストール

### ブランクテーマsageをインストール

1. composerを入れておく
2. nodejsを入れておく
3. npmとbowerをグローバルに入れておく
4. sageをインストールする
5. npm install
6. bower install
7. assets/manifest.jsonを編集
8. gulp
9. サンプルポストを入れる（https://github.com/jawordpressorg/theme-test-data-ja）

## コーディング

### _variable.scssにて変数の上書き

### 背景画像の設定ともろもろの設定

1. 画像をassets/imagesに入れる
2. gulp
3. gulp watch
4. _variables.scssの$body-colorを編集

### ヘッダーを作る

1. tamplates/headerのcontainerクラスを外し全幅表示に
2. サイトタイトルのaタグにクラスをつける。
3. 