<?php

declare(strict_types=1);

class Empleado
{

    private $numTelefonos = [];
    private static float $sueldo_tope = 3333;

    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000
    ) {
    }
    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Get the value of sueldo
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     *
     * @return  self
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

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
    public function getSueldo_tope()
    {
        return $this->sueldo_tope;
    }

    /**
     * Set the value of sueldo_tope
     *
     * @return  self
     */
    public function setSueldo_tope($sueldo_tope)
    {
        self::$sueldo_tope = $sueldo_tope;

        return $this;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public function debePagarImpuestos(): bool
    {
        if ($this->sueldo > self::$sueldo_tope) {
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
}
