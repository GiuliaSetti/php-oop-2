
<!-- creo una classe per i prodotti - che poi saranno suddivisi in giochi, cibo e cucce -->
<?php 

    // classe prodotto
    class Product{
        
        public $name;
        public $pet; 
        public $price;
        public $image;
        public $desc; 


        // costruttore
        function __construct(string $name, string $pet, string $price, string $image, string $desc)
        {
            $this ->name = $name;
            $this ->pet = $pet;
            $this ->price = $price;
            $this ->image = $image;
            $this ->desc = $desc;
        }

        // metodo per prezzo
        public function getPrice(){
            return "{$this->price}€";
        }

        
    

    }



?>