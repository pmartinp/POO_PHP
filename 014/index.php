<?php
/*014EmpresaI.php: Copia las clases del ejercicio anterior y modifícalas.
Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como 
tenemos las propiedades de los objetos privados, debes recorrer las propiedades y 
colocarlas en un mapa. Por ejemplo:*/

include_once("314Empleado.php");
include_once("014Gerente.php");
include_once("014EmpresaI.php");

$empleado = new Empleado("Jesus", "de Nazaret", 33, 100, 22.5);
$empleado2 = new Empleado("Pedro", "el Santo", 28, 120, 27.5);
$gerente = new Gerente("María", "Madre de Jesús", 51, 4500);
$empresa = new Empresa("Explotadores S.L.", "C/ Sin Sueldo");

$empleado->anyadirTelefono(609048109);
$empleado->anyadirTelefono(723674666);
$empleado->anyadirTelefono(693257112);

$gerente->anyadirTelefono(837266142);
$gerente->anyadirTelefono(955774012);

$empresa->anyadirTrabajador($empleado);
$empresa->anyadirTrabajador($empleado2);
$empresa->anyadirTrabajador($gerente);

echo "Empresa: " . $empresa->getNombre();
echo "<br>";
echo $empresa->listarTrabajadoresHtml();
echo "El coste de las nominas asciende a: " . $empresa->getCosteNominas() . "€";

echo "<br><br>";
echo $empresa->toJSON();
echo "<br><br>";
echo $empleado->toSerialize();
echo "<br><br>";
echo $gerente->toJSON();