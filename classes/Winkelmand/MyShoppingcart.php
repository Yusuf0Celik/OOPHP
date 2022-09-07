<?php
namespace Winkelmand;

include "ShoppingCart.php";

class MyShoppingCart extends ShoppingCart
{
    public function printCart()
    {
        echo sprintf("%-10s %-20s %.10s <br>",
            "Book", "Author", "Price");
        $totalPrice = 0;

        foreach ($this->shoppingcart as $item) {
            echo sprintf("%-10s %-20s %.10s <br>",
                $item->getTitle(), $item->getAuthor(), number_format($item->getPrice(), 2));
            $totalPrice += $item->getPrice();
        }
        echo "<br>Total Price: ". number_format($totalPrice, 2) . " <br>";
    }
}