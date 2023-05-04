<?php 

    //classe TOY che estende PRODOTTI
    class Toy extends Product
    {
        public $material;
        public $age;

        function __construct(string $name, string $pet, string $price, string $image, string $desc, int $prodCode, string $material, string $age)
        {
            //proprietà della classe genitore
            parent::__construct($name, $image, $price, $pet, $desc, $prodCode);

            //proprietà aggiuntive della classe figlio
            $this->material = $material;
            $this->age = $age; 
        }
    }







?>