<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operacionesestandarproveedores
 *
 * @ORM\Table(name="OperacionesEstandarProveedores", indexes={@ORM\Index(name="Indice_1", columns={"NumProveedor_id", "NumOperacionEstandar_id"}), @ORM\Index(name="Indice_2", columns={"NumProveedor_id", "StrArticulo_ky"}), @ORM\Index(name="Indice_3", columns={"StrArticulo_ky", "NumProveedor_id"}), @ORM\Index(name="Indice_4", columns={"StrArticulo_ky", "NumOperacionEstandar_id"})})
 * @ORM\Entity
 */
class Operacionesestandarproveedores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOperacionEstandar_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numoperacionestandarId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numproveedorId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogProveedorOmision", type="boolean", nullable=true)
     */
    private $logproveedoromision = '0';

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
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoUnitario", type="integer", nullable=true)
     */
    private $numcostounitario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadMinima", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadminima = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasEntrega", type="integer", nullable=true)
     */
    private $numdiasentrega = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaCosto_id", type="integer", nullable=true)
     */
    private $numcategoriacostoId = '0';



    /**
     * Set numoperacionestandarId
     *
     * @param integer $numoperacionestandarId
     * @return Operacionesestandarproveedores
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
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Operacionesestandarproveedores
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
     * Set logproveedoromision
     *
     * @param boolean $logproveedoromision
     * @return Operacionesestandarproveedores
     */
    public function setLogproveedoromision($logproveedoromision)
    {
        $this->logproveedoromision = $logproveedoromision;

        return $this;
    }

    /**
     * Get logproveedoromision
     *
     * @return boolean 
     */
    public function getLogproveedoromision()
    {
        return $this->logproveedoromision;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Operacionesestandarproveedores
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
     * @return Operacionesestandarproveedores
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
     * @return Operacionesestandarproveedores
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
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Operacionesestandarproveedores
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
     * Set numcostounitario
     *
     * @param integer $numcostounitario
     * @return Operacionesestandarproveedores
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
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Operacionesestandarproveedores
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
     * Set numcantidadminima
     *
     * @param float $numcantidadminima
     * @return Operacionesestandarproveedores
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
     * Set numdiasentrega
     *
     * @param integer $numdiasentrega
     * @return Operacionesestandarproveedores
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

    /**
     * Set numcategoriacostoId
     *
     * @param integer $numcategoriacostoId
     * @return Operacionesestandarproveedores
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
}
