<?php
        define ('PIEDRA1',  "&#x1F91C;");
        define ('PIEDRA2',  "&#x1F91B;");
        define ('TIJERAS',  "&#x1F596;");
        define ('PAPEL',    "&#x1F91A;");

        $num1 = random_int(1,4);
        $num2 = random_int(1,4);

        function jugador1($num1){
            
            if ($num1 == 1 || $num1 == 2 ){
                return PIEDRA1;
            } else if ($num1 == 3){
                return TIJERAS;
            } else {
                return PAPEL;
            }
        }
        function jugador2($num2){
            
            if ($num2 == 1 || $num2 == 2){
                return PIEDRA2;
            } else if ($num2 == 3){
                return TIJERAS;
            } else {
                return PAPEL;
            }
        }

        function resultado ($num1, $num2){
            if ($num1 == $num2 || ($num1 == 1 && $num2 == 2) || ($num1 == 2 && $num2 == 1)){
                $emp = '¡Empate!';
                return $emp;
            } else if (($num1 == 1 && $num2 == 3) || ($num1 == 2 && $num2 == 3) || ($num1 == 4 && $num2 == 1) || ($num1 == 3 && $num2 == 4) || ($num1 == 4 && $num2 == 2)){
                $j1 = 'Ha ganado el jugador 1';
                return $j1;
            } else if (($num1 == 3 && $num2 == 1) || ($num1 == 3 && $num2 == 2) || ($num1 == 1 && $num2 == 4) || ($num1 == 4 && $num2 == 3) || ($num1 == 2 && $num2 == 4)){
                $j2 = 'Ha ganado el jugador 2';
                return $j2;
            }
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¡Piedra, papel, tijera!</h1>
    <table>
        <tr>
            <th>Jugador 1</th>
            <th>Jugador 2</th>
        </tr>
        <tr>
            <td><SPAN STYLE="font-size:7em"><?= jugador1($num1) ?></span></td>
            <td><SPAN STYLE="font-size:7em"><?= jugador2($num2) ?></span></td>
        </tr>
        <tr>
            <th colspan =2><?= resultado ($num1, $num2) ?></th>
        </tr>
    </table>
    <hr>
</body>
</html>