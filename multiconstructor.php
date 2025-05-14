<?php
class Person {
    public $name;
    public $age;

    
    public function __construct($name = "Unknown", $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }

    public function display() {
        echo "Name: $this->name, Age: $this->age\n";
    }
}

$person1 = new Person();
$person2 = new Person("Shanto"); 
$person3 = new Person("Shanto", 25); 

$person1->display();
$person2->display();
$person3->display();
?>
