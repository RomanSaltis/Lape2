<?php
echo '<br>'; echo '<br>';
echo '1. <br>';
/*
1.	Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 
5 elementų su reikšmėmis nuo 5 iki 25.
*/

// $komoda = [];
// foreach (range(1, 10) as $stalcius) {
//     foreach (range (1, 5) as $skyrelis) {
//         $komoda[$stalcius][$skyrelis] = rand(5, 25);
//     }
    
// }
// echo '<pre>';
// print_r($komoda);

echo '<br>'; echo '<br>';
echo '2a. <br>';
/*
2.	Naudodamiesi 1 uždavinio masyvu:
a)	Suskaičiuokite kiek masyve yra elementų didesnių už 10;
*/
// $moreTen=0;
// foreach ($komoda as $stalcius){
//     foreach ($stalcius as $skyrelis)
//     if ($skyrelis > 10){
//         $moreTen++;
//     }
// }
// echo "masyve yra $moreTen elementai didesni už 10";

echo '<br>'; echo '<br>';
echo '2.b. <br>';
/*
2.	Naudodamiesi 1 uždavinio masyvu:
b)	Raskite didžiausio elemento reikšmę;
 */
// $max = 0;
// foreach ($komoda as $stalcius){
//     foreach($stalcius as $skyrelis){
//         if ($skyrelis > $max){
//             $max = $skyrelis;
//         }
//     }
// }
// echo $max;

echo '<br>'; echo '<br>';
echo '2.c. <br>';
/*
2.	Naudodamiesi 1 uždavinio masyvu:
c)	Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas 
(t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
*/
$array = [];
foreach(range(0,9) as $i) {
    foreach(range(0,4) as $j) {
        $array[$i][] = rand(5,25);
    }
}

echo '<pre>';
print_r($array);

echo '<br>'; echo '<br>';

$sumos = [];
foreach(range(0,4) as $j) {
    $sum = 0;
    foreach (range(0,9) as $i){
        $sum += $array[$i][$j];
    }
    $sumos[] = $sum;
}

echo '<pre>';
print_r($sumos);

echo '<br>'; echo '<br>';
echo '2.d. <br>';
/*
2.	Naudodamiesi 1 uždavinio masyvu:
d)	Visus masyvus “pailginkite” iki 7 elementų
*/
foreach (range(0, count($array)-1) as $i) {
    foreach(range(0,1) as $j) {
        $array[$i][] = rand(5,25);
    }
}
echo '<br>';
echo '<pre>';
print_r($array);

echo '<br>'; echo '<br>';
echo '2.e. <br>';
/*
2.	Naudodamiesi 1 uždavinio masyvu:
e)	Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir 
sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė 
turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
*/
$sumos = [];

foreach(range(0, count($array)-1) as $i){
    $sum = 0;
    foreach($array[$i] as $value) {
        $sum += $value;
    }
    $sumos[] = $sum;
}

echo '<br>';
echo '<pre>';
print_r($sumos);

echo '<br>'; echo '<br>';
echo '3. <br>';
/*
3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su 
atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės 
iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
*/
// function randomLetter() {
//     $raides=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
//     return $raides[rand(0,25)];
// }


// $array = [];
// foreach(range(0,9) as $i) {
//     $temp = [];
//     foreach(range(0, rand(1,19)) as $j){
//         $temp[] = randomLetter();
//     }
//     sort($temp);
//     $array[] = $temp;
// }
$array = [];

foreach(range(0, 9) as $i){
    $letters = [];
        foreach(range(0, rand(1, 19)) as $j){
        $letters[] = range('A', 'Z')[rand(0, 25)];

            
        
    }
    sort($letters);
    $array[] = $letters;

        
}


echo '<br>';
echo '<pre>';
print_r($array);

echo '<br>'; echo '<br>';
echo '4. <br>';
/*
4.	Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai 
trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų 
didžiojo masyvo visai pradžioje.
*/
// $arrayWithK = [];
// $arrayWithoutK = [];
// foreach(range(0, count($array)-1) as $i) {
//     if (in_array("K", $array[$i])){
//         $arrayWithK[] = $array[$i];
//     } else {
//         $arrayWithoutK[] = $array[$i];
//     }
// }

// sort($arrayWithK);
// sort($arrayWithoutK);
// $sorted = array_merge($arrayWithK, $arrayWithoutK);

// echo '<pre>';
// print_r($sorted);

// usort($array, function($a, $b){
//     return count ($a) <=> count ($b);
// });
sort($array);

echo '<pre>';
print_r($array);


echo '<br>';
echo '<pre>';


echo '<br>'; echo '<br>';
echo '5. <br>';
/*
5.	Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas 
[user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius 
nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
*/
$array = [];
$userIds = [];
$places = [];
while (count($userIds) < 30){
    $random = rand(1,1000000);
    if (!in_array($random, $userIds)) {
        $userIds[] = $random;
    }
}

while (count($places) < 30){
    $random = rand(1,100);
    if (!in_array($random, $places)) {
        $places[] = $random;
    }
}

foreach(range(0, count($userIds)-1) as $i) {
    $array[] = ['user_id' => $userIds[$i], 'place_in_row' => $places[$i]];
}
echo'<pre>';
print_r($array);

echo '<br>'; echo '<br>';
echo '6. <br>';
/*
6.	Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui 
išrūšiuokite pagal place_in_row mažėjančia tvarka.
*/

$array = [];
$userIds = [];
$places = [];
while (count($userIds) < 30){
    $random = rand(1,1000000);
    if (!in_array($random, $userIds)) {
        $userIds[] = $random;
    }
    // sort($userIds);
}

while (count($places) < 30){
    $random = rand(1,100);
    if (!in_array($random, $places)) {
        $places[] = $random;
    }
    // rsort($places);
}

foreach(range(0, count($userIds)-1) as $i) {
    $array[] = ['place_in_row' => $places[$i], 'user_id' => $userIds[$i] ];
}

echo '<br>'; echo '<br>';

shuffle($array);
sort($array);
usort($array, function($a, $b){
    return $b['user_id'] <=> $a['user_id'];
});

echo'<pre>';
print_r($array);

echo '<br>'; echo '<br>';
echo '7. <br>';
/*
7.	Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. 
Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
*/
foreach($array as $key => $value) {
    $randomName = rand(4,14);
    $randomSurname = rand(4,14);
    $name = '';
    $surname = '';
    foreach(range(0, $randomName) as $i){
        $name = $name . range('A','Z')[rand(0,25)];
    } 
    foreach(range(0, $randomSurname) as $j){
        $surname .= range('A','Z')[rand(0,25)];
    } 
    $array[$key]['name'] = $name;
    $array[$key]['surname'] = $surname;
    
}

echo'<pre>';
print_r($array);

echo "<h2>Septinta   užduotis</h2>";
echo "<h3><br>Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.</h3>";
 
$randname = "";
$randsurname = "";
$genarray = [[]];
 
for($i = 0; $i < 30; $i++){
    for($j = 0; $j < 1 ; $j++){ 
        $smallarr = array("user_id" => rand(1,1000000),"place_in_row" => rand(0,100));
        $genarray[$i] = $smallarr;
    }
}
 
for($i = 0; $i < 30; $i++){
    for($j = 0; $j < 2 ; $j++){
        for($k = 0; $k < rand(0,15); $k++){
            $randletter = chr((rand(97,122)));
            $randname .= $randletter;
        } 
        for($k = 0; $k < rand(0,15); $k++){
            $randletter2 = chr((rand(97,122)));
            $randsurname .= $randletter2;
        }
        $namesur = array("name" => $randname,"surname" => $randsurname);
        $genarray[$i] = array_merge($genarray[$i],$namesur);
    }
    $randname = "";
    $randsurname = "";
}
echo "<pre>";
echo "Sugeneruotas masyvas: <br><br>";
echo "User ID\t        Place in row\tName\t                Surname";
foreach ( $genarray as $var ) {
    echo "\n", $var['user_id'], "\t\t", $var['place_in_row'] , "\t\t", $var['name'];
    if(strlen($var['name']) < 8) {
        echo "\t\t\t", $var['surname'];
    }else if(strlen($var['name']) >= 8 && strlen($var['name']) < 16) {
        echo "\t\t", $var['surname'];
    }else{
        echo "\t", $var['surname'];
    }
}
echo "</pre>";


echo '<br>'; echo '<br>';
echo '8. <br>';
/*
8.	Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: 
generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. 
Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite 
atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
*/

$array = [];
foreach(range(0,9) as $i) {
    $random = rand(0,5);
    if ($random !== 0) {
        $secondLevelArray = [];
        foreach(range(0, $random-1) as $j) {
            $secondLevelArray[] = rand(0,10);
        }
        $array[] = $secondLevelArray;
    } else {
        $array[] = rand(0,10);
    }
}

echo '<pre>';
print_r($array);




echo '<br>'; echo '<br>';
echo '9. <br>';
/*
9.	Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, 
kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, 
to masyvo reikšmių sumos.
*/
