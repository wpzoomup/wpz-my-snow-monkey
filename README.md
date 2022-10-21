# WPZ My Snow Monkey

Snow Monkey 用カスタマイズコードを管理するプラグインです。

## 定数

下記の定数が利用可能です。

### MY_SNOW_MONKEY_URL

WPZ My Snow Monkey プラグインディレクトリへの URL

### MY_SNOW_MONKEY_PATH

WPZ My Snow Monkey プラグインディレクトリへの ファイルパス


## 機能ごとにファイルを分割管理

### functions ディレクトリ

/functions ディレクトリの中にある php file は、自動的に読み込まれます。
その際、ファイル名がアンダースコアで始まるもの（例：_example.php）は、読み込まれません。
Snow Monkey に依存しないコードは、こちらのディレクトリに配置します。

### snow-monkey ディレクトリ

/snow-monkey ディレクトリの中にある php file は、自動的に読み込まれます。
その際、ファイル名がアンダースコアで始まるもの（例：_example.php）は、読み込まれません。
Snow Monkey に依存するコードは、こちらのディレクトリに配置します。


## 謝辞

このプラグインは キタジマタカシさん（[@inc2734]( https://twitter.com/inc2734 )）が作成されたMy Snow Monkey (v0.2.1)を使用して作成しました。
