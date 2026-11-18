<?php
$name = 'Marco';
$price = 2;
$name = 'Franco';
$nutrition = [
    'fat'   => 42,
    'sugar' => 60,
    'salt'  => 3.5, 
];
$nutrition['fat']   = 36;
$nutrition['fiber'] = 2.1;
$nutrition['protein'] = 7.3;

$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Licorice', 'Bubble gum', 'Toffee', 'Jelly beans',];

$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
    ['name' => 'Mints', 'price' => 3, 'stock' => 66,],
    ['name' => 'Fudge', 'price' => 4, 'stock' => 97,],
    ['name' => 'Chocolate', 'price' => 2, 'stock' => 83,],
]
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Variables and Arrays</title>
        <link rel="stylesheet" href="BasicPHP1/css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Welcome <?php echo $name; ?></h2>
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
            <li><?php echo $best_sellers[0]; ?></li>
            <li><?php echo $best_sellers[1]; ?></li>
            <li><?php echo $best_sellers[2]; ?></li>
            <li><?php echo $best_sellers[3]; ?></li>
            <li><?php echo $best_sellers[4]; ?></li>
        </ul>

        <h2>Offers</h2>
        <p><?php echo $offers[0]['name']; ?> -
        $<?php echo $offers[0]['price']; ?></p>
        <p><?php echo $offers[1]['name']; ?> -
        $<?php echo $offers[1]['price']; ?></p>
        <p><?php echo $offers[2]['name']; ?> -
        $<?php echo $offers[2]['price']; ?></p>
        <p><?php echo $offers[3]['name']; ?> -
        $<?php echo $offers[3]['price']; ?></p>
    </body>
</html>