<html>
    <head>
        <link rel="stylesheet" href="/css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <pre>
                <?php
                    $txt = isset($_POST["txt"])?array($_POST["txt"]):"Não Informado";
                    $txt[] = isset($_POST["txt1"])?$_POST["txt"]:"Não Informado";
                    $txt[] = isset($_POST["txt2"])?$_POST["txt"]:"Não Informado";
                    $txt[] = isset($_POST["txt3"])?$_POST["txt"]:"Não Informado";

                    print_r($txt);
                ?> 
            </pre>
            <br/>
            <br/><a class="botao" href="exercicio1.html">Voltar</a><br/>
            <br/><a href="/pt2/index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>