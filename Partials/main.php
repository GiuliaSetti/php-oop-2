
<main class="my-3">
        <div class="container">
            <h1 class="text-center">Pet Products</h1>
            <hr>
            <!-- food section -->
            <div class="food_section my-3">
                <h2 id="food" class="text-center">FOOD</h2>
                <div class="foods d-flex justify-content-center gap-5 my-3">
                    <?php 
                        foreach($foods as $product){
                    ?>
                    <!-- inizio card FOOD -->
                    <div class="card d-flex flex-column justify-content-between" style="width: 13rem;">

                            <!-- immagine -->
                            <img class="card-img-top" src="<?= $product->getImage()?>" alt="<?= $product->getName()?>">
                        
                            <!-- titolo -->
                        <div class="card-title">
                            <h4 class="text-center my-2"><?= $product->getName()?></h4>
                        </div>

                        <!-- testo -->
                        <div class="card-text d-flex flex-column">
                           <div class="text-center">

                                <h5 class="my-2">Category:</h5> 
                                <!-- icona -->
                                <i class="fa-solid <?= $product->getCategory()->getIcon() ?>">
                                </i>

                           </div> 

                           <!-- info -->
                            <div class="info px-2">

                                <div>Price: <?= $product->getPrice(); ?></div>
                                <div class="fst-italic"><?= $product->getDesc(); ?></div>
                                <div><?= $product->getIng() ?></div>
                                <div>Weight: <?= $product->getWeigth() ?>kg</div>
                                <div class="small">For <?= $product->getAge() ?></div>
                                <div class="text-body-tertiary"><?= $product->getSize() ?></div>
    
                            </div>
                            
                            <a href="#" class="btn btn-primary justify-self-center mx-3 my-3">Add to Cart</a>
                        </div>
    
                    </div>
    
             
                   
                <?php
                }
                ?>
                </div>

            </div>
            <!-- /food section -->

            <hr>
            <!-- toys section -->
            <div class="toys_section my-3">
                <h2 id="toys" class="text-center">TOYS</h2>
                <div class="foods d-flex justify-content-center gap-5 my-3">
                    <?php 
                        foreach($toys as $product){
                    ?>
                    <!-- inizio card FOOD -->
                    <div class="card d-flex flex-column justify-content-between" style="width: 13rem;">

                            <!-- immagine -->
                            <img class="card-img-top" src="<?= $product->getImage()?>" alt="<?= $product->getName()?>">
                        
                            <!-- titolo -->
                        <div class="card-title">
                            <h4 class="text-center my-2"><?= $product->getName()?></h4>
                        </div>

                        <!-- testo -->
                        <div class="card-text d-flex flex-column">
                           <div class="text-center">

                                <h5 class="my-2">Category:</h5> 
                                <!-- icona -->
                                <i class="fa-solid <?= $product->getCategory()->getIcon() ?>">
                                </i>

                           </div> 

                           <!-- info -->
                            <div class="info px-2">

                                <div>Price: <?= $product->getPrice(); ?></div>
                                <div class="fst-italic"><?= $product->getDesc(); ?></div>
                                <div>Made by <b class="text-uppercase"><?= $product->getBrand() ?></b> </div>
                                <div class="text-body-tertiary">For <?= $product->getAge() ?></div>
                                <div class="small">Made of <?= $product->getMaterial() ?></div>
    
                            </div>
                            
                            <a href="#" class="btn btn-primary justify-self-center mx-3 my-3">Add to Cart</a>
                        </div>
    
                    </div>
    
             
                   
                <?php
                }
                ?>
                </div>

            </div>
            <!-- /toys section -->
            <hr>
            <!-- accessories section -->
            <div class="accessories_section my-3">
                <h2 id="accessories" class="text-center">ACCESSORIES</h2>
                <div class="foods d-flex justify-content-center gap-5 my-3">
                    <?php 
                        foreach($accessories as $product){
                    ?>
                    <!-- inizio card FOOD -->
                    <div class="card d-flex flex-column justify-content-between" style="width: 13rem;">

                            <!-- immagine -->
                            <img class="card-img-top" src="<?= $product->getImage()?>" alt="<?= $product->getName()?>">
                        
                            <!-- titolo -->
                        <div class="card-title">
                            <h4 class="text-center my-2"><?= $product->getName()?></h4>
                        </div>

                        <!-- testo -->
                        <div class="card-text d-flex flex-column">
                           <div class="text-center">

                                <h5 class="my-2">Category:</h5> 
                                <!-- icona -->
                                <i class="fa-solid <?= $product->getCategory()->getIcon() ?>">
                                </i>

                           </div> 

                           <!-- info -->
                            <div class="info px-2">

                                <div>Price: <?= $product->getPrice(); ?></div>
                                <div class="fst-italic"><?= $product->getDesc(); ?></div>
                                <div><?= $product->getType() ?></div>
                                <div class="small">Made of <?= $product->getMaterial() ?></div>
                                <div class="text-body-tertiary"><?= $product->getSize() ?></div>

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