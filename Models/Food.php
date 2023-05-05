<?php 

    //requires per il corretto funzionamento delle classi figlio - da correzione.
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Pet.php';

    //classe FOOD che estende PRODOTTI
    class Food extends Product
    {
        protected $weight;
        protected $ingredients;

        function __construct(string $name, Pet $pet, float $price, string $image, string $desc, float $weight, array $ingredients)
        {
            //proprietà della classe genitore
            parent::__construct($name, $pet, $price, $image,  $desc);

            //proprietà aggiuntive della classe figlio
            $this->weight = $weight;
            $this->ingredients = $ingredients; 
        }


        public function getIngredients($ingredients){
            return implode(", ", $ingredients);
        }

        public function getWeigth(){
            return $this->weight;
        }

    }







?>