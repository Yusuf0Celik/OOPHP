<?php

class ParentClass
{
    public $voornaam;
    public $achternaam = "Delmar";
    private $creditcard = "Visa";

    function __construct(string $voornaam) {
        $this->voornaam = $voornaam;
    }

    function getAchternaam(string $achternaam)
    {
        $this->achternaam = $achternaam;
        return $this->achternaam;
    }

}