<?php
//Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
//Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir 
//pavardės kintamuosius atspausdintų tokį sakinį :
//"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
$vardas = 'Roman';
$pavarde = 'Šaltis';
$gimmetai = 1982;
$dabartis =  2021;
$amzius = $dabartis - $gimmetai;

echo "Aš esu $vardas $pavarde. Man yra $amzius metai.";
echo '<br>'; echo '<br>';

/*
2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite
atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. 
Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
*/

$skaicius1 = rand(0, 4);
$skaicius2 = rand(0, 4);
$rezultatas = 0;
echo "$skaicius1, $skaicius2";
echo '<br>';
if ($skaicius1 == 0 || $skaicius2 == 0) {
    echo 'Nenusišnekėk su savo nuliais';
} elseif ($skaicius1 >= $skaicius2) {
    $rezultatas = $skaicius1 / $skaicius2;
} else {
    $rezultatas = $skaicius2 / $skaicius1;
}
echo '<br>';
echo "$skaicius1, $skaicius2";
echo '<br>';echo '<br>';
echo var_dump(round($rezultatas, 2));



echo '<br>'; echo '<br>';

//3 Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() 
//jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. 
//Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$skaicius3 = rand(0, 25);
$skaicius4 = rand(0, 25);
$skaicius5 = rand(0, 25);
echo "Pirmas skaičius $skaicius3, antras skaičius $skaicius4, trečias $skaicius5";

echo '<br>';

if ($skaicius3 > $skaicius4 && $skaicius3 < $skaicius5) {
    echo "Vidurinė reikšmė $skaicius3";    
} elseif ($skaicius3 > $skaicius5 && $skaicius3 < $skaicius4) {
    echo "Vidurinė reikšmė $skaicius3";
} elseif ($skaicius4 > $skaicius3 && $skaicius4 < $skaicius5) {
    echo "Vidurinė reikšmė $skaicius4";
}elseif ($skaicius4 > $skaicius5 && $skaicius4 < $skaicius3) {
    echo "Vidurinė reikšmė $skaicius4";
} 
else {
    echo "Vidurinė reikšmė $skaicius5";
}

echo '<br>'; echo '<br>';

/*4.	Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji 
(naudokite rand() funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, 
ar galima sudaryti trikampį ir atsakymą atspausdintų. 
*/
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if ($a + $b > $c && $a + $c > $b && $c + $b > $a) {
    echo "su kraštinėmis: $a, $b, $c trikampį sudaryti galima";
}else{
    echo "su kraštinėmis: $a, $b, $c trikampio sudaryti NEgalima";
}

echo '<br>'; echo '<br>';

/* 5.	Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
(sprendimui masyvo nenaudoti).
*/
$pirmas = rand(0, 2);
$antras = rand(0, 2);
$trecias = rand(0, 2);
$ketvirtas = rand(0, 2);
$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

if ($pirmas == 0) {
    ++$nuliai;
}elseif ($pirmas == 1) {
    ++$vienetai;
}else {
    ++$dvejetai;
}
echo '<br>'; echo '<br>';

if ($antras == 0) {
    ++$nuliai;
}elseif ($antras == 1) {
    ++$vienetai;
}else {
    ++$dvejetai;
}
echo '<br>'; echo '<br>';
if ($trecias == 0) {
    ++$nuliai;
}elseif ($trecias == 1) {
    ++$vienetai;
}else {
    ++$dvejetai;
}
echo '<br>'; echo '<br>';
if ($ketvirtas == 0) {
    ++$nuliai;
}elseif ($ketvirtas == 1) {
    ++$vienetai;
}else {
    ++$dvejetai;
}
echo '<br>'; echo '<br>';
echo "Nulių yra: $nuliai, vienetų yra: $vienetai, dvejatų yra: $dvejetai";

echo '<br>'; echo '<br>';

echo $pirmas, $antras, $trecias, $ketvirtas;
echo '<br>'; echo '<br>';

/*
6.	Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį 
atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
*/
$h = rand(1, 6);
echo "Atsakymas '<h$h>', '$h', '</h$h>'";

echo '<br>'; echo '<br>';

/*
7.	Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
*/

$t = rand(-10, 10);
$u = rand(-10, 10);
$o = rand(-10, 10);
echo '<br>'; echo '<br>';
if ($t < 0) {
    echo "<p> <font color=green>$t</font> </p>";
} elseif ($t == 0){
    echo "<p> <font color=red>$t</font> </p>";
} else {
    echo "<p> <font color=blue>$t</font> </p>";
}

echo '<br>'; echo '<br>';
if ($u < 0) {
    echo "<p> <font color=green>$u</font> </p>";
} elseif ($u == 0){
    echo "<p> <font color=red>$u</font> </p>";
} else {
    echo "<p> <font color=blue>$u</font> </p>";
}
echo '<br>'; echo '<br>';
if ($o < 0) {
    echo "<p> <font color=green>$o</font> </p>";
} elseif ($o == 0){
    echo "<p> <font color=red>$o</font> </p>";
} else {
    echo "<p> <font color=blue>$o</font> </p>";
}
echo '<br>'; echo '<br>';

/* 8.	Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, 
daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą,
 kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
 Žvakių kiekį generuokite rand() funkcija nuo 5 iki 3000.
*/

$vienetoKaina = 1;
$kiekis = rand(5, 3000);


if ($kiekis > 1000 && $kiekis <= 2000) {
    $vienetoKaina = $vienetoKaina - ($vienetoKaina * 0.03);
} elseif ($kiekis > 2000) {
    $vienetoKaina = $vienetoKaina - ($vienetoKaina *  0.04);
} else {$vienetoKaina = 1;}
echo "Perkama $kiekis žvakių, vienos žvakės kainą $vienetoKaina Eur";

echo '<br>'; echo '<br>';

/*9.	Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, 
kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. 
Rezultatus apvalinkite iki sveiko skaičiaus.
*/

$z = rand(0, 100);
$x = rand(0, 100);
$c = rand(0, 100);
$vidurkis = ($z + $x + $c) / 3;
echo "Vidurkis yra ". round($vidurkis);

echo '<br>'; echo '<br>';
if ($z < 90 && $z > 10 && $x < 90 && $x > 10 && $c < 90 && $c > 10 ) {
    echo "Aritmetinis vidurkis atmetus tas reikšmes, 
kurios yra mažesnės nei 10 arba didesnės nei 90 skaičių $z, $x, $c yra ". round($vidurkis);
}

/* 10.	Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). 
Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. 
Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo 
ir pridedamų sekundžių skaičių.
*/

