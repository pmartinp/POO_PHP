<?php
/*013Empresa.php: Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una 
propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade getters/setters para el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona 
$p)
Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al 
método calcularSueldo().*/

include_once("313Empleado.php");
include_once("013Gerente.php");
include_once("013Empresa.php");

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

echo "Empresa: ".$empresa->getNombre();
echo "<br>";
echo $empresa->listarTrabajadoresHtml();
echo "El coste de las nominas asciende a: ".$empresa->getCosteNominas()."€";