<?php

// require "autoloads/first.php";
// require "autoloads/second.php";

function __autoload($class){
    require "autoloads/" . $class . ".php";
}

$test = new first();

?>