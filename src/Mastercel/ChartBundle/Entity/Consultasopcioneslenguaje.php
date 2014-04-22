<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultasopcioneslenguaje
 *
 * @ORM\Table(name="ConsultasOpcionesLenguaje", indexes={@ORM\Index(name="Indice_1", columns={"NumConsulta_id", "NumCampo_id", "NumOpcion_id", "NumLenguaje_id"})})
 * @ORM\Entity
 */
class Consultasopcioneslenguaje
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
     * @var integer
     *
     * @ORM\Column(name="NumCampo_id", type="integer", nullable=true)
     */
    private $numcampoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsulta_id", type="integer", nullable=true)
     */
    private $numconsultaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=30, nullable=true)
     */
    private $strdescripcion;



    /**
     * Set numopcionId
     *
     * @param integer $numopcionId
     * @return Consultasopcioneslenguaje
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
     * @return Consultasopcioneslenguaje
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
     * @return Consultasopcioneslenguaje
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
     * Set numconsultaId
     *
     * @param integer $numconsultaId
     * @return Consultasopcioneslenguaje
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Consultasopcioneslenguaje
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
