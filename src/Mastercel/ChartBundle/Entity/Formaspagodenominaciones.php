<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formaspagodenominaciones
 *
 * @ORM\Table(name="FormasPagoDenominaciones")
 * @ORM\Entity
 */
class Formaspagodenominaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumFormaPago_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numformapagoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDenominacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numdenominacionId = '0';



    /**
     * Set numformapagoId
     *
     * @param integer $numformapagoId
     * @return Formaspagodenominaciones
     */
    public function setNumformapagoId($numformapagoId)
    {
        $this->numformapagoId = $numformapagoId;

        return $this;
    }

    /**
     * Get numformapagoId
     *
     * @return integer 
     */
    public function getNumformapagoId()
    {
        return $this->numformapagoId;
    }

    /**
     * Set numdenominacionId
     *
     * @param integer $numdenominacionId
     * @return Formaspagodenominaciones
     */
    public function setNumdenominacionId($numdenominacionId)
    {
        $this->numdenominacionId = $numdenominacionId;

        return $this;
    }

    /**
     * Get numdenominacionId
     *
     * @return integer 
     */
    public function getNumdenominacionId()
    {
        return $this->numdenominacionId;
    }
}
