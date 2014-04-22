<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportescamposlenguaje
 *
 * @ORM\Table(name="ReportesCamposLenguaje", indexes={@ORM\Index(name="Indice_1", columns={"NumReporte_id"})})
 * @ORM\Entity
 */
class Reportescamposlenguaje
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
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=true)
     */
    private $numreporteId = '0';

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
     * @return Reportescamposlenguaje
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
     * @return Reportescamposlenguaje
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
     * Set numreporteId
     *
     * @param integer $numreporteId
     * @return Reportescamposlenguaje
     */
    public function setNumreporteId($numreporteId)
    {
        $this->numreporteId = $numreporteId;

        return $this;
    }

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
     * Set strdescripciongrupo
     *
     * @param string $strdescripciongrupo
     * @return Reportescamposlenguaje
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
     * @return Reportescamposlenguaje
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
     * @return Reportescamposlenguaje
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
     * @return Reportescamposlenguaje
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
     * @return Reportescamposlenguaje
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
