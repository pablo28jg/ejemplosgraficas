<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulosempresas
 *
 * @ORM\Table(name="ArticulosEmpresas", indexes={@ORM\Index(name="Indice_1", columns={"NumEmpresa_id", "StrArticulo_ky"}), @ORM\Index(name="Indice_2", columns={"NumProveedor_id"}), @ORM\Index(name="Indice_3", columns={"StrModelo_ky", "NumEmpresa_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_6", columns={"NumEmpresa_id", "StrModelo_ky"})})
 * @ORM\Entity
 */
class Articulosempresas
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strarticuloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numempresaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrModelo_ky", type="string", length=20, nullable=true)
     */
    private $strmodeloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMonedaCompra_id", type="integer", nullable=true)
     */
    private $nummonedacompraId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedidaCompra_id", type="integer", nullable=true)
     */
    private $numunidadmedidacompraId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoMercancia", type="integer", nullable=true)
     */
    private $numtipomercancia = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogEmpresaCalculoPrecio", type="boolean", nullable=true)
     */
    private $logempresacalculoprecio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioCompra", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numpreciocompra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCostoCompra", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcostocompra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandar", type="integer", nullable=true)
     */
    private $numcostoestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoPromedio", type="integer", nullable=true)
     */
    private $numcostopromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoPEPS", type="integer", nullable=true)
     */
    private $numcostopeps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoUEPS", type="integer", nullable=true)
     */
    private $numcostoueps = '0';

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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Articulosempresas
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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Articulosempresas
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
     * Set strmodeloKy
     *
     * @param string $strmodeloKy
     * @return Articulosempresas
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
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Articulosempresas
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
     * Set nummonedacompraId
     *
     * @param integer $nummonedacompraId
     * @return Articulosempresas
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
     * Set numunidadmedidacompraId
     *
     * @param integer $numunidadmedidacompraId
     * @return Articulosempresas
     */
    public function setNumunidadmedidacompraId($numunidadmedidacompraId)
    {
        $this->numunidadmedidacompraId = $numunidadmedidacompraId;

        return $this;
    }

    /**
     * Get numunidadmedidacompraId
     *
     * @return integer 
     */
    public function getNumunidadmedidacompraId()
    {
        return $this->numunidadmedidacompraId;
    }

    /**
     * Set numtipomercancia
     *
     * @param integer $numtipomercancia
     * @return Articulosempresas
     */
    public function setNumtipomercancia($numtipomercancia)
    {
        $this->numtipomercancia = $numtipomercancia;

        return $this;
    }

    /**
     * Get numtipomercancia
     *
     * @return integer 
     */
    public function getNumtipomercancia()
    {
        return $this->numtipomercancia;
    }

    /**
     * Set logempresacalculoprecio
     *
     * @param boolean $logempresacalculoprecio
     * @return Articulosempresas
     */
    public function setLogempresacalculoprecio($logempresacalculoprecio)
    {
        $this->logempresacalculoprecio = $logempresacalculoprecio;

        return $this;
    }

    /**
     * Get logempresacalculoprecio
     *
     * @return boolean 
     */
    public function getLogempresacalculoprecio()
    {
        return $this->logempresacalculoprecio;
    }

    /**
     * Set numpreciocompra
     *
     * @param string $numpreciocompra
     * @return Articulosempresas
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
     * Set numcostocompra
     *
     * @param string $numcostocompra
     * @return Articulosempresas
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
     * Set numcostoestandar
     *
     * @param integer $numcostoestandar
     * @return Articulosempresas
     */
    public function setNumcostoestandar($numcostoestandar)
    {
        $this->numcostoestandar = $numcostoestandar;

        return $this;
    }

    /**
     * Get numcostoestandar
     *
     * @return integer 
     */
    public function getNumcostoestandar()
    {
        return $this->numcostoestandar;
    }

    /**
     * Set numcostopromedio
     *
     * @param integer $numcostopromedio
     * @return Articulosempresas
     */
    public function setNumcostopromedio($numcostopromedio)
    {
        $this->numcostopromedio = $numcostopromedio;

        return $this;
    }

    /**
     * Get numcostopromedio
     *
     * @return integer 
     */
    public function getNumcostopromedio()
    {
        return $this->numcostopromedio;
    }

    /**
     * Set numcostopeps
     *
     * @param integer $numcostopeps
     * @return Articulosempresas
     */
    public function setNumcostopeps($numcostopeps)
    {
        $this->numcostopeps = $numcostopeps;

        return $this;
    }

    /**
     * Get numcostopeps
     *
     * @return integer 
     */
    public function getNumcostopeps()
    {
        return $this->numcostopeps;
    }

    /**
     * Set numcostoueps
     *
     * @param integer $numcostoueps
     * @return Articulosempresas
     */
    public function setNumcostoueps($numcostoueps)
    {
        $this->numcostoueps = $numcostoueps;

        return $this;
    }

    /**
     * Get numcostoueps
     *
     * @return integer 
     */
    public function getNumcostoueps()
    {
        return $this->numcostoueps;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Articulosempresas
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
     * @return Articulosempresas
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
