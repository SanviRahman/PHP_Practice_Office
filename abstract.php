<?php
    abstract class User
    {
        public abstract function getName();
        public abstract function display();
    }

    class Student extends User
    {
        public $name= "Sanvi Rahman". PHP_EOL;

        public function getName(): string
        {
            return $this->name;
        }

        public function display()
        {
            echo "Welcome to Display Method";
        }
    }

    $myObj= new Student();
    echo $myObj->getName();
    $myObj->display();
?>