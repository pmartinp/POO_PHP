<?php

declare(strict_types=1);

class Empleado
{

    private $numTelefonos = [];
    private static float $sueldoTope = 3333;

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
     * Get the value of sueldoTope
     */
    public function getSueldoTope()
    {
        return $this->sueldoTope;
    }

    /**
     * Set the value of sueldoTope
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
        if ($this->sueldo > self::$sueldoTope) {
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

    public static function toHtml(Empleado $emp): string
    {
        $res = "<p>" . $emp->getNombreCompleto() . ", " . $emp->getSueldo() . "€</p>";

        $res = $res . "<ol>";
        foreach ($emp->getNumTelefonos() as $x => $value) {
            $res = $res . "<li>" . $value . "</li>";
        }
        $res = $res . "</ol>";
        return $res;
    }
}
