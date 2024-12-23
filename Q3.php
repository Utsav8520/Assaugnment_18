<?php

date_default_timezone_set('America/New_York');

$currentDateTime = date('Y-m-d H:i:s');
echo "Current Date and Time (YYYY-MM-DD HH:MM:SS): $currentDateTime\n";

$currentFormattedDate = date('l, F d, Y');
echo "Current Date (Day of the week, Month DD, YYYY): $currentFormattedDate\n";
?>
