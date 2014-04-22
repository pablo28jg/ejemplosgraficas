<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametrosvaloreslenguaje
 *
 * @ORM\Table(name="ParametrosValoresLenguaje", indexes={@ORM\Index(name="Indice_1", columns={"NumParametro_id"})})
 * @ORM\Entity
 */
class Parametrosvaloreslenguaje
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
     * @ORM\Column(name="NumParametro_id", type="integer", nullable=true)
     */
    private $numparametroId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemAyuda", type="text", length=16, nullable=true)
     */
    private $memayuda;



    /**
     * Set numvalorId
     *
     * @param integer $numvalorId
     * @return Parametrosvaloreslenguaje
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
     * @return Parametrosvaloreslenguaje
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
     * @return Parametrosvaloreslenguaje
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Parametrosvaloreslenguaje
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
     * Set memayuda
     *
     * @param string $memayuda
     * @return Parametrosvaloreslenguaje
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
