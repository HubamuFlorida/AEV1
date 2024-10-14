<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
    $paquetes= 1;
    $ancho= 2;
    $largo= 2;
    $alto= 2;
    $peso= 6;
    $zona= "Península";
    $tamaño= ($largo * $ancho * $alto);
    

    if($tamaño>0 & $tamaño<=0.5) {
        $preciotamaño= (50*$tamaño);
    }
    elseif($tamaño<=1) {
        $preciotamaño= (75*$tamaño);
    }
    else{
        $preciotamaño= (100*$tamaño);
    }
    echo "El precio por el tamaño del pedido es de: " . $preciotamaño . "€<br>";

    if($peso>0 & $peso<=5) {
        $preciopeso= 0;
        echo "No hay costes por el peso del pedido <br>";
    }
    elseif($peso<=10) {
        $incrementopeso= ((($preciotamaño*25)/100));
        $preciopeso= ($preciotamaño+$incrementopeso);
        echo "El precio por el peso del paquete es de: " . $preciopeso . "€<br>";
    }
    elseif($peso<=15) {
        $incrementopeso= ((($preciotamaño*50)/100));
        $preciopeso= ($preciotamaño+$incrementopeso);
        echo "El precio por el peso del paquete es de: " . $preciopeso . "€<br>";
    }
    else{
        echo "No es posible realizar un pedido de tanto tamaño <br>";
    }

    if($zona== "Península") {
        $preciozona= 0;
        echo "No hay costes por la zona seleccionada <br>";
    }
    elseif ($zona== "Baleares marítimo") {
        $preciozona= 0;
        echo "No hay costes por la zona seleccionada <br>";
    }
    elseif($zona== "Baleares aéreo") {
        $incrementozona= ((($preciopeso*10)/100));
        $preciozona= ($preciopeso+$incrementozona);
        echo "El precio por la zona es de: " . $preciozona . "€<br>";
    }
    elseif($zona== "Canarias") {
        $incrementozona= ((($preciopeso*10)/100));
        $preciozona= ($preciopeso+$incrementozona);
        echo "El precio por la zona es de: " . $preciozona . "€<br>";
    }

    if ($paquetes>0) {
        $sumaprecio= ($preciotamaño + $preciopeso + $preciozona);
        $preciototal= ($sumaprecio*$paquetes);
        echo "El precio total es de " . $preciototal . "€ por el envio de " . $paquetes . " paquete/s<br>";
    }
    else{
        echo "Revisa las variables";
    }
    
    

    ?>
</body>
</html>