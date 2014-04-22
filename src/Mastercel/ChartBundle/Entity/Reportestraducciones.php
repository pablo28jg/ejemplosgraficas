<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportestraducciones
 *
 * @ORM\Table(name="ReportesTraducciones", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Reportestraducciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPlantilla_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numplantillaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTraduccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtraduccionId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteActualizacion", type="datetime", nullable=true)
     */
    private $dteactualizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Set numplantillaId
     *
     * @param integer $numplantillaId
     * @return Reportestraducciones
     */
    public function setNumplantillaId($numplantillaId)
    {
        $this->numplantillaId = $numplantillaId;

        return $this;
    }

    /**
     * Get numplantillaId
     *
     * @return integer 
     */
    public function getNumplantillaId()
    {
        return $this->numplantillaId;
    }

    /**
     * Set numtraduccionId
     *
     * @param integer $numtraduccionId
     * @return Reportestraducciones
     */
    public function setNumtraduccionId($numtraduccionId)
    {
        $this->numtraduccionId = $numtraduccionId;

        return $this;
    }

    /**
     * Get numtraduccionId
     *
     * @return integer 
     */
    public function getNumtraduccionId()
    {
        return $this->numtraduccionId;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Reportestraducciones
     */
    public function setDteactualizacion($dteactualizacion)
    {
        $this->dteactualizacion = $dteactualizacion;

        return $this;
    }

    /**
     * Get dteactualizacion
     *
     * @return \DateTime 
     */
    public function getDteactualizacion()
    {
        return $this->dteactualizacion;
    }

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Reportestraducciones
     */
    public function setNumestadocomunicacion($numestadocomunicacion)
    {
        $this->numestadocomunicacion = $numestadocomunicacion;

        return $this;
    }

    /**
     * Get numestadocomunicacion
     *
     * @return integer 
     */
    public function getNumestadocomunicacion()
    {
        return $this->numestadocomunicacion;
    }
}
