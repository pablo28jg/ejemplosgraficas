<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oportunidadesinventarios
 *
 * @ORM\Table(name="OportunidadesInventarios", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_2", columns={"NumProyecto_id"}), @ORM\Index(name="Indice_3", columns={"NumActividad_id"}), @ORM\Index(name="Indice_4", columns={"StrArticulo_ky"}), @ORM\Index(name="Indice_5", columns={"NumCaracteristica_id"}), @ORM\Index(name="Indice_6", columns={"NumUnidadMedida_id"}), @ORM\Index(name="Indice_7", columns={"NumMoneda_id"}), @ORM\Index(name="Indice_8", columns={"NumOportunidad_id", "NumAlmacen_id", "NumOportunidadCaracteristica_id", "StrArticulo_ky"})})
 * @ORM\Entity
 */
class Oportunidadesinventarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numoportunidadId = '0';

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
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAsociado_ky", type="string", length=20, nullable=true)
     */
    private $strasociadoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="NumProyecto_id", type="integer", nullable=true)
     */
    private $numproyectoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActividad_id", type="integer", nullable=true)
     */
    private $numactividadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticuloOrigen_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloorigenKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivoOrigen_id", type="integer", nullable=true)
     */
    private $numconsecutivoorigenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedida_id", type="integer", nullable=true)
     */
    private $numunidadmedidaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorConversion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactorconversion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAfectacion", type="integer", nullable=true)
     */
    private $numtipoafectacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

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
     * @ORM\Column(name="NumNivelPrecio", type="integer", nullable=true)
     */
    private $numnivelprecio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactortipocambio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioBase", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numpreciobase = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioVenta", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioVentaNeto", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numprecioventaneto = '0';

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
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeDescuento_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajedescuento3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeDescuento_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajedescuento4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeDescuento_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajedescuento5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeDescuento_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajedescuento6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteDescuento_1", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportedescuento1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteDescuento_2", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportedescuento2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteDescuento_3", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportedescuento3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteDescuento_4", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportedescuento4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteDescuento_5", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportedescuento5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteDescuento_6", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportedescuento6 = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumImpuestoRetenido_1_id", type="integer", nullable=true)
     */
    private $numimpuestoretenido1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuestoRetenido_2_id", type="integer", nullable=true)
     */
    private $numimpuestoretenido2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuestoRetenido_3_id", type="integer", nullable=true)
     */
    private $numimpuestoretenido3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuestoRetenido_4_id", type="integer", nullable=true)
     */
    private $numimpuestoretenido4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuestoRetenido_5_id", type="integer", nullable=true)
     */
    private $numimpuestoretenido5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuestoRetenido_6_id", type="integer", nullable=true)
     */
    private $numimpuestoretenido6Id = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuesto_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuesto1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuesto_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuesto2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuesto_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuesto3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuesto_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuesto4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuesto_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuesto5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuesto_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuesto6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuestoRetenido_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuestoretenido1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuestoRetenido_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuestoretenido2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuestoRetenido_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuestoretenido3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuestoRetenido_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuestoretenido4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuestoRetenido_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuestoretenido5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuestoRetenido_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuestoretenido6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuesto_1", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuesto1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuesto_2", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuesto2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuesto_3", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuesto3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuesto_4", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuesto4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuesto_5", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuesto5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuesto_6", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuesto6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuestoRetenido_1", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuestoretenido1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuestoRetenido_2", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuestoretenido2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuestoRetenido_3", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuestoretenido3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuestoRetenido_4", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuestoretenido4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuestoRetenido_5", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuestoretenido5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteImpuestoRetenido_6", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteimpuestoretenido6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidadCaracteristica_id", type="integer", nullable=true)
     */
    private $numoportunidadcaracteristicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidadRegistro_id", type="integer", nullable=true)
     */
    private $numoportunidadregistroId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;



    /**
     * Set numoportunidadId
     *
     * @param integer $numoportunidadId
     * @return Oportunidadesinventarios
     */
    public function setNumoportunidadId($numoportunidadId)
    {
        $this->numoportunidadId = $numoportunidadId;

        return $this;
    }

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
     * @return Oportunidadesinventarios
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Oportunidadesinventarios
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
     * Set strasociadoKy
     *
     * @param string $strasociadoKy
     * @return Oportunidadesinventarios
     */
    public function setStrasociadoKy($strasociadoKy)
    {
        $this->strasociadoKy = $strasociadoKy;

        return $this;
    }

    /**
     * Get strasociadoKy
     *
     * @return string 
     */
    public function getStrasociadoKy()
    {
        return $this->strasociadoKy;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Oportunidadesinventarios
     */
    public function setStrarticuloKy($strarticuloKy)
    {
        $this->strarticuloKy = $strarticuloKy;

        return $this;
    }

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
     * @return Oportunidadesinventarios
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
     * @return Oportunidadesinventarios
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
     * Set numactividadId
     *
     * @param integer $numactividadId
     * @return Oportunidadesinventarios
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
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Oportunidadesinventarios
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
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Oportunidadesinventarios
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
     * Set strarticuloorigenKy
     *
     * @param string $strarticuloorigenKy
     * @return Oportunidadesinventarios
     */
    public function setStrarticuloorigenKy($strarticuloorigenKy)
    {
        $this->strarticuloorigenKy = $strarticuloorigenKy;

        return $this;
    }

    /**
     * Get strarticuloorigenKy
     *
     * @return string 
     */
    public function getStrarticuloorigenKy()
    {
        return $this->strarticuloorigenKy;
    }

    /**
     * Set numconsecutivoorigenId
     *
     * @param integer $numconsecutivoorigenId
     * @return Oportunidadesinventarios
     */
    public function setNumconsecutivoorigenId($numconsecutivoorigenId)
    {
        $this->numconsecutivoorigenId = $numconsecutivoorigenId;

        return $this;
    }

    /**
     * Get numconsecutivoorigenId
     *
     * @return integer 
     */
    public function getNumconsecutivoorigenId()
    {
        return $this->numconsecutivoorigenId;
    }

    /**
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Oportunidadesinventarios
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
     * Set numfactorconversion
     *
     * @param float $numfactorconversion
     * @return Oportunidadesinventarios
     */
    public function setNumfactorconversion($numfactorconversion)
    {
        $this->numfactorconversion = $numfactorconversion;

        return $this;
    }

    /**
     * Get numfactorconversion
     *
     * @return float 
     */
    public function getNumfactorconversion()
    {
        return $this->numfactorconversion;
    }

    /**
     * Set numtipoafectacion
     *
     * @param integer $numtipoafectacion
     * @return Oportunidadesinventarios
     */
    public function setNumtipoafectacion($numtipoafectacion)
    {
        $this->numtipoafectacion = $numtipoafectacion;

        return $this;
    }

    /**
     * Get numtipoafectacion
     *
     * @return integer 
     */
    public function getNumtipoafectacion()
    {
        return $this->numtipoafectacion;
    }

    /**
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Oportunidadesinventarios
     */
    public function setNumcantidad($numcantidad)
    {
        $this->numcantidad = $numcantidad;

        return $this;
    }

    /**
     * Get numcantidad
     *
     * @return float 
     */
    public function getNumcantidad()
    {
        return $this->numcantidad;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Oportunidadesinventarios
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
     * @return Oportunidadesinventarios
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
     * Set numnivelprecio
     *
     * @param integer $numnivelprecio
     * @return Oportunidadesinventarios
     */
    public function setNumnivelprecio($numnivelprecio)
    {
        $this->numnivelprecio = $numnivelprecio;

        return $this;
    }

    /**
     * Get numnivelprecio
     *
     * @return integer 
     */
    public function getNumnivelprecio()
    {
        return $this->numnivelprecio;
    }

    /**
     * Set numfactortipocambio
     *
     * @param float $numfactortipocambio
     * @return Oportunidadesinventarios
     */
    public function setNumfactortipocambio($numfactortipocambio)
    {
        $this->numfactortipocambio = $numfactortipocambio;

        return $this;
    }

    /**
     * Get numfactortipocambio
     *
     * @return float 
     */
    public function getNumfactortipocambio()
    {
        return $this->numfactortipocambio;
    }

    /**
     * Set numpreciobase
     *
     * @param string $numpreciobase
     * @return Oportunidadesinventarios
     */
    public function setNumpreciobase($numpreciobase)
    {
        $this->numpreciobase = $numpreciobase;

        return $this;
    }

    /**
     * Get numpreciobase
     *
     * @return string 
     */
    public function getNumpreciobase()
    {
        return $this->numpreciobase;
    }

    /**
     * Set numprecioventa
     *
     * @param string $numprecioventa
     * @return Oportunidadesinventarios
     */
    public function setNumprecioventa($numprecioventa)
    {
        $this->numprecioventa = $numprecioventa;

        return $this;
    }

    /**
     * Get numprecioventa
     *
     * @return string 
     */
    public function getNumprecioventa()
    {
        return $this->numprecioventa;
    }

    /**
     * Set numprecioventaneto
     *
     * @param string $numprecioventaneto
     * @return Oportunidadesinventarios
     */
    public function setNumprecioventaneto($numprecioventaneto)
    {
        $this->numprecioventaneto = $numprecioventaneto;

        return $this;
    }

    /**
     * Get numprecioventaneto
     *
     * @return string 
     */
    public function getNumprecioventaneto()
    {
        return $this->numprecioventaneto;
    }

    /**
     * Set numporcentajedescuento1
     *
     * @param float $numporcentajedescuento1
     * @return Oportunidadesinventarios
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
     * @return Oportunidadesinventarios
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
     * Set numporcentajedescuento3
     *
     * @param float $numporcentajedescuento3
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajedescuento3($numporcentajedescuento3)
    {
        $this->numporcentajedescuento3 = $numporcentajedescuento3;

        return $this;
    }

    /**
     * Get numporcentajedescuento3
     *
     * @return float 
     */
    public function getNumporcentajedescuento3()
    {
        return $this->numporcentajedescuento3;
    }

    /**
     * Set numporcentajedescuento4
     *
     * @param float $numporcentajedescuento4
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajedescuento4($numporcentajedescuento4)
    {
        $this->numporcentajedescuento4 = $numporcentajedescuento4;

        return $this;
    }

    /**
     * Get numporcentajedescuento4
     *
     * @return float 
     */
    public function getNumporcentajedescuento4()
    {
        return $this->numporcentajedescuento4;
    }

    /**
     * Set numporcentajedescuento5
     *
     * @param float $numporcentajedescuento5
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajedescuento5($numporcentajedescuento5)
    {
        $this->numporcentajedescuento5 = $numporcentajedescuento5;

        return $this;
    }

    /**
     * Get numporcentajedescuento5
     *
     * @return float 
     */
    public function getNumporcentajedescuento5()
    {
        return $this->numporcentajedescuento5;
    }

    /**
     * Set numporcentajedescuento6
     *
     * @param float $numporcentajedescuento6
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajedescuento6($numporcentajedescuento6)
    {
        $this->numporcentajedescuento6 = $numporcentajedescuento6;

        return $this;
    }

    /**
     * Get numporcentajedescuento6
     *
     * @return float 
     */
    public function getNumporcentajedescuento6()
    {
        return $this->numporcentajedescuento6;
    }

    /**
     * Set numimportedescuento1
     *
     * @param string $numimportedescuento1
     * @return Oportunidadesinventarios
     */
    public function setNumimportedescuento1($numimportedescuento1)
    {
        $this->numimportedescuento1 = $numimportedescuento1;

        return $this;
    }

    /**
     * Get numimportedescuento1
     *
     * @return string 
     */
    public function getNumimportedescuento1()
    {
        return $this->numimportedescuento1;
    }

    /**
     * Set numimportedescuento2
     *
     * @param string $numimportedescuento2
     * @return Oportunidadesinventarios
     */
    public function setNumimportedescuento2($numimportedescuento2)
    {
        $this->numimportedescuento2 = $numimportedescuento2;

        return $this;
    }

    /**
     * Get numimportedescuento2
     *
     * @return string 
     */
    public function getNumimportedescuento2()
    {
        return $this->numimportedescuento2;
    }

    /**
     * Set numimportedescuento3
     *
     * @param string $numimportedescuento3
     * @return Oportunidadesinventarios
     */
    public function setNumimportedescuento3($numimportedescuento3)
    {
        $this->numimportedescuento3 = $numimportedescuento3;

        return $this;
    }

    /**
     * Get numimportedescuento3
     *
     * @return string 
     */
    public function getNumimportedescuento3()
    {
        return $this->numimportedescuento3;
    }

    /**
     * Set numimportedescuento4
     *
     * @param string $numimportedescuento4
     * @return Oportunidadesinventarios
     */
    public function setNumimportedescuento4($numimportedescuento4)
    {
        $this->numimportedescuento4 = $numimportedescuento4;

        return $this;
    }

    /**
     * Get numimportedescuento4
     *
     * @return string 
     */
    public function getNumimportedescuento4()
    {
        return $this->numimportedescuento4;
    }

    /**
     * Set numimportedescuento5
     *
     * @param string $numimportedescuento5
     * @return Oportunidadesinventarios
     */
    public function setNumimportedescuento5($numimportedescuento5)
    {
        $this->numimportedescuento5 = $numimportedescuento5;

        return $this;
    }

    /**
     * Get numimportedescuento5
     *
     * @return string 
     */
    public function getNumimportedescuento5()
    {
        return $this->numimportedescuento5;
    }

    /**
     * Set numimportedescuento6
     *
     * @param string $numimportedescuento6
     * @return Oportunidadesinventarios
     */
    public function setNumimportedescuento6($numimportedescuento6)
    {
        $this->numimportedescuento6 = $numimportedescuento6;

        return $this;
    }

    /**
     * Get numimportedescuento6
     *
     * @return string 
     */
    public function getNumimportedescuento6()
    {
        return $this->numimportedescuento6;
    }

    /**
     * Set logimpuestoincluido
     *
     * @param boolean $logimpuestoincluido
     * @return Oportunidadesinventarios
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
     * @return Oportunidadesinventarios
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
     * @return Oportunidadesinventarios
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
     * @return Oportunidadesinventarios
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
     * @return Oportunidadesinventarios
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
     * @return Oportunidadesinventarios
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
     * @return Oportunidadesinventarios
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
     * Set numimpuestoretenido1Id
     *
     * @param integer $numimpuestoretenido1Id
     * @return Oportunidadesinventarios
     */
    public function setNumimpuestoretenido1Id($numimpuestoretenido1Id)
    {
        $this->numimpuestoretenido1Id = $numimpuestoretenido1Id;

        return $this;
    }

    /**
     * Get numimpuestoretenido1Id
     *
     * @return integer 
     */
    public function getNumimpuestoretenido1Id()
    {
        return $this->numimpuestoretenido1Id;
    }

    /**
     * Set numimpuestoretenido2Id
     *
     * @param integer $numimpuestoretenido2Id
     * @return Oportunidadesinventarios
     */
    public function setNumimpuestoretenido2Id($numimpuestoretenido2Id)
    {
        $this->numimpuestoretenido2Id = $numimpuestoretenido2Id;

        return $this;
    }

    /**
     * Get numimpuestoretenido2Id
     *
     * @return integer 
     */
    public function getNumimpuestoretenido2Id()
    {
        return $this->numimpuestoretenido2Id;
    }

    /**
     * Set numimpuestoretenido3Id
     *
     * @param integer $numimpuestoretenido3Id
     * @return Oportunidadesinventarios
     */
    public function setNumimpuestoretenido3Id($numimpuestoretenido3Id)
    {
        $this->numimpuestoretenido3Id = $numimpuestoretenido3Id;

        return $this;
    }

    /**
     * Get numimpuestoretenido3Id
     *
     * @return integer 
     */
    public function getNumimpuestoretenido3Id()
    {
        return $this->numimpuestoretenido3Id;
    }

    /**
     * Set numimpuestoretenido4Id
     *
     * @param integer $numimpuestoretenido4Id
     * @return Oportunidadesinventarios
     */
    public function setNumimpuestoretenido4Id($numimpuestoretenido4Id)
    {
        $this->numimpuestoretenido4Id = $numimpuestoretenido4Id;

        return $this;
    }

    /**
     * Get numimpuestoretenido4Id
     *
     * @return integer 
     */
    public function getNumimpuestoretenido4Id()
    {
        return $this->numimpuestoretenido4Id;
    }

    /**
     * Set numimpuestoretenido5Id
     *
     * @param integer $numimpuestoretenido5Id
     * @return Oportunidadesinventarios
     */
    public function setNumimpuestoretenido5Id($numimpuestoretenido5Id)
    {
        $this->numimpuestoretenido5Id = $numimpuestoretenido5Id;

        return $this;
    }

    /**
     * Get numimpuestoretenido5Id
     *
     * @return integer 
     */
    public function getNumimpuestoretenido5Id()
    {
        return $this->numimpuestoretenido5Id;
    }

    /**
     * Set numimpuestoretenido6Id
     *
     * @param integer $numimpuestoretenido6Id
     * @return Oportunidadesinventarios
     */
    public function setNumimpuestoretenido6Id($numimpuestoretenido6Id)
    {
        $this->numimpuestoretenido6Id = $numimpuestoretenido6Id;

        return $this;
    }

    /**
     * Get numimpuestoretenido6Id
     *
     * @return integer 
     */
    public function getNumimpuestoretenido6Id()
    {
        return $this->numimpuestoretenido6Id;
    }

    /**
     * Set numporcentajeimpuesto1
     *
     * @param float $numporcentajeimpuesto1
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuesto1($numporcentajeimpuesto1)
    {
        $this->numporcentajeimpuesto1 = $numporcentajeimpuesto1;

        return $this;
    }

    /**
     * Get numporcentajeimpuesto1
     *
     * @return float 
     */
    public function getNumporcentajeimpuesto1()
    {
        return $this->numporcentajeimpuesto1;
    }

    /**
     * Set numporcentajeimpuesto2
     *
     * @param float $numporcentajeimpuesto2
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuesto2($numporcentajeimpuesto2)
    {
        $this->numporcentajeimpuesto2 = $numporcentajeimpuesto2;

        return $this;
    }

    /**
     * Get numporcentajeimpuesto2
     *
     * @return float 
     */
    public function getNumporcentajeimpuesto2()
    {
        return $this->numporcentajeimpuesto2;
    }

    /**
     * Set numporcentajeimpuesto3
     *
     * @param float $numporcentajeimpuesto3
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuesto3($numporcentajeimpuesto3)
    {
        $this->numporcentajeimpuesto3 = $numporcentajeimpuesto3;

        return $this;
    }

    /**
     * Get numporcentajeimpuesto3
     *
     * @return float 
     */
    public function getNumporcentajeimpuesto3()
    {
        return $this->numporcentajeimpuesto3;
    }

    /**
     * Set numporcentajeimpuesto4
     *
     * @param float $numporcentajeimpuesto4
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuesto4($numporcentajeimpuesto4)
    {
        $this->numporcentajeimpuesto4 = $numporcentajeimpuesto4;

        return $this;
    }

    /**
     * Get numporcentajeimpuesto4
     *
     * @return float 
     */
    public function getNumporcentajeimpuesto4()
    {
        return $this->numporcentajeimpuesto4;
    }

    /**
     * Set numporcentajeimpuesto5
     *
     * @param float $numporcentajeimpuesto5
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuesto5($numporcentajeimpuesto5)
    {
        $this->numporcentajeimpuesto5 = $numporcentajeimpuesto5;

        return $this;
    }

    /**
     * Get numporcentajeimpuesto5
     *
     * @return float 
     */
    public function getNumporcentajeimpuesto5()
    {
        return $this->numporcentajeimpuesto5;
    }

    /**
     * Set numporcentajeimpuesto6
     *
     * @param float $numporcentajeimpuesto6
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuesto6($numporcentajeimpuesto6)
    {
        $this->numporcentajeimpuesto6 = $numporcentajeimpuesto6;

        return $this;
    }

    /**
     * Get numporcentajeimpuesto6
     *
     * @return float 
     */
    public function getNumporcentajeimpuesto6()
    {
        return $this->numporcentajeimpuesto6;
    }

    /**
     * Set numporcentajeimpuestoretenido1
     *
     * @param float $numporcentajeimpuestoretenido1
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuestoretenido1($numporcentajeimpuestoretenido1)
    {
        $this->numporcentajeimpuestoretenido1 = $numporcentajeimpuestoretenido1;

        return $this;
    }

    /**
     * Get numporcentajeimpuestoretenido1
     *
     * @return float 
     */
    public function getNumporcentajeimpuestoretenido1()
    {
        return $this->numporcentajeimpuestoretenido1;
    }

    /**
     * Set numporcentajeimpuestoretenido2
     *
     * @param float $numporcentajeimpuestoretenido2
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuestoretenido2($numporcentajeimpuestoretenido2)
    {
        $this->numporcentajeimpuestoretenido2 = $numporcentajeimpuestoretenido2;

        return $this;
    }

    /**
     * Get numporcentajeimpuestoretenido2
     *
     * @return float 
     */
    public function getNumporcentajeimpuestoretenido2()
    {
        return $this->numporcentajeimpuestoretenido2;
    }

    /**
     * Set numporcentajeimpuestoretenido3
     *
     * @param float $numporcentajeimpuestoretenido3
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuestoretenido3($numporcentajeimpuestoretenido3)
    {
        $this->numporcentajeimpuestoretenido3 = $numporcentajeimpuestoretenido3;

        return $this;
    }

    /**
     * Get numporcentajeimpuestoretenido3
     *
     * @return float 
     */
    public function getNumporcentajeimpuestoretenido3()
    {
        return $this->numporcentajeimpuestoretenido3;
    }

    /**
     * Set numporcentajeimpuestoretenido4
     *
     * @param float $numporcentajeimpuestoretenido4
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuestoretenido4($numporcentajeimpuestoretenido4)
    {
        $this->numporcentajeimpuestoretenido4 = $numporcentajeimpuestoretenido4;

        return $this;
    }

    /**
     * Get numporcentajeimpuestoretenido4
     *
     * @return float 
     */
    public function getNumporcentajeimpuestoretenido4()
    {
        return $this->numporcentajeimpuestoretenido4;
    }

    /**
     * Set numporcentajeimpuestoretenido5
     *
     * @param float $numporcentajeimpuestoretenido5
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuestoretenido5($numporcentajeimpuestoretenido5)
    {
        $this->numporcentajeimpuestoretenido5 = $numporcentajeimpuestoretenido5;

        return $this;
    }

    /**
     * Get numporcentajeimpuestoretenido5
     *
     * @return float 
     */
    public function getNumporcentajeimpuestoretenido5()
    {
        return $this->numporcentajeimpuestoretenido5;
    }

    /**
     * Set numporcentajeimpuestoretenido6
     *
     * @param float $numporcentajeimpuestoretenido6
     * @return Oportunidadesinventarios
     */
    public function setNumporcentajeimpuestoretenido6($numporcentajeimpuestoretenido6)
    {
        $this->numporcentajeimpuestoretenido6 = $numporcentajeimpuestoretenido6;

        return $this;
    }

    /**
     * Get numporcentajeimpuestoretenido6
     *
     * @return float 
     */
    public function getNumporcentajeimpuestoretenido6()
    {
        return $this->numporcentajeimpuestoretenido6;
    }

    /**
     * Set numimporteimpuesto1
     *
     * @param string $numimporteimpuesto1
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuesto1($numimporteimpuesto1)
    {
        $this->numimporteimpuesto1 = $numimporteimpuesto1;

        return $this;
    }

    /**
     * Get numimporteimpuesto1
     *
     * @return string 
     */
    public function getNumimporteimpuesto1()
    {
        return $this->numimporteimpuesto1;
    }

    /**
     * Set numimporteimpuesto2
     *
     * @param string $numimporteimpuesto2
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuesto2($numimporteimpuesto2)
    {
        $this->numimporteimpuesto2 = $numimporteimpuesto2;

        return $this;
    }

    /**
     * Get numimporteimpuesto2
     *
     * @return string 
     */
    public function getNumimporteimpuesto2()
    {
        return $this->numimporteimpuesto2;
    }

    /**
     * Set numimporteimpuesto3
     *
     * @param string $numimporteimpuesto3
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuesto3($numimporteimpuesto3)
    {
        $this->numimporteimpuesto3 = $numimporteimpuesto3;

        return $this;
    }

    /**
     * Get numimporteimpuesto3
     *
     * @return string 
     */
    public function getNumimporteimpuesto3()
    {
        return $this->numimporteimpuesto3;
    }

    /**
     * Set numimporteimpuesto4
     *
     * @param string $numimporteimpuesto4
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuesto4($numimporteimpuesto4)
    {
        $this->numimporteimpuesto4 = $numimporteimpuesto4;

        return $this;
    }

    /**
     * Get numimporteimpuesto4
     *
     * @return string 
     */
    public function getNumimporteimpuesto4()
    {
        return $this->numimporteimpuesto4;
    }

    /**
     * Set numimporteimpuesto5
     *
     * @param string $numimporteimpuesto5
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuesto5($numimporteimpuesto5)
    {
        $this->numimporteimpuesto5 = $numimporteimpuesto5;

        return $this;
    }

    /**
     * Get numimporteimpuesto5
     *
     * @return string 
     */
    public function getNumimporteimpuesto5()
    {
        return $this->numimporteimpuesto5;
    }

    /**
     * Set numimporteimpuesto6
     *
     * @param string $numimporteimpuesto6
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuesto6($numimporteimpuesto6)
    {
        $this->numimporteimpuesto6 = $numimporteimpuesto6;

        return $this;
    }

    /**
     * Get numimporteimpuesto6
     *
     * @return string 
     */
    public function getNumimporteimpuesto6()
    {
        return $this->numimporteimpuesto6;
    }

    /**
     * Set numimporteimpuestoretenido1
     *
     * @param string $numimporteimpuestoretenido1
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuestoretenido1($numimporteimpuestoretenido1)
    {
        $this->numimporteimpuestoretenido1 = $numimporteimpuestoretenido1;

        return $this;
    }

    /**
     * Get numimporteimpuestoretenido1
     *
     * @return string 
     */
    public function getNumimporteimpuestoretenido1()
    {
        return $this->numimporteimpuestoretenido1;
    }

    /**
     * Set numimporteimpuestoretenido2
     *
     * @param string $numimporteimpuestoretenido2
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuestoretenido2($numimporteimpuestoretenido2)
    {
        $this->numimporteimpuestoretenido2 = $numimporteimpuestoretenido2;

        return $this;
    }

    /**
     * Get numimporteimpuestoretenido2
     *
     * @return string 
     */
    public function getNumimporteimpuestoretenido2()
    {
        return $this->numimporteimpuestoretenido2;
    }

    /**
     * Set numimporteimpuestoretenido3
     *
     * @param string $numimporteimpuestoretenido3
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuestoretenido3($numimporteimpuestoretenido3)
    {
        $this->numimporteimpuestoretenido3 = $numimporteimpuestoretenido3;

        return $this;
    }

    /**
     * Get numimporteimpuestoretenido3
     *
     * @return string 
     */
    public function getNumimporteimpuestoretenido3()
    {
        return $this->numimporteimpuestoretenido3;
    }

    /**
     * Set numimporteimpuestoretenido4
     *
     * @param string $numimporteimpuestoretenido4
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuestoretenido4($numimporteimpuestoretenido4)
    {
        $this->numimporteimpuestoretenido4 = $numimporteimpuestoretenido4;

        return $this;
    }

    /**
     * Get numimporteimpuestoretenido4
     *
     * @return string 
     */
    public function getNumimporteimpuestoretenido4()
    {
        return $this->numimporteimpuestoretenido4;
    }

    /**
     * Set numimporteimpuestoretenido5
     *
     * @param string $numimporteimpuestoretenido5
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuestoretenido5($numimporteimpuestoretenido5)
    {
        $this->numimporteimpuestoretenido5 = $numimporteimpuestoretenido5;

        return $this;
    }

    /**
     * Get numimporteimpuestoretenido5
     *
     * @return string 
     */
    public function getNumimporteimpuestoretenido5()
    {
        return $this->numimporteimpuestoretenido5;
    }

    /**
     * Set numimporteimpuestoretenido6
     *
     * @param string $numimporteimpuestoretenido6
     * @return Oportunidadesinventarios
     */
    public function setNumimporteimpuestoretenido6($numimporteimpuestoretenido6)
    {
        $this->numimporteimpuestoretenido6 = $numimporteimpuestoretenido6;

        return $this;
    }

    /**
     * Get numimporteimpuestoretenido6
     *
     * @return string 
     */
    public function getNumimporteimpuestoretenido6()
    {
        return $this->numimporteimpuestoretenido6;
    }

    /**
     * Set numoportunidadcaracteristicaId
     *
     * @param integer $numoportunidadcaracteristicaId
     * @return Oportunidadesinventarios
     */
    public function setNumoportunidadcaracteristicaId($numoportunidadcaracteristicaId)
    {
        $this->numoportunidadcaracteristicaId = $numoportunidadcaracteristicaId;

        return $this;
    }

    /**
     * Get numoportunidadcaracteristicaId
     *
     * @return integer 
     */
    public function getNumoportunidadcaracteristicaId()
    {
        return $this->numoportunidadcaracteristicaId;
    }

    /**
     * Set numoportunidadregistroId
     *
     * @param integer $numoportunidadregistroId
     * @return Oportunidadesinventarios
     */
    public function setNumoportunidadregistroId($numoportunidadregistroId)
    {
        $this->numoportunidadregistroId = $numoportunidadregistroId;

        return $this;
    }

    /**
     * Get numoportunidadregistroId
     *
     * @return integer 
     */
    public function getNumoportunidadregistroId()
    {
        return $this->numoportunidadregistroId;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Oportunidadesinventarios
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
}
