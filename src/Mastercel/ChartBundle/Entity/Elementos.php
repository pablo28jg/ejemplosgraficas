<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elementos
 *
 * @ORM\Table(name="Elementos", indexes={@ORM\Index(name="Indice_1", columns={"NumAsignadoA_id"}), @ORM\Index(name="Indice_2", columns={"DteVencimiento"}), @ORM\Index(name="Indice_3", columns={"NumTransaccion_id", "NumAlmacen_id", "NumTipoTransaccion"}), @ORM\Index(name="Indice_4", columns={"NumProspecto_id"}), @ORM\Index(name="Indice_5", columns={"NumOportunidad_id"}), @ORM\Index(name="Indice_6", columns={"NumCreadoPor_id"}), @ORM\Index(name="Indice_7", columns={"DteCreacion"}), @ORM\Index(name="Indice_8", columns={"NumActualizadoPor_id"}), @ORM\Index(name="Indice_9", columns={"DteActualizacion"}), @ORM\Index(name="Indice_10", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Elementos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumElemento_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numelementoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAsunto", type="string", length=100, nullable=true)
     */
    private $strasunto;

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservacion", type="text", length=16, nullable=true)
     */
    private $memobservacion;

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
     * @var integer
     *
     * @ORM\Column(name="NumTipoElemento", type="integer", nullable=true)
     */
    private $numtipoelemento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAsignadoA_id", type="integer", nullable=true)
     */
    private $numasignadoaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteVencimiento", type="datetime", nullable=true)
     */
    private $dtevencimiento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAlertar", type="boolean", nullable=true)
     */
    private $logalertar = '0';

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
     * @ORM\Column(name="LogRealizada", type="boolean", nullable=true)
     */
    private $logrealizada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccion_id", type="integer", nullable=true)
     */
    private $numtransaccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=true)
     */
    private $numtipotransaccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProspecto_id", type="integer", nullable=true)
     */
    private $numprospectoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidad_id", type="integer", nullable=true)
     */
    private $numoportunidadId = '0';



    /**
     * Get numelementoId
     *
     * @return integer 
     */
    public function getNumelementoId()
    {
        return $this->numelementoId;
    }

    /**
     * Set strasunto
     *
     * @param string $strasunto
     * @return Elementos
     */
    public function setStrasunto($strasunto)
    {
        $this->strasunto = $strasunto;

        return $this;
    }

    /**
     * Get strasunto
     *
     * @return string 
     */
    public function getStrasunto()
    {
        return $this->strasunto;
    }

    /**
     * Set memobservacion
     *
     * @param string $memobservacion
     * @return Elementos
     */
    public function setMemobservacion($memobservacion)
    {
        $this->memobservacion = $memobservacion;

        return $this;
    }

    /**
     * Get memobservacion
     *
     * @return string 
     */
    public function getMemobservacion()
    {
        return $this->memobservacion;
    }

    /**
     * Set numtipoentidad
     *
     * @param integer $numtipoentidad
     * @return Elementos
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
     * @return Elementos
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Elementos
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
     * @return Elementos
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
     * @return Elementos
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
     * @return Elementos
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
     * @return Elementos
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
     * Set numtipoelemento
     *
     * @param integer $numtipoelemento
     * @return Elementos
     */
    public function setNumtipoelemento($numtipoelemento)
    {
        $this->numtipoelemento = $numtipoelemento;

        return $this;
    }

    /**
     * Get numtipoelemento
     *
     * @return integer 
     */
    public function getNumtipoelemento()
    {
        return $this->numtipoelemento;
    }

    /**
     * Set numasignadoaId
     *
     * @param integer $numasignadoaId
     * @return Elementos
     */
    public function setNumasignadoaId($numasignadoaId)
    {
        $this->numasignadoaId = $numasignadoaId;

        return $this;
    }

    /**
     * Get numasignadoaId
     *
     * @return integer 
     */
    public function getNumasignadoaId()
    {
        return $this->numasignadoaId;
    }

    /**
     * Set dtevencimiento
     *
     * @param \DateTime $dtevencimiento
     * @return Elementos
     */
    public function setDtevencimiento($dtevencimiento)
    {
        $this->dtevencimiento = $dtevencimiento;

        return $this;
    }

    /**
     * Get dtevencimiento
     *
     * @return \DateTime 
     */
    public function getDtevencimiento()
    {
        return $this->dtevencimiento;
    }

    /**
     * Set logalertar
     *
     * @param boolean $logalertar
     * @return Elementos
     */
    public function setLogalertar($logalertar)
    {
        $this->logalertar = $logalertar;

        return $this;
    }

    /**
     * Get logalertar
     *
     * @return boolean 
     */
    public function getLogalertar()
    {
        return $this->logalertar;
    }

    /**
     * Set dteinicio
     *
     * @param \DateTime $dteinicio
     * @return Elementos
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
     * @return Elementos
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
     * Set logrealizada
     *
     * @param boolean $logrealizada
     * @return Elementos
     */
    public function setLogrealizada($logrealizada)
    {
        $this->logrealizada = $logrealizada;

        return $this;
    }

    /**
     * Get logrealizada
     *
     * @return boolean 
     */
    public function getLogrealizada()
    {
        return $this->logrealizada;
    }

    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Elementos
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
     * @return Elementos
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
     * @return Elementos
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
     * Set numprospectoId
     *
     * @param integer $numprospectoId
     * @return Elementos
     */
    public function setNumprospectoId($numprospectoId)
    {
        $this->numprospectoId = $numprospectoId;

        return $this;
    }

    /**
     * Get numprospectoId
     *
     * @return integer 
     */
    public function getNumprospectoId()
    {
        return $this->numprospectoId;
    }

    /**
     * Set numoportunidadId
     *
     * @param integer $numoportunidadId
     * @return Elementos
     */
    public function setNumoportunidadId($numoportunidadId)
    {
        $this->numoportunidadId = $numoportunidadId;

        return $this;
    }

    /**
     * Get numoportunidadId
     *
     * @return integer 
     */
    public function getNumoportunidadId()
    {
        return $this->numoportunidadId;
    }
}
