<?php
namespace Space;
 
include_once 'spaceship.php';

class fighterjett extends \Spaceship{
    public int $speed;
    public int $wins = 0;
    public int $totalDamageDone = 0;
    public function __construct(
        $ammo = 100,
        $fuel = 100,
        $hitPoints = 75,
        $speed = 150
    ) {
        parent::__construct($ammo, $fuel, $hitPoints);
        $this->speed = $speed;

    }
    
}

?>