<?php
include "ShoppingCart.php";

class MyShoppingCart extends ShoppingCart
{
    public function printCart()
    {
        echo sprintf("%-10s %-20s %.10f %6s <br>",
            "product", "description", "Price", "Amount");

        foreach ($this->shoppingcart as $item) {
            echo sprintf("%-10s %-20s %.10f %6s <br>",
                $item->getId(), $item->getDescription(), $item->getPrice(), $item->getAmount());
        }
    }
}