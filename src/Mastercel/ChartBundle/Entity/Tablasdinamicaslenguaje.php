<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasdinamicaslenguaje
 *
 * @ORM\Table(name="TablasDinamicasLenguaje")
 * @ORM\Entity
 */
class Tablasdinamicaslenguaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTablaDinamica_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtabladinamicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLenguaje_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numlenguajeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionSeleccion", type="string", length=30, nullable=true)
     */
    private $strdescripcionseleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionDiseno", type="string", length=30, nullable=true)
     */
    private $strdescripciondiseno;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionCampoOrdenar", type="string", length=30, nullable=true)
     */
    private $strdescripcioncampoordenar;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionTipoOrdenar", type="string", length=30, nullable=true)
     */
    private $strdescripciontipoordenar;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionTipoResumen", type="string", length=30, nullable=true)
     */
    private $strdescripciontiporesumen;

    /**
     * @var string
     *
     * @ORM\Column(name="MemAyuda", type="text", length=16, nullable=true)
     */
    private $memayuda;



    /**
     * Set numtabladinamicaId
     *
     * @param integer $numtabladinamicaId
     * @return Tablasdinamicaslenguaje
     */
    public function setNumtabladinamicaId($numtabladinamicaId)
    {
        $this->numtabladinamicaId = $numtabladinamicaId;

        return $this;
    }

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
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Tablasdinamicaslenguaje
     */
    public function setNumlenguajeId($numlenguajeId)
    {
        $this->numlenguajeId = $numlenguajeId;

        return $this;
    }

    /**
     * Get numlenguajeId
     *
     * @return integer 
     */
    public function getNumlenguajeId()
    {
        return $this->numlenguajeId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tablasdinamicaslenguaje
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
     * Set strdescripcionseleccion
     *
     * @param string $strdescripcionseleccion
     * @return Tablasdinamicaslenguaje
     */
    public function setStrdescripcionseleccion($strdescripcionseleccion)
    {
        $this->strdescripcionseleccion = $strdescripcionseleccion;

        return $this;
    }

    /**
     * Get strdescripcionseleccion
     *
     * @return string 
     */
    public function getStrdescripcionseleccion()
    {
        return $this->strdescripcionseleccion;
    }

    /**
     * Set strdescripciondiseno
     *
     * @param string $strdescripciondiseno
     * @return Tablasdinamicaslenguaje
     */
    public function setStrdescripciondiseno($strdescripciondiseno)
    {
        $this->strdescripciondiseno = $strdescripciondiseno;

        return $this;
    }

    /**
     * Get strdescripciondiseno
     *
     * @return string 
     */
    public function getStrdescripciondiseno()
    {
        return $this->strdescripciondiseno;
    }

    /**
     * Set strdescripcioncampoordenar
     *
     * @param string $strdescripcioncampoordenar
     * @return Tablasdinamicaslenguaje
     */
    public function setStrdescripcioncampoordenar($strdescripcioncampoordenar)
    {
        $this->strdescripcioncampoordenar = $strdescripcioncampoordenar;

        return $this;
    }

    /**
     * Get strdescripcioncampoordenar
     *
     * @return string 
     */
    public function getStrdescripcioncampoordenar()
    {
        return $this->strdescripcioncampoordenar;
    }

    /**
     * Set strdescripciontipoordenar
     *
     * @param string $strdescripciontipoordenar
     * @return Tablasdinamicaslenguaje
     */
    public function setStrdescripciontipoordenar($strdescripciontipoordenar)
    {
        $this->strdescripciontipoordenar = $strdescripciontipoordenar;

        return $this;
    }

    /**
     * Get strdescripciontipoordenar
     *
     * @return string 
     */
    public function getStrdescripciontipoordenar()
    {
        return $this->strdescripciontipoordenar;
    }

    /**
     * Set strdescripciontiporesumen
     *
     * @param string $strdescripciontiporesumen
     * @return Tablasdinamicaslenguaje
     */
    public function setStrdescripciontiporesumen($strdescripciontiporesumen)
    {
        $this->strdescripciontiporesumen = $strdescripciontiporesumen;

        return $this;
    }

    /**
     * Get strdescripciontiporesumen
     *
     * @return string 
     */
    public function getStrdescripciontiporesumen()
    {
        return $this->strdescripciontiporesumen;
    }

    /**
     * Set memayuda
     *
     * @param string $memayuda
     * @return Tablasdinamicaslenguaje
     */
    public function setMemayuda($memayuda)
    {
        $this->memayuda = $memayuda;

        return $this;
    }

    /**
     * Get memayuda
     *
     * @return string 
     */
    public function getMemayuda()
    {
        return $this->memayuda;
    }
}
