<?php
$fruits = "apple,banana,grape,orange";

// Explode into array
$fruitArray = explode(",", $fruits);

foreach ($fruitArray as $fruit) {
    echo $fruit . "<br>";
}

// Implode back
echo implode(" | ", $fruitArray);
?>