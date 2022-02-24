<?php
$arr = array(1,2,4,7,1,6,2,8);
$partial = 3;
rsort($arr);
print_r($arr);

$sum =0;
foreach($arr as $value){
    $sum += $value;    
}
$avsum = $sum/$partial;


$arr1 = $arr2 = $arr3 = array();


foreach ($arr as $value)
  if (array_sum($arr1) + $value < $avsum){
      $arr1[] = $value;
  } elseif (array_sum($arr2) < array_sum($arr1) && array_sum($arr2) + $value < $avsum ){
      $arr2[] = $value;
  }  
  else
   $arr3[] = $value;
  

$result = array($arr1,$arr2,$arr3);
print_r($result);



