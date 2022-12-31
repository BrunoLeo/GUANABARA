<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css" >
    <title>Operador unário</title>
</head>
<body>
    <div>
    <?php
    $n1  = $_GET['a'];
    $n2  = $_GET['b'];
    $tipo = $_GET['op'];
    echo "Os valores passados foram:".$n1." e ".$n2;

    $r = ($tipo == "s") ? $n1+$n2 : $n2*$n1;
    echo "<br> Voce consegue identificar qual operação foi feita? <br>O resultado da operação foi :".$r;

    ?>
    </div>
    
</body>
</html>