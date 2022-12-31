<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css" >    
    
    <title>Operador igual - identico</title>
</head>
<body>
<div>
    <?php
        $a  =3;
        $b  ="3";
        $r  = ($a == $b) ? "são Iguais" :"são diferentes"; 
        echo"As variaveis ".$a." e ".$b." ".$r;

        $r2  = ($a === $b) ? "SÃO SIM" :"NÃO SÃO"; 
        echo"<br>As variaveis ".$a." e ".$b." são iguais e do mesmo tipo? ".$r2;
        
    ?>
</div>
</body>
</html>