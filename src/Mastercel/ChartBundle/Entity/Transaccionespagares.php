<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionespagares
 *
 * @ORM\Table(name="TransaccionesPagares", indexes={@ORM\Index(name="Indice_1", columns={"StrTransaccion", "NumSerie"}), @ORM\Index(name="Indice_2", columns={"NumAlmacen_id", "StrTransaccion", "NumSerie"}), @ORM\Index(name="Indice_3", columns={"DteTransaccion", "TmeTransaccion"}), @ORM\Index(name="Indice_4", columns={"DteCancelacion", "TmeCancelacion"}), @ORM\Index(name="Indice_5", columns={"NumEjercicio_id", "NumPeriodo"}), @ORM\Index(name="Indice_6", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_7", columns={"NumEntidad_id"}), @ORM\Index(name="Indice_8", columns={"NumMoneda_id"}), @ORM\Index(name="Indice_9", columns={"NumSaldo"}), @ORM\Index(name="Indice_10", columns={"NumTransaccionOrigen_id", "NumAlmacenOrigen_id", "NumTipoTransaccionOrigen"}), @ORM\Index(name="Indice_11", columns={"NumTransaccionReversion_id", "NumAlmacenReversion_id", "NumTipoTransaccionReversion"}), @ORM\Index(name="Indice_12", columns={"DteVencimiento"}), @ORM\Index(name="Indice_13", columns={"NumTipoImpresionDocumento"}), @ORM\Index(name="Indice_14", columns={"NumTipoEnvioDocumento"}), @ORM\Index(name="Indice_15", columns={"NumCreadoPor_id"}), @ORM\Index(name="Indice_16", columns={"DteCreacion"}), @ORM\Index(name="Indice_17", columns={"NumActualizadoPor_id"}), @ORM\Index(name="Indice_18", columns={"DteActualizacion"}), @ORM\Index(name="Indice_19", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_20", columns={"NumTipoEstado"})})
 * @ORM\Entity
 */
class Transaccionespagares
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionId = '0';

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
     * @ORM\Column(name="StrTransaccion", type="string", length=10, nullable=true)
     */
    private $strtransaccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSerie", type="integer", nullable=true)
     */
    private $numserie = '0';

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
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

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
     * @ORM\Column(name="NumTotalDocumentos", type="integer", nullable=true)
     */
    private $numtotaldocumentos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotal", type="integer", nullable=true)
     */
    private $numtotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo", type="integer", nullable=true)
     */
    private $numsaldo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionOrigen_id", type="integer", nullable=true)
     */
    private $numtransaccionorigenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenOrigen_id", type="integer", nullable=true)
     */
    private $numalmacenorigenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionOrigen", type="integer", nullable=true)
     */
    private $numtipotransaccionorigen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionReversion_id", type="integer", nullable=true)
     */
    private $numtransaccionreversionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenReversion_id", type="integer", nullable=true)
     */
    private $numalmacenreversionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionReversion", type="integer", nullable=true)
     */
    private $numtipotransaccionreversion = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteVencimiento", type="datetime", nullable=true)
     */
    private $dtevencimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImagen_id", type="integer", nullable=true)
     */
    private $numimagenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoImpresionDocumento", type="integer", nullable=true)
     */
    private $numtipoimpresiondocumento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEnvioDocumento", type="integer", nullable=true)
     */
    private $numtipoenviodocumento = '0';

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
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transaccionespagares
     */
    public function setNumtransaccionId($numtransaccionId)
    {
        $this->numtransaccionId = $numtransaccionId;

        return $this;
    }

    /**
     * Get numtransaccionId
     *
     * @return integer 
     */
    public function getNumtransaccionId()
    {
        return $this->numtransaccionId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Transaccionespagares
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
     * Set strtransaccion
     *
     * @param string $strtransaccion
     * @return Transaccionespagares
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
     * Set numserie
     *
     * @param integer $numserie
     * @return Transaccionespagares
     */
    public function setNumserie($numserie)
    {
        $this->numserie = $numserie;

        return $this;
    }

    /**
     * Get numserie
     *
     * @return integer 
     */
    public function getNumserie()
    {
        return $this->numserie;
    }

    /**
     * Set dtetransaccion
     *
     * @param \DateTime $dtetransaccion
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Transaccionespagares
     */
    public function setNumentidadId($numentidadId)
    {
        $this->numentidadId = $numentidadId;

        return $this;
    }

    /**
     * Get numentidadId
     *
     * @return integer 
     */
    public function getNumentidadId()
    {
        return $this->numentidadId;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * Set numtotaldocumentos
     *
     * @param integer $numtotaldocumentos
     * @return Transaccionespagares
     */
    public function setNumtotaldocumentos($numtotaldocumentos)
    {
        $this->numtotaldocumentos = $numtotaldocumentos;

        return $this;
    }

    /**
     * Get numtotaldocumentos
     *
     * @return integer 
     */
    public function getNumtotaldocumentos()
    {
        return $this->numtotaldocumentos;
    }

    /**
     * Set numtotal
     *
     * @param integer $numtotal
     * @return Transaccionespagares
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
     * Set numsaldo
     *
     * @param integer $numsaldo
     * @return Transaccionespagares
     */
    public function setNumsaldo($numsaldo)
    {
        $this->numsaldo = $numsaldo;

        return $this;
    }

    /**
     * Get numsaldo
     *
     * @return integer 
     */
    public function getNumsaldo()
    {
        return $this->numsaldo;
    }

    /**
     * Set numtransaccionorigenId
     *
     * @param integer $numtransaccionorigenId
     * @return Transaccionespagares
     */
    public function setNumtransaccionorigenId($numtransaccionorigenId)
    {
        $this->numtransaccionorigenId = $numtransaccionorigenId;

        return $this;
    }

    /**
     * Get numtransaccionorigenId
     *
     * @return integer 
     */
    public function getNumtransaccionorigenId()
    {
        return $this->numtransaccionorigenId;
    }

    /**
     * Set numalmacenorigenId
     *
     * @param integer $numalmacenorigenId
     * @return Transaccionespagares
     */
    public function setNumalmacenorigenId($numalmacenorigenId)
    {
        $this->numalmacenorigenId = $numalmacenorigenId;

        return $this;
    }

    /**
     * Get numalmacenorigenId
     *
     * @return integer 
     */
    public function getNumalmacenorigenId()
    {
        return $this->numalmacenorigenId;
    }

    /**
     * Set numtipotransaccionorigen
     *
     * @param integer $numtipotransaccionorigen
     * @return Transaccionespagares
     */
    public function setNumtipotransaccionorigen($numtipotransaccionorigen)
    {
        $this->numtipotransaccionorigen = $numtipotransaccionorigen;

        return $this;
    }

    /**
     * Get numtipotransaccionorigen
     *
     * @return integer 
     */
    public function getNumtipotransaccionorigen()
    {
        return $this->numtipotransaccionorigen;
    }

    /**
     * Set numtransaccionreversionId
     *
     * @param integer $numtransaccionreversionId
     * @return Transaccionespagares
     */
    public function setNumtransaccionreversionId($numtransaccionreversionId)
    {
        $this->numtransaccionreversionId = $numtransaccionreversionId;

        return $this;
    }

    /**
     * Get numtransaccionreversionId
     *
     * @return integer 
     */
    public function getNumtransaccionreversionId()
    {
        return $this->numtransaccionreversionId;
    }

    /**
     * Set numalmacenreversionId
     *
     * @param integer $numalmacenreversionId
     * @return Transaccionespagares
     */
    public function setNumalmacenreversionId($numalmacenreversionId)
    {
        $this->numalmacenreversionId = $numalmacenreversionId;

        return $this;
    }

    /**
     * Get numalmacenreversionId
     *
     * @return integer 
     */
    public function getNumalmacenreversionId()
    {
        return $this->numalmacenreversionId;
    }

    /**
     * Set numtipotransaccionreversion
     *
     * @param integer $numtipotransaccionreversion
     * @return Transaccionespagares
     */
    public function setNumtipotransaccionreversion($numtipotransaccionreversion)
    {
        $this->numtipotransaccionreversion = $numtipotransaccionreversion;

        return $this;
    }

    /**
     * Get numtipotransaccionreversion
     *
     * @return integer 
     */
    public function getNumtipotransaccionreversion()
    {
        return $this->numtipotransaccionreversion;
    }

    /**
     * Set dtevencimiento
     *
     * @param \DateTime $dtevencimiento
     * @return Transaccionespagares
     */
    public function setDtevencimiento($dtevencimiento)
    {
        $this->dtevencimiento = $dtevencimiento;

        return $this;
    }

    /**
     * Get dtevencimiento
     *
     * @return \DateTime 
     */
    public function getDtevencimiento()
    {
        return $this->dtevencimiento;
    }

    /**
     * Set numimagenId
     *
     * @param integer $numimagenId
     * @return Transaccionespagares
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
     * Set numtipoimpresiondocumento
     *
     * @param integer $numtipoimpresiondocumento
     * @return Transaccionespagares
     */
    public function setNumtipoimpresiondocumento($numtipoimpresiondocumento)
    {
        $this->numtipoimpresiondocumento = $numtipoimpresiondocumento;

        return $this;
    }

    /**
     * Get numtipoimpresiondocumento
     *
     * @return integer 
     */
    public function getNumtipoimpresiondocumento()
    {
        return $this->numtipoimpresiondocumento;
    }

    /**
     * Set numtipoenviodocumento
     *
     * @param integer $numtipoenviodocumento
     * @return Transaccionespagares
     */
    public function setNumtipoenviodocumento($numtipoenviodocumento)
    {
        $this->numtipoenviodocumento = $numtipoenviodocumento;

        return $this;
    }

    /**
     * Get numtipoenviodocumento
     *
     * @return integer 
     */
    public function getNumtipoenviodocumento()
    {
        return $this->numtipoenviodocumento;
    }

    /**
     * Set numclasificacionId
     *
     * @param integer $numclasificacionId
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
     * @return Transaccionespagares
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
