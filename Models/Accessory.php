<?php 

    //requires per il corretto funzionamento delle classi figlio - da correzione.
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Pet.php';

    //tratti
    require_once __DIR__ . '/../Traits/Material.php';
    require_once __DIR__ . '/../Traits/Size.php';

    //classe ACCESSORI che estende PRODOTTI
    class Accessory extends Product
    {

        use Material;
        use Size;

        //protected per type e cancellato size per usarlo come trait (?)
        protected $type;

        function __construct(string $name, Pet $pet, float $price, string $image, string $desc, string $type, string $material, string $size)
        {
            //proprietà della classe genitore
            parent::__construct($name, $pet, $price, $image,  $desc);

            //proprietà aggiuntive della classe figlio
            $this->type = $type;
            $this->material = $material;
            $this->size = $size;
        }

        public function getType(){
            return $this->type;
        }
    }


?>