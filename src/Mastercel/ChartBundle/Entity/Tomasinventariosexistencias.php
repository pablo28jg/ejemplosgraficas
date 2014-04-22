<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tomasinventariosexistencias
 *
 * @ORM\Table(name="TomasInventariosExistencias", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id", "StrArticulo_ky", "StrPedimento_ky", "StrLote_ky", "StrSerie_ky"})})
 * @ORM\Entity
 */
class Tomasinventariosexistencias
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInventario", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dteinventario;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

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
     * @ORM\Column(name="StrPedimento_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strpedimentoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrLote_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strloteKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strserieKy;

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
     * @ORM\Column(name="NumCantidadRegistro", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadregistro = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadInventario", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadinventario = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumPrecioVenta", type="integer", nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoCompra", type="integer", nullable=true)
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
     * @var float
     *
     * @ORM\Column(name="NumPeso", type="float", precision=53, scale=0, nullable=true)
     */
    private $numpeso = '0';



    /**
     * Set dteinventario
     *
     * @param \DateTime $dteinventario
     * @return Tomasinventariosexistencias
     */
    public function setDteinventario($dteinventario)
    {
        $this->dteinventario = $dteinventario;

        return $this;
    }

    /**
     * Get dteinventario
     *
     * @return \DateTime 
     */
    public function getDteinventario()
    {
        return $this->dteinventario;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Tomasinventariosexistencias
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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Tomasinventariosexistencias
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
     * Set strpedimentoKy
     *
     * @param string $strpedimentoKy
     * @return Tomasinventariosexistencias
     */
    public function setStrpedimentoKy($strpedimentoKy)
    {
        $this->strpedimentoKy = $strpedimentoKy;

        return $this;
    }

    /**
     * Get strpedimentoKy
     *
     * @return string 
     */
    public function getStrpedimentoKy()
    {
        return $this->strpedimentoKy;
    }

    /**
     * Set strloteKy
     *
     * @param string $strloteKy
     * @return Tomasinventariosexistencias
     */
    public function setStrloteKy($strloteKy)
    {
        $this->strloteKy = $strloteKy;

        return $this;
    }

    /**
     * Get strloteKy
     *
     * @return string 
     */
    public function getStrloteKy()
    {
        return $this->strloteKy;
    }

    /**
     * Set strserieKy
     *
     * @param string $strserieKy
     * @return Tomasinventariosexistencias
     */
    public function setStrserieKy($strserieKy)
    {
        $this->strserieKy = $strserieKy;

        return $this;
    }

    /**
     * Get strserieKy
     *
     * @return string 
     */
    public function getStrserieKy()
    {
        return $this->strserieKy;
    }

    /**
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Tomasinventariosexistencias
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
     * @return Tomasinventariosexistencias
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
     * Set numcantidadregistro
     *
     * @param float $numcantidadregistro
     * @return Tomasinventariosexistencias
     */
    public function setNumcantidadregistro($numcantidadregistro)
    {
        $this->numcantidadregistro = $numcantidadregistro;

        return $this;
    }

    /**
     * Get numcantidadregistro
     *
     * @return float 
     */
    public function getNumcantidadregistro()
    {
        return $this->numcantidadregistro;
    }

    /**
     * Set numcantidadinventario
     *
     * @param float $numcantidadinventario
     * @return Tomasinventariosexistencias
     */
    public function setNumcantidadinventario($numcantidadinventario)
    {
        $this->numcantidadinventario = $numcantidadinventario;

        return $this;
    }

    /**
     * Get numcantidadinventario
     *
     * @return float 
     */
    public function getNumcantidadinventario()
    {
        return $this->numcantidadinventario;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Tomasinventariosexistencias
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
     * @return Tomasinventariosexistencias
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
     * Set numprecioventa
     *
     * @param integer $numprecioventa
     * @return Tomasinventariosexistencias
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
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Tomasinventariosexistencias
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
     * Set numcostocompra
     *
     * @param integer $numcostocompra
     * @return Tomasinventariosexistencias
     */
    public function setNumcostocompra($numcostocompra)
    {
        $this->numcostocompra = $numcostocompra;

        return $this;
    }

    /**
     * Get numcostocompra
     *
     * @return integer 
     */
    public function getNumcostocompra()
    {
        return $this->numcostocompra;
    }

    /**
     * Set numcostoestandar
     *
     * @param integer $numcostoestandar
     * @return Tomasinventariosexistencias
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
     * @return Tomasinventariosexistencias
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
     * @return Tomasinventariosexistencias
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
     * @return Tomasinventariosexistencias
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
     * Set numpeso
     *
     * @param float $numpeso
     * @return Tomasinventariosexistencias
     */
    public function setNumpeso($numpeso)
    {
        $this->numpeso = $numpeso;

        return $this;
    }

    /**
     * Get numpeso
     *
     * @return float 
     */
    public function getNumpeso()
    {
        return $this->numpeso;
    }
}
