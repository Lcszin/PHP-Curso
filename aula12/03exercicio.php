<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $num = isset($_POST["num"])?$_POST["num"]:0;
                $c = 1;
                $resultado = 0;
                while($c<11){
                    $resultado = $c * $num;
                    echo "$num x $c = $resultado <br/>";
                    $c++;
                }
            ?> <br/>
            <br/><a class="botao" href="03exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>