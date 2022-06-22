<?php

    $n1 = readline("Insira o primeiro valor ");
    $n2 = readline("Insira o segundo valor ");
    $n3 = readline("Insira o terceiro valor ");
    
    if($n1 > $n2 && $n1 > $n3){
        echo "O maior valor é ".$n1;
    }elseif($n2 > $n1 && $n2 > $n3){
        echo "O maior valor é ".$n2;
    }elseif($n3 > $n1 && $n3 > $n2){
        echo "O maior valor é ".$n3;
    }else{
        echo "Os números são iguais";
    }


?>