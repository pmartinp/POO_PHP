<?php
/*012Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100*/

include_once("312Empleado.php");
include_once("012Gerente.php");

$empleado = new Empleado("Jesus", "de Nazaret", 33, 100, 22.5);
$gerente = new Gerente("María", "Madre de Jesús", 51, 4500);

$empleado->anyadirTelefono(609048109);
$empleado->anyadirTelefono(723674666);
$empleado->anyadirTelefono(693257112);

$gerente->anyadirTelefono(837266142);
$gerente->anyadirTelefono(955774012);

echo $empleado->__toString();
echo $gerente->__toString();