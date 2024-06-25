<?php

$ano = $_GET['ano'];
$calc1 = $ano%4;
$calc2 = $ano%100;
$calc3 = $ano%400;

if($calc1 ==0 && $calc2 =! 0){
    echo "O ano $ano é bissexto!";
}
else if($calc3 == 0){
    echo "O ano $ano é bissexto!";
}
else{
    echo "O ano $ano não é bissexto.";
}
?>
<!-- codigo html do php-->
<a href='ex4.html'><button>Voltar</button></a>