<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foliosdigitales
 *
 * @ORM\Table(name="FoliosDigitales", indexes={@ORM\Index(name="Indice_1", columns={"StrSerie", "NumFolioInicial", "NumFolioFinal"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Foliosdigitales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolioDigital_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numfoliodigitalId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=30, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie", type="string", length=3, nullable=true)
     */
    private $strserie;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolioInicial", type="integer", nullable=true)
     */
    private $numfolioinicial = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolioFinal", type="integer", nullable=true)
     */
    private $numfoliofinal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAprobacion", type="integer", nullable=true)
     */
    private $numaprobacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAnioAprobacion", type="integer", nullable=true)
     */
    private $numanioaprobacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio", type="integer", nullable=true)
     */
    private $numfolio = '0';

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
     * @var string
     *
     * @ORM\Column(name="StrCodigoActivacion", type="string", length=20, nullable=true)
     */
    private $strcodigoactivacion;



    /**
     * Get numfoliodigitalId
     *
     * @return integer 
     */
    public function getNumfoliodigitalId()
    {
        return $this->numfoliodigitalId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Foliosdigitales
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
     * Set strserie
     *
     * @param string $strserie
     * @return Foliosdigitales
     */
    public function setStrserie($strserie)
    {
        $this->strserie = $strserie;

        return $this;
    }

    /**
     * Get strserie
     *
     * @return string 
     */
    public function getStrserie()
    {
        return $this->strserie;
    }

    /**
     * Set numfolioinicial
     *
     * @param integer $numfolioinicial
     * @return Foliosdigitales
     */
    public function setNumfolioinicial($numfolioinicial)
    {
        $this->numfolioinicial = $numfolioinicial;

        return $this;
    }

    /**
     * Get numfolioinicial
     *
     * @return integer 
     */
    public function getNumfolioinicial()
    {
        return $this->numfolioinicial;
    }

    /**
     * Set numfoliofinal
     *
     * @param integer $numfoliofinal
     * @return Foliosdigitales
     */
    public function setNumfoliofinal($numfoliofinal)
    {
        $this->numfoliofinal = $numfoliofinal;

        return $this;
    }

    /**
     * Get numfoliofinal
     *
     * @return integer 
     */
    public function getNumfoliofinal()
    {
        return $this->numfoliofinal;
    }

    /**
     * Set numaprobacion
     *
     * @param integer $numaprobacion
     * @return Foliosdigitales
     */
    public function setNumaprobacion($numaprobacion)
    {
        $this->numaprobacion = $numaprobacion;

        return $this;
    }

    /**
     * Get numaprobacion
     *
     * @return integer 
     */
    public function getNumaprobacion()
    {
        return $this->numaprobacion;
    }

    /**
     * Set numanioaprobacion
     *
     * @param integer $numanioaprobacion
     * @return Foliosdigitales
     */
    public function setNumanioaprobacion($numanioaprobacion)
    {
        $this->numanioaprobacion = $numanioaprobacion;

        return $this;
    }

    /**
     * Get numanioaprobacion
     *
     * @return integer 
     */
    public function getNumanioaprobacion()
    {
        return $this->numanioaprobacion;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Foliosdigitales
     */
    public function setNumempresaId($numempresaId)
    {
        $this->numempresaId = $numempresaId;

        return $this;
    }

    /**
     * Get numempresaId
     *
     * @return integer 
     */
    public function getNumempresaId()
    {
        return $this->numempresaId;
    }

    /**
     * Set numfolio
     *
     * @param integer $numfolio
     * @return Foliosdigitales
     */
    public function setNumfolio($numfolio)
    {
        $this->numfolio = $numfolio;

        return $this;
    }

    /**
     * Get numfolio
     *
     * @return integer 
     */
    public function getNumfolio()
    {
        return $this->numfolio;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Foliosdigitales
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
     * @return Foliosdigitales
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
     * @return Foliosdigitales
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
     * @return Foliosdigitales
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
     * @return Foliosdigitales
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

    /**
     * Set strcodigoactivacion
     *
     * @param string $strcodigoactivacion
     * @return Foliosdigitales
     */
    public function setStrcodigoactivacion($strcodigoactivacion)
    {
        $this->strcodigoactivacion = $strcodigoactivacion;

        return $this;
    }

    /**
     * Get strcodigoactivacion
     *
     * @return string 
     */
    public function getStrcodigoactivacion()
    {
        return $this->strcodigoactivacion;
    }
}
