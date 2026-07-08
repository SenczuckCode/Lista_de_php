<?php

function analisarTexto($texto) {

    $quantidadePalavras = srt_word_count($texto);
    $quantidadeCaracteres = strlen($texto);

    $textoMinusculo = mb_strtolower($texto, 'UTF-8');

    $quantidadeVogais = 0;
    $quantidadeConsoantes = 0;
    $vogais = ['a','e','i','o','u'];

    for ($i = 0; $i < mb_strlen($textoMinusculo, 'UTF-8'); $i++) {
        $caractere = mb_substr($textoMinusculo, $i, 1, 'UTF-8');
        
        if (preg_match('/[a-zçáéíóúâêîôûãõ]/u', $caractere)) {
            if (in_array($caractere, $vogais)) {
                $quantidadeVogais++;
            } else {
                $quantidadeConsoantes++;
            }
        }
    }

    return [
        "palavras" => $quantidadePalavras,
        "caracteres" => $quantidadeCaracteres,
        "vogais" => $quantidadeVogais,
        "consoantes" => $quantidadeConsoantes
    ];
}

$texto_usuario = "Caio leite o mais beautiful desse mundo";
$resultado = analisarTexto($texto_usuario);

echo $resultado["palavras"] . "<br>";
echo $resultado["caracteres"] . "<br>";
echo $resultado["vogais"] . "<br>";
echo $resultado["consoantes"] . "<br>";

?>