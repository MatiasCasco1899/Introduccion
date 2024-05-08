<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $agenda = [] ;

    $agenda [] = "Dentista a las 12h" ;
    $agenda [] = "Futbol a las 13h" ;
    $agenda [] = "Medico a las 15h" ;
        var_dump ($agenda);
    $arreglo [0] = "Dentista a las 16h" ;
        //*var_dump ($agenda); //*
?>    
<ul>
    <?php
    foreach ($agenda as $arreglo ) {
        echo "<li>$arreglo</li>";
    } ?>
</ul>

</body>
</html>
