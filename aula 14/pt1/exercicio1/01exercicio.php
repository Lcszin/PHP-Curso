<html>
    <head>
        <link rel="stylesheet" href="/css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $num1 = isset($_POST["num1"])?$_POST["num1"]:0;
                $num2 = isset($_POST["num2"])?$_POST["num2"]:0;
                //Usando procedimento (uma função que não retorna valor)
                function soma($a, $b){
                    $s= $a + $b;
                    echo "<p>$a + $b = $s</p>";
                }
                soma($num1, $num2);
                soma(18,2);
                soma(14, 6);
            ?> <br/>
            <br/><a class="botao" href="01exercicio.html">Voltar</a><br/>
            <br/><a href="/pt1/index-pt1.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>