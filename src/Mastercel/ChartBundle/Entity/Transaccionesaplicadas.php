<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionesaplicadas
 *
 * @ORM\Table(name="TransaccionesAplicadas", indexes={@ORM\Index(name="Indice_1", columns={"NumTransaccionAbono_id", "NumAlmacenAbono_id", "NumTipoTransaccionAbono", "NumTransaccionCargo_id", "NumAlmacenCargo_id", "NumTipoTransaccionCargo"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumImporte"})})
 * @ORM\Entity
 */
class Transaccionesaplicadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionCargo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccioncargoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenCargo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacencargoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionCargo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccioncargo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionAbono_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionabonoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenAbono_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenabonoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionAbono", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccionabono = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte", type="integer", nullable=true)
     */
    private $numimporte = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCreadoPor_id", type="integer", nullable=true)
     */
    private $numcreadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCreacion", type="datetime", nullable=true)
     */
    private $dtecreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActualizadoPor_id", type="integer", nullable=true)
     */
    private $numactualizadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteActualizacion", type="datetime", nullable=true)
     */
    private $dteactualizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Set numtransaccioncargoId
     *
     * @param integer $numtransaccioncargoId
     * @return Transaccionesaplicadas
     */
    public function setNumtransaccioncargoId($numtransaccioncargoId)
    {
        $this->numtransaccioncargoId = $numtransaccioncargoId;

        return $this;
    }

    /**
     * Get numtransaccioncargoId
     *
     * @return integer 
     */
    public function getNumtransaccioncargoId()
    {
        return $this->numtransaccioncargoId;
    }

    /**
     * Set numalmacencargoId
     *
     * @param integer $numalmacencargoId
     * @return Transaccionesaplicadas
     */
    public function setNumalmacencargoId($numalmacencargoId)
    {
        $this->numalmacencargoId = $numalmacencargoId;

        return $this;
    }

    /**
     * Get numalmacencargoId
     *
     * @return integer 
     */
    public function getNumalmacencargoId()
    {
        return $this->numalmacencargoId;
    }

    /**
     * Set numtipotransaccioncargo
     *
     * @param integer $numtipotransaccioncargo
     * @return Transaccionesaplicadas
     */
    public function setNumtipotransaccioncargo($numtipotransaccioncargo)
    {
        $this->numtipotransaccioncargo = $numtipotransaccioncargo;

        return $this;
    }

    /**
     * Get numtipotransaccioncargo
     *
     * @return integer 
     */
    public function getNumtipotransaccioncargo()
    {
        return $this->numtipotransaccioncargo;
    }

    /**
     * Set numtransaccionabonoId
     *
     * @param integer $numtransaccionabonoId
     * @return Transaccionesaplicadas
     */
    public function setNumtransaccionabonoId($numtransaccionabonoId)
    {
        $this->numtransaccionabonoId = $numtransaccionabonoId;

        return $this;
    }

    /**
     * Get numtransaccionabonoId
     *
     * @return integer 
     */
    public function getNumtransaccionabonoId()
    {
        return $this->numtransaccionabonoId;
    }

    /**
     * Set numalmacenabonoId
     *
     * @param integer $numalmacenabonoId
     * @return Transaccionesaplicadas
     */
    public function setNumalmacenabonoId($numalmacenabonoId)
    {
        $this->numalmacenabonoId = $numalmacenabonoId;

        return $this;
    }

    /**
     * Get numalmacenabonoId
     *
     * @return integer 
     */
    public function getNumalmacenabonoId()
    {
        return $this->numalmacenabonoId;
    }

    /**
     * Set numtipotransaccionabono
     *
     * @param integer $numtipotransaccionabono
     * @return Transaccionesaplicadas
     */
    public function setNumtipotransaccionabono($numtipotransaccionabono)
    {
        $this->numtipotransaccionabono = $numtipotransaccionabono;

        return $this;
    }

    /**
     * Get numtipotransaccionabono
     *
     * @return integer 
     */
    public function getNumtipotransaccionabono()
    {
        return $this->numtipotransaccionabono;
    }

    /**
     * Set numimporte
     *
     * @param integer $numimporte
     * @return Transaccionesaplicadas
     */
    public function setNumimporte($numimporte)
    {
        $this->numimporte = $numimporte;

        return $this;
    }

    /**
     * Get numimporte
     *
     * @return integer 
     */
    public function getNumimporte()
    {
        return $this->numimporte;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Transaccionesaplicadas
     */
    public function setNumcreadoporId($numcreadoporId)
    {
        $this->numcreadoporId = $numcreadoporId;

        return $this;
    }

    /**
     * Get numcreadoporId
     *
     * @return integer 
     */
    public function getNumcreadoporId()
    {
        return $this->numcreadoporId;
    }

    /**
     * Set dtecreacion
     *
     * @param \DateTime $dtecreacion
     * @return Transaccionesaplicadas
     */
    public function setDtecreacion($dtecreacion)
    {
        $this->dtecreacion = $dtecreacion;

        return $this;
    }

    /**
     * Get dtecreacion
     *
     * @return \DateTime 
     */
    public function getDtecreacion()
    {
        return $this->dtecreacion;
    }

    /**
     * Set numactualizadoporId
     *
     * @param integer $numactualizadoporId
     * @return Transaccionesaplicadas
     */
    public function setNumactualizadoporId($numactualizadoporId)
    {
        $this->numactualizadoporId = $numactualizadoporId;

        return $this;
    }

    /**
     * Get numactualizadoporId
     *
     * @return integer 
     */
    public function getNumactualizadoporId()
    {
        return $this->numactualizadoporId;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Transaccionesaplicadas
     */
    public function setDteactualizacion($dteactualizacion)
    {
        $this->dteactualizacion = $dteactualizacion;

        return $this;
    }

    /**
     * Get dteactualizacion
     *
     * @return \DateTime 
     */
    public function getDteactualizacion()
    {
        return $this->dteactualizacion;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Transaccionesaplicadas
     */
    public function setNumtipoestado($numtipoestado)
    {
        $this->numtipoestado = $numtipoestado;

        return $this;
    }

    /**
     * Get numtipoestado
     *
     * @return integer 
     */
    public function getNumtipoestado()
    {
        return $this->numtipoestado;
    }

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Transaccionesaplicadas
     */
    public function setNumestadocomunicacion($numestadocomunicacion)
    {
        $this->numestadocomunicacion = $numestadocomunicacion;

        return $this;
    }

    /**
     * Get numestadocomunicacion
     *
     * @return integer 
     */
    public function getNumestadocomunicacion()
    {
        return $this->numestadocomunicacion;
    }
}
