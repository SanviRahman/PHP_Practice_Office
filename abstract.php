<?php
    abstract class User
    {
        abstract public function getName();
        abstract public function display();

        public function setName()
        {
            echo "This is set Name". PHP_EOL;
        }
    }

    class Student extends User
    {
        public $name= "Sanvi Rahman". PHP_EOL;

        public function getName()
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
    echo $myObj->setName();
    $myObj->display();
?>