<?php
$items      = 10;
$cost       = '5';
$subtotal   = $cost * $items;
$tax        = ($subtotal / 100) * '20marco';
$total      = $subtotal + $tax;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Type Juggling</title>
        <link rel="stylesheet" href="BasicPHP1/css/styles.css">
    </head>
<body>
    <h1>Type Juggling Sample</h1>
    <p>INT: 10</p>
    <p>STRING: '5'</p>
    <p>int(10) x string('5')= <?= $subtotal ?></p>
    <p>(50 / 100) x '20marco'= <?= $tax ?></p>
    <p>ANSWER: <?= $total ?></p>
</body>
</html>