<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jornadas
 *
 * @ORM\Table(name="Jornadas", indexes={@ORM\Index(name="Indice_1", columns={"StrJornada_ky"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Jornadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumJornada_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numjornadaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrJornada_ky", type="string", length=10, nullable=true)
     */
    private $strjornadaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeInicioJornada", type="datetime", nullable=true)
     */
    private $tmeiniciojornada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTerminoJornada", type="datetime", nullable=true)
     */
    private $tmeterminojornada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeInicioLabores", type="datetime", nullable=true)
     */
    private $tmeiniciolabores;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTerminoLabores", type="datetime", nullable=true)
     */
    private $tmeterminolabores;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmePuntualidad", type="datetime", nullable=true)
     */
    private $tmepuntualidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeToleranciaEntrada", type="datetime", nullable=true)
     */
    private $tmetoleranciaentrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeToleranciaRetardo", type="datetime", nullable=true)
     */
    private $tmetoleranciaretardo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeToleranciaSalida", type="datetime", nullable=true)
     */
    private $tmetoleranciasalida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeToleranciaTiempoExtra", type="datetime", nullable=true)
     */
    private $tmetoleranciatiempoextra;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoJornada", type="integer", nullable=true)
     */
    private $numtipojornada = '0';

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
     * Get numjornadaId
     *
     * @return integer 
     */
    public function getNumjornadaId()
    {
        return $this->numjornadaId;
    }

    /**
     * Set strjornadaKy
     *
     * @param string $strjornadaKy
     * @return Jornadas
     */
    public function setStrjornadaKy($strjornadaKy)
    {
        $this->strjornadaKy = $strjornadaKy;

        return $this;
    }

    /**
     * Get strjornadaKy
     *
     * @return string 
     */
    public function getStrjornadaKy()
    {
        return $this->strjornadaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Jornadas
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
     * Set tmeiniciojornada
     *
     * @param \DateTime $tmeiniciojornada
     * @return Jornadas
     */
    public function setTmeiniciojornada($tmeiniciojornada)
    {
        $this->tmeiniciojornada = $tmeiniciojornada;

        return $this;
    }

    /**
     * Get tmeiniciojornada
     *
     * @return \DateTime 
     */
    public function getTmeiniciojornada()
    {
        return $this->tmeiniciojornada;
    }

    /**
     * Set tmeterminojornada
     *
     * @param \DateTime $tmeterminojornada
     * @return Jornadas
     */
    public function setTmeterminojornada($tmeterminojornada)
    {
        $this->tmeterminojornada = $tmeterminojornada;

        return $this;
    }

    /**
     * Get tmeterminojornada
     *
     * @return \DateTime 
     */
    public function getTmeterminojornada()
    {
        return $this->tmeterminojornada;
    }

    /**
     * Set tmeiniciolabores
     *
     * @param \DateTime $tmeiniciolabores
     * @return Jornadas
     */
    public function setTmeiniciolabores($tmeiniciolabores)
    {
        $this->tmeiniciolabores = $tmeiniciolabores;

        return $this;
    }

    /**
     * Get tmeiniciolabores
     *
     * @return \DateTime 
     */
    public function getTmeiniciolabores()
    {
        return $this->tmeiniciolabores;
    }

    /**
     * Set tmeterminolabores
     *
     * @param \DateTime $tmeterminolabores
     * @return Jornadas
     */
    public function setTmeterminolabores($tmeterminolabores)
    {
        $this->tmeterminolabores = $tmeterminolabores;

        return $this;
    }

    /**
     * Get tmeterminolabores
     *
     * @return \DateTime 
     */
    public function getTmeterminolabores()
    {
        return $this->tmeterminolabores;
    }

    /**
     * Set tmepuntualidad
     *
     * @param \DateTime $tmepuntualidad
     * @return Jornadas
     */
    public function setTmepuntualidad($tmepuntualidad)
    {
        $this->tmepuntualidad = $tmepuntualidad;

        return $this;
    }

    /**
     * Get tmepuntualidad
     *
     * @return \DateTime 
     */
    public function getTmepuntualidad()
    {
        return $this->tmepuntualidad;
    }

    /**
     * Set tmetoleranciaentrada
     *
     * @param \DateTime $tmetoleranciaentrada
     * @return Jornadas
     */
    public function setTmetoleranciaentrada($tmetoleranciaentrada)
    {
        $this->tmetoleranciaentrada = $tmetoleranciaentrada;

        return $this;
    }

    /**
     * Get tmetoleranciaentrada
     *
     * @return \DateTime 
     */
    public function getTmetoleranciaentrada()
    {
        return $this->tmetoleranciaentrada;
    }

    /**
     * Set tmetoleranciaretardo
     *
     * @param \DateTime $tmetoleranciaretardo
     * @return Jornadas
     */
    public function setTmetoleranciaretardo($tmetoleranciaretardo)
    {
        $this->tmetoleranciaretardo = $tmetoleranciaretardo;

        return $this;
    }

    /**
     * Get tmetoleranciaretardo
     *
     * @return \DateTime 
     */
    public function getTmetoleranciaretardo()
    {
        return $this->tmetoleranciaretardo;
    }

    /**
     * Set tmetoleranciasalida
     *
     * @param \DateTime $tmetoleranciasalida
     * @return Jornadas
     */
    public function setTmetoleranciasalida($tmetoleranciasalida)
    {
        $this->tmetoleranciasalida = $tmetoleranciasalida;

        return $this;
    }

    /**
     * Get tmetoleranciasalida
     *
     * @return \DateTime 
     */
    public function getTmetoleranciasalida()
    {
        return $this->tmetoleranciasalida;
    }

    /**
     * Set tmetoleranciatiempoextra
     *
     * @param \DateTime $tmetoleranciatiempoextra
     * @return Jornadas
     */
    public function setTmetoleranciatiempoextra($tmetoleranciatiempoextra)
    {
        $this->tmetoleranciatiempoextra = $tmetoleranciatiempoextra;

        return $this;
    }

    /**
     * Get tmetoleranciatiempoextra
     *
     * @return \DateTime 
     */
    public function getTmetoleranciatiempoextra()
    {
        return $this->tmetoleranciatiempoextra;
    }

    /**
     * Set numtipojornada
     *
     * @param integer $numtipojornada
     * @return Jornadas
     */
    public function setNumtipojornada($numtipojornada)
    {
        $this->numtipojornada = $numtipojornada;

        return $this;
    }

    /**
     * Get numtipojornada
     *
     * @return integer 
     */
    public function getNumtipojornada()
    {
        return $this->numtipojornada;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Jornadas
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
     * @return Jornadas
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
     * @return Jornadas
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
     * @return Jornadas
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
     * @return Jornadas
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
