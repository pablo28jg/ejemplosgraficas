<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametrosvalores
 *
 * @ORM\Table(name="ParametrosValores", indexes={@ORM\Index(name="Indice_1", columns={"NumParametro_id"})})
 * @ORM\Entity
 */
class Parametrosvalores
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
     * @ORM\Column(name="NumParametro_id", type="integer", nullable=true)
     */
    private $numparametroId = '0';

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
     * @return Parametrosvalores
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
     * Set numparametroId
     *
     * @param integer $numparametroId
     * @return Parametrosvalores
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
     * Set numorden
     *
     * @param integer $numorden
     * @return Parametrosvalores
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
     * @return Parametrosvalores
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
}
