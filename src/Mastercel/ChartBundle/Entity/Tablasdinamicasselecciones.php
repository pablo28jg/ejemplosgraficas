<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasdinamicasselecciones
 *
 * @ORM\Table(name="TablasDinamicasSelecciones", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Tablasdinamicasselecciones
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
     * @ORM\Column(name="NumTablaDinamica_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtabladinamicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

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
     * @return Tablasdinamicasselecciones
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
     * Set numtabladinamicaId
     *
     * @param integer $numtabladinamicaId
     * @return Tablasdinamicasselecciones
     */
    public function setNumtabladinamicaId($numtabladinamicaId)
    {
        $this->numtabladinamicaId = $numtabladinamicaId;

        return $this;
    }

    /**
     * Get numtabladinamicaId
     *
     * @return integer 
     */
    public function getNumtabladinamicaId()
    {
        return $this->numtabladinamicaId;
    }

    /**
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Tablasdinamicasselecciones
     */
    public function setNumtipo($numtipo)
    {
        $this->numtipo = $numtipo;

        return $this;
    }

    /**
     * Get numtipo
     *
     * @return integer 
     */
    public function getNumtipo()
    {
        return $this->numtipo;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tablasdinamicasselecciones
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
     * @return Tablasdinamicasselecciones
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
     * @return Tablasdinamicasselecciones
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
     * @return Tablasdinamicasselecciones
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
