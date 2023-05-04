<?php 

    require_once './db.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <title>PHP PetPlanet</title>
</head>
<body>

    <main>
        <div class="container">
            <h1 class="text-center">Pet Products</h1>
            
            <!-- food section -->
            <div class="food_section my-3">
                <h2 class="text-center">FOOD</h2>
                <div class="foods d-flex justify-content-center gap-5 my-3">
                    <?php 
                        foreach($foods as $product){
                    ?>
    
                    <div class="card">
                            <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                        <div class="card-title">
                            <h4 class="text-center my-2"><?= $product->name ?></h4>
                        </div>
                        <div class="card-text d-flex flex-column">
                           <div class="text-center">
                                <h5 class="my-2">Category:</h5> 
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


                           </div> 
                            <div class="info px-2">
                                <div>Price: <?= $product->getPrice(); ?></div>
                                <div>Description: <?= $product->desc ?></div>
                                <div>Weight: <?= $product->weight ?>kg</div>
                                <div>Ingredients: <?= $product->getIngredients($product->ingredients)
                                ?></div>
    
                            </div>
                            
                            <a href="#" class="btn btn-primary justify-self-center mx-5 my-3">Add to Cart</a>
                        </div>
    
                    </div>
    
             
                   
                <?php
                }
                ?>
                </div>

            </div>
            <!-- /food section -->
            <!-- toys section -->
            <div class="toys_section my-3">
                <h2 class="text-center">TOYS</h2>
                <div class="toys d-flex justify-content-center gap-5 my-3">
                    <?php 
                        foreach($toys as $product){
                    ?>
    
                    <div class="card">
                            <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                        <div class="card-title">
                            <h4 class="text-center"><?= $product->name ?></h4>
                        </div>
                        <div class="card-text d-flex flex-column">
                           <div class="text-center">
                                <h5 class="my-2">Category:</h5> 
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


                           </div> 
                            <div class="info px-2">
                                <div>Price: <?= $product->getPrice(); ?></div>
                                <div>Description: <?= $product->desc ?></div>
                                <div>Pet age: <?= $product->age ?></div>
                                <div>Made of <?= $product->material
                                ?></div>
    
                            </div>
                            
                            <a href="#" class="btn btn-primary justify-self-center mx-5 my-3">Add to Cart</a>
                        </div>
    
                    </div>
    
             
                   
                <?php
                }
                ?>
                </div>

            </div>
            <!-- /toys section -->
            <!-- accessories section -->
            <div class="accessories_section my-3">
                <h2 class="text-center">ACCESSORIES</h2>
                <div class="accessories d-flex justify-content-center gap-5 my-3">
                    <?php 
                        foreach($accessories as $product){
                    ?>
    
                    <div class="card">
                            <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                        <div class="card-title">
                            <h4 class="text-center"><?= $product->name ?></h4>
                        </div>
                        <div class="card-text d-flex flex-column">
                           <div class="text-center">
                                <h5 class="my-2">Category:</h5> 
                                <?php 
                                if($product->pet == 'dogs'){
                                    ?>
                                    <i class="fa-solid fa-dog"></i>
                                    <?php
                                } elseif($product->pet == 'cats') {
                                    ?>
                                    <i class="fa-solid fa-cat"></i>
                                    <?php
                                } else {
                                    ?>
                                    <i class="fa-solid fa-dog"></i> -
                                    <i class="fa-solid fa-cat"></i>
                                    <?php
                                }
                                ?>


                           </div> 
                            <div class="info px-2">
                                <div>Price: <?= $product->getPrice(); ?></div>
                                <div>Description: <?= $product->desc ?></div>
                                <div>Type of Product: <?= $product->type ?></div>
                                <div>Made for <?= $product->size
                                ?></div>
    
                            </div>
                            
                            <a href="#" class="btn btn-primary justify-self-center mx-5 my-3">Add to Cart</a>
                        </div>
    
                    </div>
    
             
                   
                <?php
                }
                ?>
                </div>

            </div>
            <!-- /accessories section -->

        </div>
    </main>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>