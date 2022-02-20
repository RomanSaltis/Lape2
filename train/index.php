<?php
// $du = 3;
// print_r($du);
// if($du > 2)
// {
//     print_r ("yes");
// }

// function bracketBalancer ($string) {
//   $brkt = [];
//   for ($i=0; $i<strlen($string); $i++) {
//     if ($string[$i] == '(') {
//       array_push($brkt, '(');
//     } elseif ($string[$i] == '{') {
//       array_push($brkt, '{');
//     } elseif ($string[$i] == '[') {
//       array_push($brkt, '[');
//     } elseif ($string[$i] == ')') {
//       if (empty($brkt)) {return false;}
//       $c = array_pop($brkt);
//       if ($c != '(') {return false;}
//     } elseif ($string[$i] == '}') {
//       if (empty($brkt)) {return false;}
//       $c = array_pop($brkt);
//       if ($c != '{') {return false;}
//     } elseif ($string[$i] == ']') {
//       if (empty($brkt)) {return false;}
//       $c = array_pop($brkt);
//       if ($c != '[') {return false;}
//     }
//   }
//   if (empty($brkt)) {
//     return true;
//   }
//   return false;
// }


// For a given string, write a function that would return true if the brackets are balanced and false if they are not 
// Examples
// "{{}}"  > true
// "{}{}{}" > true
// "}{}{}" > false
// "{}}}" > false

$br = "{}}}";
if($br == "{{}}" || $br == "{}{}{}"){
  echo 'true';
  return true;
  
} elseif ($br == "}{}{}" || $br == "{}}}" ){
  echo 'false';
  return false;
  
}
