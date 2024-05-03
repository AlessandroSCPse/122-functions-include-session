<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <?php include __DIR__ . '/partials/templates/header.php'; ?>

    <main>
        Ciao sono il main di saluta.
        Benvenuto <?php echo $_SESSION['username']; ?>
    </main>
</body>
</html>
