<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tomasinventariosdetalles
 *
 * @ORM\Table(name="TomasInventariosDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumToma_id", "NumAlmacen_id"}), @ORM\Index(name="Indice_2", columns={"NumAlmacen_id", "StrDocumento"}), @ORM\Index(name="Indice_3", columns={"NumEjercicio_id", "NumPeriodo_id"}), @ORM\Index(name="Indice_4", columns={"DteDocumento"}), @ORM\Index(name="Indice_5", columns={"DteInventario"}), @ORM\Index(name="Indice_6", columns={"NumProveedor_id"}), @ORM\Index(name="Indice_7", columns={"DteInventario", "NumAlmacen_id", "StrArticulo_ky", "NumTipoEstado"})})
 * @ORM\Entity
 */
class Tomasinventariosdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumToma_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtomaId = '0';

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
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDocumento", type="string", length=10, nullable=true)
     */
    private $strdocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteDocumento", type="datetime", nullable=true)
     */
    private $dtedocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeDocumento", type="datetime", nullable=true)
     */
    private $tmedocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=true)
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodo_id", type="integer", nullable=true)
     */
    private $numperiodoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSemana_id", type="integer", nullable=true)
     */
    private $numsemanaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInventario", type="datetime", nullable=true)
     */
    private $dteinventario;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoConteo", type="integer", nullable=true)
     */
    private $numtipoconteo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAsociado_ky", type="string", length=20, nullable=true)
     */
    private $strasociadoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

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
     * @ORM\Column(name="NumTipoAfectacion", type="integer", nullable=true)
     */
    private $numtipoafectacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioVenta", type="integer", nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambio = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogImpuestoIncluido", type="boolean", nullable=true)
     */
    private $logimpuestoincluido = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_1_id", type="integer", nullable=true)
     */
    private $numimpuesto1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_2_id", type="integer", nullable=true)
     */
    private $numimpuesto2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_3_id", type="integer", nullable=true)
     */
    private $numimpuesto3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_4_id", type="integer", nullable=true)
     */
    private $numimpuesto4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_5_id", type="integer", nullable=true)
     */
    private $numimpuesto5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_6_id", type="integer", nullable=true)
     */
    private $numimpuesto6Id = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto6 = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumIdentificador_id", type="integer", nullable=true)
     */
    private $numidentificadorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



    /**
     * Set numtomaId
     *
     * @param integer $numtomaId
     * @return Tomasinventariosdetalles
     */
    public function setNumtomaId($numtomaId)
    {
        $this->numtomaId = $numtomaId;

        return $this;
    }

    /**
     * Get numtomaId
     *
     * @return integer 
     */
    public function getNumtomaId()
    {
        return $this->numtomaId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Tomasinventariosdetalles
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Tomasinventariosdetalles
     */
    public function setNumconsecutivoId($numconsecutivoId)
    {
        $this->numconsecutivoId = $numconsecutivoId;

        return $this;
    }

    /**
     * Get numconsecutivoId
     *
     * @return integer 
     */
    public function getNumconsecutivoId()
    {
        return $this->numconsecutivoId;
    }

    /**
     * Set strdocumento
     *
     * @param string $strdocumento
     * @return Tomasinventariosdetalles
     */
    public function setStrdocumento($strdocumento)
    {
        $this->strdocumento = $strdocumento;

        return $this;
    }

    /**
     * Get strdocumento
     *
     * @return string 
     */
    public function getStrdocumento()
    {
        return $this->strdocumento;
    }

    /**
     * Set dtedocumento
     *
     * @param \DateTime $dtedocumento
     * @return Tomasinventariosdetalles
     */
    public function setDtedocumento($dtedocumento)
    {
        $this->dtedocumento = $dtedocumento;

        return $this;
    }

    /**
     * Get dtedocumento
     *
     * @return \DateTime 
     */
    public function getDtedocumento()
    {
        return $this->dtedocumento;
    }

    /**
     * Set tmedocumento
     *
     * @param \DateTime $tmedocumento
     * @return Tomasinventariosdetalles
     */
    public function setTmedocumento($tmedocumento)
    {
        $this->tmedocumento = $tmedocumento;

        return $this;
    }

    /**
     * Get tmedocumento
     *
     * @return \DateTime 
     */
    public function getTmedocumento()
    {
        return $this->tmedocumento;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Tomasinventariosdetalles
     */
    public function setNumejercicioId($numejercicioId)
    {
        $this->numejercicioId = $numejercicioId;

        return $this;
    }

    /**
     * Get numejercicioId
     *
     * @return integer 
     */
    public function getNumejercicioId()
    {
        return $this->numejercicioId;
    }

    /**
     * Set numperiodoId
     *
     * @param integer $numperiodoId
     * @return Tomasinventariosdetalles
     */
    public function setNumperiodoId($numperiodoId)
    {
        $this->numperiodoId = $numperiodoId;

        return $this;
    }

    /**
     * Get numperiodoId
     *
     * @return integer 
     */
    public function getNumperiodoId()
    {
        return $this->numperiodoId;
    }

    /**
     * Set numsemanaId
     *
     * @param integer $numsemanaId
     * @return Tomasinventariosdetalles
     */
    public function setNumsemanaId($numsemanaId)
    {
        $this->numsemanaId = $numsemanaId;

        return $this;
    }

    /**
     * Get numsemanaId
     *
     * @return integer 
     */
    public function getNumsemanaId()
    {
        return $this->numsemanaId;
    }

    /**
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Tomasinventariosdetalles
     */
    public function setNumcentrocontrolId($numcentrocontrolId)
    {
        $this->numcentrocontrolId = $numcentrocontrolId;

        return $this;
    }

    /**
     * Get numcentrocontrolId
     *
     * @return integer 
     */
    public function getNumcentrocontrolId()
    {
        return $this->numcentrocontrolId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Tomasinventariosdetalles
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
     * Set dteinventario
     *
     * @param \DateTime $dteinventario
     * @return Tomasinventariosdetalles
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
     * Set numtipoconteo
     *
     * @param integer $numtipoconteo
     * @return Tomasinventariosdetalles
     */
    public function setNumtipoconteo($numtipoconteo)
    {
        $this->numtipoconteo = $numtipoconteo;

        return $this;
    }

    /**
     * Get numtipoconteo
     *
     * @return integer 
     */
    public function getNumtipoconteo()
    {
        return $this->numtipoconteo;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Tomasinventariosdetalles
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
     * Set strasociadoKy
     *
     * @param string $strasociadoKy
     * @return Tomasinventariosdetalles
     */
    public function setStrasociadoKy($strasociadoKy)
    {
        $this->strasociadoKy = $strasociadoKy;

        return $this;
    }

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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Tomasinventariosdetalles
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
     * @return Tomasinventariosdetalles
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
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Tomasinventariosdetalles
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
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Tomasinventariosdetalles
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
     * @return Tomasinventariosdetalles
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
     * Set numtipoafectacion
     *
     * @param integer $numtipoafectacion
     * @return Tomasinventariosdetalles
     */
    public function setNumtipoafectacion($numtipoafectacion)
    {
        $this->numtipoafectacion = $numtipoafectacion;

        return $this;
    }

    /**
     * Get numtipoafectacion
     *
     * @return integer 
     */
    public function getNumtipoafectacion()
    {
        return $this->numtipoafectacion;
    }

    /**
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Tomasinventariosdetalles
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
     * Set numprecioventa
     *
     * @param integer $numprecioventa
     * @return Tomasinventariosdetalles
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
     * Set numtipocambio
     *
     * @param float $numtipocambio
     * @return Tomasinventariosdetalles
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
     * Set logimpuestoincluido
     *
     * @param boolean $logimpuestoincluido
     * @return Tomasinventariosdetalles
     */
    public function setLogimpuestoincluido($logimpuestoincluido)
    {
        $this->logimpuestoincluido = $logimpuestoincluido;

        return $this;
    }

    /**
     * Get logimpuestoincluido
     *
     * @return boolean 
     */
    public function getLogimpuestoincluido()
    {
        return $this->logimpuestoincluido;
    }

    /**
     * Set numimpuesto1Id
     *
     * @param integer $numimpuesto1Id
     * @return Tomasinventariosdetalles
     */
    public function setNumimpuesto1Id($numimpuesto1Id)
    {
        $this->numimpuesto1Id = $numimpuesto1Id;

        return $this;
    }

    /**
     * Get numimpuesto1Id
     *
     * @return integer 
     */
    public function getNumimpuesto1Id()
    {
        return $this->numimpuesto1Id;
    }

    /**
     * Set numimpuesto2Id
     *
     * @param integer $numimpuesto2Id
     * @return Tomasinventariosdetalles
     */
    public function setNumimpuesto2Id($numimpuesto2Id)
    {
        $this->numimpuesto2Id = $numimpuesto2Id;

        return $this;
    }

    /**
     * Get numimpuesto2Id
     *
     * @return integer 
     */
    public function getNumimpuesto2Id()
    {
        return $this->numimpuesto2Id;
    }

    /**
     * Set numimpuesto3Id
     *
     * @param integer $numimpuesto3Id
     * @return Tomasinventariosdetalles
     */
    public function setNumimpuesto3Id($numimpuesto3Id)
    {
        $this->numimpuesto3Id = $numimpuesto3Id;

        return $this;
    }

    /**
     * Get numimpuesto3Id
     *
     * @return integer 
     */
    public function getNumimpuesto3Id()
    {
        return $this->numimpuesto3Id;
    }

    /**
     * Set numimpuesto4Id
     *
     * @param integer $numimpuesto4Id
     * @return Tomasinventariosdetalles
     */
    public function setNumimpuesto4Id($numimpuesto4Id)
    {
        $this->numimpuesto4Id = $numimpuesto4Id;

        return $this;
    }

    /**
     * Get numimpuesto4Id
     *
     * @return integer 
     */
    public function getNumimpuesto4Id()
    {
        return $this->numimpuesto4Id;
    }

    /**
     * Set numimpuesto5Id
     *
     * @param integer $numimpuesto5Id
     * @return Tomasinventariosdetalles
     */
    public function setNumimpuesto5Id($numimpuesto5Id)
    {
        $this->numimpuesto5Id = $numimpuesto5Id;

        return $this;
    }

    /**
     * Get numimpuesto5Id
     *
     * @return integer 
     */
    public function getNumimpuesto5Id()
    {
        return $this->numimpuesto5Id;
    }

    /**
     * Set numimpuesto6Id
     *
     * @param integer $numimpuesto6Id
     * @return Tomasinventariosdetalles
     */
    public function setNumimpuesto6Id($numimpuesto6Id)
    {
        $this->numimpuesto6Id = $numimpuesto6Id;

        return $this;
    }

    /**
     * Get numimpuesto6Id
     *
     * @return integer 
     */
    public function getNumimpuesto6Id()
    {
        return $this->numimpuesto6Id;
    }

    /**
     * Set numprctjimpuesto1
     *
     * @param float $numprctjimpuesto1
     * @return Tomasinventariosdetalles
     */
    public function setNumprctjimpuesto1($numprctjimpuesto1)
    {
        $this->numprctjimpuesto1 = $numprctjimpuesto1;

        return $this;
    }

    /**
     * Get numprctjimpuesto1
     *
     * @return float 
     */
    public function getNumprctjimpuesto1()
    {
        return $this->numprctjimpuesto1;
    }

    /**
     * Set numprctjimpuesto2
     *
     * @param float $numprctjimpuesto2
     * @return Tomasinventariosdetalles
     */
    public function setNumprctjimpuesto2($numprctjimpuesto2)
    {
        $this->numprctjimpuesto2 = $numprctjimpuesto2;

        return $this;
    }

    /**
     * Get numprctjimpuesto2
     *
     * @return float 
     */
    public function getNumprctjimpuesto2()
    {
        return $this->numprctjimpuesto2;
    }

    /**
     * Set numprctjimpuesto3
     *
     * @param float $numprctjimpuesto3
     * @return Tomasinventariosdetalles
     */
    public function setNumprctjimpuesto3($numprctjimpuesto3)
    {
        $this->numprctjimpuesto3 = $numprctjimpuesto3;

        return $this;
    }

    /**
     * Get numprctjimpuesto3
     *
     * @return float 
     */
    public function getNumprctjimpuesto3()
    {
        return $this->numprctjimpuesto3;
    }

    /**
     * Set numprctjimpuesto4
     *
     * @param float $numprctjimpuesto4
     * @return Tomasinventariosdetalles
     */
    public function setNumprctjimpuesto4($numprctjimpuesto4)
    {
        $this->numprctjimpuesto4 = $numprctjimpuesto4;

        return $this;
    }

    /**
     * Get numprctjimpuesto4
     *
     * @return float 
     */
    public function getNumprctjimpuesto4()
    {
        return $this->numprctjimpuesto4;
    }

    /**
     * Set numprctjimpuesto5
     *
     * @param float $numprctjimpuesto5
     * @return Tomasinventariosdetalles
     */
    public function setNumprctjimpuesto5($numprctjimpuesto5)
    {
        $this->numprctjimpuesto5 = $numprctjimpuesto5;

        return $this;
    }

    /**
     * Get numprctjimpuesto5
     *
     * @return float 
     */
    public function getNumprctjimpuesto5()
    {
        return $this->numprctjimpuesto5;
    }

    /**
     * Set numprctjimpuesto6
     *
     * @param float $numprctjimpuesto6
     * @return Tomasinventariosdetalles
     */
    public function setNumprctjimpuesto6($numprctjimpuesto6)
    {
        $this->numprctjimpuesto6 = $numprctjimpuesto6;

        return $this;
    }

    /**
     * Get numprctjimpuesto6
     *
     * @return float 
     */
    public function getNumprctjimpuesto6()
    {
        return $this->numprctjimpuesto6;
    }

    /**
     * Set numcostocompra
     *
     * @param integer $numcostocompra
     * @return Tomasinventariosdetalles
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
     * @return Tomasinventariosdetalles
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
     * @return Tomasinventariosdetalles
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
     * @return Tomasinventariosdetalles
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
     * @return Tomasinventariosdetalles
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
     * @return Tomasinventariosdetalles
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

    /**
     * Set numidentificadorId
     *
     * @param integer $numidentificadorId
     * @return Tomasinventariosdetalles
     */
    public function setNumidentificadorId($numidentificadorId)
    {
        $this->numidentificadorId = $numidentificadorId;

        return $this;
    }

    /**
     * Get numidentificadorId
     *
     * @return integer 
     */
    public function getNumidentificadorId()
    {
        return $this->numidentificadorId;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Tomasinventariosdetalles
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
