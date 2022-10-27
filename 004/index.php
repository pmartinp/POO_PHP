<?php
/*004EmpleadoConstante.php: Copia la clase del ejercicio anterior y modifícala. Añade 
una constante SUELDO_TOPE con el valor del sueldo que debe pagar impuestos, y 
modifica el código para utilizar la constante.*/

include_once("004EmpleadoConstante.php");

$empleado = new Empleado("Jesus", "de Nazaret");
$empleado2 = new Empleado("María", "Madre de Jesús", 5555);

echo $empleado->getNombreCompleto()."<br>";

if ($empleado->debePagarImpuestos()) {
    echo "Debe pagar impuestos";
} else {
    echo "No debe pagar impuestos";
}
echo "<br><br>";
echo $empleado2->getNombreCompleto()."<br>";
if ($empleado2->debePagarImpuestos()) {
    echo "Debe pagar impuestos";
} else {
    echo "No debe pagar impuestos";
}