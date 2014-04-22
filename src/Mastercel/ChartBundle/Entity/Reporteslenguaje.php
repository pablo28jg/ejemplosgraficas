<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reporteslenguaje
 *
 * @ORM\Table(name="ReportesLenguaje")
 * @ORM\Entity
 */
class Reporteslenguaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numreporteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLenguaje_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numlenguajeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionReporte", type="string", length=100, nullable=true)
     */
    private $strdescripcionreporte;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionSeleccion", type="string", length=100, nullable=true)
     */
    private $strdescripcionseleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionOpciones", type="string", length=100, nullable=true)
     */
    private $strdescripcionopciones;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionImpresion", type="string", length=100, nullable=true)
     */
    private $strdescripcionimpresion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemAyuda", type="text", length=16, nullable=true)
     */
    private $memayuda;

    /**
     * @var string
     *
     * @ORM\Column(name="MemAyudaSeleccion", type="text", length=16, nullable=true)
     */
    private $memayudaseleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemAyudaOpciones", type="text", length=16, nullable=true)
     */
    private $memayudaopciones;

    /**
     * @var string
     *
     * @ORM\Column(name="MemAyudaImpresion", type="text", length=16, nullable=true)
     */
    private $memayudaimpresion;



    /**
     * Set numreporteId
     *
     * @param integer $numreporteId
     * @return Reporteslenguaje
     */
    public function setNumreporteId($numreporteId)
    {
        $this->numreporteId = $numreporteId;

        return $this;
    }

    /**
     * Get numreporteId
     *
     * @return integer 
     */
    public function getNumreporteId()
    {
        return $this->numreporteId;
    }

    /**
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Reporteslenguaje
     */
    public function setNumlenguajeId($numlenguajeId)
    {
        $this->numlenguajeId = $numlenguajeId;

        return $this;
    }

    /**
     * Get numlenguajeId
     *
     * @return integer 
     */
    public function getNumlenguajeId()
    {
        return $this->numlenguajeId;
    }

    /**
     * Set strdescripcionreporte
     *
     * @param string $strdescripcionreporte
     * @return Reporteslenguaje
     */
    public function setStrdescripcionreporte($strdescripcionreporte)
    {
        $this->strdescripcionreporte = $strdescripcionreporte;

        return $this;
    }

    /**
     * Get strdescripcionreporte
     *
     * @return string 
     */
    public function getStrdescripcionreporte()
    {
        return $this->strdescripcionreporte;
    }

    /**
     * Set strdescripcionseleccion
     *
     * @param string $strdescripcionseleccion
     * @return Reporteslenguaje
     */
    public function setStrdescripcionseleccion($strdescripcionseleccion)
    {
        $this->strdescripcionseleccion = $strdescripcionseleccion;

        return $this;
    }

    /**
     * Get strdescripcionseleccion
     *
     * @return string 
     */
    public function getStrdescripcionseleccion()
    {
        return $this->strdescripcionseleccion;
    }

    /**
     * Set strdescripcionopciones
     *
     * @param string $strdescripcionopciones
     * @return Reporteslenguaje
     */
    public function setStrdescripcionopciones($strdescripcionopciones)
    {
        $this->strdescripcionopciones = $strdescripcionopciones;

        return $this;
    }

    /**
     * Get strdescripcionopciones
     *
     * @return string 
     */
    public function getStrdescripcionopciones()
    {
        return $this->strdescripcionopciones;
    }

    /**
     * Set strdescripcionimpresion
     *
     * @param string $strdescripcionimpresion
     * @return Reporteslenguaje
     */
    public function setStrdescripcionimpresion($strdescripcionimpresion)
    {
        $this->strdescripcionimpresion = $strdescripcionimpresion;

        return $this;
    }

    /**
     * Get strdescripcionimpresion
     *
     * @return string 
     */
    public function getStrdescripcionimpresion()
    {
        return $this->strdescripcionimpresion;
    }

    /**
     * Set memayuda
     *
     * @param string $memayuda
     * @return Reporteslenguaje
     */
    public function setMemayuda($memayuda)
    {
        $this->memayuda = $memayuda;

        return $this;
    }

    /**
     * Get memayuda
     *
     * @return string 
     */
    public function getMemayuda()
    {
        return $this->memayuda;
    }

    /**
     * Set memayudaseleccion
     *
     * @param string $memayudaseleccion
     * @return Reporteslenguaje
     */
    public function setMemayudaseleccion($memayudaseleccion)
    {
        $this->memayudaseleccion = $memayudaseleccion;

        return $this;
    }

    /**
     * Get memayudaseleccion
     *
     * @return string 
     */
    public function getMemayudaseleccion()
    {
        return $this->memayudaseleccion;
    }

    /**
     * Set memayudaopciones
     *
     * @param string $memayudaopciones
     * @return Reporteslenguaje
     */
    public function setMemayudaopciones($memayudaopciones)
    {
        $this->memayudaopciones = $memayudaopciones;

        return $this;
    }

    /**
     * Get memayudaopciones
     *
     * @return string 
     */
    public function getMemayudaopciones()
    {
        return $this->memayudaopciones;
    }

    /**
     * Set memayudaimpresion
     *
     * @param string $memayudaimpresion
     * @return Reporteslenguaje
     */
    public function setMemayudaimpresion($memayudaimpresion)
    {
        $this->memayudaimpresion = $memayudaimpresion;

        return $this;
    }

    /**
     * Get memayudaimpresion
     *
     * @return string 
     */
    public function getMemayudaimpresion()
    {
        return $this->memayudaimpresion;
    }
}
