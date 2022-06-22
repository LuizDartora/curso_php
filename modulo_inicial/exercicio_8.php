<?php

    $ano = readline("Em que ano você nasceu? ");
    $anoAtual = date("Y");
    $idade = $anoAtual - $ano;

    if($idade >= 18){
        echo "Sua idade é ".$idade." Você pode votar e conseguir a carta de habilitação";

    }elseif($idade >= 16){
        echo "Sua idade é ".$idade." Você pode votar mas não pode tirar a carta de habilitação";
    }else{
        echo "Sua idade é ".$idade." Você não pode votar e nem tirar a carta de habilitação";
    }

?>