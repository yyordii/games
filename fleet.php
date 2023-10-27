<?php
use Space\fighterjett;
use Space\cargoship;
use Space\mothership;

include_once 'cargo.php';
include_once 'fighterjett.php';
include_once 'mothership.php';

$fighterjett = new fighterjett;  // Instantiate Spaceship class
$Cargo = new cargoship;
$Mothership = new mothership;

// Create a fleet
$fleet = array($Mothership, $fighterjett, $Cargo);