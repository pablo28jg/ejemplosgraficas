<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulos
 *
 * @ORM\Table(name="Articulos", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_10", columns={"StrModelo_ky", "StrArticulo_ky"}), @ORM\Index(name="Indice_11", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_2", columns={"NumFamilia_id"}), @ORM\Index(name="Indice_3", columns={"NumTemporada_id"}), @ORM\Index(name="Indice_4", columns={"StrModelo_ky", "NumColor_id", "NumLargo_id", "NumTalla_id"}), @ORM\Index(name="Indice_5", columns={"StrModelo_ky", "NumTalla_id", "NumLargo_id", "NumColor_id"}), @ORM\Index(name="Indice_7", columns={"DteActualizacion"}), @ORM\Index(name="Indice_8", columns={"NumMarca_id"}), @ORM\Index(name="Indice_9", columns={"NumTipoSurtido"}), @ORM\Index(name="Indice_12", columns={"StrCuentaInventario_ky"}), @ORM\Index(name="Indice_13", columns={"StrCuentaIngreso_ky"}), @ORM\Index(name="Indice_14", columns={"StrCuentaCostoVenta_ky"}), @ORM\Index(name="Indice_15", columns={"StrCuentaDevolucionVenta_ky"})})
 * @ORM\Entity
 */
class Articulos
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFamilia_id", type="integer", nullable=true)
     */
    private $numfamiliaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCoordinado_id", type="integer", nullable=true)
     */
    private $numcoordinadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMarca_id", type="integer", nullable=true)
     */
    private $nummarcaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrModeloProducto", type="string", length=20, nullable=true)
     */
    private $strmodeloproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNumeroParte", type="string", length=20, nullable=true)
     */
    private $strnumeroparte;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTemporada_id", type="integer", nullable=true)
     */
    private $numtemporadaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoEtiqueta_id", type="integer", nullable=true)
     */
    private $numgrupoetiquetaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoBarra_id", type="integer", nullable=true)
     */
    private $numcodigobarraId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuerpo_id", type="integer", nullable=true)
     */
    private $numcuerpoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedida_id", type="integer", nullable=true)
     */
    private $numunidadmedidaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoInventario", type="integer", nullable=true)
     */
    private $numtipoinventario = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogControlPedimentos", type="boolean", nullable=true)
     */
    private $logcontrolpedimentos = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogControlLotes", type="boolean", nullable=true)
     */
    private $logcontrollotes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogControlSeries", type="boolean", nullable=true)
     */
    private $logcontrolseries = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMesesGarantia", type="integer", nullable=true)
     */
    private $nummesesgarantia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticuloRelacionado_ky", type="string", length=20, nullable=true)
     */
    private $strarticulorelacionadoKy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRelacionarArticuloVenta", type="boolean", nullable=true)
     */
    private $logrelacionararticuloventa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPagaComisionSerie", type="boolean", nullable=true)
     */
    private $logpagacomisionserie = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogSolicitarReferenciaVenta", type="boolean", nullable=true)
     */
    private $logsolicitarreferenciaventa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogSolicitarDescripcionVenta", type="boolean", nullable=true)
     */
    private $logsolicitardescripcionventa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogSolicitarPrecioVenta", type="boolean", nullable=true)
     */
    private $logsolicitarprecioventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConteoCiclico_id", type="integer", nullable=true)
     */
    private $numconteociclicoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoImpuesto_id", type="integer", nullable=true)
     */
    private $numgrupoimpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseImpuesto_id", type="integer", nullable=true)
     */
    private $numclaseimpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoFiscal_id", type="integer", nullable=true)
     */
    private $numgrupofiscalId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoSurtido", type="integer", nullable=true)
     */
    private $numtiposurtido = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrListaMaterial_ky", type="string", length=20, nullable=true)
     */
    private $strlistamaterialKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPaquete", type="integer", nullable=true)
     */
    private $numtipopaquete = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumListaPrecio_id", type="integer", nullable=true)
     */
    private $numlistaprecioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAtributoModelo_id", type="integer", nullable=true)
     */
    private $numatributomodeloId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrModelo_ky", type="string", length=20, nullable=true)
     */
    private $strmodeloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumColor_id", type="integer", nullable=true)
     */
    private $numcolorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLargo_id", type="integer", nullable=true)
     */
    private $numlargoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTalla_id", type="integer", nullable=true)
     */
    private $numtallaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPaisOrigen_id", type="integer", nullable=true)
     */
    private $numpaisorigenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemComposicion", type="text", length=16, nullable=true)
     */
    private $memcomposicion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemLavado", type="text", length=16, nullable=true)
     */
    private $memlavado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPesable", type="boolean", nullable=true)
     */
    private $logpesable = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTara", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtara = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPeso", type="float", precision=53, scale=0, nullable=true)
     */
    private $numpeso = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumAncho", type="float", precision=53, scale=0, nullable=true)
     */
    private $numancho = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumAlto", type="float", precision=53, scale=0, nullable=true)
     */
    private $numalto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFondo", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfondo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumVolumen", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvolumen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImagen_id", type="integer", nullable=true)
     */
    private $numimagenId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogMostrarImagenVenta", type="boolean", nullable=true)
     */
    private $logmostrarimagenventa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaInventario_ky", type="string", length=20, nullable=true)
     */
    private $strcuentainventarioKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaIngreso_ky", type="string", length=20, nullable=true)
     */
    private $strcuentaingresoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaCostoVenta_ky", type="string", length=20, nullable=true)
     */
    private $strcuentacostoventaKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_1_id", type="integer", nullable=true)
     */
    private $numclasificacion1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_2_id", type="integer", nullable=true)
     */
    private $numclasificacion2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_3_id", type="integer", nullable=true)
     */
    private $numclasificacion3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_4_id", type="integer", nullable=true)
     */
    private $numclasificacion4Id = '0';

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
     * @var string
     *
     * @ORM\Column(name="StrCuentaActivoGasto_ky", type="string", length=20, nullable=true)
     */
    private $strcuentaactivogastoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaDevolucionVenta_ky", type="string", length=20, nullable=true)
     */
    private $strcuentadevolucionventaKy;



    /**
     * Get strarticuloKy
     *
     * @return string 
     */
    public function getStrarticuloKy()
    {
        return $this->strarticuloKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Articulos
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
     * Set numfamiliaId
     *
     * @param integer $numfamiliaId
     * @return Articulos
     */
    public function setNumfamiliaId($numfamiliaId)
    {
        $this->numfamiliaId = $numfamiliaId;

        return $this;
    }

    /**
     * Get numfamiliaId
     *
     * @return integer 
     */
    public function getNumfamiliaId()
    {
        return $this->numfamiliaId;
    }

    /**
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Articulos
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
     * Set numcoordinadoId
     *
     * @param integer $numcoordinadoId
     * @return Articulos
     */
    public function setNumcoordinadoId($numcoordinadoId)
    {
        $this->numcoordinadoId = $numcoordinadoId;

        return $this;
    }

    /**
     * Get numcoordinadoId
     *
     * @return integer 
     */
    public function getNumcoordinadoId()
    {
        return $this->numcoordinadoId;
    }

    /**
     * Set nummarcaId
     *
     * @param integer $nummarcaId
     * @return Articulos
     */
    public function setNummarcaId($nummarcaId)
    {
        $this->nummarcaId = $nummarcaId;

        return $this;
    }

    /**
     * Get nummarcaId
     *
     * @return integer 
     */
    public function getNummarcaId()
    {
        return $this->nummarcaId;
    }

    /**
     * Set strmodeloproducto
     *
     * @param string $strmodeloproducto
     * @return Articulos
     */
    public function setStrmodeloproducto($strmodeloproducto)
    {
        $this->strmodeloproducto = $strmodeloproducto;

        return $this;
    }

    /**
     * Get strmodeloproducto
     *
     * @return string 
     */
    public function getStrmodeloproducto()
    {
        return $this->strmodeloproducto;
    }

    /**
     * Set strnumeroparte
     *
     * @param string $strnumeroparte
     * @return Articulos
     */
    public function setStrnumeroparte($strnumeroparte)
    {
        $this->strnumeroparte = $strnumeroparte;

        return $this;
    }

    /**
     * Get strnumeroparte
     *
     * @return string 
     */
    public function getStrnumeroparte()
    {
        return $this->strnumeroparte;
    }

    /**
     * Set numtemporadaId
     *
     * @param integer $numtemporadaId
     * @return Articulos
     */
    public function setNumtemporadaId($numtemporadaId)
    {
        $this->numtemporadaId = $numtemporadaId;

        return $this;
    }

    /**
     * Get numtemporadaId
     *
     * @return integer 
     */
    public function getNumtemporadaId()
    {
        return $this->numtemporadaId;
    }

    /**
     * Set numgrupoetiquetaId
     *
     * @param integer $numgrupoetiquetaId
     * @return Articulos
     */
    public function setNumgrupoetiquetaId($numgrupoetiquetaId)
    {
        $this->numgrupoetiquetaId = $numgrupoetiquetaId;

        return $this;
    }

    /**
     * Get numgrupoetiquetaId
     *
     * @return integer 
     */
    public function getNumgrupoetiquetaId()
    {
        return $this->numgrupoetiquetaId;
    }

    /**
     * Set numcodigobarraId
     *
     * @param integer $numcodigobarraId
     * @return Articulos
     */
    public function setNumcodigobarraId($numcodigobarraId)
    {
        $this->numcodigobarraId = $numcodigobarraId;

        return $this;
    }

    /**
     * Get numcodigobarraId
     *
     * @return integer 
     */
    public function getNumcodigobarraId()
    {
        return $this->numcodigobarraId;
    }

    /**
     * Set numcuerpoId
     *
     * @param integer $numcuerpoId
     * @return Articulos
     */
    public function setNumcuerpoId($numcuerpoId)
    {
        $this->numcuerpoId = $numcuerpoId;

        return $this;
    }

    /**
     * Get numcuerpoId
     *
     * @return integer 
     */
    public function getNumcuerpoId()
    {
        return $this->numcuerpoId;
    }

    /**
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Articulos
     */
    public function setNumunidadmedidaId($numunidadmedidaId)
    {
        $this->numunidadmedidaId = $numunidadmedidaId;

        return $this;
    }

    /**
     * Get numunidadmedidaId
     *
     * @return integer 
     */
    public function getNumunidadmedidaId()
    {
        return $this->numunidadmedidaId;
    }

    /**
     * Set numtipoinventario
     *
     * @param integer $numtipoinventario
     * @return Articulos
     */
    public function setNumtipoinventario($numtipoinventario)
    {
        $this->numtipoinventario = $numtipoinventario;

        return $this;
    }

    /**
     * Get numtipoinventario
     *
     * @return integer 
     */
    public function getNumtipoinventario()
    {
        return $this->numtipoinventario;
    }

    /**
     * Set logcontrolpedimentos
     *
     * @param boolean $logcontrolpedimentos
     * @return Articulos
     */
    public function setLogcontrolpedimentos($logcontrolpedimentos)
    {
        $this->logcontrolpedimentos = $logcontrolpedimentos;

        return $this;
    }

    /**
     * Get logcontrolpedimentos
     *
     * @return boolean 
     */
    public function getLogcontrolpedimentos()
    {
        return $this->logcontrolpedimentos;
    }

    /**
     * Set logcontrollotes
     *
     * @param boolean $logcontrollotes
     * @return Articulos
     */
    public function setLogcontrollotes($logcontrollotes)
    {
        $this->logcontrollotes = $logcontrollotes;

        return $this;
    }

    /**
     * Get logcontrollotes
     *
     * @return boolean 
     */
    public function getLogcontrollotes()
    {
        return $this->logcontrollotes;
    }

    /**
     * Set logcontrolseries
     *
     * @param boolean $logcontrolseries
     * @return Articulos
     */
    public function setLogcontrolseries($logcontrolseries)
    {
        $this->logcontrolseries = $logcontrolseries;

        return $this;
    }

    /**
     * Get logcontrolseries
     *
     * @return boolean 
     */
    public function getLogcontrolseries()
    {
        return $this->logcontrolseries;
    }

    /**
     * Set nummesesgarantia
     *
     * @param integer $nummesesgarantia
     * @return Articulos
     */
    public function setNummesesgarantia($nummesesgarantia)
    {
        $this->nummesesgarantia = $nummesesgarantia;

        return $this;
    }

    /**
     * Get nummesesgarantia
     *
     * @return integer 
     */
    public function getNummesesgarantia()
    {
        return $this->nummesesgarantia;
    }

    /**
     * Set strarticulorelacionadoKy
     *
     * @param string $strarticulorelacionadoKy
     * @return Articulos
     */
    public function setStrarticulorelacionadoKy($strarticulorelacionadoKy)
    {
        $this->strarticulorelacionadoKy = $strarticulorelacionadoKy;

        return $this;
    }

    /**
     * Get strarticulorelacionadoKy
     *
     * @return string 
     */
    public function getStrarticulorelacionadoKy()
    {
        return $this->strarticulorelacionadoKy;
    }

    /**
     * Set logrelacionararticuloventa
     *
     * @param boolean $logrelacionararticuloventa
     * @return Articulos
     */
    public function setLogrelacionararticuloventa($logrelacionararticuloventa)
    {
        $this->logrelacionararticuloventa = $logrelacionararticuloventa;

        return $this;
    }

    /**
     * Get logrelacionararticuloventa
     *
     * @return boolean 
     */
    public function getLogrelacionararticuloventa()
    {
        return $this->logrelacionararticuloventa;
    }

    /**
     * Set logpagacomisionserie
     *
     * @param boolean $logpagacomisionserie
     * @return Articulos
     */
    public function setLogpagacomisionserie($logpagacomisionserie)
    {
        $this->logpagacomisionserie = $logpagacomisionserie;

        return $this;
    }

    /**
     * Get logpagacomisionserie
     *
     * @return boolean 
     */
    public function getLogpagacomisionserie()
    {
        return $this->logpagacomisionserie;
    }

    /**
     * Set logsolicitarreferenciaventa
     *
     * @param boolean $logsolicitarreferenciaventa
     * @return Articulos
     */
    public function setLogsolicitarreferenciaventa($logsolicitarreferenciaventa)
    {
        $this->logsolicitarreferenciaventa = $logsolicitarreferenciaventa;

        return $this;
    }

    /**
     * Get logsolicitarreferenciaventa
     *
     * @return boolean 
     */
    public function getLogsolicitarreferenciaventa()
    {
        return $this->logsolicitarreferenciaventa;
    }

    /**
     * Set logsolicitardescripcionventa
     *
     * @param boolean $logsolicitardescripcionventa
     * @return Articulos
     */
    public function setLogsolicitardescripcionventa($logsolicitardescripcionventa)
    {
        $this->logsolicitardescripcionventa = $logsolicitardescripcionventa;

        return $this;
    }

    /**
     * Get logsolicitardescripcionventa
     *
     * @return boolean 
     */
    public function getLogsolicitardescripcionventa()
    {
        return $this->logsolicitardescripcionventa;
    }

    /**
     * Set logsolicitarprecioventa
     *
     * @param boolean $logsolicitarprecioventa
     * @return Articulos
     */
    public function setLogsolicitarprecioventa($logsolicitarprecioventa)
    {
        $this->logsolicitarprecioventa = $logsolicitarprecioventa;

        return $this;
    }

    /**
     * Get logsolicitarprecioventa
     *
     * @return boolean 
     */
    public function getLogsolicitarprecioventa()
    {
        return $this->logsolicitarprecioventa;
    }

    /**
     * Set numconteociclicoId
     *
     * @param integer $numconteociclicoId
     * @return Articulos
     */
    public function setNumconteociclicoId($numconteociclicoId)
    {
        $this->numconteociclicoId = $numconteociclicoId;

        return $this;
    }

    /**
     * Get numconteociclicoId
     *
     * @return integer 
     */
    public function getNumconteociclicoId()
    {
        return $this->numconteociclicoId;
    }

    /**
     * Set numgrupoimpuestoId
     *
     * @param integer $numgrupoimpuestoId
     * @return Articulos
     */
    public function setNumgrupoimpuestoId($numgrupoimpuestoId)
    {
        $this->numgrupoimpuestoId = $numgrupoimpuestoId;

        return $this;
    }

    /**
     * Get numgrupoimpuestoId
     *
     * @return integer 
     */
    public function getNumgrupoimpuestoId()
    {
        return $this->numgrupoimpuestoId;
    }

    /**
     * Set numclaseimpuestoId
     *
     * @param integer $numclaseimpuestoId
     * @return Articulos
     */
    public function setNumclaseimpuestoId($numclaseimpuestoId)
    {
        $this->numclaseimpuestoId = $numclaseimpuestoId;

        return $this;
    }

    /**
     * Get numclaseimpuestoId
     *
     * @return integer 
     */
    public function getNumclaseimpuestoId()
    {
        return $this->numclaseimpuestoId;
    }

    /**
     * Set numgrupofiscalId
     *
     * @param integer $numgrupofiscalId
     * @return Articulos
     */
    public function setNumgrupofiscalId($numgrupofiscalId)
    {
        $this->numgrupofiscalId = $numgrupofiscalId;

        return $this;
    }

    /**
     * Get numgrupofiscalId
     *
     * @return integer 
     */
    public function getNumgrupofiscalId()
    {
        return $this->numgrupofiscalId;
    }

    /**
     * Set numtiposurtido
     *
     * @param integer $numtiposurtido
     * @return Articulos
     */
    public function setNumtiposurtido($numtiposurtido)
    {
        $this->numtiposurtido = $numtiposurtido;

        return $this;
    }

    /**
     * Get numtiposurtido
     *
     * @return integer 
     */
    public function getNumtiposurtido()
    {
        return $this->numtiposurtido;
    }

    /**
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Articulos
     */
    public function setNumcaracteristicaId($numcaracteristicaId)
    {
        $this->numcaracteristicaId = $numcaracteristicaId;

        return $this;
    }

    /**
     * Get numcaracteristicaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaId()
    {
        return $this->numcaracteristicaId;
    }

    /**
     * Set strlistamaterialKy
     *
     * @param string $strlistamaterialKy
     * @return Articulos
     */
    public function setStrlistamaterialKy($strlistamaterialKy)
    {
        $this->strlistamaterialKy = $strlistamaterialKy;

        return $this;
    }

    /**
     * Get strlistamaterialKy
     *
     * @return string 
     */
    public function getStrlistamaterialKy()
    {
        return $this->strlistamaterialKy;
    }

    /**
     * Set numtipopaquete
     *
     * @param integer $numtipopaquete
     * @return Articulos
     */
    public function setNumtipopaquete($numtipopaquete)
    {
        $this->numtipopaquete = $numtipopaquete;

        return $this;
    }

    /**
     * Get numtipopaquete
     *
     * @return integer 
     */
    public function getNumtipopaquete()
    {
        return $this->numtipopaquete;
    }

    /**
     * Set numlistaprecioId
     *
     * @param integer $numlistaprecioId
     * @return Articulos
     */
    public function setNumlistaprecioId($numlistaprecioId)
    {
        $this->numlistaprecioId = $numlistaprecioId;

        return $this;
    }

    /**
     * Get numlistaprecioId
     *
     * @return integer 
     */
    public function getNumlistaprecioId()
    {
        return $this->numlistaprecioId;
    }

    /**
     * Set numatributomodeloId
     *
     * @param integer $numatributomodeloId
     * @return Articulos
     */
    public function setNumatributomodeloId($numatributomodeloId)
    {
        $this->numatributomodeloId = $numatributomodeloId;

        return $this;
    }

    /**
     * Get numatributomodeloId
     *
     * @return integer 
     */
    public function getNumatributomodeloId()
    {
        return $this->numatributomodeloId;
    }

    /**
     * Set strmodeloKy
     *
     * @param string $strmodeloKy
     * @return Articulos
     */
    public function setStrmodeloKy($strmodeloKy)
    {
        $this->strmodeloKy = $strmodeloKy;

        return $this;
    }

    /**
     * Get strmodeloKy
     *
     * @return string 
     */
    public function getStrmodeloKy()
    {
        return $this->strmodeloKy;
    }

    /**
     * Set numcolorId
     *
     * @param integer $numcolorId
     * @return Articulos
     */
    public function setNumcolorId($numcolorId)
    {
        $this->numcolorId = $numcolorId;

        return $this;
    }

    /**
     * Get numcolorId
     *
     * @return integer 
     */
    public function getNumcolorId()
    {
        return $this->numcolorId;
    }

    /**
     * Set numlargoId
     *
     * @param integer $numlargoId
     * @return Articulos
     */
    public function setNumlargoId($numlargoId)
    {
        $this->numlargoId = $numlargoId;

        return $this;
    }

    /**
     * Get numlargoId
     *
     * @return integer 
     */
    public function getNumlargoId()
    {
        return $this->numlargoId;
    }

    /**
     * Set numtallaId
     *
     * @param integer $numtallaId
     * @return Articulos
     */
    public function setNumtallaId($numtallaId)
    {
        $this->numtallaId = $numtallaId;

        return $this;
    }

    /**
     * Get numtallaId
     *
     * @return integer 
     */
    public function getNumtallaId()
    {
        return $this->numtallaId;
    }

    /**
     * Set numpaisorigenId
     *
     * @param integer $numpaisorigenId
     * @return Articulos
     */
    public function setNumpaisorigenId($numpaisorigenId)
    {
        $this->numpaisorigenId = $numpaisorigenId;

        return $this;
    }

    /**
     * Get numpaisorigenId
     *
     * @return integer 
     */
    public function getNumpaisorigenId()
    {
        return $this->numpaisorigenId;
    }

    /**
     * Set memcomposicion
     *
     * @param string $memcomposicion
     * @return Articulos
     */
    public function setMemcomposicion($memcomposicion)
    {
        $this->memcomposicion = $memcomposicion;

        return $this;
    }

    /**
     * Get memcomposicion
     *
     * @return string 
     */
    public function getMemcomposicion()
    {
        return $this->memcomposicion;
    }

    /**
     * Set memlavado
     *
     * @param string $memlavado
     * @return Articulos
     */
    public function setMemlavado($memlavado)
    {
        $this->memlavado = $memlavado;

        return $this;
    }

    /**
     * Get memlavado
     *
     * @return string 
     */
    public function getMemlavado()
    {
        return $this->memlavado;
    }

    /**
     * Set logpesable
     *
     * @param boolean $logpesable
     * @return Articulos
     */
    public function setLogpesable($logpesable)
    {
        $this->logpesable = $logpesable;

        return $this;
    }

    /**
     * Get logpesable
     *
     * @return boolean 
     */
    public function getLogpesable()
    {
        return $this->logpesable;
    }

    /**
     * Set numtara
     *
     * @param float $numtara
     * @return Articulos
     */
    public function setNumtara($numtara)
    {
        $this->numtara = $numtara;

        return $this;
    }

    /**
     * Get numtara
     *
     * @return float 
     */
    public function getNumtara()
    {
        return $this->numtara;
    }

    /**
     * Set numpeso
     *
     * @param float $numpeso
     * @return Articulos
     */
    public function setNumpeso($numpeso)
    {
        $this->numpeso = $numpeso;

        return $this;
    }

    /**
     * Get numpeso
     *
     * @return float 
     */
    public function getNumpeso()
    {
        return $this->numpeso;
    }

    /**
     * Set numancho
     *
     * @param float $numancho
     * @return Articulos
     */
    public function setNumancho($numancho)
    {
        $this->numancho = $numancho;

        return $this;
    }

    /**
     * Get numancho
     *
     * @return float 
     */
    public function getNumancho()
    {
        return $this->numancho;
    }

    /**
     * Set numalto
     *
     * @param float $numalto
     * @return Articulos
     */
    public function setNumalto($numalto)
    {
        $this->numalto = $numalto;

        return $this;
    }

    /**
     * Get numalto
     *
     * @return float 
     */
    public function getNumalto()
    {
        return $this->numalto;
    }

    /**
     * Set numfondo
     *
     * @param float $numfondo
     * @return Articulos
     */
    public function setNumfondo($numfondo)
    {
        $this->numfondo = $numfondo;

        return $this;
    }

    /**
     * Get numfondo
     *
     * @return float 
     */
    public function getNumfondo()
    {
        return $this->numfondo;
    }

    /**
     * Set numvolumen
     *
     * @param float $numvolumen
     * @return Articulos
     */
    public function setNumvolumen($numvolumen)
    {
        $this->numvolumen = $numvolumen;

        return $this;
    }

    /**
     * Get numvolumen
     *
     * @return float 
     */
    public function getNumvolumen()
    {
        return $this->numvolumen;
    }

    /**
     * Set numimagenId
     *
     * @param integer $numimagenId
     * @return Articulos
     */
    public function setNumimagenId($numimagenId)
    {
        $this->numimagenId = $numimagenId;

        return $this;
    }

    /**
     * Get numimagenId
     *
     * @return integer 
     */
    public function getNumimagenId()
    {
        return $this->numimagenId;
    }

    /**
     * Set logmostrarimagenventa
     *
     * @param boolean $logmostrarimagenventa
     * @return Articulos
     */
    public function setLogmostrarimagenventa($logmostrarimagenventa)
    {
        $this->logmostrarimagenventa = $logmostrarimagenventa;

        return $this;
    }

    /**
     * Get logmostrarimagenventa
     *
     * @return boolean 
     */
    public function getLogmostrarimagenventa()
    {
        return $this->logmostrarimagenventa;
    }

    /**
     * Set strcuentainventarioKy
     *
     * @param string $strcuentainventarioKy
     * @return Articulos
     */
    public function setStrcuentainventarioKy($strcuentainventarioKy)
    {
        $this->strcuentainventarioKy = $strcuentainventarioKy;

        return $this;
    }

    /**
     * Get strcuentainventarioKy
     *
     * @return string 
     */
    public function getStrcuentainventarioKy()
    {
        return $this->strcuentainventarioKy;
    }

    /**
     * Set strcuentaingresoKy
     *
     * @param string $strcuentaingresoKy
     * @return Articulos
     */
    public function setStrcuentaingresoKy($strcuentaingresoKy)
    {
        $this->strcuentaingresoKy = $strcuentaingresoKy;

        return $this;
    }

    /**
     * Get strcuentaingresoKy
     *
     * @return string 
     */
    public function getStrcuentaingresoKy()
    {
        return $this->strcuentaingresoKy;
    }

    /**
     * Set strcuentacostoventaKy
     *
     * @param string $strcuentacostoventaKy
     * @return Articulos
     */
    public function setStrcuentacostoventaKy($strcuentacostoventaKy)
    {
        $this->strcuentacostoventaKy = $strcuentacostoventaKy;

        return $this;
    }

    /**
     * Get strcuentacostoventaKy
     *
     * @return string 
     */
    public function getStrcuentacostoventaKy()
    {
        return $this->strcuentacostoventaKy;
    }

    /**
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Articulos
     */
    public function setNumclasificacion1Id($numclasificacion1Id)
    {
        $this->numclasificacion1Id = $numclasificacion1Id;

        return $this;
    }

    /**
     * Get numclasificacion1Id
     *
     * @return integer 
     */
    public function getNumclasificacion1Id()
    {
        return $this->numclasificacion1Id;
    }

    /**
     * Set numclasificacion2Id
     *
     * @param integer $numclasificacion2Id
     * @return Articulos
     */
    public function setNumclasificacion2Id($numclasificacion2Id)
    {
        $this->numclasificacion2Id = $numclasificacion2Id;

        return $this;
    }

    /**
     * Get numclasificacion2Id
     *
     * @return integer 
     */
    public function getNumclasificacion2Id()
    {
        return $this->numclasificacion2Id;
    }

    /**
     * Set numclasificacion3Id
     *
     * @param integer $numclasificacion3Id
     * @return Articulos
     */
    public function setNumclasificacion3Id($numclasificacion3Id)
    {
        $this->numclasificacion3Id = $numclasificacion3Id;

        return $this;
    }

    /**
     * Get numclasificacion3Id
     *
     * @return integer 
     */
    public function getNumclasificacion3Id()
    {
        return $this->numclasificacion3Id;
    }

    /**
     * Set numclasificacion4Id
     *
     * @param integer $numclasificacion4Id
     * @return Articulos
     */
    public function setNumclasificacion4Id($numclasificacion4Id)
    {
        $this->numclasificacion4Id = $numclasificacion4Id;

        return $this;
    }

    /**
     * Get numclasificacion4Id
     *
     * @return integer 
     */
    public function getNumclasificacion4Id()
    {
        return $this->numclasificacion4Id;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Articulos
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
     * @return Articulos
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
     * @return Articulos
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
     * @return Articulos
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
     * @return Articulos
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
     * @return Articulos
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
     * Set strcuentaactivogastoKy
     *
     * @param string $strcuentaactivogastoKy
     * @return Articulos
     */
    public function setStrcuentaactivogastoKy($strcuentaactivogastoKy)
    {
        $this->strcuentaactivogastoKy = $strcuentaactivogastoKy;

        return $this;
    }

    /**
     * Get strcuentaactivogastoKy
     *
     * @return string 
     */
    public function getStrcuentaactivogastoKy()
    {
        return $this->strcuentaactivogastoKy;
    }

    /**
     * Set strcuentadevolucionventaKy
     *
     * @param string $strcuentadevolucionventaKy
     * @return Articulos
     */
    public function setStrcuentadevolucionventaKy($strcuentadevolucionventaKy)
    {
        $this->strcuentadevolucionventaKy = $strcuentadevolucionventaKy;

        return $this;
    }

    /**
     * Get strcuentadevolucionventaKy
     *
     * @return string 
     */
    public function getStrcuentadevolucionventaKy()
    {
        return $this->strcuentadevolucionventaKy;
    }
}
