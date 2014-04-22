<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Turnos
 *
 * @ORM\Table(name="Turnos", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_2", columns={"NumEntidad_id"}), @ORM\Index(name="Indice_3", columns={"NumCreadoPor_id"}), @ORM\Index(name="Indice_4", columns={"NumActualizadoPor_id"}), @ORM\Index(name="Indice_5", columns={"DteCreacion", "TmeCreacion"}), @ORM\Index(name="Indice_6", columns={"DteActualizacion", "TmeActualizacion"})})
 * @ORM\Entity
 */
class Turnos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTurno_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numturnoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTurnoDia", type="integer", nullable=true)
     */
    private $numturnodia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDocumentos", type="integer", nullable=true)
     */
    private $numdocumentos = '0';

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
     * @var \DateTime
     *
     * @ORM\Column(name="TmeCreacion", type="datetime", nullable=true)
     */
    private $tmecreacion;

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
     * @var \DateTime
     *
     * @ORM\Column(name="TmeActualizacion", type="datetime", nullable=true)
     */
    private $tmeactualizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get numturnoId
     *
     * @return integer 
     */
    public function getNumturnoId()
    {
        return $this->numturnoId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Turnos
     */
    public function setNumalmacenId($numalmacenId)
    {
        $this->numalmacenId = $numalmacenId;

        return $this;
    }

    /**
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set numturnodia
     *
     * @param integer $numturnodia
     * @return Turnos
     */
    public function setNumturnodia($numturnodia)
    {
        $this->numturnodia = $numturnodia;

        return $this;
    }

    /**
     * Get numturnodia
     *
     * @return integer 
     */
    public function getNumturnodia()
    {
        return $this->numturnodia;
    }

    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Turnos
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
     * Set numdocumentos
     *
     * @param integer $numdocumentos
     * @return Turnos
     */
    public function setNumdocumentos($numdocumentos)
    {
        $this->numdocumentos = $numdocumentos;

        return $this;
    }

    /**
     * Get numdocumentos
     *
     * @return integer 
     */
    public function getNumdocumentos()
    {
        return $this->numdocumentos;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Turnos
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
     * @return Turnos
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
     * Set tmecreacion
     *
     * @param \DateTime $tmecreacion
     * @return Turnos
     */
    public function setTmecreacion($tmecreacion)
    {
        $this->tmecreacion = $tmecreacion;

        return $this;
    }

    /**
     * Get tmecreacion
     *
     * @return \DateTime 
     */
    public function getTmecreacion()
    {
        return $this->tmecreacion;
    }

    /**
     * Set numactualizadoporId
     *
     * @param integer $numactualizadoporId
     * @return Turnos
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
     * @return Turnos
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
     * Set tmeactualizacion
     *
     * @param \DateTime $tmeactualizacion
     * @return Turnos
     */
    public function setTmeactualizacion($tmeactualizacion)
    {
        $this->tmeactualizacion = $tmeactualizacion;

        return $this;
    }

    /**
     * Get tmeactualizacion
     *
     * @return \DateTime 
     */
    public function getTmeactualizacion()
    {
        return $this->tmeactualizacion;
    }

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Turnos
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
