<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
                $atual = $_GET["aa"];
                echo "O ano atual é $atual e o ano anterior é ".--$atual;
            ?> 
        </div>
    </body>
</html>