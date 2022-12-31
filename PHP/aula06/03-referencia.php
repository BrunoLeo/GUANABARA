<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css" >
    <title>Aula 06</title>
</head>
<body>
    <div>
        <?php
        echo "Atribuição normal:";
        $a  =3;
        $b  =$a;
        $b  +=5;
        echo "<br>A variavel A vale = ".$a;
        echo "<hr>";
        echo "<br />Atribuição por referência:";
        $a  =3;
        $b  =&$a;
        $b  +=5;
        echo "<br>A variavel A vale = ".$a;
        echo "<br>A variavel B vale = ".$b;




        ?>
    </div>
    
</body>
</html>