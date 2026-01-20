<?php
//ARRAYS NUMERICOS
$carros = array("BMW", "HILUX", "RANGER", "PATROL");
print_r($carros);
$clientes = ["Rodrigo", "Fabricio", "Elclides", "Jucelina"];
print_r($clientes);
echo "<hr>";
//count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Foreach
foreach ($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";
//ARRAYS ASSOCIATIVOS
$pessoa = array("nome"=> "ALDAIR", "idade" => 23, "altura" => 1.98);
    $pessoa["cidade"] = "Benguela";
print_r($pessoa);

foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

//Arrays multidimensionais
$times = array("Barcelona"=> array("Inter", "Juventos", "Fiorentina", "Roma"),"PSG","LYON",
=>array("Lobito", "Catumbela", "Restinga", "Lixeira" ));
echo $times[""]

