# NovaexchangePHPAPI

暗号通貨取引所 __NOVAEXCHANGE__ のPHPライブラリです。  
~~TwitterBOTに必要になったため作ってみましたがただのHTTPアクセスと変わりません~~  

# はじめに
__NovaExChangeが閉鎖するとかでそのうち使えなくなる可能性は大です__  
[詳しくはNewsを見てね](https://novaexchange.com/news/)  
その為新規登録ができない→privateAPIが使えない→どうしろと?となっています

# 必要なもの
 - cURL

# 使い方
まず最初にこのライブラリを読み込んでください  
`require 'NovaexchangePHPAPI.php';`

ほしいところで  
`$obj = NovaExChange::publicAPI('market/info/BTC_SAYA');`  
のように書いてください(SAYACOINの情報を得る例)

## 戻り値
JSONがデコードされた状態が返されます  
内容は公式を参照してください

# PublicAPI
APIKEYなどは必要ありません
```PHP
//SAYACOINの情報を得る
$marketSAYA = NovaExChange::publicAPI('market/info/BTC_SAYA');
```

# PrivateAPI
現在未対応  
時間があれば作ろうと思います(色んな意味で)

# 公式ドキュメント
以下を参照お願いします(Pythonの例も載っていました)  
[Novaexchange API](https://novaexchange.com/remote/faq/)

# ライセンス等
MIT
