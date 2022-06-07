<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "ubrania");
    
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $zapytanie = "select * from konta where login='$login'";
    $que = mysqli_query($polaczenie,$zapytanie);

    if(mysqli_num_rows($que)>0) {
        $row = mysqli_fetch_array($que);
        $zaszyfrowane_haslo = $row['haslo'];
        if(password_verify($haslo, $zaszyfrowane_haslo)) {
            //haslo wpisane w formularzu i haslo w bazie danych sie zgadza
            if(!empty($_POST["zapamietaj"])) {
                setcookie("login","$row[0]",time() + 60*60*24*365, "/");
                header("location:../");
                } else {
                    setcookie("login","$row[0]",0,"/");
                    header("location:../");
                }
        } else {
            //zostalo wpisane haslo ktore sie nie zgadza z tym w bazie
            echo "zle haslo";
        };
    } else {
        //bledny login, nie ma go w bazie
        echo "loginu nie ma w bazie";
    }

    mysqli_close($polaczenie);
?>