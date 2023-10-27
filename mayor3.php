<?php


$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];


if ($num1 > $num2) {

    if ($num1 > $num3) {

        echo "El mayor es el número " . $num1;
    }else{
    
    echo "El mayor es el número " . $num3;
    }
}
else{
    if ($num2 > $num3) {

        echo "El mayor es el número " . $num2;
    
    }else {
        echo "El mayor es el número " . $num3;
    }

}



?>