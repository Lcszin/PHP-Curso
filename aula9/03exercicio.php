<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
                $nota2 = isset($_GET["n2"])?$_GET["n2"]:0;
                $media = ($nota1 + $nota2)/2;
                if ($media < 5) {
			$sitAluno = "REPROVADO";
		}
		elseif ($media < 7) {
			$sitAluno = "RECUPERAÇÃO";
		}
		else {
			$sitAluno = "APROVADO";
		}
                echo "A media entre <span class='foco'>".number_format($nota1,1)."</span> e <span class='foco'>".number_format($nota2,1)."</span> é igual a <span class='foco'>".number_format($media,1)."</span> <br/> Situação do aluno: <span class='texto'>$sitAluno</span>";
            ?>
            <br/><br/><a class="botao" href="03exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>