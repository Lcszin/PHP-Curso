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
                for($i=1;$i<11;$i++){
                    echo "$num x $i = ".($num*$i)." <br/>";
                }
            ?> <br/>
            <br/><a class="botao" href="javascript:history.go(-1)">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>