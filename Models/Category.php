<?php

class Category
{

    public $animal;
    public $description;

    public function __construct($name, $description)
    {

        $this->animal = $name;
        $this->description = $description;
    }
}
