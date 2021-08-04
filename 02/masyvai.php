<?php

echo '<br>'; echo '<br>';
$masyvas = [];

echo '<pre>';
print_r($masyvas);

echo '<br>'; echo '<br>';

$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $value) {
   echo 'Reikšmė: ' . $value . '<br>';
}
print_r($colors);

echo '<br>'; echo '<br>';

$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $index => $value) {
   echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value . '<br>';
}
}