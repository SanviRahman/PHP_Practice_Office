<?php

class Engine
{
    public function start()
    {
        echo "Engine Started!\n";
    }
}
class BreakDown
{
    public function end()
    {
        echo "Engine Stoped\n";
    }
}
class Music
{
    public function music()
    {
        echo "Play the Music".PHP_EOL;
    }
}
class Car
{
    private $engine;
    private $break;
    private $music;

    public function __construct(Engine $engine, BreakDown $break,Music $music)///enject kora holo
    {
        $this->engine= $engine;
        $this->break= $break;
        $this->music=$music;
    }

    public function startCar()
    {
        $this->engine->start();
        echo "Car is running!".PHP_EOL;
    }
    public function endCar()
    {
        $this->break->end();
        echo "Car is stopping!".PHP_EOL;
    }

    public function musicCar()
    {
        $this->music->music();
        echo "Music is playing" .PHP_EOL;
    }
}

$engine=new Engine();
$break=new BreakDown();
$music=new Music();

$car= new Car($engine,$break,$music);
$car->startCar();
$car->endCar();
$car-> musicCar();