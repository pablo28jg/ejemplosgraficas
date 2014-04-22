<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operacionesestandar
 *
 * @ORM\Table(name="OperacionesEstandar", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrOperacionEstandar_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumCentroTrabajo_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Operacionesestandar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOperacionEstandar_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numoperacionestandarId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrOperacionEstandar_ky", type="string", length=10, nullable=true)
     */
    private $stroperacionestandarKy;

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
     * @ORM\Column(name="NumOperadoresRequeridos", type="integer", nullable=true)
     */
    private $numoperadoresrequeridos = '0';

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
     * @ORM\Column(name="NumCantidadProducir", type="integer", nullable=true)
     */
    private $numcantidadproducir = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="LogExterna", type="boolean", nullable=true)
     */
    private $logexterna = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAsignarCola", type="boolean", nullable=true)
     */
    private $logasignarcola = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAsignarPreparacionMaquina", type="boolean", nullable=true)
     */
    private $logasignarpreparacionmaquina = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAsignarPreparacionLabor", type="boolean", nullable=true)
     */
    private $logasignarpreparacionlabor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAsignarProcesoMaquina", type="boolean", nullable=true)
     */
    private $logasignarprocesomaquina = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAsignarProcesoLabor", type="boolean", nullable=true)
     */
    private $logasignarprocesolabor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAsignarEspera", type="boolean", nullable=true)
     */
    private $logasignarespera = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAsignarTraslado", type="boolean", nullable=true)
     */
    private $logasignartraslado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTiempoCola", type="integer", nullable=true)
     */
    private $numtipotiempocola = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTiempoPreparacionMaquina", type="integer", nullable=true)
     */
    private $numtipotiempopreparacionmaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTiempoPreparacionLabor", type="integer", nullable=true)
     */
    private $numtipotiempopreparacionlabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTiempoProcesoMaquina", type="integer", nullable=true)
     */
    private $numtipotiempoprocesomaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTiempoProcesoLabor", type="integer", nullable=true)
     */
    private $numtipotiempoprocesolabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTiempoEspera", type="integer", nullable=true)
     */
    private $numtipotiempoespera = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTiempoTraslado", type="integer", nullable=true)
     */
    private $numtipotiempotraslado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaCola_id", type="integer", nullable=true)
     */
    private $numcategoriacolaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaPreparacionMaquina_id", type="integer", nullable=true)
     */
    private $numcategoriapreparacionmaquinaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaPreparacionLabor_id", type="integer", nullable=true)
     */
    private $numcategoriapreparacionlaborId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaProcesoMaquina_id", type="integer", nullable=true)
     */
    private $numcategoriaprocesomaquinaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaProcesoLabor_id", type="integer", nullable=true)
     */
    private $numcategoriaprocesolaborId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaEspera_id", type="integer", nullable=true)
     */
    private $numcategoriaesperaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaTraslado_id", type="integer", nullable=true)
     */
    private $numcategoriatrasladoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaGastoIndirecto_id", type="integer", nullable=true)
     */
    private $numcategoriagastoindirectoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemInstrucciones", type="text", length=16, nullable=true)
     */
    private $meminstrucciones;

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
     * Get numoperacionestandarId
     *
     * @return integer 
     */
    public function getNumoperacionestandarId()
    {
        return $this->numoperacionestandarId;
    }

    /**
     * Set stroperacionestandarKy
     *
     * @param string $stroperacionestandarKy
     * @return Operacionesestandar
     */
    public function setStroperacionestandarKy($stroperacionestandarKy)
    {
        $this->stroperacionestandarKy = $stroperacionestandarKy;

        return $this;
    }

    /**
     * Get stroperacionestandarKy
     *
     * @return string 
     */
    public function getStroperacionestandarKy()
    {
        return $this->stroperacionestandarKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Operacionesestandar
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
     * @return Operacionesestandar
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
     * Set numoperadoresrequeridos
     *
     * @param integer $numoperadoresrequeridos
     * @return Operacionesestandar
     */
    public function setNumoperadoresrequeridos($numoperadoresrequeridos)
    {
        $this->numoperadoresrequeridos = $numoperadoresrequeridos;

        return $this;
    }

    /**
     * Get numoperadoresrequeridos
     *
     * @return integer 
     */
    public function getNumoperadoresrequeridos()
    {
        return $this->numoperadoresrequeridos;
    }

    /**
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Operacionesestandar
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
     * @return Operacionesestandar
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
     * Set numcantidadproducir
     *
     * @param integer $numcantidadproducir
     * @return Operacionesestandar
     */
    public function setNumcantidadproducir($numcantidadproducir)
    {
        $this->numcantidadproducir = $numcantidadproducir;

        return $this;
    }

    /**
     * Get numcantidadproducir
     *
     * @return integer 
     */
    public function getNumcantidadproducir()
    {
        return $this->numcantidadproducir;
    }

    /**
     * Set logrecibeinventario
     *
     * @param boolean $logrecibeinventario
     * @return Operacionesestandar
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
     * @return Operacionesestandar
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
     * @return Operacionesestandar
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
     * Set logexterna
     *
     * @param boolean $logexterna
     * @return Operacionesestandar
     */
    public function setLogexterna($logexterna)
    {
        $this->logexterna = $logexterna;

        return $this;
    }

    /**
     * Get logexterna
     *
     * @return boolean 
     */
    public function getLogexterna()
    {
        return $this->logexterna;
    }

    /**
     * Set logasignarcola
     *
     * @param boolean $logasignarcola
     * @return Operacionesestandar
     */
    public function setLogasignarcola($logasignarcola)
    {
        $this->logasignarcola = $logasignarcola;

        return $this;
    }

    /**
     * Get logasignarcola
     *
     * @return boolean 
     */
    public function getLogasignarcola()
    {
        return $this->logasignarcola;
    }

    /**
     * Set logasignarpreparacionmaquina
     *
     * @param boolean $logasignarpreparacionmaquina
     * @return Operacionesestandar
     */
    public function setLogasignarpreparacionmaquina($logasignarpreparacionmaquina)
    {
        $this->logasignarpreparacionmaquina = $logasignarpreparacionmaquina;

        return $this;
    }

    /**
     * Get logasignarpreparacionmaquina
     *
     * @return boolean 
     */
    public function getLogasignarpreparacionmaquina()
    {
        return $this->logasignarpreparacionmaquina;
    }

    /**
     * Set logasignarpreparacionlabor
     *
     * @param boolean $logasignarpreparacionlabor
     * @return Operacionesestandar
     */
    public function setLogasignarpreparacionlabor($logasignarpreparacionlabor)
    {
        $this->logasignarpreparacionlabor = $logasignarpreparacionlabor;

        return $this;
    }

    /**
     * Get logasignarpreparacionlabor
     *
     * @return boolean 
     */
    public function getLogasignarpreparacionlabor()
    {
        return $this->logasignarpreparacionlabor;
    }

    /**
     * Set logasignarprocesomaquina
     *
     * @param boolean $logasignarprocesomaquina
     * @return Operacionesestandar
     */
    public function setLogasignarprocesomaquina($logasignarprocesomaquina)
    {
        $this->logasignarprocesomaquina = $logasignarprocesomaquina;

        return $this;
    }

    /**
     * Get logasignarprocesomaquina
     *
     * @return boolean 
     */
    public function getLogasignarprocesomaquina()
    {
        return $this->logasignarprocesomaquina;
    }

    /**
     * Set logasignarprocesolabor
     *
     * @param boolean $logasignarprocesolabor
     * @return Operacionesestandar
     */
    public function setLogasignarprocesolabor($logasignarprocesolabor)
    {
        $this->logasignarprocesolabor = $logasignarprocesolabor;

        return $this;
    }

    /**
     * Get logasignarprocesolabor
     *
     * @return boolean 
     */
    public function getLogasignarprocesolabor()
    {
        return $this->logasignarprocesolabor;
    }

    /**
     * Set logasignarespera
     *
     * @param boolean $logasignarespera
     * @return Operacionesestandar
     */
    public function setLogasignarespera($logasignarespera)
    {
        $this->logasignarespera = $logasignarespera;

        return $this;
    }

    /**
     * Get logasignarespera
     *
     * @return boolean 
     */
    public function getLogasignarespera()
    {
        return $this->logasignarespera;
    }

    /**
     * Set logasignartraslado
     *
     * @param boolean $logasignartraslado
     * @return Operacionesestandar
     */
    public function setLogasignartraslado($logasignartraslado)
    {
        $this->logasignartraslado = $logasignartraslado;

        return $this;
    }

    /**
     * Get logasignartraslado
     *
     * @return boolean 
     */
    public function getLogasignartraslado()
    {
        return $this->logasignartraslado;
    }

    /**
     * Set numtipotiempocola
     *
     * @param integer $numtipotiempocola
     * @return Operacionesestandar
     */
    public function setNumtipotiempocola($numtipotiempocola)
    {
        $this->numtipotiempocola = $numtipotiempocola;

        return $this;
    }

    /**
     * Get numtipotiempocola
     *
     * @return integer 
     */
    public function getNumtipotiempocola()
    {
        return $this->numtipotiempocola;
    }

    /**
     * Set numtipotiempopreparacionmaquina
     *
     * @param integer $numtipotiempopreparacionmaquina
     * @return Operacionesestandar
     */
    public function setNumtipotiempopreparacionmaquina($numtipotiempopreparacionmaquina)
    {
        $this->numtipotiempopreparacionmaquina = $numtipotiempopreparacionmaquina;

        return $this;
    }

    /**
     * Get numtipotiempopreparacionmaquina
     *
     * @return integer 
     */
    public function getNumtipotiempopreparacionmaquina()
    {
        return $this->numtipotiempopreparacionmaquina;
    }

    /**
     * Set numtipotiempopreparacionlabor
     *
     * @param integer $numtipotiempopreparacionlabor
     * @return Operacionesestandar
     */
    public function setNumtipotiempopreparacionlabor($numtipotiempopreparacionlabor)
    {
        $this->numtipotiempopreparacionlabor = $numtipotiempopreparacionlabor;

        return $this;
    }

    /**
     * Get numtipotiempopreparacionlabor
     *
     * @return integer 
     */
    public function getNumtipotiempopreparacionlabor()
    {
        return $this->numtipotiempopreparacionlabor;
    }

    /**
     * Set numtipotiempoprocesomaquina
     *
     * @param integer $numtipotiempoprocesomaquina
     * @return Operacionesestandar
     */
    public function setNumtipotiempoprocesomaquina($numtipotiempoprocesomaquina)
    {
        $this->numtipotiempoprocesomaquina = $numtipotiempoprocesomaquina;

        return $this;
    }

    /**
     * Get numtipotiempoprocesomaquina
     *
     * @return integer 
     */
    public function getNumtipotiempoprocesomaquina()
    {
        return $this->numtipotiempoprocesomaquina;
    }

    /**
     * Set numtipotiempoprocesolabor
     *
     * @param integer $numtipotiempoprocesolabor
     * @return Operacionesestandar
     */
    public function setNumtipotiempoprocesolabor($numtipotiempoprocesolabor)
    {
        $this->numtipotiempoprocesolabor = $numtipotiempoprocesolabor;

        return $this;
    }

    /**
     * Get numtipotiempoprocesolabor
     *
     * @return integer 
     */
    public function getNumtipotiempoprocesolabor()
    {
        return $this->numtipotiempoprocesolabor;
    }

    /**
     * Set numtipotiempoespera
     *
     * @param integer $numtipotiempoespera
     * @return Operacionesestandar
     */
    public function setNumtipotiempoespera($numtipotiempoespera)
    {
        $this->numtipotiempoespera = $numtipotiempoespera;

        return $this;
    }

    /**
     * Get numtipotiempoespera
     *
     * @return integer 
     */
    public function getNumtipotiempoespera()
    {
        return $this->numtipotiempoespera;
    }

    /**
     * Set numtipotiempotraslado
     *
     * @param integer $numtipotiempotraslado
     * @return Operacionesestandar
     */
    public function setNumtipotiempotraslado($numtipotiempotraslado)
    {
        $this->numtipotiempotraslado = $numtipotiempotraslado;

        return $this;
    }

    /**
     * Get numtipotiempotraslado
     *
     * @return integer 
     */
    public function getNumtipotiempotraslado()
    {
        return $this->numtipotiempotraslado;
    }

    /**
     * Set numcategoriacolaId
     *
     * @param integer $numcategoriacolaId
     * @return Operacionesestandar
     */
    public function setNumcategoriacolaId($numcategoriacolaId)
    {
        $this->numcategoriacolaId = $numcategoriacolaId;

        return $this;
    }

    /**
     * Get numcategoriacolaId
     *
     * @return integer 
     */
    public function getNumcategoriacolaId()
    {
        return $this->numcategoriacolaId;
    }

    /**
     * Set numcategoriapreparacionmaquinaId
     *
     * @param integer $numcategoriapreparacionmaquinaId
     * @return Operacionesestandar
     */
    public function setNumcategoriapreparacionmaquinaId($numcategoriapreparacionmaquinaId)
    {
        $this->numcategoriapreparacionmaquinaId = $numcategoriapreparacionmaquinaId;

        return $this;
    }

    /**
     * Get numcategoriapreparacionmaquinaId
     *
     * @return integer 
     */
    public function getNumcategoriapreparacionmaquinaId()
    {
        return $this->numcategoriapreparacionmaquinaId;
    }

    /**
     * Set numcategoriapreparacionlaborId
     *
     * @param integer $numcategoriapreparacionlaborId
     * @return Operacionesestandar
     */
    public function setNumcategoriapreparacionlaborId($numcategoriapreparacionlaborId)
    {
        $this->numcategoriapreparacionlaborId = $numcategoriapreparacionlaborId;

        return $this;
    }

    /**
     * Get numcategoriapreparacionlaborId
     *
     * @return integer 
     */
    public function getNumcategoriapreparacionlaborId()
    {
        return $this->numcategoriapreparacionlaborId;
    }

    /**
     * Set numcategoriaprocesomaquinaId
     *
     * @param integer $numcategoriaprocesomaquinaId
     * @return Operacionesestandar
     */
    public function setNumcategoriaprocesomaquinaId($numcategoriaprocesomaquinaId)
    {
        $this->numcategoriaprocesomaquinaId = $numcategoriaprocesomaquinaId;

        return $this;
    }

    /**
     * Get numcategoriaprocesomaquinaId
     *
     * @return integer 
     */
    public function getNumcategoriaprocesomaquinaId()
    {
        return $this->numcategoriaprocesomaquinaId;
    }

    /**
     * Set numcategoriaprocesolaborId
     *
     * @param integer $numcategoriaprocesolaborId
     * @return Operacionesestandar
     */
    public function setNumcategoriaprocesolaborId($numcategoriaprocesolaborId)
    {
        $this->numcategoriaprocesolaborId = $numcategoriaprocesolaborId;

        return $this;
    }

    /**
     * Get numcategoriaprocesolaborId
     *
     * @return integer 
     */
    public function getNumcategoriaprocesolaborId()
    {
        return $this->numcategoriaprocesolaborId;
    }

    /**
     * Set numcategoriaesperaId
     *
     * @param integer $numcategoriaesperaId
     * @return Operacionesestandar
     */
    public function setNumcategoriaesperaId($numcategoriaesperaId)
    {
        $this->numcategoriaesperaId = $numcategoriaesperaId;

        return $this;
    }

    /**
     * Get numcategoriaesperaId
     *
     * @return integer 
     */
    public function getNumcategoriaesperaId()
    {
        return $this->numcategoriaesperaId;
    }

    /**
     * Set numcategoriatrasladoId
     *
     * @param integer $numcategoriatrasladoId
     * @return Operacionesestandar
     */
    public function setNumcategoriatrasladoId($numcategoriatrasladoId)
    {
        $this->numcategoriatrasladoId = $numcategoriatrasladoId;

        return $this;
    }

    /**
     * Get numcategoriatrasladoId
     *
     * @return integer 
     */
    public function getNumcategoriatrasladoId()
    {
        return $this->numcategoriatrasladoId;
    }

    /**
     * Set numcategoriagastoindirectoId
     *
     * @param integer $numcategoriagastoindirectoId
     * @return Operacionesestandar
     */
    public function setNumcategoriagastoindirectoId($numcategoriagastoindirectoId)
    {
        $this->numcategoriagastoindirectoId = $numcategoriagastoindirectoId;

        return $this;
    }

    /**
     * Get numcategoriagastoindirectoId
     *
     * @return integer 
     */
    public function getNumcategoriagastoindirectoId()
    {
        return $this->numcategoriagastoindirectoId;
    }

    /**
     * Set meminstrucciones
     *
     * @param string $meminstrucciones
     * @return Operacionesestandar
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Operacionesestandar
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
     * @return Operacionesestandar
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
     * @return Operacionesestandar
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
     * @return Operacionesestandar
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
     * @return Operacionesestandar
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
