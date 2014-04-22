<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condiciones
 *
 * @ORM\Table(name="Condiciones", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrCondicion_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Condiciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCondicion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcondicionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCondicion_ky", type="string", length=10, nullable=true)
     */
    private $strcondicionKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPago", type="integer", nullable=true)
     */
    private $numtipopago = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumParcialidades", type="integer", nullable=true)
     */
    private $numparcialidades = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeDescuento_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajedescuento1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeDescuento_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajedescuento2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRequiereAnticipo", type="boolean", nullable=true)
     */
    private $logrequiereanticipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasCredito", type="integer", nullable=true)
     */
    private $numdiascredito = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCalculoVencimiento", type="integer", nullable=true)
     */
    private $numtipocalculovencimiento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasProntoPago", type="integer", nullable=true)
     */
    private $numdiasprontopago = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjDsctProntoPago_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjdsctprontopago1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjDsctProntoPago_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjdsctprontopago2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaDescuento_id", type="integer", nullable=true)
     */
    private $numcuentadescuentoId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAplicarInteresMoratorios", type="boolean", nullable=true)
     */
    private $logaplicarinteresmoratorios = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCalculoMoratorios", type="integer", nullable=true)
     */
    private $numtipocalculomoratorios = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargoFijoMoratorios", type="integer", nullable=true)
     */
    private $numcargofijomoratorios = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjMoratorios", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjmoratorios = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaIngresos_id", type="integer", nullable=true)
     */
    private $numcuentaingresosId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_id", type="integer", nullable=true)
     */
    private $numimpuestoId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumVencimientosAceptados", type="integer", nullable=true)
     */
    private $numvencimientosaceptados = '0';



    /**
     * Get numcondicionId
     *
     * @return integer 
     */
    public function getNumcondicionId()
    {
        return $this->numcondicionId;
    }

    /**
     * Set strcondicionKy
     *
     * @param string $strcondicionKy
     * @return Condiciones
     */
    public function setStrcondicionKy($strcondicionKy)
    {
        $this->strcondicionKy = $strcondicionKy;

        return $this;
    }

    /**
     * Get strcondicionKy
     *
     * @return string 
     */
    public function getStrcondicionKy()
    {
        return $this->strcondicionKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Condiciones
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
     * Set numtipopago
     *
     * @param integer $numtipopago
     * @return Condiciones
     */
    public function setNumtipopago($numtipopago)
    {
        $this->numtipopago = $numtipopago;

        return $this;
    }

    /**
     * Get numtipopago
     *
     * @return integer 
     */
    public function getNumtipopago()
    {
        return $this->numtipopago;
    }

    /**
     * Set numparcialidades
     *
     * @param integer $numparcialidades
     * @return Condiciones
     */
    public function setNumparcialidades($numparcialidades)
    {
        $this->numparcialidades = $numparcialidades;

        return $this;
    }

    /**
     * Get numparcialidades
     *
     * @return integer 
     */
    public function getNumparcialidades()
    {
        return $this->numparcialidades;
    }

    /**
     * Set numporcentajedescuento1
     *
     * @param float $numporcentajedescuento1
     * @return Condiciones
     */
    public function setNumporcentajedescuento1($numporcentajedescuento1)
    {
        $this->numporcentajedescuento1 = $numporcentajedescuento1;

        return $this;
    }

    /**
     * Get numporcentajedescuento1
     *
     * @return float 
     */
    public function getNumporcentajedescuento1()
    {
        return $this->numporcentajedescuento1;
    }

    /**
     * Set numporcentajedescuento2
     *
     * @param float $numporcentajedescuento2
     * @return Condiciones
     */
    public function setNumporcentajedescuento2($numporcentajedescuento2)
    {
        $this->numporcentajedescuento2 = $numporcentajedescuento2;

        return $this;
    }

    /**
     * Get numporcentajedescuento2
     *
     * @return float 
     */
    public function getNumporcentajedescuento2()
    {
        return $this->numporcentajedescuento2;
    }

    /**
     * Set logrequiereanticipo
     *
     * @param boolean $logrequiereanticipo
     * @return Condiciones
     */
    public function setLogrequiereanticipo($logrequiereanticipo)
    {
        $this->logrequiereanticipo = $logrequiereanticipo;

        return $this;
    }

    /**
     * Get logrequiereanticipo
     *
     * @return boolean 
     */
    public function getLogrequiereanticipo()
    {
        return $this->logrequiereanticipo;
    }

    /**
     * Set numdiascredito
     *
     * @param integer $numdiascredito
     * @return Condiciones
     */
    public function setNumdiascredito($numdiascredito)
    {
        $this->numdiascredito = $numdiascredito;

        return $this;
    }

    /**
     * Get numdiascredito
     *
     * @return integer 
     */
    public function getNumdiascredito()
    {
        return $this->numdiascredito;
    }

    /**
     * Set numtipocalculovencimiento
     *
     * @param integer $numtipocalculovencimiento
     * @return Condiciones
     */
    public function setNumtipocalculovencimiento($numtipocalculovencimiento)
    {
        $this->numtipocalculovencimiento = $numtipocalculovencimiento;

        return $this;
    }

    /**
     * Get numtipocalculovencimiento
     *
     * @return integer 
     */
    public function getNumtipocalculovencimiento()
    {
        return $this->numtipocalculovencimiento;
    }

    /**
     * Set numdiasprontopago
     *
     * @param integer $numdiasprontopago
     * @return Condiciones
     */
    public function setNumdiasprontopago($numdiasprontopago)
    {
        $this->numdiasprontopago = $numdiasprontopago;

        return $this;
    }

    /**
     * Get numdiasprontopago
     *
     * @return integer 
     */
    public function getNumdiasprontopago()
    {
        return $this->numdiasprontopago;
    }

    /**
     * Set numprctjdsctprontopago1
     *
     * @param float $numprctjdsctprontopago1
     * @return Condiciones
     */
    public function setNumprctjdsctprontopago1($numprctjdsctprontopago1)
    {
        $this->numprctjdsctprontopago1 = $numprctjdsctprontopago1;

        return $this;
    }

    /**
     * Get numprctjdsctprontopago1
     *
     * @return float 
     */
    public function getNumprctjdsctprontopago1()
    {
        return $this->numprctjdsctprontopago1;
    }

    /**
     * Set numprctjdsctprontopago2
     *
     * @param float $numprctjdsctprontopago2
     * @return Condiciones
     */
    public function setNumprctjdsctprontopago2($numprctjdsctprontopago2)
    {
        $this->numprctjdsctprontopago2 = $numprctjdsctprontopago2;

        return $this;
    }

    /**
     * Get numprctjdsctprontopago2
     *
     * @return float 
     */
    public function getNumprctjdsctprontopago2()
    {
        return $this->numprctjdsctprontopago2;
    }

    /**
     * Set numcuentadescuentoId
     *
     * @param integer $numcuentadescuentoId
     * @return Condiciones
     */
    public function setNumcuentadescuentoId($numcuentadescuentoId)
    {
        $this->numcuentadescuentoId = $numcuentadescuentoId;

        return $this;
    }

    /**
     * Get numcuentadescuentoId
     *
     * @return integer 
     */
    public function getNumcuentadescuentoId()
    {
        return $this->numcuentadescuentoId;
    }

    /**
     * Set logaplicarinteresmoratorios
     *
     * @param boolean $logaplicarinteresmoratorios
     * @return Condiciones
     */
    public function setLogaplicarinteresmoratorios($logaplicarinteresmoratorios)
    {
        $this->logaplicarinteresmoratorios = $logaplicarinteresmoratorios;

        return $this;
    }

    /**
     * Get logaplicarinteresmoratorios
     *
     * @return boolean 
     */
    public function getLogaplicarinteresmoratorios()
    {
        return $this->logaplicarinteresmoratorios;
    }

    /**
     * Set numtipocalculomoratorios
     *
     * @param integer $numtipocalculomoratorios
     * @return Condiciones
     */
    public function setNumtipocalculomoratorios($numtipocalculomoratorios)
    {
        $this->numtipocalculomoratorios = $numtipocalculomoratorios;

        return $this;
    }

    /**
     * Get numtipocalculomoratorios
     *
     * @return integer 
     */
    public function getNumtipocalculomoratorios()
    {
        return $this->numtipocalculomoratorios;
    }

    /**
     * Set numcargofijomoratorios
     *
     * @param integer $numcargofijomoratorios
     * @return Condiciones
     */
    public function setNumcargofijomoratorios($numcargofijomoratorios)
    {
        $this->numcargofijomoratorios = $numcargofijomoratorios;

        return $this;
    }

    /**
     * Get numcargofijomoratorios
     *
     * @return integer 
     */
    public function getNumcargofijomoratorios()
    {
        return $this->numcargofijomoratorios;
    }

    /**
     * Set numprctjmoratorios
     *
     * @param float $numprctjmoratorios
     * @return Condiciones
     */
    public function setNumprctjmoratorios($numprctjmoratorios)
    {
        $this->numprctjmoratorios = $numprctjmoratorios;

        return $this;
    }

    /**
     * Get numprctjmoratorios
     *
     * @return float 
     */
    public function getNumprctjmoratorios()
    {
        return $this->numprctjmoratorios;
    }

    /**
     * Set numcuentaingresosId
     *
     * @param integer $numcuentaingresosId
     * @return Condiciones
     */
    public function setNumcuentaingresosId($numcuentaingresosId)
    {
        $this->numcuentaingresosId = $numcuentaingresosId;

        return $this;
    }

    /**
     * Get numcuentaingresosId
     *
     * @return integer 
     */
    public function getNumcuentaingresosId()
    {
        return $this->numcuentaingresosId;
    }

    /**
     * Set numimpuestoId
     *
     * @param integer $numimpuestoId
     * @return Condiciones
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Condiciones
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
     * @return Condiciones
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
     * @return Condiciones
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
     * @return Condiciones
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
     * @return Condiciones
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

    /**
     * Set numvencimientosaceptados
     *
     * @param integer $numvencimientosaceptados
     * @return Condiciones
     */
    public function setNumvencimientosaceptados($numvencimientosaceptados)
    {
        $this->numvencimientosaceptados = $numvencimientosaceptados;

        return $this;
    }

    /**
     * Get numvencimientosaceptados
     *
     * @return integer 
     */
    public function getNumvencimientosaceptados()
    {
        return $this->numvencimientosaceptados;
    }
}
