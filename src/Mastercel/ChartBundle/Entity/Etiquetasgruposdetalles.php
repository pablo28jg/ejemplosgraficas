<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etiquetasgruposdetalles
 *
 * @ORM\Table(name="EtiquetasGruposDetalles")
 * @ORM\Entity
 */
class Etiquetasgruposdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoEtiqueta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numgrupoetiquetaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEtiqueta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numetiquetaId = '0';



    /**
     * Set numgrupoetiquetaId
     *
     * @param integer $numgrupoetiquetaId
     * @return Etiquetasgruposdetalles
     */
    public function setNumgrupoetiquetaId($numgrupoetiquetaId)
    {
        $this->numgrupoetiquetaId = $numgrupoetiquetaId;

        return $this;
    }

    /**
     * Get numgrupoetiquetaId
     *
     * @return integer 
     */
    public function getNumgrupoetiquetaId()
    {
        return $this->numgrupoetiquetaId;
    }

    /**
     * Set numetiquetaId
     *
     * @param integer $numetiquetaId
     * @return Etiquetasgruposdetalles
     */
    public function setNumetiquetaId($numetiquetaId)
    {
        $this->numetiquetaId = $numetiquetaId;

        return $this;
    }

    /**
     * Get numetiquetaId
     *
     * @return integer 
     */
    public function getNumetiquetaId()
    {
        return $this->numetiquetaId;
    }
}
