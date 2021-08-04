<?php

/*1.	Naršyklėje nupieškite linija iš 400 “*”. 
a)	Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
b)	Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
*/
echo '1. <br>';
$zvaigzdutes = ''; 
for ($i = 0; $i < 400; $i++) {
    $zvaigzdutes .= '*';
}
echo "<span style=\"word-break: break-all; white-space: normal\">$zvaigzdutes</span>";
echo '<br>';
echo '1.2 <br>';

for($i = 1; $i <=400; ++$i) {
    echo '*';
    if ($i % 50 == 0) {
        echo '<br>';
    }

}

echo '<br>';

/*
2.	Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais 
ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
*/
$over150 = 0;
for ($i = 0; $i < 300; $i++) {
    $skaicius = rand(0, 300);
    if ($skaicius > 150) {
        $over150++;
    }
    if ($skaicius > 270) {
        echo "<span style='color: red;'>$skaicius </span>";
    } else {
        echo "<span>$skaicius </span>";
    }
}
echo '<br>';
echo "skaiciu didesniu uz 150 yra $over150";
echo '<br><br><br>';

/*
3.	Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 
pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. 
Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
*/
echo '3. <br>';
$randomSkaicius = rand(3000, 4000); // sugeneruoja random skaiciu 
/*
pradeda cikla nuo 77, kas yra pirmas skaicius, kuris dalinasi is 77 be liekanos
ciklas sukasi kol $i yra maziau uz ta random sugeneruota skaiciu
tradiciskai, mes $i kiekviena cikla didinam +1, taciau kaip enzo pastebejo, ciklas sukasi ""per daug kartu"",
zinom pirma skaiciu, kuris dalinasi is 77 be liekanos, kitas skaicius, kuris dalinsis be liekanos is 77, bus $i + 77.
taigi, vietoje to, kad $i kaskart didinti vienu, didinam 77iais.
$i++ yra $i = $i + 1
$i += 77 yra $i = $i + 77
*/
for ($i=77; $i <= $randomSkaicius; $i +=77) { 
    if ($i == 77) { //pirmas skaiciuis bus echointas be kablelio
        echo $i; // '77'
    } else {
        echo ", $i"; // visi kiti bus su kableliu, tarpu ir tada $i reiksme.  ', 231'
    }
}
echo '4. <br>'; 
/*
4.	Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, 
kad kvadratas ekrane atrodytų kvadratinis.

* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *

*/
echo '4. <br>'; echo '. <br>'; 
echo '<div style="display: block">';
for ($i = 1; $i <= 100; $i++) {
    echo '<div style="display: block;"';
    for ($j = 1; $j <=100; $j++) {
        echo '<span>*</span>';
    }
    echo '</div>';
}
echo '</div>';


/*
5.	Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
*/
echo '5. <br>';
$size = 100;
echo '<div style="display: block">';
for ($i = 0; $i < $size; $i++) {
    echo '<div style="display: block;">';
    for ($j = 0; $j < $size; $j++) {
        if ($j == $i || $j == $size - 1 - $i) {
            echo '<span style="color: red;">*</span>';
        } else {
            echo '<span>*</span>';
        }
    }
    echo '</div>';
}
echo '</div>';


/*
6.	Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius.
 Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
 Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
a)	Iškritus herbui;
b)	Tris kartus iškritus herbui;
c)	Tris kartus iš eilės iškritus herbui;
*/
echo '6. <br>';
echo '<br>pirmas scenarijus<br>';
do {
    $metimas = (rand(0,1) == 0) ? 'H' : 'S';
    echo "$metimas <br>";
} while ($metimas != 'H');
echo '<br>antras scenarijus<br>';

$herbai = 0;
do {
    $metimas = (rand(0,1) == 0) ? 'H' : 'S';
    if ($metimas == 'H') {
        $herbai++;
    }
    echo "$metimas <br>";
} while ($herbai < 3);

echo '<br>trecias scenarijus<br>';


$herbai = 0;
do {
    $metimas = (rand(0,1) == 0) ? 'H' : 'S';
    if ($metimas == 'H') {
        $herbai++;
    } else {
        $herbai = 0;
    }
    echo "$metimas <br>";
} while ($herbai < 3);

echo '<br>'; echo '<br>';
echo '7. <br>';
/*
7.	Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, 
Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir 
“Partiją laimėjo: laimėtojo vardas”. Taškų kiekį generuokite funkcija rand(). 
Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.
*/
$petroTaskai = 0;
$kazioTaskai = 0;
while ($petroTaskai <= 222 && $kazioTaskai <= 222) {
    $petroTaskai += rand(10, 20);
    $kazioTaskai += rand(5, 25);
}
echo "Petro taskai: $petroTaskai; Kazio taskai: $kazioTaskai; 
Partija laimejo: " . (($petroTaskai > $kazioTaskai) ? 'Petras' : (($kazioTaskai > $petroTaskai) ? 'Kazys' : 'Lygiosios'));
echo '<br>'; echo '<br>';

/*
8.	Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), 
kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės 
RGB spalvos (perkrovus puslapį spalvos turi keistis).
*/
echo '<br>'; echo '<br>';
echo '8 <br>';
echo '8. <br>';

$puse = 10;



for ($i = 1; $i < $puse; $i++) {

    for ($j = $i; $j < $puse; $j++)

        echo '&nbsp;&nbsp;&nbsp;';

    for ($j = 2 * $i - 1; $j > 0; $j--)

        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';

    echo '<br>';

}

for ($i = $puse; $i > 0; $i--) {

    for ($j = $puse - $i; $j > 0; $j--)

        echo '&nbsp;&nbsp;&nbsp;';

    for ($j = 2 * $i - 1; $j > 0; $j--)

        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';

    echo "<br>";

}

/*


*/
echo '<br>'; echo '<br>';
echo '8 <br>';
echo '9. <br>';

$rombas = '***********';

for ($i = 0; $i < 21; $i++) {

    for ($j = 0; $j < $i; $j++) {

        echo '&nbsp;';

    }

    echo '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<br>' ;

}

/*


*/
echo '<br>'; echo '<br>';
echo '8 <br>';
$viniesGylis=850;
$kalimuSkaicius=0;
$visoViniu=5;
while($visoViniu!=0){
do{
    $viniesGylis-=rand(5,20);
    $kalimuSkaicius++;
}
while($viniesGylis>=0);
$visoViniu--;
}
echo 'mazais smugiais 5 vinys <br>';
echo $kalimuSkaicius,'<br>';
//B
$viniesGylis2=850;
$kalimuSkaicius2=0;
$visoViniu2=5;
while($visoViniu2!=0){
    if(rand(0,1)==0){
do{
    $viniesGylis2-=rand(20,30);
    $kalimuSkaicius2++;
}
while($viniesGylis2>=0);}
$visoViniu2--;
}
echo 'dideliais smugiais 5 vinys <br>';
echo $kalimuSkaicius2;

/*



*/
echo '11. <br>';

$skaiciuKiekis = 0;

$skaiciuStringas = '';

$pirminiai = '';



do {

    $unikalusSkaicius = false;

    do {

        $random = rand(1, 200);

        if (!strpos($skaiciuStringas, $random)) {

            $skaiciuStringas .= $random . ' ';

            $skaiciuKiekis++;

            $unikalusSkaicius = true;

            $pirminis = true;

            for ($i = 2; $i <= $random/2; $i++){

                if ($random % $i == 0) {

                    $pirminis = false;

                }

            }

            if ($pirminis) {

                $pirminiai .= $random . ' ';

            }

        }

    } while (!$unikalusSkaicius);

} while ($skaiciuKiekis < 50);

echo $skaiciuStringas . '<br>';

echo $pirminiai;