<?php


$numeroMultiplicar = $_POST['numeroMultiplicar'];
$multiplicion = 0;

for (i = 0; i <= 10; i++){

    $multiplicacion = $numeroMultiplicar * $i;
    

    echo $numeroMultiplicar . " X " . $i . " = " . $multiplicacion .;
}


?>