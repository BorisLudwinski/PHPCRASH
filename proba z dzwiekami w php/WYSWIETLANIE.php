<?php
$dzwieki = ["c", "c#", "d", "d#", "e", "f", "f#", "g", "g#", "a", "a#", "b"];

$pierwszy_dzwiek = array_shift($dzwieki);
$dzwieki1 = array_push($dzwieki, $pierwszy_dzwiek);

 print_r($pierwszy_dzwiek);
 print_r($dzwieki);
 
//  print_r ($new_numbers);


//  for($x = 0; $x <= 11; $x++) {
//     echo " number: $x<br/>";
// }
?>