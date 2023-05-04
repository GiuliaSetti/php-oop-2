
<!-- creo una classe per i prodotti - che poi saranno suddivisi in giochi, cibo e cucce -->
<?php 

    // classe prodotto
    class Product{
        
        public $name;
        public $price;
        public $image;
        public $pet;
        public $desc; 
        public $prodCode; 

        // costruttore
        function __construct(string $name, float $price, string $image, Pet $pet, string $desc, int $prodCode)
        {
            $this ->name = $name;
            $this ->price = $price;
            $this ->image = $image;
            $this ->pet = $pet;
            $this ->desc = $desc;
            $this ->prodCode = $prodCode;
        }

        // metodo per prezzo
        public function getPrice(){
            return $this->price;
        }
        // metodo per codice prodotto
        public function getCode(){
            return $this->prodCode;
        }

    }



?>