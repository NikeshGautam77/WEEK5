<?php

echo "Name: Nikesh<br>";


echo "Today's Date: " . date("Y-m-d") . "<br>";


$hour = date("H");

if ($hour < 12) {
    echo "It's Morning!";
} elseif ($hour < 18) {
    echo "It's Afternoon!";
} else {
    echo "It's Evening!";
}
?>