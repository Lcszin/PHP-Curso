<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <form method="post" action="02-exercicio-pt2.php">
                <select name="num">
                    <?php 
                        for($n = 1; $n < 11; $n++){
                            echo " <option>$n</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Tabuada"/>
            </form><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>