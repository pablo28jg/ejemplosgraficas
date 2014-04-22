<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasdinamicasvalores
 *
 * @ORM\Table(name="TablasDinamicasValores", indexes={@ORM\Index(name="Indice_1", columns={"NumTablaDinamica_id", "NumCampo_id", "NumOrden", "NumValor_id"})})
 * @ORM\Entity
 */
class Tablasdinamicasvalores
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
     * @ORM\Column(name="NumTablaDinamica_id", type="integer", nullable=true)
     */
    private $numtabladinamicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrValor", type="string", length=20, nullable=true)
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
     * @return Tablasdinamicasvalores
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
     * Set numtabladinamicaId
     *
     * @param integer $numtabladinamicaId
     * @return Tablasdinamicasvalores
     */
    public function setNumtabladinamicaId($numtabladinamicaId)
    {
        $this->numtabladinamicaId = $numtabladinamicaId;

        return $this;
    }

    /**
     * Get numtabladinamicaId
     *
     * @return integer 
     */
    public function getNumtabladinamicaId()
    {
        return $this->numtabladinamicaId;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Tablasdinamicasvalores
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
     * @return Tablasdinamicasvalores
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
     * @return Tablasdinamicasvalores
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
