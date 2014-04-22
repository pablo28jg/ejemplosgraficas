<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hojascalculo
 *
 * @ORM\Table(name="HojasCalculo", indexes={@ORM\Index(name="Indice_1", columns={"NumCarpeta_id", "StrNombre"}), @ORM\Index(name="Indice_2", columns={"StrNombre", "NumCarpeta_id"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"})})
 * @ORM\Entity
 */
class Hojascalculo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumHojaCalculo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numhojacalculoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCarpeta_id", type="integer", nullable=true)
     */
    private $numcarpetaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=100, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="MemDescripcion", type="text", length=16, nullable=true)
     */
    private $memdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTamano", type="integer", nullable=true)
     */
    private $numtamano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ObjHojaCalculo", type="text", length=16, nullable=true)
     */
    private $objhojacalculo;

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
     * Get numhojacalculoId
     *
     * @return integer 
     */
    public function getNumhojacalculoId()
    {
        return $this->numhojacalculoId;
    }

    /**
     * Set numcarpetaId
     *
     * @param integer $numcarpetaId
     * @return Hojascalculo
     */
    public function setNumcarpetaId($numcarpetaId)
    {
        $this->numcarpetaId = $numcarpetaId;

        return $this;
    }

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
     * @return Hojascalculo
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
     * Set memdescripcion
     *
     * @param string $memdescripcion
     * @return Hojascalculo
     */
    public function setMemdescripcion($memdescripcion)
    {
        $this->memdescripcion = $memdescripcion;

        return $this;
    }

    /**
     * Get memdescripcion
     *
     * @return string 
     */
    public function getMemdescripcion()
    {
        return $this->memdescripcion;
    }

    /**
     * Set numtamano
     *
     * @param integer $numtamano
     * @return Hojascalculo
     */
    public function setNumtamano($numtamano)
    {
        $this->numtamano = $numtamano;

        return $this;
    }

    /**
     * Get numtamano
     *
     * @return integer 
     */
    public function getNumtamano()
    {
        return $this->numtamano;
    }

    /**
     * Set objhojacalculo
     *
     * @param string $objhojacalculo
     * @return Hojascalculo
     */
    public function setObjhojacalculo($objhojacalculo)
    {
        $this->objhojacalculo = $objhojacalculo;

        return $this;
    }

    /**
     * Get objhojacalculo
     *
     * @return string 
     */
    public function getObjhojacalculo()
    {
        return $this->objhojacalculo;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Hojascalculo
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
     * @return Hojascalculo
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
     * @return Hojascalculo
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
     * @return Hojascalculo
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
     * @return Hojascalculo
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
