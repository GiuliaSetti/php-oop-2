<?php 

    //requires per il corretto funzionamento delle classi figlio - da correzione.
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Pet.php';

    //tratti
    require_once __DIR__ . '/../Traits/Age.php';
    require_once __DIR__ . '/../Traits/Size.php';
   

    //classe FOOD che estende PRODOTTI
    class Food extends Product
    {
        // introdotto tratto Age
        use Age;
        use Size;

        protected $weight;
        protected $ingredients;

        function __construct(string $name, Pet $pet, float $price, string $image, string $desc, float $weight, array $ingredients, string $age, string $size)
        {
            //proprietà della classe genitore
            parent::__construct($name, $pet, $price, $image,  $desc);

            //proprietà aggiuntive della classe figlio
            $this->weight = $weight;
            $this->ingredients = $ingredients;
            $this->age = $age;  
            $this->size = $size;  
        }
        //metodo per far implodere l'array ingredienti
        public function getIngredients($ingredients){
            return implode(", ", $ingredients);
        }
        //metodo per gli ingredienti
        public function getIng(){
            return $this->getIngredients($this->ingredients);
        }
        //metodo per il peso
        public function getWeigth(){
            return $this->weight;
        }

    }







?>