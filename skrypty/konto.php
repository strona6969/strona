<?php 
    $polaczenie = mysqli_connect("localhost", "root", "", "ubrania");
    echo "<section id='kategoria'>";
        echo "<img src='/ubrania/assets/konto.png' id='konto_icon'>";
            echo "<section id='kategoria_lista'>";

        if(isset($_COOKIE["login"])) {
            echo "Witaj, ";
            echo "<span style='color: limegreen'>";
            $id = $_COOKIE["login"];
            $zapytanie = "select * from konta where id='$id'";
            $que = mysqli_query($polaczenie,$zapytanie);
            $linia = mysqli_num_rows($que);
            $a = mysqli_fetch_array($que);

            if($linia == 1) {
                echo $a['login']."</span>.";
            };
            echo "<a href='/ubrania/skrypty/wyloguj.php'>Wyloguj się</a>";
        } else {
	        echo "<a href='/ubrania/konto/logowanie.php'>Zaloguj się</a>";
            echo "<a href='/ubrania/konto/rejestracja.php'>Zarejestruj się</a>";
        };
    echo "</section>";
    echo "</section>";
    mysqli_close($polaczenie);
?>