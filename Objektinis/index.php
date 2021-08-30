<?php
include('./Plant.php');

$plant = new Plant();
print_r($plant);
echo'<br>';

$plant->name= "Agurkas";
echo'<br>';
print_r($plant);

$plant->is_yearling = true;
$plant -> is_tasty = true;
echo'<br>';
print_r($plant);

echo'<br>';

echo $plant->name;

echo "<hr>";

$plant->setName("blynas");
$plant->getName();

//------------------

$plant2 = new Plant();
$plant2->name= "Slyva";
$plant2->is_yearling = false;
echo'<br>';
print_r($plant2);

echo'<br>';

echo $plant2->name;

echo "<hr>";

//------------------

$plant3 = new Plant("Agrastas", true);
$plant3->intro();
print_r($plant3);

echo "<hr>";

//------------------

$arr[] = new Plant('Pusis', false);
$arr[] = new Plant('Jovaras', true);
$arr[] = new Plant('Kardelis', true);

print_r($arr);

function smt(){
    $j = 20;
}
echo "<hr>";



include('./Math.php');

echo Math::sum(14,24);

Plant::classDescription();
$plant->classDescription();
?>