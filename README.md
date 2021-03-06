# 來去台北住一晚 -OK 旅館

## 項目背景
使用 Ajax 接台北旅館的 openData，但因為原址已經失效，所以改放在資料庫用 php 連結。
* 依據台北市行政區分類
![](https://i.imgur.com/HuuZ7Kq.png)
* 可以返回上一頁或點擊開啟 google 地圖
![](https://i.imgur.com/CDxwdEA.png)

## 安裝
1. 使用 XAMPP 整合架站軟體，設定環境
2. 放進 XAMPP 對應目錄htdocs中
可參考[架 PHP 專案執行環境](https://ithelp.ithome.com.tw/articles/10216841)

### 資料庫的部分
1. 資料庫預設為 hotel
可在 20191023-hotel-api.php 修改
```php=
<!-- 更改資料庫預設名稱 -->
$result = execute_sql($link, "hotel", $sql);
```
2. 匯入 sql 檔案裡面的資料表到 hotel 資料庫
3. 修改 dbtool.inc.php
```php=
<!-- 更改本地資料庫登入的帳號密碼 -->
$username = "admin";
$password = "123456";
```
## 開啟方式
網址可用 localhost 開啟，來避免 ip 連線造成的問題

## 使用平台與技術
![](https://i.imgur.com/n6qQFfu.png)
