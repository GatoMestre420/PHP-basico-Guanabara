<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritiméticos</title>
</head>
<body>
    <h1>Aula sobre Operadores aritméticos</h1>


    <?php

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];

    echo "<h2> Valores recebidos: $n1 e $n2</h2>";
    $s = ($n1 + $n2) / 2; // operador aritimético

    echo "A soma vale " . ($n1+$n2);
    echo "<br/> A subtração vale ". ($n1-$n2);
    echo "<br/> A multiplicação vale ". ($n1*$n2);
    echo "<br/> A divisão vale " . ($n1/$n2);
    echo "<br/> O módulo vale " . ($n1%$n2);
    ?>


  

   
</body>
</html>