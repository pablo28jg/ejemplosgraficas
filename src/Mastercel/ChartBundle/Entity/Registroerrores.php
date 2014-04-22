<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registroerrores
 *
 * @ORM\Table(name="RegistroErrores")
 * @ORM\Entity
 */
class Registroerrores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteProceso", type="datetime", nullable=true)
     */
    private $dteproceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoModulo", type="integer", nullable=true)
     */
    private $numtipomodulo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoMensaje", type="integer", nullable=true)
     */
    private $numtipomensaje = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoProceso", type="integer", nullable=true)
     */
    private $numtipoproceso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrMensaje", type="string", length=100, nullable=true)
     */
    private $strmensaje;

    /**
     * @var string
     *
     * @ORM\Column(name="StrExcepcion", type="string", length=100, nullable=true)
     */
    private $strexcepcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCreadoPor_id", type="integer", nullable=true)
     */
    private $numcreadoporId = '0';



    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Registroerrores
     */
    public function setNumconsecutivoId($numconsecutivoId)
    {
        $this->numconsecutivoId = $numconsecutivoId;

        return $this;
    }

    /**
     * Get numconsecutivoId
     *
     * @return integer 
     */
    public function getNumconsecutivoId()
    {
        return $this->numconsecutivoId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Registroerrores
     */
    public function setNumalmacenId($numalmacenId)
    {
        $this->numalmacenId = $numalmacenId;

        return $this;
    }

    /**
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set dteproceso
     *
     * @param \DateTime $dteproceso
     * @return Registroerrores
     */
    public function setDteproceso($dteproceso)
    {
        $this->dteproceso = $dteproceso;

        return $this;
    }

    /**
     * Get dteproceso
     *
     * @return \DateTime 
     */
    public function getDteproceso()
    {
        return $this->dteproceso;
    }

    /**
     * Set numtipomodulo
     *
     * @param integer $numtipomodulo
     * @return Registroerrores
     */
    public function setNumtipomodulo($numtipomodulo)
    {
        $this->numtipomodulo = $numtipomodulo;

        return $this;
    }

    /**
     * Get numtipomodulo
     *
     * @return integer 
     */
    public function getNumtipomodulo()
    {
        return $this->numtipomodulo;
    }

    /**
     * Set numtipomensaje
     *
     * @param integer $numtipomensaje
     * @return Registroerrores
     */
    public function setNumtipomensaje($numtipomensaje)
    {
        $this->numtipomensaje = $numtipomensaje;

        return $this;
    }

    /**
     * Get numtipomensaje
     *
     * @return integer 
     */
    public function getNumtipomensaje()
    {
        return $this->numtipomensaje;
    }

    /**
     * Set numtipoproceso
     *
     * @param integer $numtipoproceso
     * @return Registroerrores
     */
    public function setNumtipoproceso($numtipoproceso)
    {
        $this->numtipoproceso = $numtipoproceso;

        return $this;
    }

    /**
     * Get numtipoproceso
     *
     * @return integer 
     */
    public function getNumtipoproceso()
    {
        return $this->numtipoproceso;
    }

    /**
     * Set strmensaje
     *
     * @param string $strmensaje
     * @return Registroerrores
     */
    public function setStrmensaje($strmensaje)
    {
        $this->strmensaje = $strmensaje;

        return $this;
    }

    /**
     * Get strmensaje
     *
     * @return string 
     */
    public function getStrmensaje()
    {
        return $this->strmensaje;
    }

    /**
     * Set strexcepcion
     *
     * @param string $strexcepcion
     * @return Registroerrores
     */
    public function setStrexcepcion($strexcepcion)
    {
        $this->strexcepcion = $strexcepcion;

        return $this;
    }

    /**
     * Get strexcepcion
     *
     * @return string 
     */
    public function getStrexcepcion()
    {
        return $this->strexcepcion;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Registroerrores
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
}
