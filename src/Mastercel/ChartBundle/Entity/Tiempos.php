<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiempos
 *
 * @ORM\Table(name="Tiempos", indexes={@ORM\Index(name="Indice_1", columns={"DteDocumento"}), @ORM\Index(name="Indice_2", columns={"NumEjercicio_id", "NumPeriodo_id"}), @ORM\Index(name="Indice_3", columns={"NumEmpleado_id", "StrDocumento"}), @ORM\Index(name="Indice_4", columns={"NumEmpleado_id", "NumSemana_id"}), @ORM\Index(name="Indice_5", columns={"DteActualizacion"}), @ORM\Index(name="Indice_6", columns={"NumTipoFrecuencia"}), @ORM\Index(name="Indice_7", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Tiempos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiempo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numtiempoId = '0';

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
     * @ORM\Column(name="NumViaje_id", type="integer", nullable=true)
     */
    private $numviajeId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpleado_id", type="integer", nullable=true)
     */
    private $numempleadoId = '0';

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
     * @ORM\Column(name="NumDepartamento_id", type="integer", nullable=true)
     */
    private $numdepartamentoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPuesto_id", type="integer", nullable=true)
     */
    private $numpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaServicio_id", type="integer", nullable=true)
     */
    private $numtarifaservicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelServicio", type="integer", nullable=true)
     */
    private $numnivelservicio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimiteHorasSemana", type="integer", nullable=true)
     */
    private $numlimitehorassemana = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalDuracion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalduracion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalTarifa", type="integer", nullable=true)
     */
    private $numtotaltarifa = '0';

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
     * @ORM\Column(name="NumTotalCostoReal", type="integer", nullable=true)
     */
    private $numtotalcostoreal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoFrecuencia", type="integer", nullable=true)
     */
    private $numtipofrecuencia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDia", type="integer", nullable=true)
     */
    private $numtipodia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIntervalo_1", type="integer", nullable=true)
     */
    private $numintervalo1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIntervalo_2", type="integer", nullable=true)
     */
    private $numintervalo2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIntervalo_3", type="integer", nullable=true)
     */
    private $numintervalo3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogExpira", type="boolean", nullable=true)
     */
    private $logexpira = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteExpiracion", type="datetime", nullable=true)
     */
    private $dteexpiracion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteAplicacion", type="datetime", nullable=true)
     */
    private $dteaplicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCapturo_id", type="integer", nullable=true)
     */
    private $numcapturoId = '0';

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
     * Get numtiempoId
     *
     * @return integer 
     */
    public function getNumtiempoId()
    {
        return $this->numtiempoId;
    }

    /**
     * Set strdocumento
     *
     * @param string $strdocumento
     * @return Tiempos
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
     * @return Tiempos
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
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Tiempos
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
     * @return Tiempos
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
     * @return Tiempos
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
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Tiempos
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
     * @return Tiempos
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
     * Set numviajeId
     *
     * @param integer $numviajeId
     * @return Tiempos
     */
    public function setNumviajeId($numviajeId)
    {
        $this->numviajeId = $numviajeId;

        return $this;
    }

    /**
     * Get numviajeId
     *
     * @return integer 
     */
    public function getNumviajeId()
    {
        return $this->numviajeId;
    }

    /**
     * Set numempleadoId
     *
     * @param integer $numempleadoId
     * @return Tiempos
     */
    public function setNumempleadoId($numempleadoId)
    {
        $this->numempleadoId = $numempleadoId;

        return $this;
    }

    /**
     * Get numempleadoId
     *
     * @return integer 
     */
    public function getNumempleadoId()
    {
        return $this->numempleadoId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Tiempos
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
     * @return Tiempos
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
     * Set numdepartamentoId
     *
     * @param integer $numdepartamentoId
     * @return Tiempos
     */
    public function setNumdepartamentoId($numdepartamentoId)
    {
        $this->numdepartamentoId = $numdepartamentoId;

        return $this;
    }

    /**
     * Get numdepartamentoId
     *
     * @return integer 
     */
    public function getNumdepartamentoId()
    {
        return $this->numdepartamentoId;
    }

    /**
     * Set numpuestoId
     *
     * @param integer $numpuestoId
     * @return Tiempos
     */
    public function setNumpuestoId($numpuestoId)
    {
        $this->numpuestoId = $numpuestoId;

        return $this;
    }

    /**
     * Get numpuestoId
     *
     * @return integer 
     */
    public function getNumpuestoId()
    {
        return $this->numpuestoId;
    }

    /**
     * Set numtarifaservicioId
     *
     * @param integer $numtarifaservicioId
     * @return Tiempos
     */
    public function setNumtarifaservicioId($numtarifaservicioId)
    {
        $this->numtarifaservicioId = $numtarifaservicioId;

        return $this;
    }

    /**
     * Get numtarifaservicioId
     *
     * @return integer 
     */
    public function getNumtarifaservicioId()
    {
        return $this->numtarifaservicioId;
    }

    /**
     * Set numnivelservicio
     *
     * @param integer $numnivelservicio
     * @return Tiempos
     */
    public function setNumnivelservicio($numnivelservicio)
    {
        $this->numnivelservicio = $numnivelservicio;

        return $this;
    }

    /**
     * Get numnivelservicio
     *
     * @return integer 
     */
    public function getNumnivelservicio()
    {
        return $this->numnivelservicio;
    }

    /**
     * Set numlimitehorassemana
     *
     * @param integer $numlimitehorassemana
     * @return Tiempos
     */
    public function setNumlimitehorassemana($numlimitehorassemana)
    {
        $this->numlimitehorassemana = $numlimitehorassemana;

        return $this;
    }

    /**
     * Get numlimitehorassemana
     *
     * @return integer 
     */
    public function getNumlimitehorassemana()
    {
        return $this->numlimitehorassemana;
    }

    /**
     * Set numtotalduracion
     *
     * @param float $numtotalduracion
     * @return Tiempos
     */
    public function setNumtotalduracion($numtotalduracion)
    {
        $this->numtotalduracion = $numtotalduracion;

        return $this;
    }

    /**
     * Get numtotalduracion
     *
     * @return float 
     */
    public function getNumtotalduracion()
    {
        return $this->numtotalduracion;
    }

    /**
     * Set numtotaltarifa
     *
     * @param integer $numtotaltarifa
     * @return Tiempos
     */
    public function setNumtotaltarifa($numtotaltarifa)
    {
        $this->numtotaltarifa = $numtotaltarifa;

        return $this;
    }

    /**
     * Get numtotaltarifa
     *
     * @return integer 
     */
    public function getNumtotaltarifa()
    {
        return $this->numtotaltarifa;
    }

    /**
     * Set numtotalimpuesto1
     *
     * @param integer $numtotalimpuesto1
     * @return Tiempos
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
     * @return Tiempos
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
     * @return Tiempos
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
     * @return Tiempos
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
     * @return Tiempos
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
     * @return Tiempos
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
     * Set numtotalcostoestandar
     *
     * @param integer $numtotalcostoestandar
     * @return Tiempos
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
     * @return Tiempos
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
     * Set numtotalcostoreal
     *
     * @param integer $numtotalcostoreal
     * @return Tiempos
     */
    public function setNumtotalcostoreal($numtotalcostoreal)
    {
        $this->numtotalcostoreal = $numtotalcostoreal;

        return $this;
    }

    /**
     * Get numtotalcostoreal
     *
     * @return integer 
     */
    public function getNumtotalcostoreal()
    {
        return $this->numtotalcostoreal;
    }

    /**
     * Set numtipofrecuencia
     *
     * @param integer $numtipofrecuencia
     * @return Tiempos
     */
    public function setNumtipofrecuencia($numtipofrecuencia)
    {
        $this->numtipofrecuencia = $numtipofrecuencia;

        return $this;
    }

    /**
     * Get numtipofrecuencia
     *
     * @return integer 
     */
    public function getNumtipofrecuencia()
    {
        return $this->numtipofrecuencia;
    }

    /**
     * Set numtipodia
     *
     * @param integer $numtipodia
     * @return Tiempos
     */
    public function setNumtipodia($numtipodia)
    {
        $this->numtipodia = $numtipodia;

        return $this;
    }

    /**
     * Get numtipodia
     *
     * @return integer 
     */
    public function getNumtipodia()
    {
        return $this->numtipodia;
    }

    /**
     * Set numintervalo1
     *
     * @param integer $numintervalo1
     * @return Tiempos
     */
    public function setNumintervalo1($numintervalo1)
    {
        $this->numintervalo1 = $numintervalo1;

        return $this;
    }

    /**
     * Get numintervalo1
     *
     * @return integer 
     */
    public function getNumintervalo1()
    {
        return $this->numintervalo1;
    }

    /**
     * Set numintervalo2
     *
     * @param integer $numintervalo2
     * @return Tiempos
     */
    public function setNumintervalo2($numintervalo2)
    {
        $this->numintervalo2 = $numintervalo2;

        return $this;
    }

    /**
     * Get numintervalo2
     *
     * @return integer 
     */
    public function getNumintervalo2()
    {
        return $this->numintervalo2;
    }

    /**
     * Set numintervalo3
     *
     * @param integer $numintervalo3
     * @return Tiempos
     */
    public function setNumintervalo3($numintervalo3)
    {
        $this->numintervalo3 = $numintervalo3;

        return $this;
    }

    /**
     * Get numintervalo3
     *
     * @return integer 
     */
    public function getNumintervalo3()
    {
        return $this->numintervalo3;
    }

    /**
     * Set logexpira
     *
     * @param boolean $logexpira
     * @return Tiempos
     */
    public function setLogexpira($logexpira)
    {
        $this->logexpira = $logexpira;

        return $this;
    }

    /**
     * Get logexpira
     *
     * @return boolean 
     */
    public function getLogexpira()
    {
        return $this->logexpira;
    }

    /**
     * Set dteexpiracion
     *
     * @param \DateTime $dteexpiracion
     * @return Tiempos
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
     * Set dteaplicacion
     *
     * @param \DateTime $dteaplicacion
     * @return Tiempos
     */
    public function setDteaplicacion($dteaplicacion)
    {
        $this->dteaplicacion = $dteaplicacion;

        return $this;
    }

    /**
     * Get dteaplicacion
     *
     * @return \DateTime 
     */
    public function getDteaplicacion()
    {
        return $this->dteaplicacion;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Tiempos
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
     * Set numcapturoId
     *
     * @param integer $numcapturoId
     * @return Tiempos
     */
    public function setNumcapturoId($numcapturoId)
    {
        $this->numcapturoId = $numcapturoId;

        return $this;
    }

    /**
     * Get numcapturoId
     *
     * @return integer 
     */
    public function getNumcapturoId()
    {
        return $this->numcapturoId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Tiempos
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
     * @return Tiempos
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
     * @return Tiempos
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
     * @return Tiempos
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
     * @return Tiempos
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
     * @return Tiempos
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
