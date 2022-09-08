<?php

    $diametro = $_POST['diam'];
    $altu = $_POST['altu'];
    $radio = $diametro/2;
    $pi = 3.1416;
    $volumen = $pi*$radio*$radio*$altu;
    echo "El Volumen del cilindro es de ". $volumen ." metros cubitos";
?>