<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $a = 3;
                $b = "3";
                $r = ($a === $b)?"Sim":"Não";
                echo "As variaveis A e B são identicas? $r";
            ?>    
        </div>
    </body>
</html>