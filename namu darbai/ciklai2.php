<?php

echo 'Uzduotis 1.a';
/*
1.	Naršyklėje nupieškite linija iš 400 “*”. 
a)	Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
*/
// $zvaigzdutes = '';
// for($i = 0; $i < 400; $i++){
//     $zvaigzdutes .= "*";
// }
// echo $zvaigzdutes;
// echo '<br><br><br>';
// echo "<span style=\"word-break: break-all\">$zvaigzdutes</span>";

// echo '<br><br><br>';
echo 'Uzduotis 1.b';

/*
b)	Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
*/
// $zvaigzdutes = '';
// for($i = 0; $i < 400; $i++){
//     $zvaigzdutes .= "*";
//     if($i % 50 == 0){
//         echo '<br> ';
        
//     }
//     echo $zvaigzdutes;
// }




echo '<br><br><br>';
echo 'Uzduotis 2';
echo '<br><br>';
/*
2.	Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir 
suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
*/
$daugiau150 = 0;
for($i = 0; $i < 300; $i++){
    
    $skaicius = rand(0, 300);
    if($skaicius > 150){
        $daugiau150++;
    }

    if($skaicius > 275) {
        echo "<span style='color: red;'>$skaicius </span>";
        
    }else {
        echo "<span>$skaicius </span>";
    }
    
    
    
    
    
    
}
echo '<br><br><br>';
    echo "Skaiciu didesniu nei 150 yra: $daugiau150";
echo '<br><br><br>';



echo '<br><br><br>';
echo 'Uzduotis 3';
/*
3.	Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 
pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. 
Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai
 matytųsi ekrane.
 */

 echo '<br><br><br>';
echo 'Uzduotis 4';
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

echo '<br><br><br>';
echo 'Uzduotis 1.b';
/*
5.	Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
*/

echo '<br><br><br>';
echo 'Uzduotis 1.b';
/*
6.	Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
a)	Iškritus herbui;
*/

echo '<br><br><br>';
echo 'Uzduotis 1.b';
/*
b)	Tris kartus iškritus herbui;
*/


echo '<br><br><br>';
echo 'Uzduotis 1.b';
/*
c)	Tris kartus iš eilės iškritus herbui;
*/


echo '<br><br><br>';
echo 'Uzduotis 1.b';
/*
7.	Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. Taškų kiekį generuokite funkcija rand(). Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.
8.	Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
9.	Panaudokite***********
10.	Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
a)	“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
b)	“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
11.	Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.
*/