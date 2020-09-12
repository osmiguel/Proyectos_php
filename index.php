<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado</title>

    <style>
            body {
                background-color: green;
            }
    </style>
</head>
<body>
    
    <h1>Supermercado el Caro</h1>

    <h2>Credito disponible: $80000</h2>
    

</body>
</html>

<?php

    $producto1 = 'arroz';
    $producto2 = 'huevos';
    $producto3 = 'frijoles';
    $producto4 = 'panela';
    $producto5 = 'cafe';
    $producto6 = 'pasta';
    $producto7 = 'media guaro';
    $producto8 = 'papas';
    $producto9 = 'carne';
    $producto10 = 'sal';

    $precio1 = 6000;
    $precio2 = 10000;
    $precio3 = 8000;
    $precio4 = 4000;
    $precio5 = 12500;
    $precio6 = 6000;
    $precio7 = 15000;
    $precio8 = 6000;
    $precio9 = 25000;
    $precio10 = 800;

    $total = $precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+
    $precio8+$precio9+$precio10;
           
    $faltante = $total - 80000;
    //$total = 80000;

    if($total > 80000){
        echo('Valor compra: '. $total);
        echo"<br>";
        echo('Su compra supera el credito, resta: '. $faltante);
    } else {
        echo('Su compra ha sido aceptada valor total: '. $total);
    }

?>


