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
            <header>
                <section id="header_konto">
                    <section id="konto">
                        <?php 
                            include("skrypty/konto.php");
                        ?>
                    <!-- <section id="koszyk">
                        <img src="/ubrania/assets/koszyk.png" id="koszyk_icon">
                        <br>
                        Koszyk
                    </section> -->
                </section>
                
            </header>
            <section id="menu">

            </section>
        </main>
    </body>
</html>