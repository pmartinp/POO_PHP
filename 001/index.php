<?php
/*001Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo. 
Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando 
el sueldo es superior a 3333€) → debePagarImpuestos(): bool*/

include_once("001Empleado.php");

$empleado = new Empleado();

// Introducimos el valor de los atributos
$empleado->setNombre("Juan");
$empleado->setApellidos("Martín Rodríguez");
$empleado->setSueldo(4328.90);

echo $empleado->getNombreCompleto();
echo "<br>";

if ($empleado->debePagarImpuestos()) {
    echo "Debe pagar impuestos";
} else {
    echo "No debe pagar impuestos";
}
