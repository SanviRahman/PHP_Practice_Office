<?php
    class Vahicles
    {
        public $name;

        function parents()
        {
            echo "Hello from Parents class". PHP_EOL;
        }

    }
    class Car extends Vahicles
    {
        function childs()
        {
            echo "Hello from Child Class";
        }
    }

    $vahilce= new Car();
    $vahilce->parents();
    $vahilce->childs();

?>