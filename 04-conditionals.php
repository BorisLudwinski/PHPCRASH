<?php
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/


/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 17;

if($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo "Sorry, $age years old isn't enough to vote...";
}

echo "<br/>";echo "<br/>";
echo "<br/>";echo "<br/>";

$t = 14;
// echo $t;

// if($t < 12) {
//     echo "Good Morning";
// } elseif ($t < 17) { 
//     echo "Good Afternoon";

// } else {
//     echo "Good Evening";
// }


$posts = ['First Post'];

// if(!empty($posts)) {
//     echo "<br/>" . $posts[0];
// } else {
//     echo 'No Post';
// }

// echo !empty($posts) ? $posts[0] : 'No Posts';

// $first_post = !empty($posts) ? $posts[0] : 'No Posts';
// $first_post = !empty($posts) ? $posts[0] : null;

// $first_post = $posts[0] ?? null;


// echo $first_post;

$favcolor = 'blue';
switch($favcolor) {
    case'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo "Your favorite color is blue";
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, green or blue';
}



?>