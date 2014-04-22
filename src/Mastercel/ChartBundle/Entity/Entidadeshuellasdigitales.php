<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadeshuellasdigitales
 *
 * @ORM\Table(name="EntidadesHuellasDigitales")
 * @ORM\Entity
 */
class Entidadeshuellasdigitales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDedo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipodedo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ObjHuellaDigital", type="text", length=16, nullable=true)
     */
    private $objhuelladigital;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLongitud", type="integer", nullable=true)
     */
    private $numlongitud = '0';

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
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Entidadeshuellasdigitales
     */
    public function setNumentidadId($numentidadId)
    {
        $this->numentidadId = $numentidadId;

        return $this;
    }

    /**
     * Get numentidadId
     *
     * @return integer 
     */
    public function getNumentidadId()
    {
        return $this->numentidadId;
    }

    /**
     * Set numtipodedo
     *
     * @param integer $numtipodedo
     * @return Entidadeshuellasdigitales
     */
    public function setNumtipodedo($numtipodedo)
    {
        $this->numtipodedo = $numtipodedo;

        return $this;
    }

    /**
     * Get numtipodedo
     *
     * @return integer 
     */
    public function getNumtipodedo()
    {
        return $this->numtipodedo;
    }

    /**
     * Set objhuelladigital
     *
     * @param string $objhuelladigital
     * @return Entidadeshuellasdigitales
     */
    public function setObjhuelladigital($objhuelladigital)
    {
        $this->objhuelladigital = $objhuelladigital;

        return $this;
    }

    /**
     * Get objhuelladigital
     *
     * @return string 
     */
    public function getObjhuelladigital()
    {
        return $this->objhuelladigital;
    }

    /**
     * Set numlongitud
     *
     * @param integer $numlongitud
     * @return Entidadeshuellasdigitales
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

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Entidadeshuellasdigitales
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
     * @return Entidadeshuellasdigitales
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
}
