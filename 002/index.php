<?php
/*002EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala. Añade 
una propiedad privada que almacene un array de números de teléfonos. Añade los 
siguientes métodos:
public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonos(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos*/

include_once("002EmpleadoTelefonos.php");

$empleado = new Empleado();

$empleado->anyadirTelefono(609048109);
$empleado->anyadirTelefono(723674666);
$empleado->anyadirTelefono(693257112);

echo $empleado->listarTelefonos();
echo "<br>";
$empleado->vaciarTelefonos();
echo $empleado->listarTelefonos();