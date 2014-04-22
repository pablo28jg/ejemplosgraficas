<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportescarpetas
 *
 * @ORM\Table(name="ReportesCarpetas", indexes={@ORM\Index(name="Indice_1", columns={"NumJerarquia_id"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"})})
 * @ORM\Entity
 */
class Reportescarpetas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCarpeta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcarpetaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=60, nullable=true)
     */
    private $strnombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumJerarquia_id", type="integer", nullable=true)
     */
    private $numjerarquiaId = '0';

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
     * Get numcarpetaId
     *
     * @return integer 
     */
    public function getNumcarpetaId()
    {
        return $this->numcarpetaId;
    }

    /**
     * Set strnombre
     *
     * @param string $strnombre
     * @return Reportescarpetas
     */
    public function setStrnombre($strnombre)
    {
        $this->strnombre = $strnombre;

        return $this;
    }

    /**
     * Get strnombre
     *
     * @return string 
     */
    public function getStrnombre()
    {
        return $this->strnombre;
    }

    /**
     * Set numjerarquiaId
     *
     * @param integer $numjerarquiaId
     * @return Reportescarpetas
     */
    public function setNumjerarquiaId($numjerarquiaId)
    {
        $this->numjerarquiaId = $numjerarquiaId;

        return $this;
    }

    /**
     * Get numjerarquiaId
     *
     * @return integer 
     */
    public function getNumjerarquiaId()
    {
        return $this->numjerarquiaId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Reportescarpetas
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
     * @return Reportescarpetas
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
     * @return Reportescarpetas
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
     * @return Reportescarpetas
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
     * @return Reportescarpetas
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
