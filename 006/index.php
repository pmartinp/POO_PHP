<?php
/*006EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala. Completa el 
siguiente método con una cadena HTML que muestre los datos de un empleado 
dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, 
deberás crear un getter para los teléfonos):
public static function toHtml(Empleado $emp): string*/

include_once("006EmpleadoStatic.php");

$empleado = new Empleado("Jesus", "de Nazaret");

$empleado->anyadirTelefono(609048109);
$empleado->anyadirTelefono(723674666);
$empleado->anyadirTelefono(693257112);

echo Empleado::toHtml($empleado);