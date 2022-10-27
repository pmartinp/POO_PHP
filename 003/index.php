<?php
/*003EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. 
Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan 
mediante el constructor (utiliza la sintaxis de PHP8). Si el constructor recibe un tercer 
parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo 
inicial.*/

include_once("003EmpleadoConstructor.php");

// $empleado tendra el sueldo por defecto 1000. En cambio $empleado2 tendrá 5000
$empleado = new Empleado("Laura", "Reyes Vázquez");
$empleado2 = new Empleado("Óscar", "García Pérez", 5000);

echo $empleado->getNombreCompleto() . " " . $empleado->getSueldo();
echo "<br>";
echo $empleado2->getNombreCompleto() . " " . $empleado2->getSueldo();
