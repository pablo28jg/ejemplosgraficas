<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarifasservicios
 *
 * @ORM\Table(name="TarifasServicios", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrTarifaServicio_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumCategoria_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Tarifasservicios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaServicio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numtarifaservicioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTarifaServicio_ky", type="string", length=10, nullable=true)
     */
    private $strtarifaservicioKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=true)
     */
    private $numcategoriaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_id", type="integer", nullable=true)
     */
    private $numimpuestoId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogImpuestoIncluido", type="boolean", nullable=true)
     */
    private $logimpuestoincluido = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumHorasDia", type="integer", nullable=true)
     */
    private $numhorasdia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasSemana", type="integer", nullable=true)
     */
    private $numdiassemana = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogExcederHorasDia", type="boolean", nullable=true)
     */
    private $logexcederhorasdia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaNivel_1", type="integer", nullable=true)
     */
    private $numtarifanivel1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaNivel_2", type="integer", nullable=true)
     */
    private $numtarifanivel2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaNivel_3", type="integer", nullable=true)
     */
    private $numtarifanivel3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaNivel_4", type="integer", nullable=true)
     */
    private $numtarifanivel4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaNivel_5", type="integer", nullable=true)
     */
    private $numtarifanivel5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaNivel_6", type="integer", nullable=true)
     */
    private $numtarifanivel6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandar", type="integer", nullable=true)
     */
    private $numcostoestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoPromedio", type="integer", nullable=true)
     */
    private $numcostopromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoReal", type="integer", nullable=true)
     */
    private $numcostoreal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuenta_id", type="integer", nullable=true)
     */
    private $numcuentaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCapturo_id", type="integer", nullable=true)
     */
    private $numcapturoId = '0';

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
     * Get numtarifaservicioId
     *
     * @return integer 
     */
    public function getNumtarifaservicioId()
    {
        return $this->numtarifaservicioId;
    }

    /**
     * Set strtarifaservicioKy
     *
     * @param string $strtarifaservicioKy
     * @return Tarifasservicios
     */
    public function setStrtarifaservicioKy($strtarifaservicioKy)
    {
        $this->strtarifaservicioKy = $strtarifaservicioKy;

        return $this;
    }

    /**
     * Get strtarifaservicioKy
     *
     * @return string 
     */
    public function getStrtarifaservicioKy()
    {
        return $this->strtarifaservicioKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tarifasservicios
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
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Tarifasservicios
     */
    public function setNumcategoriaId($numcategoriaId)
    {
        $this->numcategoriaId = $numcategoriaId;

        return $this;
    }

    /**
     * Get numcategoriaId
     *
     * @return integer 
     */
    public function getNumcategoriaId()
    {
        return $this->numcategoriaId;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Tarifasservicios
     */
    public function setNummonedaId($nummonedaId)
    {
        $this->nummonedaId = $nummonedaId;

        return $this;
    }

    /**
     * Get nummonedaId
     *
     * @return integer 
     */
    public function getNummonedaId()
    {
        return $this->nummonedaId;
    }

    /**
     * Set numimpuestoId
     *
     * @param integer $numimpuestoId
     * @return Tarifasservicios
     */
    public function setNumimpuestoId($numimpuestoId)
    {
        $this->numimpuestoId = $numimpuestoId;

        return $this;
    }

    /**
     * Get numimpuestoId
     *
     * @return integer 
     */
    public function getNumimpuestoId()
    {
        return $this->numimpuestoId;
    }

    /**
     * Set logimpuestoincluido
     *
     * @param boolean $logimpuestoincluido
     * @return Tarifasservicios
     */
    public function setLogimpuestoincluido($logimpuestoincluido)
    {
        $this->logimpuestoincluido = $logimpuestoincluido;

        return $this;
    }

    /**
     * Get logimpuestoincluido
     *
     * @return boolean 
     */
    public function getLogimpuestoincluido()
    {
        return $this->logimpuestoincluido;
    }

    /**
     * Set numhorasdia
     *
     * @param integer $numhorasdia
     * @return Tarifasservicios
     */
    public function setNumhorasdia($numhorasdia)
    {
        $this->numhorasdia = $numhorasdia;

        return $this;
    }

    /**
     * Get numhorasdia
     *
     * @return integer 
     */
    public function getNumhorasdia()
    {
        return $this->numhorasdia;
    }

    /**
     * Set numdiassemana
     *
     * @param integer $numdiassemana
     * @return Tarifasservicios
     */
    public function setNumdiassemana($numdiassemana)
    {
        $this->numdiassemana = $numdiassemana;

        return $this;
    }

    /**
     * Get numdiassemana
     *
     * @return integer 
     */
    public function getNumdiassemana()
    {
        return $this->numdiassemana;
    }

    /**
     * Set logexcederhorasdia
     *
     * @param boolean $logexcederhorasdia
     * @return Tarifasservicios
     */
    public function setLogexcederhorasdia($logexcederhorasdia)
    {
        $this->logexcederhorasdia = $logexcederhorasdia;

        return $this;
    }

    /**
     * Get logexcederhorasdia
     *
     * @return boolean 
     */
    public function getLogexcederhorasdia()
    {
        return $this->logexcederhorasdia;
    }

    /**
     * Set numtarifanivel1
     *
     * @param integer $numtarifanivel1
     * @return Tarifasservicios
     */
    public function setNumtarifanivel1($numtarifanivel1)
    {
        $this->numtarifanivel1 = $numtarifanivel1;

        return $this;
    }

    /**
     * Get numtarifanivel1
     *
     * @return integer 
     */
    public function getNumtarifanivel1()
    {
        return $this->numtarifanivel1;
    }

    /**
     * Set numtarifanivel2
     *
     * @param integer $numtarifanivel2
     * @return Tarifasservicios
     */
    public function setNumtarifanivel2($numtarifanivel2)
    {
        $this->numtarifanivel2 = $numtarifanivel2;

        return $this;
    }

    /**
     * Get numtarifanivel2
     *
     * @return integer 
     */
    public function getNumtarifanivel2()
    {
        return $this->numtarifanivel2;
    }

    /**
     * Set numtarifanivel3
     *
     * @param integer $numtarifanivel3
     * @return Tarifasservicios
     */
    public function setNumtarifanivel3($numtarifanivel3)
    {
        $this->numtarifanivel3 = $numtarifanivel3;

        return $this;
    }

    /**
     * Get numtarifanivel3
     *
     * @return integer 
     */
    public function getNumtarifanivel3()
    {
        return $this->numtarifanivel3;
    }

    /**
     * Set numtarifanivel4
     *
     * @param integer $numtarifanivel4
     * @return Tarifasservicios
     */
    public function setNumtarifanivel4($numtarifanivel4)
    {
        $this->numtarifanivel4 = $numtarifanivel4;

        return $this;
    }

    /**
     * Get numtarifanivel4
     *
     * @return integer 
     */
    public function getNumtarifanivel4()
    {
        return $this->numtarifanivel4;
    }

    /**
     * Set numtarifanivel5
     *
     * @param integer $numtarifanivel5
     * @return Tarifasservicios
     */
    public function setNumtarifanivel5($numtarifanivel5)
    {
        $this->numtarifanivel5 = $numtarifanivel5;

        return $this;
    }

    /**
     * Get numtarifanivel5
     *
     * @return integer 
     */
    public function getNumtarifanivel5()
    {
        return $this->numtarifanivel5;
    }

    /**
     * Set numtarifanivel6
     *
     * @param integer $numtarifanivel6
     * @return Tarifasservicios
     */
    public function setNumtarifanivel6($numtarifanivel6)
    {
        $this->numtarifanivel6 = $numtarifanivel6;

        return $this;
    }

    /**
     * Get numtarifanivel6
     *
     * @return integer 
     */
    public function getNumtarifanivel6()
    {
        return $this->numtarifanivel6;
    }

    /**
     * Set numcostoestandar
     *
     * @param integer $numcostoestandar
     * @return Tarifasservicios
     */
    public function setNumcostoestandar($numcostoestandar)
    {
        $this->numcostoestandar = $numcostoestandar;

        return $this;
    }

    /**
     * Get numcostoestandar
     *
     * @return integer 
     */
    public function getNumcostoestandar()
    {
        return $this->numcostoestandar;
    }

    /**
     * Set numcostopromedio
     *
     * @param integer $numcostopromedio
     * @return Tarifasservicios
     */
    public function setNumcostopromedio($numcostopromedio)
    {
        $this->numcostopromedio = $numcostopromedio;

        return $this;
    }

    /**
     * Get numcostopromedio
     *
     * @return integer 
     */
    public function getNumcostopromedio()
    {
        return $this->numcostopromedio;
    }

    /**
     * Set numcostoreal
     *
     * @param integer $numcostoreal
     * @return Tarifasservicios
     */
    public function setNumcostoreal($numcostoreal)
    {
        $this->numcostoreal = $numcostoreal;

        return $this;
    }

    /**
     * Get numcostoreal
     *
     * @return integer 
     */
    public function getNumcostoreal()
    {
        return $this->numcostoreal;
    }

    /**
     * Set numcuentaId
     *
     * @param integer $numcuentaId
     * @return Tarifasservicios
     */
    public function setNumcuentaId($numcuentaId)
    {
        $this->numcuentaId = $numcuentaId;

        return $this;
    }

    /**
     * Get numcuentaId
     *
     * @return integer 
     */
    public function getNumcuentaId()
    {
        return $this->numcuentaId;
    }

    /**
     * Set numcapturoId
     *
     * @param integer $numcapturoId
     * @return Tarifasservicios
     */
    public function setNumcapturoId($numcapturoId)
    {
        $this->numcapturoId = $numcapturoId;

        return $this;
    }

    /**
     * Get numcapturoId
     *
     * @return integer 
     */
    public function getNumcapturoId()
    {
        return $this->numcapturoId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Tarifasservicios
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
     * @return Tarifasservicios
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
     * @return Tarifasservicios
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
     * @return Tarifasservicios
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
     * @return Tarifasservicios
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
