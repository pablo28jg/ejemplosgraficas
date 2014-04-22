<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadesempleadosincapacidades
 *
 * @ORM\Table(name="EntidadesEmpleadosIncapacidades", indexes={@ORM\Index(name="Indice_1", columns={"DteInicio", "NumEntidad_id"})})
 * @ORM\Entity
 */
class Entidadesempleadosincapacidades
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
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

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
     * @var integer
     *
     * @ORM\Column(name="NumTipoGoceSueldo", type="integer", nullable=true)
     */
    private $numtipogocesueldo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoJustificanteLaboral", type="integer", nullable=true)
     */
    private $numtipojustificantelaboral = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAutorizadoPor_id", type="integer", nullable=true)
     */
    private $numautorizadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteAutorizacion", type="datetime", nullable=true)
     */
    private $dteautorizacion;



    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Entidadesempleadosincapacidades
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Entidadesempleadosincapacidades
     */
    public function setNumconsecutivoId($numconsecutivoId)
    {
        $this->numconsecutivoId = $numconsecutivoId;

        return $this;
    }

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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Entidadesempleadosincapacidades
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
     * Set dteinicio
     *
     * @param \DateTime $dteinicio
     * @return Entidadesempleadosincapacidades
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
     * @return Entidadesempleadosincapacidades
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
     * Set numtipogocesueldo
     *
     * @param integer $numtipogocesueldo
     * @return Entidadesempleadosincapacidades
     */
    public function setNumtipogocesueldo($numtipogocesueldo)
    {
        $this->numtipogocesueldo = $numtipogocesueldo;

        return $this;
    }

    /**
     * Get numtipogocesueldo
     *
     * @return integer 
     */
    public function getNumtipogocesueldo()
    {
        return $this->numtipogocesueldo;
    }

    /**
     * Set numtipojustificantelaboral
     *
     * @param integer $numtipojustificantelaboral
     * @return Entidadesempleadosincapacidades
     */
    public function setNumtipojustificantelaboral($numtipojustificantelaboral)
    {
        $this->numtipojustificantelaboral = $numtipojustificantelaboral;

        return $this;
    }

    /**
     * Get numtipojustificantelaboral
     *
     * @return integer 
     */
    public function getNumtipojustificantelaboral()
    {
        return $this->numtipojustificantelaboral;
    }

    /**
     * Set numautorizadoporId
     *
     * @param integer $numautorizadoporId
     * @return Entidadesempleadosincapacidades
     */
    public function setNumautorizadoporId($numautorizadoporId)
    {
        $this->numautorizadoporId = $numautorizadoporId;

        return $this;
    }

    /**
     * Get numautorizadoporId
     *
     * @return integer 
     */
    public function getNumautorizadoporId()
    {
        return $this->numautorizadoporId;
    }

    /**
     * Set dteautorizacion
     *
     * @param \DateTime $dteautorizacion
     * @return Entidadesempleadosincapacidades
     */
    public function setDteautorizacion($dteautorizacion)
    {
        $this->dteautorizacion = $dteautorizacion;

        return $this;
    }

    /**
     * Get dteautorizacion
     *
     * @return \DateTime 
     */
    public function getDteautorizacion()
    {
        return $this->dteautorizacion;
    }
}
