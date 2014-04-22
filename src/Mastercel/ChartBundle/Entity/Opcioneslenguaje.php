<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opcioneslenguaje
 *
 * @ORM\Table(name="OpcionesLenguaje")
 * @ORM\Entity
 */
class Opcioneslenguaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOpcion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numopcionId = '0';

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
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTitulo", type="string", length=100, nullable=true)
     */
    private $strtitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="MemAyuda", type="text", length=16, nullable=true)
     */
    private $memayuda;



    /**
     * Set numopcionId
     *
     * @param integer $numopcionId
     * @return Opcioneslenguaje
     */
    public function setNumopcionId($numopcionId)
    {
        $this->numopcionId = $numopcionId;

        return $this;
    }

    /**
     * Get numopcionId
     *
     * @return integer 
     */
    public function getNumopcionId()
    {
        return $this->numopcionId;
    }

    /**
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Opcioneslenguaje
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
     * @return Opcioneslenguaje
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
     * @return Opcioneslenguaje
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

    /**
     * Set memayuda
     *
     * @param string $memayuda
     * @return Opcioneslenguaje
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
