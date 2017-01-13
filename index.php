<!DOCTYPE HTML>
<html lang="pt-br">
<html>
    <head>
        <meta charset="utf-8">
        <title>Iniciando com PHP e MySql</title>
    </head>
    <body>
        <?php
            //.........
            require 'config.php';
            require 'connection.php';

            $nome = 'Everton Ribeiro';
            $dados = array(
              'nome' => 'Everton Ribeiro',
              'idade'=> 30
            );

            echo "SELECT*FROM clientes WHERE nome = '$nome'";
        ?>
    </body>
</html>
