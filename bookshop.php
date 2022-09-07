<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>
</head>
<body>
<?php
    include 'classes/Winkelmand/Item.php';
    include 'classes/Winkelmand/MyShoppingcart.php';

    $book1 = new Winkelmand\Item("Lion King", "brother banks", 39.99);

    $myShoppingcart = new \Winkelmand\MyShoppingCart();
    $myShoppingcart->addToCart($book1);
    $myShoppingcart->printCart();
?>
</body>
</html>