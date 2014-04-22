<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Validacionescontablesdetalles
 *
 * @ORM\Table(name="ValidacionesContablesDetalles")
 * @ORM\Entity
 */
class Validacionescontablesdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumValidacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numvalidacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcentrocontrolId = '0';



    /**
     * Set numvalidacionId
     *
     * @param integer $numvalidacionId
     * @return Validacionescontablesdetalles
     */
    public function setNumvalidacionId($numvalidacionId)
    {
        $this->numvalidacionId = $numvalidacionId;

        return $this;
    }

    /**
     * Get numvalidacionId
     *
     * @return integer 
     */
    public function getNumvalidacionId()
    {
        return $this->numvalidacionId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Validacionescontablesdetalles
     */
    public function setNumempresaId($numempresaId)
    {
        $this->numempresaId = $numempresaId;

        return $this;
    }

    /**
     * Get numempresaId
     *
     * @return integer 
     */
    public function getNumempresaId()
    {
        return $this->numempresaId;
    }

    /**
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Validacionescontablesdetalles
     */
    public function setNumcentrocontrolId($numcentrocontrolId)
    {
        $this->numcentrocontrolId = $numcentrocontrolId;

        return $this;
    }

    /**
     * Get numcentrocontrolId
     *
     * @return integer 
     */
    public function getNumcentrocontrolId()
    {
        return $this->numcentrocontrolId;
    }
}
