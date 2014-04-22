<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportescarpetasplantillaslenguaje
 *
 * @ORM\Table(name="ReportesCarpetasPlantillasLenguaje")
 * @ORM\Entity
 */
class Reportescarpetasplantillaslenguaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPlantilla_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numplantillaId = '0';

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
     * @ORM\Column(name="MemAyuda", type="text", length=16, nullable=true)
     */
    private $memayuda;



    /**
     * Set numplantillaId
     *
     * @param integer $numplantillaId
     * @return Reportescarpetasplantillaslenguaje
     */
    public function setNumplantillaId($numplantillaId)
    {
        $this->numplantillaId = $numplantillaId;

        return $this;
    }

    /**
     * Get numplantillaId
     *
     * @return integer 
     */
    public function getNumplantillaId()
    {
        return $this->numplantillaId;
    }

    /**
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Reportescarpetasplantillaslenguaje
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
     * @return Reportescarpetasplantillaslenguaje
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
     * @return Reportescarpetasplantillaslenguaje
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
