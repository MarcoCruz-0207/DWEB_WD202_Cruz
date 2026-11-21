<?php
$name = 'Marco';
$price = 2;
$name = 'Franco';

if ($name === 'Franco') {
    $greeting = 'Welcome back ' . $name;
} elseif ($name !== '') {
    $greeting = 'Welcome ' . $name;
} else {
    $greeting = 'Welcome Guest';
}

$nutrition = [
    'fat'   => 42,
    'sugar' => 60,
    'salt'  => 3.5, 
];
$nutrition['fat']     = 36;
$nutrition['fiber']   = 2.1;
$nutrition['protein'] = 7.3;

$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Licorice', 'Bubble gum', 'Toffee', 'Jelly beans',];

$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
    ['name' => 'Mints', 'price' => 3, 'stock' => 66,],
    ['name' => 'Fudge', 'price' => 4, 'stock' => 97,],
    ['name' => 'Chocolate', 'price' => 2, 'stock' => 83,],
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Variables and Arrays</title>
        <link rel="stylesheet" href="BasicPHP1/css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2><?php echo $greeting; ?></h2>
        <p>The cost of your candy is 
            $<?php echo $price; ?> per pack.</p>

        <h2>Nutrition (per 100g)</h2>
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
        <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
        <p>Protein: <?php echo $nutrition['protein']; ?>%</p>
        
        <h2>Best Sellers</h2>
        <ul>
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <li><?php echo $best_sellers[$i]; ?></li>
            <?php } ?>
        </ul>

        <h2>Offers</h2>
        <?php foreach ($offers as $offer) { ?>
            <p><?php echo $offer['name']; ?> - $<?php echo $offer['price']; ?></p>
        <?php } ?>
    </body>
</html>