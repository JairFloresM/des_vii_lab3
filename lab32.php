<?php 

    $precio1 = $_POST['precio1'];
    $precio2 = $_POST['precio2'];
    $precio3 = $_POST['precio3'];

    $media = ($precio1 + $precio2 + $precio3) / 2;

    echo "<br> DATOS RECIBIDOS";
    echo "<br> Precio de productos del establecimiento 1: ".$precio1." dolares";
    echo "<br> Precio de productos del establecimiento 2: ".$precio2." dolares";
    echo "<br> Precio de productos del establecimiento 3: ".$precio1." dolares";
    echo "<br> El precio medio del producto es de ".$media." dolares";
?>