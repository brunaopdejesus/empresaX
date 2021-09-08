<?php

function lerArquivo($nomeArquivo) {
    $arquivo = file_get_contents($nomeArquivo);
    $listaJson = json_decode($arquivo);

    return $listaJson;
}

function buscarFuncionarios($funcionarios, $first_name) {
    $filtroFuncionarios = [];

    foreach($funcionarios as $funcionario) {
        $filtroFuncionarios[] = $funcionario;
    }

    return $filtroFuncionarios;
}