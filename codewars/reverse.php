<?php

// function reverseSeq ($n) {
//     $n=51;
//   $rev = array_reverse($n);
  
// };
// print_r ($n);

foreach(range(1, 5) as $value){
    $n[] = ($value);
}
$rev = array_reverse($n);
// echo '<pre>';
print_r ($n);
echo '<pre>';
print_r($rev);

function reverseSeq($n) {
  foreach(range(1, $n) as $value){
    $val[] = $value;
}
    $rev = array_reverse($val);
    return $rev;
};
print_r (reverseSeq(5));

// function test($a){
//     $z = $a+3;
//     return $z;
// }
// echo test(5);