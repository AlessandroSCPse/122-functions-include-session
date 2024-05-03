<?php
// Indica se un email è ben formattata
// $email -> stringa che rappresenta l'email da controllare
// return: true se l'email è valida altrimenti false
function checkEmail($email) {
    $isEmailValid;

    if(str_contains($email, '.') && str_contains($email, '@')) {
        $isEmailValid = true;
    } else {
        $isEmailValid = false;
    }

    return $isEmailValid;
}
?>