<nav class="navbar"
     style="background-color: #444; display: flex; justify-content: space-between; padding: 10px 10px; color: azure;">
    <div class="topLeft" style="font-size: 1.4em;">
        <img src="assets/svg/logo.svg" style="vertical-align: middle;  " alt="" width="24" height="24"/> Fruit Store
        Cirviànum
    </div>

    <div class="topRight"
         style="width: 40%; display: flex; justify-content: space-between; align-items: center; font-size: 1.2em; color: azure">
        <a style="text-decoration: none; color: azure" href="/view/home.php">Home</a>

        <?php if (!isset($_SESSION['usuariLogejat'])) { ?>
            <a style="text-decoration: none; color: azure; margin: 0px 3px;" href="../controller/signUpController.php">Signup</a>
            <a style="text-decoration: none; color: azure; margin: 0px 3px;" href="../controller/signInController.php">Login</a>
        <?php } ?>

        <?php if (isset($_SESSION['usuariLogejat'])) { ?>
            <a style="text-decoration: none; color: azure; margin: 0px 3px;"
               href="../controller/listProductsController.php"> Shop </a>
            <a style="text-decoration: none; color: azure; margin: 0px 3px;"
               href="">(<?= $_SESSION['usuariLogejat']->getEmail(); ?>)</a>
            <a style="text-decoration: none; color: azure; margin: 0px 3px;" href="../controller/signOutController.php">LogOut</a>

            <?php if ($_SESSION['usuariLogejat']->getEmail() === 'admin@cirvianum.cat') { ?>
                <a style="text-decoration: none; color: azure; margin: 0px 3px;"
                   href="../controller/listUsersController.php">Users</a>
                <a style="text-decoration: none; color: azure; margin: 0px 3px;"
                   href="../controller/addProductController.php">+Product</a>
                <a style="text-decoration: none; color: azure; margin: 0px 3px;"
                   href="../controller/listOrdersController.php">Orders</a>
            <?php } ?>
            <a href="../controller/listCartController.php?email=<?= $_SESSION['usuariLogejat']->getEmail(); ?>">
                <div class="cart"
                     style="position:relative; width: 24px; height: 24px; display: inline-block; margin: 0px 3px;">
                    <img style="position: absolute; vertical-align:middle; width: 100%;height: 100%;"
                         src="assets/img/cart.jpeg" alt="">
                    <span style="font-weight: bold; position: absolute; top: -8px; right: -8px; font-size: 0.5em; border: solid 1px chartreuse; background-color: blue; color: white; padding: 2px 4px; border-radius: 50%"><?= count($_SESSION['usuariLogejat']->getCart()->getLinies()); ?></span>
                </div>
            </a>
        <?php } ?>
    </div>
</nav>