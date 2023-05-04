<?php 

    //classe TOY che estende PRODOTTI
    class Toy extends Product
    {
        public $material;
        public $age;

        function __construct(string $name, float $price, string $image, Pet $pet, string $desc, int $prodCode, string $material, string $age)
        {
            //proprietà della classe genitore
            parent::__construct($name, $image, $price, $pet, $desc, $prodCode);

            //proprietà aggiuntive della classe figlio
            $this->material = $material;
            $this->age = $age; 
        }
    }







?>