<?php
/*005EmpleadoSueldo.php: Copia la clase del ejercicio anterior y modifícala. Cambia la 
constante por una variable estática sueldoTope, de manera que mediante 
getter/setter puedas modificar su valor.*/

include_once("005EmpleadoSueldo.php");

$empleado = new Empleado("Jesus", "de Nazaret");

echo $empleado->getNombreCompleto()."<br>";
if ($empleado->debePagarImpuestos()) {
    echo "Debe pagar impuestos";
} else {
    echo "No debe pagar impuestos";
}

$empleado->setSueldo_tope(900);
echo "<br><br>";

echo $empleado->getNombreCompleto()."<br>";
if ($empleado->debePagarImpuestos()) {
    echo "Debe pagar impuestos";
} else {
    echo "No debe pagar impuestos";
}