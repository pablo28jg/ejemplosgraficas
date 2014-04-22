<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conteosciclicos
 *
 * @ORM\Table(name="ConteosCiclicos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrConteoCiclico_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Conteosciclicos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConteoCiclico_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconteociclicoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrConteoCiclico_ky", type="string", length=10, nullable=true)
     */
    private $strconteociclicoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadTolerancia", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadtolerancia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteTolerancia", type="integer", nullable=true)
     */
    private $numimportetolerancia = '0';

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
     * Get numconteociclicoId
     *
     * @return integer 
     */
    public function getNumconteociclicoId()
    {
        return $this->numconteociclicoId;
    }

    /**
     * Set strconteociclicoKy
     *
     * @param string $strconteociclicoKy
     * @return Conteosciclicos
     */
    public function setStrconteociclicoKy($strconteociclicoKy)
    {
        $this->strconteociclicoKy = $strconteociclicoKy;

        return $this;
    }

    /**
     * Get strconteociclicoKy
     *
     * @return string 
     */
    public function getStrconteociclicoKy()
    {
        return $this->strconteociclicoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Conteosciclicos
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
     * Set numcantidadtolerancia
     *
     * @param float $numcantidadtolerancia
     * @return Conteosciclicos
     */
    public function setNumcantidadtolerancia($numcantidadtolerancia)
    {
        $this->numcantidadtolerancia = $numcantidadtolerancia;

        return $this;
    }

    /**
     * Get numcantidadtolerancia
     *
     * @return float 
     */
    public function getNumcantidadtolerancia()
    {
        return $this->numcantidadtolerancia;
    }

    /**
     * Set numimportetolerancia
     *
     * @param integer $numimportetolerancia
     * @return Conteosciclicos
     */
    public function setNumimportetolerancia($numimportetolerancia)
    {
        $this->numimportetolerancia = $numimportetolerancia;

        return $this;
    }

    /**
     * Get numimportetolerancia
     *
     * @return integer 
     */
    public function getNumimportetolerancia()
    {
        return $this->numimportetolerancia;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Conteosciclicos
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
     * @return Conteosciclicos
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
     * @return Conteosciclicos
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
     * @return Conteosciclicos
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
     * @return Conteosciclicos
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
