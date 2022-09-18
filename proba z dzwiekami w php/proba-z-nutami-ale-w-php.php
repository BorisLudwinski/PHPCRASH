<?php

$dzwieki1 = ["c", "c#", "d", "d#", "e", "f", "f#", "g", "g#", "a", "a#", "b"];
$dzwieki2 = ["c#", "d", "d#", "e", "f", "f#", "g", "g#", "a", "a#", "b", "c"];
$dzwieki3 = ["d", "d#", "e", "f", "f#", "g", "g#", "a", "a#", "b", "c", "c#"];
$dzwieki4 = ["d#", "e", "f", "f#", "g", "g#", "a", "a#", "b", "c", "c#", "d"];
$dzwieki5 = ["e", "f", "f#", "g", "g#", "a", "a#", "b", "c", "c#", "d", "d#"];
$dzwieki6 = ["f", "f#", "g", "g#", "a", "a#", "b", "c", "c#", "d", "d#", "e"];
$dzwieki7 = ["f#", "g", "g#", "a", "a#", "b", "c", "c#", "d", "d#", "e", "f"];
$dzwieki8 = ["g", "g#", "a", "a#", "b", "c", "c#", "d", "d#", "e", "f", "f#"];
$dzwieki9 = ["g#", "a", "a#", "b", "c", "c#", "d", "d#", "e", "f", "f#", "g"];
$dzwieki10 = ["a", "a#", "b", "c", "c#", "d", "d#", "e", "f", "f#", "g", "g#"];
$dzwieki11 = ["a#", "b", "c", "c#", "d", "d#", "e", "f", "f#", "g", "g#", "a"];
$dzwieki12 = ["b", "c", "c#", "d", "d#", "e", "f", "f#", "g", "g#", "a", "a#"];

$odpowiedz = ["c", "c#", "d", "d#", "e", "f", "f#", "g", "g#", "a", "a#", "b", "C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B"];
$odpowiedz = print_r($dzwieki[$odpowiedz]);

$przeliczenie = function($dzwieki, $odpowiedz) {
    for($x = 0; $x = count($dzwieki); $x++ ) {

    };
    print_r($odpowiedz);

};




if(isset($_POST['submit']))
{
    $answer=$_POST['answer'];
    if ($answer == "4") {
  echo " “Correct!!!! Congratulations!";
} else {
  echo "Your answer was blank or wrong input but the correct answer is 4.";
}
}

?>
<html>
<body>
<form method="post" action="index.php">
<input type="number" name="answer">
<input type="submit" name="submit" value="Submit">
</form>
