<?php
require_once '../model/UserShop.php';
require_once '../model/Product.php';
require_once '../model/Cart.php';
require_once '../model/LineCart.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_POST['cartForm'])) {
    header('Location: /view/addProduct.php');
    die();
}

//$_SESSION['cart'] = new Cart();
foreach ($_SESSION['userShop'] as $user) {
    if ($_SESSION['usuariLogejat'] === $user) {
        $user->getCart()->addLinia(new LineCart($_POST['units'], $_SESSION['products'][$_POST['ref']]));
        $_SESSION['usuariLogejat'] = $user;
        break;
    }
}
//echo gettype($_SESSION['usuariLogejat']->getCart()->getLinies()[0]->getProduct());


    header('Location: ../view/products.php');

    ?>