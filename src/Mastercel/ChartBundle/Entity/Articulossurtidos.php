<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulossurtidos
 *
 * @ORM\Table(name="ArticulosSurtidos", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Articulossurtidos
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strarticuloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseSurtido_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numclasesurtidoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelSurtido_id", type="integer", nullable=true)
     */
    private $numnivelsurtidoId = '0';

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
     * @var float
     *
     * @ORM\Column(name="NumCantidadProporcion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadproporcion = '0';

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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Articulossurtidos
     */
    public function setStrarticuloKy($strarticuloKy)
    {
        $this->strarticuloKy = $strarticuloKy;

        return $this;
    }

    /**
     * Get strarticuloKy
     *
     * @return string 
     */
    public function getStrarticuloKy()
    {
        return $this->strarticuloKy;
    }

    /**
     * Set numclasesurtidoId
     *
     * @param integer $numclasesurtidoId
     * @return Articulossurtidos
     */
    public function setNumclasesurtidoId($numclasesurtidoId)
    {
        $this->numclasesurtidoId = $numclasesurtidoId;

        return $this;
    }

    /**
     * Get numclasesurtidoId
     *
     * @return integer 
     */
    public function getNumclasesurtidoId()
    {
        return $this->numclasesurtidoId;
    }

    /**
     * Set numnivelsurtidoId
     *
     * @param integer $numnivelsurtidoId
     * @return Articulossurtidos
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
     * Set numcantidadminima
     *
     * @param float $numcantidadminima
     * @return Articulossurtidos
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
     * @return Articulossurtidos
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
     * @return Articulossurtidos
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

    /**
     * Set numcantidadproporcion
     *
     * @param float $numcantidadproporcion
     * @return Articulossurtidos
     */
    public function setNumcantidadproporcion($numcantidadproporcion)
    {
        $this->numcantidadproporcion = $numcantidadproporcion;

        return $this;
    }

    /**
     * Get numcantidadproporcion
     *
     * @return float 
     */
    public function getNumcantidadproporcion()
    {
        return $this->numcantidadproporcion;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Articulossurtidos
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
     * @return Articulossurtidos
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
