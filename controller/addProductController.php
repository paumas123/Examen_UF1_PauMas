<?php
require_once '../model/UserShop.php';
require_once '../model/Product.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_POST['formAddProduct'])) {
    header('Location: /view/addProduct.php');
    die();
}


$_SESSION['products'][] = new Product($_POST['ref'], $_POST['desc'], $_POST['price'], $_POST['fileName']);

//echo "<pre>";
//print_r($_SESSION['products']);
//echo "</pre>";

header('Location: /view/products.php');

?>

