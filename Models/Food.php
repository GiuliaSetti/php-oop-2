<?php 

    //classe FOOD che estende PRODOTTI
    class Food extends Product
    {
        public $weight;
        public $ingredients;

        function __construct(string $name, string $pet, string $price, string $image, string $desc, int $prodCode, int $weight, array $ingredients)
        {
            //proprietà della classe genitore
            parent::__construct($name, $image, $price, $pet, $desc, $prodCode);

            //proprietà aggiuntive della classe figlio
            $this->weight = $weight;
            $this->ingredients = $ingredients; 
        }


        public function getIngredients($ingredients){
            return implode(", ", $ingredients);

        }
    }







?>