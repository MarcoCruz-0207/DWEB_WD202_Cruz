<?php
declare(strict_types = 1);

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

// 2. Multidimensional array of products 
$candy = [
    'Toffee'      => ['price' => 50.00, 'stock' => 10],
    'Mints'       => ['price' => 30.00, 'stock' => 20],
    'Fudge'       => ['price' => 40.00, 'stock' => 4],
    'Chocolate'   => ['price' => 65.00, 'stock' => 15],
    'Licorice'    => ['price' => 35.00, 'stock' => 5],
    'Jelly Beans' => ['price' => 45.00, 'stock' => 20],
];

// 3. Global variable for tax rate 
$tax = 12;

// 4 & 5. Function to check if stock needs reordering using a ternary operator
function get_reorder_message(int $stock): string
{
    return ($stock < 10) ? 'Yes' : 'No';
}

// 6 & 7. Function to calculate total stock value
function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

// 8 & 9. Function to calculate total tax due
function get_tax_due(float $price, int $quantity, int $tax = 0): float
{
    return ($price * $quantity) * ($tax / 100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Candy Store - Stock Control</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2><?php echo $greeting; ?></h2>
    <p>The cost of your candy is Php <?php echo $price; ?> per pack.</p>

    <h2>Stock Control</h2>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Re-order</th>
                <th>Total Value</th>
                <th>Tax Due</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($candy as $product_name => $data) { ?>
                <tr>
                    <td><?= $product_name ?></td>
                    <td><?= $data['stock'] ?></td>
                    <td><?= get_reorder_message($data['stock']) ?></td>
                    <td>Php <?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
                    <td>Php <?= number_format(get_tax_due($data['price'], $data['stock'], $tax), 2) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

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
        <p><?php echo $offer['name']; ?> - Php <?php echo $offer['price']; ?></p>
    <?php } ?>
</body>
</html>