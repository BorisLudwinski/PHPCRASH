<?php

    function register_user($email) { 
       
        echo $email . ' registered' . "<br/>";
    };

    register_user('Boris');

// setting defaults 
    function sum($n1 = 4, $n2 = 5) {
        return $n1 + $n2;
    
    }

    echo sum();
    $number = sum();

    $subrac = function($n1, $n2) {
        return $n1 - $n2;
    
    };  

    echo "<br/>" . $subrac(10,5);
    
    $multiply = fn($n1, $n2) => $n1 * $n2 . "<br/>";

    echo $multiply(9,9) . "<br/>";
     


?>  
