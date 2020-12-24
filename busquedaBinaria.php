<html>
<head>
        <meta charset="UTF-8">
        <title>Busqueda Binaria</title>
</head>
<body>

<?php

    /*
        *
        * @author Francisco José Gordo Salguero
        * Fecha Inicio: 04/10/2020
        * Fecha Fin: 30/10/2020
        * Curso: 2do FPS DAW Presencial
        * Modulo: Programación PHP
        * Practica Algoritmos de Ordenación, Búsqueda Binaria
        * @versión: 1.0
    */

    function comprobacionOrden ($array1) {
        $contador = 1;
        $ordenado = true; 
        if (count($array1) > 1) {
            while ($ordenado && $contador < count($array1)) {
                /*if ($array1[$contador] == $array1[$contador-1]) {
                    $contador++;
                } else*/if (($array1[$contador] < $array1[$contador-1]) && $array1[$contador] != $array1[$contador-1]) {
                    $ordenado = false;
                }
                $contador++;
            }
        }
        return $ordenado;
    };

    $array1 = array();
    $encontrado = false;

    $numeroIteraciones = 10;
    $limit_min = 0;
    $limit_max = 50;

    for( $i=0; $i < $numeroIteraciones; $i++ ) {

        $numero = rand($limit_min, $limit_max);
        array_push($array1, $numero);
    }
    sort($array1);

    if (comprobacionOrden($array1)) {
        $limiteMinimo = 0;
        $limiteMaximo = count($array1);
        $elementoActivo = 0;
        $numeroEncontrar = rand($limit_min, $limit_max);

        while (! $encontrado && $limiteMaximo != $limiteMinimo) {

            $elementoActivo = (int) (($limiteMaximo+$limiteMinimo)/2);

            if ($numeroEncontrar == $array1[$elementoActivo]) {
                $encontrado = true;
            } elseif($numeroEncontrar <= $array1[$elementoActivo]) {
                $limiteMaximo = $elementoActivo;
            } elseif ($numeroEncontrar > $array1[$elementoActivo]) {
                $limiteMinimo = $elementoActivo;
            } else {
                echo "Error";
            }

            if ($limiteMaximo == $limiteMinimo+1) {
                $limiteMaximo = $limiteMinimo;
            }

        }
    } else {
        echo "Hay que ordenar el array. <br>";
    }

    if ($encontrado) {
        echo "El elemento $numeroEncontrar se encuentra en la posicion $elementoActivo <br>";
    } else {
        echo "El elemento $numeroEncontrar <b>NO</b> está en el array <br>";
    }

    print_r($array1);

?>

</body>
</html>