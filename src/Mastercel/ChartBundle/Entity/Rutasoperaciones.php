<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rutasoperaciones
 *
 * @ORM\Table(name="RutasOperaciones", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrRutaOperacion_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Rutasoperaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumRutaOperacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numrutaoperacionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrRutaOperacion_ky", type="string", length=10, nullable=true)
     */
    private $strrutaoperacionKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalOperaciones", type="integer", nullable=true)
     */
    private $numtotaloperaciones = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalTiempoCola", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotaltiempocola = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalTiempoPreparacionMaquina", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotaltiempopreparacionmaquina = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalTiempoPreparacionLabor", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotaltiempopreparacionlabor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalTiempoProcesoMaquina", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotaltiempoprocesomaquina = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalTiempoProcesoLabor", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotaltiempoprocesolabor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalTiempoEspera", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotaltiempoespera = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalTiempoTraslado", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotaltiempotraslado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoCola", type="integer", nullable=true)
     */
    private $numtotalcostocola = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoPreparacionMaquina", type="integer", nullable=true)
     */
    private $numtotalcostopreparacionmaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoPreparacionLabor", type="integer", nullable=true)
     */
    private $numtotalcostopreparacionlabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoProcesoMaquina", type="integer", nullable=true)
     */
    private $numtotalcostoprocesomaquina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoProcesoLabor", type="integer", nullable=true)
     */
    private $numtotalcostoprocesolabor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoEspera", type="integer", nullable=true)
     */
    private $numtotalcostoespera = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoTraslado", type="integer", nullable=true)
     */
    private $numtotalcostotraslado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoGastoIndirecto", type="integer", nullable=true)
     */
    private $numtotalcostogastoindirecto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoSubcontrato", type="integer", nullable=true)
     */
    private $numtotalcostosubcontrato = '0';

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
     * Get numrutaoperacionId
     *
     * @return integer 
     */
    public function getNumrutaoperacionId()
    {
        return $this->numrutaoperacionId;
    }

    /**
     * Set strrutaoperacionKy
     *
     * @param string $strrutaoperacionKy
     * @return Rutasoperaciones
     */
    public function setStrrutaoperacionKy($strrutaoperacionKy)
    {
        $this->strrutaoperacionKy = $strrutaoperacionKy;

        return $this;
    }

    /**
     * Get strrutaoperacionKy
     *
     * @return string 
     */
    public function getStrrutaoperacionKy()
    {
        return $this->strrutaoperacionKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Rutasoperaciones
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
     * Set numtotaloperaciones
     *
     * @param integer $numtotaloperaciones
     * @return Rutasoperaciones
     */
    public function setNumtotaloperaciones($numtotaloperaciones)
    {
        $this->numtotaloperaciones = $numtotaloperaciones;

        return $this;
    }

    /**
     * Get numtotaloperaciones
     *
     * @return integer 
     */
    public function getNumtotaloperaciones()
    {
        return $this->numtotaloperaciones;
    }

    /**
     * Set numtotaltiempocola
     *
     * @param float $numtotaltiempocola
     * @return Rutasoperaciones
     */
    public function setNumtotaltiempocola($numtotaltiempocola)
    {
        $this->numtotaltiempocola = $numtotaltiempocola;

        return $this;
    }

    /**
     * Get numtotaltiempocola
     *
     * @return float 
     */
    public function getNumtotaltiempocola()
    {
        return $this->numtotaltiempocola;
    }

    /**
     * Set numtotaltiempopreparacionmaquina
     *
     * @param float $numtotaltiempopreparacionmaquina
     * @return Rutasoperaciones
     */
    public function setNumtotaltiempopreparacionmaquina($numtotaltiempopreparacionmaquina)
    {
        $this->numtotaltiempopreparacionmaquina = $numtotaltiempopreparacionmaquina;

        return $this;
    }

    /**
     * Get numtotaltiempopreparacionmaquina
     *
     * @return float 
     */
    public function getNumtotaltiempopreparacionmaquina()
    {
        return $this->numtotaltiempopreparacionmaquina;
    }

    /**
     * Set numtotaltiempopreparacionlabor
     *
     * @param float $numtotaltiempopreparacionlabor
     * @return Rutasoperaciones
     */
    public function setNumtotaltiempopreparacionlabor($numtotaltiempopreparacionlabor)
    {
        $this->numtotaltiempopreparacionlabor = $numtotaltiempopreparacionlabor;

        return $this;
    }

    /**
     * Get numtotaltiempopreparacionlabor
     *
     * @return float 
     */
    public function getNumtotaltiempopreparacionlabor()
    {
        return $this->numtotaltiempopreparacionlabor;
    }

    /**
     * Set numtotaltiempoprocesomaquina
     *
     * @param float $numtotaltiempoprocesomaquina
     * @return Rutasoperaciones
     */
    public function setNumtotaltiempoprocesomaquina($numtotaltiempoprocesomaquina)
    {
        $this->numtotaltiempoprocesomaquina = $numtotaltiempoprocesomaquina;

        return $this;
    }

    /**
     * Get numtotaltiempoprocesomaquina
     *
     * @return float 
     */
    public function getNumtotaltiempoprocesomaquina()
    {
        return $this->numtotaltiempoprocesomaquina;
    }

    /**
     * Set numtotaltiempoprocesolabor
     *
     * @param float $numtotaltiempoprocesolabor
     * @return Rutasoperaciones
     */
    public function setNumtotaltiempoprocesolabor($numtotaltiempoprocesolabor)
    {
        $this->numtotaltiempoprocesolabor = $numtotaltiempoprocesolabor;

        return $this;
    }

    /**
     * Get numtotaltiempoprocesolabor
     *
     * @return float 
     */
    public function getNumtotaltiempoprocesolabor()
    {
        return $this->numtotaltiempoprocesolabor;
    }

    /**
     * Set numtotaltiempoespera
     *
     * @param float $numtotaltiempoespera
     * @return Rutasoperaciones
     */
    public function setNumtotaltiempoespera($numtotaltiempoespera)
    {
        $this->numtotaltiempoespera = $numtotaltiempoespera;

        return $this;
    }

    /**
     * Get numtotaltiempoespera
     *
     * @return float 
     */
    public function getNumtotaltiempoespera()
    {
        return $this->numtotaltiempoespera;
    }

    /**
     * Set numtotaltiempotraslado
     *
     * @param float $numtotaltiempotraslado
     * @return Rutasoperaciones
     */
    public function setNumtotaltiempotraslado($numtotaltiempotraslado)
    {
        $this->numtotaltiempotraslado = $numtotaltiempotraslado;

        return $this;
    }

    /**
     * Get numtotaltiempotraslado
     *
     * @return float 
     */
    public function getNumtotaltiempotraslado()
    {
        return $this->numtotaltiempotraslado;
    }

    /**
     * Set numtotalcostocola
     *
     * @param integer $numtotalcostocola
     * @return Rutasoperaciones
     */
    public function setNumtotalcostocola($numtotalcostocola)
    {
        $this->numtotalcostocola = $numtotalcostocola;

        return $this;
    }

    /**
     * Get numtotalcostocola
     *
     * @return integer 
     */
    public function getNumtotalcostocola()
    {
        return $this->numtotalcostocola;
    }

    /**
     * Set numtotalcostopreparacionmaquina
     *
     * @param integer $numtotalcostopreparacionmaquina
     * @return Rutasoperaciones
     */
    public function setNumtotalcostopreparacionmaquina($numtotalcostopreparacionmaquina)
    {
        $this->numtotalcostopreparacionmaquina = $numtotalcostopreparacionmaquina;

        return $this;
    }

    /**
     * Get numtotalcostopreparacionmaquina
     *
     * @return integer 
     */
    public function getNumtotalcostopreparacionmaquina()
    {
        return $this->numtotalcostopreparacionmaquina;
    }

    /**
     * Set numtotalcostopreparacionlabor
     *
     * @param integer $numtotalcostopreparacionlabor
     * @return Rutasoperaciones
     */
    public function setNumtotalcostopreparacionlabor($numtotalcostopreparacionlabor)
    {
        $this->numtotalcostopreparacionlabor = $numtotalcostopreparacionlabor;

        return $this;
    }

    /**
     * Get numtotalcostopreparacionlabor
     *
     * @return integer 
     */
    public function getNumtotalcostopreparacionlabor()
    {
        return $this->numtotalcostopreparacionlabor;
    }

    /**
     * Set numtotalcostoprocesomaquina
     *
     * @param integer $numtotalcostoprocesomaquina
     * @return Rutasoperaciones
     */
    public function setNumtotalcostoprocesomaquina($numtotalcostoprocesomaquina)
    {
        $this->numtotalcostoprocesomaquina = $numtotalcostoprocesomaquina;

        return $this;
    }

    /**
     * Get numtotalcostoprocesomaquina
     *
     * @return integer 
     */
    public function getNumtotalcostoprocesomaquina()
    {
        return $this->numtotalcostoprocesomaquina;
    }

    /**
     * Set numtotalcostoprocesolabor
     *
     * @param integer $numtotalcostoprocesolabor
     * @return Rutasoperaciones
     */
    public function setNumtotalcostoprocesolabor($numtotalcostoprocesolabor)
    {
        $this->numtotalcostoprocesolabor = $numtotalcostoprocesolabor;

        return $this;
    }

    /**
     * Get numtotalcostoprocesolabor
     *
     * @return integer 
     */
    public function getNumtotalcostoprocesolabor()
    {
        return $this->numtotalcostoprocesolabor;
    }

    /**
     * Set numtotalcostoespera
     *
     * @param integer $numtotalcostoespera
     * @return Rutasoperaciones
     */
    public function setNumtotalcostoespera($numtotalcostoespera)
    {
        $this->numtotalcostoespera = $numtotalcostoespera;

        return $this;
    }

    /**
     * Get numtotalcostoespera
     *
     * @return integer 
     */
    public function getNumtotalcostoespera()
    {
        return $this->numtotalcostoespera;
    }

    /**
     * Set numtotalcostotraslado
     *
     * @param integer $numtotalcostotraslado
     * @return Rutasoperaciones
     */
    public function setNumtotalcostotraslado($numtotalcostotraslado)
    {
        $this->numtotalcostotraslado = $numtotalcostotraslado;

        return $this;
    }

    /**
     * Get numtotalcostotraslado
     *
     * @return integer 
     */
    public function getNumtotalcostotraslado()
    {
        return $this->numtotalcostotraslado;
    }

    /**
     * Set numtotalcostogastoindirecto
     *
     * @param integer $numtotalcostogastoindirecto
     * @return Rutasoperaciones
     */
    public function setNumtotalcostogastoindirecto($numtotalcostogastoindirecto)
    {
        $this->numtotalcostogastoindirecto = $numtotalcostogastoindirecto;

        return $this;
    }

    /**
     * Get numtotalcostogastoindirecto
     *
     * @return integer 
     */
    public function getNumtotalcostogastoindirecto()
    {
        return $this->numtotalcostogastoindirecto;
    }

    /**
     * Set numtotalcostosubcontrato
     *
     * @param integer $numtotalcostosubcontrato
     * @return Rutasoperaciones
     */
    public function setNumtotalcostosubcontrato($numtotalcostosubcontrato)
    {
        $this->numtotalcostosubcontrato = $numtotalcostosubcontrato;

        return $this;
    }

    /**
     * Get numtotalcostosubcontrato
     *
     * @return integer 
     */
    public function getNumtotalcostosubcontrato()
    {
        return $this->numtotalcostosubcontrato;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Rutasoperaciones
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
     * @return Rutasoperaciones
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
     * @return Rutasoperaciones
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
     * @return Rutasoperaciones
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
     * @return Rutasoperaciones
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
