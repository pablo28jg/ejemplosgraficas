<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Folios
 *
 * @ORM\Table(name="Folios", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrDescripcion"})}, indexes={@ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Folios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numfolioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoFolio", type="integer", nullable=true)
     */
    private $numtipofolio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTablaConcepto", type="integer", nullable=true)
     */
    private $numtipotablaconcepto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoFormato", type="integer", nullable=true)
     */
    private $numtipoformato = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie", type="string", length=3, nullable=true)
     */
    private $strserie;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio", type="integer", nullable=true)
     */
    private $numfolio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolioDigital_id", type="integer", nullable=true)
     */
    private $numfoliodigitalId = '0';

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
     * Get numfolioId
     *
     * @return integer 
     */
    public function getNumfolioId()
    {
        return $this->numfolioId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Folios
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
     * Set numtipofolio
     *
     * @param integer $numtipofolio
     * @return Folios
     */
    public function setNumtipofolio($numtipofolio)
    {
        $this->numtipofolio = $numtipofolio;

        return $this;
    }

    /**
     * Get numtipofolio
     *
     * @return integer 
     */
    public function getNumtipofolio()
    {
        return $this->numtipofolio;
    }

    /**
     * Set numtipotablaconcepto
     *
     * @param integer $numtipotablaconcepto
     * @return Folios
     */
    public function setNumtipotablaconcepto($numtipotablaconcepto)
    {
        $this->numtipotablaconcepto = $numtipotablaconcepto;

        return $this;
    }

    /**
     * Get numtipotablaconcepto
     *
     * @return integer 
     */
    public function getNumtipotablaconcepto()
    {
        return $this->numtipotablaconcepto;
    }

    /**
     * Set numtipoformato
     *
     * @param integer $numtipoformato
     * @return Folios
     */
    public function setNumtipoformato($numtipoformato)
    {
        $this->numtipoformato = $numtipoformato;

        return $this;
    }

    /**
     * Get numtipoformato
     *
     * @return integer 
     */
    public function getNumtipoformato()
    {
        return $this->numtipoformato;
    }

    /**
     * Set strserie
     *
     * @param string $strserie
     * @return Folios
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
     * Set numfolio
     *
     * @param integer $numfolio
     * @return Folios
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
     * Set numfoliodigitalId
     *
     * @param integer $numfoliodigitalId
     * @return Folios
     */
    public function setNumfoliodigitalId($numfoliodigitalId)
    {
        $this->numfoliodigitalId = $numfoliodigitalId;

        return $this;
    }

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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Folios
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
     * @return Folios
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
     * @return Folios
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
     * @return Folios
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
     * @return Folios
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
