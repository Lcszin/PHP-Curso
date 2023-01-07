<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
            
                $i=1;
                while($i<6){
                $v = "num".$i;
                $url = "v".$i;
                $$v = isset($_POST[$url])?$_POST[$url]:0;
                $i++;
                }
                $i=1;
                while($i<6){
                    $v = "num".$i;
                    echo "Valor $i: ".$$v."<br/>";
                    $i++;
                }
            ?> <br/>
            <br/><a class="botao" href="02exercicio.php">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>