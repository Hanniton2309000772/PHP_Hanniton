<?php
// String creation
$firstName = "John";
$lastName = "Doe";

// String concatenation
$fullName = $firstName . " " . $lastName;

// String length
$length = strlen($fullName);

// Convert to uppercase
$upper = strtoupper($fullName);

// Convert to lowercase
$lower = strtolower($fullName);

// Replace part of a string
$replaced = str_replace("Doe", "Smith", $fullName);

// Print results
echo "Full Name: $fullName <br>";
echo "Length: $length <br>";
echo "Uppercase: $upper <br>";
echo "Lowercase: $lower <br>";
echo "After Replace: $replaced <br>";
?>