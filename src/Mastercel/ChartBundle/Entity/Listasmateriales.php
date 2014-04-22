<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listasmateriales
 *
 * @ORM\Table(name="ListasMateriales", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"NumAlmacenProductoTerminado_id", "StrListaMaterial_ky"}), @ORM\Index(name="Indice_3", columns={"NumRutaOperacion_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Listasmateriales
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrListaMaterial_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strlistamaterialKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoLista", type="integer", nullable=true)
     */
    private $numtipolista = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedida_id", type="integer", nullable=true)
     */
    private $numunidadmedidaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorConversion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactorconversion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadProducir", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadproducir = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenProductoTerminado_id", type="integer", nullable=true)
     */
    private $numalmacenproductoterminadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRutaOperacion_id", type="integer", nullable=true)
     */
    private $numrutaoperacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDibujo_id", type="integer", nullable=true)
     */
    private $numdibujoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNumeroDibujo", type="string", length=20, nullable=true)
     */
    private $strnumerodibujo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasManufactura", type="integer", nullable=true)
     */
    private $numdiasmanufactura = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPartidas", type="integer", nullable=true)
     */
    private $numtotalpartidas = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoCompra", type="integer", nullable=true)
     */
    private $numtotalcostocompra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoEstandar", type="integer", nullable=true)
     */
    private $numtotalcostoestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoPromedio", type="integer", nullable=true)
     */
    private $numtotalcostopromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoUEPS", type="integer", nullable=true)
     */
    private $numtotalcostoueps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoPEPS", type="integer", nullable=true)
     */
    private $numtotalcostopeps = '0';

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
     * Get strlistamaterialKy
     *
     * @return string 
     */
    public function getStrlistamaterialKy()
    {
        return $this->strlistamaterialKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Listasmateriales
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
     * Set numtipolista
     *
     * @param integer $numtipolista
     * @return Listasmateriales
     */
    public function setNumtipolista($numtipolista)
    {
        $this->numtipolista = $numtipolista;

        return $this;
    }

    /**
     * Get numtipolista
     *
     * @return integer 
     */
    public function getNumtipolista()
    {
        return $this->numtipolista;
    }

    /**
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Listasmateriales
     */
    public function setNumunidadmedidaId($numunidadmedidaId)
    {
        $this->numunidadmedidaId = $numunidadmedidaId;

        return $this;
    }

    /**
     * Get numunidadmedidaId
     *
     * @return integer 
     */
    public function getNumunidadmedidaId()
    {
        return $this->numunidadmedidaId;
    }

    /**
     * Set numfactorconversion
     *
     * @param float $numfactorconversion
     * @return Listasmateriales
     */
    public function setNumfactorconversion($numfactorconversion)
    {
        $this->numfactorconversion = $numfactorconversion;

        return $this;
    }

    /**
     * Get numfactorconversion
     *
     * @return float 
     */
    public function getNumfactorconversion()
    {
        return $this->numfactorconversion;
    }

    /**
     * Set numcantidadproducir
     *
     * @param float $numcantidadproducir
     * @return Listasmateriales
     */
    public function setNumcantidadproducir($numcantidadproducir)
    {
        $this->numcantidadproducir = $numcantidadproducir;

        return $this;
    }

    /**
     * Get numcantidadproducir
     *
     * @return float 
     */
    public function getNumcantidadproducir()
    {
        return $this->numcantidadproducir;
    }

    /**
     * Set numalmacenproductoterminadoId
     *
     * @param integer $numalmacenproductoterminadoId
     * @return Listasmateriales
     */
    public function setNumalmacenproductoterminadoId($numalmacenproductoterminadoId)
    {
        $this->numalmacenproductoterminadoId = $numalmacenproductoterminadoId;

        return $this;
    }

    /**
     * Get numalmacenproductoterminadoId
     *
     * @return integer 
     */
    public function getNumalmacenproductoterminadoId()
    {
        return $this->numalmacenproductoterminadoId;
    }

    /**
     * Set numrutaoperacionId
     *
     * @param integer $numrutaoperacionId
     * @return Listasmateriales
     */
    public function setNumrutaoperacionId($numrutaoperacionId)
    {
        $this->numrutaoperacionId = $numrutaoperacionId;

        return $this;
    }

    /**
     * Get numrutaoperacionId
     *
     * @return integer 
     */
    public function getNumrutaoperacionId()
    {
        return $this->numrutaoperacionId;
    }

    /**
     * Set numdibujoId
     *
     * @param integer $numdibujoId
     * @return Listasmateriales
     */
    public function setNumdibujoId($numdibujoId)
    {
        $this->numdibujoId = $numdibujoId;

        return $this;
    }

    /**
     * Get numdibujoId
     *
     * @return integer 
     */
    public function getNumdibujoId()
    {
        return $this->numdibujoId;
    }

    /**
     * Set strnumerodibujo
     *
     * @param string $strnumerodibujo
     * @return Listasmateriales
     */
    public function setStrnumerodibujo($strnumerodibujo)
    {
        $this->strnumerodibujo = $strnumerodibujo;

        return $this;
    }

    /**
     * Get strnumerodibujo
     *
     * @return string 
     */
    public function getStrnumerodibujo()
    {
        return $this->strnumerodibujo;
    }

    /**
     * Set numdiasmanufactura
     *
     * @param integer $numdiasmanufactura
     * @return Listasmateriales
     */
    public function setNumdiasmanufactura($numdiasmanufactura)
    {
        $this->numdiasmanufactura = $numdiasmanufactura;

        return $this;
    }

    /**
     * Get numdiasmanufactura
     *
     * @return integer 
     */
    public function getNumdiasmanufactura()
    {
        return $this->numdiasmanufactura;
    }

    /**
     * Set numtotalpartidas
     *
     * @param integer $numtotalpartidas
     * @return Listasmateriales
     */
    public function setNumtotalpartidas($numtotalpartidas)
    {
        $this->numtotalpartidas = $numtotalpartidas;

        return $this;
    }

    /**
     * Get numtotalpartidas
     *
     * @return integer 
     */
    public function getNumtotalpartidas()
    {
        return $this->numtotalpartidas;
    }

    /**
     * Set numtotalcostocompra
     *
     * @param integer $numtotalcostocompra
     * @return Listasmateriales
     */
    public function setNumtotalcostocompra($numtotalcostocompra)
    {
        $this->numtotalcostocompra = $numtotalcostocompra;

        return $this;
    }

    /**
     * Get numtotalcostocompra
     *
     * @return integer 
     */
    public function getNumtotalcostocompra()
    {
        return $this->numtotalcostocompra;
    }

    /**
     * Set numtotalcostoestandar
     *
     * @param integer $numtotalcostoestandar
     * @return Listasmateriales
     */
    public function setNumtotalcostoestandar($numtotalcostoestandar)
    {
        $this->numtotalcostoestandar = $numtotalcostoestandar;

        return $this;
    }

    /**
     * Get numtotalcostoestandar
     *
     * @return integer 
     */
    public function getNumtotalcostoestandar()
    {
        return $this->numtotalcostoestandar;
    }

    /**
     * Set numtotalcostopromedio
     *
     * @param integer $numtotalcostopromedio
     * @return Listasmateriales
     */
    public function setNumtotalcostopromedio($numtotalcostopromedio)
    {
        $this->numtotalcostopromedio = $numtotalcostopromedio;

        return $this;
    }

    /**
     * Get numtotalcostopromedio
     *
     * @return integer 
     */
    public function getNumtotalcostopromedio()
    {
        return $this->numtotalcostopromedio;
    }

    /**
     * Set numtotalcostoueps
     *
     * @param integer $numtotalcostoueps
     * @return Listasmateriales
     */
    public function setNumtotalcostoueps($numtotalcostoueps)
    {
        $this->numtotalcostoueps = $numtotalcostoueps;

        return $this;
    }

    /**
     * Get numtotalcostoueps
     *
     * @return integer 
     */
    public function getNumtotalcostoueps()
    {
        return $this->numtotalcostoueps;
    }

    /**
     * Set numtotalcostopeps
     *
     * @param integer $numtotalcostopeps
     * @return Listasmateriales
     */
    public function setNumtotalcostopeps($numtotalcostopeps)
    {
        $this->numtotalcostopeps = $numtotalcostopeps;

        return $this;
    }

    /**
     * Get numtotalcostopeps
     *
     * @return integer 
     */
    public function getNumtotalcostopeps()
    {
        return $this->numtotalcostopeps;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Listasmateriales
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
     * @return Listasmateriales
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
     * @return Listasmateriales
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
     * @return Listasmateriales
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
     * @return Listasmateriales
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
