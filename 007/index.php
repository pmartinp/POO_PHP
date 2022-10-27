<?php
/*007Persona.php: Copia la clase del ejercicio anterior en 307Empleado.php y 
modifícala.Crea una clase Persona que sea padre de Empleado, de manera que 
Persona contenga el nombre y los apellidos, y en Empleado quede el salario y los 
teléfonos.*/

include_once("307Empleado.php");

$persona = new Persona("José", "de Nazaret");
$empleado = new Empleado("Jesus", "de Nazaret");

$empleado->anyadirTelefono(609048109);
$empleado->anyadirTelefono(723674666);
$empleado->anyadirTelefono(693257112);

echo $persona->getNombreCompleto();
echo "<br>";
echo Empleado::toHtml($empleado);