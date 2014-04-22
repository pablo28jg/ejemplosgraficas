<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monedas
 *
 * @ORM\Table(name="Monedas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrMoneda_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Monedas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummonedaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrMoneda_ky", type="string", length=10, nullable=true)
     */
    private $strmonedaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAbreviacionSingular", type="string", length=20, nullable=true)
     */
    private $strabreviacionsingular;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAbreviacionPlural", type="string", length=20, nullable=true)
     */
    private $strabreviacionplural;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSimbolo", type="string", length=4, nullable=true)
     */
    private $strsimbolo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrIdentificador", type="string", length=4, nullable=true)
     */
    private $stridentificador;

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambio = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteUltimoTipoCambio", type="datetime", nullable=true)
     */
    private $dteultimotipocambio;

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
     * @ORM\Column(name="StrCodigo", type="string", length=3, nullable=true)
     */
    private $strcodigo;



    /**
     * Get nummonedaId
     *
     * @return integer 
     */
    public function getNummonedaId()
    {
        return $this->nummonedaId;
    }

    /**
     * Set strmonedaKy
     *
     * @param string $strmonedaKy
     * @return Monedas
     */
    public function setStrmonedaKy($strmonedaKy)
    {
        $this->strmonedaKy = $strmonedaKy;

        return $this;
    }

    /**
     * Get strmonedaKy
     *
     * @return string 
     */
    public function getStrmonedaKy()
    {
        return $this->strmonedaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Monedas
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
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Monedas
     */
    public function setNumtipo($numtipo)
    {
        $this->numtipo = $numtipo;

        return $this;
    }

    /**
     * Get numtipo
     *
     * @return integer 
     */
    public function getNumtipo()
    {
        return $this->numtipo;
    }

    /**
     * Set strabreviacionsingular
     *
     * @param string $strabreviacionsingular
     * @return Monedas
     */
    public function setStrabreviacionsingular($strabreviacionsingular)
    {
        $this->strabreviacionsingular = $strabreviacionsingular;

        return $this;
    }

    /**
     * Get strabreviacionsingular
     *
     * @return string 
     */
    public function getStrabreviacionsingular()
    {
        return $this->strabreviacionsingular;
    }

    /**
     * Set strabreviacionplural
     *
     * @param string $strabreviacionplural
     * @return Monedas
     */
    public function setStrabreviacionplural($strabreviacionplural)
    {
        $this->strabreviacionplural = $strabreviacionplural;

        return $this;
    }

    /**
     * Get strabreviacionplural
     *
     * @return string 
     */
    public function getStrabreviacionplural()
    {
        return $this->strabreviacionplural;
    }

    /**
     * Set strsimbolo
     *
     * @param string $strsimbolo
     * @return Monedas
     */
    public function setStrsimbolo($strsimbolo)
    {
        $this->strsimbolo = $strsimbolo;

        return $this;
    }

    /**
     * Get strsimbolo
     *
     * @return string 
     */
    public function getStrsimbolo()
    {
        return $this->strsimbolo;
    }

    /**
     * Set stridentificador
     *
     * @param string $stridentificador
     * @return Monedas
     */
    public function setStridentificador($stridentificador)
    {
        $this->stridentificador = $stridentificador;

        return $this;
    }

    /**
     * Get stridentificador
     *
     * @return string 
     */
    public function getStridentificador()
    {
        return $this->stridentificador;
    }

    /**
     * Set numtipocambio
     *
     * @param float $numtipocambio
     * @return Monedas
     */
    public function setNumtipocambio($numtipocambio)
    {
        $this->numtipocambio = $numtipocambio;

        return $this;
    }

    /**
     * Get numtipocambio
     *
     * @return float 
     */
    public function getNumtipocambio()
    {
        return $this->numtipocambio;
    }

    /**
     * Set dteultimotipocambio
     *
     * @param \DateTime $dteultimotipocambio
     * @return Monedas
     */
    public function setDteultimotipocambio($dteultimotipocambio)
    {
        $this->dteultimotipocambio = $dteultimotipocambio;

        return $this;
    }

    /**
     * Get dteultimotipocambio
     *
     * @return \DateTime 
     */
    public function getDteultimotipocambio()
    {
        return $this->dteultimotipocambio;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Monedas
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
     * @return Monedas
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
     * @return Monedas
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
     * @return Monedas
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
     * @return Monedas
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
     * Set strcodigo
     *
     * @param string $strcodigo
     * @return Monedas
     */
    public function setStrcodigo($strcodigo)
    {
        $this->strcodigo = $strcodigo;

        return $this;
    }

    /**
     * Get strcodigo
     *
     * @return string 
     */
    public function getStrcodigo()
    {
        return $this->strcodigo;
    }
}
