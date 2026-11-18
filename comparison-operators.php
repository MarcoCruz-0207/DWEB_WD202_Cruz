<?php
$item   ='Chocolate';
$stock  = 8;
$wanted = 5;
$can_buy = ($wanted <= $stock);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Comparison Operator</title>
        <link rel="stylesheet" href="BasicPHP1/css/styles.css">
    </head>
<body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Item:    <?= $item ?></p>
    <p>Stock:    <?= $stock ?></p>
    <p>Wanted:    <?= $wanted ?></p>
    <p>Can buy:    <?= $can_buy ?></p>
</body>
</html>
