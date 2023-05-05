<?php
    require_once './Models/Pet.php';
    require_once './Models/Product.php';
    require_once './Models/Food.php';
    require_once './Models/Toy.php';
    require_once './Models/Accessory.php';

    $categories = [
        new Pet("dogs", "fa-dog"),
        new Pet("cats", "fa-cat"),
    ];


    $foods = [
        new Food('Orijen Dog Small Breed', $categories[0], 9.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/271585/Orijen-Adult-Small-Breed.jpg?v=1769497911', 'Lorem Ipsum Dolor', 1.8, ['Chicken', 'Turkey'], 'Puppies', 'Small Size'),
        new Food('Virtus Cat Adult Natural Lattina 150G', $categories[1], 1.47, 'https://arcaplanet.vtexassets.com/arquivos/ids/272312/virtus-cat-deep-sea-formula-multipack-24x150g.jpg?v=1769621064', 'Lorem Ipsum Dolor', 0.15, ['Salmon', 'Tuna'], 'Adults', 'Normal Size'),
        new Food('Edgard & Cooper Dog Adult Bio Organic Pollo e Tacchino', $categories[0], 58.49, 'https://arcaplanet.vtexassets.com/arquivos/ids/268536/edgard-cooper-dog-adult-bio-organic-pollo-e-tacchino-front.jpg?v=1768484098', 'Lorem Ipsum Dolor', 7, ['Chicken', 'Turkey'], 'Adults', 'Bigger Sizes'),
    ];


    $toys = [

        new Toy('Aromastories Gemma Peluche per Gatto', $categories[1], 8.95,'https://arcaplanet.vtexassets.com/arquivos/ids/270329/united-pets-aromastories-gemma-verde-gatto-2.jpg?v=1769386345', 'Lorem Ipsum Dolor', 'United Pets', 'Adults', 'Fabric'),
        new Toy('Gioco Cane Peluche Tira Molla Tigre', $categories[0], 9.95,'https://arcaplanet.vtexassets.com/arquivos/ids/273109/LOVEDI-GIOCO-CANE-PELUCHE-TIRA-MOLLA-TIGRE.jpg?v=1769615490', 'Lorem Ipsum Dolor', 'Lovedi', 'Adults', 'Fabric'),
        new Toy('Palla Snack per Gatti', $categories[1], 3.95,'https://arcaplanet.vtexassets.com/arquivos/ids/272912/trixie-snack-ball-gatto-rossa.jpg?v=1769559144', 'Lorem Ipsum Dolor', 'Trixie', 'Puppies', 'Plastic'),
        new Toy('Pecorella in Lattice per Cane', $categories[0], 5.80,'https://arcaplanet.vtexassets.com/arquivos/ids/273098/croci-sheep-gioco-in-lattice.jpg?v=1768568684', 'Lorem Ipsum Dolor', 'Croci', 'Adults', 'Rubber'),

    ];

    $accessories = [
        new Accessory('Cuccia Rettangolare Morbida Indi', $categories[0], 28.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/273277/LOVEDI-CUCCIA-RETT.-MORBIDA-INDI-CM.45X35X20.jpg?v=1768082733', 'Lorem Ipsum Dolor', 'Dogs Bed', 'Fabric', 'Normal Size'),
        new Accessory('Cuccia Casetta Igloo in Sisal', $categories[1], 39.90, 'https://arcaplanet.vtexassets.com/arquivos/ids/265737/220273_PHO_PRO_DOG_CLIP_36352-1.jpg?v=1768004184', 'Lorem Ipsum Dolor', 'Cats Bed', 'Farbic', 'Small Size'),
        new Accessory('Ciotola in Ceramica Grigia', $categories[1], 3.95, 'https://arcaplanet.vtexassets.com/arquivos/ids/266458/trixie-ciotola-ceramica-grigio-250ml.jpg?v=1769300311', 'Lorem Ipsum Dolor', 'Cats Bowl', 'Ceramic', 'Normal Size'),

    ];

    // var_dump($foods);
    // var_dump($toys);
    // var_dump($accessories);
