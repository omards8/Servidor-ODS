<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 */
class Producto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $procesador;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $pantalla;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $camara;

    /**
     * @ORM\Column(type="integer")
     */
    private $bateria;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagen;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $conectividad;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tipo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getProcesador(): ?string
    {
        return $this->procesador;
    }

    public function setProcesador(string $procesador): self
    {
        $this->procesador = $procesador;

        return $this;
    }

    public function getPantalla(): ?string
    {
        return $this->pantalla;
    }

    public function setPantalla(string $pantalla): self
    {
        $this->pantalla = $pantalla;

        return $this;
    }

    public function getCamara(): ?string
    {
        return $this->camara;
    }

    public function setCamara(?string $camara): self
    {
        $this->camara = $camara;

        return $this;
    }

    public function getBateria(): ?int
    {
        return $this->bateria;
    }

    public function setBateria(int $bateria): self
    {
        $this->bateria = $bateria;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getConectividad(): ?string
    {
        return $this->conectividad;
    }

    public function setConectividad(string $conectividad): self
    {
        $this->conectividad = $conectividad;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
