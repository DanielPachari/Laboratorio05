<?php
// Datos del vendedor
$importe_vendido = 15000; // Importe total vendido del mes
$num_hijos_escolar = 2; // Cantidad de hijos en edad escolar

// Cálculo de la comisión
$comision = $importe_vendido * 0.075;

// Cálculo de la bonificación
$bonificacion = $num_hijos_escolar * 50;

// Cálculo del sueldo bruto
$sueldo_basico = 600;
$sueldo_bruto = $sueldo_basico + $comision + $bonificacion;

// Cálculo del descuento
$descuento = $sueldo_bruto * 0.11;

// Cálculo del sueldo neto
$sueldo_neto = $sueldo_bruto - $descuento;

// Resultados
echo "Comisión: S/. " . number_format($comision, 2) . "<br>";
echo "Bonificación: S/. " . number_format($bonificacion, 2) . "<br>";
echo "Sueldo bruto: S/. " . number_format($sueldo_bruto, 2) . "<br>";
echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
echo "Sueldo neto: S/. " . number_format($sueldo_neto, 2) . "<br>";
?>
