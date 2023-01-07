<html>
    <head>
        <link rel="stylesheet" href="/css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $txt = isset($_POST["txt"])?$_POST["txt"]:"Não Informado";
                
                $txtLower = strtolower($txt);// deixa todas as letras minusculas
                
                $txtupper = strtoupper($txt);// deixa todas as letras MAIUSCULAS
                
                $txtucfirst = ucfirst($txt);// Vai deixar a primeira letra da frase obrigatoriamente em upper case (uc)
                
                $txtucwords = ucwords($txt);//Aprimeira letra de cada plavra fica obrigatoriamente em upper case (uc)
                
                $reverse = strrev($txt);// inverte o texto digitado
                
                printf("<br/> Maiuscula: %s <br/> Minuscula: %s <br/>", $txtupper ,$txtLower);
                echo "$txtucfirst (primeira letra da frase maiuscula) <br/> $txtucwords (primeira letra de cara palavra maiuscula)";
                
                //uso do strpos
                $frase = "Estou aprendendo PHP";
                $pos = strpos($frase, "PHP");// descobre a posição de uma palavra na frase (a palavra tem que estar escrita exatamente igual na frase)
                $posi = stripos($frase, "php");//faz o mesmo que a strpos, porém não precisa estar escrito exatamente igual
                // ambas as variaveis vão recerber o valor 17
                   
                //uso do substr_count
                $frase2 = "Estou aprendendo PHP no Curso em Vídeo de PHP";
                $cont = substr_count($frase2, "PHP");// vai contar quantas vezes aparece o segundo atributo no primeiro atributo
                
                //uso do substr
                $site = "Curso em Vídeo";
                $sub = substr($site, 0,5);//cria uma substring (pedaço da string) de acordo com os atributos informados.
                //caso use valor negativo vai pegar as ultimas letras
                
                //Uso do str_pad
                $nome = "Guanabara";
                $novo = str_pad($nome, 30," ", STR_PAD_RIGHT);// tbm existe STR_PAD_CENTER e STR_PAD_LEFT
                
                //uso do str_repeat
                $txt2 = str_repeat("Php ", 5);//está colocando dentro de txt2 a string 'Php Php Php Php Php '
                
                //uso do str_replace
                $frase3 = "Gosto de estudar Matematica! Matematica é muito legal!";
                $novafrase = str_replace("Matematica", "PHP", $frase3);//vai substituir o primeiro atributo pelo segundo no 3 atributo
                //existe o str_ireplace(); que ignora se a letra é maiuscula ou minuscula
                
            ?> <br/>
            <br/><a class="botao" href="exercicio1.html">Voltar</a><br/>
            <br/><a href="/pt2/index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>