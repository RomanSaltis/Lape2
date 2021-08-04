<?php
// You get an array of numbers, return the sum of all of the positives ones.

// Example [1,-4,7,12] => 1 + 7 + 12 = 20

// Note: if there is nothing to sum, the sum is default to 0.




class PositiveSumTest extends TestCase {
  public function testExamples() {
    $this->assertEquals(15, positive_sum([1, 2, 3, 4, 5]));
    $this->assertEquals(13, positive_sum([1, -2, 3, 4, 5]));
    $this->assertEquals(0, positive_sum([]));
    $this->assertEquals(0, positive_sum([-1, -2, -3, -4, -5]));
    $this->assertEquals(9, positive_sum([-1, 2, 3, 4, -5]));
  }
}