<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listaspreciosdetalles
 *
 * @ORM\Table(name="ListasPreciosDetalles", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"NumNivelPrecio_id", "NumListaPrecio_id"})})
 * @ORM\Entity
 */
class Listaspreciosdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumListaPrecio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numlistaprecioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelPrecio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numnivelprecioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="NumMargenUtilidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $nummargenutilidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoNivelPrecio", type="integer", nullable=true)
     */
    private $numtiponivelprecio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



    /**
     * Set numlistaprecioId
     *
     * @param integer $numlistaprecioId
     * @return Listaspreciosdetalles
     */
    public function setNumlistaprecioId($numlistaprecioId)
    {
        $this->numlistaprecioId = $numlistaprecioId;

        return $this;
    }

    /**
     * Get numlistaprecioId
     *
     * @return integer 
     */
    public function getNumlistaprecioId()
    {
        return $this->numlistaprecioId;
    }

    /**
     * Set numnivelprecioId
     *
     * @param integer $numnivelprecioId
     * @return Listaspreciosdetalles
     */
    public function setNumnivelprecioId($numnivelprecioId)
    {
        $this->numnivelprecioId = $numnivelprecioId;

        return $this;
    }

    /**
     * Get numnivelprecioId
     *
     * @return integer 
     */
    public function getNumnivelprecioId()
    {
        return $this->numnivelprecioId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Listaspreciosdetalles
     */
    public function setStrdescripcion($strdescripcion)
    {
        $this->strdescripcion = $strdescripcion;

        return $this;
    }

    /**
     * Get strdescripcion
     *
     * @return string 
     */
    public function getStrdescripcion()
    {
        return $this->strdescripcion;
    }

    /**
     * Set nummargenutilidad
     *
     * @param float $nummargenutilidad
     * @return Listaspreciosdetalles
     */
    public function setNummargenutilidad($nummargenutilidad)
    {
        $this->nummargenutilidad = $nummargenutilidad;

        return $this;
    }

    /**
     * Get nummargenutilidad
     *
     * @return float 
     */
    public function getNummargenutilidad()
    {
        return $this->nummargenutilidad;
    }

    /**
     * Set numtiponivelprecio
     *
     * @param integer $numtiponivelprecio
     * @return Listaspreciosdetalles
     */
    public function setNumtiponivelprecio($numtiponivelprecio)
    {
        $this->numtiponivelprecio = $numtiponivelprecio;

        return $this;
    }

    /**
     * Get numtiponivelprecio
     *
     * @return integer 
     */
    public function getNumtiponivelprecio()
    {
        return $this->numtiponivelprecio;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Listaspreciosdetalles
     */
    public function setNumtipoestado($numtipoestado)
    {
        $this->numtipoestado = $numtipoestado;

        return $this;
    }

    /**
     * Get numtipoestado
     *
     * @return integer 
     */
    public function getNumtipoestado()
    {
        return $this->numtipoestado;
    }
}
