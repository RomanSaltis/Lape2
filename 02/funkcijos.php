<?php

   function sudeti($vienas = 10, $du = 11)
   {
      return $vienas + $du;
   }
   echo sudeti().'<br>';
   echo sudeti(1).'<br>';
   echo sudeti(1,2).'<br>';
echo "<hr>";


      function vidurkis(...$skaiciai)
   {
      $sudetis = 0;
      foreach ($skaiciai as $val)
    {
      $sudetis += $val;
    }
    $vidurkis = $sudetis / count($skaiciai);
    return $vidurkis;
   }
   echo vidurkis(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

echo "<hr>";

// $kintamasis = 'Labas';
// function labas()
// {
//     echo $kintamasis;
// }

// labas();

echo "<hr>";

$kintamasis = 'Labasas';
function labas()
{
     global $kintamasis;
    echo $kintamasis;
}
labas();


echo "<hr>";

$kintamasis1 = 'Sveikas';
function sveikas($kintamasis1)
{
    
    echo $kintamasis1;
}
sveikas($kintamasis1);

echo "<hr>";

echo "<hr>";
   function foo() {
       static $index = 0;
       $index++;
       echo "$index\n";
   }
   foo();
foo();
foo();
echo "<hr>";




