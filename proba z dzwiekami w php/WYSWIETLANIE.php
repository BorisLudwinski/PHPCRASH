<?php
$matrix = [];

$dzwieki[] = ["c", "c#", "d", "d#", "e", "f", "f#", "g", "g#", "a", "a#", "b"];



for ($x=0; $x < count($dzwieki); $x++) {
    $matrix[$x] = array_push($dzwieki[$x], array_shift($dzwieki[$x]));


}
//  print_r($dzwieki);
 print_r($matrix);



?>