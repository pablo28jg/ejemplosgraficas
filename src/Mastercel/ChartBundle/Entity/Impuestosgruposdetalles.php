<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Impuestosgruposdetalles
 *
 * @ORM\Table(name="ImpuestosGruposDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumRegionImpuesto_id"}), @ORM\Index(name="Indice_2", columns={"NumClaseImpuesto_id"}), @ORM\Index(name="Indice_3", columns={"NumImpuesto_id"})})
 * @ORM\Entity
 */
class Impuestosgruposdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoImpuesto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numgrupoimpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRegionImpuesto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numregionimpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseImpuesto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numclaseimpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numimpuestoId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEfectiva", type="datetime", nullable=true)
     */
    private $dteefectiva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteExpiracion", type="datetime", nullable=true)
     */
    private $dteexpiracion;



    /**
     * Set numgrupoimpuestoId
     *
     * @param integer $numgrupoimpuestoId
     * @return Impuestosgruposdetalles
     */
    public function setNumgrupoimpuestoId($numgrupoimpuestoId)
    {
        $this->numgrupoimpuestoId = $numgrupoimpuestoId;

        return $this;
    }

    /**
     * Get numgrupoimpuestoId
     *
     * @return integer 
     */
    public function getNumgrupoimpuestoId()
    {
        return $this->numgrupoimpuestoId;
    }

    /**
     * Set numregionimpuestoId
     *
     * @param integer $numregionimpuestoId
     * @return Impuestosgruposdetalles
     */
    public function setNumregionimpuestoId($numregionimpuestoId)
    {
        $this->numregionimpuestoId = $numregionimpuestoId;

        return $this;
    }

    /**
     * Get numregionimpuestoId
     *
     * @return integer 
     */
    public function getNumregionimpuestoId()
    {
        return $this->numregionimpuestoId;
    }

    /**
     * Set numclaseimpuestoId
     *
     * @param integer $numclaseimpuestoId
     * @return Impuestosgruposdetalles
     */
    public function setNumclaseimpuestoId($numclaseimpuestoId)
    {
        $this->numclaseimpuestoId = $numclaseimpuestoId;

        return $this;
    }

    /**
     * Get numclaseimpuestoId
     *
     * @return integer 
     */
    public function getNumclaseimpuestoId()
    {
        return $this->numclaseimpuestoId;
    }

    /**
     * Set numimpuestoId
     *
     * @param integer $numimpuestoId
     * @return Impuestosgruposdetalles
     */
    public function setNumimpuestoId($numimpuestoId)
    {
        $this->numimpuestoId = $numimpuestoId;

        return $this;
    }

    /**
     * Get numimpuestoId
     *
     * @return integer 
     */
    public function getNumimpuestoId()
    {
        return $this->numimpuestoId;
    }

    /**
     * Set dteefectiva
     *
     * @param \DateTime $dteefectiva
     * @return Impuestosgruposdetalles
     */
    public function setDteefectiva($dteefectiva)
    {
        $this->dteefectiva = $dteefectiva;

        return $this;
    }

    /**
     * Get dteefectiva
     *
     * @return \DateTime 
     */
    public function getDteefectiva()
    {
        return $this->dteefectiva;
    }

    /**
     * Set dteexpiracion
     *
     * @param \DateTime $dteexpiracion
     * @return Impuestosgruposdetalles
     */
    public function setDteexpiracion($dteexpiracion)
    {
        $this->dteexpiracion = $dteexpiracion;

        return $this;
    }

    /**
     * Get dteexpiracion
     *
     * @return \DateTime 
     */
    public function getDteexpiracion()
    {
        return $this->dteexpiracion;
    }
}
