<?php


echo '<h1>Viso gero</h1>';

echo '<br>';

$egzaminoRezultatas = rand(1, 10);
if ($egzaminoRezultatas >= 4) {
    echo 'egzaminas islaikytas ' . $egzaminoRezultatas;
} else {
    echo 'egzaminas neislaikytas ' . $egzaminoRezultatas;
}

// Išvesti rezultatą ir sprendimą ar egzaminas išlaikytas. Mažiausias išlaikymo balas yra 4