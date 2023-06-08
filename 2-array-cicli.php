<?php 

    $colori = [ "ciano", "magenta", "giallo", "nero" ]; //indici dallo 0 al 3

    $persona = [
        'nome' => 'Mario', 
        'cognome' => 'Rossi'
    ];
    $persona['soprannome'] = "Peppeniè";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
    <style>
        body { background: #222; color: white; font-family: sans-serif; padding: 1rem; }
        * { padding: 0; margin: 0; box-sizing: border-box; }
        h2, h3, h4 { margin-top: 1rem; margin-bottom: 0.5rem;}
    </style>
</head>
<body>

    <h2>Ciclo su array di stringhe [colori]</h2>
    <h3>Ciclo che stampa direttamente</h3>
    <?php
        foreach ($colori as $colore) { //attenzione all'ordine: array as elemento
            echo $colore . "<br>";
        }
    ?>
    <h3>Ciclo spezzettato (senza echo)</h3>
    <?php foreach ($colori as $colore) { ?> <!-- inizio ciclo -->
        <p><?php echo $colore ?></p>  <!-- un <p> per ogni iterazione, con dentro altro php -->
    <?php } ?> <!-- fine ciclo -->

    <h3>Ciclo con indice</h3>
    <?php foreach ($colori as $i => $colore) { ?>
        <p><?php echo $colore ?> ha indice <?php echo $i ?></p>
    <?php } ?>

    <h2>Stampo [persona] senza ciclare</h2>
    <p><?php echo $persona["nome"] . " " . $persona["nome"] . " (aka " . $persona["soprannome"] . ") " ?></p>

    <h2>Ciclo su array associativo [persona]</h2>
    <h3>Senza indice/key</h3>
    <?php foreach ($persona as $proprieta) { ?> 
        <p><?php echo $proprieta ?></p> 
    <?php } ?>

    <h3>Con chiave</h3>
    <?php foreach ($persona as $nomeProp => $valoreProp) { ?>
        <p><?php echo "$nomeProp: $valoreProp" ?></p>
    <?php } ?>

</body>
</html>