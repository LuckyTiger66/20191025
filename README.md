# 來去台北住一晚-OK旅館

## 項目背景
使用Ajax接台北旅館的openData，但因為原址已經失效，所以改放在資料庫用php連結。
* 依據台北市行政區分類
![](https://i.imgur.com/HuuZ7Kq.png)
* 可以返回上一頁或點擊開啟google地圖
![](https://i.imgur.com/CDxwdEA.png)

## 安裝
1. 使用XAMPP等整合架站軟體，設定環境
2. 放進XAMPP對應目錄htdocs中
可參考[架PHP專案執行環境](https://ithelp.ithome.com.tw/articles/10216841)

### 資料庫的部分
1. 匯入sql檔案裡面的資料表
2. 修改dbtool.inc.php
```php=
<!-- 更改本地資料庫登入的帳號密碼 -->
$username = "admin";
$password = "123456";
```
3. 修改20191023-hotel-api.php
```php=
<!-- hoteldata改成你的資料庫名稱 -->
$sql = "SELECT * FROM hoteldata";
```
## 開啟方式
網址可用localhost開啟，來避免ip連線造成的問題

## 使用平台與技術
![](https://i.imgur.com/n6qQFfu.png)
