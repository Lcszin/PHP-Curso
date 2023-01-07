<html>
    <head>
        <link rel="stylesheet" href="/css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <pre>
                <?php
                    $v = isset($_POST["txt"])?array($_POST["txt"]):"Não Informado";
                    $v[] = isset($_POST["txt1"])?$_POST["txt1"]:"Não Informado";
                    $v[] = isset($_POST["txt2"])?$_POST["txt2"]:"Não Informado";
                    $v[] = isset($_POST["txt3"])?$_POST["txt3"]:"Não Informado";
                    $txt = $v;
                    $txt2 = $v;

                    print_r($txt);
                    $txt[] = "O";
                    array_push($txt, "P");//cria uma casa no final do vetor indicado no primeiro argumento e coloca o segundo argumento
                    array_push($txt2, "P");//cria uma casa no final do vetor indicado no primeiro argumento e coloca o segundo argumento
                    array_unshift($txt, "H");//cria uma casa no começo do vetor indicado no primeiro argumento e coloca o segundo argumento
                    array_unshift($txt2, "H");//cria uma casa no começo do vetor indicado no primeiro argumento e coloca o segundo argumento
                    print_r($txt);
                    array_pop($txt);//apaga a ultima casa do vetor, bem como seu conteudo
                    array_shift($txt);//apaga a primeira casa do vetor, bem como seu conteudo
                    sort($txt);//organiza os itens do vetor sem alterar a sequencia do indice
                    /*Por exemplo
                     * (0=>5, 1=>2, 2=>4)
                     * após o comando sort fica
                     * (0=>2, 1=>4, 2=>5)
                     */
                    print_r($txt);
                    rsort($txt);//tem a mesma ideia do sort só que invertido
                    /*Por exemplo
                     * (0=>5, 1=>2, 2=>4)
                     * após o comando rsort fica
                     * (0=>5, 1=>4, 2=>2)
                     */
                    print_r($txt);
                    asort($txt);// faz a mesma cosia que o sort, porém o indice segue o mesmo para cada item
                    /*Por exemplo
                     * (0=>5, 1=>2, 2=>4)
                     * após o comando sort fica
                     * (1=>2, 2=>4, 0=>5)
                     */
                    print_r($txt);
                    arsort($txt2);
                    /*Por exemplo
                     * (0=>5, 1=>2, 2=>4)
                     * após o comando rsort fica
                     * (0=>5, 2=>4, 1=>2)
                     */
                    print_r($txt2);
                    ksort($txt2);
                    /*Por exemplo
                     * (0=>1, 2=>2, 1=>3)
                     * após o comando rsort fica
                     * (0=>5, 1=>3, 2=>2)
                     */
                    print_r($txt2);
                    krsort($txt2);//segue a logica do rsort porém com o indice
                    /*Por exemplo
                     * (0=>1, 2=>2, 1=>3)
                     * após o comando rsort fica
                     * (2=>2, 1=>3, 0=>1)
                     */
                    print_r($txt2);
                ?> 
            </pre>
            <br/>
            <br/><a class="botao" href="exercicio2.html">Voltar</a><br/>
            <br/><a href="/pt2/index.html" class="botao">Menu de exercícios</a>
        </div>
    </body>
</html>