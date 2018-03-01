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
4. _global.scssにてbodyの背景を指定

### ヘッダーを作る

1. tamplates/headerのcontainerクラスを外し全幅表示に
2. サイトタイトルのaタグにbootstrapのクラスをつけて見た目を整える
3. メニューをbootstrapのクラスと_header.scssで整える

### トップページを作る

1. bg-fadedクラスを作る
2. front-page.phpを作る
3. スライドショーを作る
	1. flex slider を入れる http://flexslider.woothemes.com/
	2. $ bower install FlexSlider
	3. assets/manifest.json
	4. カスタム投稿"slider"を作る
	5. front-page.phpにスライドショーのループを作って当てはめる
4. ブログ投稿のループを作る