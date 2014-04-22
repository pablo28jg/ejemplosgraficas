<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temporadas
 *
 * @ORM\Table(name="Temporadas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrTemporada_ky"})}, indexes={@ORM\Index(name="Indice_10", columns={"NumNivel_4_id"}), @ORM\Index(name="Indice_11", columns={"NumNivel_5_id"}), @ORM\Index(name="Indice_12", columns={"NumNivel_6_id"}), @ORM\Index(name="Indice_13", columns={"NumNivel_7_id"}), @ORM\Index(name="Indice_14", columns={"NumNivel_8_id"}), @ORM\Index(name="Indice_15", columns={"NumNivel_9_id"}), @ORM\Index(name="Indice_16", columns={"NumNivel_10_id"}), @ORM\Index(name="Indice_17", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumModa"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumJerarquia_id", "StrTemporada_ky"}), @ORM\Index(name="Indice_6", columns={"NumOrden_id", "NumNivel_id"}), @ORM\Index(name="Indice_7", columns={"NumNivel_1_id"}), @ORM\Index(name="Indice_8", columns={"NumNivel_2_id"}), @ORM\Index(name="Indice_9", columns={"NumNivel_3_id"})})
 * @ORM\Entity
 */
class Temporadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTemporada_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numtemporadaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumJerarquia_id", type="integer", nullable=true)
     */
    private $numjerarquiaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden_id", type="integer", nullable=true)
     */
    private $numordenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_id", type="integer", nullable=true)
     */
    private $numnivelId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogUltimoNivel", type="boolean", nullable=true)
     */
    private $logultimonivel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTemporada_ky", type="string", length=10, nullable=true)
     */
    private $strtemporadaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

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
     * @var integer
     *
     * @ORM\Column(name="NumModa", type="integer", nullable=true)
     */
    private $nummoda = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_1_id", type="integer", nullable=true)
     */
    private $numnivel1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_2_id", type="integer", nullable=true)
     */
    private $numnivel2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_3_id", type="integer", nullable=true)
     */
    private $numnivel3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_4_id", type="integer", nullable=true)
     */
    private $numnivel4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_5_id", type="integer", nullable=true)
     */
    private $numnivel5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_6_id", type="integer", nullable=true)
     */
    private $numnivel6Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_7_id", type="integer", nullable=true)
     */
    private $numnivel7Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_8_id", type="integer", nullable=true)
     */
    private $numnivel8Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_9_id", type="integer", nullable=true)
     */
    private $numnivel9Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_10_id", type="integer", nullable=true)
     */
    private $numnivel10Id = '0';

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
     * Get numtemporadaId
     *
     * @return integer 
     */
    public function getNumtemporadaId()
    {
        return $this->numtemporadaId;
    }

    /**
     * Set numjerarquiaId
     *
     * @param integer $numjerarquiaId
     * @return Temporadas
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
     * Set numordenId
     *
     * @param integer $numordenId
     * @return Temporadas
     */
    public function setNumordenId($numordenId)
    {
        $this->numordenId = $numordenId;

        return $this;
    }

    /**
     * Get numordenId
     *
     * @return integer 
     */
    public function getNumordenId()
    {
        return $this->numordenId;
    }

    /**
     * Set numnivelId
     *
     * @param integer $numnivelId
     * @return Temporadas
     */
    public function setNumnivelId($numnivelId)
    {
        $this->numnivelId = $numnivelId;

        return $this;
    }

    /**
     * Get numnivelId
     *
     * @return integer 
     */
    public function getNumnivelId()
    {
        return $this->numnivelId;
    }

    /**
     * Set logultimonivel
     *
     * @param boolean $logultimonivel
     * @return Temporadas
     */
    public function setLogultimonivel($logultimonivel)
    {
        $this->logultimonivel = $logultimonivel;

        return $this;
    }

    /**
     * Get logultimonivel
     *
     * @return boolean 
     */
    public function getLogultimonivel()
    {
        return $this->logultimonivel;
    }

    /**
     * Set strtemporadaKy
     *
     * @param string $strtemporadaKy
     * @return Temporadas
     */
    public function setStrtemporadaKy($strtemporadaKy)
    {
        $this->strtemporadaKy = $strtemporadaKy;

        return $this;
    }

    /**
     * Get strtemporadaKy
     *
     * @return string 
     */
    public function getStrtemporadaKy()
    {
        return $this->strtemporadaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Temporadas
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
     * Set dteinicio
     *
     * @param \DateTime $dteinicio
     * @return Temporadas
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
     * @return Temporadas
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
     * Set nummoda
     *
     * @param integer $nummoda
     * @return Temporadas
     */
    public function setNummoda($nummoda)
    {
        $this->nummoda = $nummoda;

        return $this;
    }

    /**
     * Get nummoda
     *
     * @return integer 
     */
    public function getNummoda()
    {
        return $this->nummoda;
    }

    /**
     * Set numnivel1Id
     *
     * @param integer $numnivel1Id
     * @return Temporadas
     */
    public function setNumnivel1Id($numnivel1Id)
    {
        $this->numnivel1Id = $numnivel1Id;

        return $this;
    }

    /**
     * Get numnivel1Id
     *
     * @return integer 
     */
    public function getNumnivel1Id()
    {
        return $this->numnivel1Id;
    }

    /**
     * Set numnivel2Id
     *
     * @param integer $numnivel2Id
     * @return Temporadas
     */
    public function setNumnivel2Id($numnivel2Id)
    {
        $this->numnivel2Id = $numnivel2Id;

        return $this;
    }

    /**
     * Get numnivel2Id
     *
     * @return integer 
     */
    public function getNumnivel2Id()
    {
        return $this->numnivel2Id;
    }

    /**
     * Set numnivel3Id
     *
     * @param integer $numnivel3Id
     * @return Temporadas
     */
    public function setNumnivel3Id($numnivel3Id)
    {
        $this->numnivel3Id = $numnivel3Id;

        return $this;
    }

    /**
     * Get numnivel3Id
     *
     * @return integer 
     */
    public function getNumnivel3Id()
    {
        return $this->numnivel3Id;
    }

    /**
     * Set numnivel4Id
     *
     * @param integer $numnivel4Id
     * @return Temporadas
     */
    public function setNumnivel4Id($numnivel4Id)
    {
        $this->numnivel4Id = $numnivel4Id;

        return $this;
    }

    /**
     * Get numnivel4Id
     *
     * @return integer 
     */
    public function getNumnivel4Id()
    {
        return $this->numnivel4Id;
    }

    /**
     * Set numnivel5Id
     *
     * @param integer $numnivel5Id
     * @return Temporadas
     */
    public function setNumnivel5Id($numnivel5Id)
    {
        $this->numnivel5Id = $numnivel5Id;

        return $this;
    }

    /**
     * Get numnivel5Id
     *
     * @return integer 
     */
    public function getNumnivel5Id()
    {
        return $this->numnivel5Id;
    }

    /**
     * Set numnivel6Id
     *
     * @param integer $numnivel6Id
     * @return Temporadas
     */
    public function setNumnivel6Id($numnivel6Id)
    {
        $this->numnivel6Id = $numnivel6Id;

        return $this;
    }

    /**
     * Get numnivel6Id
     *
     * @return integer 
     */
    public function getNumnivel6Id()
    {
        return $this->numnivel6Id;
    }

    /**
     * Set numnivel7Id
     *
     * @param integer $numnivel7Id
     * @return Temporadas
     */
    public function setNumnivel7Id($numnivel7Id)
    {
        $this->numnivel7Id = $numnivel7Id;

        return $this;
    }

    /**
     * Get numnivel7Id
     *
     * @return integer 
     */
    public function getNumnivel7Id()
    {
        return $this->numnivel7Id;
    }

    /**
     * Set numnivel8Id
     *
     * @param integer $numnivel8Id
     * @return Temporadas
     */
    public function setNumnivel8Id($numnivel8Id)
    {
        $this->numnivel8Id = $numnivel8Id;

        return $this;
    }

    /**
     * Get numnivel8Id
     *
     * @return integer 
     */
    public function getNumnivel8Id()
    {
        return $this->numnivel8Id;
    }

    /**
     * Set numnivel9Id
     *
     * @param integer $numnivel9Id
     * @return Temporadas
     */
    public function setNumnivel9Id($numnivel9Id)
    {
        $this->numnivel9Id = $numnivel9Id;

        return $this;
    }

    /**
     * Get numnivel9Id
     *
     * @return integer 
     */
    public function getNumnivel9Id()
    {
        return $this->numnivel9Id;
    }

    /**
     * Set numnivel10Id
     *
     * @param integer $numnivel10Id
     * @return Temporadas
     */
    public function setNumnivel10Id($numnivel10Id)
    {
        $this->numnivel10Id = $numnivel10Id;

        return $this;
    }

    /**
     * Get numnivel10Id
     *
     * @return integer 
     */
    public function getNumnivel10Id()
    {
        return $this->numnivel10Id;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Temporadas
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
     * @return Temporadas
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
     * @return Temporadas
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
     * @return Temporadas
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
     * @return Temporadas
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
