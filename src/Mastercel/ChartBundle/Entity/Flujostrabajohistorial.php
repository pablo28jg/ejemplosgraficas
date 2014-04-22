<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flujostrabajohistorial
 *
 * @ORM\Table(name="FlujosTrabajoHistorial")
 * @ORM\Entity
 */
class Flujostrabajohistorial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarea_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtareaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEvento", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dteevento;

    /**
     * @var string
     *
     * @ORM\Column(name="StrOperacion", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stroperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrUsuario_ky", type="string", length=50, nullable=true)
     */
    private $strusuarioKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrInformacionAnterior", type="string", length=100, nullable=true)
     */
    private $strinformacionanterior;

    /**
     * @var string
     *
     * @ORM\Column(name="StrInformacionActual", type="string", length=100, nullable=true)
     */
    private $strinformacionactual;



    /**
     * Set numtareaId
     *
     * @param integer $numtareaId
     * @return Flujostrabajohistorial
     */
    public function setNumtareaId($numtareaId)
    {
        $this->numtareaId = $numtareaId;

        return $this;
    }

    /**
     * Get numtareaId
     *
     * @return integer 
     */
    public function getNumtareaId()
    {
        return $this->numtareaId;
    }

    /**
     * Set dteevento
     *
     * @param \DateTime $dteevento
     * @return Flujostrabajohistorial
     */
    public function setDteevento($dteevento)
    {
        $this->dteevento = $dteevento;

        return $this;
    }

    /**
     * Get dteevento
     *
     * @return \DateTime 
     */
    public function getDteevento()
    {
        return $this->dteevento;
    }

    /**
     * Set stroperacion
     *
     * @param string $stroperacion
     * @return Flujostrabajohistorial
     */
    public function setStroperacion($stroperacion)
    {
        $this->stroperacion = $stroperacion;

        return $this;
    }

    /**
     * Get stroperacion
     *
     * @return string 
     */
    public function getStroperacion()
    {
        return $this->stroperacion;
    }

    /**
     * Set strusuarioKy
     *
     * @param string $strusuarioKy
     * @return Flujostrabajohistorial
     */
    public function setStrusuarioKy($strusuarioKy)
    {
        $this->strusuarioKy = $strusuarioKy;

        return $this;
    }

    /**
     * Get strusuarioKy
     *
     * @return string 
     */
    public function getStrusuarioKy()
    {
        return $this->strusuarioKy;
    }

    /**
     * Set strinformacionanterior
     *
     * @param string $strinformacionanterior
     * @return Flujostrabajohistorial
     */
    public function setStrinformacionanterior($strinformacionanterior)
    {
        $this->strinformacionanterior = $strinformacionanterior;

        return $this;
    }

    /**
     * Get strinformacionanterior
     *
     * @return string 
     */
    public function getStrinformacionanterior()
    {
        return $this->strinformacionanterior;
    }

    /**
     * Set strinformacionactual
     *
     * @param string $strinformacionactual
     * @return Flujostrabajohistorial
     */
    public function setStrinformacionactual($strinformacionactual)
    {
        $this->strinformacionactual = $strinformacionactual;

        return $this;
    }

    /**
     * Get strinformacionactual
     *
     * @return string 
     */
    public function getStrinformacionactual()
    {
        return $this->strinformacionactual;
    }
}
