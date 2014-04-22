<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionesinventarios
 *
 * @ORM\Table(name="TransaccionesInventarios", indexes={@ORM\Index(name="Indice_2", columns={"NumEjercicio_id", "NumPeriodo"}), @ORM\Index(name="Indice_3", columns={"DteTransaccion", "NumAlmacen_id", "NumTipoEstado", "StrArticulo_ky", "NumConcepto_id"}), @ORM\Index(name="Indice_4", columns={"NumAlmacen_id", "NumCaja_id", "NumCorte_id", "NumConcepto_id", "NumFolio_id"}), @ORM\Index(name="Indice_5", columns={"NumDocumento_id", "NumAlmacen_id"}), @ORM\Index(name="Indice_6", columns={"StrTransaccion", "NumAlmacen_id"}), @ORM\Index(name="Indice_7", columns={"NumProveedor_id"}), @ORM\Index(name="Indice_8", columns={"NumEjercicio_id", "NumAlmacen_id", "StrArticulo_ky", "NumPeriodo", "NumTipoEstado"}), @ORM\Index(name="Indice_9", columns={"NumEjercicio_id", "NumAlmacen_id", "NumConcepto_id", "StrArticulo_ky", "NumPeriodo", "NumTipoEstado"}), @ORM\Index(name="Indice_10", columns={"NumEjercicio_id", "NumSemana", "StrArticulo_ky", "NumConcepto_id", "NumTipoEstado"}), @ORM\Index(name="Indice_11", columns={"NumAlmacen_id", "NumCaja_id", "NumCorte_id", "NumTipoEstado"}), @ORM\Index(name="Indice_12", columns={"NumOrdenOperacion_id"}), @ORM\Index(name="Indice_13", columns={"NumOrdenMaterial_id"}), @ORM\Index(name="Indice_1", columns={"StrArticulo_ky", "NumEjercicio_id"}), @ORM\Index(name="Indice_14", columns={"NumTransaccion_id", "NumAlmacen_id", "NumTipoTransaccion", "NumTransaccionRegistro_id", "StrArticulo_ky"})})
 * @ORM\Entity
 */
class Transaccionesinventarios
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
     * @ORM\Column(name="NumDocumento_id", type="integer", nullable=true)
     */
    private $numdocumentoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDocumento", type="integer", nullable=true)
     */
    private $numtipodocumento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaja_id", type="integer", nullable=true)
     */
    private $numcajaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCorte_id", type="integer", nullable=true)
     */
    private $numcorteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCortePreliminar_id", type="integer", nullable=true)
     */
    private $numcortepreliminarId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio_id", type="integer", nullable=true)
     */
    private $numfolioId = '0';

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
     * @ORM\Column(name="NumTipoEntidad", type="integer", nullable=true)
     */
    private $numtipoentidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_1_id", type="integer", nullable=true)
     */
    private $numvendedor1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_2_id", type="integer", nullable=true)
     */
    private $numvendedor2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_3_id", type="integer", nullable=true)
     */
    private $numvendedor3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_4_id", type="integer", nullable=true)
     */
    private $numvendedor4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_5_id", type="integer", nullable=true)
     */
    private $numvendedor5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_6_id", type="integer", nullable=true)
     */
    private $numvendedor6Id = '0';

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
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

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
     * @var float
     *
     * @ORM\Column(name="NumCantidadSurtida", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsurtida = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadReal", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadreal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntregar", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentregar = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadCobrar", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadcobrar = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadPromocion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadpromocion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAumentoRebaja_id", type="integer", nullable=true)
     */
    private $numaumentorebajaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoPromocion_id", type="integer", nullable=true)
     */
    private $numcodigopromocionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIdentificadorPromocion", type="integer", nullable=true)
     */
    private $numidentificadorpromocion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenOperacion_id", type="integer", nullable=true)
     */
    private $numordenoperacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenMaterial_id", type="integer", nullable=true)
     */
    private $numordenmaterialId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseComision_id", type="integer", nullable=true)
     */
    private $numclasecomisionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComision_id", type="integer", nullable=true)
     */
    private $numtipocomisionId = '0';

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
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteComision_1", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportecomision1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteComision_2", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportecomision2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteComision_3", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportecomision3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteComision_4", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportecomision4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteComision_5", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportecomision5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteComision_6", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportecomision6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeMonedero", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajemonedero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteMonedero", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimportemonedero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioCompra", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numpreciocompra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCostoCompra", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcostocompra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCostoEstandar", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcostoestandar = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCostoPromedio", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcostopromedio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPeso", type="float", precision=53, scale=0, nullable=true)
     */
    private $numpeso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionCaracteristica_id", type="integer", nullable=true)
     */
    private $numtransaccioncaracteristicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionRegistro_id", type="integer", nullable=true)
     */
    private $numtransaccionregistroId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactortipocambio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumImporteApoyoMarca", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numimporteapoyomarca = '0';



    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * Set strtransaccion
     *
     * @param string $strtransaccion
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * Set numdocumentoId
     *
     * @param integer $numdocumentoId
     * @return Transaccionesinventarios
     */
    public function setNumdocumentoId($numdocumentoId)
    {
        $this->numdocumentoId = $numdocumentoId;

        return $this;
    }

    /**
     * Get numdocumentoId
     *
     * @return integer 
     */
    public function getNumdocumentoId()
    {
        return $this->numdocumentoId;
    }

    /**
     * Set numtipodocumento
     *
     * @param integer $numtipodocumento
     * @return Transaccionesinventarios
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
     * Set numcajaId
     *
     * @param integer $numcajaId
     * @return Transaccionesinventarios
     */
    public function setNumcajaId($numcajaId)
    {
        $this->numcajaId = $numcajaId;

        return $this;
    }

    /**
     * Get numcajaId
     *
     * @return integer 
     */
    public function getNumcajaId()
    {
        return $this->numcajaId;
    }

    /**
     * Set numcorteId
     *
     * @param integer $numcorteId
     * @return Transaccionesinventarios
     */
    public function setNumcorteId($numcorteId)
    {
        $this->numcorteId = $numcorteId;

        return $this;
    }

    /**
     * Get numcorteId
     *
     * @return integer 
     */
    public function getNumcorteId()
    {
        return $this->numcorteId;
    }

    /**
     * Set numcortepreliminarId
     *
     * @param integer $numcortepreliminarId
     * @return Transaccionesinventarios
     */
    public function setNumcortepreliminarId($numcortepreliminarId)
    {
        $this->numcortepreliminarId = $numcortepreliminarId;

        return $this;
    }

    /**
     * Get numcortepreliminarId
     *
     * @return integer 
     */
    public function getNumcortepreliminarId()
    {
        return $this->numcortepreliminarId;
    }

    /**
     * Set numfolioId
     *
     * @param integer $numfolioId
     * @return Transaccionesinventarios
     */
    public function setNumfolioId($numfolioId)
    {
        $this->numfolioId = $numfolioId;

        return $this;
    }

    /**
     * Get numfolioId
     *
     * @return integer 
     */
    public function getNumfolioId()
    {
        return $this->numfolioId;
    }

    /**
     * Set numconceptoId
     *
     * @param integer $numconceptoId
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * Set numtipoentidad
     *
     * @param integer $numtipoentidad
     * @return Transaccionesinventarios
     */
    public function setNumtipoentidad($numtipoentidad)
    {
        $this->numtipoentidad = $numtipoentidad;

        return $this;
    }

    /**
     * Get numtipoentidad
     *
     * @return integer 
     */
    public function getNumtipoentidad()
    {
        return $this->numtipoentidad;
    }

    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Transaccionesinventarios
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
     * Set numvendedor1Id
     *
     * @param integer $numvendedor1Id
     * @return Transaccionesinventarios
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
     * Set numvendedor2Id
     *
     * @param integer $numvendedor2Id
     * @return Transaccionesinventarios
     */
    public function setNumvendedor2Id($numvendedor2Id)
    {
        $this->numvendedor2Id = $numvendedor2Id;

        return $this;
    }

    /**
     * Get numvendedor2Id
     *
     * @return integer 
     */
    public function getNumvendedor2Id()
    {
        return $this->numvendedor2Id;
    }

    /**
     * Set numvendedor3Id
     *
     * @param integer $numvendedor3Id
     * @return Transaccionesinventarios
     */
    public function setNumvendedor3Id($numvendedor3Id)
    {
        $this->numvendedor3Id = $numvendedor3Id;

        return $this;
    }

    /**
     * Get numvendedor3Id
     *
     * @return integer 
     */
    public function getNumvendedor3Id()
    {
        return $this->numvendedor3Id;
    }

    /**
     * Set numvendedor4Id
     *
     * @param integer $numvendedor4Id
     * @return Transaccionesinventarios
     */
    public function setNumvendedor4Id($numvendedor4Id)
    {
        $this->numvendedor4Id = $numvendedor4Id;

        return $this;
    }

    /**
     * Get numvendedor4Id
     *
     * @return integer 
     */
    public function getNumvendedor4Id()
    {
        return $this->numvendedor4Id;
    }

    /**
     * Set numvendedor5Id
     *
     * @param integer $numvendedor5Id
     * @return Transaccionesinventarios
     */
    public function setNumvendedor5Id($numvendedor5Id)
    {
        $this->numvendedor5Id = $numvendedor5Id;

        return $this;
    }

    /**
     * Get numvendedor5Id
     *
     * @return integer 
     */
    public function getNumvendedor5Id()
    {
        return $this->numvendedor5Id;
    }

    /**
     * Set numvendedor6Id
     *
     * @param integer $numvendedor6Id
     * @return Transaccionesinventarios
     */
    public function setNumvendedor6Id($numvendedor6Id)
    {
        $this->numvendedor6Id = $numvendedor6Id;

        return $this;
    }

    /**
     * Get numvendedor6Id
     *
     * @return integer 
     */
    public function getNumvendedor6Id()
    {
        return $this->numvendedor6Id;
    }

    /**
     * Set strasociadoKy
     *
     * @param string $strasociadoKy
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Transaccionesinventarios
     */
    public function setNumproveedorId($numproveedorId)
    {
        $this->numproveedorId = $numproveedorId;

        return $this;
    }

    /**
     * Get numproveedorId
     *
     * @return integer 
     */
    public function getNumproveedorId()
    {
        return $this->numproveedorId;
    }

    /**
     * Set numproyectoId
     *
     * @param integer $numproyectoId
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * Set numcantidadsurtida
     *
     * @param float $numcantidadsurtida
     * @return Transaccionesinventarios
     */
    public function setNumcantidadsurtida($numcantidadsurtida)
    {
        $this->numcantidadsurtida = $numcantidadsurtida;

        return $this;
    }

    /**
     * Get numcantidadsurtida
     *
     * @return float 
     */
    public function getNumcantidadsurtida()
    {
        return $this->numcantidadsurtida;
    }

    /**
     * Set numcantidadreal
     *
     * @param float $numcantidadreal
     * @return Transaccionesinventarios
     */
    public function setNumcantidadreal($numcantidadreal)
    {
        $this->numcantidadreal = $numcantidadreal;

        return $this;
    }

    /**
     * Get numcantidadreal
     *
     * @return float 
     */
    public function getNumcantidadreal()
    {
        return $this->numcantidadreal;
    }

    /**
     * Set numcantidadentregar
     *
     * @param float $numcantidadentregar
     * @return Transaccionesinventarios
     */
    public function setNumcantidadentregar($numcantidadentregar)
    {
        $this->numcantidadentregar = $numcantidadentregar;

        return $this;
    }

    /**
     * Get numcantidadentregar
     *
     * @return float 
     */
    public function getNumcantidadentregar()
    {
        return $this->numcantidadentregar;
    }

    /**
     * Set numcantidadcobrar
     *
     * @param float $numcantidadcobrar
     * @return Transaccionesinventarios
     */
    public function setNumcantidadcobrar($numcantidadcobrar)
    {
        $this->numcantidadcobrar = $numcantidadcobrar;

        return $this;
    }

    /**
     * Get numcantidadcobrar
     *
     * @return float 
     */
    public function getNumcantidadcobrar()
    {
        return $this->numcantidadcobrar;
    }

    /**
     * Set numcantidadpromocion
     *
     * @param float $numcantidadpromocion
     * @return Transaccionesinventarios
     */
    public function setNumcantidadpromocion($numcantidadpromocion)
    {
        $this->numcantidadpromocion = $numcantidadpromocion;

        return $this;
    }

    /**
     * Get numcantidadpromocion
     *
     * @return float 
     */
    public function getNumcantidadpromocion()
    {
        return $this->numcantidadpromocion;
    }

    /**
     * Set numaumentorebajaId
     *
     * @param integer $numaumentorebajaId
     * @return Transaccionesinventarios
     */
    public function setNumaumentorebajaId($numaumentorebajaId)
    {
        $this->numaumentorebajaId = $numaumentorebajaId;

        return $this;
    }

    /**
     * Get numaumentorebajaId
     *
     * @return integer 
     */
    public function getNumaumentorebajaId()
    {
        return $this->numaumentorebajaId;
    }

    /**
     * Set numcodigopromocionId
     *
     * @param integer $numcodigopromocionId
     * @return Transaccionesinventarios
     */
    public function setNumcodigopromocionId($numcodigopromocionId)
    {
        $this->numcodigopromocionId = $numcodigopromocionId;

        return $this;
    }

    /**
     * Get numcodigopromocionId
     *
     * @return integer 
     */
    public function getNumcodigopromocionId()
    {
        return $this->numcodigopromocionId;
    }

    /**
     * Set numidentificadorpromocion
     *
     * @param integer $numidentificadorpromocion
     * @return Transaccionesinventarios
     */
    public function setNumidentificadorpromocion($numidentificadorpromocion)
    {
        $this->numidentificadorpromocion = $numidentificadorpromocion;

        return $this;
    }

    /**
     * Get numidentificadorpromocion
     *
     * @return integer 
     */
    public function getNumidentificadorpromocion()
    {
        return $this->numidentificadorpromocion;
    }

    /**
     * Set numordenoperacionId
     *
     * @param integer $numordenoperacionId
     * @return Transaccionesinventarios
     */
    public function setNumordenoperacionId($numordenoperacionId)
    {
        $this->numordenoperacionId = $numordenoperacionId;

        return $this;
    }

    /**
     * Get numordenoperacionId
     *
     * @return integer 
     */
    public function getNumordenoperacionId()
    {
        return $this->numordenoperacionId;
    }

    /**
     * Set numordenmaterialId
     *
     * @param integer $numordenmaterialId
     * @return Transaccionesinventarios
     */
    public function setNumordenmaterialId($numordenmaterialId)
    {
        $this->numordenmaterialId = $numordenmaterialId;

        return $this;
    }

    /**
     * Get numordenmaterialId
     *
     * @return integer 
     */
    public function getNumordenmaterialId()
    {
        return $this->numordenmaterialId;
    }

    /**
     * Set numclasecomisionId
     *
     * @param integer $numclasecomisionId
     * @return Transaccionesinventarios
     */
    public function setNumclasecomisionId($numclasecomisionId)
    {
        $this->numclasecomisionId = $numclasecomisionId;

        return $this;
    }

    /**
     * Get numclasecomisionId
     *
     * @return integer 
     */
    public function getNumclasecomisionId()
    {
        return $this->numclasecomisionId;
    }

    /**
     * Set numtipocomisionId
     *
     * @param integer $numtipocomisionId
     * @return Transaccionesinventarios
     */
    public function setNumtipocomisionId($numtipocomisionId)
    {
        $this->numtipocomisionId = $numtipocomisionId;

        return $this;
    }

    /**
     * Get numtipocomisionId
     *
     * @return integer 
     */
    public function getNumtipocomisionId()
    {
        return $this->numtipocomisionId;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * Set numpreciobase
     *
     * @param string $numpreciobase
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * @return Transaccionesinventarios
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
     * Set numporcentajecomision1
     *
     * @param float $numporcentajecomision1
     * @return Transaccionesinventarios
     */
    public function setNumporcentajecomision1($numporcentajecomision1)
    {
        $this->numporcentajecomision1 = $numporcentajecomision1;

        return $this;
    }

    /**
     * Get numporcentajecomision1
     *
     * @return float 
     */
    public function getNumporcentajecomision1()
    {
        return $this->numporcentajecomision1;
    }

    /**
     * Set numporcentajecomision2
     *
     * @param float $numporcentajecomision2
     * @return Transaccionesinventarios
     */
    public function setNumporcentajecomision2($numporcentajecomision2)
    {
        $this->numporcentajecomision2 = $numporcentajecomision2;

        return $this;
    }

    /**
     * Get numporcentajecomision2
     *
     * @return float 
     */
    public function getNumporcentajecomision2()
    {
        return $this->numporcentajecomision2;
    }

    /**
     * Set numporcentajecomision3
     *
     * @param float $numporcentajecomision3
     * @return Transaccionesinventarios
     */
    public function setNumporcentajecomision3($numporcentajecomision3)
    {
        $this->numporcentajecomision3 = $numporcentajecomision3;

        return $this;
    }

    /**
     * Get numporcentajecomision3
     *
     * @return float 
     */
    public function getNumporcentajecomision3()
    {
        return $this->numporcentajecomision3;
    }

    /**
     * Set numporcentajecomision4
     *
     * @param float $numporcentajecomision4
     * @return Transaccionesinventarios
     */
    public function setNumporcentajecomision4($numporcentajecomision4)
    {
        $this->numporcentajecomision4 = $numporcentajecomision4;

        return $this;
    }

    /**
     * Get numporcentajecomision4
     *
     * @return float 
     */
    public function getNumporcentajecomision4()
    {
        return $this->numporcentajecomision4;
    }

    /**
     * Set numporcentajecomision5
     *
     * @param float $numporcentajecomision5
     * @return Transaccionesinventarios
     */
    public function setNumporcentajecomision5($numporcentajecomision5)
    {
        $this->numporcentajecomision5 = $numporcentajecomision5;

        return $this;
    }

    /**
     * Get numporcentajecomision5
     *
     * @return float 
     */
    public function getNumporcentajecomision5()
    {
        return $this->numporcentajecomision5;
    }

    /**
     * Set numporcentajecomision6
     *
     * @param float $numporcentajecomision6
     * @return Transaccionesinventarios
     */
    public function setNumporcentajecomision6($numporcentajecomision6)
    {
        $this->numporcentajecomision6 = $numporcentajecomision6;

        return $this;
    }

    /**
     * Get numporcentajecomision6
     *
     * @return float 
     */
    public function getNumporcentajecomision6()
    {
        return $this->numporcentajecomision6;
    }

    /**
     * Set numimportecomision1
     *
     * @param string $numimportecomision1
     * @return Transaccionesinventarios
     */
    public function setNumimportecomision1($numimportecomision1)
    {
        $this->numimportecomision1 = $numimportecomision1;

        return $this;
    }

    /**
     * Get numimportecomision1
     *
     * @return string 
     */
    public function getNumimportecomision1()
    {
        return $this->numimportecomision1;
    }

    /**
     * Set numimportecomision2
     *
     * @param string $numimportecomision2
     * @return Transaccionesinventarios
     */
    public function setNumimportecomision2($numimportecomision2)
    {
        $this->numimportecomision2 = $numimportecomision2;

        return $this;
    }

    /**
     * Get numimportecomision2
     *
     * @return string 
     */
    public function getNumimportecomision2()
    {
        return $this->numimportecomision2;
    }

    /**
     * Set numimportecomision3
     *
     * @param string $numimportecomision3
     * @return Transaccionesinventarios
     */
    public function setNumimportecomision3($numimportecomision3)
    {
        $this->numimportecomision3 = $numimportecomision3;

        return $this;
    }

    /**
     * Get numimportecomision3
     *
     * @return string 
     */
    public function getNumimportecomision3()
    {
        return $this->numimportecomision3;
    }

    /**
     * Set numimportecomision4
     *
     * @param string $numimportecomision4
     * @return Transaccionesinventarios
     */
    public function setNumimportecomision4($numimportecomision4)
    {
        $this->numimportecomision4 = $numimportecomision4;

        return $this;
    }

    /**
     * Get numimportecomision4
     *
     * @return string 
     */
    public function getNumimportecomision4()
    {
        return $this->numimportecomision4;
    }

    /**
     * Set numimportecomision5
     *
     * @param string $numimportecomision5
     * @return Transaccionesinventarios
     */
    public function setNumimportecomision5($numimportecomision5)
    {
        $this->numimportecomision5 = $numimportecomision5;

        return $this;
    }

    /**
     * Get numimportecomision5
     *
     * @return string 
     */
    public function getNumimportecomision5()
    {
        return $this->numimportecomision5;
    }

    /**
     * Set numimportecomision6
     *
     * @param string $numimportecomision6
     * @return Transaccionesinventarios
     */
    public function setNumimportecomision6($numimportecomision6)
    {
        $this->numimportecomision6 = $numimportecomision6;

        return $this;
    }

    /**
     * Get numimportecomision6
     *
     * @return string 
     */
    public function getNumimportecomision6()
    {
        return $this->numimportecomision6;
    }

    /**
     * Set numporcentajemonedero
     *
     * @param float $numporcentajemonedero
     * @return Transaccionesinventarios
     */
    public function setNumporcentajemonedero($numporcentajemonedero)
    {
        $this->numporcentajemonedero = $numporcentajemonedero;

        return $this;
    }

    /**
     * Get numporcentajemonedero
     *
     * @return float 
     */
    public function getNumporcentajemonedero()
    {
        return $this->numporcentajemonedero;
    }

    /**
     * Set numimportemonedero
     *
     * @param string $numimportemonedero
     * @return Transaccionesinventarios
     */
    public function setNumimportemonedero($numimportemonedero)
    {
        $this->numimportemonedero = $numimportemonedero;

        return $this;
    }

    /**
     * Get numimportemonedero
     *
     * @return string 
     */
    public function getNumimportemonedero()
    {
        return $this->numimportemonedero;
    }

    /**
     * Set numpreciocompra
     *
     * @param string $numpreciocompra
     * @return Transaccionesinventarios
     */
    public function setNumpreciocompra($numpreciocompra)
    {
        $this->numpreciocompra = $numpreciocompra;

        return $this;
    }

    /**
     * Get numpreciocompra
     *
     * @return string 
     */
    public function getNumpreciocompra()
    {
        return $this->numpreciocompra;
    }

    /**
     * Set numcostocompra
     *
     * @param string $numcostocompra
     * @return Transaccionesinventarios
     */
    public function setNumcostocompra($numcostocompra)
    {
        $this->numcostocompra = $numcostocompra;

        return $this;
    }

    /**
     * Get numcostocompra
     *
     * @return string 
     */
    public function getNumcostocompra()
    {
        return $this->numcostocompra;
    }

    /**
     * Set numcostoestandar
     *
     * @param string $numcostoestandar
     * @return Transaccionesinventarios
     */
    public function setNumcostoestandar($numcostoestandar)
    {
        $this->numcostoestandar = $numcostoestandar;

        return $this;
    }

    /**
     * Get numcostoestandar
     *
     * @return string 
     */
    public function getNumcostoestandar()
    {
        return $this->numcostoestandar;
    }

    /**
     * Set numcostopromedio
     *
     * @param string $numcostopromedio
     * @return Transaccionesinventarios
     */
    public function setNumcostopromedio($numcostopromedio)
    {
        $this->numcostopromedio = $numcostopromedio;

        return $this;
    }

    /**
     * Get numcostopromedio
     *
     * @return string 
     */
    public function getNumcostopromedio()
    {
        return $this->numcostopromedio;
    }

    /**
     * Set numpeso
     *
     * @param float $numpeso
     * @return Transaccionesinventarios
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
     * Set numtransaccioncaracteristicaId
     *
     * @param integer $numtransaccioncaracteristicaId
     * @return Transaccionesinventarios
     */
    public function setNumtransaccioncaracteristicaId($numtransaccioncaracteristicaId)
    {
        $this->numtransaccioncaracteristicaId = $numtransaccioncaracteristicaId;

        return $this;
    }

    /**
     * Get numtransaccioncaracteristicaId
     *
     * @return integer 
     */
    public function getNumtransaccioncaracteristicaId()
    {
        return $this->numtransaccioncaracteristicaId;
    }

    /**
     * Set numtransaccionregistroId
     *
     * @param integer $numtransaccionregistroId
     * @return Transaccionesinventarios
     */
    public function setNumtransaccionregistroId($numtransaccionregistroId)
    {
        $this->numtransaccionregistroId = $numtransaccionregistroId;

        return $this;
    }

    /**
     * Get numtransaccionregistroId
     *
     * @return integer 
     */
    public function getNumtransaccionregistroId()
    {
        return $this->numtransaccionregistroId;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Transaccionesinventarios
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Transaccionesinventarios
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
     * Set numfactortipocambio
     *
     * @param float $numfactortipocambio
     * @return Transaccionesinventarios
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
     * Set numimporteapoyomarca
     *
     * @param string $numimporteapoyomarca
     * @return Transaccionesinventarios
     */
    public function setNumimporteapoyomarca($numimporteapoyomarca)
    {
        $this->numimporteapoyomarca = $numimporteapoyomarca;

        return $this;
    }

    /**
     * Get numimporteapoyomarca
     *
     * @return string 
     */
    public function getNumimporteapoyomarca()
    {
        return $this->numimporteapoyomarca;
    }
}
