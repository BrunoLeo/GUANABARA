<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css">
    <title>Mostrando as funções aritiméticas</title>
    <style>
        h2{font-size:14px}
    </style>
</head>
<body>
 <div>
    <?php
    $n1     =$_GET["x"];
    $n2     =$_GET["y"];

    echo "<h2>Valores recebidos A= $n1 e B=".$n2."</h2>";
    echo "<br>Valor absoluto de $n2 é =".abs($n2);
    echo "<br>O valor de $n1<sup>$n2</sup> é =".pow($n1,$n2);
    echo "<br>A raiz quadrada de $n1 =".sqrt($n1);
    echo "<br>O valor arredondado de $n2  =".round($n2);
    echo "<br>A parte inteira de $n2 é igual =".intval($n2);
    echo "<br>O valor de $n2 em moeda R$".number_format($n2,2,",",".");
    
    ?>
 </div>
</body>
</html>