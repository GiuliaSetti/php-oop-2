<?php 

    //classe ACCESSORI che estende PRODOTTI
    class Accessory extends Product
    {
        public $type;
        public $size;

        function __construct(string $name, string $pet, string $price, string $image, string $desc, string $type, string $size)
        {
            //proprietà della classe genitore
            parent::__construct($name, $pet, $price, $image,  $desc);

            //proprietà aggiuntive della classe figlio
            $this->type = $type;
            $this->size = $size;
        }
    }







?>