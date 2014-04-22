<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consecutivos
 *
 * @ORM\Table(name="Consecutivos", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Consecutivos
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrTabla_id", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strtablaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSiguiente", type="integer", nullable=true)
     */
    private $numsiguiente = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteActualizacion", type="datetime", nullable=true)
     */
    private $dteactualizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get strtablaId
     *
     * @return string 
     */
    public function getStrtablaId()
    {
        return $this->strtablaId;
    }

    /**
     * Set numsiguiente
     *
     * @param integer $numsiguiente
     * @return Consecutivos
     */
    public function setNumsiguiente($numsiguiente)
    {
        $this->numsiguiente = $numsiguiente;

        return $this;
    }

    /**
     * Get numsiguiente
     *
     * @return integer 
     */
    public function getNumsiguiente()
    {
        return $this->numsiguiente;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Consecutivos
     */
    public function setDteactualizacion($dteactualizacion)
    {
        $this->dteactualizacion = $dteactualizacion;

        return $this;
    }

    /**
     * Get dteactualizacion
     *
     * @return \DateTime 
     */
    public function getDteactualizacion()
    {
        return $this->dteactualizacion;
    }

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Consecutivos
     */
    public function setNumestadocomunicacion($numestadocomunicacion)
    {
        $this->numestadocomunicacion = $numestadocomunicacion;

        return $this;
    }

    /**
     * Get numestadocomunicacion
     *
     * @return integer 
     */
    public function getNumestadocomunicacion()
    {
        return $this->numestadocomunicacion;
    }
}
