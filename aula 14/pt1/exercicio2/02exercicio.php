<html>
    <head>
        <link rel="stylesheet" href="/css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $num1 = isset($_GET["num1"])?$_GET["num1"]:0;
                $num2 = isset($_GET["num2"])?$_GET["num2"]:0;
                
                function soma($a, $b){
                    return $a + $b;
                }
                $resultado = soma($num1, $num2);
                echo "O resultado é $resultado";
            ?> <br/>
            <br/><a href="02exercicio.html" class="botao">voltar</a><br/>
            <br/><a href="/pt1/index-pt1.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>