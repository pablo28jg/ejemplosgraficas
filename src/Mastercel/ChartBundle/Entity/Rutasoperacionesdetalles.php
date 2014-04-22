<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rutasoperacionesdetalles
 *
 * @ORM\Table(name="RutasOperacionesDetalles", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_5", columns={"NumRutaOperacion_id", "NumOperacionEstandar_id"})}, indexes={@ORM\Index(name="Indice_1", columns={"NumOperacionEstandar_id"}), @ORM\Index(name="Indice_2", columns={"NumProveedor_id"}), @ORM\Index(name="Indice_3", columns={"NumMaquina_id"}), @ORM\Index(name="Indice_4", columns={"NumHerramienta_id"}), @ORM\Index(name="Indice_6", columns={"NumRutaOperacion_id", "NumSecuencia"})})
 * @ORM\Entity
 */
class Rutasoperacionesdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumRutaOperacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numrutaoperacionId = '0';

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
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoUnitario", type="integer", nullable=true)
     */
    private $numcostounitario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasEntrega", type="integer", nullable=true)
     */
    private $numdiasentrega = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumDiaEjecucion", type="integer", nullable=true)
     */
    private $numdiaejecucion = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEfectiva", type="datetime", nullable=true)
     */
    private $dteefectiva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteExpiracion", type="datetime", nullable=true)
     */
    private $dteexpiracion;

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoCola", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempocola = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoPreparacionMaquina", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempopreparacionmaquina = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoPreparacionLabor", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempopreparacionlabor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoProcesoMaquina", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoprocesomaquina = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoProcesoLabor", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoprocesolabor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoEspera", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempoespera = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTiempoTraslado", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtiempotraslado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemInstrucciones", type="text", length=16, nullable=true)
     */
    private $meminstrucciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogUsarFormulaSeleccion", type="boolean", nullable=true)
     */
    private $logusarformulaseleccion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemFormulaSeleccion", type="text", length=16, nullable=true)
     */
    private $memformulaseleccion;



    /**
     * Set numrutaoperacionId
     *
     * @param integer $numrutaoperacionId
     * @return Rutasoperacionesdetalles
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Rutasoperacionesdetalles
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
     * Set numsecuencia
     *
     * @param integer $numsecuencia
     * @return Rutasoperacionesdetalles
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
     * @return Rutasoperacionesdetalles
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
     * @return Rutasoperacionesdetalles
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
     * @return Rutasoperacionesdetalles
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
     * Set numcostounitario
     *
     * @param integer $numcostounitario
     * @return Rutasoperacionesdetalles
     */
    public function setNumcostounitario($numcostounitario)
    {
        $this->numcostounitario = $numcostounitario;

        return $this;
    }

    /**
     * Get numcostounitario
     *
     * @return integer 
     */
    public function getNumcostounitario()
    {
        return $this->numcostounitario;
    }

    /**
     * Set numdiasentrega
     *
     * @param integer $numdiasentrega
     * @return Rutasoperacionesdetalles
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
     * Set nummaquinaId
     *
     * @param integer $nummaquinaId
     * @return Rutasoperacionesdetalles
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
     * @return Rutasoperacionesdetalles
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
     * Set logrecibeinventario
     *
     * @param boolean $logrecibeinventario
     * @return Rutasoperacionesdetalles
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
     * @return Rutasoperacionesdetalles
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
     * @return Rutasoperacionesdetalles
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
     * Set numdiaejecucion
     *
     * @param integer $numdiaejecucion
     * @return Rutasoperacionesdetalles
     */
    public function setNumdiaejecucion($numdiaejecucion)
    {
        $this->numdiaejecucion = $numdiaejecucion;

        return $this;
    }

    /**
     * Get numdiaejecucion
     *
     * @return integer 
     */
    public function getNumdiaejecucion()
    {
        return $this->numdiaejecucion;
    }

    /**
     * Set dteefectiva
     *
     * @param \DateTime $dteefectiva
     * @return Rutasoperacionesdetalles
     */
    public function setDteefectiva($dteefectiva)
    {
        $this->dteefectiva = $dteefectiva;

        return $this;
    }

    /**
     * Get dteefectiva
     *
     * @return \DateTime 
     */
    public function getDteefectiva()
    {
        return $this->dteefectiva;
    }

    /**
     * Set dteexpiracion
     *
     * @param \DateTime $dteexpiracion
     * @return Rutasoperacionesdetalles
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
     * Set numtiempocola
     *
     * @param float $numtiempocola
     * @return Rutasoperacionesdetalles
     */
    public function setNumtiempocola($numtiempocola)
    {
        $this->numtiempocola = $numtiempocola;

        return $this;
    }

    /**
     * Get numtiempocola
     *
     * @return float 
     */
    public function getNumtiempocola()
    {
        return $this->numtiempocola;
    }

    /**
     * Set numtiempopreparacionmaquina
     *
     * @param float $numtiempopreparacionmaquina
     * @return Rutasoperacionesdetalles
     */
    public function setNumtiempopreparacionmaquina($numtiempopreparacionmaquina)
    {
        $this->numtiempopreparacionmaquina = $numtiempopreparacionmaquina;

        return $this;
    }

    /**
     * Get numtiempopreparacionmaquina
     *
     * @return float 
     */
    public function getNumtiempopreparacionmaquina()
    {
        return $this->numtiempopreparacionmaquina;
    }

    /**
     * Set numtiempopreparacionlabor
     *
     * @param float $numtiempopreparacionlabor
     * @return Rutasoperacionesdetalles
     */
    public function setNumtiempopreparacionlabor($numtiempopreparacionlabor)
    {
        $this->numtiempopreparacionlabor = $numtiempopreparacionlabor;

        return $this;
    }

    /**
     * Get numtiempopreparacionlabor
     *
     * @return float 
     */
    public function getNumtiempopreparacionlabor()
    {
        return $this->numtiempopreparacionlabor;
    }

    /**
     * Set numtiempoprocesomaquina
     *
     * @param float $numtiempoprocesomaquina
     * @return Rutasoperacionesdetalles
     */
    public function setNumtiempoprocesomaquina($numtiempoprocesomaquina)
    {
        $this->numtiempoprocesomaquina = $numtiempoprocesomaquina;

        return $this;
    }

    /**
     * Get numtiempoprocesomaquina
     *
     * @return float 
     */
    public function getNumtiempoprocesomaquina()
    {
        return $this->numtiempoprocesomaquina;
    }

    /**
     * Set numtiempoprocesolabor
     *
     * @param float $numtiempoprocesolabor
     * @return Rutasoperacionesdetalles
     */
    public function setNumtiempoprocesolabor($numtiempoprocesolabor)
    {
        $this->numtiempoprocesolabor = $numtiempoprocesolabor;

        return $this;
    }

    /**
     * Get numtiempoprocesolabor
     *
     * @return float 
     */
    public function getNumtiempoprocesolabor()
    {
        return $this->numtiempoprocesolabor;
    }

    /**
     * Set numtiempoespera
     *
     * @param float $numtiempoespera
     * @return Rutasoperacionesdetalles
     */
    public function setNumtiempoespera($numtiempoespera)
    {
        $this->numtiempoespera = $numtiempoespera;

        return $this;
    }

    /**
     * Get numtiempoespera
     *
     * @return float 
     */
    public function getNumtiempoespera()
    {
        return $this->numtiempoespera;
    }

    /**
     * Set numtiempotraslado
     *
     * @param float $numtiempotraslado
     * @return Rutasoperacionesdetalles
     */
    public function setNumtiempotraslado($numtiempotraslado)
    {
        $this->numtiempotraslado = $numtiempotraslado;

        return $this;
    }

    /**
     * Get numtiempotraslado
     *
     * @return float 
     */
    public function getNumtiempotraslado()
    {
        return $this->numtiempotraslado;
    }

    /**
     * Set meminstrucciones
     *
     * @param string $meminstrucciones
     * @return Rutasoperacionesdetalles
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
     * Set logusarformulaseleccion
     *
     * @param boolean $logusarformulaseleccion
     * @return Rutasoperacionesdetalles
     */
    public function setLogusarformulaseleccion($logusarformulaseleccion)
    {
        $this->logusarformulaseleccion = $logusarformulaseleccion;

        return $this;
    }

    /**
     * Get logusarformulaseleccion
     *
     * @return boolean 
     */
    public function getLogusarformulaseleccion()
    {
        return $this->logusarformulaseleccion;
    }

    /**
     * Set memformulaseleccion
     *
     * @param string $memformulaseleccion
     * @return Rutasoperacionesdetalles
     */
    public function setMemformulaseleccion($memformulaseleccion)
    {
        $this->memformulaseleccion = $memformulaseleccion;

        return $this;
    }

    /**
     * Get memformulaseleccion
     *
     * @return string 
     */
    public function getMemformulaseleccion()
    {
        return $this->memformulaseleccion;
    }
}
