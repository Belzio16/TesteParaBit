<?php
/*$nome = "aldair gomes";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";

$mensagem = "Olá, seja bem vindo ao curso de PHP!";
echo substr($mensagem,0 , 2);

echo "<hr>";

 $objeto = "mouse";
 $novoObjeto = str_pad($objeto, 10, "2", STR_PAD_BOTH);
echo $novoObjeto;*/

$string = str_repeat("SUCESSO!", 5);
echo $string;
echo "<hr>";

$mensagem = "Olá, seja bem vindo ao curso de PHP!";
echo strlen($mensagem);
echo "<hr>";

$texto =  "A selecao argentina é campea do mundo!";
$novoTexto = str_replace("argentina", "brasil", $texto);
echo $novoTexto;
echo "<hr>";

echo strpos($texto, "mundo");

?>