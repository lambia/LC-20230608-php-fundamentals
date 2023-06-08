<?php 

    $colori = [ "ciano", "magenta", "giallo", "nero" ]; //indici dallo 0 al 3

    $classe95 = [
        [ "nome" => "Patrik", "cognome" => "Gjikolaj" ], //all'indice 0
        [ "nome" => "Marco", "cognome" => "Giammari" ]   //all'indice 1
    ];

    $sonia = [ "nome" => "Sonia", "cognome" => "Bergamini" ];

    $classe95[] = $sonia; //all'indice 2, pusho un "oggetto" preso da variabile

    $classe95[] = [ "nome" => "Giada", "cognome" => "Pirone" ]; //all'indice 3, pusho un "oggetto" creato al volo

    $argomentiTrattati = [
        "classe15" => [ "javascript", "jquery", "php", "symfony" ],
        "classe90" => [ "javascript", "angular", "c#" ],
        "classe95" => [ "javascript", "vue", "php" ]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrioska: array dentro array</title>
    <style>
        body { background: #222; color: white; font-family: sans-serif; padding: 1rem; }
        * { padding: 0; margin: 0; box-sizing: border-box; }
        h2, h2 { margin-top: 1rem; margin-bottom: 0.5rem;}
        ul { margin-bottom: 1rem; }
        li { margin-left: 1rem; font-size: 0.8em; }
    </style>
</head>
<body>

    <h2>Array di array associativi [classe95]</h2>
    <?php 
        var_dump( $classe95 ); //stampo tutto l'array di "oggetti"
    ?>

    <h2>[Nome] dell'elemento [0] di [classe95]</h2>
    <p>
        <?php echo "Nome: <b>" . $classe95[0]["nome"] . "</b>" ?> <!-- Nome: Patrik -->
    </p>

    <h2>Foreach semplice su array multidimensionale [classe95]</h2>
    <div>
        <?php foreach ($classe95 as $studente) { ?> <!-- per ogni studente -->
            <h4><?php echo $studente["nome"] . " " . $studente["cognome"] ?></h4>
            <br> <!-- siamo alla fine di "per ogni studente" -->
        <?php } ?> 
    </div>

    <h2>Foreach su array multidimensionale [classe95]</h2>
    <div>
        <?php foreach ($classe95 as $studente) { ?> <!-- per ogni studente -->
            <?php foreach($studente as $key => $value) { ?> <!-- per ogni proprietà dello studente -->
                <h4><?php echo "$key: $value" ?></h4>
            <?php } ?>
            <br> <!-- siamo alla fine di "per ogni studente" -->
        <?php } ?> 
    </div>


    <h2>Array associativo di array di stringhe [argomentiTrattati]</h2>
    <?php 
        var_dump( $classe95 ); //stampo tutto l'array di "oggetti"
    ?>

    <h2>Foreach su array multidimensionale [argomentiTrattati]</h2>
    <div>
        <?php foreach ($argomentiTrattati as $nomeClasse => $classe) { ?> <!-- per ogni classe -->
            <h3><?php echo $nomeClasse ?></h3> <!-- stampa nome classe -->
            <ul>
            <?php foreach($classe as $argomento) { ?> <!-- per ogni argomento della classe -->
                <li><?php echo $argomento ?></li> <!-- stampa argomento -->
            <?php } ?>
            </ul><!-- siamo alla fine di "per ogni classe" -->
        <?php } ?> <!-- fine for -->
    </div>

</body>
</html>