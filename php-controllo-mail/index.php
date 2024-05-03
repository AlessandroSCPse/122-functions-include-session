<?php
require_once __DIR__ . '/functions.php';

// 1. Controllare che la mail passata in GET sia ben formata e 
// contenga un punto e una chiocciola.
// 2. Se è corretta stampare un messaggio di success in un alert di 
// Bootstrap, altrimenti (sempre in un alert di Bootstrap) mostrare un 
// messaggio di errore.

// ## Bonus
// **Milestone 3:** invece di visualizzare il 
// messaggio di success nella *index.php*, in caso di esito 
// positivo effettuare un redirect ad una thankyou page.
// **Milestone 5:** valorizzare il campo di input in caso il 
// controllo del server dia esito negativo
$userEmail = isset($_GET['email']) ? $_GET['email'] : '';

$emailIsValid = false;
if(!empty($userEmail)) {
    $emailIsValid = checkEmail($userEmail);

    if($emailIsValid) {
        session_start();
        $_SESSION['email'] = $userEmail;
        // Reindirizzare l'utente alla thankyou page
        header('Location: ./thankyou.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $userEmail;?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="container">
            <?php if(empty($userEmail)) { ?>
                <p>Inserisci la tua mail</p>
            <?php } else { ?>
                <p class="<?php echo $emailIsValid ? 'alert-success' : 'alert-danger'; ?>">
                    <?php echo $emailIsValid ? "L'email è valida" : "L'email non è valida"; ?>
                </p>
            <?php } ?>
        </div>
    </main>

    <footer>
        <div class="container">
            Made with love
        </div>
    </footer>
</body>
</html>