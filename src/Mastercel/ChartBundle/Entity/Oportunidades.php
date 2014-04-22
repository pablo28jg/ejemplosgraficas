<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oportunidades
 *
 * @ORM\Table(name="Oportunidades", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_2", columns={"StrOportunidad"}), @ORM\Index(name="Indice_3", columns={"DteOportunidad"}), @ORM\Index(name="Indice_4", columns={"NumConcepto_id"}), @ORM\Index(name="Indice_5", columns={"NumEjercicio_id", "NumPeriodo", "NumSemana"}), @ORM\Index(name="Indice_6", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_7", columns={"NumCentroControl_id"}), @ORM\Index(name="Indice_8", columns={"NumProspecto_id"}), @ORM\Index(name="Indice_9", columns={"NumEntidad_id"}), @ORM\Index(name="Indice_10", columns={"NumProyecto_id"}), @ORM\Index(name="Indice_11", columns={"NumContactoLegal_id"}), @ORM\Index(name="Indice_12", columns={"NumEjecutivo_id"}), @ORM\Index(name="Indice_13", columns={"NumVendedor_1_id"}), @ORM\Index(name="Indice_14", columns={"NumDireccion_id"}), @ORM\Index(name="Indice_15", columns={"NumDireccionEnvio_id"}), @ORM\Index(name="Indice_16", columns={"NumDireccionCorrespondencia_id"}), @ORM\Index(name="Indice_17", columns={"StrReferencia"}), @ORM\Index(name="Indice_18", columns={"NumClaseMercado_id"}), @ORM\Index(name="Indice_19", columns={"NumMedioEnvio_id"}), @ORM\Index(name="Indice_20", columns={"NumCondicion_id"}), @ORM\Index(name="Indice_21", columns={"NumDiaRevisionPago_id"}), @ORM\Index(name="Indice_22", columns={"NumMoneda_id"}), @ORM\Index(name="Indice_23", columns={"NumClasificacion_id"}), @ORM\Index(name="Indice_24", columns={"NumMensaje_id"}), @ORM\Index(name="Indice_25", columns={"NumOportunidadEtapa_id"}), @ORM\Index(name="Indice_26", columns={"NumCreadoPor_id"}), @ORM\Index(name="Indice_27", columns={"NumActualizadoPor_id"})})
 * @ORM\Entity
 */
class Oportunidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numoportunidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrOportunidad", type="string", length=10, nullable=true)
     */
    private $stroportunidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteOportunidad", type="datetime", nullable=true)
     */
    private $dteoportunidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeOportunidad", type="datetime", nullable=true)
     */
    private $tmeoportunidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCanceladoPor_id", type="integer", nullable=true)
     */
    private $numcanceladoporId = '0';

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
     * @ORM\Column(name="NumConcepto_id", type="integer", nullable=true)
     */
    private $numconceptoId = '0';

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
     * @ORM\Column(name="NumProspecto_id", type="integer", nullable=true)
     */
    private $numprospectoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProyecto_id", type="integer", nullable=true)
     */
    private $numproyectoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjecutivo_id", type="integer", nullable=true)
     */
    private $numejecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_1_id", type="integer", nullable=true)
     */
    private $numvendedor1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContactoLegal_id", type="integer", nullable=true)
     */
    private $numcontactolegalId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDireccion_id", type="integer", nullable=true)
     */
    private $numdireccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDireccionEnvio_id", type="integer", nullable=true)
     */
    private $numdireccionenvioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDireccionCorrespondencia_id", type="integer", nullable=true)
     */
    private $numdireccioncorrespondenciaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="NumClaseMercado_id", type="integer", nullable=true)
     */
    private $numclasemercadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMedioEnvio_id", type="integer", nullable=true)
     */
    private $nummedioenvioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferenciaEnvio", type="string", length=20, nullable=true)
     */
    private $strreferenciaenvio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEntregaMercancia", type="datetime", nullable=true)
     */
    private $dteentregamercancia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCondicion_id", type="integer", nullable=true)
     */
    private $numcondicionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiaRevisionPago_id", type="integer", nullable=true)
     */
    private $numdiarevisionpagoId = '0';

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
     * @ORM\Column(name="NumTotalPartidasInventarios", type="integer", nullable=true)
     */
    private $numtotalpartidasinventarios = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalcantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_1", type="integer", nullable=true)
     */
    private $numtotaldescuento1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_2", type="integer", nullable=true)
     */
    private $numtotaldescuento2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_3", type="integer", nullable=true)
     */
    private $numtotaldescuento3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_4", type="integer", nullable=true)
     */
    private $numtotaldescuento4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_5", type="integer", nullable=true)
     */
    private $numtotaldescuento5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalDescuento_6", type="integer", nullable=true)
     */
    private $numtotaldescuento6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_1", type="integer", nullable=true)
     */
    private $numtotalimpuesto1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_2", type="integer", nullable=true)
     */
    private $numtotalimpuesto2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_3", type="integer", nullable=true)
     */
    private $numtotalimpuesto3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_4", type="integer", nullable=true)
     */
    private $numtotalimpuesto4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_5", type="integer", nullable=true)
     */
    private $numtotalimpuesto5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto_6", type="integer", nullable=true)
     */
    private $numtotalimpuesto6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_1", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_2", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_3", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_4", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_5", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido_6", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotal", type="integer", nullable=true)
     */
    private $numtotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_id", type="integer", nullable=true)
     */
    private $numclasificacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMensaje_id", type="integer", nullable=true)
     */
    private $nummensajeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteOportunidadEtapa", type="datetime", nullable=true)
     */
    private $dteoportunidadetapa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidadEtapa_id", type="integer", nullable=true)
     */
    private $numoportunidadetapaId = '0';

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
     * Get numoportunidadId
     *
     * @return integer 
     */
    public function getNumoportunidadId()
    {
        return $this->numoportunidadId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Oportunidades
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
     * Set stroportunidad
     *
     * @param string $stroportunidad
     * @return Oportunidades
     */
    public function setStroportunidad($stroportunidad)
    {
        $this->stroportunidad = $stroportunidad;

        return $this;
    }

    /**
     * Get stroportunidad
     *
     * @return string 
     */
    public function getStroportunidad()
    {
        return $this->stroportunidad;
    }

    /**
     * Set dteoportunidad
     *
     * @param \DateTime $dteoportunidad
     * @return Oportunidades
     */
    public function setDteoportunidad($dteoportunidad)
    {
        $this->dteoportunidad = $dteoportunidad;

        return $this;
    }

    /**
     * Get dteoportunidad
     *
     * @return \DateTime 
     */
    public function getDteoportunidad()
    {
        return $this->dteoportunidad;
    }

    /**
     * Set tmeoportunidad
     *
     * @param \DateTime $tmeoportunidad
     * @return Oportunidades
     */
    public function setTmeoportunidad($tmeoportunidad)
    {
        $this->tmeoportunidad = $tmeoportunidad;

        return $this;
    }

    /**
     * Get tmeoportunidad
     *
     * @return \DateTime 
     */
    public function getTmeoportunidad()
    {
        return $this->tmeoportunidad;
    }

    /**
     * Set numcanceladoporId
     *
     * @param integer $numcanceladoporId
     * @return Oportunidades
     */
    public function setNumcanceladoporId($numcanceladoporId)
    {
        $this->numcanceladoporId = $numcanceladoporId;

        return $this;
    }

    /**
     * Get numcanceladoporId
     *
     * @return integer 
     */
    public function getNumcanceladoporId()
    {
        return $this->numcanceladoporId;
    }

    /**
     * Set dtecancelacion
     *
     * @param \DateTime $dtecancelacion
     * @return Oportunidades
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
     * @return Oportunidades
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
     * Set numconceptoId
     *
     * @param integer $numconceptoId
     * @return Oportunidades
     */
    public function setNumconceptoId($numconceptoId)
    {
        $this->numconceptoId = $numconceptoId;

        return $this;
    }

    /**
     * Get numconceptoId
     *
     * @return integer 
     */
    public function getNumconceptoId()
    {
        return $this->numconceptoId;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Oportunidades
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
     * @return Oportunidades
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
     * @return Oportunidades
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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Oportunidades
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
     * @return Oportunidades
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
     * Set numprospectoId
     *
     * @param integer $numprospectoId
     * @return Oportunidades
     */
    public function setNumprospectoId($numprospectoId)
    {
        $this->numprospectoId = $numprospectoId;

        return $this;
    }

    /**
     * Get numprospectoId
     *
     * @return integer 
     */
    public function getNumprospectoId()
    {
        return $this->numprospectoId;
    }

    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Oportunidades
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
     * Set numproyectoId
     *
     * @param integer $numproyectoId
     * @return Oportunidades
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
     * Set numejecutivoId
     *
     * @param integer $numejecutivoId
     * @return Oportunidades
     */
    public function setNumejecutivoId($numejecutivoId)
    {
        $this->numejecutivoId = $numejecutivoId;

        return $this;
    }

    /**
     * Get numejecutivoId
     *
     * @return integer 
     */
    public function getNumejecutivoId()
    {
        return $this->numejecutivoId;
    }

    /**
     * Set numvendedor1Id
     *
     * @param integer $numvendedor1Id
     * @return Oportunidades
     */
    public function setNumvendedor1Id($numvendedor1Id)
    {
        $this->numvendedor1Id = $numvendedor1Id;

        return $this;
    }

    /**
     * Get numvendedor1Id
     *
     * @return integer 
     */
    public function getNumvendedor1Id()
    {
        return $this->numvendedor1Id;
    }

    /**
     * Set numcontactolegalId
     *
     * @param integer $numcontactolegalId
     * @return Oportunidades
     */
    public function setNumcontactolegalId($numcontactolegalId)
    {
        $this->numcontactolegalId = $numcontactolegalId;

        return $this;
    }

    /**
     * Get numcontactolegalId
     *
     * @return integer 
     */
    public function getNumcontactolegalId()
    {
        return $this->numcontactolegalId;
    }

    /**
     * Set numdireccionId
     *
     * @param integer $numdireccionId
     * @return Oportunidades
     */
    public function setNumdireccionId($numdireccionId)
    {
        $this->numdireccionId = $numdireccionId;

        return $this;
    }

    /**
     * Get numdireccionId
     *
     * @return integer 
     */
    public function getNumdireccionId()
    {
        return $this->numdireccionId;
    }

    /**
     * Set numdireccionenvioId
     *
     * @param integer $numdireccionenvioId
     * @return Oportunidades
     */
    public function setNumdireccionenvioId($numdireccionenvioId)
    {
        $this->numdireccionenvioId = $numdireccionenvioId;

        return $this;
    }

    /**
     * Get numdireccionenvioId
     *
     * @return integer 
     */
    public function getNumdireccionenvioId()
    {
        return $this->numdireccionenvioId;
    }

    /**
     * Set numdireccioncorrespondenciaId
     *
     * @param integer $numdireccioncorrespondenciaId
     * @return Oportunidades
     */
    public function setNumdireccioncorrespondenciaId($numdireccioncorrespondenciaId)
    {
        $this->numdireccioncorrespondenciaId = $numdireccioncorrespondenciaId;

        return $this;
    }

    /**
     * Get numdireccioncorrespondenciaId
     *
     * @return integer 
     */
    public function getNumdireccioncorrespondenciaId()
    {
        return $this->numdireccioncorrespondenciaId;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Oportunidades
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
     * @return Oportunidades
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
     * Set numclasemercadoId
     *
     * @param integer $numclasemercadoId
     * @return Oportunidades
     */
    public function setNumclasemercadoId($numclasemercadoId)
    {
        $this->numclasemercadoId = $numclasemercadoId;

        return $this;
    }

    /**
     * Get numclasemercadoId
     *
     * @return integer 
     */
    public function getNumclasemercadoId()
    {
        return $this->numclasemercadoId;
    }

    /**
     * Set nummedioenvioId
     *
     * @param integer $nummedioenvioId
     * @return Oportunidades
     */
    public function setNummedioenvioId($nummedioenvioId)
    {
        $this->nummedioenvioId = $nummedioenvioId;

        return $this;
    }

    /**
     * Get nummedioenvioId
     *
     * @return integer 
     */
    public function getNummedioenvioId()
    {
        return $this->nummedioenvioId;
    }

    /**
     * Set strreferenciaenvio
     *
     * @param string $strreferenciaenvio
     * @return Oportunidades
     */
    public function setStrreferenciaenvio($strreferenciaenvio)
    {
        $this->strreferenciaenvio = $strreferenciaenvio;

        return $this;
    }

    /**
     * Get strreferenciaenvio
     *
     * @return string 
     */
    public function getStrreferenciaenvio()
    {
        return $this->strreferenciaenvio;
    }

    /**
     * Set dteentregamercancia
     *
     * @param \DateTime $dteentregamercancia
     * @return Oportunidades
     */
    public function setDteentregamercancia($dteentregamercancia)
    {
        $this->dteentregamercancia = $dteentregamercancia;

        return $this;
    }

    /**
     * Get dteentregamercancia
     *
     * @return \DateTime 
     */
    public function getDteentregamercancia()
    {
        return $this->dteentregamercancia;
    }

    /**
     * Set numcondicionId
     *
     * @param integer $numcondicionId
     * @return Oportunidades
     */
    public function setNumcondicionId($numcondicionId)
    {
        $this->numcondicionId = $numcondicionId;

        return $this;
    }

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
     * Set numdiarevisionpagoId
     *
     * @param integer $numdiarevisionpagoId
     * @return Oportunidades
     */
    public function setNumdiarevisionpagoId($numdiarevisionpagoId)
    {
        $this->numdiarevisionpagoId = $numdiarevisionpagoId;

        return $this;
    }

    /**
     * Get numdiarevisionpagoId
     *
     * @return integer 
     */
    public function getNumdiarevisionpagoId()
    {
        return $this->numdiarevisionpagoId;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Oportunidades
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
     * @return Oportunidades
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
     * Set numtotalpartidasinventarios
     *
     * @param integer $numtotalpartidasinventarios
     * @return Oportunidades
     */
    public function setNumtotalpartidasinventarios($numtotalpartidasinventarios)
    {
        $this->numtotalpartidasinventarios = $numtotalpartidasinventarios;

        return $this;
    }

    /**
     * Get numtotalpartidasinventarios
     *
     * @return integer 
     */
    public function getNumtotalpartidasinventarios()
    {
        return $this->numtotalpartidasinventarios;
    }

    /**
     * Set numtotalcantidad
     *
     * @param float $numtotalcantidad
     * @return Oportunidades
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
     * Set numtotaldescuento1
     *
     * @param integer $numtotaldescuento1
     * @return Oportunidades
     */
    public function setNumtotaldescuento1($numtotaldescuento1)
    {
        $this->numtotaldescuento1 = $numtotaldescuento1;

        return $this;
    }

    /**
     * Get numtotaldescuento1
     *
     * @return integer 
     */
    public function getNumtotaldescuento1()
    {
        return $this->numtotaldescuento1;
    }

    /**
     * Set numtotaldescuento2
     *
     * @param integer $numtotaldescuento2
     * @return Oportunidades
     */
    public function setNumtotaldescuento2($numtotaldescuento2)
    {
        $this->numtotaldescuento2 = $numtotaldescuento2;

        return $this;
    }

    /**
     * Get numtotaldescuento2
     *
     * @return integer 
     */
    public function getNumtotaldescuento2()
    {
        return $this->numtotaldescuento2;
    }

    /**
     * Set numtotaldescuento3
     *
     * @param integer $numtotaldescuento3
     * @return Oportunidades
     */
    public function setNumtotaldescuento3($numtotaldescuento3)
    {
        $this->numtotaldescuento3 = $numtotaldescuento3;

        return $this;
    }

    /**
     * Get numtotaldescuento3
     *
     * @return integer 
     */
    public function getNumtotaldescuento3()
    {
        return $this->numtotaldescuento3;
    }

    /**
     * Set numtotaldescuento4
     *
     * @param integer $numtotaldescuento4
     * @return Oportunidades
     */
    public function setNumtotaldescuento4($numtotaldescuento4)
    {
        $this->numtotaldescuento4 = $numtotaldescuento4;

        return $this;
    }

    /**
     * Get numtotaldescuento4
     *
     * @return integer 
     */
    public function getNumtotaldescuento4()
    {
        return $this->numtotaldescuento4;
    }

    /**
     * Set numtotaldescuento5
     *
     * @param integer $numtotaldescuento5
     * @return Oportunidades
     */
    public function setNumtotaldescuento5($numtotaldescuento5)
    {
        $this->numtotaldescuento5 = $numtotaldescuento5;

        return $this;
    }

    /**
     * Get numtotaldescuento5
     *
     * @return integer 
     */
    public function getNumtotaldescuento5()
    {
        return $this->numtotaldescuento5;
    }

    /**
     * Set numtotaldescuento6
     *
     * @param integer $numtotaldescuento6
     * @return Oportunidades
     */
    public function setNumtotaldescuento6($numtotaldescuento6)
    {
        $this->numtotaldescuento6 = $numtotaldescuento6;

        return $this;
    }

    /**
     * Get numtotaldescuento6
     *
     * @return integer 
     */
    public function getNumtotaldescuento6()
    {
        return $this->numtotaldescuento6;
    }

    /**
     * Set numtotalimpuesto1
     *
     * @param integer $numtotalimpuesto1
     * @return Oportunidades
     */
    public function setNumtotalimpuesto1($numtotalimpuesto1)
    {
        $this->numtotalimpuesto1 = $numtotalimpuesto1;

        return $this;
    }

    /**
     * Get numtotalimpuesto1
     *
     * @return integer 
     */
    public function getNumtotalimpuesto1()
    {
        return $this->numtotalimpuesto1;
    }

    /**
     * Set numtotalimpuesto2
     *
     * @param integer $numtotalimpuesto2
     * @return Oportunidades
     */
    public function setNumtotalimpuesto2($numtotalimpuesto2)
    {
        $this->numtotalimpuesto2 = $numtotalimpuesto2;

        return $this;
    }

    /**
     * Get numtotalimpuesto2
     *
     * @return integer 
     */
    public function getNumtotalimpuesto2()
    {
        return $this->numtotalimpuesto2;
    }

    /**
     * Set numtotalimpuesto3
     *
     * @param integer $numtotalimpuesto3
     * @return Oportunidades
     */
    public function setNumtotalimpuesto3($numtotalimpuesto3)
    {
        $this->numtotalimpuesto3 = $numtotalimpuesto3;

        return $this;
    }

    /**
     * Get numtotalimpuesto3
     *
     * @return integer 
     */
    public function getNumtotalimpuesto3()
    {
        return $this->numtotalimpuesto3;
    }

    /**
     * Set numtotalimpuesto4
     *
     * @param integer $numtotalimpuesto4
     * @return Oportunidades
     */
    public function setNumtotalimpuesto4($numtotalimpuesto4)
    {
        $this->numtotalimpuesto4 = $numtotalimpuesto4;

        return $this;
    }

    /**
     * Get numtotalimpuesto4
     *
     * @return integer 
     */
    public function getNumtotalimpuesto4()
    {
        return $this->numtotalimpuesto4;
    }

    /**
     * Set numtotalimpuesto5
     *
     * @param integer $numtotalimpuesto5
     * @return Oportunidades
     */
    public function setNumtotalimpuesto5($numtotalimpuesto5)
    {
        $this->numtotalimpuesto5 = $numtotalimpuesto5;

        return $this;
    }

    /**
     * Get numtotalimpuesto5
     *
     * @return integer 
     */
    public function getNumtotalimpuesto5()
    {
        return $this->numtotalimpuesto5;
    }

    /**
     * Set numtotalimpuesto6
     *
     * @param integer $numtotalimpuesto6
     * @return Oportunidades
     */
    public function setNumtotalimpuesto6($numtotalimpuesto6)
    {
        $this->numtotalimpuesto6 = $numtotalimpuesto6;

        return $this;
    }

    /**
     * Get numtotalimpuesto6
     *
     * @return integer 
     */
    public function getNumtotalimpuesto6()
    {
        return $this->numtotalimpuesto6;
    }

    /**
     * Set numtotalimpuestoretenido1
     *
     * @param integer $numtotalimpuestoretenido1
     * @return Oportunidades
     */
    public function setNumtotalimpuestoretenido1($numtotalimpuestoretenido1)
    {
        $this->numtotalimpuestoretenido1 = $numtotalimpuestoretenido1;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido1
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido1()
    {
        return $this->numtotalimpuestoretenido1;
    }

    /**
     * Set numtotalimpuestoretenido2
     *
     * @param integer $numtotalimpuestoretenido2
     * @return Oportunidades
     */
    public function setNumtotalimpuestoretenido2($numtotalimpuestoretenido2)
    {
        $this->numtotalimpuestoretenido2 = $numtotalimpuestoretenido2;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido2
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido2()
    {
        return $this->numtotalimpuestoretenido2;
    }

    /**
     * Set numtotalimpuestoretenido3
     *
     * @param integer $numtotalimpuestoretenido3
     * @return Oportunidades
     */
    public function setNumtotalimpuestoretenido3($numtotalimpuestoretenido3)
    {
        $this->numtotalimpuestoretenido3 = $numtotalimpuestoretenido3;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido3
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido3()
    {
        return $this->numtotalimpuestoretenido3;
    }

    /**
     * Set numtotalimpuestoretenido4
     *
     * @param integer $numtotalimpuestoretenido4
     * @return Oportunidades
     */
    public function setNumtotalimpuestoretenido4($numtotalimpuestoretenido4)
    {
        $this->numtotalimpuestoretenido4 = $numtotalimpuestoretenido4;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido4
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido4()
    {
        return $this->numtotalimpuestoretenido4;
    }

    /**
     * Set numtotalimpuestoretenido5
     *
     * @param integer $numtotalimpuestoretenido5
     * @return Oportunidades
     */
    public function setNumtotalimpuestoretenido5($numtotalimpuestoretenido5)
    {
        $this->numtotalimpuestoretenido5 = $numtotalimpuestoretenido5;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido5
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido5()
    {
        return $this->numtotalimpuestoretenido5;
    }

    /**
     * Set numtotalimpuestoretenido6
     *
     * @param integer $numtotalimpuestoretenido6
     * @return Oportunidades
     */
    public function setNumtotalimpuestoretenido6($numtotalimpuestoretenido6)
    {
        $this->numtotalimpuestoretenido6 = $numtotalimpuestoretenido6;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido6
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido6()
    {
        return $this->numtotalimpuestoretenido6;
    }

    /**
     * Set numtotal
     *
     * @param integer $numtotal
     * @return Oportunidades
     */
    public function setNumtotal($numtotal)
    {
        $this->numtotal = $numtotal;

        return $this;
    }

    /**
     * Get numtotal
     *
     * @return integer 
     */
    public function getNumtotal()
    {
        return $this->numtotal;
    }

    /**
     * Set numclasificacionId
     *
     * @param integer $numclasificacionId
     * @return Oportunidades
     */
    public function setNumclasificacionId($numclasificacionId)
    {
        $this->numclasificacionId = $numclasificacionId;

        return $this;
    }

    /**
     * Get numclasificacionId
     *
     * @return integer 
     */
    public function getNumclasificacionId()
    {
        return $this->numclasificacionId;
    }

    /**
     * Set nummensajeId
     *
     * @param integer $nummensajeId
     * @return Oportunidades
     */
    public function setNummensajeId($nummensajeId)
    {
        $this->nummensajeId = $nummensajeId;

        return $this;
    }

    /**
     * Get nummensajeId
     *
     * @return integer 
     */
    public function getNummensajeId()
    {
        return $this->nummensajeId;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Oportunidades
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
     * Set dteoportunidadetapa
     *
     * @param \DateTime $dteoportunidadetapa
     * @return Oportunidades
     */
    public function setDteoportunidadetapa($dteoportunidadetapa)
    {
        $this->dteoportunidadetapa = $dteoportunidadetapa;

        return $this;
    }

    /**
     * Get dteoportunidadetapa
     *
     * @return \DateTime 
     */
    public function getDteoportunidadetapa()
    {
        return $this->dteoportunidadetapa;
    }

    /**
     * Set numoportunidadetapaId
     *
     * @param integer $numoportunidadetapaId
     * @return Oportunidades
     */
    public function setNumoportunidadetapaId($numoportunidadetapaId)
    {
        $this->numoportunidadetapaId = $numoportunidadetapaId;

        return $this;
    }

    /**
     * Get numoportunidadetapaId
     *
     * @return integer 
     */
    public function getNumoportunidadetapaId()
    {
        return $this->numoportunidadetapaId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Oportunidades
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
     * @return Oportunidades
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
     * @return Oportunidades
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
     * @return Oportunidades
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
     * @return Oportunidades
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
     * @return Oportunidades
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
