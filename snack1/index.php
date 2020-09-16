<!-- Creiamo un array contenente le partite di basket
 di un’ipotetica tappa del calendario. Ogni array
 avrà una squadra di casa e una squadra ospite, punti
 fatti dalla squadra di casa e punti fatti dalla squadra
  ospite. Stampiamo a schermo tutte le partite con questo
   schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$partite = [
    [
        "squadra1" => "Bologna",
        "squadra2" => "Sassuolo",
        "punteggio1" => "2",
        "punteggio2" => "0",
    ],
    [
        "squadra1" => "Parma",
        "squadra2" => "Spezia",
        "punteggio1" => "3",
        "punteggio2" => "1",
    ],
    [
        "squadra1" => "Inter",
        "squadra2" => "Hellas Verona",
        "punteggio1" => "2",
        "punteggio2" => "1",
    ],
    [
        "squadra1" => "Roma",
        "squadra2" => "Cagliari",
        "punteggio1" => "1",
        "punteggio2" => "1",
    ],
    [
        "squadra1" => "Torino",
        "squadra2" => "Lazio",
        "punteggio1" => "2",
        "punteggio2" => "4",
    ],
    [
        "squadra1" => "Benevento",
        "squadra2" => "Juventus",
        "punteggio1" => "0",
        "punteggio2" => "3",
    ],
    [
        "squadra1" => "Atalanta",
        "squadra2" => "Sampdoria",
        "punteggio1" => "2",
        "punteggio2" => "2",
    ],
    [
        "squadra1" => "Genoa",
        "squadra2" => "Crotone",
        "punteggio1" => "1",
        "punteggio2" => "2",
    ],
    [
        "squadra1" => "Fiorentina",
        "squadra2" => "Napoli",
        "punteggio1" => "2",
        "punteggio2" => "0",
    ],
    [
        "squadra1" => "Udinese",
        "squadra2" => "Milan",
        "punteggio1" => "2",
        "punteggio2" => "0",
    ],
];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Serie A</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Serie A</h1>
        <h2>Ventordicesima giornata</h2>
        <?php for ($i=0; $i < count($partite) ; $i++) { ?>
            <div class="partita">
                <div class="squadre">
                    <h3> <?php echo $partite[$i]['squadra1']; ?></h3>
                    <h3> <?php echo $partite[$i]['squadra2']; ?></h3>
                </div>
                <div class="risultato">
                    <h3> <?php echo $partite[$i]['punteggio1']; ?></h3>
                    <h3> <?php echo $partite[$i]['punteggio2']; ?></h3>
                </div>
            </div>
        <?php } ?>
    </body>
</html>
