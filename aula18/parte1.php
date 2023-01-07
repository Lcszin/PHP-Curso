<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <pre>
                <?php
                    $numV = array ($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"]);
                    $numv[] = 7;

                    $c = range(4, 20, 2);//vai criar um vetor que conta de 4 a 20 de 2 em 2

                    $v = array(3=>"A", 1=>"B", 6=>"C", 8=> "D");//chaves personalizadas
                    //será criado um array apenas com esses indices
                    $v[]= "E";

                    unset($v[9]); //irá remover(apagar) o espaço de indice 9 no vetor

                    //chaves associativas
                    $cad = array("nome" => "Ana",
                                 "idade" => 23,
                                 "peso" => 78.5);
                    //os vetores em php não são homogenios, então é possivel
                    $cad["dirige"] = "sim";
                    
                    //MATRIZ EM PHP
                    $n = array(array(2,3), array(3,4), array(9,5) );
                    $n[2][0] = $n[1][1];
                    
                    echo "<br/>";
                    foreach($cad as $k => $f){
                        echo "O campo $k possui o conteudo $f <br/>";
                    }
                    var_dump($n);
                    
                    echo "<br/>";
                    foreach ($numV as $valor){
                        echo " $valor ";
                    }
                    echo "<br/>";
                    
                    echo "<br/>";
                    foreach ($c as $valor){
                        echo " $valor ";
                    }
                ?>
            </pre>
            <br/><a class="botao" href="parte1.html">Voltar</a><br/>
            <br/><a href="index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>