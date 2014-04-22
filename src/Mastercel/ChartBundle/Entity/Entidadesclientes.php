<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadesclientes
 *
 * @ORM\Table(name="EntidadesClientes", indexes={@ORM\Index(name="Indice_1", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"StrCodigoProveedor"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_6", columns={"StrCuentaCobrar_ky"}), @ORM\Index(name="Indice_7", columns={"StrCuentaAnticipoCliente_ky"})})
 * @ORM\Entity
 */
class Entidadesclientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGiro_id", type="integer", nullable=true)
     */
    private $numgiroId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=true)
     */
    private $numcategoriaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoUbicacion", type="integer", nullable=true)
     */
    private $numtipoubicacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContactoLegal_id", type="integer", nullable=true)
     */
    private $numcontactolegalId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContactoCompras_id", type="integer", nullable=true)
     */
    private $numcontactocomprasId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContactoPagos_id", type="integer", nullable=true)
     */
    private $numcontactopagosId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiaRevisionPago_id", type="integer", nullable=true)
     */
    private $numdiarevisionpagoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPago", type="integer", nullable=true)
     */
    private $numtipopago = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCondicionContado_id", type="integer", nullable=true)
     */
    private $numcondicioncontadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCondicionCredito_id", type="integer", nullable=true)
     */
    private $numcondicioncreditoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCondicionConsignacion_id", type="integer", nullable=true)
     */
    private $numcondicionconsignacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimiteCredito", type="integer", nullable=true)
     */
    private $numlimitecredito = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogControlarSaldo", type="boolean", nullable=true)
     */
    private $logcontrolarsaldo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRegionImpuesto_id", type="integer", nullable=true)
     */
    private $numregionimpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMedioEnvio_id", type="integer", nullable=true)
     */
    private $nummedioenvioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClientePagador_id", type="integer", nullable=true)
     */
    private $numclientepagadorId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoProveedor", type="string", length=20, nullable=true)
     */
    private $strcodigoproveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjecutivo_id", type="integer", nullable=true)
     */
    private $numejecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelPrecio", type="integer", nullable=true)
     */
    private $numnivelprecio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoPromocion_id", type="integer", nullable=true)
     */
    private $numcodigopromocionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoAcceso", type="string", length=60, nullable=true)
     */
    private $strcodigoacceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_1_id", type="integer", nullable=true)
     */
    private $numvendedor1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_1_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_2_id", type="integer", nullable=true)
     */
    private $numvendedor2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_2_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDireccionFiscal", type="integer", nullable=true)
     */
    private $numtipodireccionfiscal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDireccionEnvio", type="integer", nullable=true)
     */
    private $numtipodireccionenvio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenVirtual_id", type="integer", nullable=true)
     */
    private $numalmacenvirtualId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRutaCobro_id", type="integer", nullable=true)
     */
    private $numrutacobroId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRegion_id", type="integer", nullable=true)
     */
    private $numregionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPublicidad_id", type="integer", nullable=true)
     */
    private $numpublicidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaCobrar_ky", type="string", length=20, nullable=true)
     */
    private $strcuentacobrarKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaAnticipoCliente_ky", type="string", length=20, nullable=true)
     */
    private $strcuentaanticipoclienteKy;

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
     * @var string
     *
     * @ORM\Column(name="MemReferenciasVenta", type="text", length=16, nullable=true)
     */
    private $memreferenciasventa;

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
     * @var string
     *
     * @ORM\Column(name="StrMetodoPago", type="string", length=40, nullable=true)
     */
    private $strmetodopago;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNumeroCuentaPago", type="string", length=10, nullable=true)
     */
    private $strnumerocuentapago;



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
     * Set numgiroId
     *
     * @param integer $numgiroId
     * @return Entidadesclientes
     */
    public function setNumgiroId($numgiroId)
    {
        $this->numgiroId = $numgiroId;

        return $this;
    }

    /**
     * Get numgiroId
     *
     * @return integer 
     */
    public function getNumgiroId()
    {
        return $this->numgiroId;
    }

    /**
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Entidadesclientes
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
     * Set numtipoubicacion
     *
     * @param integer $numtipoubicacion
     * @return Entidadesclientes
     */
    public function setNumtipoubicacion($numtipoubicacion)
    {
        $this->numtipoubicacion = $numtipoubicacion;

        return $this;
    }

    /**
     * Get numtipoubicacion
     *
     * @return integer 
     */
    public function getNumtipoubicacion()
    {
        return $this->numtipoubicacion;
    }

    /**
     * Set numcontactolegalId
     *
     * @param integer $numcontactolegalId
     * @return Entidadesclientes
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
     * Set numcontactocomprasId
     *
     * @param integer $numcontactocomprasId
     * @return Entidadesclientes
     */
    public function setNumcontactocomprasId($numcontactocomprasId)
    {
        $this->numcontactocomprasId = $numcontactocomprasId;

        return $this;
    }

    /**
     * Get numcontactocomprasId
     *
     * @return integer 
     */
    public function getNumcontactocomprasId()
    {
        return $this->numcontactocomprasId;
    }

    /**
     * Set numcontactopagosId
     *
     * @param integer $numcontactopagosId
     * @return Entidadesclientes
     */
    public function setNumcontactopagosId($numcontactopagosId)
    {
        $this->numcontactopagosId = $numcontactopagosId;

        return $this;
    }

    /**
     * Get numcontactopagosId
     *
     * @return integer 
     */
    public function getNumcontactopagosId()
    {
        return $this->numcontactopagosId;
    }

    /**
     * Set numdiarevisionpagoId
     *
     * @param integer $numdiarevisionpagoId
     * @return Entidadesclientes
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
     * Set numtipopago
     *
     * @param integer $numtipopago
     * @return Entidadesclientes
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
     * Set numcondicioncontadoId
     *
     * @param integer $numcondicioncontadoId
     * @return Entidadesclientes
     */
    public function setNumcondicioncontadoId($numcondicioncontadoId)
    {
        $this->numcondicioncontadoId = $numcondicioncontadoId;

        return $this;
    }

    /**
     * Get numcondicioncontadoId
     *
     * @return integer 
     */
    public function getNumcondicioncontadoId()
    {
        return $this->numcondicioncontadoId;
    }

    /**
     * Set numcondicioncreditoId
     *
     * @param integer $numcondicioncreditoId
     * @return Entidadesclientes
     */
    public function setNumcondicioncreditoId($numcondicioncreditoId)
    {
        $this->numcondicioncreditoId = $numcondicioncreditoId;

        return $this;
    }

    /**
     * Get numcondicioncreditoId
     *
     * @return integer 
     */
    public function getNumcondicioncreditoId()
    {
        return $this->numcondicioncreditoId;
    }

    /**
     * Set numcondicionconsignacionId
     *
     * @param integer $numcondicionconsignacionId
     * @return Entidadesclientes
     */
    public function setNumcondicionconsignacionId($numcondicionconsignacionId)
    {
        $this->numcondicionconsignacionId = $numcondicionconsignacionId;

        return $this;
    }

    /**
     * Get numcondicionconsignacionId
     *
     * @return integer 
     */
    public function getNumcondicionconsignacionId()
    {
        return $this->numcondicionconsignacionId;
    }

    /**
     * Set numlimitecredito
     *
     * @param integer $numlimitecredito
     * @return Entidadesclientes
     */
    public function setNumlimitecredito($numlimitecredito)
    {
        $this->numlimitecredito = $numlimitecredito;

        return $this;
    }

    /**
     * Get numlimitecredito
     *
     * @return integer 
     */
    public function getNumlimitecredito()
    {
        return $this->numlimitecredito;
    }

    /**
     * Set logcontrolarsaldo
     *
     * @param boolean $logcontrolarsaldo
     * @return Entidadesclientes
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
     * Set numregionimpuestoId
     *
     * @param integer $numregionimpuestoId
     * @return Entidadesclientes
     */
    public function setNumregionimpuestoId($numregionimpuestoId)
    {
        $this->numregionimpuestoId = $numregionimpuestoId;

        return $this;
    }

    /**
     * Get numregionimpuestoId
     *
     * @return integer 
     */
    public function getNumregionimpuestoId()
    {
        return $this->numregionimpuestoId;
    }

    /**
     * Set nummedioenvioId
     *
     * @param integer $nummedioenvioId
     * @return Entidadesclientes
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
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Entidadesclientes
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
     * Set numclientepagadorId
     *
     * @param integer $numclientepagadorId
     * @return Entidadesclientes
     */
    public function setNumclientepagadorId($numclientepagadorId)
    {
        $this->numclientepagadorId = $numclientepagadorId;

        return $this;
    }

    /**
     * Get numclientepagadorId
     *
     * @return integer 
     */
    public function getNumclientepagadorId()
    {
        return $this->numclientepagadorId;
    }

    /**
     * Set strcodigoproveedor
     *
     * @param string $strcodigoproveedor
     * @return Entidadesclientes
     */
    public function setStrcodigoproveedor($strcodigoproveedor)
    {
        $this->strcodigoproveedor = $strcodigoproveedor;

        return $this;
    }

    /**
     * Get strcodigoproveedor
     *
     * @return string 
     */
    public function getStrcodigoproveedor()
    {
        return $this->strcodigoproveedor;
    }

    /**
     * Set numejecutivoId
     *
     * @param integer $numejecutivoId
     * @return Entidadesclientes
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
     * Set numnivelprecio
     *
     * @param integer $numnivelprecio
     * @return Entidadesclientes
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
     * Set numcodigopromocionId
     *
     * @param integer $numcodigopromocionId
     * @return Entidadesclientes
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
     * Set strcodigoacceso
     *
     * @param string $strcodigoacceso
     * @return Entidadesclientes
     */
    public function setStrcodigoacceso($strcodigoacceso)
    {
        $this->strcodigoacceso = $strcodigoacceso;

        return $this;
    }

    /**
     * Get strcodigoacceso
     *
     * @return string 
     */
    public function getStrcodigoacceso()
    {
        return $this->strcodigoacceso;
    }

    /**
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Entidadesclientes
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
     * Set numvendedor1Id
     *
     * @param integer $numvendedor1Id
     * @return Entidadesclientes
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
     * Set numgrupocomisionventa1Id
     *
     * @param integer $numgrupocomisionventa1Id
     * @return Entidadesclientes
     */
    public function setNumgrupocomisionventa1Id($numgrupocomisionventa1Id)
    {
        $this->numgrupocomisionventa1Id = $numgrupocomisionventa1Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa1Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa1Id()
    {
        return $this->numgrupocomisionventa1Id;
    }

    /**
     * Set numvendedor2Id
     *
     * @param integer $numvendedor2Id
     * @return Entidadesclientes
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
     * Set numgrupocomisionventa2Id
     *
     * @param integer $numgrupocomisionventa2Id
     * @return Entidadesclientes
     */
    public function setNumgrupocomisionventa2Id($numgrupocomisionventa2Id)
    {
        $this->numgrupocomisionventa2Id = $numgrupocomisionventa2Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa2Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa2Id()
    {
        return $this->numgrupocomisionventa2Id;
    }

    /**
     * Set numtipodireccionfiscal
     *
     * @param integer $numtipodireccionfiscal
     * @return Entidadesclientes
     */
    public function setNumtipodireccionfiscal($numtipodireccionfiscal)
    {
        $this->numtipodireccionfiscal = $numtipodireccionfiscal;

        return $this;
    }

    /**
     * Get numtipodireccionfiscal
     *
     * @return integer 
     */
    public function getNumtipodireccionfiscal()
    {
        return $this->numtipodireccionfiscal;
    }

    /**
     * Set numtipodireccionenvio
     *
     * @param integer $numtipodireccionenvio
     * @return Entidadesclientes
     */
    public function setNumtipodireccionenvio($numtipodireccionenvio)
    {
        $this->numtipodireccionenvio = $numtipodireccionenvio;

        return $this;
    }

    /**
     * Get numtipodireccionenvio
     *
     * @return integer 
     */
    public function getNumtipodireccionenvio()
    {
        return $this->numtipodireccionenvio;
    }

    /**
     * Set numalmacenvirtualId
     *
     * @param integer $numalmacenvirtualId
     * @return Entidadesclientes
     */
    public function setNumalmacenvirtualId($numalmacenvirtualId)
    {
        $this->numalmacenvirtualId = $numalmacenvirtualId;

        return $this;
    }

    /**
     * Get numalmacenvirtualId
     *
     * @return integer 
     */
    public function getNumalmacenvirtualId()
    {
        return $this->numalmacenvirtualId;
    }

    /**
     * Set numrutacobroId
     *
     * @param integer $numrutacobroId
     * @return Entidadesclientes
     */
    public function setNumrutacobroId($numrutacobroId)
    {
        $this->numrutacobroId = $numrutacobroId;

        return $this;
    }

    /**
     * Get numrutacobroId
     *
     * @return integer 
     */
    public function getNumrutacobroId()
    {
        return $this->numrutacobroId;
    }

    /**
     * Set numregionId
     *
     * @param integer $numregionId
     * @return Entidadesclientes
     */
    public function setNumregionId($numregionId)
    {
        $this->numregionId = $numregionId;

        return $this;
    }

    /**
     * Get numregionId
     *
     * @return integer 
     */
    public function getNumregionId()
    {
        return $this->numregionId;
    }

    /**
     * Set numpublicidadId
     *
     * @param integer $numpublicidadId
     * @return Entidadesclientes
     */
    public function setNumpublicidadId($numpublicidadId)
    {
        $this->numpublicidadId = $numpublicidadId;

        return $this;
    }

    /**
     * Get numpublicidadId
     *
     * @return integer 
     */
    public function getNumpublicidadId()
    {
        return $this->numpublicidadId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Entidadesclientes
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
     * Set strcuentacobrarKy
     *
     * @param string $strcuentacobrarKy
     * @return Entidadesclientes
     */
    public function setStrcuentacobrarKy($strcuentacobrarKy)
    {
        $this->strcuentacobrarKy = $strcuentacobrarKy;

        return $this;
    }

    /**
     * Get strcuentacobrarKy
     *
     * @return string 
     */
    public function getStrcuentacobrarKy()
    {
        return $this->strcuentacobrarKy;
    }

    /**
     * Set strcuentaanticipoclienteKy
     *
     * @param string $strcuentaanticipoclienteKy
     * @return Entidadesclientes
     */
    public function setStrcuentaanticipoclienteKy($strcuentaanticipoclienteKy)
    {
        $this->strcuentaanticipoclienteKy = $strcuentaanticipoclienteKy;

        return $this;
    }

    /**
     * Get strcuentaanticipoclienteKy
     *
     * @return string 
     */
    public function getStrcuentaanticipoclienteKy()
    {
        return $this->strcuentaanticipoclienteKy;
    }

    /**
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Entidadesclientes
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
     * @return Entidadesclientes
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
     * @return Entidadesclientes
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
     * @return Entidadesclientes
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
     * Set memreferenciasventa
     *
     * @param string $memreferenciasventa
     * @return Entidadesclientes
     */
    public function setMemreferenciasventa($memreferenciasventa)
    {
        $this->memreferenciasventa = $memreferenciasventa;

        return $this;
    }

    /**
     * Get memreferenciasventa
     *
     * @return string 
     */
    public function getMemreferenciasventa()
    {
        return $this->memreferenciasventa;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Entidadesclientes
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
     * @return Entidadesclientes
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
     * @return Entidadesclientes
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
     * @return Entidadesclientes
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
     * @return Entidadesclientes
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
     * @return Entidadesclientes
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
     * @return Entidadesclientes
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
     * Set strmetodopago
     *
     * @param string $strmetodopago
     * @return Entidadesclientes
     */
    public function setStrmetodopago($strmetodopago)
    {
        $this->strmetodopago = $strmetodopago;

        return $this;
    }

    /**
     * Get strmetodopago
     *
     * @return string 
     */
    public function getStrmetodopago()
    {
        return $this->strmetodopago;
    }

    /**
     * Set strnumerocuentapago
     *
     * @param string $strnumerocuentapago
     * @return Entidadesclientes
     */
    public function setStrnumerocuentapago($strnumerocuentapago)
    {
        $this->strnumerocuentapago = $strnumerocuentapago;

        return $this;
    }

    /**
     * Get strnumerocuentapago
     *
     * @return string 
     */
    public function getStrnumerocuentapago()
    {
        return $this->strnumerocuentapago;
    }
}
