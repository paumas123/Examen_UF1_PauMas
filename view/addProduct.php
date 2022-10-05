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
    <link rel="stylesheet" href="css/form.css">
    <title>Sign In</title>
</head>
<body>
<?php include 'template/navbar.php';?>

<div class="content">
    <form action="../controller/addProductController.php" method="post">
        <h3>New Product</h3>
        <table>
            <tr>
                <th>
                    <label for="idInputRef">Id Product</label>
                </th>
                <th>
                    <input type="text" name="ref" id="idInputRef">
                </th>

            </tr>
            <tr>
                <th>
                    <label for="idInputDesc">Description</label>
                </th>
                <th>
                    <input type="text" name="desc" id="idInputDesc">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="idInputPrice">Price (€/Kg)</label>
                </th>
                <th>
                    <input type="number" step="0.01" name="price" id="idInputPrice">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="idInputFileName">File Name</label>
                </th>
                <th>
                    <input type="text" name="fileName" id="idInputFileName">
                </th>
            </tr>

        </table>
        <div class="buttons">
            <input type="submit" name="formAddProduct" value="Add">
            <input type="reset" value="Reset">
        </div>
        <p style="color: red">*Is not necessary check form fields.</p>
    </form>
</div>
<p style="text-align: center">kiwi,melo,nectarina,pera,platan,poma,pressec,pruna,raim,sindria,taronja</p>
</body>
</html>


