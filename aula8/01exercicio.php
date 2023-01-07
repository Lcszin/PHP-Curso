<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
                 $valor = $_GET["v"];//caso seja usado o method="post" deve ser usado $_POST["v"]
                 $rq = sqrt($valor);
                echo "A raiz quadrada  de $valor é ". number_format($rq,2);
            ?>
            <br/><a class="botao" href="01exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>
