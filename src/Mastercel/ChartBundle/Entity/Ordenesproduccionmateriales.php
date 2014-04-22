<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordenesproduccionmateriales
 *
 * @ORM\Table(name="OrdenesProduccionMateriales", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id", "NumOrdenProduccion_id", "NumSecuencia"}), @ORM\Index(name="Indice_2", columns={"NumAlmacen_id", "NumOrdenProduccionPadre_id", "NumSecuencia"}), @ORM\Index(name="Indice_3", columns={"StrArticulo_ky"}), @ORM\Index(name="Indice_4", columns={"NumAlmacenRequisicionMaterial_id"}), @ORM\Index(name="Indice_5", columns={"NumCategoriaCosto_id"}), @ORM\Index(name="Indice_6", columns={"NumOrdenOperacion_id"}), @ORM\Index(name="Indice_7", columns={"NumOperacionEstandar_id"})})
 * @ORM\Entity
 */
class Ordenesproduccionmateriales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenMaterial_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numordenmaterialId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenProduccionPadre_id", type="integer", nullable=true)
     */
    private $numordenproduccionpadreId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenProduccion_id", type="integer", nullable=true)
     */
    private $numordenproduccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSecuencia", type="integer", nullable=true)
     */
    private $numsecuencia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

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
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenRequisicionMaterial_id", type="integer", nullable=true)
     */
    private $numalmacenrequisicionmaterialId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadRequerida", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadrequerida = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntregada", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentregada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOperacionEstandar_id", type="integer", nullable=true)
     */
    private $numoperacionestandarId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenOperacion_id", type="integer", nullable=true)
     */
    private $numordenoperacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarCompra", type="integer", nullable=true)
     */
    private $numcostoestandarcompra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarEstandar", type="integer", nullable=true)
     */
    private $numcostoestandarestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarPromedio", type="integer", nullable=true)
     */
    private $numcostoestandarpromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarPEPS", type="integer", nullable=true)
     */
    private $numcostoestandarpeps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarUEPS", type="integer", nullable=true)
     */
    private $numcostoestandarueps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealCompra", type="integer", nullable=true)
     */
    private $numcostorealcompra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealEstandar", type="integer", nullable=true)
     */
    private $numcostorealestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealPromedio", type="integer", nullable=true)
     */
    private $numcostorealpromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealPEPS", type="integer", nullable=true)
     */
    private $numcostorealpeps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealUEPS", type="integer", nullable=true)
     */
    private $numcostorealueps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaCosto_id", type="integer", nullable=true)
     */
    private $numcategoriacostoId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogMaterialEntregado", type="boolean", nullable=true)
     */
    private $logmaterialentregado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



    /**
     * Get numordenmaterialId
     *
     * @return integer 
     */
    public function getNumordenmaterialId()
    {
        return $this->numordenmaterialId;
    }

    /**
     * Set numordenproduccionpadreId
     *
     * @param integer $numordenproduccionpadreId
     * @return Ordenesproduccionmateriales
     */
    public function setNumordenproduccionpadreId($numordenproduccionpadreId)
    {
        $this->numordenproduccionpadreId = $numordenproduccionpadreId;

        return $this;
    }

    /**
     * Get numordenproduccionpadreId
     *
     * @return integer 
     */
    public function getNumordenproduccionpadreId()
    {
        return $this->numordenproduccionpadreId;
    }

    /**
     * Set numordenproduccionId
     *
     * @param integer $numordenproduccionId
     * @return Ordenesproduccionmateriales
     */
    public function setNumordenproduccionId($numordenproduccionId)
    {
        $this->numordenproduccionId = $numordenproduccionId;

        return $this;
    }

    /**
     * Get numordenproduccionId
     *
     * @return integer 
     */
    public function getNumordenproduccionId()
    {
        return $this->numordenproduccionId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Ordenesproduccionmateriales
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
     * Set numsecuencia
     *
     * @param integer $numsecuencia
     * @return Ordenesproduccionmateriales
     */
    public function setNumsecuencia($numsecuencia)
    {
        $this->numsecuencia = $numsecuencia;

        return $this;
    }

    /**
     * Get numsecuencia
     *
     * @return integer 
     */
    public function getNumsecuencia()
    {
        return $this->numsecuencia;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Ordenesproduccionmateriales
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
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Ordenesproduccionmateriales
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
     * @return Ordenesproduccionmateriales
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
     * Set numalmacenrequisicionmaterialId
     *
     * @param integer $numalmacenrequisicionmaterialId
     * @return Ordenesproduccionmateriales
     */
    public function setNumalmacenrequisicionmaterialId($numalmacenrequisicionmaterialId)
    {
        $this->numalmacenrequisicionmaterialId = $numalmacenrequisicionmaterialId;

        return $this;
    }

    /**
     * Get numalmacenrequisicionmaterialId
     *
     * @return integer 
     */
    public function getNumalmacenrequisicionmaterialId()
    {
        return $this->numalmacenrequisicionmaterialId;
    }

    /**
     * Set numcantidadrequerida
     *
     * @param float $numcantidadrequerida
     * @return Ordenesproduccionmateriales
     */
    public function setNumcantidadrequerida($numcantidadrequerida)
    {
        $this->numcantidadrequerida = $numcantidadrequerida;

        return $this;
    }

    /**
     * Get numcantidadrequerida
     *
     * @return float 
     */
    public function getNumcantidadrequerida()
    {
        return $this->numcantidadrequerida;
    }

    /**
     * Set numcantidadentregada
     *
     * @param float $numcantidadentregada
     * @return Ordenesproduccionmateriales
     */
    public function setNumcantidadentregada($numcantidadentregada)
    {
        $this->numcantidadentregada = $numcantidadentregada;

        return $this;
    }

    /**
     * Get numcantidadentregada
     *
     * @return float 
     */
    public function getNumcantidadentregada()
    {
        return $this->numcantidadentregada;
    }

    /**
     * Set numoperacionestandarId
     *
     * @param integer $numoperacionestandarId
     * @return Ordenesproduccionmateriales
     */
    public function setNumoperacionestandarId($numoperacionestandarId)
    {
        $this->numoperacionestandarId = $numoperacionestandarId;

        return $this;
    }

    /**
     * Get numoperacionestandarId
     *
     * @return integer 
     */
    public function getNumoperacionestandarId()
    {
        return $this->numoperacionestandarId;
    }

    /**
     * Set numordenoperacionId
     *
     * @param integer $numordenoperacionId
     * @return Ordenesproduccionmateriales
     */
    public function setNumordenoperacionId($numordenoperacionId)
    {
        $this->numordenoperacionId = $numordenoperacionId;

        return $this;
    }

    /**
     * Get numordenoperacionId
     *
     * @return integer 
     */
    public function getNumordenoperacionId()
    {
        return $this->numordenoperacionId;
    }

    /**
     * Set numcostoestandarcompra
     *
     * @param integer $numcostoestandarcompra
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostoestandarcompra($numcostoestandarcompra)
    {
        $this->numcostoestandarcompra = $numcostoestandarcompra;

        return $this;
    }

    /**
     * Get numcostoestandarcompra
     *
     * @return integer 
     */
    public function getNumcostoestandarcompra()
    {
        return $this->numcostoestandarcompra;
    }

    /**
     * Set numcostoestandarestandar
     *
     * @param integer $numcostoestandarestandar
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostoestandarestandar($numcostoestandarestandar)
    {
        $this->numcostoestandarestandar = $numcostoestandarestandar;

        return $this;
    }

    /**
     * Get numcostoestandarestandar
     *
     * @return integer 
     */
    public function getNumcostoestandarestandar()
    {
        return $this->numcostoestandarestandar;
    }

    /**
     * Set numcostoestandarpromedio
     *
     * @param integer $numcostoestandarpromedio
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostoestandarpromedio($numcostoestandarpromedio)
    {
        $this->numcostoestandarpromedio = $numcostoestandarpromedio;

        return $this;
    }

    /**
     * Get numcostoestandarpromedio
     *
     * @return integer 
     */
    public function getNumcostoestandarpromedio()
    {
        return $this->numcostoestandarpromedio;
    }

    /**
     * Set numcostoestandarpeps
     *
     * @param integer $numcostoestandarpeps
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostoestandarpeps($numcostoestandarpeps)
    {
        $this->numcostoestandarpeps = $numcostoestandarpeps;

        return $this;
    }

    /**
     * Get numcostoestandarpeps
     *
     * @return integer 
     */
    public function getNumcostoestandarpeps()
    {
        return $this->numcostoestandarpeps;
    }

    /**
     * Set numcostoestandarueps
     *
     * @param integer $numcostoestandarueps
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostoestandarueps($numcostoestandarueps)
    {
        $this->numcostoestandarueps = $numcostoestandarueps;

        return $this;
    }

    /**
     * Get numcostoestandarueps
     *
     * @return integer 
     */
    public function getNumcostoestandarueps()
    {
        return $this->numcostoestandarueps;
    }

    /**
     * Set numcostorealcompra
     *
     * @param integer $numcostorealcompra
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostorealcompra($numcostorealcompra)
    {
        $this->numcostorealcompra = $numcostorealcompra;

        return $this;
    }

    /**
     * Get numcostorealcompra
     *
     * @return integer 
     */
    public function getNumcostorealcompra()
    {
        return $this->numcostorealcompra;
    }

    /**
     * Set numcostorealestandar
     *
     * @param integer $numcostorealestandar
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostorealestandar($numcostorealestandar)
    {
        $this->numcostorealestandar = $numcostorealestandar;

        return $this;
    }

    /**
     * Get numcostorealestandar
     *
     * @return integer 
     */
    public function getNumcostorealestandar()
    {
        return $this->numcostorealestandar;
    }

    /**
     * Set numcostorealpromedio
     *
     * @param integer $numcostorealpromedio
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostorealpromedio($numcostorealpromedio)
    {
        $this->numcostorealpromedio = $numcostorealpromedio;

        return $this;
    }

    /**
     * Get numcostorealpromedio
     *
     * @return integer 
     */
    public function getNumcostorealpromedio()
    {
        return $this->numcostorealpromedio;
    }

    /**
     * Set numcostorealpeps
     *
     * @param integer $numcostorealpeps
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostorealpeps($numcostorealpeps)
    {
        $this->numcostorealpeps = $numcostorealpeps;

        return $this;
    }

    /**
     * Get numcostorealpeps
     *
     * @return integer 
     */
    public function getNumcostorealpeps()
    {
        return $this->numcostorealpeps;
    }

    /**
     * Set numcostorealueps
     *
     * @param integer $numcostorealueps
     * @return Ordenesproduccionmateriales
     */
    public function setNumcostorealueps($numcostorealueps)
    {
        $this->numcostorealueps = $numcostorealueps;

        return $this;
    }

    /**
     * Get numcostorealueps
     *
     * @return integer 
     */
    public function getNumcostorealueps()
    {
        return $this->numcostorealueps;
    }

    /**
     * Set numcategoriacostoId
     *
     * @param integer $numcategoriacostoId
     * @return Ordenesproduccionmateriales
     */
    public function setNumcategoriacostoId($numcategoriacostoId)
    {
        $this->numcategoriacostoId = $numcategoriacostoId;

        return $this;
    }

    /**
     * Get numcategoriacostoId
     *
     * @return integer 
     */
    public function getNumcategoriacostoId()
    {
        return $this->numcategoriacostoId;
    }

    /**
     * Set logmaterialentregado
     *
     * @param boolean $logmaterialentregado
     * @return Ordenesproduccionmateriales
     */
    public function setLogmaterialentregado($logmaterialentregado)
    {
        $this->logmaterialentregado = $logmaterialentregado;

        return $this;
    }

    /**
     * Get logmaterialentregado
     *
     * @return boolean 
     */
    public function getLogmaterialentregado()
    {
        return $this->logmaterialentregado;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Ordenesproduccionmateriales
     */
    public function setNumtipoestado($numtipoestado)
    {
        $this->numtipoestado = $numtipoestado;

        return $this;
    }

    /**
     * Get numtipoestado
     *
     * @return integer 
     */
    public function getNumtipoestado()
    {
        return $this->numtipoestado;
    }
}
