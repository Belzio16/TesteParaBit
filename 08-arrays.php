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

//Foreach para percorrer um array
foreach ($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

//ARRAYS ASSOCIATIVOS
$pessoa = array("nome"=> "ALDAIR", "Idade" => 23, "Altura" => 1.98);
$pessoa["cidade"] = "Benguela";
print_r($pessoa);

foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

echo "<hr>";
//Arrays multidimensionais
$times = array(
    "Barcelona"=> array("Campeao"=>"Inter", "Vice-Campeao"=>"Juventos", "Terceiro colocado"=>"Roma"),
    "PSG"=>array("Equipe 1"=>"Ajax","Equipe 2"=>"Bayer", "Equipe 3"=>"Dortmund"),
    "Restinga" => array("Cidade1"=>"Lobito","Cidade2"=> "Catumbela","Cidade3"=> "Restinga")
    );
echo $times["Barcelona"]["Campeao"];
echo "<br>";

foreach($times["Barcelona"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo"<br>";

echo $times["PSG"]["Equipe 1"];
echo "<br>";

foreach($times["PSG"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo"<br>";

echo $times["Restinga"]["Cidade1"];
echo "<br>";

foreach($times["Restinga"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "<hr>";
$a = 10;
$b = 12;
$c = 21;

$d = ($a + $b / $c);
echo "Sera realizada a soma e divisao de (10 + 12 / $21) que resulta em: ".$d;
?>