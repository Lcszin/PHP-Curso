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
                echo "Você nasceu em $a e tem/terá $i anos";
                if($i<16){
                    $tipoVoto = "não pode votar";
                }
                elseif($i<18 || $i>70){
                $tipoVoto = "o voto é opcional";
                
                }
                else {
                    $tipoVoto = "o voto é obrigatorio";
                }
                echo "<br/> Para essa idade, $tipoVoto<br/>";
            ?>
            <br/><a class="botao" href="02exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>