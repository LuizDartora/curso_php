<?php
    /*
    Resolução do exercício 22 do curso de PHP da Flexxo
    atividade:

    Um comerciante deseja fazer o levantamento do lucro das mercadorias que ele
    comercializa. Para isto, mandou digitar cada mercadoria com o nome, preço de
    compra preço de venda das mercadorias. Fazer um algoritmo que:
    • Determine e escreva quantas mercadorias proporcionam:
    • Lucro menor 10 %;
    • Lucro entre 10% e 20%;
    • Lucro maior que 20%.
    • Determine e escreva o valor total de compra e de venda de todas as
    mercadorias, assim como o lucro total.

    */

    //Criação das variáveis
    $produtoNome;
    $precoCompra;
    $precoVenda;
    $lucro;
    $repete = TRUE;

    $array = array(
        "produto" => array(),
        "compra" => array(),
        "venda" => array(),
        "lucro" => array()
    );

    $lucroCont = array(
        "baixo" => array(),
        "medio" => array(),
        "alto" => array()
    );


    while($repete){
        $produtoNome = readline("Qual o nome do produto? ");
        $precoCompra = readline("Qual o valor de compra? ");
        $precoVenda = readline("Qual o valor de venda? ");

        $lucro = ((($precoVenda*100)/$precoCompra)-100);
        
        array_push($array["produto"],$produtoNome);
        array_push($array["compra"],$precoCompra);
        array_push($array["venda"],$precoVenda);
        array_push($array["lucro"],$lucro);

        if($lucro < 10){
            array_push($lucroCont["baixo"],$lucro);
        }elseif($lucro <= 20){
            array_push($lucroCont["medio"],$lucro);
        }else{
            array_push($lucroCont["alto"],$lucro);
        }

        $aux = readline("Gostaria de Inserir novo produto? (s / n)");
        if($aux == "n"){
            $repete = FALSE;
        }
    }

    echo "\n-----------------------------------------------------------------\n";
    echo "Quantidade de produtos com lucro inferior a 10%\n".count($lucroCont["baixo"])."\n";
    echo "Quantidade de produtos com lucro entre 10% e 20%\n".count($lucroCont["medio"])."\n";
    echo "Quantidade de produtos com lucro maior que 20%\n".count($lucroCont["alto"])."\n";
    echo "-----------------------------------------------------------------\n";

    echo "\n-----------------------------------------------------------------\n";
    echo "O preço total de compra de todos os produtos é R\$ ".(array_sum($array["compra"]))."\n";
    echo "O preço total de venda de todos os produtos é R\$ ".(array_sum($array["venda"]))."\n";
    echo "O preço total de compra de todos os produtos é R\$ ".(array_sum($array["venda"]) - array_sum($array["compra"]))."\n";
    echo "-----------------------------------------------------------------\n";
    
?>