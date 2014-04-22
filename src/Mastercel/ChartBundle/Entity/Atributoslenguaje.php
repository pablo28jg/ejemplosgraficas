<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atributoslenguaje
 *
 * @ORM\Table(name="AtributosLenguaje")
 * @ORM\Entity
 */
class Atributoslenguaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumAtributo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numatributoId = '0';

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
     * @ORM\Column(name="StrTitulo", type="string", length=60, nullable=true)
     */
    private $strtitulo;



    /**
     * Set numatributoId
     *
     * @param integer $numatributoId
     * @return Atributoslenguaje
     */
    public function setNumatributoId($numatributoId)
    {
        $this->numatributoId = $numatributoId;

        return $this;
    }

    /**
     * Get numatributoId
     *
     * @return integer 
     */
    public function getNumatributoId()
    {
        return $this->numatributoId;
    }

    /**
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Atributoslenguaje
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
     * @return Atributoslenguaje
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
     * Set strtitulo
     *
     * @param string $strtitulo
     * @return Atributoslenguaje
     */
    public function setStrtitulo($strtitulo)
    {
        $this->strtitulo = $strtitulo;

        return $this;
    }

    /**
     * Get strtitulo
     *
     * @return string 
     */
    public function getStrtitulo()
    {
        return $this->strtitulo;
    }
}
