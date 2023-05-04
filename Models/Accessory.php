<?php 

    //classe ACCESSORI che estende PRODOTTI
    class Accessory extends Product
    {
        public $type;
        public $size;

        function __construct(string $name, string $pet, string $price, string $image, string $desc, int $prodCode, string $type, string $size)
        {
            //proprietà della classe genitore
            parent::__construct($name, $image, $price, $pet, $desc, $prodCode);

            //proprietà aggiuntive della classe figlio
            $this->type = $type;
            $this->size = $size;
        }
    }







?>