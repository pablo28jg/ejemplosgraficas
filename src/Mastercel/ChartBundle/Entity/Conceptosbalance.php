<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conceptosbalance
 *
 * @ORM\Table(name="ConceptosBalance", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrBalance_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Conceptosbalance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumBalance_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numbalanceId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrBalance_ky", type="string", length=10, nullable=true)
     */
    private $strbalanceKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConciliacion_id", type="integer", nullable=true)
     */
    private $numconciliacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFormaPago_id", type="integer", nullable=true)
     */
    private $numformapagoId = '0';

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
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get numbalanceId
     *
     * @return integer 
     */
    public function getNumbalanceId()
    {
        return $this->numbalanceId;
    }

    /**
     * Set strbalanceKy
     *
     * @param string $strbalanceKy
     * @return Conceptosbalance
     */
    public function setStrbalanceKy($strbalanceKy)
    {
        $this->strbalanceKy = $strbalanceKy;

        return $this;
    }

    /**
     * Get strbalanceKy
     *
     * @return string 
     */
    public function getStrbalanceKy()
    {
        return $this->strbalanceKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Conceptosbalance
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
     * Set numconciliacionId
     *
     * @param integer $numconciliacionId
     * @return Conceptosbalance
     */
    public function setNumconciliacionId($numconciliacionId)
    {
        $this->numconciliacionId = $numconciliacionId;

        return $this;
    }

    /**
     * Get numconciliacionId
     *
     * @return integer 
     */
    public function getNumconciliacionId()
    {
        return $this->numconciliacionId;
    }

    /**
     * Set numformapagoId
     *
     * @param integer $numformapagoId
     * @return Conceptosbalance
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Conceptosbalance
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
     * @return Conceptosbalance
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
     * @return Conceptosbalance
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
     * @return Conceptosbalance
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
     * @return Conceptosbalance
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
     * @return Conceptosbalance
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
