<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = &$a;// quando coloca '&' faz uma referencia a variavel
        //ou seja elas compartilham os valores entre elas (sempre terão o mesmo valor)
        $b += 5;
        echo "A variavel A vale $a";
        echo "A variavel B vale $b";
    ?>
</div>
</body>
</html>