<?php
class person{
    public $name;
    
    function __construct($n){
        $this->name=$n;
    }
    function show(){
        echo "Your Name is".$this->name;
    }
}

$p1 = new person("Aakash");
$p1->show();

?>