<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionescontables
 *
 * @ORM\Table(name="TransaccionesContables", indexes={@ORM\Index(name="Indice_1", columns={"DteTransaccion"}), @ORM\Index(name="Indice_2", columns={"NumEjercicio_id", "NumPeriodo", "NumTipoEstado", "NumTipoDocumento"}), @ORM\Index(name="Indice_3", columns={"NumEjercicio_id", "NumEmpresa_id", "StrCuenta_ky", "NumCentroControl_id", "NumMoneda_id"}), @ORM\Index(name="Indice_4", columns={"DteCancelacion"}), @ORM\Index(name="Indice_5", columns={"NumEjercicio_id", "NumEmpresa_id", "StrCuenta_ky", "NumPeriodo"}), @ORM\Index(name="Indice_6", columns={"NumEjercicio_id", "NumEmpresa_id", "StrCuenta_ky", "NumCentroControl_id", "NumPeriodo"})})
 * @ORM\Entity
 */
class Transaccionescontables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiario_id", type="integer", nullable=true)
     */
    private $numdiarioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTransaccion", type="string", length=10, nullable=true)
     */
    private $strtransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTransaccion", type="datetime", nullable=true)
     */
    private $dtetransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTransaccion", type="datetime", nullable=true)
     */
    private $tmetransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCancelacion", type="datetime", nullable=true)
     */
    private $dtecancelacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeCancelacion", type="datetime", nullable=true)
     */
    private $tmecancelacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=true)
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodo", type="integer", nullable=true)
     */
    private $numperiodo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSemana", type="integer", nullable=true)
     */
    private $numsemana = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_ky", type="string", length=20, nullable=true)
     */
    private $strcuentaKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=true)
     */
    private $numcategoriaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProyecto_id", type="integer", nullable=true)
     */
    private $numproyectoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=60, nullable=true)
     */
    private $strreferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDocumento", type="integer", nullable=true)
     */
    private $numtipodocumento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteCargo", type="integer", nullable=true)
     */
    private $numimportecargo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteAbono", type="integer", nullable=true)
     */
    private $numimporteabono = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadCargo", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadcargo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadAbono", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadabono = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transaccionescontables
     */
    public function setNumtransaccionId($numtransaccionId)
    {
        $this->numtransaccionId = $numtransaccionId;

        return $this;
    }

    /**
     * Get numtransaccionId
     *
     * @return integer 
     */
    public function getNumtransaccionId()
    {
        return $this->numtransaccionId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Transaccionescontables
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
     * Set numtipotransaccion
     *
     * @param integer $numtipotransaccion
     * @return Transaccionescontables
     */
    public function setNumtipotransaccion($numtipotransaccion)
    {
        $this->numtipotransaccion = $numtipotransaccion;

        return $this;
    }

    /**
     * Get numtipotransaccion
     *
     * @return integer 
     */
    public function getNumtipotransaccion()
    {
        return $this->numtipotransaccion;
    }

    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Transaccionescontables
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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Transaccionescontables
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
     * Set numdiarioId
     *
     * @param integer $numdiarioId
     * @return Transaccionescontables
     */
    public function setNumdiarioId($numdiarioId)
    {
        $this->numdiarioId = $numdiarioId;

        return $this;
    }

    /**
     * Get numdiarioId
     *
     * @return integer 
     */
    public function getNumdiarioId()
    {
        return $this->numdiarioId;
    }

    /**
     * Set strtransaccion
     *
     * @param string $strtransaccion
     * @return Transaccionescontables
     */
    public function setStrtransaccion($strtransaccion)
    {
        $this->strtransaccion = $strtransaccion;

        return $this;
    }

    /**
     * Get strtransaccion
     *
     * @return string 
     */
    public function getStrtransaccion()
    {
        return $this->strtransaccion;
    }

    /**
     * Set dtetransaccion
     *
     * @param \DateTime $dtetransaccion
     * @return Transaccionescontables
     */
    public function setDtetransaccion($dtetransaccion)
    {
        $this->dtetransaccion = $dtetransaccion;

        return $this;
    }

    /**
     * Get dtetransaccion
     *
     * @return \DateTime 
     */
    public function getDtetransaccion()
    {
        return $this->dtetransaccion;
    }

    /**
     * Set tmetransaccion
     *
     * @param \DateTime $tmetransaccion
     * @return Transaccionescontables
     */
    public function setTmetransaccion($tmetransaccion)
    {
        $this->tmetransaccion = $tmetransaccion;

        return $this;
    }

    /**
     * Get tmetransaccion
     *
     * @return \DateTime 
     */
    public function getTmetransaccion()
    {
        return $this->tmetransaccion;
    }

    /**
     * Set dtecancelacion
     *
     * @param \DateTime $dtecancelacion
     * @return Transaccionescontables
     */
    public function setDtecancelacion($dtecancelacion)
    {
        $this->dtecancelacion = $dtecancelacion;

        return $this;
    }

    /**
     * Get dtecancelacion
     *
     * @return \DateTime 
     */
    public function getDtecancelacion()
    {
        return $this->dtecancelacion;
    }

    /**
     * Set tmecancelacion
     *
     * @param \DateTime $tmecancelacion
     * @return Transaccionescontables
     */
    public function setTmecancelacion($tmecancelacion)
    {
        $this->tmecancelacion = $tmecancelacion;

        return $this;
    }

    /**
     * Get tmecancelacion
     *
     * @return \DateTime 
     */
    public function getTmecancelacion()
    {
        return $this->tmecancelacion;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Transaccionescontables
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
     * Set numperiodo
     *
     * @param integer $numperiodo
     * @return Transaccionescontables
     */
    public function setNumperiodo($numperiodo)
    {
        $this->numperiodo = $numperiodo;

        return $this;
    }

    /**
     * Get numperiodo
     *
     * @return integer 
     */
    public function getNumperiodo()
    {
        return $this->numperiodo;
    }

    /**
     * Set numsemana
     *
     * @param integer $numsemana
     * @return Transaccionescontables
     */
    public function setNumsemana($numsemana)
    {
        $this->numsemana = $numsemana;

        return $this;
    }

    /**
     * Get numsemana
     *
     * @return integer 
     */
    public function getNumsemana()
    {
        return $this->numsemana;
    }

    /**
     * Set strcuentaKy
     *
     * @param string $strcuentaKy
     * @return Transaccionescontables
     */
    public function setStrcuentaKy($strcuentaKy)
    {
        $this->strcuentaKy = $strcuentaKy;

        return $this;
    }

    /**
     * Get strcuentaKy
     *
     * @return string 
     */
    public function getStrcuentaKy()
    {
        return $this->strcuentaKy;
    }

    /**
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Transaccionescontables
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
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Transaccionescontables
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
     * Set numproyectoId
     *
     * @param integer $numproyectoId
     * @return Transaccionescontables
     */
    public function setNumproyectoId($numproyectoId)
    {
        $this->numproyectoId = $numproyectoId;

        return $this;
    }

    /**
     * Get numproyectoId
     *
     * @return integer 
     */
    public function getNumproyectoId()
    {
        return $this->numproyectoId;
    }

    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Transaccionescontables
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
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Transaccionescontables
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Transaccionescontables
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
     * Set numtipodocumento
     *
     * @param integer $numtipodocumento
     * @return Transaccionescontables
     */
    public function setNumtipodocumento($numtipodocumento)
    {
        $this->numtipodocumento = $numtipodocumento;

        return $this;
    }

    /**
     * Get numtipodocumento
     *
     * @return integer 
     */
    public function getNumtipodocumento()
    {
        return $this->numtipodocumento;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Transaccionescontables
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
     * Set numtipocambio
     *
     * @param float $numtipocambio
     * @return Transaccionescontables
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
     * Set numimportecargo
     *
     * @param integer $numimportecargo
     * @return Transaccionescontables
     */
    public function setNumimportecargo($numimportecargo)
    {
        $this->numimportecargo = $numimportecargo;

        return $this;
    }

    /**
     * Get numimportecargo
     *
     * @return integer 
     */
    public function getNumimportecargo()
    {
        return $this->numimportecargo;
    }

    /**
     * Set numimporteabono
     *
     * @param integer $numimporteabono
     * @return Transaccionescontables
     */
    public function setNumimporteabono($numimporteabono)
    {
        $this->numimporteabono = $numimporteabono;

        return $this;
    }

    /**
     * Get numimporteabono
     *
     * @return integer 
     */
    public function getNumimporteabono()
    {
        return $this->numimporteabono;
    }

    /**
     * Set numcantidadcargo
     *
     * @param float $numcantidadcargo
     * @return Transaccionescontables
     */
    public function setNumcantidadcargo($numcantidadcargo)
    {
        $this->numcantidadcargo = $numcantidadcargo;

        return $this;
    }

    /**
     * Get numcantidadcargo
     *
     * @return float 
     */
    public function getNumcantidadcargo()
    {
        return $this->numcantidadcargo;
    }

    /**
     * Set numcantidadabono
     *
     * @param float $numcantidadabono
     * @return Transaccionescontables
     */
    public function setNumcantidadabono($numcantidadabono)
    {
        $this->numcantidadabono = $numcantidadabono;

        return $this;
    }

    /**
     * Get numcantidadabono
     *
     * @return float 
     */
    public function getNumcantidadabono()
    {
        return $this->numcantidadabono;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Transaccionescontables
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
}
