<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flujostrabajoarchivos
 *
 * @ORM\Table(name="FlujosTrabajoArchivos")
 * @ORM\Entity
 */
class Flujostrabajoarchivos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumArchivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numarchivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFlujoTrabajo_id", type="integer", nullable=true)
     */
    private $numflujotrabajoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ImgContenidoArchivo", type="text", length=16, nullable=true)
     */
    private $imgcontenidoarchivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoObjecto", type="integer", nullable=true)
     */
    private $numtipoobjecto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCreadoPor_id", type="integer", nullable=true)
     */
    private $numcreadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCreacion", type="datetime", nullable=true)
     */
    private $dtecreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActualizadoPor_id", type="integer", nullable=true)
     */
    private $numactualizadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteActualizacion", type="datetime", nullable=true)
     */
    private $dteactualizacion;



    /**
     * Get numarchivoId
     *
     * @return integer 
     */
    public function getNumarchivoId()
    {
        return $this->numarchivoId;
    }

    /**
     * Set numflujotrabajoId
     *
     * @param integer $numflujotrabajoId
     * @return Flujostrabajoarchivos
     */
    public function setNumflujotrabajoId($numflujotrabajoId)
    {
        $this->numflujotrabajoId = $numflujotrabajoId;

        return $this;
    }

    /**
     * Get numflujotrabajoId
     *
     * @return integer 
     */
    public function getNumflujotrabajoId()
    {
        return $this->numflujotrabajoId;
    }

    /**
     * Set imgcontenidoarchivo
     *
     * @param string $imgcontenidoarchivo
     * @return Flujostrabajoarchivos
     */
    public function setImgcontenidoarchivo($imgcontenidoarchivo)
    {
        $this->imgcontenidoarchivo = $imgcontenidoarchivo;

        return $this;
    }

    /**
     * Get imgcontenidoarchivo
     *
     * @return string 
     */
    public function getImgcontenidoarchivo()
    {
        return $this->imgcontenidoarchivo;
    }

    /**
     * Set numtipoobjecto
     *
     * @param integer $numtipoobjecto
     * @return Flujostrabajoarchivos
     */
    public function setNumtipoobjecto($numtipoobjecto)
    {
        $this->numtipoobjecto = $numtipoobjecto;

        return $this;
    }

    /**
     * Get numtipoobjecto
     *
     * @return integer 
     */
    public function getNumtipoobjecto()
    {
        return $this->numtipoobjecto;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Flujostrabajoarchivos
     */
    public function setNumcreadoporId($numcreadoporId)
    {
        $this->numcreadoporId = $numcreadoporId;

        return $this;
    }

    /**
     * Get numcreadoporId
     *
     * @return integer 
     */
    public function getNumcreadoporId()
    {
        return $this->numcreadoporId;
    }

    /**
     * Set dtecreacion
     *
     * @param \DateTime $dtecreacion
     * @return Flujostrabajoarchivos
     */
    public function setDtecreacion($dtecreacion)
    {
        $this->dtecreacion = $dtecreacion;

        return $this;
    }

    /**
     * Get dtecreacion
     *
     * @return \DateTime 
     */
    public function getDtecreacion()
    {
        return $this->dtecreacion;
    }

    /**
     * Set numactualizadoporId
     *
     * @param integer $numactualizadoporId
     * @return Flujostrabajoarchivos
     */
    public function setNumactualizadoporId($numactualizadoporId)
    {
        $this->numactualizadoporId = $numactualizadoporId;

        return $this;
    }

    /**
     * Get numactualizadoporId
     *
     * @return integer 
     */
    public function getNumactualizadoporId()
    {
        return $this->numactualizadoporId;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Flujostrabajoarchivos
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
}
