<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultas
 *
 * @ORM\Table(name="Consultas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrConsulta_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Consultas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsulta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconsultaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrConsulta_ky", type="string", length=20, nullable=true)
     */
    private $strconsultaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="MemInstruccion", type="text", length=16, nullable=true)
     */
    private $meminstruccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogCerrarSeleccionar", type="boolean", nullable=true)
     */
    private $logcerrarseleccionar = '0';

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
     * Get numconsultaId
     *
     * @return integer 
     */
    public function getNumconsultaId()
    {
        return $this->numconsultaId;
    }

    /**
     * Set strconsultaKy
     *
     * @param string $strconsultaKy
     * @return Consultas
     */
    public function setStrconsultaKy($strconsultaKy)
    {
        $this->strconsultaKy = $strconsultaKy;

        return $this;
    }

    /**
     * Get strconsultaKy
     *
     * @return string 
     */
    public function getStrconsultaKy()
    {
        return $this->strconsultaKy;
    }

    /**
     * Set meminstruccion
     *
     * @param string $meminstruccion
     * @return Consultas
     */
    public function setMeminstruccion($meminstruccion)
    {
        $this->meminstruccion = $meminstruccion;

        return $this;
    }

    /**
     * Get meminstruccion
     *
     * @return string 
     */
    public function getMeminstruccion()
    {
        return $this->meminstruccion;
    }

    /**
     * Set logcerrarseleccionar
     *
     * @param boolean $logcerrarseleccionar
     * @return Consultas
     */
    public function setLogcerrarseleccionar($logcerrarseleccionar)
    {
        $this->logcerrarseleccionar = $logcerrarseleccionar;

        return $this;
    }

    /**
     * Get logcerrarseleccionar
     *
     * @return boolean 
     */
    public function getLogcerrarseleccionar()
    {
        return $this->logcerrarseleccionar;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Consultas
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
     * @return Consultas
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
     * @return Consultas
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
     * @return Consultas
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
     * @return Consultas
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
     * @return Consultas
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
     * @return Consultas
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
