<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionesdocumentos
 *
 * @ORM\Table(name="TransaccionesDocumentos", indexes={@ORM\Index(name="Indice_1", columns={"NumTipoOrden", "NumAlmacen_id", "StrTransaccion"}), @ORM\Index(name="Indice_2", columns={"DteTransaccion"}), @ORM\Index(name="Indice_3", columns={"NumEjercicio_id", "NumPeriodo"}), @ORM\Index(name="Indice_4", columns={"NumSemana"}), @ORM\Index(name="Indice_7", columns={"DteActualizacion"}), @ORM\Index(name="Indice_8", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Transaccionesdocumentos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumDocumento_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numdocumentoId = '0';

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
     * @ORM\Column(name="NumTipoOrden", type="integer", nullable=true)
     */
    private $numtipoorden = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=true)
     */
    private $numtipotransaccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDocumento", type="integer", nullable=true)
     */
    private $numtipodocumento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTransaccion", type="string", length=10, nullable=true)
     */
    private $strtransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTransaccion", type="datetime", nullable=true)
     */
    private $dtetransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTransaccion", type="datetime", nullable=true)
     */
    private $tmetransaccion;

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
     * @ORM\Column(name="NumConcepto_id", type="integer", nullable=true)
     */
    private $numconceptoId = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="LogAplicarImpuestos", type="boolean", nullable=true)
     */
    private $logaplicarimpuestos = '0';

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
     * @ORM\Column(name="NumTipoLenguajeImporte", type="integer", nullable=true)
     */
    private $numtipolenguajeimporte = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalRecibos", type="integer", nullable=true)
     */
    private $numtotalrecibos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPartidasInventarios", type="integer", nullable=true)
     */
    private $numtotalpartidasinventarios = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPartidasPagos", type="integer", nullable=true)
     */
    private $numtotalpartidaspagos = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalcantidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalPeso", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalpeso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_1", type="integer", nullable=true)
     */
    private $numtotaldescuento1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_2", type="integer", nullable=true)
     */
    private $numtotaldescuento2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_3", type="integer", nullable=true)
     */
    private $numtotaldescuento3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_4", type="integer", nullable=true)
     */
    private $numtotaldescuento4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_5", type="integer", nullable=true)
     */
    private $numtotaldescuento5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_6", type="integer", nullable=true)
     */
    private $numtotaldescuento6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_1", type="integer", nullable=true)
     */
    private $numtotalimpuesto1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_2", type="integer", nullable=true)
     */
    private $numtotalimpuesto2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_3", type="integer", nullable=true)
     */
    private $numtotalimpuesto3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_4", type="integer", nullable=true)
     */
    private $numtotalimpuesto4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_5", type="integer", nullable=true)
     */
    private $numtotalimpuesto5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_6", type="integer", nullable=true)
     */
    private $numtotalimpuesto6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_1", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_2", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_3", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_4", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_5", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_6", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotal", type="integer", nullable=true)
     */
    private $numtotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoCompra", type="integer", nullable=true)
     */
    private $numtotalcostocompra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoEstandar", type="integer", nullable=true)
     */
    private $numtotalcostoestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoPromedio", type="integer", nullable=true)
     */
    private $numtotalcostopromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoPEPS", type="integer", nullable=true)
     */
    private $numtotalcostopeps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoUEPS", type="integer", nullable=true)
     */
    private $numtotalcostoueps = '0';

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
     * Set numdocumentoId
     *
     * @param integer $numdocumentoId
     * @return Transaccionesdocumentos
     */
    public function setNumdocumentoId($numdocumentoId)
    {
        $this->numdocumentoId = $numdocumentoId;

        return $this;
    }

    /**
     * Get numdocumentoId
     *
     * @return integer 
     */
    public function getNumdocumentoId()
    {
        return $this->numdocumentoId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Transaccionesdocumentos
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
     * Set numtipoorden
     *
     * @param integer $numtipoorden
     * @return Transaccionesdocumentos
     */
    public function setNumtipoorden($numtipoorden)
    {
        $this->numtipoorden = $numtipoorden;

        return $this;
    }

    /**
     * Get numtipoorden
     *
     * @return integer 
     */
    public function getNumtipoorden()
    {
        return $this->numtipoorden;
    }

    /**
     * Set numtipotransaccion
     *
     * @param integer $numtipotransaccion
     * @return Transaccionesdocumentos
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
     * Set numtipodocumento
     *
     * @param integer $numtipodocumento
     * @return Transaccionesdocumentos
     */
    public function setNumtipodocumento($numtipodocumento)
    {
        $this->numtipodocumento = $numtipodocumento;

        return $this;
    }

    /**
     * Get numtipodocumento
     *
     * @return integer 
     */
    public function getNumtipodocumento()
    {
        return $this->numtipodocumento;
    }

    /**
     * Set strtransaccion
     *
     * @param string $strtransaccion
     * @return Transaccionesdocumentos
     */
    public function setStrtransaccion($strtransaccion)
    {
        $this->strtransaccion = $strtransaccion;

        return $this;
    }

    /**
     * Get strtransaccion
     *
     * @return string 
     */
    public function getStrtransaccion()
    {
        return $this->strtransaccion;
    }

    /**
     * Set dtetransaccion
     *
     * @param \DateTime $dtetransaccion
     * @return Transaccionesdocumentos
     */
    public function setDtetransaccion($dtetransaccion)
    {
        $this->dtetransaccion = $dtetransaccion;

        return $this;
    }

    /**
     * Get dtetransaccion
     *
     * @return \DateTime 
     */
    public function getDtetransaccion()
    {
        return $this->dtetransaccion;
    }

    /**
     * Set tmetransaccion
     *
     * @param \DateTime $tmetransaccion
     * @return Transaccionesdocumentos
     */
    public function setTmetransaccion($tmetransaccion)
    {
        $this->tmetransaccion = $tmetransaccion;

        return $this;
    }

    /**
     * Get tmetransaccion
     *
     * @return \DateTime 
     */
    public function getTmetransaccion()
    {
        return $this->tmetransaccion;
    }

    /**
     * Set dtecancelacion
     *
     * @param \DateTime $dtecancelacion
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * Set numconceptoId
     *
     * @param integer $numconceptoId
     * @return Transaccionesdocumentos
     */
    public function setNumconceptoId($numconceptoId)
    {
        $this->numconceptoId = $numconceptoId;

        return $this;
    }

    /**
     * Get numconceptoId
     *
     * @return integer 
     */
    public function getNumconceptoId()
    {
        return $this->numconceptoId;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * Set logaplicarimpuestos
     *
     * @param boolean $logaplicarimpuestos
     * @return Transaccionesdocumentos
     */
    public function setLogaplicarimpuestos($logaplicarimpuestos)
    {
        $this->logaplicarimpuestos = $logaplicarimpuestos;

        return $this;
    }

    /**
     * Get logaplicarimpuestos
     *
     * @return boolean 
     */
    public function getLogaplicarimpuestos()
    {
        return $this->logaplicarimpuestos;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * Set numtipolenguajeimporte
     *
     * @param integer $numtipolenguajeimporte
     * @return Transaccionesdocumentos
     */
    public function setNumtipolenguajeimporte($numtipolenguajeimporte)
    {
        $this->numtipolenguajeimporte = $numtipolenguajeimporte;

        return $this;
    }

    /**
     * Get numtipolenguajeimporte
     *
     * @return integer 
     */
    public function getNumtipolenguajeimporte()
    {
        return $this->numtipolenguajeimporte;
    }

    /**
     * Set numtotalrecibos
     *
     * @param integer $numtotalrecibos
     * @return Transaccionesdocumentos
     */
    public function setNumtotalrecibos($numtotalrecibos)
    {
        $this->numtotalrecibos = $numtotalrecibos;

        return $this;
    }

    /**
     * Get numtotalrecibos
     *
     * @return integer 
     */
    public function getNumtotalrecibos()
    {
        return $this->numtotalrecibos;
    }

    /**
     * Set numtotalpartidasinventarios
     *
     * @param integer $numtotalpartidasinventarios
     * @return Transaccionesdocumentos
     */
    public function setNumtotalpartidasinventarios($numtotalpartidasinventarios)
    {
        $this->numtotalpartidasinventarios = $numtotalpartidasinventarios;

        return $this;
    }

    /**
     * Get numtotalpartidasinventarios
     *
     * @return integer 
     */
    public function getNumtotalpartidasinventarios()
    {
        return $this->numtotalpartidasinventarios;
    }

    /**
     * Set numtotalpartidaspagos
     *
     * @param integer $numtotalpartidaspagos
     * @return Transaccionesdocumentos
     */
    public function setNumtotalpartidaspagos($numtotalpartidaspagos)
    {
        $this->numtotalpartidaspagos = $numtotalpartidaspagos;

        return $this;
    }

    /**
     * Get numtotalpartidaspagos
     *
     * @return integer 
     */
    public function getNumtotalpartidaspagos()
    {
        return $this->numtotalpartidaspagos;
    }

    /**
     * Set numtotalcantidad
     *
     * @param float $numtotalcantidad
     * @return Transaccionesdocumentos
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
     * Set numtotalpeso
     *
     * @param float $numtotalpeso
     * @return Transaccionesdocumentos
     */
    public function setNumtotalpeso($numtotalpeso)
    {
        $this->numtotalpeso = $numtotalpeso;

        return $this;
    }

    /**
     * Get numtotalpeso
     *
     * @return float 
     */
    public function getNumtotalpeso()
    {
        return $this->numtotalpeso;
    }

    /**
     * Set numtotaldescuento1
     *
     * @param integer $numtotaldescuento1
     * @return Transaccionesdocumentos
     */
    public function setNumtotaldescuento1($numtotaldescuento1)
    {
        $this->numtotaldescuento1 = $numtotaldescuento1;

        return $this;
    }

    /**
     * Get numtotaldescuento1
     *
     * @return integer 
     */
    public function getNumtotaldescuento1()
    {
        return $this->numtotaldescuento1;
    }

    /**
     * Set numtotaldescuento2
     *
     * @param integer $numtotaldescuento2
     * @return Transaccionesdocumentos
     */
    public function setNumtotaldescuento2($numtotaldescuento2)
    {
        $this->numtotaldescuento2 = $numtotaldescuento2;

        return $this;
    }

    /**
     * Get numtotaldescuento2
     *
     * @return integer 
     */
    public function getNumtotaldescuento2()
    {
        return $this->numtotaldescuento2;
    }

    /**
     * Set numtotaldescuento3
     *
     * @param integer $numtotaldescuento3
     * @return Transaccionesdocumentos
     */
    public function setNumtotaldescuento3($numtotaldescuento3)
    {
        $this->numtotaldescuento3 = $numtotaldescuento3;

        return $this;
    }

    /**
     * Get numtotaldescuento3
     *
     * @return integer 
     */
    public function getNumtotaldescuento3()
    {
        return $this->numtotaldescuento3;
    }

    /**
     * Set numtotaldescuento4
     *
     * @param integer $numtotaldescuento4
     * @return Transaccionesdocumentos
     */
    public function setNumtotaldescuento4($numtotaldescuento4)
    {
        $this->numtotaldescuento4 = $numtotaldescuento4;

        return $this;
    }

    /**
     * Get numtotaldescuento4
     *
     * @return integer 
     */
    public function getNumtotaldescuento4()
    {
        return $this->numtotaldescuento4;
    }

    /**
     * Set numtotaldescuento5
     *
     * @param integer $numtotaldescuento5
     * @return Transaccionesdocumentos
     */
    public function setNumtotaldescuento5($numtotaldescuento5)
    {
        $this->numtotaldescuento5 = $numtotaldescuento5;

        return $this;
    }

    /**
     * Get numtotaldescuento5
     *
     * @return integer 
     */
    public function getNumtotaldescuento5()
    {
        return $this->numtotaldescuento5;
    }

    /**
     * Set numtotaldescuento6
     *
     * @param integer $numtotaldescuento6
     * @return Transaccionesdocumentos
     */
    public function setNumtotaldescuento6($numtotaldescuento6)
    {
        $this->numtotaldescuento6 = $numtotaldescuento6;

        return $this;
    }

    /**
     * Get numtotaldescuento6
     *
     * @return integer 
     */
    public function getNumtotaldescuento6()
    {
        return $this->numtotaldescuento6;
    }

    /**
     * Set numtotalimpuesto1
     *
     * @param integer $numtotalimpuesto1
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuesto1($numtotalimpuesto1)
    {
        $this->numtotalimpuesto1 = $numtotalimpuesto1;

        return $this;
    }

    /**
     * Get numtotalimpuesto1
     *
     * @return integer 
     */
    public function getNumtotalimpuesto1()
    {
        return $this->numtotalimpuesto1;
    }

    /**
     * Set numtotalimpuesto2
     *
     * @param integer $numtotalimpuesto2
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuesto2($numtotalimpuesto2)
    {
        $this->numtotalimpuesto2 = $numtotalimpuesto2;

        return $this;
    }

    /**
     * Get numtotalimpuesto2
     *
     * @return integer 
     */
    public function getNumtotalimpuesto2()
    {
        return $this->numtotalimpuesto2;
    }

    /**
     * Set numtotalimpuesto3
     *
     * @param integer $numtotalimpuesto3
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuesto3($numtotalimpuesto3)
    {
        $this->numtotalimpuesto3 = $numtotalimpuesto3;

        return $this;
    }

    /**
     * Get numtotalimpuesto3
     *
     * @return integer 
     */
    public function getNumtotalimpuesto3()
    {
        return $this->numtotalimpuesto3;
    }

    /**
     * Set numtotalimpuesto4
     *
     * @param integer $numtotalimpuesto4
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuesto4($numtotalimpuesto4)
    {
        $this->numtotalimpuesto4 = $numtotalimpuesto4;

        return $this;
    }

    /**
     * Get numtotalimpuesto4
     *
     * @return integer 
     */
    public function getNumtotalimpuesto4()
    {
        return $this->numtotalimpuesto4;
    }

    /**
     * Set numtotalimpuesto5
     *
     * @param integer $numtotalimpuesto5
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuesto5($numtotalimpuesto5)
    {
        $this->numtotalimpuesto5 = $numtotalimpuesto5;

        return $this;
    }

    /**
     * Get numtotalimpuesto5
     *
     * @return integer 
     */
    public function getNumtotalimpuesto5()
    {
        return $this->numtotalimpuesto5;
    }

    /**
     * Set numtotalimpuesto6
     *
     * @param integer $numtotalimpuesto6
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuesto6($numtotalimpuesto6)
    {
        $this->numtotalimpuesto6 = $numtotalimpuesto6;

        return $this;
    }

    /**
     * Get numtotalimpuesto6
     *
     * @return integer 
     */
    public function getNumtotalimpuesto6()
    {
        return $this->numtotalimpuesto6;
    }

    /**
     * Set numtotalimpuestoretenido1
     *
     * @param integer $numtotalimpuestoretenido1
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuestoretenido1($numtotalimpuestoretenido1)
    {
        $this->numtotalimpuestoretenido1 = $numtotalimpuestoretenido1;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido1
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido1()
    {
        return $this->numtotalimpuestoretenido1;
    }

    /**
     * Set numtotalimpuestoretenido2
     *
     * @param integer $numtotalimpuestoretenido2
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuestoretenido2($numtotalimpuestoretenido2)
    {
        $this->numtotalimpuestoretenido2 = $numtotalimpuestoretenido2;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido2
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido2()
    {
        return $this->numtotalimpuestoretenido2;
    }

    /**
     * Set numtotalimpuestoretenido3
     *
     * @param integer $numtotalimpuestoretenido3
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuestoretenido3($numtotalimpuestoretenido3)
    {
        $this->numtotalimpuestoretenido3 = $numtotalimpuestoretenido3;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido3
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido3()
    {
        return $this->numtotalimpuestoretenido3;
    }

    /**
     * Set numtotalimpuestoretenido4
     *
     * @param integer $numtotalimpuestoretenido4
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuestoretenido4($numtotalimpuestoretenido4)
    {
        $this->numtotalimpuestoretenido4 = $numtotalimpuestoretenido4;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido4
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido4()
    {
        return $this->numtotalimpuestoretenido4;
    }

    /**
     * Set numtotalimpuestoretenido5
     *
     * @param integer $numtotalimpuestoretenido5
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuestoretenido5($numtotalimpuestoretenido5)
    {
        $this->numtotalimpuestoretenido5 = $numtotalimpuestoretenido5;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido5
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido5()
    {
        return $this->numtotalimpuestoretenido5;
    }

    /**
     * Set numtotalimpuestoretenido6
     *
     * @param integer $numtotalimpuestoretenido6
     * @return Transaccionesdocumentos
     */
    public function setNumtotalimpuestoretenido6($numtotalimpuestoretenido6)
    {
        $this->numtotalimpuestoretenido6 = $numtotalimpuestoretenido6;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido6
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido6()
    {
        return $this->numtotalimpuestoretenido6;
    }

    /**
     * Set numtotal
     *
     * @param integer $numtotal
     * @return Transaccionesdocumentos
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
     * Set numtotalcostocompra
     *
     * @param integer $numtotalcostocompra
     * @return Transaccionesdocumentos
     */
    public function setNumtotalcostocompra($numtotalcostocompra)
    {
        $this->numtotalcostocompra = $numtotalcostocompra;

        return $this;
    }

    /**
     * Get numtotalcostocompra
     *
     * @return integer 
     */
    public function getNumtotalcostocompra()
    {
        return $this->numtotalcostocompra;
    }

    /**
     * Set numtotalcostoestandar
     *
     * @param integer $numtotalcostoestandar
     * @return Transaccionesdocumentos
     */
    public function setNumtotalcostoestandar($numtotalcostoestandar)
    {
        $this->numtotalcostoestandar = $numtotalcostoestandar;

        return $this;
    }

    /**
     * Get numtotalcostoestandar
     *
     * @return integer 
     */
    public function getNumtotalcostoestandar()
    {
        return $this->numtotalcostoestandar;
    }

    /**
     * Set numtotalcostopromedio
     *
     * @param integer $numtotalcostopromedio
     * @return Transaccionesdocumentos
     */
    public function setNumtotalcostopromedio($numtotalcostopromedio)
    {
        $this->numtotalcostopromedio = $numtotalcostopromedio;

        return $this;
    }

    /**
     * Get numtotalcostopromedio
     *
     * @return integer 
     */
    public function getNumtotalcostopromedio()
    {
        return $this->numtotalcostopromedio;
    }

    /**
     * Set numtotalcostopeps
     *
     * @param integer $numtotalcostopeps
     * @return Transaccionesdocumentos
     */
    public function setNumtotalcostopeps($numtotalcostopeps)
    {
        $this->numtotalcostopeps = $numtotalcostopeps;

        return $this;
    }

    /**
     * Get numtotalcostopeps
     *
     * @return integer 
     */
    public function getNumtotalcostopeps()
    {
        return $this->numtotalcostopeps;
    }

    /**
     * Set numtotalcostoueps
     *
     * @param integer $numtotalcostoueps
     * @return Transaccionesdocumentos
     */
    public function setNumtotalcostoueps($numtotalcostoueps)
    {
        $this->numtotalcostoueps = $numtotalcostoueps;

        return $this;
    }

    /**
     * Get numtotalcostoueps
     *
     * @return integer 
     */
    public function getNumtotalcostoueps()
    {
        return $this->numtotalcostoueps;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Transaccionesdocumentos
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
     * @return Transaccionesdocumentos
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
