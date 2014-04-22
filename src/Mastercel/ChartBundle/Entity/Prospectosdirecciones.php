<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prospectosdirecciones
 *
 * @ORM\Table(name="ProspectosDirecciones", indexes={@ORM\Index(name="Indice_1", columns={"NumProspecto_id"}), @ORM\Index(name="Indice_2", columns={"NumPais_id"}), @ORM\Index(name="Indice_3", columns={"NumEntidadFederativa_id"}), @ORM\Index(name="Indice_4", columns={"NumCiudad_id"}), @ORM\Index(name="Indice_5", columns={"NumMunicipio_id"}), @ORM\Index(name="Indice_6", columns={"NumAsentamientoTipo_id"}), @ORM\Index(name="Indice_7", columns={"DteActualizacion"}), @ORM\Index(name="Indice_8", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Prospectosdirecciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumDireccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numdireccionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPais_id", type="integer", nullable=true)
     */
    private $numpaisId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidadFederativa_id", type="integer", nullable=true)
     */
    private $numentidadfederativaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrEntidadFederativa", type="string", length=60, nullable=true)
     */
    private $strentidadfederativa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCiudad_id", type="integer", nullable=true)
     */
    private $numciudadId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCiudad", type="string", length=60, nullable=true)
     */
    private $strciudad;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMunicipio_id", type="integer", nullable=true)
     */
    private $nummunicipioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrMunicipio", type="string", length=60, nullable=true)
     */
    private $strmunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoPostal", type="string", length=5, nullable=true)
     */
    private $strcodigopostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAsentamientoTipo_id", type="integer", nullable=true)
     */
    private $numasentamientotipoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAsentamiento_id", type="integer", nullable=true)
     */
    private $numasentamientoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAsentamiento", type="string", length=60, nullable=true)
     */
    private $strasentamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVialidadTipo_id", type="integer", nullable=true)
     */
    private $numvialidadtipoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrVialidad", type="string", length=60, nullable=true)
     */
    private $strvialidad;

    /**
     * @var string
     *
     * @ORM\Column(name="StrExterior", type="string", length=30, nullable=true)
     */
    private $strexterior;

    /**
     * @var string
     *
     * @ORM\Column(name="StrInterior", type="string", length=30, nullable=true)
     */
    private $strinterior;

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=60, nullable=true)
     */
    private $strreferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProspecto_id", type="integer", nullable=true)
     */
    private $numprospectoId = '0';

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
     * Get numdireccionId
     *
     * @return integer 
     */
    public function getNumdireccionId()
    {
        return $this->numdireccionId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Prospectosdirecciones
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
     * Set numpaisId
     *
     * @param integer $numpaisId
     * @return Prospectosdirecciones
     */
    public function setNumpaisId($numpaisId)
    {
        $this->numpaisId = $numpaisId;

        return $this;
    }

    /**
     * Get numpaisId
     *
     * @return integer 
     */
    public function getNumpaisId()
    {
        return $this->numpaisId;
    }

    /**
     * Set numentidadfederativaId
     *
     * @param integer $numentidadfederativaId
     * @return Prospectosdirecciones
     */
    public function setNumentidadfederativaId($numentidadfederativaId)
    {
        $this->numentidadfederativaId = $numentidadfederativaId;

        return $this;
    }

    /**
     * Get numentidadfederativaId
     *
     * @return integer 
     */
    public function getNumentidadfederativaId()
    {
        return $this->numentidadfederativaId;
    }

    /**
     * Set strentidadfederativa
     *
     * @param string $strentidadfederativa
     * @return Prospectosdirecciones
     */
    public function setStrentidadfederativa($strentidadfederativa)
    {
        $this->strentidadfederativa = $strentidadfederativa;

        return $this;
    }

    /**
     * Get strentidadfederativa
     *
     * @return string 
     */
    public function getStrentidadfederativa()
    {
        return $this->strentidadfederativa;
    }

    /**
     * Set numciudadId
     *
     * @param integer $numciudadId
     * @return Prospectosdirecciones
     */
    public function setNumciudadId($numciudadId)
    {
        $this->numciudadId = $numciudadId;

        return $this;
    }

    /**
     * Get numciudadId
     *
     * @return integer 
     */
    public function getNumciudadId()
    {
        return $this->numciudadId;
    }

    /**
     * Set strciudad
     *
     * @param string $strciudad
     * @return Prospectosdirecciones
     */
    public function setStrciudad($strciudad)
    {
        $this->strciudad = $strciudad;

        return $this;
    }

    /**
     * Get strciudad
     *
     * @return string 
     */
    public function getStrciudad()
    {
        return $this->strciudad;
    }

    /**
     * Set nummunicipioId
     *
     * @param integer $nummunicipioId
     * @return Prospectosdirecciones
     */
    public function setNummunicipioId($nummunicipioId)
    {
        $this->nummunicipioId = $nummunicipioId;

        return $this;
    }

    /**
     * Get nummunicipioId
     *
     * @return integer 
     */
    public function getNummunicipioId()
    {
        return $this->nummunicipioId;
    }

    /**
     * Set strmunicipio
     *
     * @param string $strmunicipio
     * @return Prospectosdirecciones
     */
    public function setStrmunicipio($strmunicipio)
    {
        $this->strmunicipio = $strmunicipio;

        return $this;
    }

    /**
     * Get strmunicipio
     *
     * @return string 
     */
    public function getStrmunicipio()
    {
        return $this->strmunicipio;
    }

    /**
     * Set strcodigopostal
     *
     * @param string $strcodigopostal
     * @return Prospectosdirecciones
     */
    public function setStrcodigopostal($strcodigopostal)
    {
        $this->strcodigopostal = $strcodigopostal;

        return $this;
    }

    /**
     * Get strcodigopostal
     *
     * @return string 
     */
    public function getStrcodigopostal()
    {
        return $this->strcodigopostal;
    }

    /**
     * Set numasentamientotipoId
     *
     * @param integer $numasentamientotipoId
     * @return Prospectosdirecciones
     */
    public function setNumasentamientotipoId($numasentamientotipoId)
    {
        $this->numasentamientotipoId = $numasentamientotipoId;

        return $this;
    }

    /**
     * Get numasentamientotipoId
     *
     * @return integer 
     */
    public function getNumasentamientotipoId()
    {
        return $this->numasentamientotipoId;
    }

    /**
     * Set numasentamientoId
     *
     * @param integer $numasentamientoId
     * @return Prospectosdirecciones
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
     * Set strasentamiento
     *
     * @param string $strasentamiento
     * @return Prospectosdirecciones
     */
    public function setStrasentamiento($strasentamiento)
    {
        $this->strasentamiento = $strasentamiento;

        return $this;
    }

    /**
     * Get strasentamiento
     *
     * @return string 
     */
    public function getStrasentamiento()
    {
        return $this->strasentamiento;
    }

    /**
     * Set numvialidadtipoId
     *
     * @param integer $numvialidadtipoId
     * @return Prospectosdirecciones
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
     * Set strvialidad
     *
     * @param string $strvialidad
     * @return Prospectosdirecciones
     */
    public function setStrvialidad($strvialidad)
    {
        $this->strvialidad = $strvialidad;

        return $this;
    }

    /**
     * Get strvialidad
     *
     * @return string 
     */
    public function getStrvialidad()
    {
        return $this->strvialidad;
    }

    /**
     * Set strexterior
     *
     * @param string $strexterior
     * @return Prospectosdirecciones
     */
    public function setStrexterior($strexterior)
    {
        $this->strexterior = $strexterior;

        return $this;
    }

    /**
     * Get strexterior
     *
     * @return string 
     */
    public function getStrexterior()
    {
        return $this->strexterior;
    }

    /**
     * Set strinterior
     *
     * @param string $strinterior
     * @return Prospectosdirecciones
     */
    public function setStrinterior($strinterior)
    {
        $this->strinterior = $strinterior;

        return $this;
    }

    /**
     * Get strinterior
     *
     * @return string 
     */
    public function getStrinterior()
    {
        return $this->strinterior;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Prospectosdirecciones
     */
    public function setStrreferencia($strreferencia)
    {
        $this->strreferencia = $strreferencia;

        return $this;
    }

    /**
     * Get strreferencia
     *
     * @return string 
     */
    public function getStrreferencia()
    {
        return $this->strreferencia;
    }

    /**
     * Set numprospectoId
     *
     * @param integer $numprospectoId
     * @return Prospectosdirecciones
     */
    public function setNumprospectoId($numprospectoId)
    {
        $this->numprospectoId = $numprospectoId;

        return $this;
    }

    /**
     * Get numprospectoId
     *
     * @return integer 
     */
    public function getNumprospectoId()
    {
        return $this->numprospectoId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Prospectosdirecciones
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
     * @return Prospectosdirecciones
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
     * @return Prospectosdirecciones
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
     * @return Prospectosdirecciones
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
     * @return Prospectosdirecciones
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
