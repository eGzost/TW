<?php
    $email = $_POST['email'];
    $login = $_POST['login'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    if(empty($email)) {
        $email_error = 'INTRODUCETI EMAIL-ul';
    }

    if(empty($login)) {
        $login_error = 'INTRODUCETI LOGIN-ul';
    }elseif(strlen($login) < 6) {
        $login_error = 'LOGIN-ul TREBUIE SA FIE MAI LUNG DE 6 CARACTERE';
    }

    if(empty($number)) {
        $number_error = 'INTRODUCETI NUMARUL';
    }elseif(strlen($number) < 6) {
        $number_error = 'NUMARUL TREBUIE SA FIE DE LUNGIMEA 9 CIFRE';
    }

    if(empty($password)) {
        $password_error = 'INTRODUCETI PAROLA';
    }elseif(strlen($password) < 10) {
        $password_error = 'PAROLA TREBUIE SA FIE MAI LUNGA DE 10 CARACTERE';
    }

    include('Inregistrare.php');

?>