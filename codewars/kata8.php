<?php
// // You get an array of numbers, return the sum of all of the positives ones.

// // Example [1,-4,7,12] => 1 + 7 + 12 = 20

// // Note: if there is nothing to sum, the sum is default to 0.




// class PositiveSumTest extends TestCase {
//   public function testExamples() {
//     $this->assertEquals(15, positive_sum([1, 2, 3, 4, 5]));
//     $this->assertEquals(13, positive_sum([1, -2, 3, 4, 5]));
//     $this->assertEquals(0, positive_sum([]));
//     $this->assertEquals(0, positive_sum([-1, -2, -3, -4, -5]));
//     $this->assertEquals(9, positive_sum([-1, 2, 3, 4, -5]));
//   }
// }

function no_space(string $s): string {
  // Your code here
}

class RemoveStringSpacesTest extends TestCase {
  public function testExamples() {
    $this->assertEquals('8j8mBliB8gimjB8B8jlB', no_space('8 j 8   mBliB8g  imjB8B8  jl  B'));
    $this->assertEquals('88Bifk8hB8BB8BBBB888chl8BhBfd', no_space('8 8 Bi fk8h B 8 BB8B B B  B888 c hl8 BhB fd'));
    $this->assertEquals('8aaaaaddddr', no_space('8aaaaa dddd r     '));
  }
}