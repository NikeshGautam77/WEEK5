<?php
$str = "Full Stack Development with PHP";

echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reversed: " . strrev($str) . "<br>";
echo "Position of 'PHP': " . strpos($str, "PHP") . "<br>";
echo "Replace PHP with JavaScript: " . str_replace("PHP", "JavaScript", $str) . "<br>";
?>