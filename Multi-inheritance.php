<?php
    class User
    {
        public function  display()
        {
            echo "This is from User class". PHP_EOL;
        }
    }

    class Student extends User
    {
        public function getName()
        {
            echo "My name is Sanvi from Student class". PHP_EOL;
        }
    }

    class Teacher extends Student
    {
        public function teacherName()
        {
            echo "My name is Shanto form Teacher class";
        }
    }

    $myObj= new Teacher();
    $myObj->display();
    $myObj->getName();
    $myObj->teacherName();
?>