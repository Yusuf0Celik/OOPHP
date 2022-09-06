<?php
include "ShoppingCart.php";

class MyShoppingCart extends ShoppingCart
{
    public function printCart()
    {
        echo sprintf("%-10s %-20s %.10s %6s <br>",
            "Product", "Description", "Price", "Amount");
        $totalPrice = 0;

        foreach ($this->shoppingcart as $item) {
            echo sprintf("%-10s %-20s %.10s %6s <br>",
                $item->getId(), $item->getDescription(), number_format($item->getPrice(), 2), $item->getAmount());
            $totalPrice += $item->getAmount() * $item->getPrice();
        }
        echo "<br>Total Price: ". number_format($totalPrice, 2) . " <br>";
    }
}