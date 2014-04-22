<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasdinamicascamposlenguaje
 *
 * @ORM\Table(name="TablasDinamicasCamposLenguaje", indexes={@ORM\Index(name="Indice_1", columns={"NumTablaDinamica_id", "NumCampo_id", "NumLenguaje_id"})})
 * @ORM\Entity
 */
class Tablasdinamicascamposlenguaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCampo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcampoId = '0';

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
     * @ORM\Column(name="NumTablaDinamica_id", type="integer", nullable=true)
     */
    private $numtabladinamicaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionGrupo", type="string", length=60, nullable=true)
     */
    private $strdescripciongrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionOperador", type="string", length=60, nullable=true)
     */
    private $strdescripcionoperador;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionInicial", type="string", length=60, nullable=true)
     */
    private $strdescripcioninicial;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionFinal", type="string", length=60, nullable=true)
     */
    private $strdescripcionfinal;

    /**
     * @var string
     *
     * @ORM\Column(name="MemAyuda", type="text", length=16, nullable=true)
     */
    private $memayuda;



    /**
     * Set numcampoId
     *
     * @param integer $numcampoId
     * @return Tablasdinamicascamposlenguaje
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
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Tablasdinamicascamposlenguaje
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
     * Set numtabladinamicaId
     *
     * @param integer $numtabladinamicaId
     * @return Tablasdinamicascamposlenguaje
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
     * Set strdescripciongrupo
     *
     * @param string $strdescripciongrupo
     * @return Tablasdinamicascamposlenguaje
     */
    public function setStrdescripciongrupo($strdescripciongrupo)
    {
        $this->strdescripciongrupo = $strdescripciongrupo;

        return $this;
    }

    /**
     * Get strdescripciongrupo
     *
     * @return string 
     */
    public function getStrdescripciongrupo()
    {
        return $this->strdescripciongrupo;
    }

    /**
     * Set strdescripcionoperador
     *
     * @param string $strdescripcionoperador
     * @return Tablasdinamicascamposlenguaje
     */
    public function setStrdescripcionoperador($strdescripcionoperador)
    {
        $this->strdescripcionoperador = $strdescripcionoperador;

        return $this;
    }

    /**
     * Get strdescripcionoperador
     *
     * @return string 
     */
    public function getStrdescripcionoperador()
    {
        return $this->strdescripcionoperador;
    }

    /**
     * Set strdescripcioninicial
     *
     * @param string $strdescripcioninicial
     * @return Tablasdinamicascamposlenguaje
     */
    public function setStrdescripcioninicial($strdescripcioninicial)
    {
        $this->strdescripcioninicial = $strdescripcioninicial;

        return $this;
    }

    /**
     * Get strdescripcioninicial
     *
     * @return string 
     */
    public function getStrdescripcioninicial()
    {
        return $this->strdescripcioninicial;
    }

    /**
     * Set strdescripcionfinal
     *
     * @param string $strdescripcionfinal
     * @return Tablasdinamicascamposlenguaje
     */
    public function setStrdescripcionfinal($strdescripcionfinal)
    {
        $this->strdescripcionfinal = $strdescripcionfinal;

        return $this;
    }

    /**
     * Get strdescripcionfinal
     *
     * @return string 
     */
    public function getStrdescripcionfinal()
    {
        return $this->strdescripcionfinal;
    }

    /**
     * Set memayuda
     *
     * @param string $memayuda
     * @return Tablasdinamicascamposlenguaje
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
