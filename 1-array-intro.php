<?php 
    /******************************** Array di stringhe ************************/
    $nomiStudenti = [
        'giorgio',  //indice 0
        'sonia',  //indice 1
        'patrik'   //indice 2
    ];

    $nomiStudenti[] = "emanuele"; // "pusha" all'indice 3
    $nomiStudenti[102] = "valeria"; //indice 102
    $nomiStudenti[100] = "gabriele"; //indice 100
    $nomiStudenti[] = "marika"; // indice 103 (v. due righe fa)
    
    //è possibile ma sconsigliato mischiare indici numeri e proprietà. es:
    //$array["ciao"] = "prova";

    /******************************** Array associativo ************************/
    $persona = [
        'nome' => 'Mario', 
        'cognome' => 'Rossi'
    ];
    $persona['soprannome'] = "Peppeniè"; //aggiunge una proprietà "soprannome"

    //Usare anche indici numerici su array associativi è possibile ma sconsigliato
    /*
    $persona[] = "23/03/1990"; //pusha la data di nascita, indice 0
    $persona['100'] = "MRARSS90C23H703X"; //pusha codice fiscale, indice 100
    $persona[] = "Bergamo"; //pusha la città all'indice 101 (v. riga precedente)
    */

    /******************************** Explode e in-array ************************/
    
    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";

    $arrayDiParole = explode(" ", $lorem);
    $contieneAmet = in_array("amet", $arrayDiParole); //true
    $contieneCiao = in_array("ciao", $arrayDiParole); //false
    
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
        h2, h3 { margin-top: 1rem; margin-bottom: 0.5rem;}
    </style>
</head>
<body>

    <h2>Array di stringhe "nomiStudenti"</h2>
    <?php var_dump($nomiStudenti); ?>

    <h2>Array associativo "persona"</h2>
    <?php var_dump($persona); ?>

    <h2>Controllo l'esistenza di [nome] e [codicefiscale] per l'elemento [persona]</h2>
    Nome: <?php var_dump( key_exists( "nome", $persona ) ); ?> <!-- true -->
    Codice Fiscale: <?php var_dump( key_exists( "codicefiscale", $persona ) ); ?> <!-- false -->

    <h2>Stringa esplosa su array e ricerca</h2>
    <h3>Stringa: </h3>
    <?php var_dump($lorem); ?>
    <h3>Array: </h3>
    <?php var_dump($arrayDiParole); ?>
    <!-- ricordate che l'echo di un booleano non da true/false ma 1 o stringa vuota -->
    <h3>Ricerca "amet" su array: </h3>
    <?php var_dump($contieneAmet); ?>
    <h3>Ricerca "ciao" su array: </h3>
    <?php var_dump($contieneCiao); ?>

</body>
</html>