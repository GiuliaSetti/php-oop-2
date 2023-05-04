<?php

    require_once './Models/Product.php';
    require_once './Models/Food.php';
    require_once './Models/Toy.php';


    $foods = [
        new Food('Orijen Dog Small Breed', '9.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/271585/Orijen-Adult-Small-Breed.jpg?v=1769497911', 'dogs', 'Lorem Ipsum Dolor', 1234, 2, ['Chicken', 'Turkey']),
        new Food('Orijen Dog Small Breed', '9.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/271585/Orijen-Adult-Small-Breed.jpg?v=1769497911', 'dogs', 'Lorem Ipsum Dolor', 1234, 2, ['Chicken', 'Turkey']),
    ];

    var_dump($foods);

