<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasdinamicasvaloreslenguaje
 *
 * @ORM\Table(name="TablasDinamicasValoresLenguaje", indexes={@ORM\Index(name="Indice_1", columns={"NumTablaDinamica_id", "NumCampo_id", "NumValor_id", "NumLenguaje_id"})})
 * @ORM\Entity
 */
class Tablasdinamicasvaloreslenguaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumValor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numvalorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLenguaje_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numlenguajeId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCampo_id", type="integer", nullable=true)
     */
    private $numcampoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTablaDinamica_id", type="integer", nullable=true)
     */
    private $numtabladinamicaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=30, nullable=true)
     */
    private $strdescripcion;



    /**
     * Set numvalorId
     *
     * @param integer $numvalorId
     * @return Tablasdinamicasvaloreslenguaje
     */
    public function setNumvalorId($numvalorId)
    {
        $this->numvalorId = $numvalorId;

        return $this;
    }

    /**
     * Get numvalorId
     *
     * @return integer 
     */
    public function getNumvalorId()
    {
        return $this->numvalorId;
    }

    /**
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Tablasdinamicasvaloreslenguaje
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
     * Set numcampoId
     *
     * @param integer $numcampoId
     * @return Tablasdinamicasvaloreslenguaje
     */
    public function setNumcampoId($numcampoId)
    {
        $this->numcampoId = $numcampoId;

        return $this;
    }

    /**
     * Get numcampoId
     *
     * @return integer 
     */
    public function getNumcampoId()
    {
        return $this->numcampoId;
    }

    /**
     * Set numtabladinamicaId
     *
     * @param integer $numtabladinamicaId
     * @return Tablasdinamicasvaloreslenguaje
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tablasdinamicasvaloreslenguaje
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
}
