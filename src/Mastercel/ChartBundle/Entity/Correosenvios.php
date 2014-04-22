<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correosenvios
 *
 * @ORM\Table(name="CorreosEnvios", indexes={@ORM\Index(name="Indice_1", columns={"NumMensajeCorreo_id"})})
 * @ORM\Entity
 */
class Correosenvios
{
    /**
     * @var guid
     *
     * @ORM\Column(name="NumEnvio_id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numenvioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMensajeCorreo_id", type="integer", nullable=true)
     */
    private $nummensajecorreoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalIntentos", type="integer", nullable=true)
     */
    private $numtotalintentos = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtePrimerIntento", type="datetime", nullable=true)
     */
    private $dteprimerintento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteUltimoIntento", type="datetime", nullable=true)
     */
    private $dteultimointento;

    /**
     * @var string
     *
     * @ORM\Column(name="MemMensajeError", type="text", length=16, nullable=true)
     */
    private $memmensajeerror;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCreadoPor_id", type="integer", nullable=true)
     */
    private $numcreadoporId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActualizadoPor_id", type="integer", nullable=true)
     */
    private $numactualizadoporId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get numenvioId
     *
     * @return guid 
     */
    public function getNumenvioId()
    {
        return $this->numenvioId;
    }

    /**
     * Set nummensajecorreoId
     *
     * @param integer $nummensajecorreoId
     * @return Correosenvios
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
     * Set numtotalintentos
     *
     * @param integer $numtotalintentos
     * @return Correosenvios
     */
    public function setNumtotalintentos($numtotalintentos)
    {
        $this->numtotalintentos = $numtotalintentos;

        return $this;
    }

    /**
     * Get numtotalintentos
     *
     * @return integer 
     */
    public function getNumtotalintentos()
    {
        return $this->numtotalintentos;
    }

    /**
     * Set dteprimerintento
     *
     * @param \DateTime $dteprimerintento
     * @return Correosenvios
     */
    public function setDteprimerintento($dteprimerintento)
    {
        $this->dteprimerintento = $dteprimerintento;

        return $this;
    }

    /**
     * Get dteprimerintento
     *
     * @return \DateTime 
     */
    public function getDteprimerintento()
    {
        return $this->dteprimerintento;
    }

    /**
     * Set dteultimointento
     *
     * @param \DateTime $dteultimointento
     * @return Correosenvios
     */
    public function setDteultimointento($dteultimointento)
    {
        $this->dteultimointento = $dteultimointento;

        return $this;
    }

    /**
     * Get dteultimointento
     *
     * @return \DateTime 
     */
    public function getDteultimointento()
    {
        return $this->dteultimointento;
    }

    /**
     * Set memmensajeerror
     *
     * @param string $memmensajeerror
     * @return Correosenvios
     */
    public function setMemmensajeerror($memmensajeerror)
    {
        $this->memmensajeerror = $memmensajeerror;

        return $this;
    }

    /**
     * Get memmensajeerror
     *
     * @return string 
     */
    public function getMemmensajeerror()
    {
        return $this->memmensajeerror;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Correosenvios
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
     * Set numactualizadoporId
     *
     * @param integer $numactualizadoporId
     * @return Correosenvios
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
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Correosenvios
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
