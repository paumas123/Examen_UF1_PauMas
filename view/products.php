<?php
require_once '../model/UserShop.php';
require_once '../model/Product.php';
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/products.css">
    <title>Products</title>
</head>
<body>
<?php include 'template/navbar.php'; ?>

<div class="content">
    <h2 style="color:red; text-align: center"><?php if (isset($_SESSION['payment'])) echo $_SESSION['payment'];
        unset($_SESSION['payment']); ?></h2>
    <?php foreach ($_SESSION['products'] as $key => $product) { ?>
        <div class="product">
            <img class="foto" src="assets/img/fruits/<?= $product->getFileName(); ?>.jpeg" alt="">
            <div class="desc">
                <h3><?= $product->getDescription(); ?></h3>
                <h4>Price: <?= $product->getPriceKg() ?>€/Kg</h4>
            </div>
            <div class="buy">
                <form action="../controller/addToCartController.php" method="post" class="formAddCart">
                    <input type="hidden" name="ref" value="<?php echo $key ?>">
                    <label for="inputUnits">Units:</label>
                    <input type="number" name="units" id="inputUnits">
                    <input type="submit" name="cartForm" value="+Add">
                </form>
            </div>
        </div>
    <?php } ?>
</div>
</body>
</html>
