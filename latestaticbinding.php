<?php
class personal{
    protected static $name ="Aakash";
    public function show(){
        echo self::$name;     //prints personal class value if we use self keyword.
        echo static::$name;   //prints accounts class value if we use static keyword.
    }
}

class accounts extends personal{
    protected static $name = "Gavate";
}

$test = new accounts();
$test->show();


?>