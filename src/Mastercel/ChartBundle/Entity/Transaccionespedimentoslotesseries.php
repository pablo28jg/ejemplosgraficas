<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionespedimentoslotesseries
 *
 * @ORM\Table(name="TransaccionesPedimentosLotesSeries", indexes={@ORM\Index(name="Indice_1", columns={"StrSerie_ky", "NumTipoEstado"}), @ORM\Index(name="Indice_10", columns={"NumTipoTransaccion", "NumTipoEstado", "DteTransaccion"}), @ORM\Index(name="Indice_11", columns={"StrArticulo_ky", "StrSerie_ky", "NumTipoTransaccion", "NumTipoEstado"}), @ORM\Index(name="Indice_12", columns={"StrReferencia", "NumTipoEstado"}), @ORM\Index(name="Indice_2", columns={"DteTransaccion", "TmeTransaccion"}), @ORM\Index(name="Indice_3", columns={"NumEmpresa_id", "StrArticulo_ky", "StrPedimento_ky", "StrLote_ky", "StrSerie_ky", "NumTipoEstado", "NumTipoTransaccion"}), @ORM\Index(name="Indice_4", columns={"NumEjercicio_id", "NumAlmacen_id", "StrArticulo_ky", "StrPedimento_ky", "StrLote_ky", "StrSerie_ky"}), @ORM\Index(name="Indice_5", columns={"NumEjercicio_id", "NumAlmacen_id", "NumConcepto_id", "StrArticulo_ky", "StrPedimento_ky", "StrLote_ky", "StrSerie_ky"}), @ORM\Index(name="Indice_6", columns={"NumAlmacen_id", "NumCaja_id", "NumCorte_id", "NumTipoEstado"}), @ORM\Index(name="Indice_7", columns={"NumEmpresa_id", "StrArticulo_ky", "StrSerie_ky", "NumTipoTransaccion", "NumTipoEstado"}), @ORM\Index(name="Indice_8", columns={"NumTransaccion_id", "NumAlmacen_id", "StrArticulo_ky", "StrSerieControl_ky", "NumTipoTransaccion", "NumTipoEstado"}), @ORM\Index(name="Indice_9", columns={"NumEjercicio_id", "StrReferencia"}), @ORM\Index(name="Indice_13", columns={"NumEjercicio_id", "NumEmpresa_id", "StrArticulo_ky", "StrPedimento_ky", "StrLote_ky", "StrSerie_ky", "NumTipoEstado", "NumTipoTransaccion"}), @ORM\Index(name="Indice_14", columns={"NumTransaccion_id", "NumAlmacen_id", "NumTipoTransaccion", "NumTransaccionRegistro_id", "StrArticulo_ky"})})
 * @ORM\Entity
 */
class Transaccionespedimentoslotesseries
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
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionRegistro_id", type="integer", nullable=true)
     */
    private $numtransaccionregistroId = '0';

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
     * @ORM\Column(name="NumCaja_id", type="integer", nullable=true)
     */
    private $numcajaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCorte_id", type="integer", nullable=true)
     */
    private $numcorteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCortePreliminar_id", type="integer", nullable=true)
     */
    private $numcortepreliminarId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConcepto_id", type="integer", nullable=true)
     */
    private $numconceptoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio_id", type="integer", nullable=true)
     */
    private $numfolioId = '0';

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
     * @ORM\Column(name="NumTipoEntidad", type="integer", nullable=true)
     */
    private $numtipoentidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPedimento_ky", type="string", length=20, nullable=true)
     */
    private $strpedimentoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrLote_ky", type="string", length=20, nullable=true)
     */
    private $strloteKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie_ky", type="string", length=20, nullable=true)
     */
    private $strserieKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerieControl_ky", type="string", length=20, nullable=true)
     */
    private $strseriecontrolKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

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
     * @var \DateTime
     *
     * @ORM\Column(name="DteExpiracion", type="datetime", nullable=true)
     */
    private $dteexpiracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMesesGarantia", type="integer", nullable=true)
     */
    private $nummesesgarantia = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Transaccionespedimentoslotesseries
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
     * Set numtransaccionregistroId
     *
     * @param integer $numtransaccionregistroId
     * @return Transaccionespedimentoslotesseries
     */
    public function setNumtransaccionregistroId($numtransaccionregistroId)
    {
        $this->numtransaccionregistroId = $numtransaccionregistroId;

        return $this;
    }

    /**
     * Get numtransaccionregistroId
     *
     * @return integer 
     */
    public function getNumtransaccionregistroId()
    {
        return $this->numtransaccionregistroId;
    }

    /**
     * Set strtransaccion
     *
     * @param string $strtransaccion
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * Set numcajaId
     *
     * @param integer $numcajaId
     * @return Transaccionespedimentoslotesseries
     */
    public function setNumcajaId($numcajaId)
    {
        $this->numcajaId = $numcajaId;

        return $this;
    }

    /**
     * Get numcajaId
     *
     * @return integer 
     */
    public function getNumcajaId()
    {
        return $this->numcajaId;
    }

    /**
     * Set numcorteId
     *
     * @param integer $numcorteId
     * @return Transaccionespedimentoslotesseries
     */
    public function setNumcorteId($numcorteId)
    {
        $this->numcorteId = $numcorteId;

        return $this;
    }

    /**
     * Get numcorteId
     *
     * @return integer 
     */
    public function getNumcorteId()
    {
        return $this->numcorteId;
    }

    /**
     * Set numcortepreliminarId
     *
     * @param integer $numcortepreliminarId
     * @return Transaccionespedimentoslotesseries
     */
    public function setNumcortepreliminarId($numcortepreliminarId)
    {
        $this->numcortepreliminarId = $numcortepreliminarId;

        return $this;
    }

    /**
     * Get numcortepreliminarId
     *
     * @return integer 
     */
    public function getNumcortepreliminarId()
    {
        return $this->numcortepreliminarId;
    }

    /**
     * Set numconceptoId
     *
     * @param integer $numconceptoId
     * @return Transaccionespedimentoslotesseries
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
     * Set numfolioId
     *
     * @param integer $numfolioId
     * @return Transaccionespedimentoslotesseries
     */
    public function setNumfolioId($numfolioId)
    {
        $this->numfolioId = $numfolioId;

        return $this;
    }

    /**
     * Get numfolioId
     *
     * @return integer 
     */
    public function getNumfolioId()
    {
        return $this->numfolioId;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * Set numtipoentidad
     *
     * @param integer $numtipoentidad
     * @return Transaccionespedimentoslotesseries
     */
    public function setNumtipoentidad($numtipoentidad)
    {
        $this->numtipoentidad = $numtipoentidad;

        return $this;
    }

    /**
     * Get numtipoentidad
     *
     * @return integer 
     */
    public function getNumtipoentidad()
    {
        return $this->numtipoentidad;
    }

    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Transaccionespedimentoslotesseries
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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * Set strseriecontrolKy
     *
     * @param string $strseriecontrolKy
     * @return Transaccionespedimentoslotesseries
     */
    public function setStrseriecontrolKy($strseriecontrolKy)
    {
        $this->strseriecontrolKy = $strseriecontrolKy;

        return $this;
    }

    /**
     * Get strseriecontrolKy
     *
     * @return string 
     */
    public function getStrseriecontrolKy()
    {
        return $this->strseriecontrolKy;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Transaccionespedimentoslotesseries
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
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * Set dteexpiracion
     *
     * @param \DateTime $dteexpiracion
     * @return Transaccionespedimentoslotesseries
     */
    public function setDteexpiracion($dteexpiracion)
    {
        $this->dteexpiracion = $dteexpiracion;

        return $this;
    }

    /**
     * Get dteexpiracion
     *
     * @return \DateTime 
     */
    public function getDteexpiracion()
    {
        return $this->dteexpiracion;
    }

    /**
     * Set nummesesgarantia
     *
     * @param integer $nummesesgarantia
     * @return Transaccionespedimentoslotesseries
     */
    public function setNummesesgarantia($nummesesgarantia)
    {
        $this->nummesesgarantia = $nummesesgarantia;

        return $this;
    }

    /**
     * Get nummesesgarantia
     *
     * @return integer 
     */
    public function getNummesesgarantia()
    {
        return $this->nummesesgarantia;
    }

    /**
     * Set numcostocompra
     *
     * @param integer $numcostocompra
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * @return Transaccionespedimentoslotesseries
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Transaccionespedimentoslotesseries
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
