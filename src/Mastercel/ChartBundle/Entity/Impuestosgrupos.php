<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Impuestosgrupos
 *
 * @ORM\Table(name="ImpuestosGrupos", indexes={@ORM\Index(name="Indice_1", columns={"StrGrupoImpuesto_ky"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Impuestosgrupos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoImpuesto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numgrupoimpuestoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrGrupoImpuesto_ky", type="string", length=10, nullable=true)
     */
    private $strgrupoimpuestoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogImpuestoIncluido", type="boolean", nullable=true)
     */
    private $logimpuestoincluido = '0';

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
     * Get numgrupoimpuestoId
     *
     * @return integer 
     */
    public function getNumgrupoimpuestoId()
    {
        return $this->numgrupoimpuestoId;
    }

    /**
     * Set strgrupoimpuestoKy
     *
     * @param string $strgrupoimpuestoKy
     * @return Impuestosgrupos
     */
    public function setStrgrupoimpuestoKy($strgrupoimpuestoKy)
    {
        $this->strgrupoimpuestoKy = $strgrupoimpuestoKy;

        return $this;
    }

    /**
     * Get strgrupoimpuestoKy
     *
     * @return string 
     */
    public function getStrgrupoimpuestoKy()
    {
        return $this->strgrupoimpuestoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Impuestosgrupos
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
     * Set logimpuestoincluido
     *
     * @param boolean $logimpuestoincluido
     * @return Impuestosgrupos
     */
    public function setLogimpuestoincluido($logimpuestoincluido)
    {
        $this->logimpuestoincluido = $logimpuestoincluido;

        return $this;
    }

    /**
     * Get logimpuestoincluido
     *
     * @return boolean 
     */
    public function getLogimpuestoincluido()
    {
        return $this->logimpuestoincluido;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Impuestosgrupos
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
     * @return Impuestosgrupos
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
     * @return Impuestosgrupos
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
     * @return Impuestosgrupos
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
     * @return Impuestosgrupos
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
