<?php
include "IShoppingCart.php";

abstract class ShoppingCart implements IShoppingCart
{
    protected  $shoppingcart = array();

    public function addToCart(Item $item)
    {
        $this->shoppingcart[] = $item;
    }
    public abstract function printCart();
}