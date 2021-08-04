<?php

$dalyvis1 = rand(1, 4);
$dalyvis2 = rand(1, 4);

if ($dalyvis1 + $dalyvis2 > 6 || $dalyvis1 === $dalyvis2) {
    echo 'Laimejo ' . $dalyvis1 + $dalyvis2;
} else {
    echo 'Pralaimejo ' . $dalyvis1 + $dalyvis2;
}
// Išvesti dalyvių pasirinktus skaičius ir pranešimą "Laimėjo", 
//jeigu dalyvių skaičių suma didesnė nei 6 arba tie skaičiai yra vienodi. 
//Pranešimą "Pralaimėjo" - priešingu atveju 

echo '<br>'; echo '<br>'; echo '<br>';

$petras = rand(10, 20);
$jonas = rand(5,25);

if ($petras > $jonas) {
    echo "Laimejo: <i>Petras</i> $petras : $jonas";
} elseif ($petras < $jonas) {
    echo "Laimejo: <i>Jonas</i> $petras : $jonas";
} else {
    echo "Laimejo: <i>Niekas</i> $petras : $jonas";
}

