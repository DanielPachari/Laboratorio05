<?php
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$nuevo_precio = $precio * 0.95;
$importe_compra = $nuevo_precio * $cantidad;
$importe_descuento = $importe_compra * 0.07;
$importe_pagar = $importe_compra - $importe_descuento;
 //obsequio de dos caramelos por cada gaseosa adquirida
$caramelos = $cantidad * 2;
echo "<h1>Resultado del cálculo de compra de gaseosas</h1>";
echo "<p>Precio actual de la gaseosa de 3 litros: S/ ".$precio."</p>";
echo "<p>Cantidad de gaseosas de 3 litros adquiridas: ".$cantidad."</p>";
echo "<p>Nuevo precio de la gaseosa de 3 litros: S/ ".$nuevo_precio."</p>";
echo "<p>Importe de la compra: S/ ".$importe_compra."</p>";
echo "<p>Importe del descuento: S/ ".$importe_descuento."</p>";
echo "<p>Importe a pagar: S/ ".$importe_pagar."</p>";
echo "<p>Obsequio: ".$caramelos." caramelos</p>";
?>