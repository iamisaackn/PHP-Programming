<?php
// foreach Byref

// variable
$colors = array("red", "green", "blue", "yellow");

foreach($colors as $x) {
    if($x == "blue") $x = "pink";
    echo "$x <br>";
}
?>