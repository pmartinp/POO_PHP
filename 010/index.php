<?php
/*010PersonaS.php: Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las 
clases Persona y Empleado, de forma similar a los realizados en HTML, pero sin que 
sean estáticos, de manera que obtenga los datos mediante $this.*/

include_once("310Empleado.php");

$persona = new Persona("Jose", "de Nazaret", 48);
$empleado = new Empleado("Jesus", "de Nazaret", 33);

$empleado->anyadirTelefono(609048109);
$empleado->anyadirTelefono(723674666);
$empleado->anyadirTelefono(693257112);

echo $persona->__toString();
echo "<br>";
echo $empleado->__toString();