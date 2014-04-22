<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadoscuentabancarios
 *
 * @ORM\Table(name="EstadosCuentaBancarios", indexes={@ORM\Index(name="Indice_1", columns={"StrReferencia", "NumCuentaBancaria_id"}), @ORM\Index(name="Indice_2", columns={"NumCuentaBancaria_id", "DteTransaccion"}), @ORM\Index(name="Indice_3", columns={"NumEntidad_id"}), @ORM\Index(name="Indice_4", columns={"NumConciliacion_id"}), @ORM\Index(name="Indice_5", columns={"NumTransaccion_id", "NumAlmacen_id", "NumTipoTransaccion"}), @ORM\Index(name="Indice_6", columns={"DteActualizacion"}), @ORM\Index(name="Indice_7", columns={"NumValidadoPor_id"})})
 * @ORM\Entity
 */
class Estadoscuentabancarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaBancaria_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcuentabancariaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numperiodoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTransaccion", type="datetime", nullable=true)
     */
    private $dtetransaccion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrConcepto", type="string", length=100, nullable=true)
     */
    private $strconcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=100, nullable=true)
     */
    private $strreferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

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
     * @ORM\Column(name="NumCargo", type="integer", nullable=true)
     */
    private $numcargo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbono", type="integer", nullable=true)
     */
    private $numabono = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo", type="integer", nullable=true)
     */
    private $numsaldo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogConciliado", type="boolean", nullable=true)
     */
    private $logconciliado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConciliacion_id", type="integer", nullable=true)
     */
    private $numconciliacionId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteConciliacion", type="datetime", nullable=true)
     */
    private $dteconciliacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFormaPago_id", type="integer", nullable=true)
     */
    private $numformapagoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccion_id", type="integer", nullable=true)
     */
    private $numtransaccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=true)
     */
    private $numtipotransaccion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogReferenciaOriginal", type="boolean", nullable=true)
     */
    private $logreferenciaoriginal = '0';

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
     * @ORM\Column(name="NumValidadoPor_id", type="integer", nullable=true)
     */
    private $numvalidadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteValidacion", type="datetime", nullable=true)
     */
    private $dtevalidacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPermitirValidar", type="boolean", nullable=true)
     */
    private $logpermitirvalidar = '0';



    /**
     * Set numcuentabancariaId
     *
     * @param integer $numcuentabancariaId
     * @return Estadoscuentabancarios
     */
    public function setNumcuentabancariaId($numcuentabancariaId)
    {
        $this->numcuentabancariaId = $numcuentabancariaId;

        return $this;
    }

    /**
     * Get numcuentabancariaId
     *
     * @return integer 
     */
    public function getNumcuentabancariaId()
    {
        return $this->numcuentabancariaId;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Estadoscuentabancarios
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
     * @return Estadoscuentabancarios
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Estadoscuentabancarios
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
     * Set dtetransaccion
     *
     * @param \DateTime $dtetransaccion
     * @return Estadoscuentabancarios
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
     * Set strconcepto
     *
     * @param string $strconcepto
     * @return Estadoscuentabancarios
     */
    public function setStrconcepto($strconcepto)
    {
        $this->strconcepto = $strconcepto;

        return $this;
    }

    /**
     * Get strconcepto
     *
     * @return string 
     */
    public function getStrconcepto()
    {
        return $this->strconcepto;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Estadoscuentabancarios
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Estadoscuentabancarios
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
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Estadoscuentabancarios
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
     * @return Estadoscuentabancarios
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
     * Set numcargo
     *
     * @param integer $numcargo
     * @return Estadoscuentabancarios
     */
    public function setNumcargo($numcargo)
    {
        $this->numcargo = $numcargo;

        return $this;
    }

    /**
     * Get numcargo
     *
     * @return integer 
     */
    public function getNumcargo()
    {
        return $this->numcargo;
    }

    /**
     * Set numabono
     *
     * @param integer $numabono
     * @return Estadoscuentabancarios
     */
    public function setNumabono($numabono)
    {
        $this->numabono = $numabono;

        return $this;
    }

    /**
     * Get numabono
     *
     * @return integer 
     */
    public function getNumabono()
    {
        return $this->numabono;
    }

    /**
     * Set numsaldo
     *
     * @param integer $numsaldo
     * @return Estadoscuentabancarios
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
     * Set logconciliado
     *
     * @param boolean $logconciliado
     * @return Estadoscuentabancarios
     */
    public function setLogconciliado($logconciliado)
    {
        $this->logconciliado = $logconciliado;

        return $this;
    }

    /**
     * Get logconciliado
     *
     * @return boolean 
     */
    public function getLogconciliado()
    {
        return $this->logconciliado;
    }

    /**
     * Set numconciliacionId
     *
     * @param integer $numconciliacionId
     * @return Estadoscuentabancarios
     */
    public function setNumconciliacionId($numconciliacionId)
    {
        $this->numconciliacionId = $numconciliacionId;

        return $this;
    }

    /**
     * Get numconciliacionId
     *
     * @return integer 
     */
    public function getNumconciliacionId()
    {
        return $this->numconciliacionId;
    }

    /**
     * Set dteconciliacion
     *
     * @param \DateTime $dteconciliacion
     * @return Estadoscuentabancarios
     */
    public function setDteconciliacion($dteconciliacion)
    {
        $this->dteconciliacion = $dteconciliacion;

        return $this;
    }

    /**
     * Get dteconciliacion
     *
     * @return \DateTime 
     */
    public function getDteconciliacion()
    {
        return $this->dteconciliacion;
    }

    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Estadoscuentabancarios
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
     * Set numformapagoId
     *
     * @param integer $numformapagoId
     * @return Estadoscuentabancarios
     */
    public function setNumformapagoId($numformapagoId)
    {
        $this->numformapagoId = $numformapagoId;

        return $this;
    }

    /**
     * Get numformapagoId
     *
     * @return integer 
     */
    public function getNumformapagoId()
    {
        return $this->numformapagoId;
    }

    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Estadoscuentabancarios
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
     * @return Estadoscuentabancarios
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
     * Set numtipotransaccion
     *
     * @param integer $numtipotransaccion
     * @return Estadoscuentabancarios
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
     * Set logreferenciaoriginal
     *
     * @param boolean $logreferenciaoriginal
     * @return Estadoscuentabancarios
     */
    public function setLogreferenciaoriginal($logreferenciaoriginal)
    {
        $this->logreferenciaoriginal = $logreferenciaoriginal;

        return $this;
    }

    /**
     * Get logreferenciaoriginal
     *
     * @return boolean 
     */
    public function getLogreferenciaoriginal()
    {
        return $this->logreferenciaoriginal;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Estadoscuentabancarios
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
     * @return Estadoscuentabancarios
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
     * @return Estadoscuentabancarios
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
     * @return Estadoscuentabancarios
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
     * Set numvalidadoporId
     *
     * @param integer $numvalidadoporId
     * @return Estadoscuentabancarios
     */
    public function setNumvalidadoporId($numvalidadoporId)
    {
        $this->numvalidadoporId = $numvalidadoporId;

        return $this;
    }

    /**
     * Get numvalidadoporId
     *
     * @return integer 
     */
    public function getNumvalidadoporId()
    {
        return $this->numvalidadoporId;
    }

    /**
     * Set dtevalidacion
     *
     * @param \DateTime $dtevalidacion
     * @return Estadoscuentabancarios
     */
    public function setDtevalidacion($dtevalidacion)
    {
        $this->dtevalidacion = $dtevalidacion;

        return $this;
    }

    /**
     * Get dtevalidacion
     *
     * @return \DateTime 
     */
    public function getDtevalidacion()
    {
        return $this->dtevalidacion;
    }

    /**
     * Set logpermitirvalidar
     *
     * @param boolean $logpermitirvalidar
     * @return Estadoscuentabancarios
     */
    public function setLogpermitirvalidar($logpermitirvalidar)
    {
        $this->logpermitirvalidar = $logpermitirvalidar;

        return $this;
    }

    /**
     * Get logpermitirvalidar
     *
     * @return boolean 
     */
    public function getLogpermitirvalidar()
    {
        return $this->logpermitirvalidar;
    }
}
