<?php

$opt = $_GET['opcao'];
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];

if($opt == 1){
    $calc = $n1+$n2;
    }
else if($opt == 2){
    $calc = $n1-$n2;
    }
else if($opt == 3){
    $calc = $n1/$n2;
    if($n1==0 || $n0==0)
    echo "Essa divisão não pode ser efetuada.";
    }
else if($opt == 4){
    $calc = $n1*$n2;
    }
    echo "O resultado do cálculo é: $calc";
    echo "<br>";
?>
<!-- codigo html do php-->
<a href='ex1.html'><button>Voltar</button></a>