<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sears
 *
 * @ORM\Table(name="Sears")
 * @ORM\Entity
 */
class Sears
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoProveedor", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strcodigoproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPedido", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strpedido;

    /**
     * @var string
     *
     * @ORM\Column(name="StrEmbarcar", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strembarcar;

    /**
     * @var string
     *
     * @ORM\Column(name="StrConsignar", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strconsignar;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLinea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numlinea = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtePedido", type="datetime", nullable=true)
     */
    private $dtepedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEntrega", type="datetime", nullable=true)
     */
    private $dteentrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCancelacion", type="datetime", nullable=true)
     */
    private $dtecancelacion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTipoEtiqueta", type="string", length=5, nullable=true)
     */
    private $strtipoetiqueta;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDivision", type="string", length=10, nullable=true)
     */
    private $strdivision;

    /**
     * @var string
     *
     * @ORM\Column(name="StrEdad", type="string", length=2, nullable=true)
     */
    private $stredad;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotal", type="integer", nullable=true)
     */
    private $numtotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalcantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreProveedor", type="string", length=100, nullable=true)
     */
    private $strnombreproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTipoMoneda", type="string", length=5, nullable=true)
     */
    private $strtipomoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSKU", type="string", length=20, nullable=true)
     */
    private $strsku;

    /**
     * @var string
     *
     * @ORM\Column(name="StrEAN", type="string", length=20, nullable=true)
     */
    private $strean;

    /**
     * @var string
     *
     * @ORM\Column(name="StrModeloProveedor", type="string", length=20, nullable=true)
     */
    private $strmodeloproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="StrClaveTalla", type="string", length=10, nullable=true)
     */
    private $strclavetalla;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTalla", type="string", length=30, nullable=true)
     */
    private $strtalla;

    /**
     * @var string
     *
     * @ORM\Column(name="StrClaveColor", type="string", length=10, nullable=true)
     */
    private $strclavecolor;

    /**
     * @var string
     *
     * @ORM\Column(name="StrColor", type="string", length=30, nullable=true)
     */
    private $strcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoUnitario", type="integer", nullable=true)
     */
    private $numcostounitario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioVenta", type="integer", nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogArticuloInexistente", type="boolean", nullable=true)
     */
    private $logarticuloinexistente = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogArticuloCostosCero", type="boolean", nullable=true)
     */
    private $logarticulocostoscero = '0';



    /**
     * Set strcodigoproveedor
     *
     * @param string $strcodigoproveedor
     * @return Sears
     */
    public function setStrcodigoproveedor($strcodigoproveedor)
    {
        $this->strcodigoproveedor = $strcodigoproveedor;

        return $this;
    }

    /**
     * Get strcodigoproveedor
     *
     * @return string 
     */
    public function getStrcodigoproveedor()
    {
        return $this->strcodigoproveedor;
    }

    /**
     * Set strpedido
     *
     * @param string $strpedido
     * @return Sears
     */
    public function setStrpedido($strpedido)
    {
        $this->strpedido = $strpedido;

        return $this;
    }

    /**
     * Get strpedido
     *
     * @return string 
     */
    public function getStrpedido()
    {
        return $this->strpedido;
    }

    /**
     * Set strembarcar
     *
     * @param string $strembarcar
     * @return Sears
     */
    public function setStrembarcar($strembarcar)
    {
        $this->strembarcar = $strembarcar;

        return $this;
    }

    /**
     * Get strembarcar
     *
     * @return string 
     */
    public function getStrembarcar()
    {
        return $this->strembarcar;
    }

    /**
     * Set strconsignar
     *
     * @param string $strconsignar
     * @return Sears
     */
    public function setStrconsignar($strconsignar)
    {
        $this->strconsignar = $strconsignar;

        return $this;
    }

    /**
     * Get strconsignar
     *
     * @return string 
     */
    public function getStrconsignar()
    {
        return $this->strconsignar;
    }

    /**
     * Set numlinea
     *
     * @param integer $numlinea
     * @return Sears
     */
    public function setNumlinea($numlinea)
    {
        $this->numlinea = $numlinea;

        return $this;
    }

    /**
     * Get numlinea
     *
     * @return integer 
     */
    public function getNumlinea()
    {
        return $this->numlinea;
    }

    /**
     * Set dtepedido
     *
     * @param \DateTime $dtepedido
     * @return Sears
     */
    public function setDtepedido($dtepedido)
    {
        $this->dtepedido = $dtepedido;

        return $this;
    }

    /**
     * Get dtepedido
     *
     * @return \DateTime 
     */
    public function getDtepedido()
    {
        return $this->dtepedido;
    }

    /**
     * Set dteentrega
     *
     * @param \DateTime $dteentrega
     * @return Sears
     */
    public function setDteentrega($dteentrega)
    {
        $this->dteentrega = $dteentrega;

        return $this;
    }

    /**
     * Get dteentrega
     *
     * @return \DateTime 
     */
    public function getDteentrega()
    {
        return $this->dteentrega;
    }

    /**
     * Set dtecancelacion
     *
     * @param \DateTime $dtecancelacion
     * @return Sears
     */
    public function setDtecancelacion($dtecancelacion)
    {
        $this->dtecancelacion = $dtecancelacion;

        return $this;
    }

    /**
     * Get dtecancelacion
     *
     * @return \DateTime 
     */
    public function getDtecancelacion()
    {
        return $this->dtecancelacion;
    }

    /**
     * Set strtipoetiqueta
     *
     * @param string $strtipoetiqueta
     * @return Sears
     */
    public function setStrtipoetiqueta($strtipoetiqueta)
    {
        $this->strtipoetiqueta = $strtipoetiqueta;

        return $this;
    }

    /**
     * Get strtipoetiqueta
     *
     * @return string 
     */
    public function getStrtipoetiqueta()
    {
        return $this->strtipoetiqueta;
    }

    /**
     * Set strdivision
     *
     * @param string $strdivision
     * @return Sears
     */
    public function setStrdivision($strdivision)
    {
        $this->strdivision = $strdivision;

        return $this;
    }

    /**
     * Get strdivision
     *
     * @return string 
     */
    public function getStrdivision()
    {
        return $this->strdivision;
    }

    /**
     * Set stredad
     *
     * @param string $stredad
     * @return Sears
     */
    public function setStredad($stredad)
    {
        $this->stredad = $stredad;

        return $this;
    }

    /**
     * Get stredad
     *
     * @return string 
     */
    public function getStredad()
    {
        return $this->stredad;
    }

    /**
     * Set numtotal
     *
     * @param integer $numtotal
     * @return Sears
     */
    public function setNumtotal($numtotal)
    {
        $this->numtotal = $numtotal;

        return $this;
    }

    /**
     * Get numtotal
     *
     * @return integer 
     */
    public function getNumtotal()
    {
        return $this->numtotal;
    }

    /**
     * Set numtotalcantidad
     *
     * @param float $numtotalcantidad
     * @return Sears
     */
    public function setNumtotalcantidad($numtotalcantidad)
    {
        $this->numtotalcantidad = $numtotalcantidad;

        return $this;
    }

    /**
     * Get numtotalcantidad
     *
     * @return float 
     */
    public function getNumtotalcantidad()
    {
        return $this->numtotalcantidad;
    }

    /**
     * Set strnombreproveedor
     *
     * @param string $strnombreproveedor
     * @return Sears
     */
    public function setStrnombreproveedor($strnombreproveedor)
    {
        $this->strnombreproveedor = $strnombreproveedor;

        return $this;
    }

    /**
     * Get strnombreproveedor
     *
     * @return string 
     */
    public function getStrnombreproveedor()
    {
        return $this->strnombreproveedor;
    }

    /**
     * Set strtipomoneda
     *
     * @param string $strtipomoneda
     * @return Sears
     */
    public function setStrtipomoneda($strtipomoneda)
    {
        $this->strtipomoneda = $strtipomoneda;

        return $this;
    }

    /**
     * Get strtipomoneda
     *
     * @return string 
     */
    public function getStrtipomoneda()
    {
        return $this->strtipomoneda;
    }

    /**
     * Set strsku
     *
     * @param string $strsku
     * @return Sears
     */
    public function setStrsku($strsku)
    {
        $this->strsku = $strsku;

        return $this;
    }

    /**
     * Get strsku
     *
     * @return string 
     */
    public function getStrsku()
    {
        return $this->strsku;
    }

    /**
     * Set strean
     *
     * @param string $strean
     * @return Sears
     */
    public function setStrean($strean)
    {
        $this->strean = $strean;

        return $this;
    }

    /**
     * Get strean
     *
     * @return string 
     */
    public function getStrean()
    {
        return $this->strean;
    }

    /**
     * Set strmodeloproveedor
     *
     * @param string $strmodeloproveedor
     * @return Sears
     */
    public function setStrmodeloproveedor($strmodeloproveedor)
    {
        $this->strmodeloproveedor = $strmodeloproveedor;

        return $this;
    }

    /**
     * Get strmodeloproveedor
     *
     * @return string 
     */
    public function getStrmodeloproveedor()
    {
        return $this->strmodeloproveedor;
    }

    /**
     * Set strclavetalla
     *
     * @param string $strclavetalla
     * @return Sears
     */
    public function setStrclavetalla($strclavetalla)
    {
        $this->strclavetalla = $strclavetalla;

        return $this;
    }

    /**
     * Get strclavetalla
     *
     * @return string 
     */
    public function getStrclavetalla()
    {
        return $this->strclavetalla;
    }

    /**
     * Set strtalla
     *
     * @param string $strtalla
     * @return Sears
     */
    public function setStrtalla($strtalla)
    {
        $this->strtalla = $strtalla;

        return $this;
    }

    /**
     * Get strtalla
     *
     * @return string 
     */
    public function getStrtalla()
    {
        return $this->strtalla;
    }

    /**
     * Set strclavecolor
     *
     * @param string $strclavecolor
     * @return Sears
     */
    public function setStrclavecolor($strclavecolor)
    {
        $this->strclavecolor = $strclavecolor;

        return $this;
    }

    /**
     * Get strclavecolor
     *
     * @return string 
     */
    public function getStrclavecolor()
    {
        return $this->strclavecolor;
    }

    /**
     * Set strcolor
     *
     * @param string $strcolor
     * @return Sears
     */
    public function setStrcolor($strcolor)
    {
        $this->strcolor = $strcolor;

        return $this;
    }

    /**
     * Get strcolor
     *
     * @return string 
     */
    public function getStrcolor()
    {
        return $this->strcolor;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Sears
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
     * Set numcostounitario
     *
     * @param integer $numcostounitario
     * @return Sears
     */
    public function setNumcostounitario($numcostounitario)
    {
        $this->numcostounitario = $numcostounitario;

        return $this;
    }

    /**
     * Get numcostounitario
     *
     * @return integer 
     */
    public function getNumcostounitario()
    {
        return $this->numcostounitario;
    }

    /**
     * Set numprecioventa
     *
     * @param integer $numprecioventa
     * @return Sears
     */
    public function setNumprecioventa($numprecioventa)
    {
        $this->numprecioventa = $numprecioventa;

        return $this;
    }

    /**
     * Get numprecioventa
     *
     * @return integer 
     */
    public function getNumprecioventa()
    {
        return $this->numprecioventa;
    }

    /**
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Sears
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
     * Set logarticuloinexistente
     *
     * @param boolean $logarticuloinexistente
     * @return Sears
     */
    public function setLogarticuloinexistente($logarticuloinexistente)
    {
        $this->logarticuloinexistente = $logarticuloinexistente;

        return $this;
    }

    /**
     * Get logarticuloinexistente
     *
     * @return boolean 
     */
    public function getLogarticuloinexistente()
    {
        return $this->logarticuloinexistente;
    }

    /**
     * Set logarticulocostoscero
     *
     * @param boolean $logarticulocostoscero
     * @return Sears
     */
    public function setLogarticulocostoscero($logarticulocostoscero)
    {
        $this->logarticulocostoscero = $logarticulocostoscero;

        return $this;
    }

    /**
     * Get logarticulocostoscero
     *
     * @return boolean 
     */
    public function getLogarticulocostoscero()
    {
        return $this->logarticulocostoscero;
    }
}
