<?php

    require_once './Models/Product.php';
    require_once './Models/Food.php';
    require_once './Models/Toy.php';
    require_once './Models/Accessory.php';


    $foods = [
        new Food('Orijen Dog Small Breed', 'dogs', '9.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/271585/Orijen-Adult-Small-Breed.jpg?v=1769497911',  'Lorem Ipsum Dolor', 1234, 2, ['Chicken', 'Turkey']),
        new Food('Orijen Dog Small Breed', 'dogs', '9.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/271585/Orijen-Adult-Small-Breed.jpg?v=1769497911',  'Lorem Ipsum Dolor', 1234, 2, ['Chicken', 'Turkey']),
        new Food('Orijen Dog Small Breed', 'dogs', '9.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/271585/Orijen-Adult-Small-Breed.jpg?v=1769497911',  'Lorem Ipsum Dolor', 1234, 2, ['Chicken', 'Turkey']),
    ];


    $toys = [

        new Toy('Pecorella in Lattice per Cane', 'dogs', '5.80','https://arcaplanet.vtexassets.com/arquivos/ids/273098/croci-sheep-gioco-in-lattice.jpg?v=1768568684', 'Lorem Ipsum Dolor', 1235, 'Rubber', 'adult'),
        new Toy('Pecorella in Lattice per Cane', 'dogs', '5.80','https://arcaplanet.vtexassets.com/arquivos/ids/273098/croci-sheep-gioco-in-lattice.jpg?v=1768568684', 'Lorem Ipsum Dolor', 1235, 'Rubber', 'adult'),
        new Toy('Pecorella in Lattice per Cane', 'dogs', '5.80','https://arcaplanet.vtexassets.com/arquivos/ids/273098/croci-sheep-gioco-in-lattice.jpg?v=1768568684', 'Lorem Ipsum Dolor', 1235, 'Rubber', 'adult'),
        new Toy('Pecorella in Lattice per Cane', 'dogs', '5.80','https://arcaplanet.vtexassets.com/arquivos/ids/273098/croci-sheep-gioco-in-lattice.jpg?v=1768568684', 'Lorem Ipsum Dolor', 1235, 'Rubber', 'adult'),

    ];

    $accessories = [
        new Accessory('Cuccia Rettangolare Morbida Indi', 'dogs', '28.50', 'https://arcaplanet.vtexassets.com/arquivos/ids/273277/LOVEDI-CUCCIA-RETT.-MORBIDA-INDI-CM.45X35X20.jpg?v=1768082733', 'Lorem Ipsum Dolor', 12356, 'dogs bed', 'small size'),
        new Accessory('Cuccia Rettangolare Morbida Indi', 'dogs', '28.50', 'https://arcaplanet.vtexassets.com/arquivos/ids/273277/LOVEDI-CUCCIA-RETT.-MORBIDA-INDI-CM.45X35X20.jpg?v=1768082733', 'Lorem Ipsum Dolor', 12356, 'dogs bed', 'small size'),
        new Accessory('Cuccia Rettangolare Morbida Indi', 'dogs', '28.50', 'https://arcaplanet.vtexassets.com/arquivos/ids/273277/LOVEDI-CUCCIA-RETT.-MORBIDA-INDI-CM.45X35X20.jpg?v=1768082733', 'Lorem Ipsum Dolor', 12356, 'dogs bed', 'small size'),

    ];

    // var_dump($foods);
    // var_dump($toys);
    // var_dump($accessories);
