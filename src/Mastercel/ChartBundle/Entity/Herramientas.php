<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Herramientas
 *
 * @ORM\Table(name="Herramientas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrHerramienta_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"StrNumeroSerie"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Herramientas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumHerramienta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numherramientaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrHerramienta_ky", type="string", length=10, nullable=true)
     */
    private $strherramientaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNumeroSerie", type="string", length=20, nullable=true)
     */
    private $strnumeroserie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteSiguienteMantenimiento", type="datetime", nullable=true)
     */
    private $dtesiguientemantenimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteUltimoMantenimiento", type="datetime", nullable=true)
     */
    private $dteultimomantenimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteUltimaReparacion", type="datetime", nullable=true)
     */
    private $dteultimareparacion;

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalHorasUso", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalhorasuso = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalUnidadesProcesadas", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalunidadesprocesadas = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDisponibilidad", type="integer", nullable=true)
     */
    private $numtipodisponibilidad = '0';

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
     * Get numherramientaId
     *
     * @return integer 
     */
    public function getNumherramientaId()
    {
        return $this->numherramientaId;
    }

    /**
     * Set strherramientaKy
     *
     * @param string $strherramientaKy
     * @return Herramientas
     */
    public function setStrherramientaKy($strherramientaKy)
    {
        $this->strherramientaKy = $strherramientaKy;

        return $this;
    }

    /**
     * Get strherramientaKy
     *
     * @return string 
     */
    public function getStrherramientaKy()
    {
        return $this->strherramientaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Herramientas
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
     * Set strnumeroserie
     *
     * @param string $strnumeroserie
     * @return Herramientas
     */
    public function setStrnumeroserie($strnumeroserie)
    {
        $this->strnumeroserie = $strnumeroserie;

        return $this;
    }

    /**
     * Get strnumeroserie
     *
     * @return string 
     */
    public function getStrnumeroserie()
    {
        return $this->strnumeroserie;
    }

    /**
     * Set dtesiguientemantenimiento
     *
     * @param \DateTime $dtesiguientemantenimiento
     * @return Herramientas
     */
    public function setDtesiguientemantenimiento($dtesiguientemantenimiento)
    {
        $this->dtesiguientemantenimiento = $dtesiguientemantenimiento;

        return $this;
    }

    /**
     * Get dtesiguientemantenimiento
     *
     * @return \DateTime 
     */
    public function getDtesiguientemantenimiento()
    {
        return $this->dtesiguientemantenimiento;
    }

    /**
     * Set dteultimomantenimiento
     *
     * @param \DateTime $dteultimomantenimiento
     * @return Herramientas
     */
    public function setDteultimomantenimiento($dteultimomantenimiento)
    {
        $this->dteultimomantenimiento = $dteultimomantenimiento;

        return $this;
    }

    /**
     * Get dteultimomantenimiento
     *
     * @return \DateTime 
     */
    public function getDteultimomantenimiento()
    {
        return $this->dteultimomantenimiento;
    }

    /**
     * Set dteultimareparacion
     *
     * @param \DateTime $dteultimareparacion
     * @return Herramientas
     */
    public function setDteultimareparacion($dteultimareparacion)
    {
        $this->dteultimareparacion = $dteultimareparacion;

        return $this;
    }

    /**
     * Get dteultimareparacion
     *
     * @return \DateTime 
     */
    public function getDteultimareparacion()
    {
        return $this->dteultimareparacion;
    }

    /**
     * Set numtotalhorasuso
     *
     * @param float $numtotalhorasuso
     * @return Herramientas
     */
    public function setNumtotalhorasuso($numtotalhorasuso)
    {
        $this->numtotalhorasuso = $numtotalhorasuso;

        return $this;
    }

    /**
     * Get numtotalhorasuso
     *
     * @return float 
     */
    public function getNumtotalhorasuso()
    {
        return $this->numtotalhorasuso;
    }

    /**
     * Set numtotalunidadesprocesadas
     *
     * @param float $numtotalunidadesprocesadas
     * @return Herramientas
     */
    public function setNumtotalunidadesprocesadas($numtotalunidadesprocesadas)
    {
        $this->numtotalunidadesprocesadas = $numtotalunidadesprocesadas;

        return $this;
    }

    /**
     * Get numtotalunidadesprocesadas
     *
     * @return float 
     */
    public function getNumtotalunidadesprocesadas()
    {
        return $this->numtotalunidadesprocesadas;
    }

    /**
     * Set numtipodisponibilidad
     *
     * @param integer $numtipodisponibilidad
     * @return Herramientas
     */
    public function setNumtipodisponibilidad($numtipodisponibilidad)
    {
        $this->numtipodisponibilidad = $numtipodisponibilidad;

        return $this;
    }

    /**
     * Get numtipodisponibilidad
     *
     * @return integer 
     */
    public function getNumtipodisponibilidad()
    {
        return $this->numtipodisponibilidad;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Herramientas
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
     * @return Herramientas
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
     * @return Herramientas
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
     * @return Herramientas
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
     * @return Herramientas
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
