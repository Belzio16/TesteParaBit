<?php
$nome = "Rodrigo Oliveira";
$a = 1;
$b = 2;
$c = 7;


function exibenome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";
//////////////////////////////////////

function exibeCidade(){
        //ESCOPO LOCAL
    global $cidade;
    $cidade = "Luanda";
}
exibeCidade();
echo $cidade;
echo "<hr>";
//////////////////////////////////////

function soma(){
  echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();
