<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasindicescampos
 *
 * @ORM\Table(name="TablasIndicesCampos")
 * @ORM\Entity
 */
class Tablasindicescampos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTabla_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtablaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIndice_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numindiceId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCampo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcampoId = '0';



    /**
     * Set numtablaId
     *
     * @param integer $numtablaId
     * @return Tablasindicescampos
     */
    public function setNumtablaId($numtablaId)
    {
        $this->numtablaId = $numtablaId;

        return $this;
    }

    /**
     * Get numtablaId
     *
     * @return integer 
     */
    public function getNumtablaId()
    {
        return $this->numtablaId;
    }

    /**
     * Set numindiceId
     *
     * @param integer $numindiceId
     * @return Tablasindicescampos
     */
    public function setNumindiceId($numindiceId)
    {
        $this->numindiceId = $numindiceId;

        return $this;
    }

    /**
     * Get numindiceId
     *
     * @return integer 
     */
    public function getNumindiceId()
    {
        return $this->numindiceId;
    }

    /**
     * Set numcampoId
     *
     * @param integer $numcampoId
     * @return Tablasindicescampos
     */
    public function setNumcampoId($numcampoId)
    {
        $this->numcampoId = $numcampoId;

        return $this;
    }

    /**
     * Get numcampoId
     *
     * @return integer 
     */
    public function getNumcampoId()
    {
        return $this->numcampoId;
    }
}
