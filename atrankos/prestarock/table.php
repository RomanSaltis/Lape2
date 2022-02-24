<?php

$data = array(
    array(
        'Name' => 'Trikse',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Vardenis',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ),  
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Jonas',
        'Color' => 'Pink'
        ),
);

print_r ($data);
// echo'<pre>';



$i=0;
foreach( $data as $items)
{
    
 foreach ($items as $key => $value)
 {
        if ($i== 0) // print header
   {
     printf("[%s]|",   $key );
    echo $key;
     echo "\n";
   }
   printf("[%s]|",   $value);
 }
 echo "\n"; // don't forget the newline at the end of the row!
}



// for($i=0; $i<strlen($a); $i++){
    
    
//     if($i % 12 == 0){
//         echo '+';
//     } echo '-';
//     if($i % 50 == 0){
//         echo '<br>';
//     };

// } echo '<br>';


