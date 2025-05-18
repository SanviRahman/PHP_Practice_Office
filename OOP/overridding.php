<?php

    class ParentClass
    {
        public function show()
        {
            echo "My name is: Sanvi";
        }
    }

    class ChildClass extends ParentClass
    {
        public function show()
        {
            echo "My name is: Shanto";
        }
    }

    $myObj=new ChildClass();
    $myObj->show();

?>