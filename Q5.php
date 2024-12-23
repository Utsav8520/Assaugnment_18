<?php
$file = 'data.txt';

$content = "Hello, World!";

$fileHandle = fopen($file, 'w');

if ($fileHandle) {
  
    fwrite($fileHandle, $content);

    fclose($fileHandle);

    echo "File 'data.txt' created and content written successfully.";
} else {    
    echo "Error: Unable to create or write to file.";
}
?>
