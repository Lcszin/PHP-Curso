<html>
    <head>
        <link rel="stylesheet" href="/css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $nomeProd = isset($_POST["prod"])?$_POST["prod"]:"Não informado";
                $precoProd = isset($_POST["valor"])?$_POST["valor"]:0;
                
                printf("O %s custa R$ %4.2f", $nomeProd, $precoProd);
            ?> <br/>
            <br/><a class="botao" href="exercicio1.html">Voltar</a><br/>
            <br/><a href="/pt1/index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>