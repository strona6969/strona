<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "ubrania");


    $o_haslo = $_POST['o_haslo'];
    $hash_o_haslo = password_hash($o_haslo, PASSWORD_ARGON2ID);
    $n_haslo = $_POST['n_haslo'];
    $hash_n_haslo = password_hash($n_haslo, PASSWORD_ARGON2ID);
    $pn_haslo = $_POST['pn_haslo'];
    $hash_pn_haslo = password_hash($pn_haslo, PASSWORD_ARGON2ID);
    $id = $_COOKIE["login"];
    $zapytanie = "SELECT * from konta where id = '$id'";
    $zmien_haslo = "UPDATE konta SET haslo = '$hash_n_haslo' where id = '$id'";
    $que = mysqli_query($polaczenie,$zapytanie);
    $linia = mysqli_num_rows($que);
    
    if($linia == 1) {
        $row = mysqli_fetch_array($que);
        $obecne_haslo = $row['haslo'];
        if(password_verify($o_haslo, $obecne_haslo)) {
            if($n_haslo = $pn_haslo) {
                //nowe hasla sie zgadzaja, haslo sie zmienia
                mysqli_query($polaczenie,$zmien_haslo);
                echo "haslo zostalo zmienione";
                setcookie("login","",time() - 31536000, "/");
            } else {
                //nowe hasla sie nie zgadzaja
                echo "nowe hasla sie nie zgadzaja";
            }
        } else {
            //obecne hasło nie jest prawidłowe
            echo "obecne hasło nie jest prawidłowe";
        }
    } else {
        //cos nie zadzialalo
        echo "cos poszlo nie tak";
    }

    mysqli_close($polaczenie);
?>