<?php
/*
  FizzBuzz Program
    If divisible by 3, print Fizz
    If divisible by 5, print Buzz
    If both, print FizzBuzz
    If none, print number
*/
for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz";
  }
  elseif ($i % 5 == 0) {
    echo "Buzz";
  }
  elseif ($i % 3 == 0) {
    echo "Fizz";
  }
  else {
    echo $i;
  }
  echo "<br>";
}
?>