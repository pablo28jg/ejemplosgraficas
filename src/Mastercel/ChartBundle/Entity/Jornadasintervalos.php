<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jornadasintervalos
 *
 * @ORM\Table(name="JornadasIntervalos")
 * @ORM\Entity
 */
class Jornadasintervalos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumJornada_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numjornadaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIntervalo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numintervaloId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeInicioIntervalo", type="datetime", nullable=true)
     */
    private $tmeiniciointervalo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTerminoIntervalo", type="datetime", nullable=true)
     */
    private $tmeterminointervalo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeDuracionIntervalo", type="datetime", nullable=true)
     */
    private $tmeduracionintervalo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeToleranciaIntervalo", type="datetime", nullable=true)
     */
    private $tmetoleranciaintervalo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoIntervalo", type="integer", nullable=true)
     */
    private $numtipointervalo = '0';



    /**
     * Set numjornadaId
     *
     * @param integer $numjornadaId
     * @return Jornadasintervalos
     */
    public function setNumjornadaId($numjornadaId)
    {
        $this->numjornadaId = $numjornadaId;

        return $this;
    }

    /**
     * Get numjornadaId
     *
     * @return integer 
     */
    public function getNumjornadaId()
    {
        return $this->numjornadaId;
    }

    /**
     * Set numintervaloId
     *
     * @param integer $numintervaloId
     * @return Jornadasintervalos
     */
    public function setNumintervaloId($numintervaloId)
    {
        $this->numintervaloId = $numintervaloId;

        return $this;
    }

    /**
     * Get numintervaloId
     *
     * @return integer 
     */
    public function getNumintervaloId()
    {
        return $this->numintervaloId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Jornadasintervalos
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
     * Set tmeiniciointervalo
     *
     * @param \DateTime $tmeiniciointervalo
     * @return Jornadasintervalos
     */
    public function setTmeiniciointervalo($tmeiniciointervalo)
    {
        $this->tmeiniciointervalo = $tmeiniciointervalo;

        return $this;
    }

    /**
     * Get tmeiniciointervalo
     *
     * @return \DateTime 
     */
    public function getTmeiniciointervalo()
    {
        return $this->tmeiniciointervalo;
    }

    /**
     * Set tmeterminointervalo
     *
     * @param \DateTime $tmeterminointervalo
     * @return Jornadasintervalos
     */
    public function setTmeterminointervalo($tmeterminointervalo)
    {
        $this->tmeterminointervalo = $tmeterminointervalo;

        return $this;
    }

    /**
     * Get tmeterminointervalo
     *
     * @return \DateTime 
     */
    public function getTmeterminointervalo()
    {
        return $this->tmeterminointervalo;
    }

    /**
     * Set tmeduracionintervalo
     *
     * @param \DateTime $tmeduracionintervalo
     * @return Jornadasintervalos
     */
    public function setTmeduracionintervalo($tmeduracionintervalo)
    {
        $this->tmeduracionintervalo = $tmeduracionintervalo;

        return $this;
    }

    /**
     * Get tmeduracionintervalo
     *
     * @return \DateTime 
     */
    public function getTmeduracionintervalo()
    {
        return $this->tmeduracionintervalo;
    }

    /**
     * Set tmetoleranciaintervalo
     *
     * @param \DateTime $tmetoleranciaintervalo
     * @return Jornadasintervalos
     */
    public function setTmetoleranciaintervalo($tmetoleranciaintervalo)
    {
        $this->tmetoleranciaintervalo = $tmetoleranciaintervalo;

        return $this;
    }

    /**
     * Get tmetoleranciaintervalo
     *
     * @return \DateTime 
     */
    public function getTmetoleranciaintervalo()
    {
        return $this->tmetoleranciaintervalo;
    }

    /**
     * Set numtipointervalo
     *
     * @param integer $numtipointervalo
     * @return Jornadasintervalos
     */
    public function setNumtipointervalo($numtipointervalo)
    {
        $this->numtipointervalo = $numtipointervalo;

        return $this;
    }

    /**
     * Get numtipointervalo
     *
     * @return integer 
     */
    public function getNumtipointervalo()
    {
        return $this->numtipointervalo;
    }
}
