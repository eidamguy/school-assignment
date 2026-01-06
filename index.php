<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include 'fruit/fruit_condition.php';
include 'fruit/fruit.php';
include 'fruit/banana.php';
include 'fruit/apple.php';

include 'shopping_cart.php';


function main(){

    $cart = new Shopping_cart();

    $cart->add_object(new Banana(100, Fruit_condition::UNRIPE));
    $cart->add_object(new Banana(120, Fruit_condition::RIPE));
    $cart->add_object(new Apple(70, Fruit_condition::ROTTEN));
    $cart->add_object(new Apple(50, Fruit_condition::OVERRIPE));

    echo('total weight of shopping cart = '.$cart->weight_g.' grams <br><br>');
    echo('total price of fruits = '.$cart->price.' Kč <br><br>');
    $cart->echo_contents();
}

main();

?>

</body>
</html>