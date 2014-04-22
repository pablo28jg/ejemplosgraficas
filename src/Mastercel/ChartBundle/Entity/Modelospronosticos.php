<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelospronosticos
 *
 * @ORM\Table(name="ModelosPronosticos", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Modelospronosticos
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrModelo_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strmodeloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumColor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcolorId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadPronostico", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadpronostico = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadMinimoTela", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadminimotela = '0';

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
     * Set strmodeloKy
     *
     * @param string $strmodeloKy
     * @return Modelospronosticos
     */
    public function setStrmodeloKy($strmodeloKy)
    {
        $this->strmodeloKy = $strmodeloKy;

        return $this;
    }

    /**
     * Get strmodeloKy
     *
     * @return string 
     */
    public function getStrmodeloKy()
    {
        return $this->strmodeloKy;
    }

    /**
     * Set numcolorId
     *
     * @param integer $numcolorId
     * @return Modelospronosticos
     */
    public function setNumcolorId($numcolorId)
    {
        $this->numcolorId = $numcolorId;

        return $this;
    }

    /**
     * Get numcolorId
     *
     * @return integer 
     */
    public function getNumcolorId()
    {
        return $this->numcolorId;
    }

    /**
     * Set numcantidadpronostico
     *
     * @param float $numcantidadpronostico
     * @return Modelospronosticos
     */
    public function setNumcantidadpronostico($numcantidadpronostico)
    {
        $this->numcantidadpronostico = $numcantidadpronostico;

        return $this;
    }

    /**
     * Get numcantidadpronostico
     *
     * @return float 
     */
    public function getNumcantidadpronostico()
    {
        return $this->numcantidadpronostico;
    }

    /**
     * Set numcantidadminimotela
     *
     * @param float $numcantidadminimotela
     * @return Modelospronosticos
     */
    public function setNumcantidadminimotela($numcantidadminimotela)
    {
        $this->numcantidadminimotela = $numcantidadminimotela;

        return $this;
    }

    /**
     * Get numcantidadminimotela
     *
     * @return float 
     */
    public function getNumcantidadminimotela()
    {
        return $this->numcantidadminimotela;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Modelospronosticos
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
     * @return Modelospronosticos
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
     * @return Modelospronosticos
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
     * @return Modelospronosticos
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
     * @return Modelospronosticos
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
