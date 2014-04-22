<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelosatributoscampos
 *
 * @ORM\Table(name="ModelosAtributosCampos", indexes={@ORM\Index(name="Indice_1", columns={"NumAtributoModelo_id", "NumOrden"})})
 * @ORM\Entity
 */
class Modelosatributoscampos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumAtributoModelo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numatributomodeloId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCampoModelo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipocampomodelo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLongitud", type="integer", nullable=true)
     */
    private $numlongitud = '0';



    /**
     * Set numatributomodeloId
     *
     * @param integer $numatributomodeloId
     * @return Modelosatributoscampos
     */
    public function setNumatributomodeloId($numatributomodeloId)
    {
        $this->numatributomodeloId = $numatributomodeloId;

        return $this;
    }

    /**
     * Get numatributomodeloId
     *
     * @return integer 
     */
    public function getNumatributomodeloId()
    {
        return $this->numatributomodeloId;
    }

    /**
     * Set numtipocampomodelo
     *
     * @param integer $numtipocampomodelo
     * @return Modelosatributoscampos
     */
    public function setNumtipocampomodelo($numtipocampomodelo)
    {
        $this->numtipocampomodelo = $numtipocampomodelo;

        return $this;
    }

    /**
     * Get numtipocampomodelo
     *
     * @return integer 
     */
    public function getNumtipocampomodelo()
    {
        return $this->numtipocampomodelo;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Modelosatributoscampos
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
     * Set numlongitud
     *
     * @param integer $numlongitud
     * @return Modelosatributoscampos
     */
    public function setNumlongitud($numlongitud)
    {
        $this->numlongitud = $numlongitud;

        return $this;
    }

    /**
     * Get numlongitud
     *
     * @return integer 
     */
    public function getNumlongitud()
    {
        return $this->numlongitud;
    }
}
