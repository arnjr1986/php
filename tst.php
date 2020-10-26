<?php

function testandoFuncao($varivel){
    echo "Exibindo o objeto $varivel";
}

testandoFuncao("Teste");
echo "<hr>";

function calcMedia($nome, $n1, $n2, $n3, $n4, $n5){
    $media = ($n1 + $n2 + $n3 + $n4 + $n5) /5;
    if ($media >= 5):
        echo "$nome foi a aprovado com  nota $media<br>";
    else:
        echo "$nome foi reprovado. $media é nota ruim";
    endif;
}

calcMedia("Jose", 2, 5, 9, 10, 3);
calcMedia("Jose", 2, 5, 9, 0, 3);
echo "<hr>";
function exercicio($v)
{
    $msg = "Esse numero é ";
    if($v < 0)
    $msg = "Negativo";
    elseif($v >0)
    {
        $msg = "Positivo";
    }
    return $msg;
}
?>