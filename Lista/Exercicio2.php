<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Pedro M. T. Cota -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Titulo -->
    <title>Sintaxe Geral</title>

    <!-- CSS Interno -->
    <style>
        .destaque{color: green;}
        .html{color: orange;}
        .p{font-size 100px}
        .php{color: blue}
    </style>
</head>
<body>
    
    <!-- Texto em HTML -->
    <h1 class="destaque">Trabalhando com PHP</h1>

    <p>Programador: Pedro Mitsuaki Tanaka Costa</p>

    <!-- Codigo do PHP -->
    <?php

        // Geração de Texto (String)    
        echo "Chama Sesi-Senai";

        /* Geração de Texto Estruturado (Com Tegs, Atributos)*/
        echo "<h2> Gerando <span class='html'>HTML</span> atravez do PHP.</h2>";
        echo "<h2> Gerando <span class= \"html\">HTML</span> atravez do PHP.</h2>"

    ?>

    <!-- Texto em HTML -->
    <h1>HTML e PHP mesclado</h1>
    <p>Paragrafo HTML</p>

    <!-- Código com PHP e HTML -->

    <?php

        $linguagem = "Linguagem <span class='php'>PHP</span>"
    ?>

    <p class="p">Parágrafo mesclando<span class="html"> HTML</span> com <?=$linguagem?></p>

</body>
</html>