<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $num1 = 1;
                while($num1<=10){
                    echo $num1." ";
                    $num1++;
                }
                echo '<br/>';
                $num2 = 10;
                while($num2>0){
                    echo $num2." ";
                    $num2--;
                }
            ?> <br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>