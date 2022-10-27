<?php

declare(strict_types=1);

class Persona
{

    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad
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
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public static function toHtml(Persona $p): string
    {
        return "<p>" . $p->getNombreCompleto() . ", " . $p->getEdad() . "</p>";
    }
}
