<?php
    class Car{
        public $name="Corola";
        public $color="white";
        public $price=2000;

        function set(string $name,string $color, int $price): void
        {
            $this->name=$name;
            $this->color=$color;
            $this->price=$price;
        }

        function display(): void
        {
            echo "The name is: {$this->name}\n";
            echo "The color is: {$this->color}\n";
            echo "The price is: {$this->price}\n\n";
        }

    }

    $myCar= new Car();

    $myCar->display();
    $myCar->set("Bike","Navy Blue",10000);
    $myCar->display();


?>