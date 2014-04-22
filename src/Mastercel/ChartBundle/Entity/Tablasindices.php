<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasindices
 *
 * @ORM\Table(name="TablasIndices", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"NumTabla_id", "StrIndice_ky"})})
 * @ORM\Entity
 */
class Tablasindices
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
     * @var string
     *
     * @ORM\Column(name="StrIndice_ky", type="string", length=30, nullable=true)
     */
    private $strindiceKy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogExpresion", type="boolean", nullable=true)
     */
    private $logexpresion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLlavePrimaria", type="boolean", nullable=true)
     */
    private $logllaveprimaria = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLlaveUnica", type="boolean", nullable=true)
     */
    private $logllaveunica = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogOrdenDescendente", type="boolean", nullable=true)
     */
    private $logordendescendente = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogSensibleLetras", type="boolean", nullable=true)
     */
    private $logsensibleletras = '0';



    /**
     * Set numtablaId
     *
     * @param integer $numtablaId
     * @return Tablasindices
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
     * @return Tablasindices
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
     * Set strindiceKy
     *
     * @param string $strindiceKy
     * @return Tablasindices
     */
    public function setStrindiceKy($strindiceKy)
    {
        $this->strindiceKy = $strindiceKy;

        return $this;
    }

    /**
     * Get strindiceKy
     *
     * @return string 
     */
    public function getStrindiceKy()
    {
        return $this->strindiceKy;
    }

    /**
     * Set logexpresion
     *
     * @param boolean $logexpresion
     * @return Tablasindices
     */
    public function setLogexpresion($logexpresion)
    {
        $this->logexpresion = $logexpresion;

        return $this;
    }

    /**
     * Get logexpresion
     *
     * @return boolean 
     */
    public function getLogexpresion()
    {
        return $this->logexpresion;
    }

    /**
     * Set logllaveprimaria
     *
     * @param boolean $logllaveprimaria
     * @return Tablasindices
     */
    public function setLogllaveprimaria($logllaveprimaria)
    {
        $this->logllaveprimaria = $logllaveprimaria;

        return $this;
    }

    /**
     * Get logllaveprimaria
     *
     * @return boolean 
     */
    public function getLogllaveprimaria()
    {
        return $this->logllaveprimaria;
    }

    /**
     * Set logllaveunica
     *
     * @param boolean $logllaveunica
     * @return Tablasindices
     */
    public function setLogllaveunica($logllaveunica)
    {
        $this->logllaveunica = $logllaveunica;

        return $this;
    }

    /**
     * Get logllaveunica
     *
     * @return boolean 
     */
    public function getLogllaveunica()
    {
        return $this->logllaveunica;
    }

    /**
     * Set logordendescendente
     *
     * @param boolean $logordendescendente
     * @return Tablasindices
     */
    public function setLogordendescendente($logordendescendente)
    {
        $this->logordendescendente = $logordendescendente;

        return $this;
    }

    /**
     * Get logordendescendente
     *
     * @return boolean 
     */
    public function getLogordendescendente()
    {
        return $this->logordendescendente;
    }

    /**
     * Set logsensibleletras
     *
     * @param boolean $logsensibleletras
     * @return Tablasindices
     */
    public function setLogsensibleletras($logsensibleletras)
    {
        $this->logsensibleletras = $logsensibleletras;

        return $this;
    }

    /**
     * Get logsensibleletras
     *
     * @return boolean 
     */
    public function getLogsensibleletras()
    {
        return $this->logsensibleletras;
    }
}
