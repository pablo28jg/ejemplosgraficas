<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asentamientos
 *
 * @ORM\Table(name="Asentamientos", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"StrCodigoPostal"}), @ORM\Index(name="Indice_3", columns={"NumAsentamientoTipo_id"}), @ORM\Index(name="Indice_4", columns={"NumMunicipio_id"}), @ORM\Index(name="Indice_5", columns={"DteActualizacion"}), @ORM\Index(name="Indice_6", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_7", columns={"NumCiudad_id"})})
 * @ORM\Entity
 */
class Asentamientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumAsentamiento_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numasentamientoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

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
     * @ORM\Column(name="NumMunicipio_id", type="integer", nullable=true)
     */
    private $nummunicipioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCiudad_id", type="integer", nullable=true)
     */
    private $numciudadId = '0';

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
     * @return Asentamientos
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
     * Set strcodigopostal
     *
     * @param string $strcodigopostal
     * @return Asentamientos
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
     * @return Asentamientos
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
     * Set nummunicipioId
     *
     * @param integer $nummunicipioId
     * @return Asentamientos
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
     * Set numciudadId
     *
     * @param integer $numciudadId
     * @return Asentamientos
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Asentamientos
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
     * @return Asentamientos
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
     * @return Asentamientos
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
     * @return Asentamientos
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
     * @return Asentamientos
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
