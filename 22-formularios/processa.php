<?php
// Verifica se os dados vieram do link
if (isset($_GET['idade']) && isset($_GET['sobrenome'])) {
    echo "Idade: " . $_GET['idade'] . "<br>";
    echo "Sobrenome: " . $_GET['sobrenome'] . "<br>";
} 

// Verifica se os dados vieram do formulário
if (isset($_GET['nome'])) {
    echo "Nome enviado: " . $_GET['nome'];
}
var_dump($_GET);
?>