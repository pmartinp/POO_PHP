<?php

declare(strict_types=1);
include_once("JSerializable.php");

class Empresa implements JSerializable
{

    private $trabajadores = [];

    public function __construct(
        private string $nombre,
        private string $direccion
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
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of trabajadores
     */
    public function getTrabajadores()
    {
        return $this->trabajadores;
    }

    /**
     * Set the value of trabajadores
     *
     * @return  self
     */
    public function setTrabajadores($trabajadores)
    {
        $this->trabajadores = $trabajadores;

        return $this;
    }

    public function anyadirTrabajador(Trabajador $t)
    {
        $this->trabajadores[] = $t;
    }

    public function listarTrabajadoresHtml(): string
    {
        $res = "";
        if (empty($this->trabajadores)) {
            return "No hay trabajadores en la empresa";
        } else {
            foreach ($this->trabajadores as $x) {
                $res = $res . Trabajador::toHtml($x);
            }
        }
        return $res;
    }

    public function getCosteNominas(): float
    {
        $res = 0;

        foreach ($this->trabajadores as $x) {
            $res += $x->calcularSueldo();
        }
        return $res;
    }

    public function toJSON(): string
    {
        return json_encode(get_object_vars($this));
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}
