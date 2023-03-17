<?php

    $paragrafo = $_GET['paragrafo'];
    var_dump($_GET);

    $parola = $_GET['parola'];
    var_dump($_GET);

    $paragrafo_censurato = str_replace($parola, '***', $paragrafo)

?>

<h2> 
    <?php echo $paragrafo ?> 
</h2>

<h2> Il tuo paragrafo è lungo 
    <?php echo strlen($paragrafo) ?> 
    caratteri
</h2>

<h4>
    <?php echo $parola ?>
</h4>

<h1>
    <?php echo $paragrafo_censurato ?>
</h1>

