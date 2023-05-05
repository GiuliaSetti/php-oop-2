<?php 
    //requires per il corretto funzionamento delle classi figlio - da correzione.
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Pet.php';

   //tratti
    require_once __DIR__ . '/../Traits/Age.php';

    //classe TOY che estende PRODOTTI
    class Toy extends Product
    {

        use Age;

        // cambiato in protected e brand - age e material cancellati per usarli come trait (?)
        protected $brand;

        function __construct(string $name, Pet $pet, float $price, string $image, string $desc, string $brand, string $age)
        {
            //proprietà della classe genitore
            parent::__construct($name, $pet, $price, $image,  $desc);

            //proprietà aggiuntive della classe figlio
            $this->brand = $brand;
            $this->age = $age;

        }

        public function getBrand(){
            return $this->brand;
        }
    }







?>