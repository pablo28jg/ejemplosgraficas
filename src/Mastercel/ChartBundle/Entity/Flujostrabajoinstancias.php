<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flujostrabajoinstancias
 *
 * @ORM\Table(name="FlujosTrabajoInstancias")
 * @ORM\Entity
 */
class Flujostrabajoinstancias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumInstancia_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numinstanciaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFlujoTrabajo_id", type="integer", nullable=true)
     */
    private $numflujotrabajoId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumTerminadoPor_id", type="integer", nullable=true)
     */
    private $numterminadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminacion", type="datetime", nullable=true)
     */
    private $dteterminacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteSiguienteEjecucion", type="datetime", nullable=true)
     */
    private $dtesiguienteejecucion;



    /**
     * Get numinstanciaId
     *
     * @return integer 
     */
    public function getNuminstanciaId()
    {
        return $this->numinstanciaId;
    }

    /**
     * Set numflujotrabajoId
     *
     * @param integer $numflujotrabajoId
     * @return Flujostrabajoinstancias
     */
    public function setNumflujotrabajoId($numflujotrabajoId)
    {
        $this->numflujotrabajoId = $numflujotrabajoId;

        return $this;
    }

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
     * Set memdiagrama
     *
     * @param string $memdiagrama
     * @return Flujostrabajoinstancias
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
     * @return Flujostrabajoinstancias
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
     * @return Flujostrabajoinstancias
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
     * @return Flujostrabajoinstancias
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
     * @return Flujostrabajoinstancias
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
     * Set numterminadoporId
     *
     * @param integer $numterminadoporId
     * @return Flujostrabajoinstancias
     */
    public function setNumterminadoporId($numterminadoporId)
    {
        $this->numterminadoporId = $numterminadoporId;

        return $this;
    }

    /**
     * Get numterminadoporId
     *
     * @return integer 
     */
    public function getNumterminadoporId()
    {
        return $this->numterminadoporId;
    }

    /**
     * Set dteterminacion
     *
     * @param \DateTime $dteterminacion
     * @return Flujostrabajoinstancias
     */
    public function setDteterminacion($dteterminacion)
    {
        $this->dteterminacion = $dteterminacion;

        return $this;
    }

    /**
     * Get dteterminacion
     *
     * @return \DateTime 
     */
    public function getDteterminacion()
    {
        return $this->dteterminacion;
    }

    /**
     * Set dtesiguienteejecucion
     *
     * @param \DateTime $dtesiguienteejecucion
     * @return Flujostrabajoinstancias
     */
    public function setDtesiguienteejecucion($dtesiguienteejecucion)
    {
        $this->dtesiguienteejecucion = $dtesiguienteejecucion;

        return $this;
    }

    /**
     * Get dtesiguienteejecucion
     *
     * @return \DateTime 
     */
    public function getDtesiguienteejecucion()
    {
        return $this->dtesiguienteejecucion;
    }
}
