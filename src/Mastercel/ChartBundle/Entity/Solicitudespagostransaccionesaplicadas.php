<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudespagostransaccionesaplicadas
 *
 * @ORM\Table(name="SolicitudesPagosTransaccionesAplicadas", indexes={@ORM\Index(name="Indice_1", columns={"NumTransaccion_id", "NumAlmacen_id", "NumTipoTransaccion"}), @ORM\Index(name="Indice_2", columns={"NumTransaccionAplicada_id", "NumAlmacenAplicada_id", "NumTipoTransaccionAplicada"})})
 * @ORM\Entity
 */
class Solicitudespagostransaccionesaplicadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumSolicitud_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numsolicitudId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenSolicitud_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacensolicitudId = '0';

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
     * @ORM\Column(name="NumTransaccionAplicada_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionaplicadaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenAplicada_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenaplicadaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionAplicada", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccionaplicada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte", type="integer", nullable=true)
     */
    private $numimporte = '0';



    /**
     * Set numsolicitudId
     *
     * @param integer $numsolicitudId
     * @return Solicitudespagostransaccionesaplicadas
     */
    public function setNumsolicitudId($numsolicitudId)
    {
        $this->numsolicitudId = $numsolicitudId;

        return $this;
    }

    /**
     * Get numsolicitudId
     *
     * @return integer 
     */
    public function getNumsolicitudId()
    {
        return $this->numsolicitudId;
    }

    /**
     * Set numalmacensolicitudId
     *
     * @param integer $numalmacensolicitudId
     * @return Solicitudespagostransaccionesaplicadas
     */
    public function setNumalmacensolicitudId($numalmacensolicitudId)
    {
        $this->numalmacensolicitudId = $numalmacensolicitudId;

        return $this;
    }

    /**
     * Get numalmacensolicitudId
     *
     * @return integer 
     */
    public function getNumalmacensolicitudId()
    {
        return $this->numalmacensolicitudId;
    }

    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Solicitudespagostransaccionesaplicadas
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
     * @return Solicitudespagostransaccionesaplicadas
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
     * @return Solicitudespagostransaccionesaplicadas
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
     * Set numtransaccionaplicadaId
     *
     * @param integer $numtransaccionaplicadaId
     * @return Solicitudespagostransaccionesaplicadas
     */
    public function setNumtransaccionaplicadaId($numtransaccionaplicadaId)
    {
        $this->numtransaccionaplicadaId = $numtransaccionaplicadaId;

        return $this;
    }

    /**
     * Get numtransaccionaplicadaId
     *
     * @return integer 
     */
    public function getNumtransaccionaplicadaId()
    {
        return $this->numtransaccionaplicadaId;
    }

    /**
     * Set numalmacenaplicadaId
     *
     * @param integer $numalmacenaplicadaId
     * @return Solicitudespagostransaccionesaplicadas
     */
    public function setNumalmacenaplicadaId($numalmacenaplicadaId)
    {
        $this->numalmacenaplicadaId = $numalmacenaplicadaId;

        return $this;
    }

    /**
     * Get numalmacenaplicadaId
     *
     * @return integer 
     */
    public function getNumalmacenaplicadaId()
    {
        return $this->numalmacenaplicadaId;
    }

    /**
     * Set numtipotransaccionaplicada
     *
     * @param integer $numtipotransaccionaplicada
     * @return Solicitudespagostransaccionesaplicadas
     */
    public function setNumtipotransaccionaplicada($numtipotransaccionaplicada)
    {
        $this->numtipotransaccionaplicada = $numtipotransaccionaplicada;

        return $this;
    }

    /**
     * Get numtipotransaccionaplicada
     *
     * @return integer 
     */
    public function getNumtipotransaccionaplicada()
    {
        return $this->numtipotransaccionaplicada;
    }

    /**
     * Set numimporte
     *
     * @param integer $numimporte
     * @return Solicitudespagostransaccionesaplicadas
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
}
