<?php

    $nome = readline("Qual o seu nome? ");
    $sexo = readline("Qual o seu sexo? M ou F ");

    if(strtolower($sexo) == "m"){
        echo "Ilmo Sr. ".$nome;
    }elseif(strtolower($sexo) =="f"){
        echo "Ilma Sra. ".$nome;
    }else{
        echo "Opção inválida";
    }

    
?>