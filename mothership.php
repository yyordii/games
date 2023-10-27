<?php
namespace Space;

include_once 'spaceship.php';

class mothership extends \Spaceship{
    public int $speed;
    public int $storage;
    public int $wins = 0;
    public int $totalDamageDone = 0;

    public function __construct(
        $ammo = 2000,
        $fuel = 750,
        $hitPoints = 1000,
        $speed = 500,
        $storage = 150

       
    ) {
        parent::__construct($ammo, $fuel, $hitPoints);
        $this->speed = $speed;
        $this->storage= $storage;
        

    }
}