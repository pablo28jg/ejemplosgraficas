<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadesproveedores
 *
 * @ORM\Table(name="EntidadesProveedores", indexes={@ORM\Index(name="Indice_1", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"StrCodigoCliente"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_6", columns={"StrCuentaPagar_ky"}), @ORM\Index(name="Indice_7", columns={"StrCuentaAnticipoProveedor_ky"}), @ORM\Index(name="Indice_8", columns={"NumEjecutivo_id"})})
 * @ORM\Entity
 */
class Entidadesproveedores
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
     * @ORM\Column(name="NumContactoVentas_id", type="integer", nullable=true)
     */
    private $numcontactoventasId = '0';

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
     * @ORM\Column(name="NumProveedorPagador_id", type="integer", nullable=true)
     */
    private $numproveedorpagadorId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoCliente", type="string", length=20, nullable=true)
     */
    private $strcodigocliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjecutivo_id", type="integer", nullable=true)
     */
    private $numejecutivoId = '0';

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
     * @var string
     *
     * @ORM\Column(name="StrCuentaPagar_ky", type="string", length=20, nullable=true)
     */
    private $strcuentapagarKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaAnticipoProveedor_ky", type="string", length=20, nullable=true)
     */
    private $strcuentaanticipoproveedorKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTipoTercero", type="string", length=2, nullable=true)
     */
    private $strtipotercero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTipoOperacion", type="string", length=2, nullable=true)
     */
    private $strtipooperacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNacionalidad", type="string", length=40, nullable=true)
     */
    private $strnacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="StrIdFiscal", type="string", length=40, nullable=true)
     */
    private $stridfiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreExtranjero", type="string", length=43, nullable=true)
     */
    private $strnombreextranjero;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPaisResidencia", type="string", length=2, nullable=true)
     */
    private $strpaisresidencia;

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
     * @var integer
     *
     * @ORM\Column(name="NumTipoFormaPago", type="integer", nullable=true)
     */
    private $numtipoformapago = '0';



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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * Set numcontactoventasId
     *
     * @param integer $numcontactoventasId
     * @return Entidadesproveedores
     */
    public function setNumcontactoventasId($numcontactoventasId)
    {
        $this->numcontactoventasId = $numcontactoventasId;

        return $this;
    }

    /**
     * Get numcontactoventasId
     *
     * @return integer 
     */
    public function getNumcontactoventasId()
    {
        return $this->numcontactoventasId;
    }

    /**
     * Set numcontactopagosId
     *
     * @param integer $numcontactopagosId
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * Set numproveedorpagadorId
     *
     * @param integer $numproveedorpagadorId
     * @return Entidadesproveedores
     */
    public function setNumproveedorpagadorId($numproveedorpagadorId)
    {
        $this->numproveedorpagadorId = $numproveedorpagadorId;

        return $this;
    }

    /**
     * Get numproveedorpagadorId
     *
     * @return integer 
     */
    public function getNumproveedorpagadorId()
    {
        return $this->numproveedorpagadorId;
    }

    /**
     * Set strcodigocliente
     *
     * @param string $strcodigocliente
     * @return Entidadesproveedores
     */
    public function setStrcodigocliente($strcodigocliente)
    {
        $this->strcodigocliente = $strcodigocliente;

        return $this;
    }

    /**
     * Get strcodigocliente
     *
     * @return string 
     */
    public function getStrcodigocliente()
    {
        return $this->strcodigocliente;
    }

    /**
     * Set numejecutivoId
     *
     * @param integer $numejecutivoId
     * @return Entidadesproveedores
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
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * Set strcuentapagarKy
     *
     * @param string $strcuentapagarKy
     * @return Entidadesproveedores
     */
    public function setStrcuentapagarKy($strcuentapagarKy)
    {
        $this->strcuentapagarKy = $strcuentapagarKy;

        return $this;
    }

    /**
     * Get strcuentapagarKy
     *
     * @return string 
     */
    public function getStrcuentapagarKy()
    {
        return $this->strcuentapagarKy;
    }

    /**
     * Set strcuentaanticipoproveedorKy
     *
     * @param string $strcuentaanticipoproveedorKy
     * @return Entidadesproveedores
     */
    public function setStrcuentaanticipoproveedorKy($strcuentaanticipoproveedorKy)
    {
        $this->strcuentaanticipoproveedorKy = $strcuentaanticipoproveedorKy;

        return $this;
    }

    /**
     * Get strcuentaanticipoproveedorKy
     *
     * @return string 
     */
    public function getStrcuentaanticipoproveedorKy()
    {
        return $this->strcuentaanticipoproveedorKy;
    }

    /**
     * Set strtipotercero
     *
     * @param string $strtipotercero
     * @return Entidadesproveedores
     */
    public function setStrtipotercero($strtipotercero)
    {
        $this->strtipotercero = $strtipotercero;

        return $this;
    }

    /**
     * Get strtipotercero
     *
     * @return string 
     */
    public function getStrtipotercero()
    {
        return $this->strtipotercero;
    }

    /**
     * Set strtipooperacion
     *
     * @param string $strtipooperacion
     * @return Entidadesproveedores
     */
    public function setStrtipooperacion($strtipooperacion)
    {
        $this->strtipooperacion = $strtipooperacion;

        return $this;
    }

    /**
     * Get strtipooperacion
     *
     * @return string 
     */
    public function getStrtipooperacion()
    {
        return $this->strtipooperacion;
    }

    /**
     * Set strnacionalidad
     *
     * @param string $strnacionalidad
     * @return Entidadesproveedores
     */
    public function setStrnacionalidad($strnacionalidad)
    {
        $this->strnacionalidad = $strnacionalidad;

        return $this;
    }

    /**
     * Get strnacionalidad
     *
     * @return string 
     */
    public function getStrnacionalidad()
    {
        return $this->strnacionalidad;
    }

    /**
     * Set stridfiscal
     *
     * @param string $stridfiscal
     * @return Entidadesproveedores
     */
    public function setStridfiscal($stridfiscal)
    {
        $this->stridfiscal = $stridfiscal;

        return $this;
    }

    /**
     * Get stridfiscal
     *
     * @return string 
     */
    public function getStridfiscal()
    {
        return $this->stridfiscal;
    }

    /**
     * Set strnombreextranjero
     *
     * @param string $strnombreextranjero
     * @return Entidadesproveedores
     */
    public function setStrnombreextranjero($strnombreextranjero)
    {
        $this->strnombreextranjero = $strnombreextranjero;

        return $this;
    }

    /**
     * Get strnombreextranjero
     *
     * @return string 
     */
    public function getStrnombreextranjero()
    {
        return $this->strnombreextranjero;
    }

    /**
     * Set strpaisresidencia
     *
     * @param string $strpaisresidencia
     * @return Entidadesproveedores
     */
    public function setStrpaisresidencia($strpaisresidencia)
    {
        $this->strpaisresidencia = $strpaisresidencia;

        return $this;
    }

    /**
     * Get strpaisresidencia
     *
     * @return string 
     */
    public function getStrpaisresidencia()
    {
        return $this->strpaisresidencia;
    }

    /**
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * @return Entidadesproveedores
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
     * Set numtipoformapago
     *
     * @param integer $numtipoformapago
     * @return Entidadesproveedores
     */
    public function setNumtipoformapago($numtipoformapago)
    {
        $this->numtipoformapago = $numtipoformapago;

        return $this;
    }

    /**
     * Get numtipoformapago
     *
     * @return integer 
     */
    public function getNumtipoformapago()
    {
        return $this->numtipoformapago;
    }
}
