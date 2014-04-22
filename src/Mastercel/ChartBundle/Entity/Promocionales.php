<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promocionales
 *
 * @ORM\Table(name="Promocionales", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrPromocional_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumTipoBoletin"}), @ORM\Index(name="Indice_5", columns={"DteInicio", "TmeInicio", "DteTermino", "TmeTermino"}), @ORM\Index(name="Indice_6", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_7", columns={"NumCodigoPromocion_id", "NumTipoBoletin"})})
 * @ORM\Entity
 */
class Promocionales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPromocional_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numpromocionalId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrPromocional_ky", type="string", length=10, nullable=true)
     */
    private $strpromocionalKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoBoletin", type="integer", nullable=true)
     */
    private $numtipoboletin = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicio", type="datetime", nullable=true)
     */
    private $dteinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTermino", type="datetime", nullable=true)
     */
    private $dtetermino;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeInicio", type="datetime", nullable=true)
     */
    private $tmeinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTermino", type="datetime", nullable=true)
     */
    private $tmetermino;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoPromocion_id", type="integer", nullable=true)
     */
    private $numcodigopromocionId = '0';

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
     * Get numpromocionalId
     *
     * @return integer 
     */
    public function getNumpromocionalId()
    {
        return $this->numpromocionalId;
    }

    /**
     * Set strpromocionalKy
     *
     * @param string $strpromocionalKy
     * @return Promocionales
     */
    public function setStrpromocionalKy($strpromocionalKy)
    {
        $this->strpromocionalKy = $strpromocionalKy;

        return $this;
    }

    /**
     * Get strpromocionalKy
     *
     * @return string 
     */
    public function getStrpromocionalKy()
    {
        return $this->strpromocionalKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Promocionales
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
     * Set numtipoboletin
     *
     * @param integer $numtipoboletin
     * @return Promocionales
     */
    public function setNumtipoboletin($numtipoboletin)
    {
        $this->numtipoboletin = $numtipoboletin;

        return $this;
    }

    /**
     * Get numtipoboletin
     *
     * @return integer 
     */
    public function getNumtipoboletin()
    {
        return $this->numtipoboletin;
    }

    /**
     * Set dteinicio
     *
     * @param \DateTime $dteinicio
     * @return Promocionales
     */
    public function setDteinicio($dteinicio)
    {
        $this->dteinicio = $dteinicio;

        return $this;
    }

    /**
     * Get dteinicio
     *
     * @return \DateTime 
     */
    public function getDteinicio()
    {
        return $this->dteinicio;
    }

    /**
     * Set dtetermino
     *
     * @param \DateTime $dtetermino
     * @return Promocionales
     */
    public function setDtetermino($dtetermino)
    {
        $this->dtetermino = $dtetermino;

        return $this;
    }

    /**
     * Get dtetermino
     *
     * @return \DateTime 
     */
    public function getDtetermino()
    {
        return $this->dtetermino;
    }

    /**
     * Set tmeinicio
     *
     * @param \DateTime $tmeinicio
     * @return Promocionales
     */
    public function setTmeinicio($tmeinicio)
    {
        $this->tmeinicio = $tmeinicio;

        return $this;
    }

    /**
     * Get tmeinicio
     *
     * @return \DateTime 
     */
    public function getTmeinicio()
    {
        return $this->tmeinicio;
    }

    /**
     * Set tmetermino
     *
     * @param \DateTime $tmetermino
     * @return Promocionales
     */
    public function setTmetermino($tmetermino)
    {
        $this->tmetermino = $tmetermino;

        return $this;
    }

    /**
     * Get tmetermino
     *
     * @return \DateTime 
     */
    public function getTmetermino()
    {
        return $this->tmetermino;
    }

    /**
     * Set numcodigopromocionId
     *
     * @param integer $numcodigopromocionId
     * @return Promocionales
     */
    public function setNumcodigopromocionId($numcodigopromocionId)
    {
        $this->numcodigopromocionId = $numcodigopromocionId;

        return $this;
    }

    /**
     * Get numcodigopromocionId
     *
     * @return integer 
     */
    public function getNumcodigopromocionId()
    {
        return $this->numcodigopromocionId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Promocionales
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
     * @return Promocionales
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
     * @return Promocionales
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
     * @return Promocionales
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
     * @return Promocionales
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
