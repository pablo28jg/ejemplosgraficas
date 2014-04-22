<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correosarchivosadjuntos
 *
 * @ORM\Table(name="CorreosArchivosAdjuntos")
 * @ORM\Entity
 */
class Correosarchivosadjuntos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMensajeCorreo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nummensajecorreoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumArchivoAdjunto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numarchivoadjuntoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreArchivo", type="string", length=260, nullable=true)
     */
    private $strnombrearchivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTamanoArchivo", type="integer", nullable=true)
     */
    private $numtamanoarchivo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ImgArchivoAdjunto", type="text", length=16, nullable=true)
     */
    private $imgarchivoadjunto;

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
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Set nummensajecorreoId
     *
     * @param integer $nummensajecorreoId
     * @return Correosarchivosadjuntos
     */
    public function setNummensajecorreoId($nummensajecorreoId)
    {
        $this->nummensajecorreoId = $nummensajecorreoId;

        return $this;
    }

    /**
     * Get nummensajecorreoId
     *
     * @return integer 
     */
    public function getNummensajecorreoId()
    {
        return $this->nummensajecorreoId;
    }

    /**
     * Set numarchivoadjuntoId
     *
     * @param integer $numarchivoadjuntoId
     * @return Correosarchivosadjuntos
     */
    public function setNumarchivoadjuntoId($numarchivoadjuntoId)
    {
        $this->numarchivoadjuntoId = $numarchivoadjuntoId;

        return $this;
    }

    /**
     * Get numarchivoadjuntoId
     *
     * @return integer 
     */
    public function getNumarchivoadjuntoId()
    {
        return $this->numarchivoadjuntoId;
    }

    /**
     * Set strnombrearchivo
     *
     * @param string $strnombrearchivo
     * @return Correosarchivosadjuntos
     */
    public function setStrnombrearchivo($strnombrearchivo)
    {
        $this->strnombrearchivo = $strnombrearchivo;

        return $this;
    }

    /**
     * Get strnombrearchivo
     *
     * @return string 
     */
    public function getStrnombrearchivo()
    {
        return $this->strnombrearchivo;
    }

    /**
     * Set numtamanoarchivo
     *
     * @param integer $numtamanoarchivo
     * @return Correosarchivosadjuntos
     */
    public function setNumtamanoarchivo($numtamanoarchivo)
    {
        $this->numtamanoarchivo = $numtamanoarchivo;

        return $this;
    }

    /**
     * Get numtamanoarchivo
     *
     * @return integer 
     */
    public function getNumtamanoarchivo()
    {
        return $this->numtamanoarchivo;
    }

    /**
     * Set imgarchivoadjunto
     *
     * @param string $imgarchivoadjunto
     * @return Correosarchivosadjuntos
     */
    public function setImgarchivoadjunto($imgarchivoadjunto)
    {
        $this->imgarchivoadjunto = $imgarchivoadjunto;

        return $this;
    }

    /**
     * Get imgarchivoadjunto
     *
     * @return string 
     */
    public function getImgarchivoadjunto()
    {
        return $this->imgarchivoadjunto;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Correosarchivosadjuntos
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
     * @return Correosarchivosadjuntos
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
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Correosarchivosadjuntos
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
