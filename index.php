<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>index.php de Algoritmos de Ordenacion</title>
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
            * Practica Algoritmos de Ordenación, Índice
            * @versión: 1.0
        */
        
        // put your code here
        
        $i = 2;
        switch ($i) {
            case 0:
                include 'insercionDirecta.php';
                break;
            case 1:
                include 'ordenacionBurbuja.php';
                break;
            case 2:
                include 'busquedaBinaria.php';
                break;
            default:
                echo "Error en el switch";
        }
        
        ?>
    </body>
</html>