<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vialidadestipos
 *
 * @ORM\Table(name="VialidadesTipos", indexes={@ORM\Index(name="Indice_1", columns={"StrAbreviacion"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumPais_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Vialidadestipos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumVialidadTipo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numvialidadtipoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAbreviacion", type="string", length=10, nullable=true)
     */
    private $strabreviacion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPais_id", type="integer", nullable=true)
     */
    private $numpaisId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get numvialidadtipoId
     *
     * @return integer 
     */
    public function getNumvialidadtipoId()
    {
        return $this->numvialidadtipoId;
    }

    /**
     * Set strabreviacion
     *
     * @param string $strabreviacion
     * @return Vialidadestipos
     */
    public function setStrabreviacion($strabreviacion)
    {
        $this->strabreviacion = $strabreviacion;

        return $this;
    }

    /**
     * Get strabreviacion
     *
     * @return string 
     */
    public function getStrabreviacion()
    {
        return $this->strabreviacion;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Vialidadestipos
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
     * Set numpaisId
     *
     * @param integer $numpaisId
     * @return Vialidadestipos
     */
    public function setNumpaisId($numpaisId)
    {
        $this->numpaisId = $numpaisId;

        return $this;
    }

    /**
     * Get numpaisId
     *
     * @return integer 
     */
    public function getNumpaisId()
    {
        return $this->numpaisId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Vialidadestipos
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
     * @return Vialidadestipos
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
     * @return Vialidadestipos
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
     * @return Vialidadestipos
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
     * @return Vialidadestipos
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
