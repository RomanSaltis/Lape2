<?php

echo 'Uzduotis 1';
echo '<br><br>';
// /*
// 1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.
// */

foreach(range(0, 29) as $value){
    $masyvas[] = rand(20, 40);
    
}
echo '<pre>';
print_r($masyvas);

echo '<br><br>';
echo 'Uzduotis 1b';
echo '<br><br>';

/*
1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.
*/
foreach($masyvas as $value){
    echo $value . ' ';
}


echo '<br><br>';
echo 'Uzduotis 2';
echo '<br><br>';



/*
2. sukurkite masyvą su 10 skaičių nuo 0 iki 9
*/
$masyvas = [];
foreach(range(0, 9) as $value){
    $masyvas[] = $value;
    
}
echo '<pre>';
print_r($masyvas);


echo '<br><br>';
echo 'Uzduotis 2b';
echo '<br><br>';

/*
2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 19
*/
$masyvas = [];
foreach(range(10, 19) as $value) {
    $masyvas[] = $value;
    
}
echo '<pre>';
print_r($masyvas);


echo '<br><br>';
echo 'Uzduotis 2c';
echo '<br><br>';

/*
2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.

t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.
*/

for($i = 0; $i < 100; $i++) {
     echo $masyvas[rand(0, count($masyvas)-1)]. ' ';
    // $masyvas[$i] = $masyvas[rand(0, count($masyvas)-1)];
}
// echo '<pre>';
// print_r($masyvas);


echo '<br><br>';
echo 'Uzduotis 3';
echo '<br><br>';

/*
3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.

reikšmės - skaičiai nuo 0 iki 9.
*/

foreach(range(0, 9) as $i){
    foreach(range(0, 9) as $j){
        $array[$i] = range(0, 9);

    }
    
}
    echo '<pre>';
    print_r($array);

    echo '<br><br>';

// for($i = 0; $i < 10; $i++){
//     for($j = 0; $j < 10; $j++){
//         $array[$i] = range(0, 9);
//     }
// }echo '<pre>';
//     print_r($array);


echo '<br><br>';
echo 'Uzduotis 3b';
echo '<br><br>';

/*
3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).
*/
// foreach($array as $value){
//     echo $array . ' ';
// }

//  foreach(range(0, 9) as $i){
//     foreach(range(0, 9) as $j){
//         $array[$i] = range(0, 9);

//     }
    
// }
foreach($array as $i){
    echo "<br>";
    foreach ($i as $value){
        echo $value." ";
    }
}


echo '<br><br>';
echo 'Uzduotis 3c';
echo '<br><br>';

/*
3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu
*/

foreach($array as $i){
    echo "<br>";
    foreach ($i as $value){
        echo $value * $value." ";
    }
}

echo '<br><br>';
echo 'Uzduotis 4';
echo '<br><br>';
/*
4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.
*/
$gyvunas = ["species","age", "name", "description"];
foreach ($gyvunas as $key => $value ) {
       
   echo 'Gyvunas: ' . $key . ' Reikšmė: ' . $value . '<br>';

}



echo '<br><br>';
echo 'Uzduotis 5';
echo '<br><br>';
/*
5. sukurkite tris masyvus:
$names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
$species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
$descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
aprašus sugalvokite patys. jų reikia 10.

*/
$names = ["Jonas", "Petras", "Juozas", "Onute", "Jadze", "Angele", "Staska", "Albinas", "Jadvyga", "Lasadimantas"];
$species = ["kengūra","gazelė","liūtas", "kiskis", "katinelis", "parsiukas", "ziurke", "kalakutas", "vilkas", "stirna"];
$descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi", "daug kalba", "isidirbineja", "greitai bega", "blogai mato", "daug valgo", "duoda pieno", "ziauriai kietas"];


print_r($names);
print_r($species);
print_r($descriptions);

echo '<br><br>';
echo 'Uzduotis 5b';
echo '<br><br>';
/*
5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
*/
// $masyvass = [];
// foreach(range (0, 19) as $i){
//     foreach()
// }

echo '<br><br>';
echo 'Uzduotis 5b';
echo '<br><br>';
/*
5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.
*/



echo '<br><br>';
echo 'Uzduotis 6';
echo '<br><br>';
/*
6. padarykite daugybos lentelę nuo 1 iki 9.
*/

foreach(range(1, 9) as $i) {
    $mult = [];
    
    foreach(range(1, 9) as $j) {
        $mult[] = $i * $j;
        
    }
    print_r($mult);
}