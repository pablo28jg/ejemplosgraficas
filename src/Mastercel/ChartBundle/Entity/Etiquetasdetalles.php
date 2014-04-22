<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etiquetasdetalles
 *
 * @ORM\Table(name="EtiquetasDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumEtiqueta_id", "NumOrden"})})
 * @ORM\Entity
 */
class Etiquetasdetalles
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
     * @ORM\Column(name="NumEtiqueta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numetiquetaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrInstruccion", type="string", length=200, nullable=true)
     */
    private $strinstruccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEjecucion", type="integer", nullable=true)
     */
    private $numtipoejecucion = '0';



    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Etiquetasdetalles
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
     * Set numetiquetaId
     *
     * @param integer $numetiquetaId
     * @return Etiquetasdetalles
     */
    public function setNumetiquetaId($numetiquetaId)
    {
        $this->numetiquetaId = $numetiquetaId;

        return $this;
    }

    /**
     * Get numetiquetaId
     *
     * @return integer 
     */
    public function getNumetiquetaId()
    {
        return $this->numetiquetaId;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Etiquetasdetalles
     */
    public function setNumorden($numorden)
    {
        $this->numorden = $numorden;

        return $this;
    }

    /**
     * Get numorden
     *
     * @return integer 
     */
    public function getNumorden()
    {
        return $this->numorden;
    }

    /**
     * Set strinstruccion
     *
     * @param string $strinstruccion
     * @return Etiquetasdetalles
     */
    public function setStrinstruccion($strinstruccion)
    {
        $this->strinstruccion = $strinstruccion;

        return $this;
    }

    /**
     * Get strinstruccion
     *
     * @return string 
     */
    public function getStrinstruccion()
    {
        return $this->strinstruccion;
    }

    /**
     * Set numtipoejecucion
     *
     * @param integer $numtipoejecucion
     * @return Etiquetasdetalles
     */
    public function setNumtipoejecucion($numtipoejecucion)
    {
        $this->numtipoejecucion = $numtipoejecucion;

        return $this;
    }

    /**
     * Get numtipoejecucion
     *
     * @return integer 
     */
    public function getNumtipoejecucion()
    {
        return $this->numtipoejecucion;
    }
}
