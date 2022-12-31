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
        $preco      =$_GET['p'];
        $preco2     =$preco;
        $porcent    =$_GET['x'];
        echo "O valor original é R$ ". number_format($preco,2);
      
        //$preco = $preco + ($preco * $porcent/100);
        $preco += ($preco * $porcent/100); 
        echo "<br /> Com acréscimo de ". $porcent."% o preço final é R$".number_format($preco,2);
        
        $preco2 -= ($preco2 * $porcent/100);
        echo "<br />Com desconto de ".$porcent."% o preço final é R$".number_format($preco2,2,'.');
        ?>
    </div>
    
</body>
</html>