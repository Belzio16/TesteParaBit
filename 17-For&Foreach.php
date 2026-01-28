<?php

for ($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = ".(8 * $contador)."<br>"; 
endfor;

echo"<hr>";

$cores = array("Azul", "Vermelho", "Verde", "Amarelo", "Preto");
foreach($cores as $indice =>$valor):
    echo $indice. "-".$valor, "<br>";
endforeach;