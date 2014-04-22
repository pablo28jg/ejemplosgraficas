<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opcionesatributos
 *
 * @ORM\Table(name="OpcionesAtributos")
 * @ORM\Entity
 */
class Opcionesatributos
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
     * @ORM\Column(name="NumAtributo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numatributoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPosicion", type="integer", nullable=true)
     */
    private $numposicion = '0';



    /**
     * Set numopcionId
     *
     * @param integer $numopcionId
     * @return Opcionesatributos
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
     * Set numatributoId
     *
     * @param integer $numatributoId
     * @return Opcionesatributos
     */
    public function setNumatributoId($numatributoId)
    {
        $this->numatributoId = $numatributoId;

        return $this;
    }

    /**
     * Get numatributoId
     *
     * @return integer 
     */
    public function getNumatributoId()
    {
        return $this->numatributoId;
    }

    /**
     * Set numposicion
     *
     * @param integer $numposicion
     * @return Opcionesatributos
     */
    public function setNumposicion($numposicion)
    {
        $this->numposicion = $numposicion;

        return $this;
    }

    /**
     * Get numposicion
     *
     * @return integer 
     */
    public function getNumposicion()
    {
        return $this->numposicion;
    }
}
