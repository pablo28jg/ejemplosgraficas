<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vialidades
 *
 * @ORM\Table(name="Vialidades", indexes={@ORM\Index(name="Indice_1", columns={"NumVialidadTipo_id"}), @ORM\Index(name="Indice_2", columns={"NumAsentamiento_id"}), @ORM\Index(name="Indice_3", columns={"StrDescripcion"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Vialidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumVialidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numvialidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVialidadTipo_id", type="integer", nullable=true)
     */
    private $numvialidadtipoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAsentamiento_id", type="integer", nullable=true)
     */
    private $numasentamientoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCreadoPor_id", type="integer", nullable=true)
     */
    private $numcreadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCreacion", type="datetime", nullable=true)
     */
    private $dtecreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActualizadoPor_id", type="integer", nullable=true)
     */
    private $numactualizadoporId = '0';

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
     * Get numvialidadId
     *
     * @return integer 
     */
    public function getNumvialidadId()
    {
        return $this->numvialidadId;
    }

    /**
     * Set numvialidadtipoId
     *
     * @param integer $numvialidadtipoId
     * @return Vialidades
     */
    public function setNumvialidadtipoId($numvialidadtipoId)
    {
        $this->numvialidadtipoId = $numvialidadtipoId;

        return $this;
    }

    /**
     * Get numvialidadtipoId
     *
     * @return integer 
     */
    public function getNumvialidadtipoId()
    {
        return $this->numvialidadtipoId;
    }

    /**
     * Set numasentamientoId
     *
     * @param integer $numasentamientoId
     * @return Vialidades
     */
    public function setNumasentamientoId($numasentamientoId)
    {
        $this->numasentamientoId = $numasentamientoId;

        return $this;
    }

    /**
     * Get numasentamientoId
     *
     * @return integer 
     */
    public function getNumasentamientoId()
    {
        return $this->numasentamientoId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Vialidades
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Vialidades
     */
    public function setNumcreadoporId($numcreadoporId)
    {
        $this->numcreadoporId = $numcreadoporId;

        return $this;
    }

    /**
     * Get numcreadoporId
     *
     * @return integer 
     */
    public function getNumcreadoporId()
    {
        return $this->numcreadoporId;
    }

    /**
     * Set dtecreacion
     *
     * @param \DateTime $dtecreacion
     * @return Vialidades
     */
    public function setDtecreacion($dtecreacion)
    {
        $this->dtecreacion = $dtecreacion;

        return $this;
    }

    /**
     * Get dtecreacion
     *
     * @return \DateTime 
     */
    public function getDtecreacion()
    {
        return $this->dtecreacion;
    }

    /**
     * Set numactualizadoporId
     *
     * @param integer $numactualizadoporId
     * @return Vialidades
     */
    public function setNumactualizadoporId($numactualizadoporId)
    {
        $this->numactualizadoporId = $numactualizadoporId;

        return $this;
    }

    /**
     * Get numactualizadoporId
     *
     * @return integer 
     */
    public function getNumactualizadoporId()
    {
        return $this->numactualizadoporId;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Vialidades
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
     * @return Vialidades
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
