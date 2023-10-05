<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Processamento de dados usando POST</h1>
    <hr>
    <!-- Método mais seguro (Não mostra as informações na URL) -->
    <?php
    
        //SE + OU (|| (Quando o usúario não preenche o nome e email))

        if(empty($_POST['nome']) || empty($_POST['email'])){
    
    ?>

    <p style="color:red"> Você deve Preencher Nome e E-Mail!!</p>

    <?php

        }else{

            //captura dos dados com filtro de segurança

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
            $informativos = filter_input(INPUT_POST, 'informativos', FILTER_SANITIZE_SPECIAL_CHARS);

            //Operador de coalescência nula (verificar se o que está a esquerda existe(intereses), senão pega o da direita, neste caso vazio[0])

            $interesses = filter_var_array($_POST['interesses'] ??[], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $escolha = filter_input(INPUT_POST, 'escolha', FILTER_SANITIZE_SPECIAL_CHARS);

    ?>

    <h2>Dados</h2>

    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-Mail: <?=$email?></li>
        <li>idade: <?=$idade?></li>
        <li>Informativos: <?=$informativos?></li>

        <?php
            if( !empty($interesses)){
        ?>

        <li>Intereses:
            <ul>
                <!-- opção 2: Acessar o Array Usando Loop -->
                <?php
                    foreach($interesses as $interesse){
                ?>
                <li><?=$interesse?></li>
                <?php
                    }
                ?>
            </ul>
        </li>

        <?php
            }
        ?>

        <li>Escolha: <?=$escolha?></li>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>


    <?php
        }
        // Fim 'if/else' da validação de camposobricatórios
    ?>


    
</body>
</html>