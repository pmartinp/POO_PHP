<?php
/*005EmpleadoSueldo.php: Copia la clase del ejercicio anterior y modifícala. Cambia la 
constante por una variable estática sueldoTope, de manera que mediante 
getter/setter puedas modificar su valor.*/

include_once("005EmpleadoSueldo.php");

$empleado = new Empleado("Jesus", "de Nazaret");

echo $empleado->getNombreCompleto()." ".$empleado->debePagarImpuestos();
$empleado->setSueldo_tope(900);
echo "<br>";
echo $empleado->getNombreCompleto()." ".$empleado->debePagarImpuestos();