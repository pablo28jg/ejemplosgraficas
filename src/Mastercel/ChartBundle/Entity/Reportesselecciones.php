<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportesselecciones
 *
 * @ORM\Table(name="ReportesSelecciones", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_3", columns={"DteSiguienteEjecucion"})})
 * @ORM\Entity
 */
class Reportesselecciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumUsuario_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numusuarioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numreporteId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjDatos", type="text", length=16, nullable=true)
     */
    private $objdatos;

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
     * @var integer
     *
     * @ORM\Column(name="NumTipoEjecucion", type="integer", nullable=true)
     */
    private $numtipoejecucion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjecutarCada", type="integer", nullable=true)
     */
    private $numejecutarcada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjecutarCadaDias", type="integer", nullable=true)
     */
    private $numejecutarcadadias = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjecutarCadaMeses", type="integer", nullable=true)
     */
    private $numejecutarcadameses = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEjecutarCada", type="integer", nullable=true)
     */
    private $numtipoejecutarcada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEjecucionDiaria", type="integer", nullable=true)
     */
    private $numtipoejecuciondiaria = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjecucionDiaria", type="integer", nullable=true)
     */
    private $numejecuciondiaria = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEjecucionTiempo", type="integer", nullable=true)
     */
    private $numtipoejecuciontiempo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeInicio", type="datetime", nullable=true)
     */
    private $tmeinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTermino", type="datetime", nullable=true)
     */
    private $tmetermino;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicio", type="datetime", nullable=true)
     */
    private $dteinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTermino", type="datetime", nullable=true)
     */
    private $dtetermino;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogExpira", type="boolean", nullable=true)
     */
    private $logexpira = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteSiguienteEjecucion", type="datetime", nullable=true)
     */
    private $dtesiguienteejecucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoFormatoExportacion", type="integer", nullable=true)
     */
    private $numtipoformatoexportacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemCorreosElectronicos", type="text", length=16, nullable=true)
     */
    private $memcorreoselectronicos;



    /**
     * Set numusuarioId
     *
     * @param integer $numusuarioId
     * @return Reportesselecciones
     */
    public function setNumusuarioId($numusuarioId)
    {
        $this->numusuarioId = $numusuarioId;

        return $this;
    }

    /**
     * Get numusuarioId
     *
     * @return integer 
     */
    public function getNumusuarioId()
    {
        return $this->numusuarioId;
    }

    /**
     * Set numreporteId
     *
     * @param integer $numreporteId
     * @return Reportesselecciones
     */
    public function setNumreporteId($numreporteId)
    {
        $this->numreporteId = $numreporteId;

        return $this;
    }

    /**
     * Get numreporteId
     *
     * @return integer 
     */
    public function getNumreporteId()
    {
        return $this->numreporteId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Reportesselecciones
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
     * Set objdatos
     *
     * @param string $objdatos
     * @return Reportesselecciones
     */
    public function setObjdatos($objdatos)
    {
        $this->objdatos = $objdatos;

        return $this;
    }

    /**
     * Get objdatos
     *
     * @return string 
     */
    public function getObjdatos()
    {
        return $this->objdatos;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Reportesselecciones
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
     * @return Reportesselecciones
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

    /**
     * Set numtipoejecucion
     *
     * @param integer $numtipoejecucion
     * @return Reportesselecciones
     */
    public function setNumtipoejecucion($numtipoejecucion)
    {
        $this->numtipoejecucion = $numtipoejecucion;

        return $this;
    }

    /**
     * Get numtipoejecucion
     *
     * @return integer 
     */
    public function getNumtipoejecucion()
    {
        return $this->numtipoejecucion;
    }

    /**
     * Set numejecutarcada
     *
     * @param integer $numejecutarcada
     * @return Reportesselecciones
     */
    public function setNumejecutarcada($numejecutarcada)
    {
        $this->numejecutarcada = $numejecutarcada;

        return $this;
    }

    /**
     * Get numejecutarcada
     *
     * @return integer 
     */
    public function getNumejecutarcada()
    {
        return $this->numejecutarcada;
    }

    /**
     * Set numejecutarcadadias
     *
     * @param integer $numejecutarcadadias
     * @return Reportesselecciones
     */
    public function setNumejecutarcadadias($numejecutarcadadias)
    {
        $this->numejecutarcadadias = $numejecutarcadadias;

        return $this;
    }

    /**
     * Get numejecutarcadadias
     *
     * @return integer 
     */
    public function getNumejecutarcadadias()
    {
        return $this->numejecutarcadadias;
    }

    /**
     * Set numejecutarcadameses
     *
     * @param integer $numejecutarcadameses
     * @return Reportesselecciones
     */
    public function setNumejecutarcadameses($numejecutarcadameses)
    {
        $this->numejecutarcadameses = $numejecutarcadameses;

        return $this;
    }

    /**
     * Get numejecutarcadameses
     *
     * @return integer 
     */
    public function getNumejecutarcadameses()
    {
        return $this->numejecutarcadameses;
    }

    /**
     * Set numtipoejecutarcada
     *
     * @param integer $numtipoejecutarcada
     * @return Reportesselecciones
     */
    public function setNumtipoejecutarcada($numtipoejecutarcada)
    {
        $this->numtipoejecutarcada = $numtipoejecutarcada;

        return $this;
    }

    /**
     * Get numtipoejecutarcada
     *
     * @return integer 
     */
    public function getNumtipoejecutarcada()
    {
        return $this->numtipoejecutarcada;
    }

    /**
     * Set numtipoejecuciondiaria
     *
     * @param integer $numtipoejecuciondiaria
     * @return Reportesselecciones
     */
    public function setNumtipoejecuciondiaria($numtipoejecuciondiaria)
    {
        $this->numtipoejecuciondiaria = $numtipoejecuciondiaria;

        return $this;
    }

    /**
     * Get numtipoejecuciondiaria
     *
     * @return integer 
     */
    public function getNumtipoejecuciondiaria()
    {
        return $this->numtipoejecuciondiaria;
    }

    /**
     * Set numejecuciondiaria
     *
     * @param integer $numejecuciondiaria
     * @return Reportesselecciones
     */
    public function setNumejecuciondiaria($numejecuciondiaria)
    {
        $this->numejecuciondiaria = $numejecuciondiaria;

        return $this;
    }

    /**
     * Get numejecuciondiaria
     *
     * @return integer 
     */
    public function getNumejecuciondiaria()
    {
        return $this->numejecuciondiaria;
    }

    /**
     * Set numtipoejecuciontiempo
     *
     * @param integer $numtipoejecuciontiempo
     * @return Reportesselecciones
     */
    public function setNumtipoejecuciontiempo($numtipoejecuciontiempo)
    {
        $this->numtipoejecuciontiempo = $numtipoejecuciontiempo;

        return $this;
    }

    /**
     * Get numtipoejecuciontiempo
     *
     * @return integer 
     */
    public function getNumtipoejecuciontiempo()
    {
        return $this->numtipoejecuciontiempo;
    }

    /**
     * Set tmeinicio
     *
     * @param \DateTime $tmeinicio
     * @return Reportesselecciones
     */
    public function setTmeinicio($tmeinicio)
    {
        $this->tmeinicio = $tmeinicio;

        return $this;
    }

    /**
     * Get tmeinicio
     *
     * @return \DateTime 
     */
    public function getTmeinicio()
    {
        return $this->tmeinicio;
    }

    /**
     * Set tmetermino
     *
     * @param \DateTime $tmetermino
     * @return Reportesselecciones
     */
    public function setTmetermino($tmetermino)
    {
        $this->tmetermino = $tmetermino;

        return $this;
    }

    /**
     * Get tmetermino
     *
     * @return \DateTime 
     */
    public function getTmetermino()
    {
        return $this->tmetermino;
    }

    /**
     * Set dteinicio
     *
     * @param \DateTime $dteinicio
     * @return Reportesselecciones
     */
    public function setDteinicio($dteinicio)
    {
        $this->dteinicio = $dteinicio;

        return $this;
    }

    /**
     * Get dteinicio
     *
     * @return \DateTime 
     */
    public function getDteinicio()
    {
        return $this->dteinicio;
    }

    /**
     * Set dtetermino
     *
     * @param \DateTime $dtetermino
     * @return Reportesselecciones
     */
    public function setDtetermino($dtetermino)
    {
        $this->dtetermino = $dtetermino;

        return $this;
    }

    /**
     * Get dtetermino
     *
     * @return \DateTime 
     */
    public function getDtetermino()
    {
        return $this->dtetermino;
    }

    /**
     * Set logexpira
     *
     * @param boolean $logexpira
     * @return Reportesselecciones
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
     * Set dtesiguienteejecucion
     *
     * @param \DateTime $dtesiguienteejecucion
     * @return Reportesselecciones
     */
    public function setDtesiguienteejecucion($dtesiguienteejecucion)
    {
        $this->dtesiguienteejecucion = $dtesiguienteejecucion;

        return $this;
    }

    /**
     * Get dtesiguienteejecucion
     *
     * @return \DateTime 
     */
    public function getDtesiguienteejecucion()
    {
        return $this->dtesiguienteejecucion;
    }

    /**
     * Set numtipoformatoexportacion
     *
     * @param integer $numtipoformatoexportacion
     * @return Reportesselecciones
     */
    public function setNumtipoformatoexportacion($numtipoformatoexportacion)
    {
        $this->numtipoformatoexportacion = $numtipoformatoexportacion;

        return $this;
    }

    /**
     * Get numtipoformatoexportacion
     *
     * @return integer 
     */
    public function getNumtipoformatoexportacion()
    {
        return $this->numtipoformatoexportacion;
    }

    /**
     * Set memcorreoselectronicos
     *
     * @param string $memcorreoselectronicos
     * @return Reportesselecciones
     */
    public function setMemcorreoselectronicos($memcorreoselectronicos)
    {
        $this->memcorreoselectronicos = $memcorreoselectronicos;

        return $this;
    }

    /**
     * Get memcorreoselectronicos
     *
     * @return string 
     */
    public function getMemcorreoselectronicos()
    {
        return $this->memcorreoselectronicos;
    }
}
