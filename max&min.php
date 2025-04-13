<?php
// Array of numbers
$numbers = [10, 45, 2, 78, 34, 89, 23];

// Find the maximum and minimum numbers
$maxNumber = max($numbers);
$minNumber = min($numbers);

// Display the results
echo "Numbers: " . implode(", ", $numbers) . "<br>";
echo "Maximum Number: $maxNumber <br>";
echo "Minimum Number: $minNumber <br>";
?>