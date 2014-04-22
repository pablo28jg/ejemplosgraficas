<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maquinas
 *
 * @ORM\Table(name="Maquinas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrMaquina_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumCentroTrabajo_id"}), @ORM\Index(name="Indice_4", columns={"StrNumeroSerie"}), @ORM\Index(name="Indice_5", columns={"DteActualizacion"}), @ORM\Index(name="Indice_6", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Maquinas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMaquina_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummaquinaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrMaquina_ky", type="string", length=10, nullable=true)
     */
    private $strmaquinaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroTrabajo_id", type="integer", nullable=true)
     */
    private $numcentrotrabajoId = '0';

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
     * Get nummaquinaId
     *
     * @return integer 
     */
    public function getNummaquinaId()
    {
        return $this->nummaquinaId;
    }

    /**
     * Set strmaquinaKy
     *
     * @param string $strmaquinaKy
     * @return Maquinas
     */
    public function setStrmaquinaKy($strmaquinaKy)
    {
        $this->strmaquinaKy = $strmaquinaKy;

        return $this;
    }

    /**
     * Get strmaquinaKy
     *
     * @return string 
     */
    public function getStrmaquinaKy()
    {
        return $this->strmaquinaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Maquinas
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
     * Set numcentrotrabajoId
     *
     * @param integer $numcentrotrabajoId
     * @return Maquinas
     */
    public function setNumcentrotrabajoId($numcentrotrabajoId)
    {
        $this->numcentrotrabajoId = $numcentrotrabajoId;

        return $this;
    }

    /**
     * Get numcentrotrabajoId
     *
     * @return integer 
     */
    public function getNumcentrotrabajoId()
    {
        return $this->numcentrotrabajoId;
    }

    /**
     * Set strnumeroserie
     *
     * @param string $strnumeroserie
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
     * @return Maquinas
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
