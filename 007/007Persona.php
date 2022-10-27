<?php

declare(strict_types=1);

class Persona
{

    public function __construct(
        protected string $nombre,
        protected string $apellidos
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

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellidos;
    }
}
