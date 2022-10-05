<?php
require_once '../model/UserShop.php';
require_once '../model/Order.php';
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
        <h1>Orders</h1>
        <tr>
            <th>Client</th>
            <th>Date</th>
            <th>Total Paid</th>
        </tr>

        <?php
        //
        //        echo "<pre>";
        //        print_r($_SESSION['orders']);
        //        echo "</pre>";

        ?>

        <?php
        $total = 0;
        foreach ($_SESSION['orders'] as $order) { ?>
            <tr>
                <td><?= $order->getUser()->getEmail(); ?></td>
                <td><?= $order->getDataOrder()->format("d/m/y - (H:m:s)"); ?></td>
                <td><?= $order->getTotal(); ?>€</td>
            </tr>
            <?php
            $total += $order->getTotal();
        } ?>


        <td></td>
        <td style="color: red;">TOTAL</td>
        <td style="color: red;"><?= $total ?>€</td>
    </table>
</div>
</body>
</html>