<html>
    <head>
        <link rel="stylesheet" href="/css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $txt = isset($_GET["txt"])?$_GET["txt"]:"Não Informado";
                
                $txt = trim($txt);// retira espaço do fim e do começo caso tenha
                /*
                 * existe também ltrim($txt); que só retira os espaços do inicio e
                 * o rtrim($txt); que só retira os do final da palavra
                 */
                
                $tamanho = strlen($txt);//conta a quantidade de caracteres na frase
                
                $palavras = str_word_count($txt, 0);//conta a quantidade de palavras na string
                //colocando 0 conta a quantidade de palavras, colocando 1 gera um vetor,
                //colocando 2 cria um vetor que o indice é exatamente o indice em que a palavra começa
                
                $vTxt = explode(" ", $txt);// vai separa as palavras em forma de array sendo cara palavra representada por um indice
                //existe a função implode() ou join() com o proposito inverso da função explode()
                //onde agora se pega um vetor e transforma em uma string
                
                $joiImplodeTxt = implode("#", $vTxt);// tera como resposta na variavel por exemplo 'Olá,#Mundo!'
                // o primeiro atributo é o que será colocado e o segundo o vetor que vai virar uma string
                
                $txtSplit = str_split($txt);//cria um vetor em que cada letra tem um indice proprio
                
                $letra = chr(99);//usa para descobrir a letra por meio do codigo ASCII
                
                $letra2 = ord($letra);//descobre o cogigo ASCII usando a letra
                
                 printf(" A frase '$txt' tem $tamanho caracteres, e $palavras palavras na frase");
                 
            ?> <br/>
            <br/><a class="botao" href="exercicio4.html">Voltar</a><br/>
            <br/><a href="/pt1/index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>