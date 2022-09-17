

<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string) . " // Get the length of a string
<br/>";

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o') . " // Find the position of the first occurrence of a substring in a string
<br/>";

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o') . " // Find the position of the last occurrence of a substring in a string
<br/>";

// Reverse a string
echo strrev($string). " // Reverse a string
<br/>";

// Convert all characters to lowercase
echo strtolower($string) . " // Convert all characters to lowercase
<br/>";

// Convert all characters to uppercase
echo strtoupper($string) . "// Convert all characters to uppercase
<br/>";

// Uppercase the first character of each word
echo ucwords($string) . " // Uppercase the first character of each word <br/>";

// String replace
echo str_replace('World', 'Everyone', $string) . ' replace' . "<br/>";

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5) . "// Return portion of a string specified by the offset and length
<br/>";
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES' . "// Starts with
<br/>  ";
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2) . "// HTML Entities
<br/>";

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy') . "// Formatted Strings - useful when you have outside data
<br/>";
printf('1 + 1 = %f', 1 + 1); // float

?>