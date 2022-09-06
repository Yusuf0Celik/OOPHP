<?php

class Item
{
    private $id;
    private $brand;
    private $model;
    private $price;
    private $amount;

    function __construct($id, $brand, $model, $price, $amount){
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->amount = $amount;
    }

    function __destruct()
    {
        echo "<br> $this->brand $this->model wordt verwijderd";
    }

    public function getId(){
        return $this->id;
    }

    public function getDescription(){
        return ($this->brand . " " . $this->model);
    }

    public function getPrice(){
        return $this->price;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }
}