<?php

class Engine
{
    public function start()
    {
        echo "Engine Started!\n";
    }
}
class Car
{
    private $engine;

    public function __construct(Engine $engine)
    {
        $this->engine= $engine;
    }

    public function startCar()
    {
        $this->engine->start();
        echo "Car is running!";
    }
}

$engine=new Engine();
$car= new Car($engine);
$car->startCar();