<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiemposdetalles
 *
 * @ORM\Table(name="TiemposDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumTiempo_id"}), @ORM\Index(name="Indice_10", columns={"NumActividad_id"}), @ORM\Index(name="Indice_11", columns={"NumCuenta_id"}), @ORM\Index(name="Indice_12", columns={"NumGrupoCuenta_id"}), @ORM\Index(name="Indice_13", columns={"NumCentroControl_id"}), @ORM\Index(name="Indice_2", columns={"DteDocumento"}), @ORM\Index(name="Indice_3", columns={"DteRegistro"}), @ORM\Index(name="Indice_4", columns={"NumEjercicio_id", "NumPeriodo_id"}), @ORM\Index(name="Indice_5", columns={"NumEmpleado_id"}), @ORM\Index(name="Indice_6", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_7", columns={"NumTarifaServicio_id"}), @ORM\Index(name="Indice_8", columns={"NumProyecto_id"}), @ORM\Index(name="Indice_9", columns={"NumCliente_id"})})
 * @ORM\Entity
 */
class Tiemposdetalles
{
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
     * @ORM\Column(name="NumTiempo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtiempoId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteDocumento", type="datetime", nullable=true)
     */
    private $dtedocumento;

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
     * @ORM\Column(name="NumViaje_id", type="integer", nullable=true)
     */
    private $numviajeId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpleado_id", type="integer", nullable=true)
     */
    private $numempleadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDepartamento_id", type="integer", nullable=true)
     */
    private $numdepartamentoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPuesto_id", type="integer", nullable=true)
     */
    private $numpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaServicio_id", type="integer", nullable=true)
     */
    private $numtarifaservicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelServicio", type="integer", nullable=true)
     */
    private $numnivelservicio = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteRegistro", type="datetime", nullable=true)
     */
    private $dteregistro;

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
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProyecto_id", type="integer", nullable=true)
     */
    private $numproyectoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCliente_id", type="integer", nullable=true)
     */
    private $numclienteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGerente_id", type="integer", nullable=true)
     */
    private $numgerenteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSupervisor_id", type="integer", nullable=true)
     */
    private $numsupervisorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActividad_id", type="integer", nullable=true)
     */
    private $numactividadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuenta_id", type="integer", nullable=true)
     */
    private $numcuentaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoCuenta_id", type="integer", nullable=true)
     */
    private $numgrupocuentaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeInicio", type="datetime", nullable=true)
     */
    private $tmeinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTermino", type="datetime", nullable=true)
     */
    private $tmetermino;

    /**
     * @var float
     *
     * @ORM\Column(name="NumDuracion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numduracion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifa", type="integer", nullable=true)
     */
    private $numtarifa = '0';

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
     * @ORM\Column(name="NumImpuesto_1_id", type="integer", nullable=true)
     */
    private $numimpuesto1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_2_id", type="integer", nullable=true)
     */
    private $numimpuesto2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_3_id", type="integer", nullable=true)
     */
    private $numimpuesto3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_4_id", type="integer", nullable=true)
     */
    private $numimpuesto4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_5_id", type="integer", nullable=true)
     */
    private $numimpuesto5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_6_id", type="integer", nullable=true)
     */
    private $numimpuesto6Id = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjImpuesto_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjimpuesto6 = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="LogFacturar", type="boolean", nullable=true)
     */
    private $logfacturar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Tiemposdetalles
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
     * Set numtiempoId
     *
     * @param integer $numtiempoId
     * @return Tiemposdetalles
     */
    public function setNumtiempoId($numtiempoId)
    {
        $this->numtiempoId = $numtiempoId;

        return $this;
    }

    /**
     * Get numtiempoId
     *
     * @return integer 
     */
    public function getNumtiempoId()
    {
        return $this->numtiempoId;
    }

    /**
     * Set dtedocumento
     *
     * @param \DateTime $dtedocumento
     * @return Tiemposdetalles
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
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Tiemposdetalles
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
     * @return Tiemposdetalles
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
     * @return Tiemposdetalles
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
     * Set numviajeId
     *
     * @param integer $numviajeId
     * @return Tiemposdetalles
     */
    public function setNumviajeId($numviajeId)
    {
        $this->numviajeId = $numviajeId;

        return $this;
    }

    /**
     * Get numviajeId
     *
     * @return integer 
     */
    public function getNumviajeId()
    {
        return $this->numviajeId;
    }

    /**
     * Set numempleadoId
     *
     * @param integer $numempleadoId
     * @return Tiemposdetalles
     */
    public function setNumempleadoId($numempleadoId)
    {
        $this->numempleadoId = $numempleadoId;

        return $this;
    }

    /**
     * Get numempleadoId
     *
     * @return integer 
     */
    public function getNumempleadoId()
    {
        return $this->numempleadoId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Tiemposdetalles
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
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Tiemposdetalles
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
     * Set numdepartamentoId
     *
     * @param integer $numdepartamentoId
     * @return Tiemposdetalles
     */
    public function setNumdepartamentoId($numdepartamentoId)
    {
        $this->numdepartamentoId = $numdepartamentoId;

        return $this;
    }

    /**
     * Get numdepartamentoId
     *
     * @return integer 
     */
    public function getNumdepartamentoId()
    {
        return $this->numdepartamentoId;
    }

    /**
     * Set numpuestoId
     *
     * @param integer $numpuestoId
     * @return Tiemposdetalles
     */
    public function setNumpuestoId($numpuestoId)
    {
        $this->numpuestoId = $numpuestoId;

        return $this;
    }

    /**
     * Get numpuestoId
     *
     * @return integer 
     */
    public function getNumpuestoId()
    {
        return $this->numpuestoId;
    }

    /**
     * Set numtarifaservicioId
     *
     * @param integer $numtarifaservicioId
     * @return Tiemposdetalles
     */
    public function setNumtarifaservicioId($numtarifaservicioId)
    {
        $this->numtarifaservicioId = $numtarifaservicioId;

        return $this;
    }

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
     * Set numnivelservicio
     *
     * @param integer $numnivelservicio
     * @return Tiemposdetalles
     */
    public function setNumnivelservicio($numnivelservicio)
    {
        $this->numnivelservicio = $numnivelservicio;

        return $this;
    }

    /**
     * Get numnivelservicio
     *
     * @return integer 
     */
    public function getNumnivelservicio()
    {
        return $this->numnivelservicio;
    }

    /**
     * Set dteregistro
     *
     * @param \DateTime $dteregistro
     * @return Tiemposdetalles
     */
    public function setDteregistro($dteregistro)
    {
        $this->dteregistro = $dteregistro;

        return $this;
    }

    /**
     * Get dteregistro
     *
     * @return \DateTime 
     */
    public function getDteregistro()
    {
        return $this->dteregistro;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Tiemposdetalles
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
     * @return Tiemposdetalles
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tiemposdetalles
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
     * Set numproyectoId
     *
     * @param integer $numproyectoId
     * @return Tiemposdetalles
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
     * Set numclienteId
     *
     * @param integer $numclienteId
     * @return Tiemposdetalles
     */
    public function setNumclienteId($numclienteId)
    {
        $this->numclienteId = $numclienteId;

        return $this;
    }

    /**
     * Get numclienteId
     *
     * @return integer 
     */
    public function getNumclienteId()
    {
        return $this->numclienteId;
    }

    /**
     * Set numgerenteId
     *
     * @param integer $numgerenteId
     * @return Tiemposdetalles
     */
    public function setNumgerenteId($numgerenteId)
    {
        $this->numgerenteId = $numgerenteId;

        return $this;
    }

    /**
     * Get numgerenteId
     *
     * @return integer 
     */
    public function getNumgerenteId()
    {
        return $this->numgerenteId;
    }

    /**
     * Set numsupervisorId
     *
     * @param integer $numsupervisorId
     * @return Tiemposdetalles
     */
    public function setNumsupervisorId($numsupervisorId)
    {
        $this->numsupervisorId = $numsupervisorId;

        return $this;
    }

    /**
     * Get numsupervisorId
     *
     * @return integer 
     */
    public function getNumsupervisorId()
    {
        return $this->numsupervisorId;
    }

    /**
     * Set numactividadId
     *
     * @param integer $numactividadId
     * @return Tiemposdetalles
     */
    public function setNumactividadId($numactividadId)
    {
        $this->numactividadId = $numactividadId;

        return $this;
    }

    /**
     * Get numactividadId
     *
     * @return integer 
     */
    public function getNumactividadId()
    {
        return $this->numactividadId;
    }

    /**
     * Set numcuentaId
     *
     * @param integer $numcuentaId
     * @return Tiemposdetalles
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
     * Set numgrupocuentaId
     *
     * @param integer $numgrupocuentaId
     * @return Tiemposdetalles
     */
    public function setNumgrupocuentaId($numgrupocuentaId)
    {
        $this->numgrupocuentaId = $numgrupocuentaId;

        return $this;
    }

    /**
     * Get numgrupocuentaId
     *
     * @return integer 
     */
    public function getNumgrupocuentaId()
    {
        return $this->numgrupocuentaId;
    }

    /**
     * Set tmeinicio
     *
     * @param \DateTime $tmeinicio
     * @return Tiemposdetalles
     */
    public function setTmeinicio($tmeinicio)
    {
        $this->tmeinicio = $tmeinicio;

        return $this;
    }

    /**
     * Get tmeinicio
     *
     * @return \DateTime 
     */
    public function getTmeinicio()
    {
        return $this->tmeinicio;
    }

    /**
     * Set tmetermino
     *
     * @param \DateTime $tmetermino
     * @return Tiemposdetalles
     */
    public function setTmetermino($tmetermino)
    {
        $this->tmetermino = $tmetermino;

        return $this;
    }

    /**
     * Get tmetermino
     *
     * @return \DateTime 
     */
    public function getTmetermino()
    {
        return $this->tmetermino;
    }

    /**
     * Set numduracion
     *
     * @param float $numduracion
     * @return Tiemposdetalles
     */
    public function setNumduracion($numduracion)
    {
        $this->numduracion = $numduracion;

        return $this;
    }

    /**
     * Get numduracion
     *
     * @return float 
     */
    public function getNumduracion()
    {
        return $this->numduracion;
    }

    /**
     * Set numtarifa
     *
     * @param integer $numtarifa
     * @return Tiemposdetalles
     */
    public function setNumtarifa($numtarifa)
    {
        $this->numtarifa = $numtarifa;

        return $this;
    }

    /**
     * Get numtarifa
     *
     * @return integer 
     */
    public function getNumtarifa()
    {
        return $this->numtarifa;
    }

    /**
     * Set numimpuestoId
     *
     * @param integer $numimpuestoId
     * @return Tiemposdetalles
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
     * @return Tiemposdetalles
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
     * Set numimpuesto1Id
     *
     * @param integer $numimpuesto1Id
     * @return Tiemposdetalles
     */
    public function setNumimpuesto1Id($numimpuesto1Id)
    {
        $this->numimpuesto1Id = $numimpuesto1Id;

        return $this;
    }

    /**
     * Get numimpuesto1Id
     *
     * @return integer 
     */
    public function getNumimpuesto1Id()
    {
        return $this->numimpuesto1Id;
    }

    /**
     * Set numimpuesto2Id
     *
     * @param integer $numimpuesto2Id
     * @return Tiemposdetalles
     */
    public function setNumimpuesto2Id($numimpuesto2Id)
    {
        $this->numimpuesto2Id = $numimpuesto2Id;

        return $this;
    }

    /**
     * Get numimpuesto2Id
     *
     * @return integer 
     */
    public function getNumimpuesto2Id()
    {
        return $this->numimpuesto2Id;
    }

    /**
     * Set numimpuesto3Id
     *
     * @param integer $numimpuesto3Id
     * @return Tiemposdetalles
     */
    public function setNumimpuesto3Id($numimpuesto3Id)
    {
        $this->numimpuesto3Id = $numimpuesto3Id;

        return $this;
    }

    /**
     * Get numimpuesto3Id
     *
     * @return integer 
     */
    public function getNumimpuesto3Id()
    {
        return $this->numimpuesto3Id;
    }

    /**
     * Set numimpuesto4Id
     *
     * @param integer $numimpuesto4Id
     * @return Tiemposdetalles
     */
    public function setNumimpuesto4Id($numimpuesto4Id)
    {
        $this->numimpuesto4Id = $numimpuesto4Id;

        return $this;
    }

    /**
     * Get numimpuesto4Id
     *
     * @return integer 
     */
    public function getNumimpuesto4Id()
    {
        return $this->numimpuesto4Id;
    }

    /**
     * Set numimpuesto5Id
     *
     * @param integer $numimpuesto5Id
     * @return Tiemposdetalles
     */
    public function setNumimpuesto5Id($numimpuesto5Id)
    {
        $this->numimpuesto5Id = $numimpuesto5Id;

        return $this;
    }

    /**
     * Get numimpuesto5Id
     *
     * @return integer 
     */
    public function getNumimpuesto5Id()
    {
        return $this->numimpuesto5Id;
    }

    /**
     * Set numimpuesto6Id
     *
     * @param integer $numimpuesto6Id
     * @return Tiemposdetalles
     */
    public function setNumimpuesto6Id($numimpuesto6Id)
    {
        $this->numimpuesto6Id = $numimpuesto6Id;

        return $this;
    }

    /**
     * Get numimpuesto6Id
     *
     * @return integer 
     */
    public function getNumimpuesto6Id()
    {
        return $this->numimpuesto6Id;
    }

    /**
     * Set numprctjimpuesto1
     *
     * @param float $numprctjimpuesto1
     * @return Tiemposdetalles
     */
    public function setNumprctjimpuesto1($numprctjimpuesto1)
    {
        $this->numprctjimpuesto1 = $numprctjimpuesto1;

        return $this;
    }

    /**
     * Get numprctjimpuesto1
     *
     * @return float 
     */
    public function getNumprctjimpuesto1()
    {
        return $this->numprctjimpuesto1;
    }

    /**
     * Set numprctjimpuesto2
     *
     * @param float $numprctjimpuesto2
     * @return Tiemposdetalles
     */
    public function setNumprctjimpuesto2($numprctjimpuesto2)
    {
        $this->numprctjimpuesto2 = $numprctjimpuesto2;

        return $this;
    }

    /**
     * Get numprctjimpuesto2
     *
     * @return float 
     */
    public function getNumprctjimpuesto2()
    {
        return $this->numprctjimpuesto2;
    }

    /**
     * Set numprctjimpuesto3
     *
     * @param float $numprctjimpuesto3
     * @return Tiemposdetalles
     */
    public function setNumprctjimpuesto3($numprctjimpuesto3)
    {
        $this->numprctjimpuesto3 = $numprctjimpuesto3;

        return $this;
    }

    /**
     * Get numprctjimpuesto3
     *
     * @return float 
     */
    public function getNumprctjimpuesto3()
    {
        return $this->numprctjimpuesto3;
    }

    /**
     * Set numprctjimpuesto4
     *
     * @param float $numprctjimpuesto4
     * @return Tiemposdetalles
     */
    public function setNumprctjimpuesto4($numprctjimpuesto4)
    {
        $this->numprctjimpuesto4 = $numprctjimpuesto4;

        return $this;
    }

    /**
     * Get numprctjimpuesto4
     *
     * @return float 
     */
    public function getNumprctjimpuesto4()
    {
        return $this->numprctjimpuesto4;
    }

    /**
     * Set numprctjimpuesto5
     *
     * @param float $numprctjimpuesto5
     * @return Tiemposdetalles
     */
    public function setNumprctjimpuesto5($numprctjimpuesto5)
    {
        $this->numprctjimpuesto5 = $numprctjimpuesto5;

        return $this;
    }

    /**
     * Get numprctjimpuesto5
     *
     * @return float 
     */
    public function getNumprctjimpuesto5()
    {
        return $this->numprctjimpuesto5;
    }

    /**
     * Set numprctjimpuesto6
     *
     * @param float $numprctjimpuesto6
     * @return Tiemposdetalles
     */
    public function setNumprctjimpuesto6($numprctjimpuesto6)
    {
        $this->numprctjimpuesto6 = $numprctjimpuesto6;

        return $this;
    }

    /**
     * Get numprctjimpuesto6
     *
     * @return float 
     */
    public function getNumprctjimpuesto6()
    {
        return $this->numprctjimpuesto6;
    }

    /**
     * Set numcostoestandar
     *
     * @param integer $numcostoestandar
     * @return Tiemposdetalles
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
     * @return Tiemposdetalles
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
     * @return Tiemposdetalles
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
     * Set logfacturar
     *
     * @param boolean $logfacturar
     * @return Tiemposdetalles
     */
    public function setLogfacturar($logfacturar)
    {
        $this->logfacturar = $logfacturar;

        return $this;
    }

    /**
     * Get logfacturar
     *
     * @return boolean 
     */
    public function getLogfacturar()
    {
        return $this->logfacturar;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Tiemposdetalles
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
