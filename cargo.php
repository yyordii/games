<?php
namespace Space;

include_once 'spaceship.php';

class cargoship extends \Spaceship{
    public function __construct(
        $storage = 100,
        $fuel = 100,
        $hitPoints = 500
    ) {
        parent::__construct($storage, $fuel, $hitPoints);
    }
}

?>