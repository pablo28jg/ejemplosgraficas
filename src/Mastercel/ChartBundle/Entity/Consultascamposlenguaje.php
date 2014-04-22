<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultascamposlenguaje
 *
 * @ORM\Table(name="ConsultasCamposLenguaje", indexes={@ORM\Index(name="Indice_1", columns={"NumConsulta_id", "NumCampo_id", "NumLenguaje_id"})})
 * @ORM\Entity
 */
class Consultascamposlenguaje
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
     * @ORM\Column(name="NumConsulta_id", type="integer", nullable=true)
     */
    private $numconsultaId = '0';

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
     * @var string
     *
     * @ORM\Column(name="StrDescripcionCampoConsulta", type="string", length=60, nullable=true)
     */
    private $strdescripcioncampoconsulta;



    /**
     * Set numcampoId
     *
     * @param integer $numcampoId
     * @return Consultascamposlenguaje
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
     * @return Consultascamposlenguaje
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
     * Set numconsultaId
     *
     * @param integer $numconsultaId
     * @return Consultascamposlenguaje
     */
    public function setNumconsultaId($numconsultaId)
    {
        $this->numconsultaId = $numconsultaId;

        return $this;
    }

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
     * Set strdescripciongrupo
     *
     * @param string $strdescripciongrupo
     * @return Consultascamposlenguaje
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
     * @return Consultascamposlenguaje
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
     * @return Consultascamposlenguaje
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
     * @return Consultascamposlenguaje
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
     * @return Consultascamposlenguaje
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

    /**
     * Set strdescripcioncampoconsulta
     *
     * @param string $strdescripcioncampoconsulta
     * @return Consultascamposlenguaje
     */
    public function setStrdescripcioncampoconsulta($strdescripcioncampoconsulta)
    {
        $this->strdescripcioncampoconsulta = $strdescripcioncampoconsulta;

        return $this;
    }

    /**
     * Get strdescripcioncampoconsulta
     *
     * @return string 
     */
    public function getStrdescripcioncampoconsulta()
    {
        return $this->strdescripcioncampoconsulta;
    }
}
