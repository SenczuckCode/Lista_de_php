<?php

$numero = "13036344984";    
$resultado = preg_replace ('/[0-9]/', '*', $numero);
echo "número original: $numero;\n";
echo "número resultado: $resultado;";
?>