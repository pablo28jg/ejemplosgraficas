<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultaslenguaje
 *
 * @ORM\Table(name="ConsultasLenguaje")
 * @ORM\Entity
 */
class Consultaslenguaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsulta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsultaId = '0';

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
     * @ORM\Column(name="StrDescripcionSeleccion", type="string", length=100, nullable=true)
     */
    private $strdescripcionseleccion;



    /**
     * Set numconsultaId
     *
     * @param integer $numconsultaId
     * @return Consultaslenguaje
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
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Consultaslenguaje
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
     * @return Consultaslenguaje
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
     * @return Consultaslenguaje
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
}
