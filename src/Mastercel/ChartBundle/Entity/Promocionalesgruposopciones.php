<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promocionalesgruposopciones
 *
 * @ORM\Table(name="PromocionalesGruposOpciones")
 * @ORM\Entity
 */
class Promocionalesgruposopciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPromocionalGrupo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numpromocionalgrupoId = '0';

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
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;



    /**
     * Set numpromocionalgrupoId
     *
     * @param integer $numpromocionalgrupoId
     * @return Promocionalesgruposopciones
     */
    public function setNumpromocionalgrupoId($numpromocionalgrupoId)
    {
        $this->numpromocionalgrupoId = $numpromocionalgrupoId;

        return $this;
    }

    /**
     * Get numpromocionalgrupoId
     *
     * @return integer 
     */
    public function getNumpromocionalgrupoId()
    {
        return $this->numpromocionalgrupoId;
    }

    /**
     * Set numopcionId
     *
     * @param integer $numopcionId
     * @return Promocionalesgruposopciones
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
     * Set numorden
     *
     * @param integer $numorden
     * @return Promocionalesgruposopciones
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Promocionalesgruposopciones
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
