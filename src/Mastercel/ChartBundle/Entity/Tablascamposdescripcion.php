<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablascamposdescripcion
 *
 * @ORM\Table(name="TablasCamposDescripcion")
 * @ORM\Entity
 */
class Tablascamposdescripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTabla_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtablaId = '0';

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
     * @ORM\Column(name="NumOpcion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numopcionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrOpcion_ky", type="string", length=60, nullable=true)
     */
    private $stropcionKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogValorOmision", type="boolean", nullable=true)
     */
    private $logvaloromision = '0';



    /**
     * Set numtablaId
     *
     * @param integer $numtablaId
     * @return Tablascamposdescripcion
     */
    public function setNumtablaId($numtablaId)
    {
        $this->numtablaId = $numtablaId;

        return $this;
    }

    /**
     * Get numtablaId
     *
     * @return integer 
     */
    public function getNumtablaId()
    {
        return $this->numtablaId;
    }

    /**
     * Set numcampoId
     *
     * @param integer $numcampoId
     * @return Tablascamposdescripcion
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
     * Set numopcionId
     *
     * @param integer $numopcionId
     * @return Tablascamposdescripcion
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
     * Set stropcionKy
     *
     * @param string $stropcionKy
     * @return Tablascamposdescripcion
     */
    public function setStropcionKy($stropcionKy)
    {
        $this->stropcionKy = $stropcionKy;

        return $this;
    }

    /**
     * Get stropcionKy
     *
     * @return string 
     */
    public function getStropcionKy()
    {
        return $this->stropcionKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tablascamposdescripcion
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
     * Set logvaloromision
     *
     * @param boolean $logvaloromision
     * @return Tablascamposdescripcion
     */
    public function setLogvaloromision($logvaloromision)
    {
        $this->logvaloromision = $logvaloromision;

        return $this;
    }

    /**
     * Get logvaloromision
     *
     * @return boolean 
     */
    public function getLogvaloromision()
    {
        return $this->logvaloromision;
    }
}
