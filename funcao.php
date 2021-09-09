<?php

function lerArquivo($nomeArquivo) {
    $arquivo = file_get_contents($nomeArquivo);
    $listaJson = json_decode($arquivo);

    return $listaJson;
}

function buscarFuncionarios($funcionarios, $first_name) {
    $filtroFuncionarios = [];

    foreach($funcionarios as $funcionario) {
        if(
            strpos($funcionario->first_name, $first_name) !== false
            ||
            strpos($funcionario->last_name, $first_name) !== false
            ||
            strpos($funcionario->department, $first_name) !== false
        ) {
            $filtroFuncionarios[] = $funcionario;
        }
    }

    return $filtroFuncionarios;
}

function adicionarFuncionario($nomeArquivo, $novoFuncionario) {
    $funcionarios = lerAquivo($nomeArquivo);

    $funcionarios[] = $novoFuncionario;

    $json = json_encode($funcionarios);

    file_put_contents($nomeArquivo, $json);
}