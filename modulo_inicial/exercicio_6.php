<?php

    $n1 = readline("Insira o valor da nota 1 ");
    $n2 = readline("Insira o valor da nota 2 ");
    $n3 = readline("Insira o valor da nota 3 ");
    $n4 = readline("Insira o valor da nota 4 ");

    $media = (($n1 + $n2 + $n3 + $n4) / 4);

    if($media >= 5){
        echo "Aluno aprovado com média ".$media;
    }else{
        echo "Aluno reprovado com média ".$media;
    }
    

    
?>