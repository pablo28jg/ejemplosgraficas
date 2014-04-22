<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordenesproduccionavances
 *
 * @ORM\Table(name="OrdenesProduccionAvances", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id", "NumOrdenProduccion_id"}), @ORM\Index(name="Indice_2", columns={"NumAlmacen_id", "NumOrdenProduccionPadre_id"}), @ORM\Index(name="Indice_3", columns={"NumEjercicio_id", "NumPeriodo"}), @ORM\Index(name="Indice_4", columns={"DteDocumento", "NumAlmacen_id", "NumTipoEstado"}), @ORM\Index(name="Indice_5", columns={"DteDocumento", "NumAlmacenCentroTrabajo_id", "NumTipoEstado"})})
 * @ORM\Entity
 */
class Ordenesproduccionavances
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconsecutivoId = '0';

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
     * @ORM\Column(name="NumOrdenOperacion_id", type="integer", nullable=true)
     */
    private $numordenoperacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOperacionEstandar_id", type="integer", nullable=true)
     */
    private $numoperacionestandarId = '0';

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
     * @ORM\Column(name="NumEmpleado_id", type="integer", nullable=true)
     */
    private $numempleadoId = '0';

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
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



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
     * Set numordenproduccionpadreId
     *
     * @param integer $numordenproduccionpadreId
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * Set numordenoperacionId
     *
     * @param integer $numordenoperacionId
     * @return Ordenesproduccionavances
     */
    public function setNumordenoperacionId($numordenoperacionId)
    {
        $this->numordenoperacionId = $numordenoperacionId;

        return $this;
    }

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
     * Set numoperacionestandarId
     *
     * @param integer $numoperacionestandarId
     * @return Ordenesproduccionavances
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
     * Set dtedocumento
     *
     * @param \DateTime $dtedocumento
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * Set numcentrotrabajoId
     *
     * @param integer $numcentrotrabajoId
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * Set numempleadoId
     *
     * @param integer $numempleadoId
     * @return Ordenesproduccionavances
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
     * Set numcantidadterminada
     *
     * @param float $numcantidadterminada
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * Set numtiemporealcola
     *
     * @param float $numtiemporealcola
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * @return Ordenesproduccionavances
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Ordenesproduccionavances
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
