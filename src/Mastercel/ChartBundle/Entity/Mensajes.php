<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensajes
 *
 * @ORM\Table(name="Mensajes", indexes={@ORM\Index(name="Indice_1", columns={"DteActivacion"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Mensajes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMensaje_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummensajeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAsunto", type="string", length=100, nullable=true)
     */
    private $strasunto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteActivacion", type="datetime", nullable=true)
     */
    private $dteactivacion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemMensaje", type="text", length=16, nullable=true)
     */
    private $memmensaje;

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
     * Get nummensajeId
     *
     * @return integer 
     */
    public function getNummensajeId()
    {
        return $this->nummensajeId;
    }

    /**
     * Set strasunto
     *
     * @param string $strasunto
     * @return Mensajes
     */
    public function setStrasunto($strasunto)
    {
        $this->strasunto = $strasunto;

        return $this;
    }

    /**
     * Get strasunto
     *
     * @return string 
     */
    public function getStrasunto()
    {
        return $this->strasunto;
    }

    /**
     * Set dteactivacion
     *
     * @param \DateTime $dteactivacion
     * @return Mensajes
     */
    public function setDteactivacion($dteactivacion)
    {
        $this->dteactivacion = $dteactivacion;

        return $this;
    }

    /**
     * Get dteactivacion
     *
     * @return \DateTime 
     */
    public function getDteactivacion()
    {
        return $this->dteactivacion;
    }

    /**
     * Set memmensaje
     *
     * @param string $memmensaje
     * @return Mensajes
     */
    public function setMemmensaje($memmensaje)
    {
        $this->memmensaje = $memmensaje;

        return $this;
    }

    /**
     * Get memmensaje
     *
     * @return string 
     */
    public function getMemmensaje()
    {
        return $this->memmensaje;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Mensajes
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
     * @return Mensajes
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
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Mensajes
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
     * @return Mensajes
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
