<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <form method="post" action="02-part2.php">
                <?php
                    $c = 1;
                    while($c<=5){
                        echo"Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
                        $c++;
                    }
                ?>
                <input class="botao" type="submit" value="Enviar"/>
            </form><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>
 