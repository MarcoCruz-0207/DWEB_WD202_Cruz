<?php
$prefix = 'Thank you';
$name   = 'Marco';
$message = "$prefix $name";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>String Operator</title>
        <link rel="stylesheet" href="BasicPHP1/css/styles.css">
    </head>
<body>
    <h1>The Candy Store</h1>
    <h2><?= $name ?>'s Order</h2>
    <p><?= $message ?></p>
</body>
</html>