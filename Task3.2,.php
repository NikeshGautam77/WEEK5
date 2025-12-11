<?php
$file = fopen("note.txt", "r");
$content = fread($file, filesize("note.txt"));
fclose($file);

echo "File Content:<br>$content";
?>