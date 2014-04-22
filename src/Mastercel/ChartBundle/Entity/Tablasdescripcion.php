<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasdescripcion
 *
 * @ORM\Table(name="TablasDescripcion", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"})})
 * @ORM\Entity
 */
class Tablasdescripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTabla_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numtablaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrFuncion", type="string", length=100, nullable=true)
     */
    private $strfuncion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTabla", type="integer", nullable=true)
     */
    private $numtipotabla = '0';



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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tablasdescripcion
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
     * Set strfuncion
     *
     * @param string $strfuncion
     * @return Tablasdescripcion
     */
    public function setStrfuncion($strfuncion)
    {
        $this->strfuncion = $strfuncion;

        return $this;
    }

    /**
     * Get strfuncion
     *
     * @return string 
     */
    public function getStrfuncion()
    {
        return $this->strfuncion;
    }

    /**
     * Set numtipotabla
     *
     * @param integer $numtipotabla
     * @return Tablasdescripcion
     */
    public function setNumtipotabla($numtipotabla)
    {
        $this->numtipotabla = $numtipotabla;

        return $this;
    }

    /**
     * Get numtipotabla
     *
     * @return integer 
     */
    public function getNumtipotabla()
    {
        return $this->numtipotabla;
    }
}
