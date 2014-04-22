<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensajesdestinatarios
 *
 * @ORM\Table(name="MensajesDestinatarios", indexes={@ORM\Index(name="Indice_1", columns={"NumUsuario_id", "NumMensaje_id"}), @ORM\Index(name="Indice_2", columns={"DteLeido"})})
 * @ORM\Entity
 */
class Mensajesdestinatarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMensaje_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nummensajeId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUsuario_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numusuarioId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLeido", type="boolean", nullable=true)
     */
    private $logleido = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteLeido", type="datetime", nullable=true)
     */
    private $dteleido;



    /**
     * Set nummensajeId
     *
     * @param integer $nummensajeId
     * @return Mensajesdestinatarios
     */
    public function setNummensajeId($nummensajeId)
    {
        $this->nummensajeId = $nummensajeId;

        return $this;
    }

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
     * Set numusuarioId
     *
     * @param integer $numusuarioId
     * @return Mensajesdestinatarios
     */
    public function setNumusuarioId($numusuarioId)
    {
        $this->numusuarioId = $numusuarioId;

        return $this;
    }

    /**
     * Get numusuarioId
     *
     * @return integer 
     */
    public function getNumusuarioId()
    {
        return $this->numusuarioId;
    }

    /**
     * Set logleido
     *
     * @param boolean $logleido
     * @return Mensajesdestinatarios
     */
    public function setLogleido($logleido)
    {
        $this->logleido = $logleido;

        return $this;
    }

    /**
     * Get logleido
     *
     * @return boolean 
     */
    public function getLogleido()
    {
        return $this->logleido;
    }

    /**
     * Set dteleido
     *
     * @param \DateTime $dteleido
     * @return Mensajesdestinatarios
     */
    public function setDteleido($dteleido)
    {
        $this->dteleido = $dteleido;

        return $this;
    }

    /**
     * Get dteleido
     *
     * @return \DateTime 
     */
    public function getDteleido()
    {
        return $this->dteleido;
    }
}
