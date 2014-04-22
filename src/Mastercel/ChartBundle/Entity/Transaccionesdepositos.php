<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionesdepositos
 *
 * @ORM\Table(name="TransaccionesDepositos", indexes={@ORM\Index(name="Indice_1", columns={"NumTransaccionOrigen_id", "NumAlmacenOrigen_id", "NumTipoTransaccionOrigen"})})
 * @ORM\Entity
 */
class Transaccionesdepositos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionOrigen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionorigenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenOrigen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenorigenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionOrigen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccionorigen = '0';



    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transaccionesdepositos
     */
    public function setNumtransaccionId($numtransaccionId)
    {
        $this->numtransaccionId = $numtransaccionId;

        return $this;
    }

    /**
     * Get numtransaccionId
     *
     * @return integer 
     */
    public function getNumtransaccionId()
    {
        return $this->numtransaccionId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Transaccionesdepositos
     */
    public function setNumalmacenId($numalmacenId)
    {
        $this->numalmacenId = $numalmacenId;

        return $this;
    }

    /**
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set numtipotransaccion
     *
     * @param integer $numtipotransaccion
     * @return Transaccionesdepositos
     */
    public function setNumtipotransaccion($numtipotransaccion)
    {
        $this->numtipotransaccion = $numtipotransaccion;

        return $this;
    }

    /**
     * Get numtipotransaccion
     *
     * @return integer 
     */
    public function getNumtipotransaccion()
    {
        return $this->numtipotransaccion;
    }

    /**
     * Set numtransaccionorigenId
     *
     * @param integer $numtransaccionorigenId
     * @return Transaccionesdepositos
     */
    public function setNumtransaccionorigenId($numtransaccionorigenId)
    {
        $this->numtransaccionorigenId = $numtransaccionorigenId;

        return $this;
    }

    /**
     * Get numtransaccionorigenId
     *
     * @return integer 
     */
    public function getNumtransaccionorigenId()
    {
        return $this->numtransaccionorigenId;
    }

    /**
     * Set numalmacenorigenId
     *
     * @param integer $numalmacenorigenId
     * @return Transaccionesdepositos
     */
    public function setNumalmacenorigenId($numalmacenorigenId)
    {
        $this->numalmacenorigenId = $numalmacenorigenId;

        return $this;
    }

    /**
     * Get numalmacenorigenId
     *
     * @return integer 
     */
    public function getNumalmacenorigenId()
    {
        return $this->numalmacenorigenId;
    }

    /**
     * Set numtipotransaccionorigen
     *
     * @param integer $numtipotransaccionorigen
     * @return Transaccionesdepositos
     */
    public function setNumtipotransaccionorigen($numtipotransaccionorigen)
    {
        $this->numtipotransaccionorigen = $numtipotransaccionorigen;

        return $this;
    }

    /**
     * Get numtipotransaccionorigen
     *
     * @return integer 
     */
    public function getNumtipotransaccionorigen()
    {
        return $this->numtipotransaccionorigen;
    }
}
