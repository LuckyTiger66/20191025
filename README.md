# 來去台北住一晚-OK旅館

## 項目背景
使用Ajax接台北旅館的openData，但因為原址已經失效，所以改放在資料庫用php連結。
* 依據台北市行政區分類
![](https://i.imgur.com/HuuZ7Kq.png)
* 可以返回上一頁或點擊開啟google地圖
![](https://i.imgur.com/CDxwdEA.png)

## 安裝
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

## 使用平台與技術
![](https://i.imgur.com/n6qQFfu.png)
