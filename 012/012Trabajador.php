<?php

declare(strict_types=1);
include_once("012Persona.php");

abstract class Trabajador extends Persona
{
    protected static float $sueldoTope = 3333;
    protected $numTelefonos = [];

    /**
     * Get the value of numTelefonos
     */
    public function getNumTelefonos()
    {
        return $this->numTelefonos;
    }

    /**
     * Set the value of numTelefonos
     *
     * @return  self
     */
    public function setNumTelefonos($numTelefonos)
    {
        $this->numTelefonos = $numTelefonos;

        return $this;
    }

    /**
     * Get the value of sueldo_tope
     */
    public function getSueldoTope()
    {
        return $this->sueldoTope;
    }

    /**
     * Set the value of sueldo_tope
     *
     * @return  self
     */
    public function setSueldoTope($sueldoTope)
    {
        self::$sueldoTope = $sueldoTope;

        return $this;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public function debePagarImpuestos(): bool
    {
        if ($this->calcularSueldo() > self::$sueldoTope && $this->edad > 21) {
            return True;
        } else {
            return False;
        }
    }

    // Almacenamos un nuevo número al final del array
    public function anyadirTelefono(int $telefono): void
    {
        $this->numTelefonos[] = $telefono;
    }

    public function listarTelefonos(): string
    {
        if (empty($this->numTelefonos)) {
            return "No hay teléfonos guardados";
        } else {
            // la función implode devuelve los valores de un array en un string separados como queramos
            return implode(", ", $this->numTelefonos);
        }
    }

    // Borra todos los números de teléfono almacenados en el array numTelefonos[]
    public function vaciarTelefonos(): void
    {
        unset($this->numTelefonos);
    }

    public static function toHtml(Persona $p): string
    {
        return "<p>" . $p->getNombreCompleto() . ", " . $p->getEdad() . "</p>";
    }
    
    abstract public function calcularSueldo();
}
