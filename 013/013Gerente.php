<?php
declare(strict_types=1);
include_once("013Trabajador.php");

class Gerente extends Trabajador
{

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad,
        private float $salario
    ) {
        parent::__construct($nombre, $apellidos, $edad);
    }

    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public static function toHtml(Persona $p): string
    {
        if ($p instanceof Empleado) {
            $res = parent::toHtml($p). "<p>Sueldo: " . $p->calcularSueldo() . "€</p>";

            $res = $res . "<ol>";
            foreach ($p->getNumTelefonos() as $x => $value) {
                $res = $res . "<li>" . $value . "</li>";
            }
            $res = $res . "</ol>";
        }

        return $res;
    }

    public function __toString(): string
    {
        $res = parent::__toString() . "<p>Sueldo: " . $this->calcularSueldo() . "€</p>";

        $res = $res . "<ol>";
        foreach ($this->numTelefonos as $x => $value) {
            $res = $res . "<li>" . $value . "</li>";
        }
        $res = $res . "</ol>";

        return $res;
    }

    public function calcularSueldo()
    {
        return $this->salario + $this->salario * $this->edad / 100;
    }
}
