<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportescarpetasplantillas
 *
 * @ORM\Table(name="ReportesCarpetasPlantillas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"NumCarpeta_id", "NumTipo", "StrNombre"}), @ORM\UniqueConstraint(name="Indice_2", columns={"StrNombre", "NumCarpeta_id", "NumTipo"})}, indexes={@ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Reportescarpetasplantillas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPlantilla_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numplantillaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCarpeta_id", type="integer", nullable=true)
     */
    private $numcarpetaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=60, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTamano", type="integer", nullable=true)
     */
    private $numtamano = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAltoPapel", type="integer", nullable=true)
     */
    private $numaltopapel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAnchoPapel", type="integer", nullable=true)
     */
    private $numanchopapel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ObjPlantillaAccess", type="text", length=16, nullable=true)
     */
    private $objplantillaaccess;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjPlantillaSqlSrv", type="text", length=16, nullable=true)
     */
    private $objplantillasqlsrv;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoGrupoReporte", type="integer", nullable=true)
     */
    private $numtipogruporeporte = '0';

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
     * Get numplantillaId
     *
     * @return integer 
     */
    public function getNumplantillaId()
    {
        return $this->numplantillaId;
    }

    /**
     * Set numcarpetaId
     *
     * @param integer $numcarpetaId
     * @return Reportescarpetasplantillas
     */
    public function setNumcarpetaId($numcarpetaId)
    {
        $this->numcarpetaId = $numcarpetaId;

        return $this;
    }

    /**
     * Get numcarpetaId
     *
     * @return integer 
     */
    public function getNumcarpetaId()
    {
        return $this->numcarpetaId;
    }

    /**
     * Set strnombre
     *
     * @param string $strnombre
     * @return Reportescarpetasplantillas
     */
    public function setStrnombre($strnombre)
    {
        $this->strnombre = $strnombre;

        return $this;
    }

    /**
     * Get strnombre
     *
     * @return string 
     */
    public function getStrnombre()
    {
        return $this->strnombre;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Reportescarpetasplantillas
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
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Reportescarpetasplantillas
     */
    public function setNumtipo($numtipo)
    {
        $this->numtipo = $numtipo;

        return $this;
    }

    /**
     * Get numtipo
     *
     * @return integer 
     */
    public function getNumtipo()
    {
        return $this->numtipo;
    }

    /**
     * Set numtamano
     *
     * @param integer $numtamano
     * @return Reportescarpetasplantillas
     */
    public function setNumtamano($numtamano)
    {
        $this->numtamano = $numtamano;

        return $this;
    }

    /**
     * Get numtamano
     *
     * @return integer 
     */
    public function getNumtamano()
    {
        return $this->numtamano;
    }

    /**
     * Set numaltopapel
     *
     * @param integer $numaltopapel
     * @return Reportescarpetasplantillas
     */
    public function setNumaltopapel($numaltopapel)
    {
        $this->numaltopapel = $numaltopapel;

        return $this;
    }

    /**
     * Get numaltopapel
     *
     * @return integer 
     */
    public function getNumaltopapel()
    {
        return $this->numaltopapel;
    }

    /**
     * Set numanchopapel
     *
     * @param integer $numanchopapel
     * @return Reportescarpetasplantillas
     */
    public function setNumanchopapel($numanchopapel)
    {
        $this->numanchopapel = $numanchopapel;

        return $this;
    }

    /**
     * Get numanchopapel
     *
     * @return integer 
     */
    public function getNumanchopapel()
    {
        return $this->numanchopapel;
    }

    /**
     * Set objplantillaaccess
     *
     * @param string $objplantillaaccess
     * @return Reportescarpetasplantillas
     */
    public function setObjplantillaaccess($objplantillaaccess)
    {
        $this->objplantillaaccess = $objplantillaaccess;

        return $this;
    }

    /**
     * Get objplantillaaccess
     *
     * @return string 
     */
    public function getObjplantillaaccess()
    {
        return $this->objplantillaaccess;
    }

    /**
     * Set objplantillasqlsrv
     *
     * @param string $objplantillasqlsrv
     * @return Reportescarpetasplantillas
     */
    public function setObjplantillasqlsrv($objplantillasqlsrv)
    {
        $this->objplantillasqlsrv = $objplantillasqlsrv;

        return $this;
    }

    /**
     * Get objplantillasqlsrv
     *
     * @return string 
     */
    public function getObjplantillasqlsrv()
    {
        return $this->objplantillasqlsrv;
    }

    /**
     * Set numtipogruporeporte
     *
     * @param integer $numtipogruporeporte
     * @return Reportescarpetasplantillas
     */
    public function setNumtipogruporeporte($numtipogruporeporte)
    {
        $this->numtipogruporeporte = $numtipogruporeporte;

        return $this;
    }

    /**
     * Get numtipogruporeporte
     *
     * @return integer 
     */
    public function getNumtipogruporeporte()
    {
        return $this->numtipogruporeporte;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Reportescarpetasplantillas
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
     * @return Reportescarpetasplantillas
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
     * @return Reportescarpetasplantillas
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
     * @return Reportescarpetasplantillas
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
     * @return Reportescarpetasplantillas
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
