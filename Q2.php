<?php
$GLOBALS['globalVar'] = "Hello from the global scope!";

function demonstrateGlobals() {
  
    echo "Inside function: " . $GLOBALS['globalVar'] . "<br>";
    $GLOBALS['globalVar'] = "Modified inside the function!";
}

echo "Before function call: " . $GLOBALS['globalVar'] . "<br>";

demonstrateGlobals();
echo "After function call: " . $GLOBALS['globalVar'] . "<br>";
?>
