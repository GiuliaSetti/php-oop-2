<?php 
    //requires per il corretto funzionamento delle classi figlio - da correzione.
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Pet.php';

   //tratti
    require_once __DIR__ . '/../Traits/Age.php';
    require_once __DIR__ . '/../Traits/Material.php';

    //classe TOY che estende PRODOTTI
    class Toy extends Product
    {

        use Age;
        use Material;

        // cambiato in protected e brand - age e material cancellati per usarli come trait (?)
        protected $brand;

        function __construct(string $name, Pet $pet, float $price, string $image, string $desc, string $brand, string $age, string $material)
        {
            //proprietà della classe genitore
            parent::__construct($name, $pet, $price, $image,  $desc);

            //proprietà aggiuntive della classe figlio
            $this->brand = $brand;
            $this->age = $age;
            $this->material = $material;

        }

        public function getBrand(){
            return $this->brand;
        }
    }







?>