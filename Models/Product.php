
<!-- creo una classe per i prodotti - che poi saranno suddivisi in giochi, cibo e cucce -->
<?php 

    // classe prodotto
    class Product{
        
        public $name;
        public $pet; 
        public $price;
        public $image;
        public $desc; 
        public $prodCode; 

        // costruttore
        function __construct(string $name, string $pet, string $price, string $image, string $desc, int $prodCode)
        {
            $this ->name = $name;
            $this ->pet = $pet;
            $this ->price = $price;
            $this ->image = $image;
            $this ->desc = $desc;
            $this ->prodCode = $prodCode;
        }

        // metodo per prezzo
        public function getPrice(){
            return "{$this->price}€";
        }
        // metodo per codice prodotto
        public function getCode(){
            return $this->prodCode;
        }
        // metodo per gruppo
        public function getPet()
        {
            return $this->pet;
        }
    

    }



?>