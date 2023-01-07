<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $i = 0;
                do{
                    echo "$i ";
                    $i += 2;
                }while ($i <= 20);
                echo '<br/>';
                $i -= 2;
                do{
                    echo "$i ";
                    $i -= 2;
                }while($i >= 0);
            ?> <br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>