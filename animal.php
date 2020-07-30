<?php
class Animal {
    public $name;
    public $legs= 2;
    public $cold_blooded= false;

    public function __construct($name){
        $this->name = $name;
    }
}

class Frog extends Animal {
    public $legs= 4;

    public function jump(){
        echo "hop hop";
    }
}
class Ape extends Animal {

    public function yell(){
        echo "Auooo";
    }
}
?>