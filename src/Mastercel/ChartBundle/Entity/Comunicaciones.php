<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunicaciones
 *
 * @ORM\Table(name="Comunicaciones", indexes={@ORM\Index(name="Indice_1", columns={"NumTipoComunicacion", "NumOrden", "LogLimpiarTabla"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Comunicaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumComunicacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcomunicacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComunicacion", type="integer", nullable=true)
     */
    private $numtipocomunicacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelComunicaciones", type="integer", nullable=true)
     */
    private $numnivelcomunicaciones = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreTabla", type="string", length=60, nullable=true)
     */
    private $strnombretabla;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLimpiarTabla", type="boolean", nullable=true)
     */
    private $loglimpiartabla = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTabla", type="integer", nullable=true)
     */
    private $numtipotabla = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemSQLValidacion", type="text", length=16, nullable=true)
     */
    private $memsqlvalidacion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemSQLSeleccion", type="text", length=16, nullable=true)
     */
    private $memsqlseleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemSQLActualizacionAccess", type="text", length=16, nullable=true)
     */
    private $memsqlactualizacionaccess;

    /**
     * @var string
     *
     * @ORM\Column(name="MemSQLActualizacionSqlSrv", type="text", length=16, nullable=true)
     */
    private $memsqlactualizacionsqlsrv;

    /**
     * @var string
     *
     * @ORM\Column(name="MemSQLCorreos", type="text", length=16, nullable=true)
     */
    private $memsqlcorreos;

    /**
     * @var string
     *
     * @ORM\Column(name="MemCondicionSeleccion", type="text", length=16, nullable=true)
     */
    private $memcondicionseleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemCamposNoCambiar", type="text", length=16, nullable=true)
     */
    private $memcamposnocambiar;

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
     * Get numcomunicacionId
     *
     * @return integer 
     */
    public function getNumcomunicacionId()
    {
        return $this->numcomunicacionId;
    }

    /**
     * Set numtipocomunicacion
     *
     * @param integer $numtipocomunicacion
     * @return Comunicaciones
     */
    public function setNumtipocomunicacion($numtipocomunicacion)
    {
        $this->numtipocomunicacion = $numtipocomunicacion;

        return $this;
    }

    /**
     * Get numtipocomunicacion
     *
     * @return integer 
     */
    public function getNumtipocomunicacion()
    {
        return $this->numtipocomunicacion;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Comunicaciones
     */
    public function setNumorden($numorden)
    {
        $this->numorden = $numorden;

        return $this;
    }

    /**
     * Get numorden
     *
     * @return integer 
     */
    public function getNumorden()
    {
        return $this->numorden;
    }

    /**
     * Set numnivelcomunicaciones
     *
     * @param integer $numnivelcomunicaciones
     * @return Comunicaciones
     */
    public function setNumnivelcomunicaciones($numnivelcomunicaciones)
    {
        $this->numnivelcomunicaciones = $numnivelcomunicaciones;

        return $this;
    }

    /**
     * Get numnivelcomunicaciones
     *
     * @return integer 
     */
    public function getNumnivelcomunicaciones()
    {
        return $this->numnivelcomunicaciones;
    }

    /**
     * Set strnombretabla
     *
     * @param string $strnombretabla
     * @return Comunicaciones
     */
    public function setStrnombretabla($strnombretabla)
    {
        $this->strnombretabla = $strnombretabla;

        return $this;
    }

    /**
     * Get strnombretabla
     *
     * @return string 
     */
    public function getStrnombretabla()
    {
        return $this->strnombretabla;
    }

    /**
     * Set loglimpiartabla
     *
     * @param boolean $loglimpiartabla
     * @return Comunicaciones
     */
    public function setLoglimpiartabla($loglimpiartabla)
    {
        $this->loglimpiartabla = $loglimpiartabla;

        return $this;
    }

    /**
     * Get loglimpiartabla
     *
     * @return boolean 
     */
    public function getLoglimpiartabla()
    {
        return $this->loglimpiartabla;
    }

    /**
     * Set numtipotabla
     *
     * @param integer $numtipotabla
     * @return Comunicaciones
     */
    public function setNumtipotabla($numtipotabla)
    {
        $this->numtipotabla = $numtipotabla;

        return $this;
    }

    /**
     * Get numtipotabla
     *
     * @return integer 
     */
    public function getNumtipotabla()
    {
        return $this->numtipotabla;
    }

    /**
     * Set memsqlvalidacion
     *
     * @param string $memsqlvalidacion
     * @return Comunicaciones
     */
    public function setMemsqlvalidacion($memsqlvalidacion)
    {
        $this->memsqlvalidacion = $memsqlvalidacion;

        return $this;
    }

    /**
     * Get memsqlvalidacion
     *
     * @return string 
     */
    public function getMemsqlvalidacion()
    {
        return $this->memsqlvalidacion;
    }

    /**
     * Set memsqlseleccion
     *
     * @param string $memsqlseleccion
     * @return Comunicaciones
     */
    public function setMemsqlseleccion($memsqlseleccion)
    {
        $this->memsqlseleccion = $memsqlseleccion;

        return $this;
    }

    /**
     * Get memsqlseleccion
     *
     * @return string 
     */
    public function getMemsqlseleccion()
    {
        return $this->memsqlseleccion;
    }

    /**
     * Set memsqlactualizacionaccess
     *
     * @param string $memsqlactualizacionaccess
     * @return Comunicaciones
     */
    public function setMemsqlactualizacionaccess($memsqlactualizacionaccess)
    {
        $this->memsqlactualizacionaccess = $memsqlactualizacionaccess;

        return $this;
    }

    /**
     * Get memsqlactualizacionaccess
     *
     * @return string 
     */
    public function getMemsqlactualizacionaccess()
    {
        return $this->memsqlactualizacionaccess;
    }

    /**
     * Set memsqlactualizacionsqlsrv
     *
     * @param string $memsqlactualizacionsqlsrv
     * @return Comunicaciones
     */
    public function setMemsqlactualizacionsqlsrv($memsqlactualizacionsqlsrv)
    {
        $this->memsqlactualizacionsqlsrv = $memsqlactualizacionsqlsrv;

        return $this;
    }

    /**
     * Get memsqlactualizacionsqlsrv
     *
     * @return string 
     */
    public function getMemsqlactualizacionsqlsrv()
    {
        return $this->memsqlactualizacionsqlsrv;
    }

    /**
     * Set memsqlcorreos
     *
     * @param string $memsqlcorreos
     * @return Comunicaciones
     */
    public function setMemsqlcorreos($memsqlcorreos)
    {
        $this->memsqlcorreos = $memsqlcorreos;

        return $this;
    }

    /**
     * Get memsqlcorreos
     *
     * @return string 
     */
    public function getMemsqlcorreos()
    {
        return $this->memsqlcorreos;
    }

    /**
     * Set memcondicionseleccion
     *
     * @param string $memcondicionseleccion
     * @return Comunicaciones
     */
    public function setMemcondicionseleccion($memcondicionseleccion)
    {
        $this->memcondicionseleccion = $memcondicionseleccion;

        return $this;
    }

    /**
     * Get memcondicionseleccion
     *
     * @return string 
     */
    public function getMemcondicionseleccion()
    {
        return $this->memcondicionseleccion;
    }

    /**
     * Set memcamposnocambiar
     *
     * @param string $memcamposnocambiar
     * @return Comunicaciones
     */
    public function setMemcamposnocambiar($memcamposnocambiar)
    {
        $this->memcamposnocambiar = $memcamposnocambiar;

        return $this;
    }

    /**
     * Get memcamposnocambiar
     *
     * @return string 
     */
    public function getMemcamposnocambiar()
    {
        return $this->memcamposnocambiar;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Comunicaciones
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
     * @return Comunicaciones
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
     * @return Comunicaciones
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
     * @return Comunicaciones
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
     * @return Comunicaciones
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
