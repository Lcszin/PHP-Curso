<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $num = isset($_GET["num"])?$_GET["num"]:0;
                $oper = isset($_GET["oper"])?$_GET["oper"]:1;
                $result = 1;
                switch ($oper) {
                    case 1:
                        $result = $num * 2;
                        break;
                    case 2:
                        $result = pow($num, 3);
                        break;
                    case 3:
                        $result = sqrt($num); //$r = pow($num,1/2); 
                }
                echo "O resultado da operação solicitada foi <span class='foco'>$result</span><br/>";
            ?>    
            <br/><a class="botao" href="01exercicio.html">Voltar</a>
        </div>
    </body>
</html>