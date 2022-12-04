<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Wędkujemy </title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="baner">
        <h1> Portal dla wędkarzy </h1>
    </div>

    <div id="lewy">
        <h2> Ryby drapieżne naszych wód </h2>
        <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'wedkowanie'); 
            $zapytanie = "SELECT nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1 ";
            $wynik = mysqli_query($polaczenie, $zapytanie);
            while ($wiersz = mysqli_fetch_row($wynik)) {
                echo "<li>".$wiersz[0].", występowanie: ".$wiersz[1]."</li>";
            }
            mysqli_close($polaczenie);
            ?> 
    </div>

    <div id="prawy">
        <img src="ryba1.jpg" alt="Sum"> <br>
        <a href="kwerendy.txt"> Pobierz kwerendy </a>
    </div>

    <div id="stopka">
        <p> Stronę wykonała: Agnieszka Hejduk </p>
    </div>
</body>
</html>