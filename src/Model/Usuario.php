<?php

namespace App\Model;

class Usuario {
    private string $nombre;
    private string $apellido1;
    private string $apellido2;

    public function __construct(string $nom, string $ape1, string $ape2){
        $this->nombre = $nom;
        $this->apellido1 = $ape1;
        $this->apellido2 = $ape2;
    }

    /**
     * Get the value of nombre
     *
     * @return string
     */
    public function getNombre(): string {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param string $nombre
     *
     * @return self
     */
    public function setNombre(string $nombre): self {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get the value of apellido1
     *
     * @return string
     */
    public function getApellido1(): string {
        return $this->apellido1;
    }

    /**
     * Set the value of apellido1
     *
     * @param string $apellido1
     *
     * @return self
     */
    public function setApellido1(string $apellido1): self {
        $this->apellido1 = $apellido1;
        return $this;
    }

    /**
     * Get the value of apellido2
     *
     * @return string
     */
    public function getApellido2(): string {
        return $this->apellido2;
    }

    /**
     * Set the value of apellido2
     *
     * @param string $apellido2
     *
     * @return self
     */
    public function setApellido2(string $apellido2): self {
        $this->apellido2 = $apellido2;
        return $this;
    }
}