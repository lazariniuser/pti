<?php


function classificarIMC($imc) {

    $faixas = array(
        array('Limite_superior' => 18.5, 'Classificacao' => 'Magreza'),
        array('Limite_superior' => 24.9, 'Classificacao' => 'Saudável'),
        array('Limite_superior' => 29.9, 'Classificacao' => 'Sobrepeso'),
        array('Limite_superior' => 34.9, 'Classificacao' => 'Obesidade Grau I'),
        array('Limite_superior' => 39.9, 'Classificacao' => 'Obesidade Grau II'),
        array('Limite_superior' => PHP_FLOAT_MAX, 'Classificacao' => 'Obesidade Grau III'),
    );


    foreach ($faixas as $faixa) {
        if ($imc <= $faixa['Limite_superior']) {
            return $faixa['Classificacao'];
        }
    }

    return 'Classificação não encontrada';
}

$imcParaClassificar = 25.5;

$resultadoClassificacao = classificarIMC($imcParaClassificar);


echo "O IMC $imcParaClassificar é classificado como: $resultadoClassificacao";

?>
