<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css">
    <title>Operadores Relacionais</title>
</head>
<body>
    <div>
        <?php
        $ano    = $_GET['an'];
        $idade  = 2022 - $ano;
        echo "Quem nasceu no ano $ano tem $idade anos";
        
        $tipo = ($idade >= 18 && $idade <=64)? "<b>Voto é obrigatório</b>":" <b>Voto não é obrigatório</b>";
        echo "<br >De acordo com a idade informada ".$tipo;
/*
        if($idade >= 18 && $idade <=64){
            echo "<br>Voto é obrigatório";
        }else{
            echo "<br>Voto é opcional";
        }
*/
        ?>
    </div>
</body>
</html>