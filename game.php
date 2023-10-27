<body>
    <p style="font-family: Cambria; font-size: 40px;">

<?php
include 'fleet.php';
echo "This is a simple automatic simulation where the ships fight eachother and the winner is shown below. After 20 wins the scores will be reset."; 
echo "<br><br>";

session_start(); // Start the session

// Initialize win counts
    

$ship1 = $fleet[array_rand($fleet)];
$ship2 = $fleet[array_rand($fleet)];

// Zorgen dat we twee verschillende schepen hebben
while ($ship1 === $ship2) {
    $ship2 = $fleet[array_rand($fleet)];
}

function attack($attacker, $defender) {
    if ($attacker->fuel > 0) {
        $damageDealt = $attacker->attack;
        $defender->hitPoints = max(0, $defender->hitPoints - $damageDealt);
        $attacker->fuel--;
        $attacker->totalDamageDone += $damageDealt;
    }
}

// Dit is de game loop
$rounds = 0;
$maxRounds = 100; // Maximum aantal rondes om oneindige lus te voorkomen
while ($ship1->hitPoints > 0 && $ship2->hitPoints > 0 && $ship1->fuel > 0 && $ship2->fuel > 0 && $rounds < $maxRounds) {
    attack($ship1, $ship2);
    attack($ship2, $ship1);
    $rounds++; // Verhoog het aantal rondes
}

// Display total damage done by each ship
echo "Total damage done: " . $ship1->totalDamageDone . " by " . basename(get_class($ship1)) . ", " . $ship2->totalDamageDone . " by " . basename(get_class($ship2)) . ".<br>";

// Toon de winnaar en update win counts
if ($ship1->hitPoints > 0) {
    echo basename(get_class($ship1)) . " wint!<br>";
    $_SESSION['winCounts'][get_class($ship1)]++;
} else if ($ship2->hitPoints > 0) {
    echo basename(get_class($ship2)) . " wint!<br>";
    $_SESSION['winCounts'][get_class($ship2)]++;
}
echo "<br>";

// Display win counts and check for 20 wins
$resetScores = false;
$winnerClass = $ship1->hitPoints > 0 ? get_class($ship1) : get_class($ship2);
foreach ($_SESSION['winCounts'] as $shipClass => $winCount) {
    if ($shipClass == $winnerClass) {
        echo "<span style='color: green;'>" . basename($shipClass) . " heeft $winCount keer gewonnen.</span><br>";
    } else {
        echo basename($shipClass) . " heeft $winCount keer gewonnen.<br>";
    }
    if ($winCount >= 20) {
        $resetScores = true;
    }
}

// Reset scores if a ship has 20 wins
if ($resetScores) {
    foreach ($fleet as $ship) {
        $_SESSION['winCounts'][get_class($ship)] = 0;
    }
}

header("Refresh:3"); // Ververs de pagina elke 3 seconden