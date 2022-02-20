

<?php

// It's pretty straightforward. 
// Your goal is to create a function that removes the first and last characters of a string. 
// You're given one parameter, the original string. 
// You don't have to worry with strings with less than two characters.

// function remove_char(string $s): string {
//   // Write your code here
// }


// class RemoveCharTest extends TestCase {
//   public function testFixed() {
//     $this->assertEquals('loquen', remove_char('eloquent'));
//     $this->assertEquals('ountr', remove_char('country'));
//     $this->assertEquals('erso', remove_char('person'));
//     $this->assertEquals('lac', remove_char('place'));
//   }
// }
$s = 'geras';
function remove($s){

    $removed = substr($s, 1, -1 );
    return $removed;
    
}
print_r (remove($s));
    

