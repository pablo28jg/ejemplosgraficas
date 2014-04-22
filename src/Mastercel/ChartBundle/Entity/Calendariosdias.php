<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendariosdias
 *
 * @ORM\Table(name="CalendariosDias", indexes={@ORM\Index(name="Indice_1", columns={"DteDia", "NumCalendario_id"})})
 * @ORM\Entity
 */
class Calendariosdias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCalendario_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcalendarioId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteDia", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dtedia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDia", type="integer", nullable=true)
     */
    private $numtipodia = '0';



    /**
     * Set numcalendarioId
     *
     * @param integer $numcalendarioId
     * @return Calendariosdias
     */
    public function setNumcalendarioId($numcalendarioId)
    {
        $this->numcalendarioId = $numcalendarioId;

        return $this;
    }

    /**
     * Get numcalendarioId
     *
     * @return integer 
     */
    public function getNumcalendarioId()
    {
        return $this->numcalendarioId;
    }

    /**
     * Set dtedia
     *
     * @param \DateTime $dtedia
     * @return Calendariosdias
     */
    public function setDtedia($dtedia)
    {
        $this->dtedia = $dtedia;

        return $this;
    }

    /**
     * Get dtedia
     *
     * @return \DateTime 
     */
    public function getDtedia()
    {
        return $this->dtedia;
    }

    /**
     * Set numtipodia
     *
     * @param integer $numtipodia
     * @return Calendariosdias
     */
    public function setNumtipodia($numtipodia)
    {
        $this->numtipodia = $numtipodia;

        return $this;
    }

    /**
     * Get numtipodia
     *
     * @return integer 
     */
    public function getNumtipodia()
    {
        return $this->numtipodia;
    }
}
