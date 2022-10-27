<?php
/*009PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
necesario para mostrar y/o editar la edad cuando sea necesario.*/

include_once("309Empleado.php");

$empleado = new Empleado("Jose", "de Nazaret", 48, 4000);
$empleado2 = new Empleado("Jesus", "de Nazaret", 20, 5000);

$empleado2->anyadirTelefono(609048109);
$empleado2->anyadirTelefono(723674666);
$empleado2->anyadirTelefono(693257112);

echo Empleado::toHtml($empleado);
if ($empleado->debePagarImpuestos()) {
    echo "Debe pagar impuestos";
} else {
    echo "No debe pagar impuestos";
}

echo Empleado::toHtml($empleado2);
if ($empleado2->debePagarImpuestos()) {
    echo "Debe pagar impuestos";
} else {
    echo "No debe pagar impuestos";
}
