<?php

namespace Winkelmand;

class Item
{
    private $book;
    private $author;
    private $price;

    public function __construct(string $book, string $author, float $price)
    {
        $this->book = $book;
        $this->author = $author;
        $this->price = $price;
    }

    public function __destruct()
    {
        echo "<br> $this->book wordt verwijderd.";
    }

    public function getTitle()
    {
        return $this->book;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPrice()
    {
        return $this->price;
    }
}