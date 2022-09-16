<?php
$fruits = ['apple', 'orange' , 'pear'];


// ilość elementów w arrayu
// echo count($fruits);

// sprawdzanie zawartosci arraya
// var_dump(in_array('apples', $fruits));





// Dodawanie do arraya
$fruits[] = 'grape'; // setting default


// Dodawanie do arraya
array_push($fruits, 'blueberry', 'cherry', 'banana');

// Dodawanie na poczatek arraya
// array_unshift($fruits, 'mango', 'strawberry');

// //////////////  REMOVE FROM ARRAY /// ////// ////////// 

// Remove from the end
array_pop($fruits);
// remove from beginnig of the array 
array_shift($fruits);

// REMOVE CHOOSEN ARRAY ELEMENT
// unset($fruits[2]);

//  SPLIT INTO CHUNKS OF CHOOSEN VALUE !
// $chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);
 

//////           ///////////    ŁĄCZENIE ARRAYÓW; D////////

$arr1 = [1,2,3,];
$arr2 = [4,5,56,6];
// $arr3 = array_merge($arr1, $arr2);


// $arr4 = [...$arr1];

// print_r($arr4);

// $arr4 = [...$arr1, ...$arr2];

// print_r($arr4);


// print_r($arr3);

// print_r($fruits);

 $a = ['green', 'yellow', 'blue'];
 $b = ['avocego', 'apple', 'namama'];

 $c = array_combine($a,$b);

 print_r($c);

 //// creating array of the keys
 $keys = array_keys($c);
 print_r($keys);


 // flipping array - flipping values with keys
 $flipped = array_flip($c);
 print_r($flipped);


 //  Creating an array with range of numbers
 $numbers = range(1,20);


 /////////// //////////  ARRAY MAP  ///////// ////////// ////////


 $new_numbers = array_map(function($number){
    return "Number ${number}";
 }, $numbers); 

 print_r($numbers);



//  print_r($new_numbers);

$less_than_10 = array_filter($numbers, fn($number) => $number <= 10);

// print_r($less_than_10);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);

 



?>