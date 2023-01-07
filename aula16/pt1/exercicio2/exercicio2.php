<html>
    <head>
        <link rel="stylesheet" href="/css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $ns[0] = isset($_POST["n1"])?$_POST["n1"]:0;
                $ns[1] = isset($_POST["n2"])?$_POST["n2"]:0;
                $ns[2] = isset($_POST["n3"])?$_POST["n3"]:0;
                $v = array (3,2,6,45,48);
                $v2 = array (45,16,555,15);
                print_r($ns);
                echo "\n\n";
                var_dump($v);
                var_export($v)
            ?> <br/>
            <br/><a class="botao" href="exercicio2.html">Voltar</a><br/>
            <br/><a href="/pt1/index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>