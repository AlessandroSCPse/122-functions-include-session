<?php
session_start();
$userEmail = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    La tua email <?php echo $userEmail; ?> è valida, complimenti!
    Grazie per averci scelto.
    <a href="./index.php">Torna alla homepage</a>
</body>
</html>