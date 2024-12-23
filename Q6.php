<?php
$file = 'data.txt';

if (file_exists($file)) {
    $content = file_get_contents($file);

    echo "File Content: <br>";
    echo nl2br($content); 
} else {
    
    echo "Error: The file 'data.txt' does not exist.";
}
?>
