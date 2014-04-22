<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comisionesventasgrupos
 *
 * @ORM\Table(name="ComisionesVentasGrupos", indexes={@ORM\Index(name="Indice_1", columns={"StrGrupoComisionVenta_ky"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Comisionesventasgrupos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numgrupocomisionventaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrGrupoComisionVenta_ky", type="string", length=10, nullable=true)
     */
    private $strgrupocomisionventaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

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
     * @var integer
     *
     * @ORM\Column(name="NumCalcularComision", type="integer", nullable=true)
     */
    private $numcalcularcomision = '0';



    /**
     * Get numgrupocomisionventaId
     *
     * @return integer 
     */
    public function getNumgrupocomisionventaId()
    {
        return $this->numgrupocomisionventaId;
    }

    /**
     * Set strgrupocomisionventaKy
     *
     * @param string $strgrupocomisionventaKy
     * @return Comisionesventasgrupos
     */
    public function setStrgrupocomisionventaKy($strgrupocomisionventaKy)
    {
        $this->strgrupocomisionventaKy = $strgrupocomisionventaKy;

        return $this;
    }

    /**
     * Get strgrupocomisionventaKy
     *
     * @return string 
     */
    public function getStrgrupocomisionventaKy()
    {
        return $this->strgrupocomisionventaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Comisionesventasgrupos
     */
    public function setStrdescripcion($strdescripcion)
    {
        $this->strdescripcion = $strdescripcion;

        return $this;
    }

    /**
     * Get strdescripcion
     *
     * @return string 
     */
    public function getStrdescripcion()
    {
        return $this->strdescripcion;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Comisionesventasgrupos
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
     * @return Comisionesventasgrupos
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
     * @return Comisionesventasgrupos
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
     * @return Comisionesventasgrupos
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
     * @return Comisionesventasgrupos
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

    /**
     * Set numcalcularcomision
     *
     * @param integer $numcalcularcomision
     * @return Comisionesventasgrupos
     */
    public function setNumcalcularcomision($numcalcularcomision)
    {
        $this->numcalcularcomision = $numcalcularcomision;

        return $this;
    }

    /**
     * Get numcalcularcomision
     *
     * @return integer 
     */
    public function getNumcalcularcomision()
    {
        return $this->numcalcularcomision;
    }
}
