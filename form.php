<?php

    //definire var per paragrafo per richiamare con GET l'input name "paragrafo" nel form
    $paragrafo = $_GET['paragrafo'];
    var_dump($_GET);

    //definire var per paragrafo per richiamare con GET l'input name "parola" nel form
    $parola = $_GET['parola'];
    var_dump($_GET);

    // creare nuova variabile dove salvare il paragrafo con la parola selezionata censurata
    $paragrafo_censurato = str_replace(strtoupper($parola), '***', strtoupper($paragrafo));

    // $paragrafo_minuscolo = strtolower($paragrafo_censurato);

?>

<h2> 
    Il tuo paragrafo é : 
    <?php echo $paragrafo; ?>
    ed è lungo : 
    <?php echo strlen($paragrafo); ?> 
    caratteri
</h2>

<h4>
    <?php echo $parola; ?>
</h4>

<h1>
    <?php echo ucfirst(strtolower($paragrafo_censurato)); ?>
</h1>

