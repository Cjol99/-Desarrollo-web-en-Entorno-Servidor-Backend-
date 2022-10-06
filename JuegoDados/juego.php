<?php
        define ('DADO1', "&#9856;");
        define ('DADO2', "&#9857;");
        define ('DADO3', "&#9858;");
        define ('DADO4', "&#9859;");
        define ('DADO5', "&#9860;");
        define ('DADO6', "&#9861;");

        function crearTabla($tamaño){
            $valores = [1 => DADO1, 
                        2 => DADO2,
                        3 => DADO3,
                        4 => DADO4,
                        5 => DADO5,
                        6 => DADO6];
            $tablaResu =[];
            for ($i = 0; $i < $tamaño; $i++) {
             $tablaResu[] = $valores[rand(1,6)];
             
            }
            print_r($tablaResu);
            return $tablaResu;
        }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            td{
                font-size:7em;
            }
            
            .tabla1 {
                background-color: red;
            }
            .tabla2 {
                background-color: green;
            }
        </style>
    </head>
    <body>
        <h1>Cinco dados</h1>
    <?php  
    define ('TAMAÑO',6);

    $linea1 = crearTabla(TAMAÑO);
    echo "<table class='tabla1'><tr>"; 
    for ($i = 0; $i<count($linea1);$i++) {
        echo "<td>".$linea1[$i]."</td>";
    }
    echo "</tr></table>";

    $linea2 = crearTabla(TAMAÑO);
    echo "<table class='tabla2'><tr>";
    for ($i = 0; $i<count($linea2);$i++) {
        echo "<td>".$linea2[$i]."</td>";
    }
    echo "</tr></table>";
    ?>
    </body>
    </html>