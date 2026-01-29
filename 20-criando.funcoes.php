<?php
//Criando Funcoes
function exibirNome($nome){
    echo "Meu nome e $nome";
}

exibirNome("Adriely Santos");

echo "<hr>";


function calcularMedia($nome, $n1, $n2, $n3, $n4, $n5){
echo "Calculando a media da aluna $nome <br>";
$media = ($n1 + $n2 + $n3 + $n4 + $n5) / 5;
if ($media >= 7):
    echo "$nome Aprovado/a com a media $media";
 else:
    echo "$nome Reprovado/a com a media $media";
 endif;
}

calcularMedia("Adriely", 8, 7, 9, 6, 10); echo "<hr>";
calcularMedia("Marcos", 2, 3, 1, 4, 8); echo "<hr>";
calcularMedia("Renata", 2, 10, 10, 10, 10);echo "<hr>";
calcularMedia("Pascoalina", 1, 5, 10, 3, 10);echo "<hr>";
  