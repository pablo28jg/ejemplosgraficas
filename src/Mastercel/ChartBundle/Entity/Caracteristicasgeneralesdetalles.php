<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristicasgeneralesdetalles
 *
 * @ORM\Table(name="CaracteristicasGeneralesDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumCaracteristica_id", "StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"NumCaracteristica_id", "StrOpcion"})})
 * @ORM\Entity
 */
class Caracteristicasgeneralesdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristicaGeneral_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcaracteristicageneralId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrOpcion", type="string", length=100, nullable=true)
     */
    private $stropcion;



    /**
     * Get numcaracteristicageneralId
     *
     * @return integer 
     */
    public function getNumcaracteristicageneralId()
    {
        return $this->numcaracteristicageneralId;
    }

    /**
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Caracteristicasgeneralesdetalles
     */
    public function setNumcaracteristicaId($numcaracteristicaId)
    {
        $this->numcaracteristicaId = $numcaracteristicaId;

        return $this;
    }

    /**
     * Get numcaracteristicaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaId()
    {
        return $this->numcaracteristicaId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Caracteristicasgeneralesdetalles
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
     * Set stropcion
     *
     * @param string $stropcion
     * @return Caracteristicasgeneralesdetalles
     */
    public function setStropcion($stropcion)
    {
        $this->stropcion = $stropcion;

        return $this;
    }

    /**
     * Get stropcion
     *
     * @return string 
     */
    public function getStropcion()
    {
        return $this->stropcion;
    }
}
