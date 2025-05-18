<?php
    class Student{
        private $name="Sanvi Rahman";

        public function display()
        {
            echo "Student name is :" .$this->name . PHP_EOL;
            $this->test();
        }

        private function test()
        {
            echo "Welcome to Test class". PHP_EOL;
        }
    }
    $myClass= new Student;
    $myClass->display();
    
?>