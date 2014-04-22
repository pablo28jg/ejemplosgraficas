<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultasopciones
 *
 * @ORM\Table(name="ConsultasOpciones", indexes={@ORM\Index(name="Indice_1", columns={"NumConsulta_id", "NumCampo_id", "NumOrden", "NumOpcion_id"})})
 * @ORM\Entity
 */
class Consultasopciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOpcion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numopcionId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrOpcion", type="string", length=20, nullable=true)
     */
    private $stropcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogSeleccionGeneral", type="boolean", nullable=true)
     */
    private $logselecciongeneral = '0';



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
     * Set numcampoId
     *
     * @param integer $numcampoId
     * @return Consultasopciones
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
     * @return Consultasopciones
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
     * Set numorden
     *
     * @param integer $numorden
     * @return Consultasopciones
     */
    public function setNumorden($numorden)
    {
        $this->numorden = $numorden;

        return $this;
    }

    /**
     * Get numorden
     *
     * @return integer 
     */
    public function getNumorden()
    {
        return $this->numorden;
    }

    /**
     * Set stropcion
     *
     * @param string $stropcion
     * @return Consultasopciones
     */
    public function setStropcion($stropcion)
    {
        $this->stropcion = $stropcion;

        return $this;
    }

    /**
     * Get stropcion
     *
     * @return string 
     */
    public function getStropcion()
    {
        return $this->stropcion;
    }

    /**
     * Set logselecciongeneral
     *
     * @param boolean $logselecciongeneral
     * @return Consultasopciones
     */
    public function setLogselecciongeneral($logselecciongeneral)
    {
        $this->logselecciongeneral = $logselecciongeneral;

        return $this;
    }

    /**
     * Get logselecciongeneral
     *
     * @return boolean 
     */
    public function getLogselecciongeneral()
    {
        return $this->logselecciongeneral;
    }
}
