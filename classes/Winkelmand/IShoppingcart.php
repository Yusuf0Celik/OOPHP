<?php

namespace Winkelmand;

interface IShoppingcart
{
    public function addToCart(Item $item);
    public function printCart();
}