//funcoesaritmeticas
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css">
        <meta charset="UTF-8"/>
        <title>Funções Aritmeticas</title>
        <style>
            h2{
                font: 15pt Arial;
                color: #000fff;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div>
            <?php 
                $v1 = $_GET["x"];// lê o x informado na barra do link após o ?
                $v2 = $_GET["y"];// lê o y informado na barra do link após o ?
                //exemplo http://localhost:8000/funcoesaritmeticas?x=80000&y=3.6465
                echo "<h2> Numeros recebidos $v1 e $v2</h2>";
                echo "** O arredondamento de $v1 é ". round($v1);//Arredondamento
                echo "<br/>** O arredondamento de $v2 é ". round($v2);//Arredondamento
                //Exite também o ceil(arredonda sempre para um numero maior) e o floor(arredonda sempre para um numero menor)
                echo "<br/>** O valor absoluto de ". round($v2). " é ". abs(round($v2));//valor absoluto
                echo "<br/>** O valor de ". round($v1). "<sup>". round($v2). "</sup> é ". pow(round($v1), round($v2));//potencia
                echo "<br/>** A raiz quadrada de ". round($v1). " é ". sqrt(round($v1));//raiz quadrada
                echo "<br/>** A raiz quadrada de ". round($v2). " é ". sqrt(round($v2));//raiz quadrada
                echo "<br/>** A parte inteira de $v2 é ". intval($v2);//valor inteiro da variável
                echo "<br/>** O valor de $v1 em moeda é R$". number_format($v1,2,",",".");//formatação do numero indicado na primeira informação do parentese
            ?>
        </div>
    </body>
</html>
