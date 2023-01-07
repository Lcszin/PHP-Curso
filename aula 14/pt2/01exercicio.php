<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
            echo "<h2>Com variaveis ligadas</h2>";
            echo "<h4>O numero recebido é alterado junto com o X</h4>";
                $num = isset($_POST["num"])?$_POST["num"]:0;
                function teste(&$x){
                    $x+=3;
                    echo "<p> O valor de X é $x";
                }
                teste($num);
                echo "<p> O valor digitado é $num";
            ?> <br/>
            <br/><a class="botao" href="01exercicio.html">Voltar</a><br/>
            <br/><a href="/index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>