<?php


$numeroSumar = $_POST['numeroSumar'];
$i;
$sumaAcumulativa = 0;

for ($i = 1; $i<=$numeroSumar; $i++){

    $sumaAcumulativa = $sumaAcumulativa + $i;
}

echo "La suma acumulativa desde 1 hasta " . $numeroSumar  . " es " . $sumaAcumulativa;

?>
