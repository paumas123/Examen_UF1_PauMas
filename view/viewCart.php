<?php
require_once '../model/UserShop.php';
require_once '../model/Product.php';
require_once '../model/Cart.php';
require_once '../model/LineCart.php';
if (session_status() === PHP_SESSION_NONE) session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cart.css">
    <title>Products</title>
</head>
<body>
<?php include 'template/navbar.php'; ?>

<div class="content" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <table>
        <h2>Cart</h2>

        <tr>
            <th></th>
            <th>Desc</th>
            <th>Price (€/Kg)</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>

        <?php
        $total = 0;
        foreach ($_SESSION['usuariLogejat']->getCart()->getLinies() as $cart) { ?>
            <tr>
                <td><img style="width: 75px; height: 75px;" src="assets/img/fruits/<?= $cart->getProduct()->getFileName(); ?>.jpeg" alt=""></td>
                <td><?= $cart->getProduct()->getDescription(); ?></td>
                <td><?= $cart->getProduct()->getPriceKg(); ?></td>
                <td><?= $cart->getQuantity(); ?></td>
                <td><?= $cart->getProduct()->getPriceKg() * $cart->getQuantity() ?>€</td>
            </tr>
            <?php
            $total += $cart->getProduct()->getPriceKg() * $cart->getQuantity();
        } ?>

        <td></td>
        <td></td>
        <td style="color: red;">TOTAL</td>
        <td style="color: red;"><?= $total ?>€</td>
        <td><a href="../controller/payController.php?email=<?= $_SESSION['usuariLogejat']->getEmail(); ?> && total=<?= $total ?>"><img src="assets/img/logo-paypal.png"
                                                                                     style="width: 80%" alt=""></a></td>
    </table>
</div>
</body>
</html>