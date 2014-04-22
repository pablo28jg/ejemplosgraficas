<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontablesreportes
 *
 * @ORM\Table(name="CuentasContablesReportes", indexes={@ORM\Index(name="Indice_1", columns={"StrReporte_ky"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumTipo"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Cuentascontablesreportes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numreporteId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReporte_ky", type="string", length=60, nullable=true)
     */
    private $strreporteKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalLineas", type="integer", nullable=true)
     */
    private $numtotallineas = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalColumnas", type="integer", nullable=true)
     */
    private $numtotalcolumnas = '0';

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
     * Get numreporteId
     *
     * @return integer 
     */
    public function getNumreporteId()
    {
        return $this->numreporteId;
    }

    /**
     * Set strreporteKy
     *
     * @param string $strreporteKy
     * @return Cuentascontablesreportes
     */
    public function setStrreporteKy($strreporteKy)
    {
        $this->strreporteKy = $strreporteKy;

        return $this;
    }

    /**
     * Get strreporteKy
     *
     * @return string 
     */
    public function getStrreporteKy()
    {
        return $this->strreporteKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Cuentascontablesreportes
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
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Cuentascontablesreportes
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
     * Set numtotallineas
     *
     * @param integer $numtotallineas
     * @return Cuentascontablesreportes
     */
    public function setNumtotallineas($numtotallineas)
    {
        $this->numtotallineas = $numtotallineas;

        return $this;
    }

    /**
     * Get numtotallineas
     *
     * @return integer 
     */
    public function getNumtotallineas()
    {
        return $this->numtotallineas;
    }

    /**
     * Set numtotalcolumnas
     *
     * @param integer $numtotalcolumnas
     * @return Cuentascontablesreportes
     */
    public function setNumtotalcolumnas($numtotalcolumnas)
    {
        $this->numtotalcolumnas = $numtotalcolumnas;

        return $this;
    }

    /**
     * Get numtotalcolumnas
     *
     * @return integer 
     */
    public function getNumtotalcolumnas()
    {
        return $this->numtotalcolumnas;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Cuentascontablesreportes
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
     * @return Cuentascontablesreportes
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
     * @return Cuentascontablesreportes
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
     * @return Cuentascontablesreportes
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
     * @return Cuentascontablesreportes
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
