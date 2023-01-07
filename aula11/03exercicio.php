<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $inicio = isset($_POST["inicio"])?$_POST["inicio"]:0;
                $final = isset($_POST["fim"])?$_POST["fim"]:0;
                $i = isset($_POST["i"])?$_POST["i"]:0;
                $c = 0;
                if($inicio<$final){
                    while ($inicio <= $final) {
                        echo "$inicio ";
                        $inicio += $i;
                    }
                }
                elseif($inicio>$final){
                    while($inicio>=$final){
                        echo "$inicio ";
                        $inicio -= $i;
                    }
                }
            ?> <br/>
            <br/><a class="botao" href="03exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>