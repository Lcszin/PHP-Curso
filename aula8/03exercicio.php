<html>
    <head>
        <?php
            $txt = isset($_POST["t"])?$_POST["t"]:"Texto Generico";
            $tam = isset($_POST["tam"])?$_POST["tam"]:"12pt";
            $cor = isset($_POST["cor"])?$_POST["cor"]:"#000000";
        ?> 
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
        <style>
            span.texto {
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                echo "<span class='texto'>$txt</span>";
            ?>    
            <br/><br/><a class="botao" href="03exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>