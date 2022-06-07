<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Strona internetowa na której zakupisz swój wymarzony telefon.">
		<meta name="author" content="Janocha Paweł">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="/ubrania/assets/ikonka.png" type="image/gif" sizes="128x128">
        <link rel="stylesheet" href="/ubrania/assets/styles.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="/ubrania/skrypty/szukanie.js"></script>
        <title>Ubrania - Strona Główna</title>
    </head>
    <body>
    <main>
            LOGOWANIE
                    <form action="/ubrania/skrypty/logowanie.php" method="POST" id="form_log_rej">
                        <br><input type="text" required="" name="login" id="input_log" placeholder="Login">
                        <br><input type="password" required="" name="haslo" id="input_log" placeholder="Hasło">
                        <br><input type="checkbox" checked="true" name="zapamietaj">Czy zapamiętać hasło?
                        <br><button type="submit" id="log_rej_prz">Zaloguj</button>
                    </form>
                </section>
                REJESTRACJA
                    <form action="/ubrania/skrypty/rejestracja.php" method="POST" id="form_log_rej">
                        <br><input type="text" required="" name="login" id="input_log" placeholder="Login">
                        <br><input type="email" required="" name="email" id="input_log" placeholder="Email">
                        <br><input type="password" required="" name="haslo" id="input_log" placeholder="Hasło">
                        <br><input type="password" required="" name="p_haslo" id="input_log" placeholder="Powtórz hasło">
                        <br><button type="submit" id="log_rej_prz">Zarejestruj</button>
                    </form>
                ZMIANA HASLA
                <form action="/ubrania/skrypty/zmiana_hasla.php" method="POST" id="form_haslo">
                    Obecne hasło:
                    <br><input type="password" required="" name="o_haslo" id="input_haslo">
                    <br>Nowe hasło:
                    <br><input type="password" required="" name="n_haslo" id="input_haslo">
                    <br>Powtórz nowe hasło:
                    <br><input type="password" required="" name="pn_haslo" id="input_haslo">
                    <br><button type="submit">Zmień hasło</button>
                </form>
        </main>
    </body>
</html>