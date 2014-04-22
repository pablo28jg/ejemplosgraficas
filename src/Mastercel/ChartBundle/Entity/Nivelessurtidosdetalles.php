<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nivelessurtidosdetalles
 *
 * @ORM\Table(name="NivelesSurtidosDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumNivelSurtido_id", "DteInicio"})})
 * @ORM\Entity
 */
class Nivelessurtidosdetalles
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
     * @ORM\Column(name="NumNivelSurtido_id", type="integer", nullable=true)
     */
    private $numnivelsurtidoId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicio", type="datetime", nullable=true)
     */
    private $dteinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTermino", type="datetime", nullable=true)
     */
    private $dtetermino;

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadMinima", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadminima = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadMaxima", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadmaxima = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadPuntoReorden", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadpuntoreorden = '0';



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
     * Set numnivelsurtidoId
     *
     * @param integer $numnivelsurtidoId
     * @return Nivelessurtidosdetalles
     */
    public function setNumnivelsurtidoId($numnivelsurtidoId)
    {
        $this->numnivelsurtidoId = $numnivelsurtidoId;

        return $this;
    }

    /**
     * Get numnivelsurtidoId
     *
     * @return integer 
     */
    public function getNumnivelsurtidoId()
    {
        return $this->numnivelsurtidoId;
    }

    /**
     * Set dteinicio
     *
     * @param \DateTime $dteinicio
     * @return Nivelessurtidosdetalles
     */
    public function setDteinicio($dteinicio)
    {
        $this->dteinicio = $dteinicio;

        return $this;
    }

    /**
     * Get dteinicio
     *
     * @return \DateTime 
     */
    public function getDteinicio()
    {
        return $this->dteinicio;
    }

    /**
     * Set dtetermino
     *
     * @param \DateTime $dtetermino
     * @return Nivelessurtidosdetalles
     */
    public function setDtetermino($dtetermino)
    {
        $this->dtetermino = $dtetermino;

        return $this;
    }

    /**
     * Get dtetermino
     *
     * @return \DateTime 
     */
    public function getDtetermino()
    {
        return $this->dtetermino;
    }

    /**
     * Set numcantidadminima
     *
     * @param float $numcantidadminima
     * @return Nivelessurtidosdetalles
     */
    public function setNumcantidadminima($numcantidadminima)
    {
        $this->numcantidadminima = $numcantidadminima;

        return $this;
    }

    /**
     * Get numcantidadminima
     *
     * @return float 
     */
    public function getNumcantidadminima()
    {
        return $this->numcantidadminima;
    }

    /**
     * Set numcantidadmaxima
     *
     * @param float $numcantidadmaxima
     * @return Nivelessurtidosdetalles
     */
    public function setNumcantidadmaxima($numcantidadmaxima)
    {
        $this->numcantidadmaxima = $numcantidadmaxima;

        return $this;
    }

    /**
     * Get numcantidadmaxima
     *
     * @return float 
     */
    public function getNumcantidadmaxima()
    {
        return $this->numcantidadmaxima;
    }

    /**
     * Set numcantidadpuntoreorden
     *
     * @param float $numcantidadpuntoreorden
     * @return Nivelessurtidosdetalles
     */
    public function setNumcantidadpuntoreorden($numcantidadpuntoreorden)
    {
        $this->numcantidadpuntoreorden = $numcantidadpuntoreorden;

        return $this;
    }

    /**
     * Get numcantidadpuntoreorden
     *
     * @return float 
     */
    public function getNumcantidadpuntoreorden()
    {
        return $this->numcantidadpuntoreorden;
    }
}
