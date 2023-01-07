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
                $num3 = isset($_POST["num3"])?$_POST["num3"]:0;
                $num4 = isset($_POST["num4"])?$_POST["num4"]:0;
                $num5 = isset($_POST["num5"])?$_POST["num5"]:0;
                function soma(){
                    $p = func_get_args();
                    $tot = func_num_args();
                    $s = 0;
                    for($i = 0; $i < $tot; $i++){
                        $s += $p[$i];
                    }
                    return $s;
                }
                $s = soma($num1,$num2,$num3,$num4,$num5);
                echo "O resultado é $s";
            ?> <br/>
            <br/><a class="botao" href="03exercicio.html">Voltar</a><br/>
            <br/><a href="/pt1/index-pt1.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>