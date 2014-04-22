<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultasselecciones
 *
 * @ORM\Table(name="ConsultasSelecciones", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Consultasselecciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumUsuario_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numusuarioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsulta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsultaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjDatos", type="text", length=16, nullable=true)
     */
    private $objdatos;

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
     * Set numusuarioId
     *
     * @param integer $numusuarioId
     * @return Consultasselecciones
     */
    public function setNumusuarioId($numusuarioId)
    {
        $this->numusuarioId = $numusuarioId;

        return $this;
    }

    /**
     * Get numusuarioId
     *
     * @return integer 
     */
    public function getNumusuarioId()
    {
        return $this->numusuarioId;
    }

    /**
     * Set numconsultaId
     *
     * @param integer $numconsultaId
     * @return Consultasselecciones
     */
    public function setNumconsultaId($numconsultaId)
    {
        $this->numconsultaId = $numconsultaId;

        return $this;
    }

    /**
     * Get numconsultaId
     *
     * @return integer 
     */
    public function getNumconsultaId()
    {
        return $this->numconsultaId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Consultasselecciones
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
     * Set objdatos
     *
     * @param string $objdatos
     * @return Consultasselecciones
     */
    public function setObjdatos($objdatos)
    {
        $this->objdatos = $objdatos;

        return $this;
    }

    /**
     * Get objdatos
     *
     * @return string 
     */
    public function getObjdatos()
    {
        return $this->objdatos;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Consultasselecciones
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
     * @return Consultasselecciones
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
