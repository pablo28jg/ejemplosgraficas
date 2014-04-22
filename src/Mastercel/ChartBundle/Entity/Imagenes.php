<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagenes
 *
 * @ORM\Table(name="Imagenes", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"NumTipoOrigenImagen"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Imagenes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumImagen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numimagenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ImgImagen", type="text", length=16, nullable=true)
     */
    private $imgimagen;

    /**
     * @var string
     *
     * @ORM\Column(name="StrClaseGrafica", type="string", length=20, nullable=true)
     */
    private $strclasegrafica;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoImagen", type="integer", nullable=true)
     */
    private $numtipoimagen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLongitud", type="integer", nullable=true)
     */
    private $numlongitud = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoOrigenImagen", type="integer", nullable=true)
     */
    private $numtipoorigenimagen = '0';

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
     * Get numimagenId
     *
     * @return integer 
     */
    public function getNumimagenId()
    {
        return $this->numimagenId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Imagenes
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
     * Set imgimagen
     *
     * @param string $imgimagen
     * @return Imagenes
     */
    public function setImgimagen($imgimagen)
    {
        $this->imgimagen = $imgimagen;

        return $this;
    }

    /**
     * Get imgimagen
     *
     * @return string 
     */
    public function getImgimagen()
    {
        return $this->imgimagen;
    }

    /**
     * Set strclasegrafica
     *
     * @param string $strclasegrafica
     * @return Imagenes
     */
    public function setStrclasegrafica($strclasegrafica)
    {
        $this->strclasegrafica = $strclasegrafica;

        return $this;
    }

    /**
     * Get strclasegrafica
     *
     * @return string 
     */
    public function getStrclasegrafica()
    {
        return $this->strclasegrafica;
    }

    /**
     * Set numtipoimagen
     *
     * @param integer $numtipoimagen
     * @return Imagenes
     */
    public function setNumtipoimagen($numtipoimagen)
    {
        $this->numtipoimagen = $numtipoimagen;

        return $this;
    }

    /**
     * Get numtipoimagen
     *
     * @return integer 
     */
    public function getNumtipoimagen()
    {
        return $this->numtipoimagen;
    }

    /**
     * Set numlongitud
     *
     * @param integer $numlongitud
     * @return Imagenes
     */
    public function setNumlongitud($numlongitud)
    {
        $this->numlongitud = $numlongitud;

        return $this;
    }

    /**
     * Get numlongitud
     *
     * @return integer 
     */
    public function getNumlongitud()
    {
        return $this->numlongitud;
    }

    /**
     * Set numtipoorigenimagen
     *
     * @param integer $numtipoorigenimagen
     * @return Imagenes
     */
    public function setNumtipoorigenimagen($numtipoorigenimagen)
    {
        $this->numtipoorigenimagen = $numtipoorigenimagen;

        return $this;
    }

    /**
     * Get numtipoorigenimagen
     *
     * @return integer 
     */
    public function getNumtipoorigenimagen()
    {
        return $this->numtipoorigenimagen;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Imagenes
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
     * @return Imagenes
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
     * @return Imagenes
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
     * @return Imagenes
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
     * @return Imagenes
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
