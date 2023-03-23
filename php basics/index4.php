<?php 

$ninjas = ['don', 'ryu', 'jay'];

 //for($i = 0; $i < count($ninjas); $i++){
 //   echo $ninjas[$i] . '<br/>';
 //} 

// foreach($ninjas as $ninja){
//    echo $ninja . '<br/>';
// } 

 $products = [
    ['name' => 'shiny bleak', 'price' => 20],
    ['name' => 'dull star', 'price' => 200],
    ['name' => 'gold shell', 'price' => 1020],
    ['name' => 'lightning bolt', 'price' => 2100],
    ['name' => 'banana peel', 'price' => 10],
 ]; 

// foreach($products as $product){
//    echo $product['name'] . ' - '. $product['price'];
//    echo '<br />';
// }

 $i = 0;

 while($i < count($products)){
    echo $products[$i]['name'];
    echo '<br />';
    $i++;

 } 

?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <title>PHP Tutorials</title>
</head>
<body> 
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){ ?>
        <h3><?php echo $product['name']; ?></h3>
        <p>$<?php echo $product['price']; ?></p>
        <?php } ?> 
    </ul>
    
</body>
</html>