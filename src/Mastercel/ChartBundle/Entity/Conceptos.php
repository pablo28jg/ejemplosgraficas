<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conceptos
 *
 * @ORM\Table(name="Conceptos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"NumTipoModulo", "StrConcepto_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"StrAbreviacion"}), @ORM\Index(name="Indice_4", columns={"NumTipoMovimientoInventario", "StrDescripcion"}), @ORM\Index(name="Indice_5", columns={"DteActualizacion"}), @ORM\Index(name="Indice_6", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_7", columns={"StrCuentaContable_ky"})})
 * @ORM\Entity
 */
class Conceptos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConcepto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconceptoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrConcepto_ky", type="string", length=10, nullable=true)
     */
    private $strconceptoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAbreviacion", type="string", length=5, nullable=true)
     */
    private $strabreviacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=true)
     */
    private $numtipotransaccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEntidad", type="integer", nullable=true)
     */
    private $numtipoentidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoNaturalezaCuenta", type="integer", nullable=true)
     */
    private $numtiponaturalezacuenta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoNaturalezaBanco", type="integer", nullable=true)
     */
    private $numtiponaturalezabanco = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoMovimientoCuenta", type="integer", nullable=true)
     */
    private $numtipomovimientocuenta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoMovimientoBanco", type="integer", nullable=true)
     */
    private $numtipomovimientobanco = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoMovimientoInventario", type="integer", nullable=true)
     */
    private $numtipomovimientoinventario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAfectacion", type="integer", nullable=true)
     */
    private $numtipoafectacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoControlRegistro", type="integer", nullable=true)
     */
    private $numtipocontrolregistro = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoModulo", type="integer", nullable=true)
     */
    private $numtipomodulo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogMovimientoInterno", type="boolean", nullable=true)
     */
    private $logmovimientointerno = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConceptoGenerar_id", type="integer", nullable=true)
     */
    private $numconceptogenerarId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAfectaCuentaCobrar", type="boolean", nullable=true)
     */
    private $logafectacuentacobrar = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAfectaCuentaPagar", type="boolean", nullable=true)
     */
    private $logafectacuentapagar = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAfectaBanco", type="boolean", nullable=true)
     */
    private $logafectabanco = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAfectaInventario", type="boolean", nullable=true)
     */
    private $logafectainventario = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaContable_ky", type="string", length=20, nullable=true)
     */
    private $strcuentacontableKy;

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
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio_id", type="integer", nullable=true)
     */
    private $numfolioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiario_id", type="integer", nullable=true)
     */
    private $numdiarioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoImpuesto_id", type="integer", nullable=true)
     */
    private $numgrupoimpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDocumento", type="integer", nullable=true)
     */
    private $numtipodocumento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFlujoTrabajo_id", type="integer", nullable=true)
     */
    private $numflujotrabajoId = '0';



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
     * Set strconceptoKy
     *
     * @param string $strconceptoKy
     * @return Conceptos
     */
    public function setStrconceptoKy($strconceptoKy)
    {
        $this->strconceptoKy = $strconceptoKy;

        return $this;
    }

    /**
     * Get strconceptoKy
     *
     * @return string 
     */
    public function getStrconceptoKy()
    {
        return $this->strconceptoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Conceptos
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
     * Set strabreviacion
     *
     * @param string $strabreviacion
     * @return Conceptos
     */
    public function setStrabreviacion($strabreviacion)
    {
        $this->strabreviacion = $strabreviacion;

        return $this;
    }

    /**
     * Get strabreviacion
     *
     * @return string 
     */
    public function getStrabreviacion()
    {
        return $this->strabreviacion;
    }

    /**
     * Set numtipotransaccion
     *
     * @param integer $numtipotransaccion
     * @return Conceptos
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
     * Set numtipoentidad
     *
     * @param integer $numtipoentidad
     * @return Conceptos
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
     * Set numtiponaturalezacuenta
     *
     * @param integer $numtiponaturalezacuenta
     * @return Conceptos
     */
    public function setNumtiponaturalezacuenta($numtiponaturalezacuenta)
    {
        $this->numtiponaturalezacuenta = $numtiponaturalezacuenta;

        return $this;
    }

    /**
     * Get numtiponaturalezacuenta
     *
     * @return integer 
     */
    public function getNumtiponaturalezacuenta()
    {
        return $this->numtiponaturalezacuenta;
    }

    /**
     * Set numtiponaturalezabanco
     *
     * @param integer $numtiponaturalezabanco
     * @return Conceptos
     */
    public function setNumtiponaturalezabanco($numtiponaturalezabanco)
    {
        $this->numtiponaturalezabanco = $numtiponaturalezabanco;

        return $this;
    }

    /**
     * Get numtiponaturalezabanco
     *
     * @return integer 
     */
    public function getNumtiponaturalezabanco()
    {
        return $this->numtiponaturalezabanco;
    }

    /**
     * Set numtipomovimientocuenta
     *
     * @param integer $numtipomovimientocuenta
     * @return Conceptos
     */
    public function setNumtipomovimientocuenta($numtipomovimientocuenta)
    {
        $this->numtipomovimientocuenta = $numtipomovimientocuenta;

        return $this;
    }

    /**
     * Get numtipomovimientocuenta
     *
     * @return integer 
     */
    public function getNumtipomovimientocuenta()
    {
        return $this->numtipomovimientocuenta;
    }

    /**
     * Set numtipomovimientobanco
     *
     * @param integer $numtipomovimientobanco
     * @return Conceptos
     */
    public function setNumtipomovimientobanco($numtipomovimientobanco)
    {
        $this->numtipomovimientobanco = $numtipomovimientobanco;

        return $this;
    }

    /**
     * Get numtipomovimientobanco
     *
     * @return integer 
     */
    public function getNumtipomovimientobanco()
    {
        return $this->numtipomovimientobanco;
    }

    /**
     * Set numtipomovimientoinventario
     *
     * @param integer $numtipomovimientoinventario
     * @return Conceptos
     */
    public function setNumtipomovimientoinventario($numtipomovimientoinventario)
    {
        $this->numtipomovimientoinventario = $numtipomovimientoinventario;

        return $this;
    }

    /**
     * Get numtipomovimientoinventario
     *
     * @return integer 
     */
    public function getNumtipomovimientoinventario()
    {
        return $this->numtipomovimientoinventario;
    }

    /**
     * Set numtipoafectacion
     *
     * @param integer $numtipoafectacion
     * @return Conceptos
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
     * Set numtipocontrolregistro
     *
     * @param integer $numtipocontrolregistro
     * @return Conceptos
     */
    public function setNumtipocontrolregistro($numtipocontrolregistro)
    {
        $this->numtipocontrolregistro = $numtipocontrolregistro;

        return $this;
    }

    /**
     * Get numtipocontrolregistro
     *
     * @return integer 
     */
    public function getNumtipocontrolregistro()
    {
        return $this->numtipocontrolregistro;
    }

    /**
     * Set numtipomodulo
     *
     * @param integer $numtipomodulo
     * @return Conceptos
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
     * Set logmovimientointerno
     *
     * @param boolean $logmovimientointerno
     * @return Conceptos
     */
    public function setLogmovimientointerno($logmovimientointerno)
    {
        $this->logmovimientointerno = $logmovimientointerno;

        return $this;
    }

    /**
     * Get logmovimientointerno
     *
     * @return boolean 
     */
    public function getLogmovimientointerno()
    {
        return $this->logmovimientointerno;
    }

    /**
     * Set numconceptogenerarId
     *
     * @param integer $numconceptogenerarId
     * @return Conceptos
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
     * Set logafectacuentacobrar
     *
     * @param boolean $logafectacuentacobrar
     * @return Conceptos
     */
    public function setLogafectacuentacobrar($logafectacuentacobrar)
    {
        $this->logafectacuentacobrar = $logafectacuentacobrar;

        return $this;
    }

    /**
     * Get logafectacuentacobrar
     *
     * @return boolean 
     */
    public function getLogafectacuentacobrar()
    {
        return $this->logafectacuentacobrar;
    }

    /**
     * Set logafectacuentapagar
     *
     * @param boolean $logafectacuentapagar
     * @return Conceptos
     */
    public function setLogafectacuentapagar($logafectacuentapagar)
    {
        $this->logafectacuentapagar = $logafectacuentapagar;

        return $this;
    }

    /**
     * Get logafectacuentapagar
     *
     * @return boolean 
     */
    public function getLogafectacuentapagar()
    {
        return $this->logafectacuentapagar;
    }

    /**
     * Set logafectabanco
     *
     * @param boolean $logafectabanco
     * @return Conceptos
     */
    public function setLogafectabanco($logafectabanco)
    {
        $this->logafectabanco = $logafectabanco;

        return $this;
    }

    /**
     * Get logafectabanco
     *
     * @return boolean 
     */
    public function getLogafectabanco()
    {
        return $this->logafectabanco;
    }

    /**
     * Set logafectainventario
     *
     * @param boolean $logafectainventario
     * @return Conceptos
     */
    public function setLogafectainventario($logafectainventario)
    {
        $this->logafectainventario = $logafectainventario;

        return $this;
    }

    /**
     * Get logafectainventario
     *
     * @return boolean 
     */
    public function getLogafectainventario()
    {
        return $this->logafectainventario;
    }

    /**
     * Set strcuentacontableKy
     *
     * @param string $strcuentacontableKy
     * @return Conceptos
     */
    public function setStrcuentacontableKy($strcuentacontableKy)
    {
        $this->strcuentacontableKy = $strcuentacontableKy;

        return $this;
    }

    /**
     * Get strcuentacontableKy
     *
     * @return string 
     */
    public function getStrcuentacontableKy()
    {
        return $this->strcuentacontableKy;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Conceptos
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
     * @return Conceptos
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
     * @return Conceptos
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
     * @return Conceptos
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
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Conceptos
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
     * Set numfolioId
     *
     * @param integer $numfolioId
     * @return Conceptos
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
     * Set numdiarioId
     *
     * @param integer $numdiarioId
     * @return Conceptos
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
     * Set numgrupoimpuestoId
     *
     * @param integer $numgrupoimpuestoId
     * @return Conceptos
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
     * Set numtipodocumento
     *
     * @param integer $numtipodocumento
     * @return Conceptos
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
     * Set numflujotrabajoId
     *
     * @param integer $numflujotrabajoId
     * @return Conceptos
     */
    public function setNumflujotrabajoId($numflujotrabajoId)
    {
        $this->numflujotrabajoId = $numflujotrabajoId;

        return $this;
    }

    /**
     * Get numflujotrabajoId
     *
     * @return integer 
     */
    public function getNumflujotrabajoId()
    {
        return $this->numflujotrabajoId;
    }
}
