<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codigospromocionformaspago
 *
 * @ORM\Table(name="CodigosPromocionFormasPago", indexes={@ORM\Index(name="Indice_1", columns={"NumFormaPago_id", "NumCodigoPromocion_id"})})
 * @ORM\Entity
 */
class Codigospromocionformaspago
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoPromocion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcodigopromocionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFormaPago_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numformapagoId = '0';



    /**
     * Set numcodigopromocionId
     *
     * @param integer $numcodigopromocionId
     * @return Codigospromocionformaspago
     */
    public function setNumcodigopromocionId($numcodigopromocionId)
    {
        $this->numcodigopromocionId = $numcodigopromocionId;

        return $this;
    }

    /**
     * Get numcodigopromocionId
     *
     * @return integer 
     */
    public function getNumcodigopromocionId()
    {
        return $this->numcodigopromocionId;
    }

    /**
     * Set numformapagoId
     *
     * @param integer $numformapagoId
     * @return Codigospromocionformaspago
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
}
