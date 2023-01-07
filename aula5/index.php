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
        <title>Somador</title>
    </head>
    <div>
        <body>
            <?php
                
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $m = ($n1 + $n2)/2;
                echo "-> Valore recebidos $n1 e $n2";
                echo "<br/>-> A Soma entre $n1 e $n2 é ".($n1+$n2);
                echo "<br/> -> A Subtração entre $n1 e $n2 é ".($n1-$n2);
                echo "<br/> -> A Multplicação entre $n1 e $n2 é ".($n1*$n2);
                echo "<br/> -> A Divisão entre $n1 e $n2 é ".($n1/$n2);
                echo "<br/> -> O Modulo de $n1 dividido por $n2 é ".($n1%$n2);
                echo "<br/> -> A media entre $n1 e $n2 é $m";
            ?>
        </body>
    </div>    
</html>