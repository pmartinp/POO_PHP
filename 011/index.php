<?php
/*011PersonaA.php: Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona 
$p) tenga que ser redefinido en todos sus hijos.*/

include_once("311Empleado.php");

$empleado = new Empleado("Jesus", "de Nazaret", 33);

$empleado->anyadirTelefono(609048109);
$empleado->anyadirTelefono(723674666);
$empleado->anyadirTelefono(693257112);

echo $empleado->__toString();