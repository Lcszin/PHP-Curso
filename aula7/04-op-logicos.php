<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $ano = $GET["an"];
                $idade = 2022 - $ano;
                echo "Quem nasceu em $ano tem idade de $idade anos";
                $tipo($idade>=18 and $idade<=65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
                //equivalente $tipo($idade>=18 && $idade<=65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
                echo "o voto é $tipo";
            ?>    
        </div>
    </body>