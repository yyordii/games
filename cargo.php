<?php
namespace Space;

include_once 'spaceship.php';

class cargoship extends \Spaceship{
    public int $storage;
    public int $ammo;
    public int $speed;
    public int $wins = 0;
    public int $totalDamageDone = 0;

    public function __construct(
        $storage = 200,
        $fuel = 10000,
        $hitPoints = 500,
        $ammo = 100,
        $speed = 50
        
    ) {
        parent::__construct($storage, $fuel, $hitPoints);
        $this->storage = $storage;
        $this->ammo = $ammo;
        $this ->speed = $speed;
    }
}

?>