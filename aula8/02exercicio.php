<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $nome = isset($_POST["nome"])?$_POST["nome"]:"[Não informado]";
                $ano = isset($_POST["ano"])?$_POST["ano"]:0;
                $sexo = isset($_POST["sexo"])?$_POST["sexo"]:"[Sem sexo]";
                $idade = date("Y") - $ano;
                echo "$nome é $sexo e tem $idade anos";
            ?>
            <a class="botao" href="02exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>