<?php require __DIR__ . '/partials/vars.php'; ?>
<?php require_once __DIR__ . '/partials/functions.php'; ?>

<?php
session_start();
$_SESSION['username'] = 'Alessandro';
$_SESSION['lastname'] = 'Rossi';
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
        Ciao sono il main <?php echo $color; ?>
        La somma è <?php echo sumNumbers(1, 4); ?>
        Ciao <?php echo $_SESSION['username']; ?>
    </main>

    <footer>
        Ciao sono il footer
    </footer>
</body>
</html>
