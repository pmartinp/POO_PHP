<?php
declare(strict_types=1);
include_once("011PersonaA.php");

class Empleado extends Persona
{
    private static float $sueldoTope = 3333;
    private $numTelefonos = [];

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad,
        private float $sueldo = 1000
    ) {
        parent::__construct($nombre, $apellidos, $edad);
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
        if ($this->sueldo > self::$sueldoTope && $this->edad > 21) {
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
        if ($p instanceof Empleado) {
            $res = "<p>" . $p->getNombreCompleto() . ", " . $p->getEdad() . ", " . $p->getSueldo() . "€</p>";

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
        $res = parent::__toString() . "<p>Sueldo: " . $this->sueldo . "€</p>";

        $res = $res . "<ol>";
        foreach ($this->numTelefonos as $x => $value) {
            $res = $res . "<li>" . $value . "</li>";
        }
        $res = $res . "</ol>";

        return $res;
    }
}
