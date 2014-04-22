<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionesfrecuentes
 *
 * @ORM\Table(name="TransaccionesFrecuentes", indexes={@ORM\Index(name="Indice_1", columns={"DteAplicacion"}), @ORM\Index(name="Indice_2", columns={"NumAlmacen_id", "DteAplicacion"})})
 * @ORM\Entity
 */
class Transaccionesfrecuentes
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
     * @ORM\Column(name="NumTipoFrecuencia", type="integer", nullable=true)
     */
    private $numtipofrecuencia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDia", type="integer", nullable=true)
     */
    private $numtipodia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIntervalo_1", type="integer", nullable=true)
     */
    private $numintervalo1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIntervalo_2", type="integer", nullable=true)
     */
    private $numintervalo2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIntervalo_3", type="integer", nullable=true)
     */
    private $numintervalo3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogExpira", type="boolean", nullable=true)
     */
    private $logexpira = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteExpiracion", type="datetime", nullable=true)
     */
    private $dteexpiracion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteAplicacion", type="datetime", nullable=true)
     */
    private $dteaplicacion;



    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transaccionesfrecuentes
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
     * @return Transaccionesfrecuentes
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
     * @return Transaccionesfrecuentes
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
     * Set numtipofrecuencia
     *
     * @param integer $numtipofrecuencia
     * @return Transaccionesfrecuentes
     */
    public function setNumtipofrecuencia($numtipofrecuencia)
    {
        $this->numtipofrecuencia = $numtipofrecuencia;

        return $this;
    }

    /**
     * Get numtipofrecuencia
     *
     * @return integer 
     */
    public function getNumtipofrecuencia()
    {
        return $this->numtipofrecuencia;
    }

    /**
     * Set numtipodia
     *
     * @param integer $numtipodia
     * @return Transaccionesfrecuentes
     */
    public function setNumtipodia($numtipodia)
    {
        $this->numtipodia = $numtipodia;

        return $this;
    }

    /**
     * Get numtipodia
     *
     * @return integer 
     */
    public function getNumtipodia()
    {
        return $this->numtipodia;
    }

    /**
     * Set numintervalo1
     *
     * @param integer $numintervalo1
     * @return Transaccionesfrecuentes
     */
    public function setNumintervalo1($numintervalo1)
    {
        $this->numintervalo1 = $numintervalo1;

        return $this;
    }

    /**
     * Get numintervalo1
     *
     * @return integer 
     */
    public function getNumintervalo1()
    {
        return $this->numintervalo1;
    }

    /**
     * Set numintervalo2
     *
     * @param integer $numintervalo2
     * @return Transaccionesfrecuentes
     */
    public function setNumintervalo2($numintervalo2)
    {
        $this->numintervalo2 = $numintervalo2;

        return $this;
    }

    /**
     * Get numintervalo2
     *
     * @return integer 
     */
    public function getNumintervalo2()
    {
        return $this->numintervalo2;
    }

    /**
     * Set numintervalo3
     *
     * @param integer $numintervalo3
     * @return Transaccionesfrecuentes
     */
    public function setNumintervalo3($numintervalo3)
    {
        $this->numintervalo3 = $numintervalo3;

        return $this;
    }

    /**
     * Get numintervalo3
     *
     * @return integer 
     */
    public function getNumintervalo3()
    {
        return $this->numintervalo3;
    }

    /**
     * Set logexpira
     *
     * @param boolean $logexpira
     * @return Transaccionesfrecuentes
     */
    public function setLogexpira($logexpira)
    {
        $this->logexpira = $logexpira;

        return $this;
    }

    /**
     * Get logexpira
     *
     * @return boolean 
     */
    public function getLogexpira()
    {
        return $this->logexpira;
    }

    /**
     * Set dteexpiracion
     *
     * @param \DateTime $dteexpiracion
     * @return Transaccionesfrecuentes
     */
    public function setDteexpiracion($dteexpiracion)
    {
        $this->dteexpiracion = $dteexpiracion;

        return $this;
    }

    /**
     * Get dteexpiracion
     *
     * @return \DateTime 
     */
    public function getDteexpiracion()
    {
        return $this->dteexpiracion;
    }

    /**
     * Set dteaplicacion
     *
     * @param \DateTime $dteaplicacion
     * @return Transaccionesfrecuentes
     */
    public function setDteaplicacion($dteaplicacion)
    {
        $this->dteaplicacion = $dteaplicacion;

        return $this;
    }

    /**
     * Get dteaplicacion
     *
     * @return \DateTime 
     */
    public function getDteaplicacion()
    {
        return $this->dteaplicacion;
    }
}
