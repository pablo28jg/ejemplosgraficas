<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordenesproduccion
 *
 * @ORM\Table(name="OrdenesProduccion", indexes={@ORM\Index(name="Indice_1", columns={"NumOrdenProduccionPadre_id", "NumAlmacen_id"}), @ORM\Index(name="Indice_2", columns={"StrDocumento"}), @ORM\Index(name="Indice_3", columns={"NumEjercicio_id", "NumPeriodo", "NumSemana"}), @ORM\Index(name="Indice_4", columns={"NumAlmacen_id", "NumOrdenProduccionPadre_id"}), @ORM\Index(name="Indice_5", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_6", columns={"NumTipoEstado", "NumTipoEstadoProduccion"}), @ORM\Index(name="Indice_7", columns={"NumAlmacen_id", "StrDocumento", "NumOrdenProduccionPadre_id"}), @ORM\Index(name="Indice_8", columns={"DteProgramada", "NumTipoEstadoProduccion", "NumTipoEstado", "NumOrdenProduccionPadre_id"})})
 * @ORM\Entity
 */
class Ordenesproduccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenProduccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numordenproduccionId = '0';

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
     * @ORM\Column(name="NumOrdenProduccionPadre_id", type="integer", nullable=true)
     */
    private $numordenproduccionpadreId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDocumento", type="string", length=15, nullable=true)
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
     * @var \DateTime
     *
     * @ORM\Column(name="DteCancelacion", type="datetime", nullable=true)
     */
    private $dtecancelacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeCancelacion", type="datetime", nullable=true)
     */
    private $tmecancelacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=true)
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodo", type="integer", nullable=true)
     */
    private $numperiodo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSemana", type="integer", nullable=true)
     */
    private $numsemana = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivoOrdenVenta_id", type="integer", nullable=true)
     */
    private $numconsecutivoordenventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenVenta_id", type="integer", nullable=true)
     */
    private $numordenventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenOrdenVenta_id", type="integer", nullable=true)
     */
    private $numalmacenordenventaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrOrdenVenta", type="string", length=10, nullable=true)
     */
    private $strordenventa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoOrdenVenta", type="integer", nullable=true)
     */
    private $numtipoordenventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCliente_id", type="integer", nullable=true)
     */
    private $numclienteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClientePagador_id", type="integer", nullable=true)
     */
    private $numclientepagadorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContacto_id", type="integer", nullable=true)
     */
    private $numcontactoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProyecto_id", type="integer", nullable=true)
     */
    private $numproyectoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_1_id", type="integer", nullable=true)
     */
    private $numvendedor1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_2_id", type="integer", nullable=true)
     */
    private $numvendedor2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_5_id", type="integer", nullable=true)
     */
    private $numvendedor5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_6_id", type="integer", nullable=true)
     */
    private $numvendedor6Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumResponsable_id", type="integer", nullable=true)
     */
    private $numresponsableId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImagen_id", type="integer", nullable=true)
     */
    private $numimagenId = '0';

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
     * @var string
     *
     * @ORM\Column(name="StrLote_ky", type="string", length=20, nullable=true)
     */
    private $strloteKy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogEsModelo", type="boolean", nullable=true)
     */
    private $logesmodelo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrListaMaterial_ky", type="string", length=20, nullable=true)
     */
    private $strlistamaterialKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRutaOperacion_id", type="integer", nullable=true)
     */
    private $numrutaoperacionId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadOrdenada", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadordenada = '0';

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
     * @ORM\Column(name="NumCantidadEntregada", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentregada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenProductoTerminado_id", type="integer", nullable=true)
     */
    private $numalmacenproductoterminadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrioridad", type="integer", nullable=true)
     */
    private $numprioridad = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteRequerida", type="datetime", nullable=true)
     */
    private $dterequerida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteProgramada", type="datetime", nullable=true)
     */
    private $dteprogramada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteLiberacion", type="datetime", nullable=true)
     */
    private $dteliberacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeLiberacion", type="datetime", nullable=true)
     */
    private $tmeliberacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminacion", type="datetime", nullable=true)
     */
    private $dteterminacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTerminacion", type="datetime", nullable=true)
     */
    private $tmeterminacion;

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
     * @ORM\Column(name="NumCostoEstandarUnitario", type="integer", nullable=true)
     */
    private $numcostoestandarunitario = '0';

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
     * @ORM\Column(name="NumCostoRealUnitario", type="integer", nullable=true)
     */
    private $numcostorealunitario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_id", type="integer", nullable=true)
     */
    private $numclasificacionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

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
     * @ORM\Column(name="NumTipoEstadoProduccion", type="integer", nullable=true)
     */
    private $numtipoestadoproduccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Set numordenproduccionId
     *
     * @param integer $numordenproduccionId
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * Set numordenproduccionpadreId
     *
     * @param integer $numordenproduccionpadreId
     * @return Ordenesproduccion
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
     * Set strdocumento
     *
     * @param string $strdocumento
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * Set dtecancelacion
     *
     * @param \DateTime $dtecancelacion
     * @return Ordenesproduccion
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
     * Set tmecancelacion
     *
     * @param \DateTime $tmecancelacion
     * @return Ordenesproduccion
     */
    public function setTmecancelacion($tmecancelacion)
    {
        $this->tmecancelacion = $tmecancelacion;

        return $this;
    }

    /**
     * Get tmecancelacion
     *
     * @return \DateTime 
     */
    public function getTmecancelacion()
    {
        return $this->tmecancelacion;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Ordenesproduccion
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
     * Set numperiodo
     *
     * @param integer $numperiodo
     * @return Ordenesproduccion
     */
    public function setNumperiodo($numperiodo)
    {
        $this->numperiodo = $numperiodo;

        return $this;
    }

    /**
     * Get numperiodo
     *
     * @return integer 
     */
    public function getNumperiodo()
    {
        return $this->numperiodo;
    }

    /**
     * Set numsemana
     *
     * @param integer $numsemana
     * @return Ordenesproduccion
     */
    public function setNumsemana($numsemana)
    {
        $this->numsemana = $numsemana;

        return $this;
    }

    /**
     * Get numsemana
     *
     * @return integer 
     */
    public function getNumsemana()
    {
        return $this->numsemana;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Ordenesproduccion
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
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Ordenesproduccion
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
     * Set numconsecutivoordenventaId
     *
     * @param integer $numconsecutivoordenventaId
     * @return Ordenesproduccion
     */
    public function setNumconsecutivoordenventaId($numconsecutivoordenventaId)
    {
        $this->numconsecutivoordenventaId = $numconsecutivoordenventaId;

        return $this;
    }

    /**
     * Get numconsecutivoordenventaId
     *
     * @return integer 
     */
    public function getNumconsecutivoordenventaId()
    {
        return $this->numconsecutivoordenventaId;
    }

    /**
     * Set numordenventaId
     *
     * @param integer $numordenventaId
     * @return Ordenesproduccion
     */
    public function setNumordenventaId($numordenventaId)
    {
        $this->numordenventaId = $numordenventaId;

        return $this;
    }

    /**
     * Get numordenventaId
     *
     * @return integer 
     */
    public function getNumordenventaId()
    {
        return $this->numordenventaId;
    }

    /**
     * Set numalmacenordenventaId
     *
     * @param integer $numalmacenordenventaId
     * @return Ordenesproduccion
     */
    public function setNumalmacenordenventaId($numalmacenordenventaId)
    {
        $this->numalmacenordenventaId = $numalmacenordenventaId;

        return $this;
    }

    /**
     * Get numalmacenordenventaId
     *
     * @return integer 
     */
    public function getNumalmacenordenventaId()
    {
        return $this->numalmacenordenventaId;
    }

    /**
     * Set strordenventa
     *
     * @param string $strordenventa
     * @return Ordenesproduccion
     */
    public function setStrordenventa($strordenventa)
    {
        $this->strordenventa = $strordenventa;

        return $this;
    }

    /**
     * Get strordenventa
     *
     * @return string 
     */
    public function getStrordenventa()
    {
        return $this->strordenventa;
    }

    /**
     * Set numtipoordenventa
     *
     * @param integer $numtipoordenventa
     * @return Ordenesproduccion
     */
    public function setNumtipoordenventa($numtipoordenventa)
    {
        $this->numtipoordenventa = $numtipoordenventa;

        return $this;
    }

    /**
     * Get numtipoordenventa
     *
     * @return integer 
     */
    public function getNumtipoordenventa()
    {
        return $this->numtipoordenventa;
    }

    /**
     * Set numclienteId
     *
     * @param integer $numclienteId
     * @return Ordenesproduccion
     */
    public function setNumclienteId($numclienteId)
    {
        $this->numclienteId = $numclienteId;

        return $this;
    }

    /**
     * Get numclienteId
     *
     * @return integer 
     */
    public function getNumclienteId()
    {
        return $this->numclienteId;
    }

    /**
     * Set numclientepagadorId
     *
     * @param integer $numclientepagadorId
     * @return Ordenesproduccion
     */
    public function setNumclientepagadorId($numclientepagadorId)
    {
        $this->numclientepagadorId = $numclientepagadorId;

        return $this;
    }

    /**
     * Get numclientepagadorId
     *
     * @return integer 
     */
    public function getNumclientepagadorId()
    {
        return $this->numclientepagadorId;
    }

    /**
     * Set numcontactoId
     *
     * @param integer $numcontactoId
     * @return Ordenesproduccion
     */
    public function setNumcontactoId($numcontactoId)
    {
        $this->numcontactoId = $numcontactoId;

        return $this;
    }

    /**
     * Get numcontactoId
     *
     * @return integer 
     */
    public function getNumcontactoId()
    {
        return $this->numcontactoId;
    }

    /**
     * Set numproyectoId
     *
     * @param integer $numproyectoId
     * @return Ordenesproduccion
     */
    public function setNumproyectoId($numproyectoId)
    {
        $this->numproyectoId = $numproyectoId;

        return $this;
    }

    /**
     * Get numproyectoId
     *
     * @return integer 
     */
    public function getNumproyectoId()
    {
        return $this->numproyectoId;
    }

    /**
     * Set numvendedor1Id
     *
     * @param integer $numvendedor1Id
     * @return Ordenesproduccion
     */
    public function setNumvendedor1Id($numvendedor1Id)
    {
        $this->numvendedor1Id = $numvendedor1Id;

        return $this;
    }

    /**
     * Get numvendedor1Id
     *
     * @return integer 
     */
    public function getNumvendedor1Id()
    {
        return $this->numvendedor1Id;
    }

    /**
     * Set numvendedor2Id
     *
     * @param integer $numvendedor2Id
     * @return Ordenesproduccion
     */
    public function setNumvendedor2Id($numvendedor2Id)
    {
        $this->numvendedor2Id = $numvendedor2Id;

        return $this;
    }

    /**
     * Get numvendedor2Id
     *
     * @return integer 
     */
    public function getNumvendedor2Id()
    {
        return $this->numvendedor2Id;
    }

    /**
     * Set numvendedor5Id
     *
     * @param integer $numvendedor5Id
     * @return Ordenesproduccion
     */
    public function setNumvendedor5Id($numvendedor5Id)
    {
        $this->numvendedor5Id = $numvendedor5Id;

        return $this;
    }

    /**
     * Get numvendedor5Id
     *
     * @return integer 
     */
    public function getNumvendedor5Id()
    {
        return $this->numvendedor5Id;
    }

    /**
     * Set numvendedor6Id
     *
     * @param integer $numvendedor6Id
     * @return Ordenesproduccion
     */
    public function setNumvendedor6Id($numvendedor6Id)
    {
        $this->numvendedor6Id = $numvendedor6Id;

        return $this;
    }

    /**
     * Get numvendedor6Id
     *
     * @return integer 
     */
    public function getNumvendedor6Id()
    {
        return $this->numvendedor6Id;
    }

    /**
     * Set numresponsableId
     *
     * @param integer $numresponsableId
     * @return Ordenesproduccion
     */
    public function setNumresponsableId($numresponsableId)
    {
        $this->numresponsableId = $numresponsableId;

        return $this;
    }

    /**
     * Get numresponsableId
     *
     * @return integer 
     */
    public function getNumresponsableId()
    {
        return $this->numresponsableId;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Ordenesproduccion
     */
    public function setStrreferencia($strreferencia)
    {
        $this->strreferencia = $strreferencia;

        return $this;
    }

    /**
     * Get strreferencia
     *
     * @return string 
     */
    public function getStrreferencia()
    {
        return $this->strreferencia;
    }

    /**
     * Set numimagenId
     *
     * @param integer $numimagenId
     * @return Ordenesproduccion
     */
    public function setNumimagenId($numimagenId)
    {
        $this->numimagenId = $numimagenId;

        return $this;
    }

    /**
     * Get numimagenId
     *
     * @return integer 
     */
    public function getNumimagenId()
    {
        return $this->numimagenId;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * Set strloteKy
     *
     * @param string $strloteKy
     * @return Ordenesproduccion
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
     * Set logesmodelo
     *
     * @param boolean $logesmodelo
     * @return Ordenesproduccion
     */
    public function setLogesmodelo($logesmodelo)
    {
        $this->logesmodelo = $logesmodelo;

        return $this;
    }

    /**
     * Get logesmodelo
     *
     * @return boolean 
     */
    public function getLogesmodelo()
    {
        return $this->logesmodelo;
    }

    /**
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Ordenesproduccion
     */
    public function setNumcaracteristicaId($numcaracteristicaId)
    {
        $this->numcaracteristicaId = $numcaracteristicaId;

        return $this;
    }

    /**
     * Get numcaracteristicaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaId()
    {
        return $this->numcaracteristicaId;
    }

    /**
     * Set strlistamaterialKy
     *
     * @param string $strlistamaterialKy
     * @return Ordenesproduccion
     */
    public function setStrlistamaterialKy($strlistamaterialKy)
    {
        $this->strlistamaterialKy = $strlistamaterialKy;

        return $this;
    }

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
     * Set numrutaoperacionId
     *
     * @param integer $numrutaoperacionId
     * @return Ordenesproduccion
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
     * Set numcantidadordenada
     *
     * @param float $numcantidadordenada
     * @return Ordenesproduccion
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
     * Set numcantidadterminada
     *
     * @param float $numcantidadterminada
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * Set numcantidadentregada
     *
     * @param float $numcantidadentregada
     * @return Ordenesproduccion
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
     * Set numalmacenproductoterminadoId
     *
     * @param integer $numalmacenproductoterminadoId
     * @return Ordenesproduccion
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
     * Set numprioridad
     *
     * @param integer $numprioridad
     * @return Ordenesproduccion
     */
    public function setNumprioridad($numprioridad)
    {
        $this->numprioridad = $numprioridad;

        return $this;
    }

    /**
     * Get numprioridad
     *
     * @return integer 
     */
    public function getNumprioridad()
    {
        return $this->numprioridad;
    }

    /**
     * Set dterequerida
     *
     * @param \DateTime $dterequerida
     * @return Ordenesproduccion
     */
    public function setDterequerida($dterequerida)
    {
        $this->dterequerida = $dterequerida;

        return $this;
    }

    /**
     * Get dterequerida
     *
     * @return \DateTime 
     */
    public function getDterequerida()
    {
        return $this->dterequerida;
    }

    /**
     * Set dteprogramada
     *
     * @param \DateTime $dteprogramada
     * @return Ordenesproduccion
     */
    public function setDteprogramada($dteprogramada)
    {
        $this->dteprogramada = $dteprogramada;

        return $this;
    }

    /**
     * Get dteprogramada
     *
     * @return \DateTime 
     */
    public function getDteprogramada()
    {
        return $this->dteprogramada;
    }

    /**
     * Set dteliberacion
     *
     * @param \DateTime $dteliberacion
     * @return Ordenesproduccion
     */
    public function setDteliberacion($dteliberacion)
    {
        $this->dteliberacion = $dteliberacion;

        return $this;
    }

    /**
     * Get dteliberacion
     *
     * @return \DateTime 
     */
    public function getDteliberacion()
    {
        return $this->dteliberacion;
    }

    /**
     * Set tmeliberacion
     *
     * @param \DateTime $tmeliberacion
     * @return Ordenesproduccion
     */
    public function setTmeliberacion($tmeliberacion)
    {
        $this->tmeliberacion = $tmeliberacion;

        return $this;
    }

    /**
     * Get tmeliberacion
     *
     * @return \DateTime 
     */
    public function getTmeliberacion()
    {
        return $this->tmeliberacion;
    }

    /**
     * Set dteterminacion
     *
     * @param \DateTime $dteterminacion
     * @return Ordenesproduccion
     */
    public function setDteterminacion($dteterminacion)
    {
        $this->dteterminacion = $dteterminacion;

        return $this;
    }

    /**
     * Get dteterminacion
     *
     * @return \DateTime 
     */
    public function getDteterminacion()
    {
        return $this->dteterminacion;
    }

    /**
     * Set tmeterminacion
     *
     * @param \DateTime $tmeterminacion
     * @return Ordenesproduccion
     */
    public function setTmeterminacion($tmeterminacion)
    {
        $this->tmeterminacion = $tmeterminacion;

        return $this;
    }

    /**
     * Get tmeterminacion
     *
     * @return \DateTime 
     */
    public function getTmeterminacion()
    {
        return $this->tmeterminacion;
    }

    /**
     * Set numtiempoestandarcola
     *
     * @param float $numtiempoestandarcola
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * Set numcostoestandarcompra
     *
     * @param integer $numcostoestandarcompra
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * Set numcostoestandarunitario
     *
     * @param integer $numcostoestandarunitario
     * @return Ordenesproduccion
     */
    public function setNumcostoestandarunitario($numcostoestandarunitario)
    {
        $this->numcostoestandarunitario = $numcostoestandarunitario;

        return $this;
    }

    /**
     * Get numcostoestandarunitario
     *
     * @return integer 
     */
    public function getNumcostoestandarunitario()
    {
        return $this->numcostoestandarunitario;
    }

    /**
     * Set numtiemporealcola
     *
     * @param float $numtiemporealcola
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * Set numcostorealcompra
     *
     * @param integer $numcostorealcompra
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * Set numcostorealunitario
     *
     * @param integer $numcostorealunitario
     * @return Ordenesproduccion
     */
    public function setNumcostorealunitario($numcostorealunitario)
    {
        $this->numcostorealunitario = $numcostorealunitario;

        return $this;
    }

    /**
     * Get numcostorealunitario
     *
     * @return integer 
     */
    public function getNumcostorealunitario()
    {
        return $this->numcostorealunitario;
    }

    /**
     * Set numclasificacionId
     *
     * @param integer $numclasificacionId
     * @return Ordenesproduccion
     */
    public function setNumclasificacionId($numclasificacionId)
    {
        $this->numclasificacionId = $numclasificacionId;

        return $this;
    }

    /**
     * Get numclasificacionId
     *
     * @return integer 
     */
    public function getNumclasificacionId()
    {
        return $this->numclasificacionId;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Ordenesproduccion
     */
    public function setMemobservaciones($memobservaciones)
    {
        $this->memobservaciones = $memobservaciones;

        return $this;
    }

    /**
     * Get memobservaciones
     *
     * @return string 
     */
    public function getMemobservaciones()
    {
        return $this->memobservaciones;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * @return Ordenesproduccion
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
     * Set numtipoestadoproduccion
     *
     * @param integer $numtipoestadoproduccion
     * @return Ordenesproduccion
     */
    public function setNumtipoestadoproduccion($numtipoestadoproduccion)
    {
        $this->numtipoestadoproduccion = $numtipoestadoproduccion;

        return $this;
    }

    /**
     * Get numtipoestadoproduccion
     *
     * @return integer 
     */
    public function getNumtipoestadoproduccion()
    {
        return $this->numtipoestadoproduccion;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Ordenesproduccion
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

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Ordenesproduccion
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
