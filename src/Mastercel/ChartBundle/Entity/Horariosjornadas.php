<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horariosjornadas
 *
 * @ORM\Table(name="HorariosJornadas")
 * @ORM\Entity
 */
class Horariosjornadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumHorario_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numhorarioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiaPeriodo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numdiaperiodoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDia", type="integer", nullable=true)
     */
    private $numtipodia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumJornada_id", type="integer", nullable=true)
     */
    private $numjornadaId = '0';



    /**
     * Set numhorarioId
     *
     * @param integer $numhorarioId
     * @return Horariosjornadas
     */
    public function setNumhorarioId($numhorarioId)
    {
        $this->numhorarioId = $numhorarioId;

        return $this;
    }

    /**
     * Get numhorarioId
     *
     * @return integer 
     */
    public function getNumhorarioId()
    {
        return $this->numhorarioId;
    }

    /**
     * Set numdiaperiodoId
     *
     * @param integer $numdiaperiodoId
     * @return Horariosjornadas
     */
    public function setNumdiaperiodoId($numdiaperiodoId)
    {
        $this->numdiaperiodoId = $numdiaperiodoId;

        return $this;
    }

    /**
     * Get numdiaperiodoId
     *
     * @return integer 
     */
    public function getNumdiaperiodoId()
    {
        return $this->numdiaperiodoId;
    }

    /**
     * Set numtipodia
     *
     * @param integer $numtipodia
     * @return Horariosjornadas
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

    /**
     * Set numjornadaId
     *
     * @param integer $numjornadaId
     * @return Horariosjornadas
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
}
