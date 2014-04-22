<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristicasdetalles
 *
 * @ORM\Table(name="CaracteristicasDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumCaracteristica_id", "NumCaracteristicaEspecifica_id", "NumCaracteristicaGeneral_id"}), @ORM\Index(name="Indice_2", columns={"NumCaracteristicaEspecifica_id"}), @ORM\Index(name="Indice_3", columns={"NumCaracteristicaGeneral_id"})})
 * @ORM\Entity
 */
class Caracteristicasdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristicaEspecifica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaespecificaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristicaGeneral_id", type="integer", nullable=true)
     */
    private $numcaracteristicageneralId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogOpcionOmision", type="boolean", nullable=true)
     */
    private $logopcionomision = '0';



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
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Caracteristicasdetalles
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
     * Set numcaracteristicaespecificaId
     *
     * @param integer $numcaracteristicaespecificaId
     * @return Caracteristicasdetalles
     */
    public function setNumcaracteristicaespecificaId($numcaracteristicaespecificaId)
    {
        $this->numcaracteristicaespecificaId = $numcaracteristicaespecificaId;

        return $this;
    }

    /**
     * Get numcaracteristicaespecificaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaespecificaId()
    {
        return $this->numcaracteristicaespecificaId;
    }

    /**
     * Set numcaracteristicageneralId
     *
     * @param integer $numcaracteristicageneralId
     * @return Caracteristicasdetalles
     */
    public function setNumcaracteristicageneralId($numcaracteristicageneralId)
    {
        $this->numcaracteristicageneralId = $numcaracteristicageneralId;

        return $this;
    }

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
     * Set numorden
     *
     * @param integer $numorden
     * @return Caracteristicasdetalles
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
     * Set logopcionomision
     *
     * @param boolean $logopcionomision
     * @return Caracteristicasdetalles
     */
    public function setLogopcionomision($logopcionomision)
    {
        $this->logopcionomision = $logopcionomision;

        return $this;
    }

    /**
     * Get logopcionomision
     *
     * @return boolean 
     */
    public function getLogopcionomision()
    {
        return $this->logopcionomision;
    }
}
