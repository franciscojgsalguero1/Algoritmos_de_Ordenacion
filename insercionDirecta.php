<html>
<head>
        <meta charset="UTF-8">
        <title>Insercion Directa</title>
</head>
<body>

<?php

    /*
        *
        * @author Francisco José Gordo Salguero
        * Fecha Inicio: 04/10/2020
        * Fecha Fin: 29/10/2020
        * Curso: 2do FPS DAW Presencial
        * Modulo: Programación PHP
        * Practica Algoritmos de Ordenación, Método Inserción Directa
        * @versión: 1.0
    */

$array1 = array();

$numeroIteraciones = 10;

for( $i=0; $i < $numeroIteraciones; $i++ ) {
    
    $contador = 0;
    $numero = rand(0, 10);
    
    if (empty($array1)) {
        array_push($array1, $numero);
    } else {
        
        while ($contador < count($array1) && $numero > $array1[$contador] ) {
            $contador++;
        }
        
        if ($contador != count($array1)) {
            $array2 = array_slice($array1, 0, $contador);
            $array3 = array_slice($array1, $contador, count($array1));
        } else {
            $array2 = array_slice($array1, 0, count($array1));
            $array3 = array_slice($array1, 0, 0);
        }

        array_push($array2, $numero);
        $array1 = array_merge($array2, $array3);
    }
    
}

print_r($array1);
?>

</body>
</html>