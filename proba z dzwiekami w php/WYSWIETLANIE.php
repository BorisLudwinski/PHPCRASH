<?php
$matrix[] = [];

$dzwieki = [
    1 => 'c', 
    1 => 'c#', 
    2 => 'd', 
    3 => 'd#', 
    4 => 'e',
    5 => 'f', 
    6 => 'f#', 
    7 => 'g', 
    8 => 'g#', 
    9 => 'a',
    10 => 'a#', 
    11 => 'b',
];




function moveElement(&$dzwieki, $a, $b) {
    $out = array_splice($dzwieki, $a, 1);
    array_splice($dzwieki, $b, 0, $out);
}


foreach($dzwieki as $key => $value) {
    echo "$key - $value";
    $matrix[$key] = moveElement($dzwieki, 0, 11);
    print_r($dzwieki);
}


echo $matrix;
?>