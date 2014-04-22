<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordenesproduccionoperaciones
 *
 * @ORM\Table(name="OrdenesProduccionOperaciones", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id", "NumOrdenProduccion_id", "NumSecuencia"}), @ORM\Index(name="Indice_10", columns={"NumOrdenProduccionPadre_id", "NumAlmacen_id", "NumOperacionEstandar_id", "NumAlmacenSubcontrato_id", "NumMonedaSubcontrato_id"}), @ORM\Index(name="Indice_2", columns={"NumAlmacen_id", "NumOrdenProduccionPadre_id", "NumSecuencia"}), @ORM\Index(name="Indice_3", columns={"NumOperacionEstandar_id"}), @ORM\Index(name="Indice_4", columns={"NumAlmacenCentroTrabajo_id", "NumCentroTrabajo_id"}), @ORM\Index(name="Indice_5", columns={"NumCentroTrabajo_id", "NumAlmacenCentroTrabajo_id"}), @ORM\Index(name="Indice_6", columns={"NumProveedor_id"}), @ORM\Index(name="Indice_7", columns={"NumMaquina_id"}), @ORM\Index(name="Indice_8", columns={"NumHerramienta_id"}), @ORM\Index(name="Indice_9", columns={"NumOrdenProduccion_id", "NumAlmacen_id", "NumOperacionEstandar_id", "NumAlmacenSubcontrato_id", "NumMonedaSubcontrato_id"})})
 * @ORM\Entity
 */
class Ordenesproduccionoperaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenOperacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numordenoperacionId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumOperacionEstandar_id", type="integer", nullable=true)
     */
    private $numoperacionestandarId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroTrabajo_id", type="integer", nullable=true)
     */
    private $numcentrotrabajoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenCentroTrabajo_id", type="integer", nullable=true)
     */
    private $numalmacencentrotrabajoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMaquina_id", type="integer", nullable=true)
     */
    private $nummaquinaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumHerramienta_id", type="integer", nullable=true)
     */
    private $numherramientaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtePlaneadaEjecucion", type="datetime", nullable=true)
     */
    private $dteplaneadaejecucion;

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadProducir", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadproducir = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadRecibida", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadrecibida = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadTerminada", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadterminada = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadDesperdiciada", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidaddesperdiciada = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadOrdenada", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadordenada = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRecibeInventario", type="boolean", nullable=true)
     */
    private $logrecibeinventario = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogGenerarSalidaInventarios", type="boolean", nullable=true)
     */
    private $loggenerarsalidainventarios = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogTraslaparOperacion", type="boolean", nullable=true)
     */
    private $logtraslaparoperacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticuloSubcontrato_ky", type="string", length=20, nullable=true)
     */
    private $strarticulosubcontratoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedidaSubcontrato_id", type="integer", nullable=true)
     */
    private $numunidadmedidasubcontratoId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorConversionSubcontrato", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactorconversionsubcontrato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenSubcontrato_id", type="integer", nullable=true)
     */
    private $numalmacensubcontratoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoUnitarioSubcontrato", type="integer", nullable=true)
     */
    private $numcostounitariosubcontrato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMonedaSubcontrato_id", type="integer", nullable=true)
     */
    private $nummonedasubcontratoId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambioSubcontrato", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambiosubcontrato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasEntrega", type="integer", nullable=true)
     */
    private $numdiasentrega = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoEstandarCola", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoestandarcola = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoEstandarPreparacionMaquina", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoestandarpreparacionmaquina = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoEstandarPreparacionLabor", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoestandarpreparacionlabor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoEstandarProcesoMaquina", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoestandarprocesomaquina = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoEstandarProcesoLabor", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoestandarprocesolabor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoEstandarEspera", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoestandarespera = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoEstandarTraslado", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoestandartraslado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarCola", type="integer", nullable=true)
     */
    private $numcostoestandarcola = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarPreparacionMaquina", type="integer", nullable=true)
     */
    private $numcostoestandarpreparacionmaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarPreparacionLabor", type="integer", nullable=true)
     */
    private $numcostoestandarpreparacionlabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarProcesoMaquina", type="integer", nullable=true)
     */
    private $numcostoestandarprocesomaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarProcesoLabor", type="integer", nullable=true)
     */
    private $numcostoestandarprocesolabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarEspera", type="integer", nullable=true)
     */
    private $numcostoestandarespera = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarTraslado", type="integer", nullable=true)
     */
    private $numcostoestandartraslado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarGastoIndirecto", type="integer", nullable=true)
     */
    private $numcostoestandargastoindirecto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandarSubcontrato", type="integer", nullable=true)
     */
    private $numcostoestandarsubcontrato = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoRealCola", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiemporealcola = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoRealPreparacionMaquina", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiemporealpreparacionmaquina = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoRealPreparacionLabor", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiemporealpreparacionlabor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoRealProcesoMaquina", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiemporealprocesomaquina = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoRealProcesoLabor", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiemporealprocesolabor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoRealEspera", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiemporealespera = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoRealTraslado", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiemporealtraslado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealCola", type="integer", nullable=true)
     */
    private $numcostorealcola = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealPreparacionMaquina", type="integer", nullable=true)
     */
    private $numcostorealpreparacionmaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealPreparacionLabor", type="integer", nullable=true)
     */
    private $numcostorealpreparacionlabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealProcesoMaquina", type="integer", nullable=true)
     */
    private $numcostorealprocesomaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealProcesoLabor", type="integer", nullable=true)
     */
    private $numcostorealprocesolabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealEspera", type="integer", nullable=true)
     */
    private $numcostorealespera = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealTraslado", type="integer", nullable=true)
     */
    private $numcostorealtraslado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealGastoIndirecto", type="integer", nullable=true)
     */
    private $numcostorealgastoindirecto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoRealSubcontrato", type="integer", nullable=true)
     */
    private $numcostorealsubcontrato = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemInstrucciones", type="text", length=16, nullable=true)
     */
    private $meminstrucciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogOperacionTerminada", type="boolean", nullable=true)
     */
    private $logoperacionterminada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



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
     * Set numordenproduccionpadreId
     *
     * @param integer $numordenproduccionpadreId
     * @return Ordenesproduccionoperaciones
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
     * @return Ordenesproduccionoperaciones
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
     * @return Ordenesproduccionoperaciones
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
     * @return Ordenesproduccionoperaciones
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
     * Set numoperacionestandarId
     *
     * @param integer $numoperacionestandarId
     * @return Ordenesproduccionoperaciones
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Ordenesproduccionoperaciones
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
     * Set numcentrotrabajoId
     *
     * @param integer $numcentrotrabajoId
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcentrotrabajoId($numcentrotrabajoId)
    {
        $this->numcentrotrabajoId = $numcentrotrabajoId;

        return $this;
    }

    /**
     * Get numcentrotrabajoId
     *
     * @return integer 
     */
    public function getNumcentrotrabajoId()
    {
        return $this->numcentrotrabajoId;
    }

    /**
     * Set numalmacencentrotrabajoId
     *
     * @param integer $numalmacencentrotrabajoId
     * @return Ordenesproduccionoperaciones
     */
    public function setNumalmacencentrotrabajoId($numalmacencentrotrabajoId)
    {
        $this->numalmacencentrotrabajoId = $numalmacencentrotrabajoId;

        return $this;
    }

    /**
     * Get numalmacencentrotrabajoId
     *
     * @return integer 
     */
    public function getNumalmacencentrotrabajoId()
    {
        return $this->numalmacencentrotrabajoId;
    }

    /**
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Ordenesproduccionoperaciones
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
     * Set nummaquinaId
     *
     * @param integer $nummaquinaId
     * @return Ordenesproduccionoperaciones
     */
    public function setNummaquinaId($nummaquinaId)
    {
        $this->nummaquinaId = $nummaquinaId;

        return $this;
    }

    /**
     * Get nummaquinaId
     *
     * @return integer 
     */
    public function getNummaquinaId()
    {
        return $this->nummaquinaId;
    }

    /**
     * Set numherramientaId
     *
     * @param integer $numherramientaId
     * @return Ordenesproduccionoperaciones
     */
    public function setNumherramientaId($numherramientaId)
    {
        $this->numherramientaId = $numherramientaId;

        return $this;
    }

    /**
     * Get numherramientaId
     *
     * @return integer 
     */
    public function getNumherramientaId()
    {
        return $this->numherramientaId;
    }

    /**
     * Set dteplaneadaejecucion
     *
     * @param \DateTime $dteplaneadaejecucion
     * @return Ordenesproduccionoperaciones
     */
    public function setDteplaneadaejecucion($dteplaneadaejecucion)
    {
        $this->dteplaneadaejecucion = $dteplaneadaejecucion;

        return $this;
    }

    /**
     * Get dteplaneadaejecucion
     *
     * @return \DateTime 
     */
    public function getDteplaneadaejecucion()
    {
        return $this->dteplaneadaejecucion;
    }

    /**
     * Set numcantidadproducir
     *
     * @param float $numcantidadproducir
     * @return Ordenesproduccionoperaciones
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
     * Set numcantidadrecibida
     *
     * @param float $numcantidadrecibida
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcantidadrecibida($numcantidadrecibida)
    {
        $this->numcantidadrecibida = $numcantidadrecibida;

        return $this;
    }

    /**
     * Get numcantidadrecibida
     *
     * @return float 
     */
    public function getNumcantidadrecibida()
    {
        return $this->numcantidadrecibida;
    }

    /**
     * Set numcantidadterminada
     *
     * @param float $numcantidadterminada
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcantidadterminada($numcantidadterminada)
    {
        $this->numcantidadterminada = $numcantidadterminada;

        return $this;
    }

    /**
     * Get numcantidadterminada
     *
     * @return float 
     */
    public function getNumcantidadterminada()
    {
        return $this->numcantidadterminada;
    }

    /**
     * Set numcantidaddesperdiciada
     *
     * @param float $numcantidaddesperdiciada
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcantidaddesperdiciada($numcantidaddesperdiciada)
    {
        $this->numcantidaddesperdiciada = $numcantidaddesperdiciada;

        return $this;
    }

    /**
     * Get numcantidaddesperdiciada
     *
     * @return float 
     */
    public function getNumcantidaddesperdiciada()
    {
        return $this->numcantidaddesperdiciada;
    }

    /**
     * Set numcantidadordenada
     *
     * @param float $numcantidadordenada
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcantidadordenada($numcantidadordenada)
    {
        $this->numcantidadordenada = $numcantidadordenada;

        return $this;
    }

    /**
     * Get numcantidadordenada
     *
     * @return float 
     */
    public function getNumcantidadordenada()
    {
        return $this->numcantidadordenada;
    }

    /**
     * Set logrecibeinventario
     *
     * @param boolean $logrecibeinventario
     * @return Ordenesproduccionoperaciones
     */
    public function setLogrecibeinventario($logrecibeinventario)
    {
        $this->logrecibeinventario = $logrecibeinventario;

        return $this;
    }

    /**
     * Get logrecibeinventario
     *
     * @return boolean 
     */
    public function getLogrecibeinventario()
    {
        return $this->logrecibeinventario;
    }

    /**
     * Set loggenerarsalidainventarios
     *
     * @param boolean $loggenerarsalidainventarios
     * @return Ordenesproduccionoperaciones
     */
    public function setLoggenerarsalidainventarios($loggenerarsalidainventarios)
    {
        $this->loggenerarsalidainventarios = $loggenerarsalidainventarios;

        return $this;
    }

    /**
     * Get loggenerarsalidainventarios
     *
     * @return boolean 
     */
    public function getLoggenerarsalidainventarios()
    {
        return $this->loggenerarsalidainventarios;
    }

    /**
     * Set logtraslaparoperacion
     *
     * @param boolean $logtraslaparoperacion
     * @return Ordenesproduccionoperaciones
     */
    public function setLogtraslaparoperacion($logtraslaparoperacion)
    {
        $this->logtraslaparoperacion = $logtraslaparoperacion;

        return $this;
    }

    /**
     * Get logtraslaparoperacion
     *
     * @return boolean 
     */
    public function getLogtraslaparoperacion()
    {
        return $this->logtraslaparoperacion;
    }

    /**
     * Set strarticulosubcontratoKy
     *
     * @param string $strarticulosubcontratoKy
     * @return Ordenesproduccionoperaciones
     */
    public function setStrarticulosubcontratoKy($strarticulosubcontratoKy)
    {
        $this->strarticulosubcontratoKy = $strarticulosubcontratoKy;

        return $this;
    }

    /**
     * Get strarticulosubcontratoKy
     *
     * @return string 
     */
    public function getStrarticulosubcontratoKy()
    {
        return $this->strarticulosubcontratoKy;
    }

    /**
     * Set numunidadmedidasubcontratoId
     *
     * @param integer $numunidadmedidasubcontratoId
     * @return Ordenesproduccionoperaciones
     */
    public function setNumunidadmedidasubcontratoId($numunidadmedidasubcontratoId)
    {
        $this->numunidadmedidasubcontratoId = $numunidadmedidasubcontratoId;

        return $this;
    }

    /**
     * Get numunidadmedidasubcontratoId
     *
     * @return integer 
     */
    public function getNumunidadmedidasubcontratoId()
    {
        return $this->numunidadmedidasubcontratoId;
    }

    /**
     * Set numfactorconversionsubcontrato
     *
     * @param float $numfactorconversionsubcontrato
     * @return Ordenesproduccionoperaciones
     */
    public function setNumfactorconversionsubcontrato($numfactorconversionsubcontrato)
    {
        $this->numfactorconversionsubcontrato = $numfactorconversionsubcontrato;

        return $this;
    }

    /**
     * Get numfactorconversionsubcontrato
     *
     * @return float 
     */
    public function getNumfactorconversionsubcontrato()
    {
        return $this->numfactorconversionsubcontrato;
    }

    /**
     * Set numalmacensubcontratoId
     *
     * @param integer $numalmacensubcontratoId
     * @return Ordenesproduccionoperaciones
     */
    public function setNumalmacensubcontratoId($numalmacensubcontratoId)
    {
        $this->numalmacensubcontratoId = $numalmacensubcontratoId;

        return $this;
    }

    /**
     * Get numalmacensubcontratoId
     *
     * @return integer 
     */
    public function getNumalmacensubcontratoId()
    {
        return $this->numalmacensubcontratoId;
    }

    /**
     * Set numcostounitariosubcontrato
     *
     * @param integer $numcostounitariosubcontrato
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostounitariosubcontrato($numcostounitariosubcontrato)
    {
        $this->numcostounitariosubcontrato = $numcostounitariosubcontrato;

        return $this;
    }

    /**
     * Get numcostounitariosubcontrato
     *
     * @return integer 
     */
    public function getNumcostounitariosubcontrato()
    {
        return $this->numcostounitariosubcontrato;
    }

    /**
     * Set nummonedasubcontratoId
     *
     * @param integer $nummonedasubcontratoId
     * @return Ordenesproduccionoperaciones
     */
    public function setNummonedasubcontratoId($nummonedasubcontratoId)
    {
        $this->nummonedasubcontratoId = $nummonedasubcontratoId;

        return $this;
    }

    /**
     * Get nummonedasubcontratoId
     *
     * @return integer 
     */
    public function getNummonedasubcontratoId()
    {
        return $this->nummonedasubcontratoId;
    }

    /**
     * Set numtipocambiosubcontrato
     *
     * @param float $numtipocambiosubcontrato
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtipocambiosubcontrato($numtipocambiosubcontrato)
    {
        $this->numtipocambiosubcontrato = $numtipocambiosubcontrato;

        return $this;
    }

    /**
     * Get numtipocambiosubcontrato
     *
     * @return float 
     */
    public function getNumtipocambiosubcontrato()
    {
        return $this->numtipocambiosubcontrato;
    }

    /**
     * Set numdiasentrega
     *
     * @param integer $numdiasentrega
     * @return Ordenesproduccionoperaciones
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
     * Set numtiempoestandarcola
     *
     * @param float $numtiempoestandarcola
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiempoestandarcola($numtiempoestandarcola)
    {
        $this->numtiempoestandarcola = $numtiempoestandarcola;

        return $this;
    }

    /**
     * Get numtiempoestandarcola
     *
     * @return float 
     */
    public function getNumtiempoestandarcola()
    {
        return $this->numtiempoestandarcola;
    }

    /**
     * Set numtiempoestandarpreparacionmaquina
     *
     * @param float $numtiempoestandarpreparacionmaquina
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiempoestandarpreparacionmaquina($numtiempoestandarpreparacionmaquina)
    {
        $this->numtiempoestandarpreparacionmaquina = $numtiempoestandarpreparacionmaquina;

        return $this;
    }

    /**
     * Get numtiempoestandarpreparacionmaquina
     *
     * @return float 
     */
    public function getNumtiempoestandarpreparacionmaquina()
    {
        return $this->numtiempoestandarpreparacionmaquina;
    }

    /**
     * Set numtiempoestandarpreparacionlabor
     *
     * @param float $numtiempoestandarpreparacionlabor
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiempoestandarpreparacionlabor($numtiempoestandarpreparacionlabor)
    {
        $this->numtiempoestandarpreparacionlabor = $numtiempoestandarpreparacionlabor;

        return $this;
    }

    /**
     * Get numtiempoestandarpreparacionlabor
     *
     * @return float 
     */
    public function getNumtiempoestandarpreparacionlabor()
    {
        return $this->numtiempoestandarpreparacionlabor;
    }

    /**
     * Set numtiempoestandarprocesomaquina
     *
     * @param float $numtiempoestandarprocesomaquina
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiempoestandarprocesomaquina($numtiempoestandarprocesomaquina)
    {
        $this->numtiempoestandarprocesomaquina = $numtiempoestandarprocesomaquina;

        return $this;
    }

    /**
     * Get numtiempoestandarprocesomaquina
     *
     * @return float 
     */
    public function getNumtiempoestandarprocesomaquina()
    {
        return $this->numtiempoestandarprocesomaquina;
    }

    /**
     * Set numtiempoestandarprocesolabor
     *
     * @param float $numtiempoestandarprocesolabor
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiempoestandarprocesolabor($numtiempoestandarprocesolabor)
    {
        $this->numtiempoestandarprocesolabor = $numtiempoestandarprocesolabor;

        return $this;
    }

    /**
     * Get numtiempoestandarprocesolabor
     *
     * @return float 
     */
    public function getNumtiempoestandarprocesolabor()
    {
        return $this->numtiempoestandarprocesolabor;
    }

    /**
     * Set numtiempoestandarespera
     *
     * @param float $numtiempoestandarespera
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiempoestandarespera($numtiempoestandarespera)
    {
        $this->numtiempoestandarespera = $numtiempoestandarespera;

        return $this;
    }

    /**
     * Get numtiempoestandarespera
     *
     * @return float 
     */
    public function getNumtiempoestandarespera()
    {
        return $this->numtiempoestandarespera;
    }

    /**
     * Set numtiempoestandartraslado
     *
     * @param float $numtiempoestandartraslado
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiempoestandartraslado($numtiempoestandartraslado)
    {
        $this->numtiempoestandartraslado = $numtiempoestandartraslado;

        return $this;
    }

    /**
     * Get numtiempoestandartraslado
     *
     * @return float 
     */
    public function getNumtiempoestandartraslado()
    {
        return $this->numtiempoestandartraslado;
    }

    /**
     * Set numcostoestandarcola
     *
     * @param integer $numcostoestandarcola
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostoestandarcola($numcostoestandarcola)
    {
        $this->numcostoestandarcola = $numcostoestandarcola;

        return $this;
    }

    /**
     * Get numcostoestandarcola
     *
     * @return integer 
     */
    public function getNumcostoestandarcola()
    {
        return $this->numcostoestandarcola;
    }

    /**
     * Set numcostoestandarpreparacionmaquina
     *
     * @param integer $numcostoestandarpreparacionmaquina
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostoestandarpreparacionmaquina($numcostoestandarpreparacionmaquina)
    {
        $this->numcostoestandarpreparacionmaquina = $numcostoestandarpreparacionmaquina;

        return $this;
    }

    /**
     * Get numcostoestandarpreparacionmaquina
     *
     * @return integer 
     */
    public function getNumcostoestandarpreparacionmaquina()
    {
        return $this->numcostoestandarpreparacionmaquina;
    }

    /**
     * Set numcostoestandarpreparacionlabor
     *
     * @param integer $numcostoestandarpreparacionlabor
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostoestandarpreparacionlabor($numcostoestandarpreparacionlabor)
    {
        $this->numcostoestandarpreparacionlabor = $numcostoestandarpreparacionlabor;

        return $this;
    }

    /**
     * Get numcostoestandarpreparacionlabor
     *
     * @return integer 
     */
    public function getNumcostoestandarpreparacionlabor()
    {
        return $this->numcostoestandarpreparacionlabor;
    }

    /**
     * Set numcostoestandarprocesomaquina
     *
     * @param integer $numcostoestandarprocesomaquina
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostoestandarprocesomaquina($numcostoestandarprocesomaquina)
    {
        $this->numcostoestandarprocesomaquina = $numcostoestandarprocesomaquina;

        return $this;
    }

    /**
     * Get numcostoestandarprocesomaquina
     *
     * @return integer 
     */
    public function getNumcostoestandarprocesomaquina()
    {
        return $this->numcostoestandarprocesomaquina;
    }

    /**
     * Set numcostoestandarprocesolabor
     *
     * @param integer $numcostoestandarprocesolabor
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostoestandarprocesolabor($numcostoestandarprocesolabor)
    {
        $this->numcostoestandarprocesolabor = $numcostoestandarprocesolabor;

        return $this;
    }

    /**
     * Get numcostoestandarprocesolabor
     *
     * @return integer 
     */
    public function getNumcostoestandarprocesolabor()
    {
        return $this->numcostoestandarprocesolabor;
    }

    /**
     * Set numcostoestandarespera
     *
     * @param integer $numcostoestandarespera
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostoestandarespera($numcostoestandarespera)
    {
        $this->numcostoestandarespera = $numcostoestandarespera;

        return $this;
    }

    /**
     * Get numcostoestandarespera
     *
     * @return integer 
     */
    public function getNumcostoestandarespera()
    {
        return $this->numcostoestandarespera;
    }

    /**
     * Set numcostoestandartraslado
     *
     * @param integer $numcostoestandartraslado
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostoestandartraslado($numcostoestandartraslado)
    {
        $this->numcostoestandartraslado = $numcostoestandartraslado;

        return $this;
    }

    /**
     * Get numcostoestandartraslado
     *
     * @return integer 
     */
    public function getNumcostoestandartraslado()
    {
        return $this->numcostoestandartraslado;
    }

    /**
     * Set numcostoestandargastoindirecto
     *
     * @param integer $numcostoestandargastoindirecto
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostoestandargastoindirecto($numcostoestandargastoindirecto)
    {
        $this->numcostoestandargastoindirecto = $numcostoestandargastoindirecto;

        return $this;
    }

    /**
     * Get numcostoestandargastoindirecto
     *
     * @return integer 
     */
    public function getNumcostoestandargastoindirecto()
    {
        return $this->numcostoestandargastoindirecto;
    }

    /**
     * Set numcostoestandarsubcontrato
     *
     * @param integer $numcostoestandarsubcontrato
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostoestandarsubcontrato($numcostoestandarsubcontrato)
    {
        $this->numcostoestandarsubcontrato = $numcostoestandarsubcontrato;

        return $this;
    }

    /**
     * Get numcostoestandarsubcontrato
     *
     * @return integer 
     */
    public function getNumcostoestandarsubcontrato()
    {
        return $this->numcostoestandarsubcontrato;
    }

    /**
     * Set numtiemporealcola
     *
     * @param float $numtiemporealcola
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiemporealcola($numtiemporealcola)
    {
        $this->numtiemporealcola = $numtiemporealcola;

        return $this;
    }

    /**
     * Get numtiemporealcola
     *
     * @return float 
     */
    public function getNumtiemporealcola()
    {
        return $this->numtiemporealcola;
    }

    /**
     * Set numtiemporealpreparacionmaquina
     *
     * @param float $numtiemporealpreparacionmaquina
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiemporealpreparacionmaquina($numtiemporealpreparacionmaquina)
    {
        $this->numtiemporealpreparacionmaquina = $numtiemporealpreparacionmaquina;

        return $this;
    }

    /**
     * Get numtiemporealpreparacionmaquina
     *
     * @return float 
     */
    public function getNumtiemporealpreparacionmaquina()
    {
        return $this->numtiemporealpreparacionmaquina;
    }

    /**
     * Set numtiemporealpreparacionlabor
     *
     * @param float $numtiemporealpreparacionlabor
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiemporealpreparacionlabor($numtiemporealpreparacionlabor)
    {
        $this->numtiemporealpreparacionlabor = $numtiemporealpreparacionlabor;

        return $this;
    }

    /**
     * Get numtiemporealpreparacionlabor
     *
     * @return float 
     */
    public function getNumtiemporealpreparacionlabor()
    {
        return $this->numtiemporealpreparacionlabor;
    }

    /**
     * Set numtiemporealprocesomaquina
     *
     * @param float $numtiemporealprocesomaquina
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiemporealprocesomaquina($numtiemporealprocesomaquina)
    {
        $this->numtiemporealprocesomaquina = $numtiemporealprocesomaquina;

        return $this;
    }

    /**
     * Get numtiemporealprocesomaquina
     *
     * @return float 
     */
    public function getNumtiemporealprocesomaquina()
    {
        return $this->numtiemporealprocesomaquina;
    }

    /**
     * Set numtiemporealprocesolabor
     *
     * @param float $numtiemporealprocesolabor
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiemporealprocesolabor($numtiemporealprocesolabor)
    {
        $this->numtiemporealprocesolabor = $numtiemporealprocesolabor;

        return $this;
    }

    /**
     * Get numtiemporealprocesolabor
     *
     * @return float 
     */
    public function getNumtiemporealprocesolabor()
    {
        return $this->numtiemporealprocesolabor;
    }

    /**
     * Set numtiemporealespera
     *
     * @param float $numtiemporealespera
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiemporealespera($numtiemporealespera)
    {
        $this->numtiemporealespera = $numtiemporealespera;

        return $this;
    }

    /**
     * Get numtiemporealespera
     *
     * @return float 
     */
    public function getNumtiemporealespera()
    {
        return $this->numtiemporealespera;
    }

    /**
     * Set numtiemporealtraslado
     *
     * @param float $numtiemporealtraslado
     * @return Ordenesproduccionoperaciones
     */
    public function setNumtiemporealtraslado($numtiemporealtraslado)
    {
        $this->numtiemporealtraslado = $numtiemporealtraslado;

        return $this;
    }

    /**
     * Get numtiemporealtraslado
     *
     * @return float 
     */
    public function getNumtiemporealtraslado()
    {
        return $this->numtiemporealtraslado;
    }

    /**
     * Set numcostorealcola
     *
     * @param integer $numcostorealcola
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostorealcola($numcostorealcola)
    {
        $this->numcostorealcola = $numcostorealcola;

        return $this;
    }

    /**
     * Get numcostorealcola
     *
     * @return integer 
     */
    public function getNumcostorealcola()
    {
        return $this->numcostorealcola;
    }

    /**
     * Set numcostorealpreparacionmaquina
     *
     * @param integer $numcostorealpreparacionmaquina
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostorealpreparacionmaquina($numcostorealpreparacionmaquina)
    {
        $this->numcostorealpreparacionmaquina = $numcostorealpreparacionmaquina;

        return $this;
    }

    /**
     * Get numcostorealpreparacionmaquina
     *
     * @return integer 
     */
    public function getNumcostorealpreparacionmaquina()
    {
        return $this->numcostorealpreparacionmaquina;
    }

    /**
     * Set numcostorealpreparacionlabor
     *
     * @param integer $numcostorealpreparacionlabor
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostorealpreparacionlabor($numcostorealpreparacionlabor)
    {
        $this->numcostorealpreparacionlabor = $numcostorealpreparacionlabor;

        return $this;
    }

    /**
     * Get numcostorealpreparacionlabor
     *
     * @return integer 
     */
    public function getNumcostorealpreparacionlabor()
    {
        return $this->numcostorealpreparacionlabor;
    }

    /**
     * Set numcostorealprocesomaquina
     *
     * @param integer $numcostorealprocesomaquina
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostorealprocesomaquina($numcostorealprocesomaquina)
    {
        $this->numcostorealprocesomaquina = $numcostorealprocesomaquina;

        return $this;
    }

    /**
     * Get numcostorealprocesomaquina
     *
     * @return integer 
     */
    public function getNumcostorealprocesomaquina()
    {
        return $this->numcostorealprocesomaquina;
    }

    /**
     * Set numcostorealprocesolabor
     *
     * @param integer $numcostorealprocesolabor
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostorealprocesolabor($numcostorealprocesolabor)
    {
        $this->numcostorealprocesolabor = $numcostorealprocesolabor;

        return $this;
    }

    /**
     * Get numcostorealprocesolabor
     *
     * @return integer 
     */
    public function getNumcostorealprocesolabor()
    {
        return $this->numcostorealprocesolabor;
    }

    /**
     * Set numcostorealespera
     *
     * @param integer $numcostorealespera
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostorealespera($numcostorealespera)
    {
        $this->numcostorealespera = $numcostorealespera;

        return $this;
    }

    /**
     * Get numcostorealespera
     *
     * @return integer 
     */
    public function getNumcostorealespera()
    {
        return $this->numcostorealespera;
    }

    /**
     * Set numcostorealtraslado
     *
     * @param integer $numcostorealtraslado
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostorealtraslado($numcostorealtraslado)
    {
        $this->numcostorealtraslado = $numcostorealtraslado;

        return $this;
    }

    /**
     * Get numcostorealtraslado
     *
     * @return integer 
     */
    public function getNumcostorealtraslado()
    {
        return $this->numcostorealtraslado;
    }

    /**
     * Set numcostorealgastoindirecto
     *
     * @param integer $numcostorealgastoindirecto
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostorealgastoindirecto($numcostorealgastoindirecto)
    {
        $this->numcostorealgastoindirecto = $numcostorealgastoindirecto;

        return $this;
    }

    /**
     * Get numcostorealgastoindirecto
     *
     * @return integer 
     */
    public function getNumcostorealgastoindirecto()
    {
        return $this->numcostorealgastoindirecto;
    }

    /**
     * Set numcostorealsubcontrato
     *
     * @param integer $numcostorealsubcontrato
     * @return Ordenesproduccionoperaciones
     */
    public function setNumcostorealsubcontrato($numcostorealsubcontrato)
    {
        $this->numcostorealsubcontrato = $numcostorealsubcontrato;

        return $this;
    }

    /**
     * Get numcostorealsubcontrato
     *
     * @return integer 
     */
    public function getNumcostorealsubcontrato()
    {
        return $this->numcostorealsubcontrato;
    }

    /**
     * Set meminstrucciones
     *
     * @param string $meminstrucciones
     * @return Ordenesproduccionoperaciones
     */
    public function setMeminstrucciones($meminstrucciones)
    {
        $this->meminstrucciones = $meminstrucciones;

        return $this;
    }

    /**
     * Get meminstrucciones
     *
     * @return string 
     */
    public function getMeminstrucciones()
    {
        return $this->meminstrucciones;
    }

    /**
     * Set logoperacionterminada
     *
     * @param boolean $logoperacionterminada
     * @return Ordenesproduccionoperaciones
     */
    public function setLogoperacionterminada($logoperacionterminada)
    {
        $this->logoperacionterminada = $logoperacionterminada;

        return $this;
    }

    /**
     * Get logoperacionterminada
     *
     * @return boolean 
     */
    public function getLogoperacionterminada()
    {
        return $this->logoperacionterminada;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Ordenesproduccionoperaciones
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
