<?php


    require_once './Models/Pet.php';
    require_once './Models/Products.php';

    $pets = [
        $cats = new Pet('Cats', 'fa-solid fa-cat'),
        $dogs = new Pet('Dogs', '"fa-solid fa-dog')
    ];

    var_dump($dogs);
    var_dump($cats);

?>