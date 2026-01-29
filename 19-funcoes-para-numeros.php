<?php
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$".$preco;
echo "<hr>";

echo round(3.9);// Round e usado para arrendondar valores
echo "<hr>";
echo ceil(4.1);// Ceil e usado para arrendondar valores para cima
echo "<hr>";
echo floor(7.70);// Floor e usado para arrendondar valores para baixo
echo "<hr>";
echo rand(0, 2000);// Rand e usado para gerar numeros aleatorios
