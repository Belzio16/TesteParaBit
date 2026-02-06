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
  


<?php
if(isset($_POST['enviar-formulario'])):
    //Array de erros
    $erros = array();

    //Validações
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "Idade deve ser um inteiro";
    endif;
        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = "Email inválido";
    endif;
        
    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "Peso deve ser um float";
    endif;
    
    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = "IP inválido";
    endif;
    
    
    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = "URL inválida";
    endif;

    if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns, seus dados estão corretos.";
    endif;
endif;
?>