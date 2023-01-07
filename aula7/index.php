<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $a = 2;
                $b = 3;
                //Operador Unário
                $maior = $a > $b? $a : $b;
                // é equivalente a
                 if($a > $b) 
                 {
                     $maior = $a;

                 }
                 else 
                 {
                     $maior = $b;

                 }  
            ?>    
        </div>
    </body>
</html>