<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css" >
    <title>Aula 06 - Variáveis variantes</title>
</head>
<body>
    <div>
        <?php
        $x  ="abc";
        $$x ="def";
        echo"valor da variavel x é:".$x;
        echo"<br>valor da variavel variante é:".$abc;
        ?>
    </div>
    
</body>
</html>