<?php
echo '<br>'; echo '<br>';
echo '1. <br>';
/*
1.	Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
*/

$masyvasm = [];
print_r($masyvasm);
foreach(range(0,29) as $i) {
    $masyvasm[] = rand(5, 25);
}
print_r($masyvasm);
echo '<br>'; echo '<br>';
 echo '1.2. <br>';

// $key = 0;
// $masyvas = [];
// do {
// $masyvas[$key++] = rand(5, 25);
// } while ($key < 30);
// echo '<pre>';
// print_r($masyvas);


echo '<br>'; echo '<br>';


// $manomasyvas = [rand(5, 25)];
// print_r($manomasyvas);


echo '<br>'; echo '<br>';
echo '2. <br>';
/*
2.	Naudodamiesi 1 uždavinio masyvu:
a)	Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
b)	Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
c)	Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
d)	Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
e)	Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
f)	Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
g)	Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
h)	Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
i)	Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
*/

$moreTen = 0;
foreach ($masyvasm as $value) {
    if($value > 10){
        ++$moreTen;
    }
}
echo " Didesniu reiksmiu uz 10 yra: $moreTen";

echo '<br>'; echo '<br>';

$max = 0;
$index = [];

foreach ($masyvasm as $key=>$value) {
    if ($value == $max) {
        $index[] = $key;
    }
    if ($value > $max){
        $max = $value;
        $index = [];
        $index[] = $key;
    }
}

echo "max - $max, indeksai - " . implode(', ',$index);

echo '<br>'; echo '<br>';
echo '2 c <br>';
$suma = 0;

foreach ($masyvasm as $key=>$value) {
    if ($key % 2 == 0) {
        $suma += $key;
    }
}

echo " Lyginiu indeksu suma: $suma";
echo '<br>'; echo '<br>';
echo '2 d. <br>';
//Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

$newArray = [];

foreach ($masyvasm as $key=>$value) {
    $newArray[] = $value - $key;
}

echo '<pre>';
print_r($newArray);
echo '<br>'; echo '<br>';
echo '2 e. <br>';

//Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

foreach (range(0,9) as $i) {
    $newArray[] = rand(5,25);
} 

// for ($i = 0; $i < 10; ++$i){
//     $newArray[] = rand(5,25);
// }

// $k = 0; 
// while ($k < 10) {
//     $newArray[] = rand(5,25);
//     ++$k;
// }
echo '<pre>';
print_r($newArray);
echo '<br>'; echo '<br>';
echo '2 f. <br>';
//Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

$even = [];
$odd = [];

foreach ($newArray as $key => $value) {
    if ($key % 2 == 0) {
        $even[] = $value;
    } else {
        $odd[] = $value;
    }
}
echo '<pre>';
var_dump($newArray);
echo '<pre>';
var_dump($even);
echo '<pre>';
var_dump($odd);

echo '<br>'; echo '<br>';
echo '2 g. <br>';

//Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

foreach ($newArray as $key => $value) {
    if ($key % 2 === 0){
        if ($value > 15) {
            $newArray[$key] = 0;
        }
    }
}
echo '<pre>';
print_r($newArray);

echo '<br>'; echo '<br>';
echo '2 h. <br>';

//Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

// $i = 0;
// while ($newArray[$i] <= 10) {
//     ++$i;
// }
$i = 0;
foreach ($newArray as $key => $value) {
    if ($value > 10) {
        $i = $key;
        break;
    }
}

echo "Maziausias indeksas yra: $i";

echo '<br>'; echo '<br>';
echo '2 i. <br>';

//Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

foreach ($newArray as $key => $value) {
    if ($key % 2 == 0) {
        unset($newArray[$key]);
    }
}

echo '<pre>';
print_r($newArray);

echo '<br>'; echo '<br>';
echo '3. <br>';
/*
3.	Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės 
A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
*/

// $randomLetter = ['A', 'B', 'C', 'D'];
// $array = [];
// $countArray = ['A' => 0, 'B' =>0, 'C' =>0,'D' => 0];
// foreach (range(0,199) as $i) {
//     $letter = $randomLetter[rand(0,3)];
//     $array[] = $letter;
//     ++$countArray[$letter];
// }
// echo '<pre>';
// print_r($array);
// echo "Raidziu A yra $countArray[A], raidziu B yra $countArray[B], raidziu C yra $countArray[C], raidziu D yra $countArray[D]";
// echo '<br>'; echo '<br>';

$letters = ['A', 'B', 'C', 'D'];
$array = [];
$length = 0;
$aCount = 0;
$bCount = 0;
$cCount = 0;
$dCount = 0;

do {
    $value = $letters[rand(0, 3)];
    $array[$length++] = $value;
    $check = match ($value) {
        'A' => $aCount++,
        'B' => $bCount++,
        'C' => $cCount++,
        'D' => $dCount++,
    };
} while ($length < 200);

print_r($array);
echo "A: $aCount; B: $bCount; C: $cCount; D: $dCount;<br>";

echo '<br>'; echo '<br>';
echo '4. <br>';
/*
4.	Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
*/

echo '4. <br>';
sort($array);
print_r($array);

echo '<br>'; echo '<br>';
echo '5. <br>';
/*
5.	Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus,
 sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių 
 (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
*/
echo '<br>'; echo '<br>';
echo '6. <br>';
/*
6.	Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai 
nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti 
unikalios savo masyve (t.y. neturi kartotis).
*/
echo '<br>'; echo '<br>';
echo '7. <br>';
/*
7.	Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
*/

echo '<br>'; echo '<br>';
echo '10. <br>';
$mazasBetGeras=[];
foreach(range(0,9) as $i){
    if($i<2)
    {
        $mazasBetGeras[$i]=rand(5,25);
    }
    
    else{
        $mazasBetGeras[$i]=$mazasBetGeras[$i-2]+$mazasBetGeras[$i-1];
    }
    }
    print_r( $mazasBetGeras);

    echo '11. <br>';

$array7 = [];

$length = 0;

do {

    $unique = false;

    do {

        $random = rand(0, 300);

        if (!array_search($random, $array1)) {

            $array7[$length] = $random;

            $unique = true;

            $length++;

        }

    } while (!$unique);

} while ($length < 101);

rsort($array7);

$biggest = $array7[0];

// print_r($array7);

unset($array7[0]);

// print_r($array7);

$sorted = false;

    $array8 = [];

    $array9 = [];

do {

    shuffle($array7);

    $sorted = true;

    $array8 = [];

    $array9 = [];

    $j = 0;

    $sum1 = 0;

    $sum2 = 0;

    foreach($array7 as $value) {

        if ($j % 2 === 0) {

            $array8[] = $value;

            $sum1 += $value;

        } else {

            $array9[] = $value;

            $sum2 += $value;

        }

        $j++;

    }

    $diff = ($sum1 > $sum2) ? $sum1 - $sum2 : $sum2 - $sum1;

    //echo "$diff  ";

    if ($diff > 30) {

        $sorted = false;

        shuffle($array7);

    }

} while (!$sorted);

sort($array8);

rsort($array9);

$array8[] = $biggest;

foreach ($array9 as $value) {

    $array8[] = $value;

}

print_r($array8);


