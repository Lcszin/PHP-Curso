<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $a = isset($_GET["ano"])?$_GET["ano"]:1900;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e terá $i anos";
                if($i >= 18){
                    $v = "Já pode votar";
                    $d = "Já Pode dirigir";
                }
                else{
                    $v = "Não pode votar";
                    $d = "Não pode dirigir";
                }
                echo "<br/> Com essa idade você $v e também $d<br/>";
            ?>
            <br/><a class="botao" href="01exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>