<?php
$num = $_GET['num'];
$i = 0;
while($i<=10){
    $calc = $num *$i;
    echo "$num X $i = $calc<br>";
    $i++;
}
    echo "<br>";
?>
<a href='ex8.html'><button>Voltar</button></a>