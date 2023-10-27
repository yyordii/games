<body>
    <p style="font-family: Cambria; font-size: 40px;">
<?php
include 'fleet.php';

foreach ($fleet as $ship) {
    echo "Name: " . basename (get_class($ship)) . "<br>";
    echo "HP: " . $ship->hitPoints . "<br>";
    echo "Speed: " . $ship->speed . "<br>";
    echo "Storage: " . $ship->storage . "<br>";
    echo "Ammo: " . $ship->ammo . "<br>";
    echo "Fuel: " . $ship->fuel . "<br><br>";
}