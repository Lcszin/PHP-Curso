<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $preco = $_GET["p"];
                echo " O preço do produto é R$ ". number_format($preco,2,",",".");
                $preco += ($preco*10/100);
                echo "<br/>(Aumento de 10%) O novo preço do produto é R$ ". number_format($preco,2,",",".");
                $preco -= ($preco*10/100);
                echo "<br/>(Desconto de 10%) O novo preço do produto é R$ ". number_format($preco,2,",",".");
            ?>    
        </div>
    </body>
</html>