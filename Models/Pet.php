
<!-- creo una classe per distinguere le categorie di animali - con le rispettive icone -->
<?php 

    // classe gruppo animali
    class Pet{
        
        public $name;
        public $icon; 


        function __construct(string $name, string $icon)
        {
            $this ->name = $name;
            $this ->icon = $icon;
        }


        public function getIcon(){
            return $this-> icon; 
        }

    }



?>