<?php
//Example1
// trait test{
//     public function hello(){
//         echo "Say Hello";
//     }
// }

// class A{
//     use test;
// }

// class B{
//     use test;
// }

// $obj = new A();
// $obj->hello();


//Example2
// trait hello{
//     public function sayHello(){
//         echo "Hello Everyone";
//     }   
// }

// class base{
//     use hello;
// }

// class base2{
//     use hello;
// }

// $test = new base();
// $test2 = new base2();

// $test->sayHello();
// $test2->sayHello();



//Example3 Multiple traits
// trait hello{
//     public function sayHello(){
//         echo "Hello Everyone";
//     }   
// }

// trait bye{
//     public function saybye(){
//         echo "Bye Everyone";
//     }   
// }

// class base{
//     use hello, bye;
// }

// class base2{
//     use hello;
// }

// $test = new base();


// $test->sayHello();
// $test->saybye();



//Example4 Trait with multiple function
trait hello{
    public function sayHello(){
        echo "Hello Everyone \n";
    }
    
    public function sayHi(){
        echo "Hi Everyone \n";
    } 
}

trait bye{ 
    public function saybye(){
        echo "Bye Everyone \n";
    }   
}

class base{
    use hello, bye;
}

class base2{
    use hello;
}

$test = new base();


$test->sayHello();
$test->saybye();
$test->sayHi();
?>