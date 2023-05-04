<?php 

    //classe TOY che estende PRODOTTI
    class Toy extends Product
    {
        public $material;
        public $age;

        function __construct(string $name, string $pet, string $price, string $image, string $desc, string $material, string $age)
        {
            //proprietà della classe genitore
            parent::__construct($name, $pet, $price, $image,  $desc);

            //proprietà aggiuntive della classe figlio
            $this->material = $material;
            $this->age = $age; 
        }
    }







?>