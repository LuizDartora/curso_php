<?php

$pessoa = array(
    "nome" => array(),
    "idade" => array(),
    "sexo" => array(),
    "altura" => array()
);

array_push($pessoa, ["nome"=>"Aurora"]);
array_push($pessoa,["idade"=>36]);
array_push($pessoa,["sexo"=>"Feminino"]);
array_push($pessoa,["altura"=>1.56]);



print_r($pessoa);
?>