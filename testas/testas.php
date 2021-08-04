<?php
// 1. Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. 
// Tiems masyvo nariams, kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), 
// priskirkite reikšmę “A”. Likusiems nariams priskirkite reikšmę “B”. 
// Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();

$masyvasm = [];
print_r($masyvasm);
foreach(range(0,100) as $i) {
    $masyvasm[] = rand(0, 100);
foreach ($masyvasm as $i=>$value){
 if($i % 10 === 0){
    $masyvasm[$i]= 'A';
} else {
    $masyvasm[$i] = 'B';
}
}

}
echo '<pre>';
print_r($masyvasm);
echo '<br>'; echo '<br>';





echo '<br>'; echo '<br>';
 echo '2. <br>';
// 2. Pakeiskite pirmąjame uždavinyje sukurtą masyvą. Visas masyvo reikšmes (“A” ir “B”) 
// pakeiskite masyvais, kurie yra atsitiktinio dydžio (ilgio) nuo 3 iki 10. 
// Naujai sukurtų masyvų reikšmes užpildykite atitinkamai “A” arba “B” 
// stringais (pagal tai kokią raidę keičiate į masyvą). 
// Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();

foreach ($masyvasm as $key=>$value){
    $masyvasm[$key] = rand(3, 10);
    
}
echo '<pre>';
print_r($masyvasm);

