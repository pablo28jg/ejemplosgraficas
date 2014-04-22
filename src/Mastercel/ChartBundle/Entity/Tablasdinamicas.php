<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasdinamicas
 *
 * @ORM\Table(name="TablasDinamicas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrTablaDinamica_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Tablasdinamicas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTablaDinamica_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numtabladinamicaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTablaDinamica_ky", type="string", length=20, nullable=true)
     */
    private $strtabladinamicaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="MemInstruccion", type="text", length=16, nullable=true)
     */
    private $meminstruccion;

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
     * Get numtabladinamicaId
     *
     * @return integer 
     */
    public function getNumtabladinamicaId()
    {
        return $this->numtabladinamicaId;
    }

    /**
     * Set strtabladinamicaKy
     *
     * @param string $strtabladinamicaKy
     * @return Tablasdinamicas
     */
    public function setStrtabladinamicaKy($strtabladinamicaKy)
    {
        $this->strtabladinamicaKy = $strtabladinamicaKy;

        return $this;
    }

    /**
     * Get strtabladinamicaKy
     *
     * @return string 
     */
    public function getStrtabladinamicaKy()
    {
        return $this->strtabladinamicaKy;
    }

    /**
     * Set meminstruccion
     *
     * @param string $meminstruccion
     * @return Tablasdinamicas
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Tablasdinamicas
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
     * @return Tablasdinamicas
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
     * @return Tablasdinamicas
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
     * @return Tablasdinamicas
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
     * @return Tablasdinamicas
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
     * @return Tablasdinamicas
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
     * @return Tablasdinamicas
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
