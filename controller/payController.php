<?php
require_once '../model/UserShop.php';
require_once '../model/Product.php';
require_once '../model/Cart.php';
require_once '../model/LineCart.php';
require_once '../model/Order.php';
if (session_status() === PHP_SESSION_NONE) session_start();


//foreach ($_SESSION['userShop'] as $user) {
//    if ($_SESSION['usuariLogejat'] === $user) {

$order = new Order($_SESSION['usuariLogejat'], $_GET['total']);
$_SESSION['orders'][] = $order;
$_SESSION['usuariLogejat']->setCart(new Cart());
$_SESSION['payment'] = "Successful payment";

//        break;
//    }
//}

header('Location: ../view/products.php');

?>