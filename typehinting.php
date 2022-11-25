<?php
// function fruits(array $names){     //"array"- typehinting
//     foreach($names as $name){
//         echo $name . "<br>";
//     }
// }

// $test = ["Apple", "Banana", "Orange"];
// fruits($test);



class school{
    public function getNames(student $names){
        echo "<ul>";
        foreach ($names->Names() as $name) {
            echo "<li>" . $name . "</li>";
        }
        echo "</ul>";
    }
}

class student{
    public function Names(){
        return["Ram","Krishna","Gopal"];
    }
}

class library{

}

$lib = new library();
$stu = new student();
$sch = new school();

$sch->getNames($stu);
?>