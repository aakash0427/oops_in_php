<?php
class base{
    public static $name = "Aakash Gavate";  //to access static variable echo with "self::" keyword

    public static function show(){
        // echo $this->name;
        echo self::$name;
    }

    public function __construct(){
        self::show();
    }
}

// echo base::$name;

// base::show();

$test = new base();

$test->show();

?>