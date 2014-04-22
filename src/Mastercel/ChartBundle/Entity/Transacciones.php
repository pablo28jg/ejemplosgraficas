<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transacciones
 *
 * @ORM\Table(name="Transacciones", indexes={@ORM\Index(name="Indice_1", columns={"NumTipoTransaccion", "NumAlmacen_id", "StrTransaccion", "NumEntidad_id"}), @ORM\Index(name="Indice_2", columns={"NumTipoTransaccion", "NumEmpresa_id", "StrTransaccion", "NumEntidad_id"}), @ORM\Index(name="Indice_3", columns={"NumTipoTransaccion", "NumEmpresa_id", "StrReferencia", "NumEntidad_id"}), @ORM\Index(name="Indice_4", columns={"NumTipoTransaccion", "DteTransaccion"}), @ORM\Index(name="Indice_5", columns={"NumTipoTransaccion", "NumAlmacen_id", "DteTransaccion", "TmeTransaccion"}), @ORM\Index(name="Indice_6", columns={"NumTipoTransaccion", "NumEmpresa_id", "DteTransaccion", "TmeTransaccion"}), @ORM\Index(name="Indice_7", columns={"NumTipoTransaccion", "NumEntidad_id", "DteTransaccion", "TmeTransaccion"}), @ORM\Index(name="Indice_8", columns={"NumTransaccionInventario_id", "NumAlmacenInventario_id", "NumTipoTransaccionInventario"}), @ORM\Index(name="Indice_9", columns={"NumTransaccionOrigen_id", "NumAlmacenOrigen_id", "NumTipoTransaccionOrigen"}), @ORM\Index(name="Indice_10", columns={"NumAfectaCuentaCobrar", "NumEmpresa_id", "NumEntidad_id", "NumTipoEstado", "NumSaldo"}), @ORM\Index(name="Indice_11", columns={"NumAfectaCuentaPagar", "NumEmpresa_id", "NumEntidad_id", "NumTipoEstado", "NumSaldo"}), @ORM\Index(name="Indice_12", columns={"NumAfectaCuentaCobrar", "NumEjercicio_id", "NumPeriodo", "NumTipoEstado", "NumTipoDocumento"}), @ORM\Index(name="Indice_13", columns={"NumAfectaCuentaPagar", "NumEjercicio_id", "NumPeriodo", "NumTipoEstado", "NumTipoDocumento"}), @ORM\Index(name="Indice_14", columns={"NumTipoCuenta", "NumEjercicio_id", "NumPeriodo", "LogControlarSaldo"}), @ORM\Index(name="Indice_15", columns={"NumAfectaContabilidad", "NumAlmacen_id"}), @ORM\Index(name="Indice_16", columns={"NumAfectaContabilidad", "NumEmpresa_id"}), @ORM\Index(name="Indice_17", columns={"NumTipoModulo", "NumTipoDocumento", "NumTipoEstado", "NumAlmacen_id", "NumConcepto_id"}), @ORM\Index(name="Indice_18", columns={"DteActualizacion"}), @ORM\Index(name="Indice_19", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_20", columns={"NumAlmacen_id", "StrReferencia", "NumTipoTransaccion"}), @ORM\Index(name="Indice_21", columns={"NumAlmacen_id", "StrDescripcion", "NumEntidad_id"}), @ORM\Index(name="Indice_22", columns={"NumTransaccionReversion_id", "NumAlmacenReversion_id", "NumTipoTransaccionReversion"}), @ORM\Index(name="Indice_23", columns={"StrPedimento_ky"}), @ORM\Index(name="Indice_24", columns={"NumAfectaInventario", "NumAlmacen_id", "NumTipoEstado", "DteTransaccion", "TmeTransaccion"}), @ORM\Index(name="Indice_25", columns={"StrMonedero_ky"}), @ORM\Index(name="Indice_26", columns={"NumAlmacen_id", "NumCaja_id", "NumFolio_id", "NumConcepto_id"}), @ORM\Index(name="Indice_27", columns={"NumAlmacen_id", "NumCorte_id", "NumTipoEstado", "NumCaja_id"}), @ORM\Index(name="Indice_28", columns={"StrOrdenCompraPedido"}), @ORM\Index(name="Indice_29", columns={"StrReferencia"})})
 * @ORM\Entity
 */
class Transacciones
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
     * @var integer
     *
     * @ORM\Column(name="NumDiario_id", type="integer", nullable=true)
     */
    private $numdiarioId = '0';

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
     * @ORM\Column(name="NumConceptoGenerar_id", type="integer", nullable=true)
     */
    private $numconceptogenerarId = '0';

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
     * @ORM\Column(name="NumProyecto_id", type="integer", nullable=true)
     */
    private $numproyectoId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumSolicitadoPor_id", type="integer", nullable=true)
     */
    private $numsolicitadoporId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAutorizadoPor_id", type="integer", nullable=true)
     */
    private $numautorizadoporId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDepartamento_id", type="integer", nullable=true)
     */
    private $numdepartamentoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDireccionEntidad_id", type="integer", nullable=true)
     */
    private $numdireccionentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDireccionEnvio_id", type="integer", nullable=true)
     */
    private $numdireccionenvioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrOrdenCompraPedido", type="string", length=10, nullable=true)
     */
    private $strordencomprapedido;

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
     * @var string
     *
     * @ORM\Column(name="StrOrdenProduccion", type="string", length=15, nullable=true)
     */
    private $strordenproduccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenProduccion_id", type="integer", nullable=true)
     */
    private $numordenproduccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenOrdenProduccion_id", type="integer", nullable=true)
     */
    private $numalmacenordenproduccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOperacionEstandar_id", type="integer", nullable=true)
     */
    private $numoperacionestandarId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMesaRegalo_id", type="integer", nullable=true)
     */
    private $nummesaregaloId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMedioEnvio_id", type="integer", nullable=true)
     */
    private $nummedioenvioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNoGuia", type="string", length=20, nullable=true)
     */
    private $strnoguia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEnvioMercancia", type="datetime", nullable=true)
     */
    private $dteenviomercancia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasEnvio", type="integer", nullable=true)
     */
    private $numdiasenvio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCajasSurtidas", type="integer", nullable=true)
     */
    private $numcajassurtidas = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtePrimeraEntrega", type="datetime", nullable=true)
     */
    private $dteprimeraentrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteUltimaEntrega", type="datetime", nullable=true)
     */
    private $dteultimaentrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEntregaMercancia", type="datetime", nullable=true)
     */
    private $dteentregamercancia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPago", type="integer", nullable=true)
     */
    private $numtipopago = '0';

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
     * @ORM\Column(name="NumDiasCredito", type="integer", nullable=true)
     */
    private $numdiascredito = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteRevision", type="datetime", nullable=true)
     */
    private $dterevision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteVencimiento", type="datetime", nullable=true)
     */
    private $dtevencimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtePromesaRevision", type="datetime", nullable=true)
     */
    private $dtepromesarevision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtePromesaPago", type="datetime", nullable=true)
     */
    private $dtepromesapago;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasProntoPago", type="integer", nullable=true)
     */
    private $numdiasprontopago = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteProntoPago", type="datetime", nullable=true)
     */
    private $dteprontopago;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDescuentoProntoPago", type="integer", nullable=true)
     */
    private $numdescuentoprontopago = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteVigencia", type="datetime", nullable=true)
     */
    private $dtevigencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogValoresPorcentajes", type="boolean", nullable=true)
     */
    private $logvaloresporcentajes = '0';

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
     * @var float
     *
     * @ORM\Column(name="NumTotalPeso", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalpeso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPartidasInventarios", type="integer", nullable=true)
     */
    private $numtotalpartidasinventarios = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPartidasContables", type="integer", nullable=true)
     */
    private $numtotalpartidascontables = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPartidasPagos", type="integer", nullable=true)
     */
    private $numtotalpartidaspagos = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalcantidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTotalCantidadSurtida", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtotalcantidadsurtida = '0';

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
     * @ORM\Column(name="NumTotalComision_1", type="integer", nullable=true)
     */
    private $numtotalcomision1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalComision_2", type="integer", nullable=true)
     */
    private $numtotalcomision2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalComision_3", type="integer", nullable=true)
     */
    private $numtotalcomision3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalComision_4", type="integer", nullable=true)
     */
    private $numtotalcomision4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalComision_5", type="integer", nullable=true)
     */
    private $numtotalcomision5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalComision_6", type="integer", nullable=true)
     */
    private $numtotalcomision6 = '0';

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
     * @ORM\Column(name="NumTotal", type="integer", nullable=true)
     */
    private $numtotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo", type="integer", nullable=true)
     */
    private $numsaldo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRedondeo", type="integer", nullable=true)
     */
    private $numredondeo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumBenefactorRedondeo_id", type="integer", nullable=true)
     */
    private $numbenefactorredondeoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrMonedero_ky", type="string", length=20, nullable=true)
     */
    private $strmonederoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldoAnteriorMonedero", type="integer", nullable=true)
     */
    private $numsaldoanteriormonedero = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalObtenidoMonedero", type="integer", nullable=true)
     */
    private $numtotalobtenidomonedero = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalUtilizadoMonedero", type="integer", nullable=true)
     */
    private $numtotalutilizadomonedero = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoLenguajeImporte", type="integer", nullable=true)
     */
    private $numtipolenguajeimporte = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRetenerPago", type="boolean", nullable=true)
     */
    private $logretenerpago = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogControlarSaldo", type="boolean", nullable=true)
     */
    private $logcontrolarsaldo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionInventario_id", type="integer", nullable=true)
     */
    private $numtransaccioninventarioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenInventario_id", type="integer", nullable=true)
     */
    private $numalmaceninventarioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionInventario", type="integer", nullable=true)
     */
    private $numtipotransaccioninventario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenTransito_id", type="integer", nullable=true)
     */
    private $numalmacentransitoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionOrigen_id", type="integer", nullable=true)
     */
    private $numtransaccionorigenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenOrigen_id", type="integer", nullable=true)
     */
    private $numalmacenorigenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionOrigen", type="integer", nullable=true)
     */
    private $numtipotransaccionorigen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoReversionAutomatica", type="integer", nullable=true)
     */
    private $numtiporeversionautomatica = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionReversion_id", type="integer", nullable=true)
     */
    private $numtransaccionreversionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenReversion_id", type="integer", nullable=true)
     */
    private $numalmacenreversionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionReversion", type="integer", nullable=true)
     */
    private $numtipotransaccionreversion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDocumento_id", type="integer", nullable=true)
     */
    private $numdocumentoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoModulo", type="integer", nullable=true)
     */
    private $numtipomodulo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDocumento", type="integer", nullable=true)
     */
    private $numtipodocumento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoContabilizacion", type="integer", nullable=true)
     */
    private $numtipocontabilizacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCuenta", type="integer", nullable=true)
     */
    private $numtipocuenta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAfectaInventario", type="integer", nullable=true)
     */
    private $numafectainventario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAfectaCuentaPagar", type="integer", nullable=true)
     */
    private $numafectacuentapagar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAfectaCuentaCobrar", type="integer", nullable=true)
     */
    private $numafectacuentacobrar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAfectaBanco", type="integer", nullable=true)
     */
    private $numafectabanco = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAfectaContabilidad", type="integer", nullable=true)
     */
    private $numafectacontabilidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAfectaProduccion", type="integer", nullable=true)
     */
    private $numafectaproduccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoConciliacion", type="integer", nullable=true)
     */
    private $numtipoconciliacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConciliacion_id", type="integer", nullable=true)
     */
    private $numconciliacionId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteConciliacion", type="datetime", nullable=true)
     */
    private $dteconciliacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaBancaria_id", type="integer", nullable=true)
     */
    private $numcuentabancariaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTarjeta", type="string", length=20, nullable=true)
     */
    private $strtarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFormaPago_id", type="integer", nullable=true)
     */
    private $numformapagoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumBanco_id", type="integer", nullable=true)
     */
    private $numbancoId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteComision", type="integer", nullable=true)
     */
    private $numimportecomision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuestoComision_id", type="integer", nullable=true)
     */
    private $numimpuestocomisionId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuestoComision", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuestocomision = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteRecuperacion", type="datetime", nullable=true)
     */
    private $dterecuperacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImagen_id", type="integer", nullable=true)
     */
    private $numimagenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoImpresionDocumento", type="integer", nullable=true)
     */
    private $numtipoimpresiondocumento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEnvioDocumento", type="integer", nullable=true)
     */
    private $numtipoenviodocumento = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="LogObservacionesDetalle", type="boolean", nullable=true)
     */
    private $logobservacionesdetalle = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="LogTransaccionOcupada", type="boolean", nullable=true)
     */
    private $logtransaccionocupada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoSurtido", type="integer", nullable=true)
     */
    private $numtipoestadosurtido = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumCuentaBancariaGenerar_id", type="integer", nullable=true)
     */
    private $numcuentabancariagenerarId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrPedimento_ky", type="string", length=20, nullable=true)
     */
    private $strpedimentoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalApoyoMarca", type="integer", nullable=true)
     */
    private $numtotalapoyomarca = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionDigital_id", type="integer", nullable=true)
     */
    private $numtransacciondigitalId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenDigital_id", type="integer", nullable=true)
     */
    private $numalmacendigitalId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionDigital", type="integer", nullable=true)
     */
    private $numtipotransacciondigital = '0';



    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * Set strtransaccion
     *
     * @param string $strtransaccion
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * Set numdiarioId
     *
     * @param integer $numdiarioId
     * @return Transacciones
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
     * Set numcajaId
     *
     * @param integer $numcajaId
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * Set numconceptogenerarId
     *
     * @param integer $numconceptogenerarId
     * @return Transacciones
     */
    public function setNumconceptogenerarId($numconceptogenerarId)
    {
        $this->numconceptogenerarId = $numconceptogenerarId;

        return $this;
    }

    /**
     * Get numconceptogenerarId
     *
     * @return integer 
     */
    public function getNumconceptogenerarId()
    {
        return $this->numconceptogenerarId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * Set numvendedor1Id
     *
     * @param integer $numvendedor1Id
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * Set numsolicitadoporId
     *
     * @param integer $numsolicitadoporId
     * @return Transacciones
     */
    public function setNumsolicitadoporId($numsolicitadoporId)
    {
        $this->numsolicitadoporId = $numsolicitadoporId;

        return $this;
    }

    /**
     * Get numsolicitadoporId
     *
     * @return integer 
     */
    public function getNumsolicitadoporId()
    {
        return $this->numsolicitadoporId;
    }

    /**
     * Set numautorizadoporId
     *
     * @param integer $numautorizadoporId
     * @return Transacciones
     */
    public function setNumautorizadoporId($numautorizadoporId)
    {
        $this->numautorizadoporId = $numautorizadoporId;

        return $this;
    }

    /**
     * Get numautorizadoporId
     *
     * @return integer 
     */
    public function getNumautorizadoporId()
    {
        return $this->numautorizadoporId;
    }

    /**
     * Set numdepartamentoId
     *
     * @param integer $numdepartamentoId
     * @return Transacciones
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
     * Set numdireccionentidadId
     *
     * @param integer $numdireccionentidadId
     * @return Transacciones
     */
    public function setNumdireccionentidadId($numdireccionentidadId)
    {
        $this->numdireccionentidadId = $numdireccionentidadId;

        return $this;
    }

    /**
     * Get numdireccionentidadId
     *
     * @return integer 
     */
    public function getNumdireccionentidadId()
    {
        return $this->numdireccionentidadId;
    }

    /**
     * Set numdireccionenvioId
     *
     * @param integer $numdireccionenvioId
     * @return Transacciones
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
     * Set strordencomprapedido
     *
     * @param string $strordencomprapedido
     * @return Transacciones
     */
    public function setStrordencomprapedido($strordencomprapedido)
    {
        $this->strordencomprapedido = $strordencomprapedido;

        return $this;
    }

    /**
     * Get strordencomprapedido
     *
     * @return string 
     */
    public function getStrordencomprapedido()
    {
        return $this->strordencomprapedido;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Transacciones
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
     * @return Transacciones
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
     * Set strordenproduccion
     *
     * @param string $strordenproduccion
     * @return Transacciones
     */
    public function setStrordenproduccion($strordenproduccion)
    {
        $this->strordenproduccion = $strordenproduccion;

        return $this;
    }

    /**
     * Get strordenproduccion
     *
     * @return string 
     */
    public function getStrordenproduccion()
    {
        return $this->strordenproduccion;
    }

    /**
     * Set numordenproduccionId
     *
     * @param integer $numordenproduccionId
     * @return Transacciones
     */
    public function setNumordenproduccionId($numordenproduccionId)
    {
        $this->numordenproduccionId = $numordenproduccionId;

        return $this;
    }

    /**
     * Get numordenproduccionId
     *
     * @return integer 
     */
    public function getNumordenproduccionId()
    {
        return $this->numordenproduccionId;
    }

    /**
     * Set numalmacenordenproduccionId
     *
     * @param integer $numalmacenordenproduccionId
     * @return Transacciones
     */
    public function setNumalmacenordenproduccionId($numalmacenordenproduccionId)
    {
        $this->numalmacenordenproduccionId = $numalmacenordenproduccionId;

        return $this;
    }

    /**
     * Get numalmacenordenproduccionId
     *
     * @return integer 
     */
    public function getNumalmacenordenproduccionId()
    {
        return $this->numalmacenordenproduccionId;
    }

    /**
     * Set numoperacionestandarId
     *
     * @param integer $numoperacionestandarId
     * @return Transacciones
     */
    public function setNumoperacionestandarId($numoperacionestandarId)
    {
        $this->numoperacionestandarId = $numoperacionestandarId;

        return $this;
    }

    /**
     * Get numoperacionestandarId
     *
     * @return integer 
     */
    public function getNumoperacionestandarId()
    {
        return $this->numoperacionestandarId;
    }

    /**
     * Set nummesaregaloId
     *
     * @param integer $nummesaregaloId
     * @return Transacciones
     */
    public function setNummesaregaloId($nummesaregaloId)
    {
        $this->nummesaregaloId = $nummesaregaloId;

        return $this;
    }

    /**
     * Get nummesaregaloId
     *
     * @return integer 
     */
    public function getNummesaregaloId()
    {
        return $this->nummesaregaloId;
    }

    /**
     * Set nummedioenvioId
     *
     * @param integer $nummedioenvioId
     * @return Transacciones
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
     * Set strnoguia
     *
     * @param string $strnoguia
     * @return Transacciones
     */
    public function setStrnoguia($strnoguia)
    {
        $this->strnoguia = $strnoguia;

        return $this;
    }

    /**
     * Get strnoguia
     *
     * @return string 
     */
    public function getStrnoguia()
    {
        return $this->strnoguia;
    }

    /**
     * Set dteenviomercancia
     *
     * @param \DateTime $dteenviomercancia
     * @return Transacciones
     */
    public function setDteenviomercancia($dteenviomercancia)
    {
        $this->dteenviomercancia = $dteenviomercancia;

        return $this;
    }

    /**
     * Get dteenviomercancia
     *
     * @return \DateTime 
     */
    public function getDteenviomercancia()
    {
        return $this->dteenviomercancia;
    }

    /**
     * Set numdiasenvio
     *
     * @param integer $numdiasenvio
     * @return Transacciones
     */
    public function setNumdiasenvio($numdiasenvio)
    {
        $this->numdiasenvio = $numdiasenvio;

        return $this;
    }

    /**
     * Get numdiasenvio
     *
     * @return integer 
     */
    public function getNumdiasenvio()
    {
        return $this->numdiasenvio;
    }

    /**
     * Set numcajassurtidas
     *
     * @param integer $numcajassurtidas
     * @return Transacciones
     */
    public function setNumcajassurtidas($numcajassurtidas)
    {
        $this->numcajassurtidas = $numcajassurtidas;

        return $this;
    }

    /**
     * Get numcajassurtidas
     *
     * @return integer 
     */
    public function getNumcajassurtidas()
    {
        return $this->numcajassurtidas;
    }

    /**
     * Set dteprimeraentrega
     *
     * @param \DateTime $dteprimeraentrega
     * @return Transacciones
     */
    public function setDteprimeraentrega($dteprimeraentrega)
    {
        $this->dteprimeraentrega = $dteprimeraentrega;

        return $this;
    }

    /**
     * Get dteprimeraentrega
     *
     * @return \DateTime 
     */
    public function getDteprimeraentrega()
    {
        return $this->dteprimeraentrega;
    }

    /**
     * Set dteultimaentrega
     *
     * @param \DateTime $dteultimaentrega
     * @return Transacciones
     */
    public function setDteultimaentrega($dteultimaentrega)
    {
        $this->dteultimaentrega = $dteultimaentrega;

        return $this;
    }

    /**
     * Get dteultimaentrega
     *
     * @return \DateTime 
     */
    public function getDteultimaentrega()
    {
        return $this->dteultimaentrega;
    }

    /**
     * Set dteentregamercancia
     *
     * @param \DateTime $dteentregamercancia
     * @return Transacciones
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
     * Set numtipopago
     *
     * @param integer $numtipopago
     * @return Transacciones
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
     * Set numcondicionId
     *
     * @param integer $numcondicionId
     * @return Transacciones
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
     * @return Transacciones
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
     * Set numdiascredito
     *
     * @param integer $numdiascredito
     * @return Transacciones
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
     * Set dterevision
     *
     * @param \DateTime $dterevision
     * @return Transacciones
     */
    public function setDterevision($dterevision)
    {
        $this->dterevision = $dterevision;

        return $this;
    }

    /**
     * Get dterevision
     *
     * @return \DateTime 
     */
    public function getDterevision()
    {
        return $this->dterevision;
    }

    /**
     * Set dtevencimiento
     *
     * @param \DateTime $dtevencimiento
     * @return Transacciones
     */
    public function setDtevencimiento($dtevencimiento)
    {
        $this->dtevencimiento = $dtevencimiento;

        return $this;
    }

    /**
     * Get dtevencimiento
     *
     * @return \DateTime 
     */
    public function getDtevencimiento()
    {
        return $this->dtevencimiento;
    }

    /**
     * Set dtepromesarevision
     *
     * @param \DateTime $dtepromesarevision
     * @return Transacciones
     */
    public function setDtepromesarevision($dtepromesarevision)
    {
        $this->dtepromesarevision = $dtepromesarevision;

        return $this;
    }

    /**
     * Get dtepromesarevision
     *
     * @return \DateTime 
     */
    public function getDtepromesarevision()
    {
        return $this->dtepromesarevision;
    }

    /**
     * Set dtepromesapago
     *
     * @param \DateTime $dtepromesapago
     * @return Transacciones
     */
    public function setDtepromesapago($dtepromesapago)
    {
        $this->dtepromesapago = $dtepromesapago;

        return $this;
    }

    /**
     * Get dtepromesapago
     *
     * @return \DateTime 
     */
    public function getDtepromesapago()
    {
        return $this->dtepromesapago;
    }

    /**
     * Set numdiasprontopago
     *
     * @param integer $numdiasprontopago
     * @return Transacciones
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
     * Set dteprontopago
     *
     * @param \DateTime $dteprontopago
     * @return Transacciones
     */
    public function setDteprontopago($dteprontopago)
    {
        $this->dteprontopago = $dteprontopago;

        return $this;
    }

    /**
     * Get dteprontopago
     *
     * @return \DateTime 
     */
    public function getDteprontopago()
    {
        return $this->dteprontopago;
    }

    /**
     * Set numdescuentoprontopago
     *
     * @param integer $numdescuentoprontopago
     * @return Transacciones
     */
    public function setNumdescuentoprontopago($numdescuentoprontopago)
    {
        $this->numdescuentoprontopago = $numdescuentoprontopago;

        return $this;
    }

    /**
     * Get numdescuentoprontopago
     *
     * @return integer 
     */
    public function getNumdescuentoprontopago()
    {
        return $this->numdescuentoprontopago;
    }

    /**
     * Set dtevigencia
     *
     * @param \DateTime $dtevigencia
     * @return Transacciones
     */
    public function setDtevigencia($dtevigencia)
    {
        $this->dtevigencia = $dtevigencia;

        return $this;
    }

    /**
     * Get dtevigencia
     *
     * @return \DateTime 
     */
    public function getDtevigencia()
    {
        return $this->dtevigencia;
    }

    /**
     * Set logvaloresporcentajes
     *
     * @param boolean $logvaloresporcentajes
     * @return Transacciones
     */
    public function setLogvaloresporcentajes($logvaloresporcentajes)
    {
        $this->logvaloresporcentajes = $logvaloresporcentajes;

        return $this;
    }

    /**
     * Get logvaloresporcentajes
     *
     * @return boolean 
     */
    public function getLogvaloresporcentajes()
    {
        return $this->logvaloresporcentajes;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Transacciones
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
     * @return Transacciones
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
     * Set numtotalpeso
     *
     * @param float $numtotalpeso
     * @return Transacciones
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
     * Set numtotalpartidasinventarios
     *
     * @param integer $numtotalpartidasinventarios
     * @return Transacciones
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
     * Set numtotalpartidascontables
     *
     * @param integer $numtotalpartidascontables
     * @return Transacciones
     */
    public function setNumtotalpartidascontables($numtotalpartidascontables)
    {
        $this->numtotalpartidascontables = $numtotalpartidascontables;

        return $this;
    }

    /**
     * Get numtotalpartidascontables
     *
     * @return integer 
     */
    public function getNumtotalpartidascontables()
    {
        return $this->numtotalpartidascontables;
    }

    /**
     * Set numtotalpartidaspagos
     *
     * @param integer $numtotalpartidaspagos
     * @return Transacciones
     */
    public function setNumtotalpartidaspagos($numtotalpartidaspagos)
    {
        $this->numtotalpartidaspagos = $numtotalpartidaspagos;

        return $this;
    }

    /**
     * Get numtotalpartidaspagos
     *
     * @return integer 
     */
    public function getNumtotalpartidaspagos()
    {
        return $this->numtotalpartidaspagos;
    }

    /**
     * Set numtotalcantidad
     *
     * @param float $numtotalcantidad
     * @return Transacciones
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
     * Set numtotalcantidadsurtida
     *
     * @param float $numtotalcantidadsurtida
     * @return Transacciones
     */
    public function setNumtotalcantidadsurtida($numtotalcantidadsurtida)
    {
        $this->numtotalcantidadsurtida = $numtotalcantidadsurtida;

        return $this;
    }

    /**
     * Get numtotalcantidadsurtida
     *
     * @return float 
     */
    public function getNumtotalcantidadsurtida()
    {
        return $this->numtotalcantidadsurtida;
    }

    /**
     * Set numtotaldescuento1
     *
     * @param integer $numtotaldescuento1
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * Set numtotalcomision1
     *
     * @param integer $numtotalcomision1
     * @return Transacciones
     */
    public function setNumtotalcomision1($numtotalcomision1)
    {
        $this->numtotalcomision1 = $numtotalcomision1;

        return $this;
    }

    /**
     * Get numtotalcomision1
     *
     * @return integer 
     */
    public function getNumtotalcomision1()
    {
        return $this->numtotalcomision1;
    }

    /**
     * Set numtotalcomision2
     *
     * @param integer $numtotalcomision2
     * @return Transacciones
     */
    public function setNumtotalcomision2($numtotalcomision2)
    {
        $this->numtotalcomision2 = $numtotalcomision2;

        return $this;
    }

    /**
     * Get numtotalcomision2
     *
     * @return integer 
     */
    public function getNumtotalcomision2()
    {
        return $this->numtotalcomision2;
    }

    /**
     * Set numtotalcomision3
     *
     * @param integer $numtotalcomision3
     * @return Transacciones
     */
    public function setNumtotalcomision3($numtotalcomision3)
    {
        $this->numtotalcomision3 = $numtotalcomision3;

        return $this;
    }

    /**
     * Get numtotalcomision3
     *
     * @return integer 
     */
    public function getNumtotalcomision3()
    {
        return $this->numtotalcomision3;
    }

    /**
     * Set numtotalcomision4
     *
     * @param integer $numtotalcomision4
     * @return Transacciones
     */
    public function setNumtotalcomision4($numtotalcomision4)
    {
        $this->numtotalcomision4 = $numtotalcomision4;

        return $this;
    }

    /**
     * Get numtotalcomision4
     *
     * @return integer 
     */
    public function getNumtotalcomision4()
    {
        return $this->numtotalcomision4;
    }

    /**
     * Set numtotalcomision5
     *
     * @param integer $numtotalcomision5
     * @return Transacciones
     */
    public function setNumtotalcomision5($numtotalcomision5)
    {
        $this->numtotalcomision5 = $numtotalcomision5;

        return $this;
    }

    /**
     * Get numtotalcomision5
     *
     * @return integer 
     */
    public function getNumtotalcomision5()
    {
        return $this->numtotalcomision5;
    }

    /**
     * Set numtotalcomision6
     *
     * @param integer $numtotalcomision6
     * @return Transacciones
     */
    public function setNumtotalcomision6($numtotalcomision6)
    {
        $this->numtotalcomision6 = $numtotalcomision6;

        return $this;
    }

    /**
     * Get numtotalcomision6
     *
     * @return integer 
     */
    public function getNumtotalcomision6()
    {
        return $this->numtotalcomision6;
    }

    /**
     * Set numtotalprecioventa
     *
     * @param integer $numtotalprecioventa
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * Set numtotal
     *
     * @param integer $numtotal
     * @return Transacciones
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
     * Set numsaldo
     *
     * @param integer $numsaldo
     * @return Transacciones
     */
    public function setNumsaldo($numsaldo)
    {
        $this->numsaldo = $numsaldo;

        return $this;
    }

    /**
     * Get numsaldo
     *
     * @return integer 
     */
    public function getNumsaldo()
    {
        return $this->numsaldo;
    }

    /**
     * Set numredondeo
     *
     * @param integer $numredondeo
     * @return Transacciones
     */
    public function setNumredondeo($numredondeo)
    {
        $this->numredondeo = $numredondeo;

        return $this;
    }

    /**
     * Get numredondeo
     *
     * @return integer 
     */
    public function getNumredondeo()
    {
        return $this->numredondeo;
    }

    /**
     * Set numbenefactorredondeoId
     *
     * @param integer $numbenefactorredondeoId
     * @return Transacciones
     */
    public function setNumbenefactorredondeoId($numbenefactorredondeoId)
    {
        $this->numbenefactorredondeoId = $numbenefactorredondeoId;

        return $this;
    }

    /**
     * Get numbenefactorredondeoId
     *
     * @return integer 
     */
    public function getNumbenefactorredondeoId()
    {
        return $this->numbenefactorredondeoId;
    }

    /**
     * Set strmonederoKy
     *
     * @param string $strmonederoKy
     * @return Transacciones
     */
    public function setStrmonederoKy($strmonederoKy)
    {
        $this->strmonederoKy = $strmonederoKy;

        return $this;
    }

    /**
     * Get strmonederoKy
     *
     * @return string 
     */
    public function getStrmonederoKy()
    {
        return $this->strmonederoKy;
    }

    /**
     * Set numsaldoanteriormonedero
     *
     * @param integer $numsaldoanteriormonedero
     * @return Transacciones
     */
    public function setNumsaldoanteriormonedero($numsaldoanteriormonedero)
    {
        $this->numsaldoanteriormonedero = $numsaldoanteriormonedero;

        return $this;
    }

    /**
     * Get numsaldoanteriormonedero
     *
     * @return integer 
     */
    public function getNumsaldoanteriormonedero()
    {
        return $this->numsaldoanteriormonedero;
    }

    /**
     * Set numtotalobtenidomonedero
     *
     * @param integer $numtotalobtenidomonedero
     * @return Transacciones
     */
    public function setNumtotalobtenidomonedero($numtotalobtenidomonedero)
    {
        $this->numtotalobtenidomonedero = $numtotalobtenidomonedero;

        return $this;
    }

    /**
     * Get numtotalobtenidomonedero
     *
     * @return integer 
     */
    public function getNumtotalobtenidomonedero()
    {
        return $this->numtotalobtenidomonedero;
    }

    /**
     * Set numtotalutilizadomonedero
     *
     * @param integer $numtotalutilizadomonedero
     * @return Transacciones
     */
    public function setNumtotalutilizadomonedero($numtotalutilizadomonedero)
    {
        $this->numtotalutilizadomonedero = $numtotalutilizadomonedero;

        return $this;
    }

    /**
     * Get numtotalutilizadomonedero
     *
     * @return integer 
     */
    public function getNumtotalutilizadomonedero()
    {
        return $this->numtotalutilizadomonedero;
    }

    /**
     * Set numtipolenguajeimporte
     *
     * @param integer $numtipolenguajeimporte
     * @return Transacciones
     */
    public function setNumtipolenguajeimporte($numtipolenguajeimporte)
    {
        $this->numtipolenguajeimporte = $numtipolenguajeimporte;

        return $this;
    }

    /**
     * Get numtipolenguajeimporte
     *
     * @return integer 
     */
    public function getNumtipolenguajeimporte()
    {
        return $this->numtipolenguajeimporte;
    }

    /**
     * Set logretenerpago
     *
     * @param boolean $logretenerpago
     * @return Transacciones
     */
    public function setLogretenerpago($logretenerpago)
    {
        $this->logretenerpago = $logretenerpago;

        return $this;
    }

    /**
     * Get logretenerpago
     *
     * @return boolean 
     */
    public function getLogretenerpago()
    {
        return $this->logretenerpago;
    }

    /**
     * Set logcontrolarsaldo
     *
     * @param boolean $logcontrolarsaldo
     * @return Transacciones
     */
    public function setLogcontrolarsaldo($logcontrolarsaldo)
    {
        $this->logcontrolarsaldo = $logcontrolarsaldo;

        return $this;
    }

    /**
     * Get logcontrolarsaldo
     *
     * @return boolean 
     */
    public function getLogcontrolarsaldo()
    {
        return $this->logcontrolarsaldo;
    }

    /**
     * Set numtransaccioninventarioId
     *
     * @param integer $numtransaccioninventarioId
     * @return Transacciones
     */
    public function setNumtransaccioninventarioId($numtransaccioninventarioId)
    {
        $this->numtransaccioninventarioId = $numtransaccioninventarioId;

        return $this;
    }

    /**
     * Get numtransaccioninventarioId
     *
     * @return integer 
     */
    public function getNumtransaccioninventarioId()
    {
        return $this->numtransaccioninventarioId;
    }

    /**
     * Set numalmaceninventarioId
     *
     * @param integer $numalmaceninventarioId
     * @return Transacciones
     */
    public function setNumalmaceninventarioId($numalmaceninventarioId)
    {
        $this->numalmaceninventarioId = $numalmaceninventarioId;

        return $this;
    }

    /**
     * Get numalmaceninventarioId
     *
     * @return integer 
     */
    public function getNumalmaceninventarioId()
    {
        return $this->numalmaceninventarioId;
    }

    /**
     * Set numtipotransaccioninventario
     *
     * @param integer $numtipotransaccioninventario
     * @return Transacciones
     */
    public function setNumtipotransaccioninventario($numtipotransaccioninventario)
    {
        $this->numtipotransaccioninventario = $numtipotransaccioninventario;

        return $this;
    }

    /**
     * Get numtipotransaccioninventario
     *
     * @return integer 
     */
    public function getNumtipotransaccioninventario()
    {
        return $this->numtipotransaccioninventario;
    }

    /**
     * Set numalmacentransitoId
     *
     * @param integer $numalmacentransitoId
     * @return Transacciones
     */
    public function setNumalmacentransitoId($numalmacentransitoId)
    {
        $this->numalmacentransitoId = $numalmacentransitoId;

        return $this;
    }

    /**
     * Get numalmacentransitoId
     *
     * @return integer 
     */
    public function getNumalmacentransitoId()
    {
        return $this->numalmacentransitoId;
    }

    /**
     * Set numtransaccionorigenId
     *
     * @param integer $numtransaccionorigenId
     * @return Transacciones
     */
    public function setNumtransaccionorigenId($numtransaccionorigenId)
    {
        $this->numtransaccionorigenId = $numtransaccionorigenId;

        return $this;
    }

    /**
     * Get numtransaccionorigenId
     *
     * @return integer 
     */
    public function getNumtransaccionorigenId()
    {
        return $this->numtransaccionorigenId;
    }

    /**
     * Set numalmacenorigenId
     *
     * @param integer $numalmacenorigenId
     * @return Transacciones
     */
    public function setNumalmacenorigenId($numalmacenorigenId)
    {
        $this->numalmacenorigenId = $numalmacenorigenId;

        return $this;
    }

    /**
     * Get numalmacenorigenId
     *
     * @return integer 
     */
    public function getNumalmacenorigenId()
    {
        return $this->numalmacenorigenId;
    }

    /**
     * Set numtipotransaccionorigen
     *
     * @param integer $numtipotransaccionorigen
     * @return Transacciones
     */
    public function setNumtipotransaccionorigen($numtipotransaccionorigen)
    {
        $this->numtipotransaccionorigen = $numtipotransaccionorigen;

        return $this;
    }

    /**
     * Get numtipotransaccionorigen
     *
     * @return integer 
     */
    public function getNumtipotransaccionorigen()
    {
        return $this->numtipotransaccionorigen;
    }

    /**
     * Set numtiporeversionautomatica
     *
     * @param integer $numtiporeversionautomatica
     * @return Transacciones
     */
    public function setNumtiporeversionautomatica($numtiporeversionautomatica)
    {
        $this->numtiporeversionautomatica = $numtiporeversionautomatica;

        return $this;
    }

    /**
     * Get numtiporeversionautomatica
     *
     * @return integer 
     */
    public function getNumtiporeversionautomatica()
    {
        return $this->numtiporeversionautomatica;
    }

    /**
     * Set numtransaccionreversionId
     *
     * @param integer $numtransaccionreversionId
     * @return Transacciones
     */
    public function setNumtransaccionreversionId($numtransaccionreversionId)
    {
        $this->numtransaccionreversionId = $numtransaccionreversionId;

        return $this;
    }

    /**
     * Get numtransaccionreversionId
     *
     * @return integer 
     */
    public function getNumtransaccionreversionId()
    {
        return $this->numtransaccionreversionId;
    }

    /**
     * Set numalmacenreversionId
     *
     * @param integer $numalmacenreversionId
     * @return Transacciones
     */
    public function setNumalmacenreversionId($numalmacenreversionId)
    {
        $this->numalmacenreversionId = $numalmacenreversionId;

        return $this;
    }

    /**
     * Get numalmacenreversionId
     *
     * @return integer 
     */
    public function getNumalmacenreversionId()
    {
        return $this->numalmacenreversionId;
    }

    /**
     * Set numtipotransaccionreversion
     *
     * @param integer $numtipotransaccionreversion
     * @return Transacciones
     */
    public function setNumtipotransaccionreversion($numtipotransaccionreversion)
    {
        $this->numtipotransaccionreversion = $numtipotransaccionreversion;

        return $this;
    }

    /**
     * Get numtipotransaccionreversion
     *
     * @return integer 
     */
    public function getNumtipotransaccionreversion()
    {
        return $this->numtipotransaccionreversion;
    }

    /**
     * Set numdocumentoId
     *
     * @param integer $numdocumentoId
     * @return Transacciones
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
     * Set numtipomodulo
     *
     * @param integer $numtipomodulo
     * @return Transacciones
     */
    public function setNumtipomodulo($numtipomodulo)
    {
        $this->numtipomodulo = $numtipomodulo;

        return $this;
    }

    /**
     * Get numtipomodulo
     *
     * @return integer 
     */
    public function getNumtipomodulo()
    {
        return $this->numtipomodulo;
    }

    /**
     * Set numtipodocumento
     *
     * @param integer $numtipodocumento
     * @return Transacciones
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
     * Set numtipocontabilizacion
     *
     * @param integer $numtipocontabilizacion
     * @return Transacciones
     */
    public function setNumtipocontabilizacion($numtipocontabilizacion)
    {
        $this->numtipocontabilizacion = $numtipocontabilizacion;

        return $this;
    }

    /**
     * Get numtipocontabilizacion
     *
     * @return integer 
     */
    public function getNumtipocontabilizacion()
    {
        return $this->numtipocontabilizacion;
    }

    /**
     * Set numtipocuenta
     *
     * @param integer $numtipocuenta
     * @return Transacciones
     */
    public function setNumtipocuenta($numtipocuenta)
    {
        $this->numtipocuenta = $numtipocuenta;

        return $this;
    }

    /**
     * Get numtipocuenta
     *
     * @return integer 
     */
    public function getNumtipocuenta()
    {
        return $this->numtipocuenta;
    }

    /**
     * Set numafectainventario
     *
     * @param integer $numafectainventario
     * @return Transacciones
     */
    public function setNumafectainventario($numafectainventario)
    {
        $this->numafectainventario = $numafectainventario;

        return $this;
    }

    /**
     * Get numafectainventario
     *
     * @return integer 
     */
    public function getNumafectainventario()
    {
        return $this->numafectainventario;
    }

    /**
     * Set numafectacuentapagar
     *
     * @param integer $numafectacuentapagar
     * @return Transacciones
     */
    public function setNumafectacuentapagar($numafectacuentapagar)
    {
        $this->numafectacuentapagar = $numafectacuentapagar;

        return $this;
    }

    /**
     * Get numafectacuentapagar
     *
     * @return integer 
     */
    public function getNumafectacuentapagar()
    {
        return $this->numafectacuentapagar;
    }

    /**
     * Set numafectacuentacobrar
     *
     * @param integer $numafectacuentacobrar
     * @return Transacciones
     */
    public function setNumafectacuentacobrar($numafectacuentacobrar)
    {
        $this->numafectacuentacobrar = $numafectacuentacobrar;

        return $this;
    }

    /**
     * Get numafectacuentacobrar
     *
     * @return integer 
     */
    public function getNumafectacuentacobrar()
    {
        return $this->numafectacuentacobrar;
    }

    /**
     * Set numafectabanco
     *
     * @param integer $numafectabanco
     * @return Transacciones
     */
    public function setNumafectabanco($numafectabanco)
    {
        $this->numafectabanco = $numafectabanco;

        return $this;
    }

    /**
     * Get numafectabanco
     *
     * @return integer 
     */
    public function getNumafectabanco()
    {
        return $this->numafectabanco;
    }

    /**
     * Set numafectacontabilidad
     *
     * @param integer $numafectacontabilidad
     * @return Transacciones
     */
    public function setNumafectacontabilidad($numafectacontabilidad)
    {
        $this->numafectacontabilidad = $numafectacontabilidad;

        return $this;
    }

    /**
     * Get numafectacontabilidad
     *
     * @return integer 
     */
    public function getNumafectacontabilidad()
    {
        return $this->numafectacontabilidad;
    }

    /**
     * Set numafectaproduccion
     *
     * @param integer $numafectaproduccion
     * @return Transacciones
     */
    public function setNumafectaproduccion($numafectaproduccion)
    {
        $this->numafectaproduccion = $numafectaproduccion;

        return $this;
    }

    /**
     * Get numafectaproduccion
     *
     * @return integer 
     */
    public function getNumafectaproduccion()
    {
        return $this->numafectaproduccion;
    }

    /**
     * Set numtipoconciliacion
     *
     * @param integer $numtipoconciliacion
     * @return Transacciones
     */
    public function setNumtipoconciliacion($numtipoconciliacion)
    {
        $this->numtipoconciliacion = $numtipoconciliacion;

        return $this;
    }

    /**
     * Get numtipoconciliacion
     *
     * @return integer 
     */
    public function getNumtipoconciliacion()
    {
        return $this->numtipoconciliacion;
    }

    /**
     * Set numconciliacionId
     *
     * @param integer $numconciliacionId
     * @return Transacciones
     */
    public function setNumconciliacionId($numconciliacionId)
    {
        $this->numconciliacionId = $numconciliacionId;

        return $this;
    }

    /**
     * Get numconciliacionId
     *
     * @return integer 
     */
    public function getNumconciliacionId()
    {
        return $this->numconciliacionId;
    }

    /**
     * Set dteconciliacion
     *
     * @param \DateTime $dteconciliacion
     * @return Transacciones
     */
    public function setDteconciliacion($dteconciliacion)
    {
        $this->dteconciliacion = $dteconciliacion;

        return $this;
    }

    /**
     * Get dteconciliacion
     *
     * @return \DateTime 
     */
    public function getDteconciliacion()
    {
        return $this->dteconciliacion;
    }

    /**
     * Set numcuentabancariaId
     *
     * @param integer $numcuentabancariaId
     * @return Transacciones
     */
    public function setNumcuentabancariaId($numcuentabancariaId)
    {
        $this->numcuentabancariaId = $numcuentabancariaId;

        return $this;
    }

    /**
     * Get numcuentabancariaId
     *
     * @return integer 
     */
    public function getNumcuentabancariaId()
    {
        return $this->numcuentabancariaId;
    }

    /**
     * Set strtarjeta
     *
     * @param string $strtarjeta
     * @return Transacciones
     */
    public function setStrtarjeta($strtarjeta)
    {
        $this->strtarjeta = $strtarjeta;

        return $this;
    }

    /**
     * Get strtarjeta
     *
     * @return string 
     */
    public function getStrtarjeta()
    {
        return $this->strtarjeta;
    }

    /**
     * Set numformapagoId
     *
     * @param integer $numformapagoId
     * @return Transacciones
     */
    public function setNumformapagoId($numformapagoId)
    {
        $this->numformapagoId = $numformapagoId;

        return $this;
    }

    /**
     * Get numformapagoId
     *
     * @return integer 
     */
    public function getNumformapagoId()
    {
        return $this->numformapagoId;
    }

    /**
     * Set numbancoId
     *
     * @param integer $numbancoId
     * @return Transacciones
     */
    public function setNumbancoId($numbancoId)
    {
        $this->numbancoId = $numbancoId;

        return $this;
    }

    /**
     * Get numbancoId
     *
     * @return integer 
     */
    public function getNumbancoId()
    {
        return $this->numbancoId;
    }

    /**
     * Set numporcentajecomision
     *
     * @param float $numporcentajecomision
     * @return Transacciones
     */
    public function setNumporcentajecomision($numporcentajecomision)
    {
        $this->numporcentajecomision = $numporcentajecomision;

        return $this;
    }

    /**
     * Get numporcentajecomision
     *
     * @return float 
     */
    public function getNumporcentajecomision()
    {
        return $this->numporcentajecomision;
    }

    /**
     * Set numimportecomision
     *
     * @param integer $numimportecomision
     * @return Transacciones
     */
    public function setNumimportecomision($numimportecomision)
    {
        $this->numimportecomision = $numimportecomision;

        return $this;
    }

    /**
     * Get numimportecomision
     *
     * @return integer 
     */
    public function getNumimportecomision()
    {
        return $this->numimportecomision;
    }

    /**
     * Set numimpuestocomisionId
     *
     * @param integer $numimpuestocomisionId
     * @return Transacciones
     */
    public function setNumimpuestocomisionId($numimpuestocomisionId)
    {
        $this->numimpuestocomisionId = $numimpuestocomisionId;

        return $this;
    }

    /**
     * Get numimpuestocomisionId
     *
     * @return integer 
     */
    public function getNumimpuestocomisionId()
    {
        return $this->numimpuestocomisionId;
    }

    /**
     * Set numporcentajeimpuestocomision
     *
     * @param float $numporcentajeimpuestocomision
     * @return Transacciones
     */
    public function setNumporcentajeimpuestocomision($numporcentajeimpuestocomision)
    {
        $this->numporcentajeimpuestocomision = $numporcentajeimpuestocomision;

        return $this;
    }

    /**
     * Get numporcentajeimpuestocomision
     *
     * @return float 
     */
    public function getNumporcentajeimpuestocomision()
    {
        return $this->numporcentajeimpuestocomision;
    }

    /**
     * Set dterecuperacion
     *
     * @param \DateTime $dterecuperacion
     * @return Transacciones
     */
    public function setDterecuperacion($dterecuperacion)
    {
        $this->dterecuperacion = $dterecuperacion;

        return $this;
    }

    /**
     * Get dterecuperacion
     *
     * @return \DateTime 
     */
    public function getDterecuperacion()
    {
        return $this->dterecuperacion;
    }

    /**
     * Set numimagenId
     *
     * @param integer $numimagenId
     * @return Transacciones
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
     * Set numtipoimpresiondocumento
     *
     * @param integer $numtipoimpresiondocumento
     * @return Transacciones
     */
    public function setNumtipoimpresiondocumento($numtipoimpresiondocumento)
    {
        $this->numtipoimpresiondocumento = $numtipoimpresiondocumento;

        return $this;
    }

    /**
     * Get numtipoimpresiondocumento
     *
     * @return integer 
     */
    public function getNumtipoimpresiondocumento()
    {
        return $this->numtipoimpresiondocumento;
    }

    /**
     * Set numtipoenviodocumento
     *
     * @param integer $numtipoenviodocumento
     * @return Transacciones
     */
    public function setNumtipoenviodocumento($numtipoenviodocumento)
    {
        $this->numtipoenviodocumento = $numtipoenviodocumento;

        return $this;
    }

    /**
     * Get numtipoenviodocumento
     *
     * @return integer 
     */
    public function getNumtipoenviodocumento()
    {
        return $this->numtipoenviodocumento;
    }

    /**
     * Set numclasificacionId
     *
     * @param integer $numclasificacionId
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * Set logobservacionesdetalle
     *
     * @param boolean $logobservacionesdetalle
     * @return Transacciones
     */
    public function setLogobservacionesdetalle($logobservacionesdetalle)
    {
        $this->logobservacionesdetalle = $logobservacionesdetalle;

        return $this;
    }

    /**
     * Get logobservacionesdetalle
     *
     * @return boolean 
     */
    public function getLogobservacionesdetalle()
    {
        return $this->logobservacionesdetalle;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * @return Transacciones
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
     * Set logtransaccionocupada
     *
     * @param boolean $logtransaccionocupada
     * @return Transacciones
     */
    public function setLogtransaccionocupada($logtransaccionocupada)
    {
        $this->logtransaccionocupada = $logtransaccionocupada;

        return $this;
    }

    /**
     * Get logtransaccionocupada
     *
     * @return boolean 
     */
    public function getLogtransaccionocupada()
    {
        return $this->logtransaccionocupada;
    }

    /**
     * Set numtipoestadosurtido
     *
     * @param integer $numtipoestadosurtido
     * @return Transacciones
     */
    public function setNumtipoestadosurtido($numtipoestadosurtido)
    {
        $this->numtipoestadosurtido = $numtipoestadosurtido;

        return $this;
    }

    /**
     * Get numtipoestadosurtido
     *
     * @return integer 
     */
    public function getNumtipoestadosurtido()
    {
        return $this->numtipoestadosurtido;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Transacciones
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
     * @return Transacciones
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
     * Set numcuentabancariagenerarId
     *
     * @param integer $numcuentabancariagenerarId
     * @return Transacciones
     */
    public function setNumcuentabancariagenerarId($numcuentabancariagenerarId)
    {
        $this->numcuentabancariagenerarId = $numcuentabancariagenerarId;

        return $this;
    }

    /**
     * Get numcuentabancariagenerarId
     *
     * @return integer 
     */
    public function getNumcuentabancariagenerarId()
    {
        return $this->numcuentabancariagenerarId;
    }

    /**
     * Set strpedimentoKy
     *
     * @param string $strpedimentoKy
     * @return Transacciones
     */
    public function setStrpedimentoKy($strpedimentoKy)
    {
        $this->strpedimentoKy = $strpedimentoKy;

        return $this;
    }

    /**
     * Get strpedimentoKy
     *
     * @return string 
     */
    public function getStrpedimentoKy()
    {
        return $this->strpedimentoKy;
    }

    /**
     * Set numtotalapoyomarca
     *
     * @param integer $numtotalapoyomarca
     * @return Transacciones
     */
    public function setNumtotalapoyomarca($numtotalapoyomarca)
    {
        $this->numtotalapoyomarca = $numtotalapoyomarca;

        return $this;
    }

    /**
     * Get numtotalapoyomarca
     *
     * @return integer 
     */
    public function getNumtotalapoyomarca()
    {
        return $this->numtotalapoyomarca;
    }

    /**
     * Set numtransacciondigitalId
     *
     * @param integer $numtransacciondigitalId
     * @return Transacciones
     */
    public function setNumtransacciondigitalId($numtransacciondigitalId)
    {
        $this->numtransacciondigitalId = $numtransacciondigitalId;

        return $this;
    }

    /**
     * Get numtransacciondigitalId
     *
     * @return integer 
     */
    public function getNumtransacciondigitalId()
    {
        return $this->numtransacciondigitalId;
    }

    /**
     * Set numalmacendigitalId
     *
     * @param integer $numalmacendigitalId
     * @return Transacciones
     */
    public function setNumalmacendigitalId($numalmacendigitalId)
    {
        $this->numalmacendigitalId = $numalmacendigitalId;

        return $this;
    }

    /**
     * Get numalmacendigitalId
     *
     * @return integer 
     */
    public function getNumalmacendigitalId()
    {
        return $this->numalmacendigitalId;
    }

    /**
     * Set numtipotransacciondigital
     *
     * @param integer $numtipotransacciondigital
     * @return Transacciones
     */
    public function setNumtipotransacciondigital($numtipotransacciondigital)
    {
        $this->numtipotransacciondigital = $numtipotransacciondigital;

        return $this;
    }

    /**
     * Get numtipotransacciondigital
     *
     * @return integer 
     */
    public function getNumtipotransacciondigital()
    {
        return $this->numtipotransacciondigital;
    }
}
