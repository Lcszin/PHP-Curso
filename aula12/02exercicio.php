<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $num = isset($_POST["num"])?$_POST["num"]:1;
                echo "<h2> Calculando o fatorial de $num </h2>";
                $i = $num;
                $resultado = 1;
                do{
                    $resultado *= $i;
                    $i--;
                }while($i > 0);
                echo "$num! = $resultado";
            ?> <br/>
            <br/><a class="botao" href="02exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>