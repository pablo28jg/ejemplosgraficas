<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comisionesventasgruposdetalles
 *
 * @ORM\Table(name="ComisionesVentasGruposDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumNivelComision_id"}), @ORM\Index(name="Indice_2", columns={"NumClaseComision_id"}), @ORM\Index(name="Indice_3", columns={"NumTipoComision_id"}), @ORM\Index(name="Indice_4", columns={"NumComisionVenta_id"}), @ORM\Index(name="Indice_5", columns={"StrDescripcion"})})
 * @ORM\Entity
 */
class Comisionesventasgruposdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numgrupocomisionventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelComision_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numnivelcomisionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseComision_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numclasecomisionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComision_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipocomisionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumComisionVenta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcomisionventaId = '0';



    /**
     * Set numgrupocomisionventaId
     *
     * @param integer $numgrupocomisionventaId
     * @return Comisionesventasgruposdetalles
     */
    public function setNumgrupocomisionventaId($numgrupocomisionventaId)
    {
        $this->numgrupocomisionventaId = $numgrupocomisionventaId;

        return $this;
    }

    /**
     * Get numgrupocomisionventaId
     *
     * @return integer 
     */
    public function getNumgrupocomisionventaId()
    {
        return $this->numgrupocomisionventaId;
    }

    /**
     * Set numnivelcomisionId
     *
     * @param integer $numnivelcomisionId
     * @return Comisionesventasgruposdetalles
     */
    public function setNumnivelcomisionId($numnivelcomisionId)
    {
        $this->numnivelcomisionId = $numnivelcomisionId;

        return $this;
    }

    /**
     * Get numnivelcomisionId
     *
     * @return integer 
     */
    public function getNumnivelcomisionId()
    {
        return $this->numnivelcomisionId;
    }

    /**
     * Set numclasecomisionId
     *
     * @param integer $numclasecomisionId
     * @return Comisionesventasgruposdetalles
     */
    public function setNumclasecomisionId($numclasecomisionId)
    {
        $this->numclasecomisionId = $numclasecomisionId;

        return $this;
    }

    /**
     * Get numclasecomisionId
     *
     * @return integer 
     */
    public function getNumclasecomisionId()
    {
        return $this->numclasecomisionId;
    }

    /**
     * Set numtipocomisionId
     *
     * @param integer $numtipocomisionId
     * @return Comisionesventasgruposdetalles
     */
    public function setNumtipocomisionId($numtipocomisionId)
    {
        $this->numtipocomisionId = $numtipocomisionId;

        return $this;
    }

    /**
     * Get numtipocomisionId
     *
     * @return integer 
     */
    public function getNumtipocomisionId()
    {
        return $this->numtipocomisionId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Comisionesventasgruposdetalles
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
     * Set numcomisionventaId
     *
     * @param integer $numcomisionventaId
     * @return Comisionesventasgruposdetalles
     */
    public function setNumcomisionventaId($numcomisionventaId)
    {
        $this->numcomisionventaId = $numcomisionventaId;

        return $this;
    }

    /**
     * Get numcomisionventaId
     *
     * @return integer 
     */
    public function getNumcomisionventaId()
    {
        return $this->numcomisionventaId;
    }
}
