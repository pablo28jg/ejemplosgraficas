<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oportunidadesetapas
 *
 * @ORM\Table(name="OportunidadesEtapas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrOportunidadEtapa_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"StrGrupo"}), @ORM\Index(name="Indice_4", columns={"NumOrden"})})
 * @ORM\Entity
 */
class Oportunidadesetapas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidadEtapa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numoportunidadetapaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrOportunidadEtapa_ky", type="string", length=20, nullable=true)
     */
    private $stroportunidadetapaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrGrupo", type="string", length=60, nullable=true)
     */
    private $strgrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogEsCierre", type="boolean", nullable=true)
     */
    private $logescierre = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogEsCancelacion", type="boolean", nullable=true)
     */
    private $logescancelacion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogActividadExterna", type="boolean", nullable=true)
     */
    private $logactividadexterna = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

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
     * Get numoportunidadetapaId
     *
     * @return integer 
     */
    public function getNumoportunidadetapaId()
    {
        return $this->numoportunidadetapaId;
    }

    /**
     * Set stroportunidadetapaKy
     *
     * @param string $stroportunidadetapaKy
     * @return Oportunidadesetapas
     */
    public function setStroportunidadetapaKy($stroportunidadetapaKy)
    {
        $this->stroportunidadetapaKy = $stroportunidadetapaKy;

        return $this;
    }

    /**
     * Get stroportunidadetapaKy
     *
     * @return string 
     */
    public function getStroportunidadetapaKy()
    {
        return $this->stroportunidadetapaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Oportunidadesetapas
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
     * Set strgrupo
     *
     * @param string $strgrupo
     * @return Oportunidadesetapas
     */
    public function setStrgrupo($strgrupo)
    {
        $this->strgrupo = $strgrupo;

        return $this;
    }

    /**
     * Get strgrupo
     *
     * @return string 
     */
    public function getStrgrupo()
    {
        return $this->strgrupo;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Oportunidadesetapas
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
     * Set logescierre
     *
     * @param boolean $logescierre
     * @return Oportunidadesetapas
     */
    public function setLogescierre($logescierre)
    {
        $this->logescierre = $logescierre;

        return $this;
    }

    /**
     * Get logescierre
     *
     * @return boolean 
     */
    public function getLogescierre()
    {
        return $this->logescierre;
    }

    /**
     * Set logescancelacion
     *
     * @param boolean $logescancelacion
     * @return Oportunidadesetapas
     */
    public function setLogescancelacion($logescancelacion)
    {
        $this->logescancelacion = $logescancelacion;

        return $this;
    }

    /**
     * Get logescancelacion
     *
     * @return boolean 
     */
    public function getLogescancelacion()
    {
        return $this->logescancelacion;
    }

    /**
     * Set logactividadexterna
     *
     * @param boolean $logactividadexterna
     * @return Oportunidadesetapas
     */
    public function setLogactividadexterna($logactividadexterna)
    {
        $this->logactividadexterna = $logactividadexterna;

        return $this;
    }

    /**
     * Get logactividadexterna
     *
     * @return boolean 
     */
    public function getLogactividadexterna()
    {
        return $this->logactividadexterna;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Oportunidadesetapas
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Oportunidadesetapas
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
     * @return Oportunidadesetapas
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
     * @return Oportunidadesetapas
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
     * @return Oportunidadesetapas
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
     * @return Oportunidadesetapas
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
