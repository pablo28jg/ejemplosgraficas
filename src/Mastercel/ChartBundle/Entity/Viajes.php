<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Viajes
 *
 * @ORM\Table(name="Viajes")
 * @ORM\Entity
 */
class Viajes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumViaje_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numviajeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDestino", type="string", length=60, nullable=true)
     */
    private $strdestino;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteSalida", type="datetime", nullable=true)
     */
    private $dtesalida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteLlegada", type="datetime", nullable=true)
     */
    private $dtellegada;

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

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
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get numviajeId
     *
     * @return integer 
     */
    public function getNumviajeId()
    {
        return $this->numviajeId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Viajes
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
     * Set strdestino
     *
     * @param string $strdestino
     * @return Viajes
     */
    public function setStrdestino($strdestino)
    {
        $this->strdestino = $strdestino;

        return $this;
    }

    /**
     * Get strdestino
     *
     * @return string 
     */
    public function getStrdestino()
    {
        return $this->strdestino;
    }

    /**
     * Set dtesalida
     *
     * @param \DateTime $dtesalida
     * @return Viajes
     */
    public function setDtesalida($dtesalida)
    {
        $this->dtesalida = $dtesalida;

        return $this;
    }

    /**
     * Get dtesalida
     *
     * @return \DateTime 
     */
    public function getDtesalida()
    {
        return $this->dtesalida;
    }

    /**
     * Set dtellegada
     *
     * @param \DateTime $dtellegada
     * @return Viajes
     */
    public function setDtellegada($dtellegada)
    {
        $this->dtellegada = $dtellegada;

        return $this;
    }

    /**
     * Get dtellegada
     *
     * @return \DateTime 
     */
    public function getDtellegada()
    {
        return $this->dtellegada;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Viajes
     */
    public function setMemobservaciones($memobservaciones)
    {
        $this->memobservaciones = $memobservaciones;

        return $this;
    }

    /**
     * Get memobservaciones
     *
     * @return string 
     */
    public function getMemobservaciones()
    {
        return $this->memobservaciones;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Viajes
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
     * @return Viajes
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
     * @return Viajes
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
     * @return Viajes
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Viajes
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

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Viajes
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
