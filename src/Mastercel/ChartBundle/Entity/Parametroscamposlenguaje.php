<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametroscamposlenguaje
 *
 * @ORM\Table(name="ParametrosCamposLenguaje", indexes={@ORM\Index(name="Indice_1", columns={"NumParametro_id"})})
 * @ORM\Entity
 */
class Parametroscamposlenguaje
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
     * @ORM\Column(name="NumParametro_id", type="integer", nullable=true)
     */
    private $numparametroId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionCampo", type="string", length=60, nullable=true)
     */
    private $strdescripcioncampo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionGrupo", type="string", length=60, nullable=true)
     */
    private $strdescripciongrupo;

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
     * @return Parametroscamposlenguaje
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
     * @return Parametroscamposlenguaje
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
     * Set numparametroId
     *
     * @param integer $numparametroId
     * @return Parametroscamposlenguaje
     */
    public function setNumparametroId($numparametroId)
    {
        $this->numparametroId = $numparametroId;

        return $this;
    }

    /**
     * Get numparametroId
     *
     * @return integer 
     */
    public function getNumparametroId()
    {
        return $this->numparametroId;
    }

    /**
     * Set strdescripcioncampo
     *
     * @param string $strdescripcioncampo
     * @return Parametroscamposlenguaje
     */
    public function setStrdescripcioncampo($strdescripcioncampo)
    {
        $this->strdescripcioncampo = $strdescripcioncampo;

        return $this;
    }

    /**
     * Get strdescripcioncampo
     *
     * @return string 
     */
    public function getStrdescripcioncampo()
    {
        return $this->strdescripcioncampo;
    }

    /**
     * Set strdescripciongrupo
     *
     * @param string $strdescripciongrupo
     * @return Parametroscamposlenguaje
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
     * Set memayuda
     *
     * @param string $memayuda
     * @return Parametroscamposlenguaje
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
