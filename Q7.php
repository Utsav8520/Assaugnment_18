<?php

$file = 'search.txt';

$fileHandle = fopen($file, 'r');

if ($fileHandle) {
    echo "File content before encountering 'STOP':<br>";

    while (($line = fgets($fileHandle)) !== false) {
        if (trim($line) == "STOP") {
            break; 
        }

        echo nl2br(htmlspecialchars($line)); 
    }

    fclose($fileHandle);
} else {
    echo "Error: Unable to open the file.";
}
?>
