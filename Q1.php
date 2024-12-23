<?php

$server_ip = $_SERVER['SERVER_ADDR'];
$server_name = $_SERVER['SERVER_NAME'];
$server_software = $_SERVER['SERVER_SOFTWARE'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Information</title>
</head>
<body>
    <h1>Server Information</h1>
    <ul>
        <li><strong>Server IP Address:</strong> <?php echo htmlspecialchars($server_ip); ?></li>
        <li><strong>Server Name:</strong> <?php echo htmlspecialchars($server_name); ?></li>
        <li><strong>Server Software:</strong> <?php echo htmlspecialchars($server_software); ?></li>
    </ul>
</body>
</html>
