<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ordenacion por el método de la Burbuja</title>
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
         * Practica Algoritmos de Ordenación, Método Burbuja
         * @versión: 1.0
         */

        // put your code here

        function comprobacionOrden($array1) {
            $contador = 1;
            $ordenado = true;
            if (count($array1) > 1) {
                while ($ordenado && $contador < count($array1)) {
                    if ($array1[$contador] == $array1[$contador - 1]) {
                        $contador++;
                    } elseif ($array1[$contador] < $array1[$contador - 1]) {
                        $ordenado = false;
                    }
                    $contador++;
                }
            }
            return $ordenado;
        };
        
        $array1 = array();
        $numeroIteraciones = 10;

        for ($i = 0; $i < $numeroIteraciones; $i++) {

            $numero = rand(0, 50);
            array_push($array1, $numero);
        }
        
        while (!comprobacionOrden($array1)) {
        foreach ($array1 as $elementos) {
            for ($elementoActivo = 0; $elementoActivo < sizeof($array1)-1 ; $elementoActivo++) {
                if ($array1[$elementoActivo] > $array1[$elementoActivo+1]) {
                    $temporal = $array1[$elementoActivo+1];
                    $array1[$elementoActivo+1] = $array1[$elementoActivo];
                    $array1[$elementoActivo] = $temporal;
                }
            }
        }
        }
        print_r($array1);
        ?>
    </body>
</html>