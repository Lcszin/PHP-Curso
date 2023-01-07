<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $diaSem = isset($_GET["ds"])?$_GET["ds"] : 0;
                switch ($diaSem) {
                    case 2:
                    case 3:
                    Case 4:
                    case 5:
                    case 6:
                        echo "Levanta e vai estudar! :)";
                        break;
                    case 7:
                    case 8:
                        echo "Descanse pequeno gafanhoto! ;)";
                        break;
                    default:
                        echo "Dia da semana invalido!";
                }
            ?>
            <br/><br/><a class="botao" href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>