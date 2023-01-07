<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                for($i=1;$i<11;$i++){
                    echo "$i ";
                }
                echo "<br/>";
                for($i = 10; $i>0;$i--){
                    echo "$i ";
                }
                echo "<br/>";
                for($i = 0; $i < 101; $i++){
                    echo "$i ";
                }
                echo "<br/>";
                for($i = 20; $i > 0; $i--){
                    echo "$i ";
                }
            ?> <br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>