<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <form method="post" action="03exercicio.php">
                Número: <select name="num">
                    <?php
                        for($i=1; $i<11;$i++){
                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
                <input type="submit" class="botao" value="Tabuada">
            </form><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>
 