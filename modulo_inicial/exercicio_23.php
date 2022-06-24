<?php
    //Exercicio 23

    $qtd = 3;
    $qtdNotas = 3;
    $matricula;
    $freq;
    $nota1;

    $maiorNota;
    $menorNota;
    $mediaTurma = 0;
    $aprovados = 0;
    $reprovados = 0;
    $repFreq = 0;

    for($i = 0; $i < $qtd; $i++){
        //Leitura da matricula do aluno e resete da variavel auxiliar usada para calcular a media de cada aluno
        $matricula[$i] = readline("Insira a matricula do aluno ");
        $aux = 0;
        //Entrada das notas de cada aluno
        for($j = 1; $j <= $qtdNotas; $j++){
            $nota1 = readline("Insira o valor da nota ".$j);
            $aux += $nota1;
            $mediaTurma += $nota1;

            //Avalia se as variaveis estao vazias e tambem qual a maior e menor nota da turma
            if(empty($maiorNota) || $nota1 > $maiorNota){
                $maiorNota = $nota1;
            }elseif(empty($menorNota) || $nota1 < $menorNota){
                $menorNota = $nota1;
            }
        }
        //Calculo da media de cada aluno
        $media[$i] = $aux/$qtdNotas;
        //Entrada da frequencia de cada aluno
        $freq[$i] = readline("Qual a frequência do aluno? (Ex. 60) ");
        //Faz o controle de alunos reprovados por frequecia ou media inferior 6 e alunos aprovados
        if($freq[$i] < 75){
            $repFreq++;
            $reprovados++;
        }elseif($media[$i] < 6){
            $reprovados++;
        }else{
            $aprovados++;
        }     
    }

    //Imprimi os dados de cada aluno
    for($i = 0; $i < $qtd; $i++){
        echo "\n";
        echo "-----------------------------------------------------------------------------\n";
        echo "A matricula do aluno é ".$matricula[$i]."\n";
        echo "Media do aluno é ".$media[$i]."\n";
        echo "A frequência do aluno é ".$freq[$i]."\n";
    //Imprimi se o aluno está aprovado verificando a media e frequencia
        if($media[$i] < 6 || $freq[$i] < 75){
            echo "Aluno reprovado por média menor que 6 ou frequência menor que 75% \n";
        }else{
            echo "Aluno aprovado por média maior que 6 e frequência maior que 75% \n";
        }
        echo "-----------------------------------------------------------------------------\n";
        echo "\n";
    }
    //Imprimir dados referentes a turma
    echo "--------------------------------------------\n";
    echo "Reprovados por frequencia ".(($repFreq/$qtd)*100)."%\n";
    echo "Total de alunos reprovados ".$reprovados."\n";
    echo "Total de alunos aprovados ".$aprovados."\n";
    echo "Menor nota da turma ".$menorNota."\n";
    echo "Maior nota da turma ".$maiorNota."\n";
    echo "Media da turma ".($mediaTurma/($qtd*$qtdNotas))."\n";
    echo "--------------------------------------------\n";
?>