<?php
/** Escalares */
// string
$nome = "Ola mundo";
var_dump($nome);//Ela mostra informacoes sobre a variavel em causa
if(is_string($nome)):
    echo "E UMA STRING";
else:
    echo "Nao e uma string";
endif;
echo "<hr>";

// Dados int
$idade = 30;
var_dump($idade);
if(is_int($idade)):
    echo "E um inteiro";
else:
    echo "Nao e um inteiro";
endif;
echo "<hr>";

//dados do tipo float
$altura = 1.98;
var_dump($altura);
if(is_float($altura)):
    echo "E um float";
else:
    echo "Nao e um float";
endif;
echo "<hr>";

//boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "E um booleano";
else:
    echo "Nao e um boleano";
endif;
echo "<hr>"; //todos esses dados acima sao representacao de tipo de dados escalares

/**** Dados Compostos */
$carros = array("Toyota","Hilux","Suzuki",12,20.6,true);
var_dump($carros);

//object
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = nome;
    }
}

$cliente = new Cliente();
var_dump($cliente);
$cliente->atribuirNome("Fabrcio");
/************** Especiais *******************/
// NULL
$cidade = NULL;
var_dump($cidade);