<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Centrostrabajo
 *
 * @ORM\Table(name="CentrosTrabajo", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrCentroTrabajo_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumCentroControl_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Centrostrabajo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroTrabajo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcentrotrabajoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCentroTrabajo_ky", type="string", length=10, nullable=true)
     */
    private $strcentrotrabajoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLineaEnsamble_id", type="integer", nullable=true)
     */
    private $numlineaensambleId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumResponsable_id", type="integer", nullable=true)
     */
    private $numresponsableId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCalendario_id", type="integer", nullable=true)
     */
    private $numcalendarioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTurnosDia", type="integer", nullable=true)
     */
    private $numturnosdia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumHorasTurno", type="integer", nullable=true)
     */
    private $numhorasturno = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasSemana", type="integer", nullable=true)
     */
    private $numdiassemana = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumHorasMaximasDia", type="integer", nullable=true)
     */
    private $numhorasmaximasdia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMaquinas", type="integer", nullable=true)
     */
    private $nummaquinas = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOperadores", type="integer", nullable=true)
     */
    private $numoperadores = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPocentajeUtilizacion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numpocentajeutilizacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumProporcionEficiencia", type="float", precision=53, scale=0, nullable=true)
     */
    private $numproporcioneficiencia = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCapacidadDiaria", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcapacidaddiaria = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuotaHoraCola", type="integer", nullable=true)
     */
    private $numcuotahoracola = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuotaHoraPreparacionMaquina", type="integer", nullable=true)
     */
    private $numcuotahorapreparacionmaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuotaHoraPreparacionLabor", type="integer", nullable=true)
     */
    private $numcuotahorapreparacionlabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuotaHoraProcesoMaquina", type="integer", nullable=true)
     */
    private $numcuotahoraprocesomaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuotaHoraProcesoLabor", type="integer", nullable=true)
     */
    private $numcuotahoraprocesolabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuotaHoraEspera", type="integer", nullable=true)
     */
    private $numcuotahoraespera = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuotaHoraTraslado", type="integer", nullable=true)
     */
    private $numcuotahoratraslado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuotaGastoIndirecto", type="integer", nullable=true)
     */
    private $numcuotagastoindirecto = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogExterno", type="boolean", nullable=true)
     */
    private $logexterno = '0';

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
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



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
     * Set strcentrotrabajoKy
     *
     * @param string $strcentrotrabajoKy
     * @return Centrostrabajo
     */
    public function setStrcentrotrabajoKy($strcentrotrabajoKy)
    {
        $this->strcentrotrabajoKy = $strcentrotrabajoKy;

        return $this;
    }

    /**
     * Get strcentrotrabajoKy
     *
     * @return string 
     */
    public function getStrcentrotrabajoKy()
    {
        return $this->strcentrotrabajoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Centrostrabajo
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
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Centrostrabajo
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
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Centrostrabajo
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
     * Set numlineaensambleId
     *
     * @param integer $numlineaensambleId
     * @return Centrostrabajo
     */
    public function setNumlineaensambleId($numlineaensambleId)
    {
        $this->numlineaensambleId = $numlineaensambleId;

        return $this;
    }

    /**
     * Get numlineaensambleId
     *
     * @return integer 
     */
    public function getNumlineaensambleId()
    {
        return $this->numlineaensambleId;
    }

    /**
     * Set numresponsableId
     *
     * @param integer $numresponsableId
     * @return Centrostrabajo
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
     * Set numcalendarioId
     *
     * @param integer $numcalendarioId
     * @return Centrostrabajo
     */
    public function setNumcalendarioId($numcalendarioId)
    {
        $this->numcalendarioId = $numcalendarioId;

        return $this;
    }

    /**
     * Get numcalendarioId
     *
     * @return integer 
     */
    public function getNumcalendarioId()
    {
        return $this->numcalendarioId;
    }

    /**
     * Set numturnosdia
     *
     * @param integer $numturnosdia
     * @return Centrostrabajo
     */
    public function setNumturnosdia($numturnosdia)
    {
        $this->numturnosdia = $numturnosdia;

        return $this;
    }

    /**
     * Get numturnosdia
     *
     * @return integer 
     */
    public function getNumturnosdia()
    {
        return $this->numturnosdia;
    }

    /**
     * Set numhorasturno
     *
     * @param integer $numhorasturno
     * @return Centrostrabajo
     */
    public function setNumhorasturno($numhorasturno)
    {
        $this->numhorasturno = $numhorasturno;

        return $this;
    }

    /**
     * Get numhorasturno
     *
     * @return integer 
     */
    public function getNumhorasturno()
    {
        return $this->numhorasturno;
    }

    /**
     * Set numdiassemana
     *
     * @param integer $numdiassemana
     * @return Centrostrabajo
     */
    public function setNumdiassemana($numdiassemana)
    {
        $this->numdiassemana = $numdiassemana;

        return $this;
    }

    /**
     * Get numdiassemana
     *
     * @return integer 
     */
    public function getNumdiassemana()
    {
        return $this->numdiassemana;
    }

    /**
     * Set numhorasmaximasdia
     *
     * @param integer $numhorasmaximasdia
     * @return Centrostrabajo
     */
    public function setNumhorasmaximasdia($numhorasmaximasdia)
    {
        $this->numhorasmaximasdia = $numhorasmaximasdia;

        return $this;
    }

    /**
     * Get numhorasmaximasdia
     *
     * @return integer 
     */
    public function getNumhorasmaximasdia()
    {
        return $this->numhorasmaximasdia;
    }

    /**
     * Set nummaquinas
     *
     * @param integer $nummaquinas
     * @return Centrostrabajo
     */
    public function setNummaquinas($nummaquinas)
    {
        $this->nummaquinas = $nummaquinas;

        return $this;
    }

    /**
     * Get nummaquinas
     *
     * @return integer 
     */
    public function getNummaquinas()
    {
        return $this->nummaquinas;
    }

    /**
     * Set numoperadores
     *
     * @param integer $numoperadores
     * @return Centrostrabajo
     */
    public function setNumoperadores($numoperadores)
    {
        $this->numoperadores = $numoperadores;

        return $this;
    }

    /**
     * Get numoperadores
     *
     * @return integer 
     */
    public function getNumoperadores()
    {
        return $this->numoperadores;
    }

    /**
     * Set numpocentajeutilizacion
     *
     * @param float $numpocentajeutilizacion
     * @return Centrostrabajo
     */
    public function setNumpocentajeutilizacion($numpocentajeutilizacion)
    {
        $this->numpocentajeutilizacion = $numpocentajeutilizacion;

        return $this;
    }

    /**
     * Get numpocentajeutilizacion
     *
     * @return float 
     */
    public function getNumpocentajeutilizacion()
    {
        return $this->numpocentajeutilizacion;
    }

    /**
     * Set numproporcioneficiencia
     *
     * @param float $numproporcioneficiencia
     * @return Centrostrabajo
     */
    public function setNumproporcioneficiencia($numproporcioneficiencia)
    {
        $this->numproporcioneficiencia = $numproporcioneficiencia;

        return $this;
    }

    /**
     * Get numproporcioneficiencia
     *
     * @return float 
     */
    public function getNumproporcioneficiencia()
    {
        return $this->numproporcioneficiencia;
    }

    /**
     * Set numcapacidaddiaria
     *
     * @param float $numcapacidaddiaria
     * @return Centrostrabajo
     */
    public function setNumcapacidaddiaria($numcapacidaddiaria)
    {
        $this->numcapacidaddiaria = $numcapacidaddiaria;

        return $this;
    }

    /**
     * Get numcapacidaddiaria
     *
     * @return float 
     */
    public function getNumcapacidaddiaria()
    {
        return $this->numcapacidaddiaria;
    }

    /**
     * Set numcuotahoracola
     *
     * @param integer $numcuotahoracola
     * @return Centrostrabajo
     */
    public function setNumcuotahoracola($numcuotahoracola)
    {
        $this->numcuotahoracola = $numcuotahoracola;

        return $this;
    }

    /**
     * Get numcuotahoracola
     *
     * @return integer 
     */
    public function getNumcuotahoracola()
    {
        return $this->numcuotahoracola;
    }

    /**
     * Set numcuotahorapreparacionmaquina
     *
     * @param integer $numcuotahorapreparacionmaquina
     * @return Centrostrabajo
     */
    public function setNumcuotahorapreparacionmaquina($numcuotahorapreparacionmaquina)
    {
        $this->numcuotahorapreparacionmaquina = $numcuotahorapreparacionmaquina;

        return $this;
    }

    /**
     * Get numcuotahorapreparacionmaquina
     *
     * @return integer 
     */
    public function getNumcuotahorapreparacionmaquina()
    {
        return $this->numcuotahorapreparacionmaquina;
    }

    /**
     * Set numcuotahorapreparacionlabor
     *
     * @param integer $numcuotahorapreparacionlabor
     * @return Centrostrabajo
     */
    public function setNumcuotahorapreparacionlabor($numcuotahorapreparacionlabor)
    {
        $this->numcuotahorapreparacionlabor = $numcuotahorapreparacionlabor;

        return $this;
    }

    /**
     * Get numcuotahorapreparacionlabor
     *
     * @return integer 
     */
    public function getNumcuotahorapreparacionlabor()
    {
        return $this->numcuotahorapreparacionlabor;
    }

    /**
     * Set numcuotahoraprocesomaquina
     *
     * @param integer $numcuotahoraprocesomaquina
     * @return Centrostrabajo
     */
    public function setNumcuotahoraprocesomaquina($numcuotahoraprocesomaquina)
    {
        $this->numcuotahoraprocesomaquina = $numcuotahoraprocesomaquina;

        return $this;
    }

    /**
     * Get numcuotahoraprocesomaquina
     *
     * @return integer 
     */
    public function getNumcuotahoraprocesomaquina()
    {
        return $this->numcuotahoraprocesomaquina;
    }

    /**
     * Set numcuotahoraprocesolabor
     *
     * @param integer $numcuotahoraprocesolabor
     * @return Centrostrabajo
     */
    public function setNumcuotahoraprocesolabor($numcuotahoraprocesolabor)
    {
        $this->numcuotahoraprocesolabor = $numcuotahoraprocesolabor;

        return $this;
    }

    /**
     * Get numcuotahoraprocesolabor
     *
     * @return integer 
     */
    public function getNumcuotahoraprocesolabor()
    {
        return $this->numcuotahoraprocesolabor;
    }

    /**
     * Set numcuotahoraespera
     *
     * @param integer $numcuotahoraespera
     * @return Centrostrabajo
     */
    public function setNumcuotahoraespera($numcuotahoraespera)
    {
        $this->numcuotahoraespera = $numcuotahoraespera;

        return $this;
    }

    /**
     * Get numcuotahoraespera
     *
     * @return integer 
     */
    public function getNumcuotahoraespera()
    {
        return $this->numcuotahoraespera;
    }

    /**
     * Set numcuotahoratraslado
     *
     * @param integer $numcuotahoratraslado
     * @return Centrostrabajo
     */
    public function setNumcuotahoratraslado($numcuotahoratraslado)
    {
        $this->numcuotahoratraslado = $numcuotahoratraslado;

        return $this;
    }

    /**
     * Get numcuotahoratraslado
     *
     * @return integer 
     */
    public function getNumcuotahoratraslado()
    {
        return $this->numcuotahoratraslado;
    }

    /**
     * Set numcuotagastoindirecto
     *
     * @param integer $numcuotagastoindirecto
     * @return Centrostrabajo
     */
    public function setNumcuotagastoindirecto($numcuotagastoindirecto)
    {
        $this->numcuotagastoindirecto = $numcuotagastoindirecto;

        return $this;
    }

    /**
     * Get numcuotagastoindirecto
     *
     * @return integer 
     */
    public function getNumcuotagastoindirecto()
    {
        return $this->numcuotagastoindirecto;
    }

    /**
     * Set logexterno
     *
     * @param boolean $logexterno
     * @return Centrostrabajo
     */
    public function setLogexterno($logexterno)
    {
        $this->logexterno = $logexterno;

        return $this;
    }

    /**
     * Get logexterno
     *
     * @return boolean 
     */
    public function getLogexterno()
    {
        return $this->logexterno;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Centrostrabajo
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
     * @return Centrostrabajo
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
     * @return Centrostrabajo
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
     * @return Centrostrabajo
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
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Centrostrabajo
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
