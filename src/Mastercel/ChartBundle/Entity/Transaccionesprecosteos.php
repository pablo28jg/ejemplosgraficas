<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionesprecosteos
 *
 * @ORM\Table(name="TransaccionesPrecosteos", indexes={@ORM\Index(name="Indice_1", columns={"StrArticulo_ky"}), @ORM\Index(name="Indice_2", columns={"DteCreacion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"})})
 * @ORM\Entity
 */
class Transaccionesprecosteos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

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
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactortipocambio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioCompra", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numpreciocompra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioCompraNeto", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numpreciocompraneto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCostoCompra", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcostocompra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCostoPromedio", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcostopromedio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioVenta", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioVentaNeto", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numprecioventaneto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioVentaMonedaNacional", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numprecioventamonedanacional = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeDescuento", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajedescuento = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImportacion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimportacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeFlete", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeflete = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeGastos", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajegastos = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeDTA", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajedta = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeMargenUtilidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajemargenutilidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeDescuentoArticulo", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajedescuentoarticulo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeMargenVenta", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajemargenventa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteDescuento", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportedescuento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImportacion", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimportacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteFlete", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteflete = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteGastos", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportegastos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteDTA", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportedta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteDescuentoArticulo", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportedescuentoarticulo = '0';

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
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transaccionesprecosteos
     */
    public function setNumtransaccionId($numtransaccionId)
    {
        $this->numtransaccionId = $numtransaccionId;

        return $this;
    }

    /**
     * Get numtransaccionId
     *
     * @return integer 
     */
    public function getNumtransaccionId()
    {
        return $this->numtransaccionId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Transaccionesprecosteos
     */
    public function setNumalmacenId($numalmacenId)
    {
        $this->numalmacenId = $numalmacenId;

        return $this;
    }

    /**
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set numtipotransaccion
     *
     * @param integer $numtipotransaccion
     * @return Transaccionesprecosteos
     */
    public function setNumtipotransaccion($numtipotransaccion)
    {
        $this->numtipotransaccion = $numtipotransaccion;

        return $this;
    }

    /**
     * Get numtipotransaccion
     *
     * @return integer 
     */
    public function getNumtipotransaccion()
    {
        return $this->numtipotransaccion;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Transaccionesprecosteos
     */
    public function setStrarticuloKy($strarticuloKy)
    {
        $this->strarticuloKy = $strarticuloKy;

        return $this;
    }

    /**
     * Get strarticuloKy
     *
     * @return string 
     */
    public function getStrarticuloKy()
    {
        return $this->strarticuloKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Transaccionesprecosteos
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
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Transaccionesprecosteos
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
     * @return Transaccionesprecosteos
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
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Transaccionesprecosteos
     */
    public function setNumcantidad($numcantidad)
    {
        $this->numcantidad = $numcantidad;

        return $this;
    }

    /**
     * Get numcantidad
     *
     * @return float 
     */
    public function getNumcantidad()
    {
        return $this->numcantidad;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Transaccionesprecosteos
     */
    public function setNummonedaId($nummonedaId)
    {
        $this->nummonedaId = $nummonedaId;

        return $this;
    }

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
     * Set numtipocambio
     *
     * @param float $numtipocambio
     * @return Transaccionesprecosteos
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
     * Set numfactortipocambio
     *
     * @param float $numfactortipocambio
     * @return Transaccionesprecosteos
     */
    public function setNumfactortipocambio($numfactortipocambio)
    {
        $this->numfactortipocambio = $numfactortipocambio;

        return $this;
    }

    /**
     * Get numfactortipocambio
     *
     * @return float 
     */
    public function getNumfactortipocambio()
    {
        return $this->numfactortipocambio;
    }

    /**
     * Set numpreciocompra
     *
     * @param string $numpreciocompra
     * @return Transaccionesprecosteos
     */
    public function setNumpreciocompra($numpreciocompra)
    {
        $this->numpreciocompra = $numpreciocompra;

        return $this;
    }

    /**
     * Get numpreciocompra
     *
     * @return string 
     */
    public function getNumpreciocompra()
    {
        return $this->numpreciocompra;
    }

    /**
     * Set numpreciocompraneto
     *
     * @param string $numpreciocompraneto
     * @return Transaccionesprecosteos
     */
    public function setNumpreciocompraneto($numpreciocompraneto)
    {
        $this->numpreciocompraneto = $numpreciocompraneto;

        return $this;
    }

    /**
     * Get numpreciocompraneto
     *
     * @return string 
     */
    public function getNumpreciocompraneto()
    {
        return $this->numpreciocompraneto;
    }

    /**
     * Set numcostocompra
     *
     * @param string $numcostocompra
     * @return Transaccionesprecosteos
     */
    public function setNumcostocompra($numcostocompra)
    {
        $this->numcostocompra = $numcostocompra;

        return $this;
    }

    /**
     * Get numcostocompra
     *
     * @return string 
     */
    public function getNumcostocompra()
    {
        return $this->numcostocompra;
    }

    /**
     * Set numcostopromedio
     *
     * @param string $numcostopromedio
     * @return Transaccionesprecosteos
     */
    public function setNumcostopromedio($numcostopromedio)
    {
        $this->numcostopromedio = $numcostopromedio;

        return $this;
    }

    /**
     * Get numcostopromedio
     *
     * @return string 
     */
    public function getNumcostopromedio()
    {
        return $this->numcostopromedio;
    }

    /**
     * Set numprecioventa
     *
     * @param string $numprecioventa
     * @return Transaccionesprecosteos
     */
    public function setNumprecioventa($numprecioventa)
    {
        $this->numprecioventa = $numprecioventa;

        return $this;
    }

    /**
     * Get numprecioventa
     *
     * @return string 
     */
    public function getNumprecioventa()
    {
        return $this->numprecioventa;
    }

    /**
     * Set numprecioventaneto
     *
     * @param string $numprecioventaneto
     * @return Transaccionesprecosteos
     */
    public function setNumprecioventaneto($numprecioventaneto)
    {
        $this->numprecioventaneto = $numprecioventaneto;

        return $this;
    }

    /**
     * Get numprecioventaneto
     *
     * @return string 
     */
    public function getNumprecioventaneto()
    {
        return $this->numprecioventaneto;
    }

    /**
     * Set numprecioventamonedanacional
     *
     * @param string $numprecioventamonedanacional
     * @return Transaccionesprecosteos
     */
    public function setNumprecioventamonedanacional($numprecioventamonedanacional)
    {
        $this->numprecioventamonedanacional = $numprecioventamonedanacional;

        return $this;
    }

    /**
     * Get numprecioventamonedanacional
     *
     * @return string 
     */
    public function getNumprecioventamonedanacional()
    {
        return $this->numprecioventamonedanacional;
    }

    /**
     * Set numporcentajedescuento
     *
     * @param float $numporcentajedescuento
     * @return Transaccionesprecosteos
     */
    public function setNumporcentajedescuento($numporcentajedescuento)
    {
        $this->numporcentajedescuento = $numporcentajedescuento;

        return $this;
    }

    /**
     * Get numporcentajedescuento
     *
     * @return float 
     */
    public function getNumporcentajedescuento()
    {
        return $this->numporcentajedescuento;
    }

    /**
     * Set numporcentajeimportacion
     *
     * @param float $numporcentajeimportacion
     * @return Transaccionesprecosteos
     */
    public function setNumporcentajeimportacion($numporcentajeimportacion)
    {
        $this->numporcentajeimportacion = $numporcentajeimportacion;

        return $this;
    }

    /**
     * Get numporcentajeimportacion
     *
     * @return float 
     */
    public function getNumporcentajeimportacion()
    {
        return $this->numporcentajeimportacion;
    }

    /**
     * Set numporcentajeflete
     *
     * @param float $numporcentajeflete
     * @return Transaccionesprecosteos
     */
    public function setNumporcentajeflete($numporcentajeflete)
    {
        $this->numporcentajeflete = $numporcentajeflete;

        return $this;
    }

    /**
     * Get numporcentajeflete
     *
     * @return float 
     */
    public function getNumporcentajeflete()
    {
        return $this->numporcentajeflete;
    }

    /**
     * Set numporcentajegastos
     *
     * @param float $numporcentajegastos
     * @return Transaccionesprecosteos
     */
    public function setNumporcentajegastos($numporcentajegastos)
    {
        $this->numporcentajegastos = $numporcentajegastos;

        return $this;
    }

    /**
     * Get numporcentajegastos
     *
     * @return float 
     */
    public function getNumporcentajegastos()
    {
        return $this->numporcentajegastos;
    }

    /**
     * Set numporcentajedta
     *
     * @param float $numporcentajedta
     * @return Transaccionesprecosteos
     */
    public function setNumporcentajedta($numporcentajedta)
    {
        $this->numporcentajedta = $numporcentajedta;

        return $this;
    }

    /**
     * Get numporcentajedta
     *
     * @return float 
     */
    public function getNumporcentajedta()
    {
        return $this->numporcentajedta;
    }

    /**
     * Set numporcentajemargenutilidad
     *
     * @param float $numporcentajemargenutilidad
     * @return Transaccionesprecosteos
     */
    public function setNumporcentajemargenutilidad($numporcentajemargenutilidad)
    {
        $this->numporcentajemargenutilidad = $numporcentajemargenutilidad;

        return $this;
    }

    /**
     * Get numporcentajemargenutilidad
     *
     * @return float 
     */
    public function getNumporcentajemargenutilidad()
    {
        return $this->numporcentajemargenutilidad;
    }

    /**
     * Set numporcentajedescuentoarticulo
     *
     * @param float $numporcentajedescuentoarticulo
     * @return Transaccionesprecosteos
     */
    public function setNumporcentajedescuentoarticulo($numporcentajedescuentoarticulo)
    {
        $this->numporcentajedescuentoarticulo = $numporcentajedescuentoarticulo;

        return $this;
    }

    /**
     * Get numporcentajedescuentoarticulo
     *
     * @return float 
     */
    public function getNumporcentajedescuentoarticulo()
    {
        return $this->numporcentajedescuentoarticulo;
    }

    /**
     * Set numporcentajemargenventa
     *
     * @param float $numporcentajemargenventa
     * @return Transaccionesprecosteos
     */
    public function setNumporcentajemargenventa($numporcentajemargenventa)
    {
        $this->numporcentajemargenventa = $numporcentajemargenventa;

        return $this;
    }

    /**
     * Get numporcentajemargenventa
     *
     * @return float 
     */
    public function getNumporcentajemargenventa()
    {
        return $this->numporcentajemargenventa;
    }

    /**
     * Set numimportedescuento
     *
     * @param string $numimportedescuento
     * @return Transaccionesprecosteos
     */
    public function setNumimportedescuento($numimportedescuento)
    {
        $this->numimportedescuento = $numimportedescuento;

        return $this;
    }

    /**
     * Get numimportedescuento
     *
     * @return string 
     */
    public function getNumimportedescuento()
    {
        return $this->numimportedescuento;
    }

    /**
     * Set numimporteimportacion
     *
     * @param string $numimporteimportacion
     * @return Transaccionesprecosteos
     */
    public function setNumimporteimportacion($numimporteimportacion)
    {
        $this->numimporteimportacion = $numimporteimportacion;

        return $this;
    }

    /**
     * Get numimporteimportacion
     *
     * @return string 
     */
    public function getNumimporteimportacion()
    {
        return $this->numimporteimportacion;
    }

    /**
     * Set numimporteflete
     *
     * @param string $numimporteflete
     * @return Transaccionesprecosteos
     */
    public function setNumimporteflete($numimporteflete)
    {
        $this->numimporteflete = $numimporteflete;

        return $this;
    }

    /**
     * Get numimporteflete
     *
     * @return string 
     */
    public function getNumimporteflete()
    {
        return $this->numimporteflete;
    }

    /**
     * Set numimportegastos
     *
     * @param string $numimportegastos
     * @return Transaccionesprecosteos
     */
    public function setNumimportegastos($numimportegastos)
    {
        $this->numimportegastos = $numimportegastos;

        return $this;
    }

    /**
     * Get numimportegastos
     *
     * @return string 
     */
    public function getNumimportegastos()
    {
        return $this->numimportegastos;
    }

    /**
     * Set numimportedta
     *
     * @param string $numimportedta
     * @return Transaccionesprecosteos
     */
    public function setNumimportedta($numimportedta)
    {
        $this->numimportedta = $numimportedta;

        return $this;
    }

    /**
     * Get numimportedta
     *
     * @return string 
     */
    public function getNumimportedta()
    {
        return $this->numimportedta;
    }

    /**
     * Set numimportedescuentoarticulo
     *
     * @param string $numimportedescuentoarticulo
     * @return Transaccionesprecosteos
     */
    public function setNumimportedescuentoarticulo($numimportedescuentoarticulo)
    {
        $this->numimportedescuentoarticulo = $numimportedescuentoarticulo;

        return $this;
    }

    /**
     * Get numimportedescuentoarticulo
     *
     * @return string 
     */
    public function getNumimportedescuentoarticulo()
    {
        return $this->numimportedescuentoarticulo;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Transaccionesprecosteos
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
     * @return Transaccionesprecosteos
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
     * @return Transaccionesprecosteos
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
     * @return Transaccionesprecosteos
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
     * @return Transaccionesprecosteos
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
