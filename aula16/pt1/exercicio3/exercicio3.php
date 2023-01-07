<html>
    <head>
        <link rel="stylesheet" href="/css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $txt = isset($_GET["txt"])?$_GET["txt"]:"Não Informado";
                $r = wordwrap($txt, 20, "<br/>\n", false);
                echo $r;
            ?> <br/>
            <br/><a class="botao" href="">Voltar</a><br/>
            <br/><a href="/pt1/index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>