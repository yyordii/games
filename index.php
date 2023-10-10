<?php
use Space\fighterjett;
use Space\cargoship;
use Space\mothership;


// Om te zorgen dat de code in dit bestand bij de code in de class kan voegen we onderstaande code toe. Gelieve hier
// de include_once te gebruiken. Dit zorgt voor een extra stukje bescherming tegen fouten, namelijk dat het bestand
// maar 1x wordt toegevoegd. Dus als de code al een keer is toegevoegd, dan wordt dat niet nog een keer gedaan. Een
// zogenaamde include loop wordt hiermee voorkomen.
include_once 'cargo.php';
include_once 'fighterjett.php';
include_once 'mothership.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p style="font-family: Cambria; font-size: 40px;">
        <?php
        // Eerst een standaard instantie maken van het object
        // Hoe moet het? Wat gebeurt er? Er kan hier verteld worden dat er een nieuwe kopie wordt gemaakt van de
        // blauwdruk Spaceship. Door geen parameters (data) mee te geven, wordt er een standaard kopie gemaakt. Een
        // analogie die gemaakt kan worden is met een printer, je maakt een blauwdruk van een document, dat print je
        // 10x. Als je op de eerste kopie een kras zet met een pen, verschijnt die kras dan ook op de overige 9 kopieën?
        $fighterjett = new fighterjett;  // Instantiate Spaceship class
        $Cargo = new cargoship;
        $Mothership = new mothership;


        // Haal simpel een eigenschap op (public) en toon dit.
       
        // Maak een tweede instantie nu custom.
        
        // Laten zien dat er nu ook een andere waarde komt.
        

        // Data transport. Ship1 schiet, return moet niet worden vergeten.
        // Variabele expres dmg genoemd ipv damage om te laten zien dat het om de data gaat, niet om de naam.
        $dmg = $fighterjett->shoot();
        // Hoe krijgen we de data bij Ship2? Daarom de parameter.
        $Cargo->hit($dmg);
        $Mothership->hit($dmg);

        // Aantonen dat het is gelukt.
        echo "Mothership HP: " . $Mothership->hitPoints . "<br>";
        echo "Mothership speed: " . $Mothership->speed . "<br>";
        echo "Mothership storage: " . $Mothership->storage . "<br>";
        echo "Mothership ammo: " . $Mothership->ammo . "<br>";
        echo "Mothership fuel: " . $Mothership->fuel . "<br><br>";
        
        echo "Fighterjett HP: " . $fighterjett->hitPoints . "<br>";
        echo "Fighterjett speed: " . $fighterjett->speed . "<br>";
        echo "Fighterjett ammo: " . $fighterjett->ammo . "<br>";
        echo "Fighterjett fuel: " . $fighterjett->fuel . "<br><br>";
    
        echo "Cargojett HP: " . $Cargo->hitPoints . "<br>";
        echo "Cargojett speed: " . $Cargo->speed . "<br>";
        echo "Cargojett storage: " . $Cargo->storage . "<br>";
        echo "Cargojett ammo: " . $Cargo->ammo . "<br>";
        echo "Cargojett fuel: " . $Cargo->fuel . "<br>";


        echo "The end of the code has been reached.<br>";
        ?>
    </p>
</body>

</html>