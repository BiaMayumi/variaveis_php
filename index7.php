<?php
// Sintaxe is_object()

$meuObjeto = new stdClass(); //classe predefinida do PHP. Ela é vazia, não possui métodos nem propriedades.
if (is_object($meuObjeto)) { 
    echo "A variável é um objeto";
} else {
    echo "A variável não é um objeto!";
}
?>
