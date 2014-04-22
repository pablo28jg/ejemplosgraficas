<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulosasociados
 *
 * @ORM\Table(name="ArticulosAsociados", indexes={@ORM\Index(name="Indice_1", columns={"StrAsociado_ky", "StrArticulo_ky"}), @ORM\Index(name="Indice_2", columns={"StrArticulo_ky", "StrAsociado_ky"}), @ORM\Index(name="Indice_3", columns={"NumProveedor_id", "StrAsociado_ky"}), @ORM\Index(name="Indice_4", columns={"NumProveedor_id", "StrArticulo_ky"}), @ORM\Index(name="Indice_5", columns={"NumCodigoBarra_id", "StrAsociado_ky"}), @ORM\Index(name="Indice_6", columns={"NumCodigoBarra_id", "StrArticulo_ky"}), @ORM\Index(name="Indice_7", columns={"NumCodigoBarra_id", "StrModelo_ky"}), @ORM\Index(name="Indice_8", columns={"StrModelo_ky"})})
 * @ORM\Entity
 */
class Articulosasociados
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrAsociado_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strasociadoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoBarra_id", type="integer", nullable=true)
     */
    private $numcodigobarraId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCodigoBarra", type="integer", nullable=true)
     */
    private $numtipocodigobarra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrModelo_ky", type="string", length=20, nullable=true)
     */
    private $strmodeloKy;

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
     * @ORM\Column(name="NumCantidadMinimaCompra", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadminimacompra = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogMultiplosEnCantidad", type="boolean", nullable=true)
     */
    private $logmultiplosencantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMonedaCompra_id", type="integer", nullable=true)
     */
    private $nummonedacompraId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioCompra", type="integer", nullable=true)
     */
    private $numpreciocompra = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjDescuento", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjdescuento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasEntrega", type="integer", nullable=true)
     */
    private $numdiasentrega = '0';



    /**
     * Get strasociadoKy
     *
     * @return string 
     */
    public function getStrasociadoKy()
    {
        return $this->strasociadoKy;
    }

    /**
     * Set numcodigobarraId
     *
     * @param integer $numcodigobarraId
     * @return Articulosasociados
     */
    public function setNumcodigobarraId($numcodigobarraId)
    {
        $this->numcodigobarraId = $numcodigobarraId;

        return $this;
    }

    /**
     * Get numcodigobarraId
     *
     * @return integer 
     */
    public function getNumcodigobarraId()
    {
        return $this->numcodigobarraId;
    }

    /**
     * Set numtipocodigobarra
     *
     * @param integer $numtipocodigobarra
     * @return Articulosasociados
     */
    public function setNumtipocodigobarra($numtipocodigobarra)
    {
        $this->numtipocodigobarra = $numtipocodigobarra;

        return $this;
    }

    /**
     * Get numtipocodigobarra
     *
     * @return integer 
     */
    public function getNumtipocodigobarra()
    {
        return $this->numtipocodigobarra;
    }

    /**
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Articulosasociados
     */
    public function setNumproveedorId($numproveedorId)
    {
        $this->numproveedorId = $numproveedorId;

        return $this;
    }

    /**
     * Get numproveedorId
     *
     * @return integer 
     */
    public function getNumproveedorId()
    {
        return $this->numproveedorId;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Articulosasociados
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
     * Set strmodeloKy
     *
     * @param string $strmodeloKy
     * @return Articulosasociados
     */
    public function setStrmodeloKy($strmodeloKy)
    {
        $this->strmodeloKy = $strmodeloKy;

        return $this;
    }

    /**
     * Get strmodeloKy
     *
     * @return string 
     */
    public function getStrmodeloKy()
    {
        return $this->strmodeloKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Articulosasociados
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
     * @return Articulosasociados
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
     * Set numcantidadminimacompra
     *
     * @param float $numcantidadminimacompra
     * @return Articulosasociados
     */
    public function setNumcantidadminimacompra($numcantidadminimacompra)
    {
        $this->numcantidadminimacompra = $numcantidadminimacompra;

        return $this;
    }

    /**
     * Get numcantidadminimacompra
     *
     * @return float 
     */
    public function getNumcantidadminimacompra()
    {
        return $this->numcantidadminimacompra;
    }

    /**
     * Set logmultiplosencantidad
     *
     * @param boolean $logmultiplosencantidad
     * @return Articulosasociados
     */
    public function setLogmultiplosencantidad($logmultiplosencantidad)
    {
        $this->logmultiplosencantidad = $logmultiplosencantidad;

        return $this;
    }

    /**
     * Get logmultiplosencantidad
     *
     * @return boolean 
     */
    public function getLogmultiplosencantidad()
    {
        return $this->logmultiplosencantidad;
    }

    /**
     * Set nummonedacompraId
     *
     * @param integer $nummonedacompraId
     * @return Articulosasociados
     */
    public function setNummonedacompraId($nummonedacompraId)
    {
        $this->nummonedacompraId = $nummonedacompraId;

        return $this;
    }

    /**
     * Get nummonedacompraId
     *
     * @return integer 
     */
    public function getNummonedacompraId()
    {
        return $this->nummonedacompraId;
    }

    /**
     * Set numpreciocompra
     *
     * @param integer $numpreciocompra
     * @return Articulosasociados
     */
    public function setNumpreciocompra($numpreciocompra)
    {
        $this->numpreciocompra = $numpreciocompra;

        return $this;
    }

    /**
     * Get numpreciocompra
     *
     * @return integer 
     */
    public function getNumpreciocompra()
    {
        return $this->numpreciocompra;
    }

    /**
     * Set numprctjdescuento
     *
     * @param float $numprctjdescuento
     * @return Articulosasociados
     */
    public function setNumprctjdescuento($numprctjdescuento)
    {
        $this->numprctjdescuento = $numprctjdescuento;

        return $this;
    }

    /**
     * Get numprctjdescuento
     *
     * @return float 
     */
    public function getNumprctjdescuento()
    {
        return $this->numprctjdescuento;
    }

    /**
     * Set numdiasentrega
     *
     * @param integer $numdiasentrega
     * @return Articulosasociados
     */
    public function setNumdiasentrega($numdiasentrega)
    {
        $this->numdiasentrega = $numdiasentrega;

        return $this;
    }

    /**
     * Get numdiasentrega
     *
     * @return integer 
     */
    public function getNumdiasentrega()
    {
        return $this->numdiasentrega;
    }
}
