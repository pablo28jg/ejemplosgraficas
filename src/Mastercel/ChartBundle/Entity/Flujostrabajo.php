<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flujostrabajo
 *
 * @ORM\Table(name="FlujosTrabajo")
 * @ORM\Entity
 */
class Flujostrabajo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumFlujoTrabajo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numflujotrabajoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=60, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="MemDiagrama", type="text", length=16, nullable=true)
     */
    private $memdiagrama;

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
     * Get numflujotrabajoId
     *
     * @return integer 
     */
    public function getNumflujotrabajoId()
    {
        return $this->numflujotrabajoId;
    }

    /**
     * Set strnombre
     *
     * @param string $strnombre
     * @return Flujostrabajo
     */
    public function setStrnombre($strnombre)
    {
        $this->strnombre = $strnombre;

        return $this;
    }

    /**
     * Get strnombre
     *
     * @return string 
     */
    public function getStrnombre()
    {
        return $this->strnombre;
    }

    /**
     * Set memdiagrama
     *
     * @param string $memdiagrama
     * @return Flujostrabajo
     */
    public function setMemdiagrama($memdiagrama)
    {
        $this->memdiagrama = $memdiagrama;

        return $this;
    }

    /**
     * Get memdiagrama
     *
     * @return string 
     */
    public function getMemdiagrama()
    {
        return $this->memdiagrama;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Flujostrabajo
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
     * @return Flujostrabajo
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
     * @return Flujostrabajo
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
     * @return Flujostrabajo
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
}
