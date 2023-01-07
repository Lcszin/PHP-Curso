<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>Tipos</title>
    </head>
    <body>
        <div>
            <?php
                $idade = (int)18;//Não é necessario identificar o tipo em php
                $nome = "Maria";
                echo "$nome tem $idade anos";//É obrigatorio ser aspas duplas, caso seja usado simples respondera $nome tem $idade anos
            ?>
        </div>
    </body>
</html>
