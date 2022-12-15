<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css">
    <title>Mostrando as 5 operações comuns ao algoritimo</title>
</head>
<body>
 <div>
    <?php
    $n1     =$_GET["a"];
    $n2     =$_GET["b"];
    $m      =($n1+$n2)/2;

    echo "<h2>Valores recebidos A= $n1 e B=".$n2."</h2>";
    echo "<br>A soma de $n1 e $n2 vale =".($n1+$n2);
    echo "<br>A subtração de $n1 e $n2 vale =".($n1-$n2);
    echo "<br>A multiplcação de $n1 por $n2 vale =".($n1*$n2);
    echo "<br>A divisão de $n1 por $n2 vale =".($n1/$n2);
    echo "<br>O resto da divisão (módulo) de $n1 por $n2 vale =".($n1%$n2);
    echo "<br>A média aritimética de $n1 por $n2 vale =".($m);
    ?>
 </div>
</body>
</html>