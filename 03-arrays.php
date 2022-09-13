<?php
// Simple Array

$numbers = [1,2,3,3,5,];
$fruits = array('apple', 'orange', 'grape');

// var_dump($numbers);

// echo $fruits[1];

// Associative Array
$colors = [
    1 => 'red',
    2 => 'blue',
    3 => 'green',
    9 => 'yellow'
];

// echo $colors[9];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];


// prints '#0f0'
// echo $hex['blue'];

$person = [ 
    'first_name' => 'Boris',
    'last_name' => 'Ludwinski',
    'email' => 'boris.ludwinski@gmail.com',
];

// echo $person['first_name'];

$people = [
    [ 
        'first_name' => 'Boris',
        'last_name' => 'Ludwinski',
        'email' => 'boris.ludwinski@gmail.com',
    ],
    [ 
        'first_name' => 'Aleksandra',
        'last_name' => 'Ludwinska',
        'email' => 'aleksandra.ludwinska@gmail.com',
    ],
    [ 
        'first_name' => 'Bob',
        'last_name' => 'Krasinski',
        'email' => 'bob.krasinski@gmail.com',
    ]

];


 


var_dump(json_encode($people));

?>