<?php 

    require_once './db.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>PHP PetPlanet</title>
</head>
<body>

    <main>
        <div class="container">
            <h1 class="text-center">Pet Products</h1>
            <div class="foods">
                <h2 class="text-center">FOOD</h2>
                <?php 
                    foreach($foods as $product){
                ?>

                <div class="card">

                    <img src="<?= $product->image ?>" alt="<?= $product->name ?>" class="card-img-top">
                    </img>
                    <div class="card-title">
                        <h4><?= $product->name ?></h4>
                    </div>
                    <div class="card-text">
                        Category: 
                        <?php 
                        if($product->pet == 'dogs'){
                            ?>
                            <i class="fa-solid fa-dog"></i>
                            <?php
                        } elseif($product->pet == 'cats') {
                            ?>
                            <i class="fa-solid fa-cat"></i>
                            <?php
                        }
                        ?>
                        <div>
                            <div>Price: <?= $product->getPrice(); ?></div>
                            <div>Description: <?= $product->desc ?></div>
                            <div>Code: <?= $product->prodCode ?></div>
                            <div>Weitght: <?= $product->weight ?></div>
                            <div>Ingredients: <?= $product->getIngredients($product->ingredients)
                            ?></div>

                        </div>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>

                </div>

         
               
            <?php
            }
            ?>
            </div>
            

        </div>
    </main>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>