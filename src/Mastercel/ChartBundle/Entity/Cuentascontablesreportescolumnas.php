<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontablesreportescolumnas
 *
 * @ORM\Table(name="CuentasContablesReportesColumnas")
 * @ORM\Entity
 */
class Cuentascontablesreportescolumnas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumColumna_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcolumnaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numreporteId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreLetra", type="string", length=30, nullable=true)
     */
    private $strnombreletra;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstiloLetra", type="integer", nullable=true)
     */
    private $numtipoestiloletra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTamanoLetra", type="integer", nullable=true)
     */
    private $numtamanoletra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumColorLetra", type="integer", nullable=true)
     */
    private $numcolorletra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAlineacion", type="integer", nullable=true)
     */
    private $numtipoalineacion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogImprimir", type="boolean", nullable=true)
     */
    private $logimprimir = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogInsertarLineaBlanco", type="boolean", nullable=true)
     */
    private $loginsertarlineablanco = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoColumnas", type="integer", nullable=true)
     */
    private $numtipocolumnas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumFormato", type="string", length=20, nullable=true)
     */
    private $numformato;



    /**
     * Set numcolumnaId
     *
     * @param integer $numcolumnaId
     * @return Cuentascontablesreportescolumnas
     */
    public function setNumcolumnaId($numcolumnaId)
    {
        $this->numcolumnaId = $numcolumnaId;

        return $this;
    }

    /**
     * Get numcolumnaId
     *
     * @return integer 
     */
    public function getNumcolumnaId()
    {
        return $this->numcolumnaId;
    }

    /**
     * Set numreporteId
     *
     * @param integer $numreporteId
     * @return Cuentascontablesreportescolumnas
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Cuentascontablesreportescolumnas
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
     * Set strnombreletra
     *
     * @param string $strnombreletra
     * @return Cuentascontablesreportescolumnas
     */
    public function setStrnombreletra($strnombreletra)
    {
        $this->strnombreletra = $strnombreletra;

        return $this;
    }

    /**
     * Get strnombreletra
     *
     * @return string 
     */
    public function getStrnombreletra()
    {
        return $this->strnombreletra;
    }

    /**
     * Set numtipoestiloletra
     *
     * @param integer $numtipoestiloletra
     * @return Cuentascontablesreportescolumnas
     */
    public function setNumtipoestiloletra($numtipoestiloletra)
    {
        $this->numtipoestiloletra = $numtipoestiloletra;

        return $this;
    }

    /**
     * Get numtipoestiloletra
     *
     * @return integer 
     */
    public function getNumtipoestiloletra()
    {
        return $this->numtipoestiloletra;
    }

    /**
     * Set numtamanoletra
     *
     * @param integer $numtamanoletra
     * @return Cuentascontablesreportescolumnas
     */
    public function setNumtamanoletra($numtamanoletra)
    {
        $this->numtamanoletra = $numtamanoletra;

        return $this;
    }

    /**
     * Get numtamanoletra
     *
     * @return integer 
     */
    public function getNumtamanoletra()
    {
        return $this->numtamanoletra;
    }

    /**
     * Set numcolorletra
     *
     * @param integer $numcolorletra
     * @return Cuentascontablesreportescolumnas
     */
    public function setNumcolorletra($numcolorletra)
    {
        $this->numcolorletra = $numcolorletra;

        return $this;
    }

    /**
     * Get numcolorletra
     *
     * @return integer 
     */
    public function getNumcolorletra()
    {
        return $this->numcolorletra;
    }

    /**
     * Set numtipoalineacion
     *
     * @param integer $numtipoalineacion
     * @return Cuentascontablesreportescolumnas
     */
    public function setNumtipoalineacion($numtipoalineacion)
    {
        $this->numtipoalineacion = $numtipoalineacion;

        return $this;
    }

    /**
     * Get numtipoalineacion
     *
     * @return integer 
     */
    public function getNumtipoalineacion()
    {
        return $this->numtipoalineacion;
    }

    /**
     * Set logimprimir
     *
     * @param boolean $logimprimir
     * @return Cuentascontablesreportescolumnas
     */
    public function setLogimprimir($logimprimir)
    {
        $this->logimprimir = $logimprimir;

        return $this;
    }

    /**
     * Get logimprimir
     *
     * @return boolean 
     */
    public function getLogimprimir()
    {
        return $this->logimprimir;
    }

    /**
     * Set loginsertarlineablanco
     *
     * @param boolean $loginsertarlineablanco
     * @return Cuentascontablesreportescolumnas
     */
    public function setLoginsertarlineablanco($loginsertarlineablanco)
    {
        $this->loginsertarlineablanco = $loginsertarlineablanco;

        return $this;
    }

    /**
     * Get loginsertarlineablanco
     *
     * @return boolean 
     */
    public function getLoginsertarlineablanco()
    {
        return $this->loginsertarlineablanco;
    }

    /**
     * Set numtipocolumnas
     *
     * @param integer $numtipocolumnas
     * @return Cuentascontablesreportescolumnas
     */
    public function setNumtipocolumnas($numtipocolumnas)
    {
        $this->numtipocolumnas = $numtipocolumnas;

        return $this;
    }

    /**
     * Get numtipocolumnas
     *
     * @return integer 
     */
    public function getNumtipocolumnas()
    {
        return $this->numtipocolumnas;
    }

    /**
     * Set numformato
     *
     * @param string $numformato
     * @return Cuentascontablesreportescolumnas
     */
    public function setNumformato($numformato)
    {
        $this->numformato = $numformato;

        return $this;
    }

    /**
     * Get numformato
     *
     * @return string 
     */
    public function getNumformato()
    {
        return $this->numformato;
    }
}
