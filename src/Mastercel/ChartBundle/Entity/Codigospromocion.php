<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codigospromocion
 *
 * @ORM\Table(name="CodigosPromocion", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Codigospromocion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoPromocion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcodigopromocionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAplicacion", type="integer", nullable=true)
     */
    private $numtipoaplicacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoRegistro", type="integer", nullable=true)
     */
    private $numtiporegistro = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadMinima", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadminima = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPromocionExclusiva", type="boolean", nullable=true)
     */
    private $logpromocionexclusiva = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogVerificarDescuentoMaximo", type="boolean", nullable=true)
     */
    private $logverificardescuentomaximo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAplicarRedondeo", type="boolean", nullable=true)
     */
    private $logaplicarredondeo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogImprimir", type="boolean", nullable=true)
     */
    private $logimprimir = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogSolicitarReferencia", type="boolean", nullable=true)
     */
    private $logsolicitarreferencia = '0';

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
     * Get numcodigopromocionId
     *
     * @return integer 
     */
    public function getNumcodigopromocionId()
    {
        return $this->numcodigopromocionId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Codigospromocion
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
     * Set numtipoaplicacion
     *
     * @param integer $numtipoaplicacion
     * @return Codigospromocion
     */
    public function setNumtipoaplicacion($numtipoaplicacion)
    {
        $this->numtipoaplicacion = $numtipoaplicacion;

        return $this;
    }

    /**
     * Get numtipoaplicacion
     *
     * @return integer 
     */
    public function getNumtipoaplicacion()
    {
        return $this->numtipoaplicacion;
    }

    /**
     * Set numtiporegistro
     *
     * @param integer $numtiporegistro
     * @return Codigospromocion
     */
    public function setNumtiporegistro($numtiporegistro)
    {
        $this->numtiporegistro = $numtiporegistro;

        return $this;
    }

    /**
     * Get numtiporegistro
     *
     * @return integer 
     */
    public function getNumtiporegistro()
    {
        return $this->numtiporegistro;
    }

    /**
     * Set numcantidadminima
     *
     * @param float $numcantidadminima
     * @return Codigospromocion
     */
    public function setNumcantidadminima($numcantidadminima)
    {
        $this->numcantidadminima = $numcantidadminima;

        return $this;
    }

    /**
     * Get numcantidadminima
     *
     * @return float 
     */
    public function getNumcantidadminima()
    {
        return $this->numcantidadminima;
    }

    /**
     * Set logpromocionexclusiva
     *
     * @param boolean $logpromocionexclusiva
     * @return Codigospromocion
     */
    public function setLogpromocionexclusiva($logpromocionexclusiva)
    {
        $this->logpromocionexclusiva = $logpromocionexclusiva;

        return $this;
    }

    /**
     * Get logpromocionexclusiva
     *
     * @return boolean 
     */
    public function getLogpromocionexclusiva()
    {
        return $this->logpromocionexclusiva;
    }

    /**
     * Set logverificardescuentomaximo
     *
     * @param boolean $logverificardescuentomaximo
     * @return Codigospromocion
     */
    public function setLogverificardescuentomaximo($logverificardescuentomaximo)
    {
        $this->logverificardescuentomaximo = $logverificardescuentomaximo;

        return $this;
    }

    /**
     * Get logverificardescuentomaximo
     *
     * @return boolean 
     */
    public function getLogverificardescuentomaximo()
    {
        return $this->logverificardescuentomaximo;
    }

    /**
     * Set logaplicarredondeo
     *
     * @param boolean $logaplicarredondeo
     * @return Codigospromocion
     */
    public function setLogaplicarredondeo($logaplicarredondeo)
    {
        $this->logaplicarredondeo = $logaplicarredondeo;

        return $this;
    }

    /**
     * Get logaplicarredondeo
     *
     * @return boolean 
     */
    public function getLogaplicarredondeo()
    {
        return $this->logaplicarredondeo;
    }

    /**
     * Set logimprimir
     *
     * @param boolean $logimprimir
     * @return Codigospromocion
     */
    public function setLogimprimir($logimprimir)
    {
        $this->logimprimir = $logimprimir;

        return $this;
    }

    /**
     * Get logimprimir
     *
     * @return boolean 
     */
    public function getLogimprimir()
    {
        return $this->logimprimir;
    }

    /**
     * Set logsolicitarreferencia
     *
     * @param boolean $logsolicitarreferencia
     * @return Codigospromocion
     */
    public function setLogsolicitarreferencia($logsolicitarreferencia)
    {
        $this->logsolicitarreferencia = $logsolicitarreferencia;

        return $this;
    }

    /**
     * Get logsolicitarreferencia
     *
     * @return boolean 
     */
    public function getLogsolicitarreferencia()
    {
        return $this->logsolicitarreferencia;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Codigospromocion
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
     * @return Codigospromocion
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
     * @return Codigospromocion
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
     * @return Codigospromocion
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
     * @return Codigospromocion
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
