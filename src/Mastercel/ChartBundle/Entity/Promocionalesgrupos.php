<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promocionalesgrupos
 *
 * @ORM\Table(name="PromocionalesGrupos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrPromocionalGrupo_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Promocionalesgrupos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPromocionalGrupo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numpromocionalgrupoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrPromocionalGrupo_ky", type="string", length=10, nullable=true)
     */
    private $strpromocionalgrupoKy;

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
     * Get numpromocionalgrupoId
     *
     * @return integer 
     */
    public function getNumpromocionalgrupoId()
    {
        return $this->numpromocionalgrupoId;
    }

    /**
     * Set strpromocionalgrupoKy
     *
     * @param string $strpromocionalgrupoKy
     * @return Promocionalesgrupos
     */
    public function setStrpromocionalgrupoKy($strpromocionalgrupoKy)
    {
        $this->strpromocionalgrupoKy = $strpromocionalgrupoKy;

        return $this;
    }

    /**
     * Get strpromocionalgrupoKy
     *
     * @return string 
     */
    public function getStrpromocionalgrupoKy()
    {
        return $this->strpromocionalgrupoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Promocionalesgrupos
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
     * @return Promocionalesgrupos
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
     * @return Promocionalesgrupos
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
     * @return Promocionalesgrupos
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
     * @return Promocionalesgrupos
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
     * @return Promocionalesgrupos
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
