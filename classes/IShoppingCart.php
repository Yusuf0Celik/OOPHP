<?php
include "IShoppingCart.php";

interface IShoppingCart
{
    public function addToCart(Item $item);
    public function printCart();
}