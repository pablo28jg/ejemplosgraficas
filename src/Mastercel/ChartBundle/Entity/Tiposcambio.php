<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposcambio
 *
 * @ORM\Table(name="TiposCambio", indexes={@ORM\Index(name="Indice_1", columns={"DteTipoCambio_id", "NumMoneda_id"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Tiposcambio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nummonedaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTipoCambio_id", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dtetipocambioId;

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambioPromedio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambiopromedio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambioCompra", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambiocompra = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambioVenta", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambioventa = '0';

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
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Tiposcambio
     */
    public function setNummonedaId($nummonedaId)
    {
        $this->nummonedaId = $nummonedaId;

        return $this;
    }

    /**
     * Get nummonedaId
     *
     * @return integer 
     */
    public function getNummonedaId()
    {
        return $this->nummonedaId;
    }

    /**
     * Set dtetipocambioId
     *
     * @param \DateTime $dtetipocambioId
     * @return Tiposcambio
     */
    public function setDtetipocambioId($dtetipocambioId)
    {
        $this->dtetipocambioId = $dtetipocambioId;

        return $this;
    }

    /**
     * Get dtetipocambioId
     *
     * @return \DateTime 
     */
    public function getDtetipocambioId()
    {
        return $this->dtetipocambioId;
    }

    /**
     * Set numtipocambiopromedio
     *
     * @param float $numtipocambiopromedio
     * @return Tiposcambio
     */
    public function setNumtipocambiopromedio($numtipocambiopromedio)
    {
        $this->numtipocambiopromedio = $numtipocambiopromedio;

        return $this;
    }

    /**
     * Get numtipocambiopromedio
     *
     * @return float 
     */
    public function getNumtipocambiopromedio()
    {
        return $this->numtipocambiopromedio;
    }

    /**
     * Set numtipocambiocompra
     *
     * @param float $numtipocambiocompra
     * @return Tiposcambio
     */
    public function setNumtipocambiocompra($numtipocambiocompra)
    {
        $this->numtipocambiocompra = $numtipocambiocompra;

        return $this;
    }

    /**
     * Get numtipocambiocompra
     *
     * @return float 
     */
    public function getNumtipocambiocompra()
    {
        return $this->numtipocambiocompra;
    }

    /**
     * Set numtipocambioventa
     *
     * @param float $numtipocambioventa
     * @return Tiposcambio
     */
    public function setNumtipocambioventa($numtipocambioventa)
    {
        $this->numtipocambioventa = $numtipocambioventa;

        return $this;
    }

    /**
     * Get numtipocambioventa
     *
     * @return float 
     */
    public function getNumtipocambioventa()
    {
        return $this->numtipocambioventa;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Tiposcambio
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
     * @return Tiposcambio
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
     * @return Tiposcambio
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
     * @return Tiposcambio
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
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Tiposcambio
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
