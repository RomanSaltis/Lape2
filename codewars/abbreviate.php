<?php
// Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.

// The output should be two capital letters with a dot separating them.

// It should look like this:

// Sam Harris => S.H

// patrick feeney => P.F

// function abbrevName($name)
// { 
//   return;
// }

$name = 'paulius sivys';
$ename = explode(' ', $name);
foreach($ename as $value){
    
    $sname[] = strtoupper(substr($value, 0, 1)). ".";
    $geras = implode($sname);
}
echo '<br>';
print_r($ename);
echo '<br>';
print_r($sname);
echo '<br>';
print_r($geras);

function abbrevName($name)
{$exname = explode(' ', $name);
 foreach($exname as $word){
   $upper[] = strtoupper(substr($word, 0, 1)); 
 }
  return implode('.', $upper);
}