<?php
$file = 'essay.txt';

$fileHandle = fopen($file, 'r');

if ($fileHandle) {
    $content = ''; 

    while (($char = fgetc($fileHandle)) !== false) {
        $content .= $char; 
    }

    fclose($fileHandle);

    $wordCount = str_word_count($content);

    echo "The essay contains $wordCount word(s).";
} else {
    echo "Error: Unable to open the file.";
}
?>
