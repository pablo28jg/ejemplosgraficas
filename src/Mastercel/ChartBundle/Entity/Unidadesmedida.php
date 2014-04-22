<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unidadesmedida
 *
 * @ORM\Table(name="UnidadesMedida", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_2", columns={"StrUnidadMedida_ky"})}, indexes={@ORM\Index(name="Indice_1", columns={"NumUnidadMedidaBase_id", "NumUnidadMedida_id"}), @ORM\Index(name="Indice_3", columns={"StrDescripcion"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Unidadesmedida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedida_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numunidadmedidaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedidaBase_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numunidadmedidabaseId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrUnidadMedida_ky", type="string", length=10, nullable=true)
     */
    private $strunidadmedidaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSimbolo", type="string", length=15, nullable=true)
     */
    private $strsimbolo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDecimales", type="integer", nullable=true)
     */
    private $numdecimales = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidades", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidades = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorConversion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactorconversion = '0';

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
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Unidadesmedida
     */
    public function setNumunidadmedidaId($numunidadmedidaId)
    {
        $this->numunidadmedidaId = $numunidadmedidaId;

        return $this;
    }

    /**
     * Get numunidadmedidaId
     *
     * @return integer 
     */
    public function getNumunidadmedidaId()
    {
        return $this->numunidadmedidaId;
    }

    /**
     * Set numunidadmedidabaseId
     *
     * @param integer $numunidadmedidabaseId
     * @return Unidadesmedida
     */
    public function setNumunidadmedidabaseId($numunidadmedidabaseId)
    {
        $this->numunidadmedidabaseId = $numunidadmedidabaseId;

        return $this;
    }

    /**
     * Get numunidadmedidabaseId
     *
     * @return integer 
     */
    public function getNumunidadmedidabaseId()
    {
        return $this->numunidadmedidabaseId;
    }

    /**
     * Set strunidadmedidaKy
     *
     * @param string $strunidadmedidaKy
     * @return Unidadesmedida
     */
    public function setStrunidadmedidaKy($strunidadmedidaKy)
    {
        $this->strunidadmedidaKy = $strunidadmedidaKy;

        return $this;
    }

    /**
     * Get strunidadmedidaKy
     *
     * @return string 
     */
    public function getStrunidadmedidaKy()
    {
        return $this->strunidadmedidaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Unidadesmedida
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
     * Set strsimbolo
     *
     * @param string $strsimbolo
     * @return Unidadesmedida
     */
    public function setStrsimbolo($strsimbolo)
    {
        $this->strsimbolo = $strsimbolo;

        return $this;
    }

    /**
     * Get strsimbolo
     *
     * @return string 
     */
    public function getStrsimbolo()
    {
        return $this->strsimbolo;
    }

    /**
     * Set numdecimales
     *
     * @param integer $numdecimales
     * @return Unidadesmedida
     */
    public function setNumdecimales($numdecimales)
    {
        $this->numdecimales = $numdecimales;

        return $this;
    }

    /**
     * Get numdecimales
     *
     * @return integer 
     */
    public function getNumdecimales()
    {
        return $this->numdecimales;
    }

    /**
     * Set numunidades
     *
     * @param float $numunidades
     * @return Unidadesmedida
     */
    public function setNumunidades($numunidades)
    {
        $this->numunidades = $numunidades;

        return $this;
    }

    /**
     * Get numunidades
     *
     * @return float 
     */
    public function getNumunidades()
    {
        return $this->numunidades;
    }

    /**
     * Set numfactorconversion
     *
     * @param float $numfactorconversion
     * @return Unidadesmedida
     */
    public function setNumfactorconversion($numfactorconversion)
    {
        $this->numfactorconversion = $numfactorconversion;

        return $this;
    }

    /**
     * Get numfactorconversion
     *
     * @return float 
     */
    public function getNumfactorconversion()
    {
        return $this->numfactorconversion;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Unidadesmedida
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
     * @return Unidadesmedida
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
     * @return Unidadesmedida
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
     * @return Unidadesmedida
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
     * @return Unidadesmedida
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
