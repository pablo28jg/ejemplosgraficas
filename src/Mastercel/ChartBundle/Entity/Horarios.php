<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horarios
 *
 * @ORM\Table(name="Horarios", indexes={@ORM\Index(name="Indice_1", columns={"StrHorario_ky"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Horarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumHorario_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numhorarioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrHorario_ky", type="string", length=10, nullable=true)
     */
    private $strhorarioKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasPeriodo", type="integer", nullable=true)
     */
    private $numdiasperiodo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDiaInicio", type="integer", nullable=true)
     */
    private $numtipodiainicio = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeMinimoLaboral", type="datetime", nullable=true)
     */
    private $tmeminimolaboral;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeJornadaLaboral", type="datetime", nullable=true)
     */
    private $tmejornadalaboral;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPagarTiempoExtraEntrada", type="boolean", nullable=true)
     */
    private $logpagartiempoextraentrada = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPagarTiempoExtraSalida", type="boolean", nullable=true)
     */
    private $logpagartiempoextrasalida = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPagarTiempoExtraDisponerComida", type="boolean", nullable=true)
     */
    private $logpagartiempoextradisponercomida = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPagarTiempoExtraDiaDescanso", type="boolean", nullable=true)
     */
    private $logpagartiempoextradiadescanso = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPagarTiempoExtraDiaFestivo", type="boolean", nullable=true)
     */
    private $logpagartiempoextradiafestivo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPagarPuntualidad", type="boolean", nullable=true)
     */
    private $logpagarpuntualidad = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogDescontarRetardos", type="boolean", nullable=true)
     */
    private $logdescontarretardos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRetardosPeriodo", type="integer", nullable=true)
     */
    private $numretardosperiodo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTiempoExtraMinimoJornada", type="datetime", nullable=true)
     */
    private $tmetiempoextraminimojornada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTiempoExtraMaximoJornada", type="datetime", nullable=true)
     */
    private $tmetiempoextramaximojornada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTiempoExtraDoblePeriodo", type="datetime", nullable=true)
     */
    private $tmetiempoextradobleperiodo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTiempoExtraTriplePeriodo", type="datetime", nullable=true)
     */
    private $tmetiempoextratripleperiodo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTiempoExtraMaximoPeriodo", type="datetime", nullable=true)
     */
    private $tmetiempoextramaximoperiodo;

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
     * Get numhorarioId
     *
     * @return integer 
     */
    public function getNumhorarioId()
    {
        return $this->numhorarioId;
    }

    /**
     * Set strhorarioKy
     *
     * @param string $strhorarioKy
     * @return Horarios
     */
    public function setStrhorarioKy($strhorarioKy)
    {
        $this->strhorarioKy = $strhorarioKy;

        return $this;
    }

    /**
     * Get strhorarioKy
     *
     * @return string 
     */
    public function getStrhorarioKy()
    {
        return $this->strhorarioKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Horarios
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
     * Set numdiasperiodo
     *
     * @param integer $numdiasperiodo
     * @return Horarios
     */
    public function setNumdiasperiodo($numdiasperiodo)
    {
        $this->numdiasperiodo = $numdiasperiodo;

        return $this;
    }

    /**
     * Get numdiasperiodo
     *
     * @return integer 
     */
    public function getNumdiasperiodo()
    {
        return $this->numdiasperiodo;
    }

    /**
     * Set numtipodiainicio
     *
     * @param integer $numtipodiainicio
     * @return Horarios
     */
    public function setNumtipodiainicio($numtipodiainicio)
    {
        $this->numtipodiainicio = $numtipodiainicio;

        return $this;
    }

    /**
     * Get numtipodiainicio
     *
     * @return integer 
     */
    public function getNumtipodiainicio()
    {
        return $this->numtipodiainicio;
    }

    /**
     * Set tmeminimolaboral
     *
     * @param \DateTime $tmeminimolaboral
     * @return Horarios
     */
    public function setTmeminimolaboral($tmeminimolaboral)
    {
        $this->tmeminimolaboral = $tmeminimolaboral;

        return $this;
    }

    /**
     * Get tmeminimolaboral
     *
     * @return \DateTime 
     */
    public function getTmeminimolaboral()
    {
        return $this->tmeminimolaboral;
    }

    /**
     * Set tmejornadalaboral
     *
     * @param \DateTime $tmejornadalaboral
     * @return Horarios
     */
    public function setTmejornadalaboral($tmejornadalaboral)
    {
        $this->tmejornadalaboral = $tmejornadalaboral;

        return $this;
    }

    /**
     * Get tmejornadalaboral
     *
     * @return \DateTime 
     */
    public function getTmejornadalaboral()
    {
        return $this->tmejornadalaboral;
    }

    /**
     * Set logpagartiempoextraentrada
     *
     * @param boolean $logpagartiempoextraentrada
     * @return Horarios
     */
    public function setLogpagartiempoextraentrada($logpagartiempoextraentrada)
    {
        $this->logpagartiempoextraentrada = $logpagartiempoextraentrada;

        return $this;
    }

    /**
     * Get logpagartiempoextraentrada
     *
     * @return boolean 
     */
    public function getLogpagartiempoextraentrada()
    {
        return $this->logpagartiempoextraentrada;
    }

    /**
     * Set logpagartiempoextrasalida
     *
     * @param boolean $logpagartiempoextrasalida
     * @return Horarios
     */
    public function setLogpagartiempoextrasalida($logpagartiempoextrasalida)
    {
        $this->logpagartiempoextrasalida = $logpagartiempoextrasalida;

        return $this;
    }

    /**
     * Get logpagartiempoextrasalida
     *
     * @return boolean 
     */
    public function getLogpagartiempoextrasalida()
    {
        return $this->logpagartiempoextrasalida;
    }

    /**
     * Set logpagartiempoextradisponercomida
     *
     * @param boolean $logpagartiempoextradisponercomida
     * @return Horarios
     */
    public function setLogpagartiempoextradisponercomida($logpagartiempoextradisponercomida)
    {
        $this->logpagartiempoextradisponercomida = $logpagartiempoextradisponercomida;

        return $this;
    }

    /**
     * Get logpagartiempoextradisponercomida
     *
     * @return boolean 
     */
    public function getLogpagartiempoextradisponercomida()
    {
        return $this->logpagartiempoextradisponercomida;
    }

    /**
     * Set logpagartiempoextradiadescanso
     *
     * @param boolean $logpagartiempoextradiadescanso
     * @return Horarios
     */
    public function setLogpagartiempoextradiadescanso($logpagartiempoextradiadescanso)
    {
        $this->logpagartiempoextradiadescanso = $logpagartiempoextradiadescanso;

        return $this;
    }

    /**
     * Get logpagartiempoextradiadescanso
     *
     * @return boolean 
     */
    public function getLogpagartiempoextradiadescanso()
    {
        return $this->logpagartiempoextradiadescanso;
    }

    /**
     * Set logpagartiempoextradiafestivo
     *
     * @param boolean $logpagartiempoextradiafestivo
     * @return Horarios
     */
    public function setLogpagartiempoextradiafestivo($logpagartiempoextradiafestivo)
    {
        $this->logpagartiempoextradiafestivo = $logpagartiempoextradiafestivo;

        return $this;
    }

    /**
     * Get logpagartiempoextradiafestivo
     *
     * @return boolean 
     */
    public function getLogpagartiempoextradiafestivo()
    {
        return $this->logpagartiempoextradiafestivo;
    }

    /**
     * Set logpagarpuntualidad
     *
     * @param boolean $logpagarpuntualidad
     * @return Horarios
     */
    public function setLogpagarpuntualidad($logpagarpuntualidad)
    {
        $this->logpagarpuntualidad = $logpagarpuntualidad;

        return $this;
    }

    /**
     * Get logpagarpuntualidad
     *
     * @return boolean 
     */
    public function getLogpagarpuntualidad()
    {
        return $this->logpagarpuntualidad;
    }

    /**
     * Set logdescontarretardos
     *
     * @param boolean $logdescontarretardos
     * @return Horarios
     */
    public function setLogdescontarretardos($logdescontarretardos)
    {
        $this->logdescontarretardos = $logdescontarretardos;

        return $this;
    }

    /**
     * Get logdescontarretardos
     *
     * @return boolean 
     */
    public function getLogdescontarretardos()
    {
        return $this->logdescontarretardos;
    }

    /**
     * Set numretardosperiodo
     *
     * @param integer $numretardosperiodo
     * @return Horarios
     */
    public function setNumretardosperiodo($numretardosperiodo)
    {
        $this->numretardosperiodo = $numretardosperiodo;

        return $this;
    }

    /**
     * Get numretardosperiodo
     *
     * @return integer 
     */
    public function getNumretardosperiodo()
    {
        return $this->numretardosperiodo;
    }

    /**
     * Set tmetiempoextraminimojornada
     *
     * @param \DateTime $tmetiempoextraminimojornada
     * @return Horarios
     */
    public function setTmetiempoextraminimojornada($tmetiempoextraminimojornada)
    {
        $this->tmetiempoextraminimojornada = $tmetiempoextraminimojornada;

        return $this;
    }

    /**
     * Get tmetiempoextraminimojornada
     *
     * @return \DateTime 
     */
    public function getTmetiempoextraminimojornada()
    {
        return $this->tmetiempoextraminimojornada;
    }

    /**
     * Set tmetiempoextramaximojornada
     *
     * @param \DateTime $tmetiempoextramaximojornada
     * @return Horarios
     */
    public function setTmetiempoextramaximojornada($tmetiempoextramaximojornada)
    {
        $this->tmetiempoextramaximojornada = $tmetiempoextramaximojornada;

        return $this;
    }

    /**
     * Get tmetiempoextramaximojornada
     *
     * @return \DateTime 
     */
    public function getTmetiempoextramaximojornada()
    {
        return $this->tmetiempoextramaximojornada;
    }

    /**
     * Set tmetiempoextradobleperiodo
     *
     * @param \DateTime $tmetiempoextradobleperiodo
     * @return Horarios
     */
    public function setTmetiempoextradobleperiodo($tmetiempoextradobleperiodo)
    {
        $this->tmetiempoextradobleperiodo = $tmetiempoextradobleperiodo;

        return $this;
    }

    /**
     * Get tmetiempoextradobleperiodo
     *
     * @return \DateTime 
     */
    public function getTmetiempoextradobleperiodo()
    {
        return $this->tmetiempoextradobleperiodo;
    }

    /**
     * Set tmetiempoextratripleperiodo
     *
     * @param \DateTime $tmetiempoextratripleperiodo
     * @return Horarios
     */
    public function setTmetiempoextratripleperiodo($tmetiempoextratripleperiodo)
    {
        $this->tmetiempoextratripleperiodo = $tmetiempoextratripleperiodo;

        return $this;
    }

    /**
     * Get tmetiempoextratripleperiodo
     *
     * @return \DateTime 
     */
    public function getTmetiempoextratripleperiodo()
    {
        return $this->tmetiempoextratripleperiodo;
    }

    /**
     * Set tmetiempoextramaximoperiodo
     *
     * @param \DateTime $tmetiempoextramaximoperiodo
     * @return Horarios
     */
    public function setTmetiempoextramaximoperiodo($tmetiempoextramaximoperiodo)
    {
        $this->tmetiempoextramaximoperiodo = $tmetiempoextramaximoperiodo;

        return $this;
    }

    /**
     * Get tmetiempoextramaximoperiodo
     *
     * @return \DateTime 
     */
    public function getTmetiempoextramaximoperiodo()
    {
        return $this->tmetiempoextramaximoperiodo;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Horarios
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
     * @return Horarios
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
     * @return Horarios
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
     * @return Horarios
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
     * @return Horarios
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
