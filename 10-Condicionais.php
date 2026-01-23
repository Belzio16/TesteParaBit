<?php

$numero = 5;
if($numero == 10):
    echo "E igual a 10";
    elseif($numero <= 9):
        echo "E menor que 9";
else:
    echo "E diferente de 10";
endif;
echo "<hr>";

$media = 10;
echo ($media >= 12)? "Reprovado":"Aprovado";
echo "<hr>";


$cor = "Rosa";
switch($cor):
    case "vermelho":
        echo "Sua cor perferida e vermelho";
        break;
        case "Verde":
            echo "Sua cor preferida e a cor verde";
            break;
            
            case "Azul":
                echo "Sua cor preferida e a cor azul";
                break;
                default:
                    echo "Sua cor preferida nao e vermelho, verde ou azul";
                    break;
endswitch;