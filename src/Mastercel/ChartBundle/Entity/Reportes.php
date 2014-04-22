<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportes
 *
 * @ORM\Table(name="Reportes", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrReporte_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Reportes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numreporteId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReporte_ky", type="string", length=20, nullable=true)
     */
    private $strreporteKy;

    /**
     * @var string
     *
     * @ORM\Column(name="MemInstruccionAccess", type="text", length=16, nullable=true)
     */
    private $meminstruccionaccess;

    /**
     * @var string
     *
     * @ORM\Column(name="MemInstruccionSqlSrv", type="text", length=16, nullable=true)
     */
    private $meminstruccionsqlsrv;

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
     * @var string
     *
     * @ORM\Column(name="StrArchivoAyuda", type="string", length=30, nullable=true)
     */
    private $strarchivoayuda;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContextoAyuda", type="integer", nullable=true)
     */
    private $numcontextoayuda = '0';



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
     * Set strreporteKy
     *
     * @param string $strreporteKy
     * @return Reportes
     */
    public function setStrreporteKy($strreporteKy)
    {
        $this->strreporteKy = $strreporteKy;

        return $this;
    }

    /**
     * Get strreporteKy
     *
     * @return string 
     */
    public function getStrreporteKy()
    {
        return $this->strreporteKy;
    }

    /**
     * Set meminstruccionaccess
     *
     * @param string $meminstruccionaccess
     * @return Reportes
     */
    public function setMeminstruccionaccess($meminstruccionaccess)
    {
        $this->meminstruccionaccess = $meminstruccionaccess;

        return $this;
    }

    /**
     * Get meminstruccionaccess
     *
     * @return string 
     */
    public function getMeminstruccionaccess()
    {
        return $this->meminstruccionaccess;
    }

    /**
     * Set meminstruccionsqlsrv
     *
     * @param string $meminstruccionsqlsrv
     * @return Reportes
     */
    public function setMeminstruccionsqlsrv($meminstruccionsqlsrv)
    {
        $this->meminstruccionsqlsrv = $meminstruccionsqlsrv;

        return $this;
    }

    /**
     * Get meminstruccionsqlsrv
     *
     * @return string 
     */
    public function getMeminstruccionsqlsrv()
    {
        return $this->meminstruccionsqlsrv;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Reportes
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
     * @return Reportes
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
     * @return Reportes
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
     * @return Reportes
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
     * @return Reportes
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
     * Set strarchivoayuda
     *
     * @param string $strarchivoayuda
     * @return Reportes
     */
    public function setStrarchivoayuda($strarchivoayuda)
    {
        $this->strarchivoayuda = $strarchivoayuda;

        return $this;
    }

    /**
     * Get strarchivoayuda
     *
     * @return string 
     */
    public function getStrarchivoayuda()
    {
        return $this->strarchivoayuda;
    }

    /**
     * Set numcontextoayuda
     *
     * @param integer $numcontextoayuda
     * @return Reportes
     */
    public function setNumcontextoayuda($numcontextoayuda)
    {
        $this->numcontextoayuda = $numcontextoayuda;

        return $this;
    }

    /**
     * Get numcontextoayuda
     *
     * @return integer 
     */
    public function getNumcontextoayuda()
    {
        return $this->numcontextoayuda;
    }
}
