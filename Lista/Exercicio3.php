<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>

    <style>

        h3 {
            font-weight: bold;
        }        

    </style>
</head>
<body>

    <h3>Código PHP para números inteiros.</h3>

    <?php
    
        echo 2;
        echo "<br>";
        echo 3;
        echo "| Valores inteiros. <br>";
        echo 5 + 7;
        echo "| Soma de inteiros. <br>";
        echo -11;
        echo "| Número negativos. <br>";
        echo 13 - 17;
        echo "| Subritação de negativos. <br>";
    ?>

    <br>
    <hr>
    <h3>Código PHP para função is_int</h3>

    <?php
        
        if(is_int(15)) { //VDD
            echo '"15" é um inteiro <br>';
        }

        if(is_int("Não é um inteiro")) {//Falso
            echo "'Não é um inteiro' é um inteiro <br>";
        }

    ?>

    <br>
    <hr>
    <h3>Código PHP para números tipo float</h3>


    <?php

        echo 1.123;
        echo "Mostrar o valor diretamente <br>";


        echo 12.5 + 1.2345;
        echo "Realizar operações matemáticas <br>";

    
        echo 15 + 3.14159;
        echo "Inclusive somar int com float";

    ?>  
    
    <br>
    <hr>
    <h3>Código PHP para verificação de float</h3>

    <?php
    
        $a = "teste";
        $b = 3.14159;

        if(is_float($a)) {
            echo "$a é um float! <br>";
            // Não é
        }

        if(is_float($b)) {
            echo "$b é um float! <br>";
        }

        if(is_float(6565.63)) {
            echo "6565.63 é um float! <br>";
        }

        if(is_float("teste")) {
            echo "teste é um float! <br>";
        }

    ?>

    <br>
    <hr>
    <h3>Código PHP para tipos de string</h3>

    <?php
    
    echo "Hello Word! <br>" ;

    ?>

    <br>
    <hr>
    <h3>Código PHP para verificar strings</h3>

    <?php

        if(is_string('SENAI')) {
            echo "Senai é uma string 1<br>";
        }

        if(is_string(118)) {
            echo "118 é uma string 2<br>";
        }

    ?>

    <br>
    <hr>
    <h3>Código PHP para booleanos</h3>

    <?php
    
        echo true;
        echo false;

        if(true) {
            echo "É verdadeiro! <br>";
        }

        if(false) {
            echo " É Verdadeiro! <br>";
        }

    ?>

    <br>
    <hr>
    <h3>Código PHP para verificar booleanos</h3>

    <?php

        if (is_bool (true)) {

            echo "É um Booleano <br>";
        }

        if (is_bool (0)) {

            echo "É um Booleano <br>";
        }

        if (is_bool (false)) {

            echo "É um Booleano <br>";
        }

        if (0.0 == false) {

            echo "0 é falso <br>";
        }

    ?>

    <br>
    <hr>
    <h3>Código PHP para arrays</h3>

    <?php
    
        $a = array ('v1', 'v2', 'v3');

        print_r($a);
        echo "<br>";

        echo "<p>O Primeiro valor da lista é: $a[0]</p>";
        echo "<p>O Segundo valor da lista é: $a[1]</p>";
        echo "<p>O Terceiro valor da lista é: $a[2]</p>";

    ?>

</body>
</html>