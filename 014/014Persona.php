<?php

declare(strict_types=1);

abstract class Persona
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

    abstract public static function toHtml(Persona $p): string;

    public function __toString(): string
    {
        return "<p>" . $this->nombre . " " . $this->apellidos . ", " . $this->edad . "</p>";
    }
}
