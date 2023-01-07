<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $num = isset($_POST["num"])?$_POST["num"]:1;
                $multiplos = 0;
                echo "<h2> Analisando o número $num </h2>";
                echo "Valores múltiplos: ";
                for($i = 1; $i <= $num; $i++){
                    if(intval($num % $i == 0)){
                        $multiplos++;
                        echo "$i ";
                    }
                }
                echo "<br/> Total de multiplos: $multiplos";
                if($multiplos <= 2){
                    echo "<br/> Resultado: $num <span class='foco'>É PRIMO</span>";
                }
                else{
                    echo "<br/> Resultado: $num <span class='foco'>NÃO É PRIMO</span>";
                }
            ?> <br/>
            <br/><a class="botao" href="03exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>