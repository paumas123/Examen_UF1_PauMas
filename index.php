<?php
require_once 'model/UserShop.php';
require_once 'model/Product.php';
if (session_status() === PHP_SESSION_NONE) session_start();

unset($_SESSION['usuariLogejat']);

$_SESSION['userShop'] = [];
$_SESSION['userShop'][] = new UserShop('admin@cirvianum.cat', '1234', 'admin', '2002-11-12');

$_SESSION['products'] = [];
$_SESSION['products'][] = new Product('1', 'Pera de Lleida', '5.32', 'pera');
$_SESSION['products'][] = new Product('2', 'Plàtan de Canàries', '3.49', 'platan');
$_SESSION['products'][] = new Product('3', 'Kiwi Verd', '9.38', 'kiwi');
$_SESSION['products'][] = new Product('4', 'Taronja Valenciana', '1.54', 'taronja');

$_SESSION['orders'] = [];

header('Location: view/home.php');
?>