<?php
require_once '../model/UserShop.php';
if (session_status() === PHP_SESSION_NONE) session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>

<body>
<?php include 'template/navbar.php';?>

<div class="content" style="display: flex; justify-content: center">
    <img src="assets/img/fruitStore.jpg" alt="" width="50%" style="margin-top: 50px;">
</div>

</body>
</html>