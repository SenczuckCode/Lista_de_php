<?php
function gerarSenha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos) {
    $ma = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $mi = 'abcdefghijklmnopqrstuvwxyz';
    $nu = '1234567890';
    $si = '!@#$%&*()_-+=';
    
    $senha = '';

    if ($maiusculas) {
        $senha .= str_shuffle($ma);
    }
    if ($minusculas) {
        $senha .= str_shuffle($mi);
    }
    if ($numeros) {
        $senha .= str_shuffle($nu);
    }
    if ($simbolos) {
        $senha .= str_shuffle($si);
    }


    if (empty($senha)) {
        return '';
    }

    return substr(str_shuffle($senha), 0, $tamanho);
}

echo gerarSenha(10, true, true, true, true);
?>