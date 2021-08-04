<?php

/* 1.	Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip 
stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
*/

$vardas = 'Chuck';
$pavarde = 'Norris';
if (strlen($vardas) > strlen($pavarde)) {
    echo $vardas;
} else {
    echo $pavarde;
}
echo '<br>'; echo '<br>';

/* 2.	Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
*/

$name = 'Chuck';
$surename = 'Norris';
echo strtoupper($name);
echo '<br>'; 
echo strtolower($surename);

echo '<br>';echo '<br>';

/* 3.	Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
Jį atspausdinti.
*/
$name = 'Chuck';
$surename = 'Norris';
$firstletters = $name[0].$surename[0];
echo $firstletters;

echo '<br>';echo '<br>';

/*4.	Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo 
ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/
$name = 'Chuck';
$surename = 'Norris';
$lastletters = substr($name, -3).substr($surename, -3);
echo $lastletters;

echo '<br>';echo '<br>';

/*5.	Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” 
(didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
*/
$pavadinimas = 'An American in Paris';
$Newpavadinimas = strtr($pavadinimas, 'Aa', '**' );
echo $Newpavadinimas;

echo '<br>';echo '<br>';

/*6.	Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” 
(didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
*/
$pavadinimas = 'An American in Paris';
echo substr_count($pavadinimas, 'A');
echo '<br>';
echo substr_count($pavadinimas, 'a');
echo '<br>'; echo '<br>';

/*7.	Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. 
Rezultatą atspausdinti. Kodą pakartoti su stringais: 
“Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/

$pavadinimas = 'An American in Paris';
$re = '/[A, a, e,i]/m';
$subst = '';
$result = preg_replace($re, $subst, $pavadinimas);
echo "The result of the substitution is ".$result;

echo '<br>'; echo '<br>';

$kitaspavadinimas = "Breakfast at Tiffany's";
$re = '/[a,e,i,y]/m';
$subst = '';
$newresult = preg_replace($re, $subst, $kitaspavadinimas);

echo "The result of the substitution is ".$newresult;

echo '<br>'; echo '<br>';

$darPavadinimas = '2001: A Space Odyssey';
$re = '/[A,a,e,y,O]/m';
$subst = '';
$darresult = preg_replace($re, $subst, $darPavadinimas);

echo "The result of the substitution is ".$darresult;

echo '<br>'; echo '<br>';
$naujaspavadinimas = "It's a Wonderful Life";
$vowels = [array(]'I', 'a', 'o', 'e', 'u', 'i', ' '];
$pakeistasnaujaspavadinimas = str_replace($vowels, '', $naujaspavadinimas);
echo $pakeistasnaujaspavadinimas;

echo '<br>'; echo '<br>';

/*8.	Stringe, kurį generuoja toks kodas: 'Star Wars: 
Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - 
A New Hope'; Surasti ir atspausdinti epizodo numerį.
*/

$epizodas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $epizodas;



echo '<br>'; echo '<br>';

/*9.	Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
yra žodžių trumpesnių arba lygių nei 5 raidės. 
Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/
$central = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
echo strlen($central);
echo '<br>';
$words = explode(" ", $central);
echo $words[0];

echo '<br>'; echo '<br>';

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2


