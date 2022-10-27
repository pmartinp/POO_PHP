<?php
/*008PersonaH.php: Copia las clases del ejercicio anterior y modifícalas. Crea en Persona 
el método estático toHtml(Persona $p), y modifica en Empleado el mismo método 
toHtml(Persona $p), pero cambia la firma para que reciba una Persona como 
parámetro. Para acceder a las propiedades del empleado con la persona que recibimos 
como parámetro, comprobaremos su tipo:*/

include_once("308Empleado.php");

$persona = new Persona("Jose", "de Nazaret");
$empleado = new Empleado("Jesus", "de Nazaret");

$empleado->anyadirTelefono(609048109);
$empleado->anyadirTelefono(723674666);
$empleado->anyadirTelefono(693257112);

echo Persona::toHtml($persona);
echo "<br>";
echo Empleado::toHtml($empleado);