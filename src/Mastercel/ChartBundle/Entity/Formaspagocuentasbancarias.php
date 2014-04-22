<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formaspagocuentasbancarias
 *
 * @ORM\Table(name="FormasPagoCuentasBancarias", indexes={@ORM\Index(name="Indice_1", columns={"NumCuentaBancaria_id", "NumFormaPago_id"})})
 * @ORM\Entity
 */
class Formaspagocuentasbancarias
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
     * @ORM\Column(name="NumCuentaBancaria_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcuentabancariaId = '0';



    /**
     * Set numformapagoId
     *
     * @param integer $numformapagoId
     * @return Formaspagocuentasbancarias
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
     * Set numcuentabancariaId
     *
     * @param integer $numcuentabancariaId
     * @return Formaspagocuentasbancarias
     */
    public function setNumcuentabancariaId($numcuentabancariaId)
    {
        $this->numcuentabancariaId = $numcuentabancariaId;

        return $this;
    }

    /**
     * Get numcuentabancariaId
     *
     * @return integer 
     */
    public function getNumcuentabancariaId()
    {
        return $this->numcuentabancariaId;
    }
}
