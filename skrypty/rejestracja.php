<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "ubrania");
    
    $login = $_POST['login'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];
    $p_haslo = $_POST['p_haslo'];
    $hash_haslo = password_hash($haslo, PASSWORD_ARGON2ID);
    $zapytanie = "SELECT * from konta where login='$login' or email='$email'";
    $dodaj_konto = "INSERT INTO `konta`(`id`, `login`, `email`, `haslo`) VALUES (null,'$login','$email','$hash_haslo')";
    $que = mysqli_query($polaczenie,$zapytanie);
    $linia = mysqli_num_rows($que);
    
    if($linia == 0) {
        if ($haslo == $p_haslo) {
            mysqli_query($polaczenie,$dodaj_konto);
            header("location:/ubrania");
        } else {
            echo ("haslo sie nie zgadza xd");            
        }
    } else {
        echo ("login lub email jest juz zajety tf");
    }
mysqli_close($polaczenie);
?>