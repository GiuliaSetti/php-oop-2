<?php 

    //requires per il corretto funzionamento delle classi figlio - da correzione.
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Pet.php';

    //classe ACCESSORI che estende PRODOTTI
    class Accessory extends Product
    {
        //protected per type e cancellato size per usarlo come trait (?)
        protected $type;

        function __construct(string $name, Pet $pet, float $price, string $image, string $desc, string $type)
        {
            //proprietà della classe genitore
            parent::__construct($name, $pet, $price, $image,  $desc);

            //proprietà aggiuntive della classe figlio
            $this->type = $type;
        }

        public function getType(){
            return $this->type;
        }
    }


?>