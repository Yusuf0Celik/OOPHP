<?php
include "classes/ShoppingCart/Item.php";
include "classes/ShoppingCart/MyShoppingCart.php";
$item1 = new Item("1", "Toshiba", "Satellite", 999.99, 10);
$item2 = new Item("2", "Acer", "Aspire", 1099.99, 7);
$item3 = new Item("3", "HP", "Pavilion", 799.99, 3);

$myShoppingcart = new MyShoppingCart();
$myShoppingcart->addToCart($item1);
$myShoppingcart->addToCart($item2);
$myShoppingcart->addToCart($item3);
$myShoppingcart->printCart();
