<?php

require_once __DIR__ . './Models/Category.php';
require_once  __DIR__ . '/Models/Product.php';


//imposto le categorie;

$animal_cat = new Category("cat", "per i nostri amici baffuti");
$animal_dog = new Category("dog", "per i nostri amici codipendenti");


$prodotti = [

    new Product("ciotola", "...", "prezzo test", $animal_cat, "una semplice ciotola"),
    new Product("ciotola", "...", "prezzo test", $animal_dog, "una semplice ciotola"),
    new Product("ciotola", "...", "prezzo test", $animal_cat, "una semplice ciotola"),
    new Product("ciotola", "...", "prezzo test", $animal_dog, "una semplice ciotola")

];
