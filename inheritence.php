<?php
    class Vahicles
    {
        public $name="Tesla";
        public $code="D404";

        function parents($name,$code)
        {
            $this->name= $name;
            $this->code= $code;
            echo "Hello from Parents class". PHP_EOL;
        }

    }
    class Car extends Vahicles
    {
        function childs()
        {
            echo "Hello from Child Class". PHP_EOL;
        }
    }

    class Bike extends Vahicles
    {
        function rone()
        {
            echo "Hello from Rone Class";
        }
    }


    $vahilce= new Car();
    $vahilce->parents("Micro","C011"). PHP_EOL;
    echo "Model name:". $vahilce->name . " ";
    echo "Code name:". $vahilce->code . PHP_EOL;
    $vahilce->childs();


    $vahilce1=new Bike();
    $vahilce1->parents("Micro","C011"). PHP_EOL;
    echo "Model name:". $vahilce1->name . " ";
    echo "Code name:". $vahilce1->code . PHP_EOL;
    $vahilce1->rone();

?>