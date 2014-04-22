<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tomasinventarios
 *
 * @ORM\Table(name="TomasInventarios", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id", "StrDocumento"}), @ORM\Index(name="Indice_2", columns={"DteDocumento"}), @ORM\Index(name="Indice_3", columns={"DteInventario"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Tomasinventarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumToma_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtomaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDocumento", type="string", length=10, nullable=true)
     */
    private $strdocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteDocumento", type="datetime", nullable=true)
     */
    private $dtedocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeDocumento", type="datetime", nullable=true)
     */
    private $tmedocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=true)
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodo_id", type="integer", nullable=true)
     */
    private $numperiodoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSemana_id", type="integer", nullable=true)
     */
    private $numsemanaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=10, nullable=true)
     */
    private $strreferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInventario", type="datetime", nullable=true)
     */
    private $dteinventario;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoConteo", type="integer", nullable=true)
     */
    private $numtipoconteo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPartidas", type="integer", nullable=true)
     */
    private $numtotalpartidas = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalcantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPrecioVenta", type="integer", nullable=true)
     */
    private $numtotalprecioventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoCompra", type="integer", nullable=true)
     */
    private $numtotalcostocompra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoEstandar", type="integer", nullable=true)
     */
    private $numtotalcostoestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoPromedio", type="integer", nullable=true)
     */
    private $numtotalcostopromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoUEPS", type="integer", nullable=true)
     */
    private $numtotalcostoueps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalCostoPEPS", type="integer", nullable=true)
     */
    private $numtotalcostopeps = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalPeso", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalpeso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSuperviso_id", type="integer", nullable=true)
     */
    private $numsupervisoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConto_id", type="integer", nullable=true)
     */
    private $numcontoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

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
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Set numtomaId
     *
     * @param integer $numtomaId
     * @return Tomasinventarios
     */
    public function setNumtomaId($numtomaId)
    {
        $this->numtomaId = $numtomaId;

        return $this;
    }

    /**
     * Get numtomaId
     *
     * @return integer 
     */
    public function getNumtomaId()
    {
        return $this->numtomaId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Tomasinventarios
     */
    public function setNumalmacenId($numalmacenId)
    {
        $this->numalmacenId = $numalmacenId;

        return $this;
    }

    /**
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set strdocumento
     *
     * @param string $strdocumento
     * @return Tomasinventarios
     */
    public function setStrdocumento($strdocumento)
    {
        $this->strdocumento = $strdocumento;

        return $this;
    }

    /**
     * Get strdocumento
     *
     * @return string 
     */
    public function getStrdocumento()
    {
        return $this->strdocumento;
    }

    /**
     * Set dtedocumento
     *
     * @param \DateTime $dtedocumento
     * @return Tomasinventarios
     */
    public function setDtedocumento($dtedocumento)
    {
        $this->dtedocumento = $dtedocumento;

        return $this;
    }

    /**
     * Get dtedocumento
     *
     * @return \DateTime 
     */
    public function getDtedocumento()
    {
        return $this->dtedocumento;
    }

    /**
     * Set tmedocumento
     *
     * @param \DateTime $tmedocumento
     * @return Tomasinventarios
     */
    public function setTmedocumento($tmedocumento)
    {
        $this->tmedocumento = $tmedocumento;

        return $this;
    }

    /**
     * Get tmedocumento
     *
     * @return \DateTime 
     */
    public function getTmedocumento()
    {
        return $this->tmedocumento;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Tomasinventarios
     */
    public function setNumejercicioId($numejercicioId)
    {
        $this->numejercicioId = $numejercicioId;

        return $this;
    }

    /**
     * Get numejercicioId
     *
     * @return integer 
     */
    public function getNumejercicioId()
    {
        return $this->numejercicioId;
    }

    /**
     * Set numperiodoId
     *
     * @param integer $numperiodoId
     * @return Tomasinventarios
     */
    public function setNumperiodoId($numperiodoId)
    {
        $this->numperiodoId = $numperiodoId;

        return $this;
    }

    /**
     * Get numperiodoId
     *
     * @return integer 
     */
    public function getNumperiodoId()
    {
        return $this->numperiodoId;
    }

    /**
     * Set numsemanaId
     *
     * @param integer $numsemanaId
     * @return Tomasinventarios
     */
    public function setNumsemanaId($numsemanaId)
    {
        $this->numsemanaId = $numsemanaId;

        return $this;
    }

    /**
     * Get numsemanaId
     *
     * @return integer 
     */
    public function getNumsemanaId()
    {
        return $this->numsemanaId;
    }

    /**
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Tomasinventarios
     */
    public function setNumcentrocontrolId($numcentrocontrolId)
    {
        $this->numcentrocontrolId = $numcentrocontrolId;

        return $this;
    }

    /**
     * Get numcentrocontrolId
     *
     * @return integer 
     */
    public function getNumcentrocontrolId()
    {
        return $this->numcentrocontrolId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Tomasinventarios
     */
    public function setNumempresaId($numempresaId)
    {
        $this->numempresaId = $numempresaId;

        return $this;
    }

    /**
     * Get numempresaId
     *
     * @return integer 
     */
    public function getNumempresaId()
    {
        return $this->numempresaId;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Tomasinventarios
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
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Tomasinventarios
     */
    public function setStrreferencia($strreferencia)
    {
        $this->strreferencia = $strreferencia;

        return $this;
    }

    /**
     * Get strreferencia
     *
     * @return string 
     */
    public function getStrreferencia()
    {
        return $this->strreferencia;
    }

    /**
     * Set dteinventario
     *
     * @param \DateTime $dteinventario
     * @return Tomasinventarios
     */
    public function setDteinventario($dteinventario)
    {
        $this->dteinventario = $dteinventario;

        return $this;
    }

    /**
     * Get dteinventario
     *
     * @return \DateTime 
     */
    public function getDteinventario()
    {
        return $this->dteinventario;
    }

    /**
     * Set numtipoconteo
     *
     * @param integer $numtipoconteo
     * @return Tomasinventarios
     */
    public function setNumtipoconteo($numtipoconteo)
    {
        $this->numtipoconteo = $numtipoconteo;

        return $this;
    }

    /**
     * Get numtipoconteo
     *
     * @return integer 
     */
    public function getNumtipoconteo()
    {
        return $this->numtipoconteo;
    }

    /**
     * Set numtipocambio
     *
     * @param float $numtipocambio
     * @return Tomasinventarios
     */
    public function setNumtipocambio($numtipocambio)
    {
        $this->numtipocambio = $numtipocambio;

        return $this;
    }

    /**
     * Get numtipocambio
     *
     * @return float 
     */
    public function getNumtipocambio()
    {
        return $this->numtipocambio;
    }

    /**
     * Set numtotalpartidas
     *
     * @param integer $numtotalpartidas
     * @return Tomasinventarios
     */
    public function setNumtotalpartidas($numtotalpartidas)
    {
        $this->numtotalpartidas = $numtotalpartidas;

        return $this;
    }

    /**
     * Get numtotalpartidas
     *
     * @return integer 
     */
    public function getNumtotalpartidas()
    {
        return $this->numtotalpartidas;
    }

    /**
     * Set numtotalcantidad
     *
     * @param float $numtotalcantidad
     * @return Tomasinventarios
     */
    public function setNumtotalcantidad($numtotalcantidad)
    {
        $this->numtotalcantidad = $numtotalcantidad;

        return $this;
    }

    /**
     * Get numtotalcantidad
     *
     * @return float 
     */
    public function getNumtotalcantidad()
    {
        return $this->numtotalcantidad;
    }

    /**
     * Set numtotalprecioventa
     *
     * @param integer $numtotalprecioventa
     * @return Tomasinventarios
     */
    public function setNumtotalprecioventa($numtotalprecioventa)
    {
        $this->numtotalprecioventa = $numtotalprecioventa;

        return $this;
    }

    /**
     * Get numtotalprecioventa
     *
     * @return integer 
     */
    public function getNumtotalprecioventa()
    {
        return $this->numtotalprecioventa;
    }

    /**
     * Set numtotalcostocompra
     *
     * @param integer $numtotalcostocompra
     * @return Tomasinventarios
     */
    public function setNumtotalcostocompra($numtotalcostocompra)
    {
        $this->numtotalcostocompra = $numtotalcostocompra;

        return $this;
    }

    /**
     * Get numtotalcostocompra
     *
     * @return integer 
     */
    public function getNumtotalcostocompra()
    {
        return $this->numtotalcostocompra;
    }

    /**
     * Set numtotalcostoestandar
     *
     * @param integer $numtotalcostoestandar
     * @return Tomasinventarios
     */
    public function setNumtotalcostoestandar($numtotalcostoestandar)
    {
        $this->numtotalcostoestandar = $numtotalcostoestandar;

        return $this;
    }

    /**
     * Get numtotalcostoestandar
     *
     * @return integer 
     */
    public function getNumtotalcostoestandar()
    {
        return $this->numtotalcostoestandar;
    }

    /**
     * Set numtotalcostopromedio
     *
     * @param integer $numtotalcostopromedio
     * @return Tomasinventarios
     */
    public function setNumtotalcostopromedio($numtotalcostopromedio)
    {
        $this->numtotalcostopromedio = $numtotalcostopromedio;

        return $this;
    }

    /**
     * Get numtotalcostopromedio
     *
     * @return integer 
     */
    public function getNumtotalcostopromedio()
    {
        return $this->numtotalcostopromedio;
    }

    /**
     * Set numtotalcostoueps
     *
     * @param integer $numtotalcostoueps
     * @return Tomasinventarios
     */
    public function setNumtotalcostoueps($numtotalcostoueps)
    {
        $this->numtotalcostoueps = $numtotalcostoueps;

        return $this;
    }

    /**
     * Get numtotalcostoueps
     *
     * @return integer 
     */
    public function getNumtotalcostoueps()
    {
        return $this->numtotalcostoueps;
    }

    /**
     * Set numtotalcostopeps
     *
     * @param integer $numtotalcostopeps
     * @return Tomasinventarios
     */
    public function setNumtotalcostopeps($numtotalcostopeps)
    {
        $this->numtotalcostopeps = $numtotalcostopeps;

        return $this;
    }

    /**
     * Get numtotalcostopeps
     *
     * @return integer 
     */
    public function getNumtotalcostopeps()
    {
        return $this->numtotalcostopeps;
    }

    /**
     * Set numtotalpeso
     *
     * @param float $numtotalpeso
     * @return Tomasinventarios
     */
    public function setNumtotalpeso($numtotalpeso)
    {
        $this->numtotalpeso = $numtotalpeso;

        return $this;
    }

    /**
     * Get numtotalpeso
     *
     * @return float 
     */
    public function getNumtotalpeso()
    {
        return $this->numtotalpeso;
    }

    /**
     * Set numsupervisoId
     *
     * @param integer $numsupervisoId
     * @return Tomasinventarios
     */
    public function setNumsupervisoId($numsupervisoId)
    {
        $this->numsupervisoId = $numsupervisoId;

        return $this;
    }

    /**
     * Get numsupervisoId
     *
     * @return integer 
     */
    public function getNumsupervisoId()
    {
        return $this->numsupervisoId;
    }

    /**
     * Set numcontoId
     *
     * @param integer $numcontoId
     * @return Tomasinventarios
     */
    public function setNumcontoId($numcontoId)
    {
        $this->numcontoId = $numcontoId;

        return $this;
    }

    /**
     * Get numcontoId
     *
     * @return integer 
     */
    public function getNumcontoId()
    {
        return $this->numcontoId;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Tomasinventarios
     */
    public function setMemobservaciones($memobservaciones)
    {
        $this->memobservaciones = $memobservaciones;

        return $this;
    }

    /**
     * Get memobservaciones
     *
     * @return string 
     */
    public function getMemobservaciones()
    {
        return $this->memobservaciones;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Tomasinventarios
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
     * @return Tomasinventarios
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
     * @return Tomasinventarios
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
     * @return Tomasinventarios
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Tomasinventarios
     */
    public function setNumtipoestado($numtipoestado)
    {
        $this->numtipoestado = $numtipoestado;

        return $this;
    }

    /**
     * Get numtipoestado
     *
     * @return integer 
     */
    public function getNumtipoestado()
    {
        return $this->numtipoestado;
    }

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Tomasinventarios
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
