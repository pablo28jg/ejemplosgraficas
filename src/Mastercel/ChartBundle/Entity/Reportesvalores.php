<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportesvalores
 *
 * @ORM\Table(name="ReportesValores", indexes={@ORM\Index(name="Indice_1", columns={"NumCampo_id", "NumOrden"}), @ORM\Index(name="Indice_2", columns={"NumReporte_id"})})
 * @ORM\Entity
 */
class Reportesvalores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumValor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numvalorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCampo_id", type="integer", nullable=true)
     */
    private $numcampoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=true)
     */
    private $numreporteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrValor", type="string", length=60, nullable=true)
     */
    private $strvalor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogSeleccionGeneral", type="boolean", nullable=true)
     */
    private $logselecciongeneral = '0';



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
     * Set numcampoId
     *
     * @param integer $numcampoId
     * @return Reportesvalores
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
     * Set numreporteId
     *
     * @param integer $numreporteId
     * @return Reportesvalores
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
     * Set numorden
     *
     * @param integer $numorden
     * @return Reportesvalores
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
     * Set strvalor
     *
     * @param string $strvalor
     * @return Reportesvalores
     */
    public function setStrvalor($strvalor)
    {
        $this->strvalor = $strvalor;

        return $this;
    }

    /**
     * Get strvalor
     *
     * @return string 
     */
    public function getStrvalor()
    {
        return $this->strvalor;
    }

    /**
     * Set logselecciongeneral
     *
     * @param boolean $logselecciongeneral
     * @return Reportesvalores
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
