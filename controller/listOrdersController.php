<?php
require_once '../model/UserShop.php';
require_once '../model/Product.php';
require_once '../model/Cart.php';
require_once '../model/LineCart.php';
require_once '../model/Order.php';
if (session_status() === PHP_SESSION_NONE) session_start();

header('Location: ../view/orders.php');

?>