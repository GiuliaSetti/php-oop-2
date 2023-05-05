
<!-- creo una classe per i prodotti - che poi saranno suddivisi in giochi, cibo e cucce -->
<?php 

    require_once __DIR__ . "/Pet.php";

    // classe prodotto
    class Product{
    // introdotto per come categoria - corretto in protected
        protected $name;
        protected $pet; 
        protected $price;
        protected $image;
        protected $desc; 


        // costruttore
        function __construct(string $name, Pet $pet, float $price, string $image, string $desc)
        {
            $this ->name = $name;
            $this ->pet = $pet;
            $this ->price = $price;
            $this ->image = $image;
            $this ->desc = $desc;
        }

        //metodo per nome
        public function getName() {
            return $this->name;
        }   
        //metodo per categoria pet
        public function getCategory() {
            return $this->pet;
        }
        // metodo per prezzo
        public function getPrice(){
            return "{$this->price}€";
        }
        //metodo per la decrizione del prodotto
        public function getDesc(){
            return $this->desc;
        }

        //metodo per immagine
        public function getImage(){
            return $this->image;
        }
  
    }



?>