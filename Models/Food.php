<?php 

    //classe FOOD che estende PRODOTTI
    class Food extends Product
    {
        public $weight;
        public $ingredients;

        function __construct(string $name, string $pet, string $price, string $image, string $desc, float $weight, array $ingredients)
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
    }







?>