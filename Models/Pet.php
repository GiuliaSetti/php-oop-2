
<!-- classe PET / CATEGORY (dopo correzione) -->
<?php


class Pet {
    //cambio da public a protected
    protected $name;
    protected $icon;

    //costruttore
    function __construct(string $name, string $icon) {

        $this->name = $name;
        $this->icon = $icon;

    }
    // metodo per nome
    public function getName() {
        return $this->name;
    }
    // metodo per icona
    public function getIcon() {
        return $this->icon;
    }

}