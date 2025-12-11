<?php
$userInput = "<script>alert('hack');</script> Welcome";
$safeOutput = htmlspecialchars($userInput);

echo "Original: $userInput<br>";
echo "Safe Output: $safeOutput<br>";

$text = "  Hello World  ";
echo "Before trim: '$text'<br>";
echo "After trim: '" . trim($text) . "'<br>";
?>