<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $estado = isset($_POST["est"])?$_POST["est"]: "AC";
                switch ($estado) {
                case "AC":
                case "AP":
                case "AM":
                case "PA":
                case "RO":
                case "RR":
                case "TO":
                    $regiao = "Norte";
                    break;
                case "AL":
                case "BA":
                case "CE":
                case "MA":
                case "PI":
                case "PE":
                case "PB":
                case "RN":
                case "SE":
                    $regiao = "Nordeste";
                    break;
                case "GO":
                case "MT":
                case "MS":
                    $regiao = "Centro-Oeste";
                    break;
                case "ES":
                case "MG":
                case "RJ":
                case "SP":
                    $regiao = "Sudeste";
                    break;
                case "PR":
                case "RS":
                case "SC":
                    $regiao = "Sul";
                }
                echo "Você mora na <span class='foco'>Região $regiao</span><br/>";
            ?>
            <br/><a class="botao" href="03exercicio.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>