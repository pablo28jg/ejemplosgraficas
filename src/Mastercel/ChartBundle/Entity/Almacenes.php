<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Almacenes
 *
 * @ORM\Table(name="Almacenes", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrAlmacen_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrNombre"}), @ORM\Index(name="Indice_3", columns={"NumCategoria_id"}), @ORM\Index(name="Indice_4", columns={"StrAbreviacion"}), @ORM\Index(name="Indice_5", columns={"DteActualizacion"}), @ORM\Index(name="Indice_6", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_7", columns={"NumEmpresa_id"})})
 * @ORM\Entity
 */
class Almacenes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numalmacenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAlmacen_ky", type="string", length=10, nullable=true)
     */
    private $stralmacenKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=100, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAbreviacion", type="string", length=5, nullable=true)
     */
    private $strabreviacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=true)
     */
    private $numcategoriaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrUbicacion", type="string", length=50, nullable=true)
     */
    private $strubicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDireccion_id", type="integer", nullable=true)
     */
    private $numdireccionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_1", type="string", length=30, nullable=true)
     */
    private $strtelefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_2", type="string", length=30, nullable=true)
     */
    private $strtelefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_3", type="string", length=30, nullable=true)
     */
    private $strtelefono3;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_4", type="string", length=30, nullable=true)
     */
    private $strtelefono4;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_5", type="string", length=30, nullable=true)
     */
    private $strtelefono5;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_6", type="string", length=30, nullable=true)
     */
    private $strtelefono6;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_7", type="string", length=30, nullable=true)
     */
    private $strtelefono7;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_8", type="string", length=30, nullable=true)
     */
    private $strtelefono8;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_9", type="string", length=30, nullable=true)
     */
    private $strtelefono9;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_10", type="string", length=30, nullable=true)
     */
    private $strtelefono10;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_11", type="string", length=30, nullable=true)
     */
    private $strtelefono11;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_12", type="string", length=30, nullable=true)
     */
    private $strtelefono12;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono_13", type="string", length=30, nullable=true)
     */
    private $strtelefono13;

    /**
     * @var string
     *
     * @ORM\Column(name="StrRFC", type="string", length=15, nullable=true)
     */
    private $strrfc;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenTransito_id", type="integer", nullable=true)
     */
    private $numalmacentransitoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenComision_id", type="integer", nullable=true)
     */
    private $numalmacencomisionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComision_id", type="integer", nullable=true)
     */
    private $numgrupocomisionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseSurtido_id", type="integer", nullable=true)
     */
    private $numclasesurtidoId = '0';

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
     * @ORM\Column(name="NumGrupoComisionVenta_5_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_6_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa6Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelPrecio", type="integer", nullable=true)
     */
    private $numnivelprecio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRegionImpuesto_id", type="integer", nullable=true)
     */
    private $numregionimpuestoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelComunicaciones", type="integer", nullable=true)
     */
    private $numnivelcomunicaciones = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTraspaso", type="integer", nullable=true)
     */
    private $numtipotraspaso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasEnvio", type="integer", nullable=true)
     */
    private $numdiasenvio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMedioEnvio_id", type="integer", nullable=true)
     */
    private $nummedioenvioId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogControlarInventario", type="boolean", nullable=true)
     */
    private $logcontrolarinventario = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteUltimaTomaInventario", type="datetime", nullable=true)
     */
    private $dteultimatomainventario;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCertificadoDigital_id", type="integer", nullable=true)
     */
    private $numcertificadodigitalId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogComprobanteFiscalDigital", type="boolean", nullable=true)
     */
    private $logcomprobantefiscaldigital = '0';

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
     * @var string
     *
     * @ORM\Column(name="StrCodigoAcceso", type="string", length=60, nullable=true)
     */
    private $strcodigoacceso;

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
     * @ORM\Column(name="NumCuentaBancariaCaja_id", type="integer", nullable=true)
     */
    private $numcuentabancariacajaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaBancariaDeposito_id", type="integer", nullable=true)
     */
    private $numcuentabancariadepositoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumServicioExpedicion_id", type="integer", nullable=true)
     */
    private $numservicioexpedicionId = '0';



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
     * Set stralmacenKy
     *
     * @param string $stralmacenKy
     * @return Almacenes
     */
    public function setStralmacenKy($stralmacenKy)
    {
        $this->stralmacenKy = $stralmacenKy;

        return $this;
    }

    /**
     * Get stralmacenKy
     *
     * @return string 
     */
    public function getStralmacenKy()
    {
        return $this->stralmacenKy;
    }

    /**
     * Set strnombre
     *
     * @param string $strnombre
     * @return Almacenes
     */
    public function setStrnombre($strnombre)
    {
        $this->strnombre = $strnombre;

        return $this;
    }

    /**
     * Get strnombre
     *
     * @return string 
     */
    public function getStrnombre()
    {
        return $this->strnombre;
    }

    /**
     * Set strabreviacion
     *
     * @param string $strabreviacion
     * @return Almacenes
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
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Almacenes
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
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Almacenes
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
     * Set strubicacion
     *
     * @param string $strubicacion
     * @return Almacenes
     */
    public function setStrubicacion($strubicacion)
    {
        $this->strubicacion = $strubicacion;

        return $this;
    }

    /**
     * Get strubicacion
     *
     * @return string 
     */
    public function getStrubicacion()
    {
        return $this->strubicacion;
    }

    /**
     * Set numdireccionId
     *
     * @param integer $numdireccionId
     * @return Almacenes
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
     * Set strtelefono1
     *
     * @param string $strtelefono1
     * @return Almacenes
     */
    public function setStrtelefono1($strtelefono1)
    {
        $this->strtelefono1 = $strtelefono1;

        return $this;
    }

    /**
     * Get strtelefono1
     *
     * @return string 
     */
    public function getStrtelefono1()
    {
        return $this->strtelefono1;
    }

    /**
     * Set strtelefono2
     *
     * @param string $strtelefono2
     * @return Almacenes
     */
    public function setStrtelefono2($strtelefono2)
    {
        $this->strtelefono2 = $strtelefono2;

        return $this;
    }

    /**
     * Get strtelefono2
     *
     * @return string 
     */
    public function getStrtelefono2()
    {
        return $this->strtelefono2;
    }

    /**
     * Set strtelefono3
     *
     * @param string $strtelefono3
     * @return Almacenes
     */
    public function setStrtelefono3($strtelefono3)
    {
        $this->strtelefono3 = $strtelefono3;

        return $this;
    }

    /**
     * Get strtelefono3
     *
     * @return string 
     */
    public function getStrtelefono3()
    {
        return $this->strtelefono3;
    }

    /**
     * Set strtelefono4
     *
     * @param string $strtelefono4
     * @return Almacenes
     */
    public function setStrtelefono4($strtelefono4)
    {
        $this->strtelefono4 = $strtelefono4;

        return $this;
    }

    /**
     * Get strtelefono4
     *
     * @return string 
     */
    public function getStrtelefono4()
    {
        return $this->strtelefono4;
    }

    /**
     * Set strtelefono5
     *
     * @param string $strtelefono5
     * @return Almacenes
     */
    public function setStrtelefono5($strtelefono5)
    {
        $this->strtelefono5 = $strtelefono5;

        return $this;
    }

    /**
     * Get strtelefono5
     *
     * @return string 
     */
    public function getStrtelefono5()
    {
        return $this->strtelefono5;
    }

    /**
     * Set strtelefono6
     *
     * @param string $strtelefono6
     * @return Almacenes
     */
    public function setStrtelefono6($strtelefono6)
    {
        $this->strtelefono6 = $strtelefono6;

        return $this;
    }

    /**
     * Get strtelefono6
     *
     * @return string 
     */
    public function getStrtelefono6()
    {
        return $this->strtelefono6;
    }

    /**
     * Set strtelefono7
     *
     * @param string $strtelefono7
     * @return Almacenes
     */
    public function setStrtelefono7($strtelefono7)
    {
        $this->strtelefono7 = $strtelefono7;

        return $this;
    }

    /**
     * Get strtelefono7
     *
     * @return string 
     */
    public function getStrtelefono7()
    {
        return $this->strtelefono7;
    }

    /**
     * Set strtelefono8
     *
     * @param string $strtelefono8
     * @return Almacenes
     */
    public function setStrtelefono8($strtelefono8)
    {
        $this->strtelefono8 = $strtelefono8;

        return $this;
    }

    /**
     * Get strtelefono8
     *
     * @return string 
     */
    public function getStrtelefono8()
    {
        return $this->strtelefono8;
    }

    /**
     * Set strtelefono9
     *
     * @param string $strtelefono9
     * @return Almacenes
     */
    public function setStrtelefono9($strtelefono9)
    {
        $this->strtelefono9 = $strtelefono9;

        return $this;
    }

    /**
     * Get strtelefono9
     *
     * @return string 
     */
    public function getStrtelefono9()
    {
        return $this->strtelefono9;
    }

    /**
     * Set strtelefono10
     *
     * @param string $strtelefono10
     * @return Almacenes
     */
    public function setStrtelefono10($strtelefono10)
    {
        $this->strtelefono10 = $strtelefono10;

        return $this;
    }

    /**
     * Get strtelefono10
     *
     * @return string 
     */
    public function getStrtelefono10()
    {
        return $this->strtelefono10;
    }

    /**
     * Set strtelefono11
     *
     * @param string $strtelefono11
     * @return Almacenes
     */
    public function setStrtelefono11($strtelefono11)
    {
        $this->strtelefono11 = $strtelefono11;

        return $this;
    }

    /**
     * Get strtelefono11
     *
     * @return string 
     */
    public function getStrtelefono11()
    {
        return $this->strtelefono11;
    }

    /**
     * Set strtelefono12
     *
     * @param string $strtelefono12
     * @return Almacenes
     */
    public function setStrtelefono12($strtelefono12)
    {
        $this->strtelefono12 = $strtelefono12;

        return $this;
    }

    /**
     * Get strtelefono12
     *
     * @return string 
     */
    public function getStrtelefono12()
    {
        return $this->strtelefono12;
    }

    /**
     * Set strtelefono13
     *
     * @param string $strtelefono13
     * @return Almacenes
     */
    public function setStrtelefono13($strtelefono13)
    {
        $this->strtelefono13 = $strtelefono13;

        return $this;
    }

    /**
     * Get strtelefono13
     *
     * @return string 
     */
    public function getStrtelefono13()
    {
        return $this->strtelefono13;
    }

    /**
     * Set strrfc
     *
     * @param string $strrfc
     * @return Almacenes
     */
    public function setStrrfc($strrfc)
    {
        $this->strrfc = $strrfc;

        return $this;
    }

    /**
     * Get strrfc
     *
     * @return string 
     */
    public function getStrrfc()
    {
        return $this->strrfc;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Almacenes
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
     * Set numalmacentransitoId
     *
     * @param integer $numalmacentransitoId
     * @return Almacenes
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
     * Set numalmacencomisionId
     *
     * @param integer $numalmacencomisionId
     * @return Almacenes
     */
    public function setNumalmacencomisionId($numalmacencomisionId)
    {
        $this->numalmacencomisionId = $numalmacencomisionId;

        return $this;
    }

    /**
     * Get numalmacencomisionId
     *
     * @return integer 
     */
    public function getNumalmacencomisionId()
    {
        return $this->numalmacencomisionId;
    }

    /**
     * Set numgrupocomisionId
     *
     * @param integer $numgrupocomisionId
     * @return Almacenes
     */
    public function setNumgrupocomisionId($numgrupocomisionId)
    {
        $this->numgrupocomisionId = $numgrupocomisionId;

        return $this;
    }

    /**
     * Get numgrupocomisionId
     *
     * @return integer 
     */
    public function getNumgrupocomisionId()
    {
        return $this->numgrupocomisionId;
    }

    /**
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Almacenes
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
     * Set numclasesurtidoId
     *
     * @param integer $numclasesurtidoId
     * @return Almacenes
     */
    public function setNumclasesurtidoId($numclasesurtidoId)
    {
        $this->numclasesurtidoId = $numclasesurtidoId;

        return $this;
    }

    /**
     * Get numclasesurtidoId
     *
     * @return integer 
     */
    public function getNumclasesurtidoId()
    {
        return $this->numclasesurtidoId;
    }

    /**
     * Set numvendedor5Id
     *
     * @param integer $numvendedor5Id
     * @return Almacenes
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
     * @return Almacenes
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
     * Set numgrupocomisionventa5Id
     *
     * @param integer $numgrupocomisionventa5Id
     * @return Almacenes
     */
    public function setNumgrupocomisionventa5Id($numgrupocomisionventa5Id)
    {
        $this->numgrupocomisionventa5Id = $numgrupocomisionventa5Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa5Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa5Id()
    {
        return $this->numgrupocomisionventa5Id;
    }

    /**
     * Set numgrupocomisionventa6Id
     *
     * @param integer $numgrupocomisionventa6Id
     * @return Almacenes
     */
    public function setNumgrupocomisionventa6Id($numgrupocomisionventa6Id)
    {
        $this->numgrupocomisionventa6Id = $numgrupocomisionventa6Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa6Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa6Id()
    {
        return $this->numgrupocomisionventa6Id;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Almacenes
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
     * Set numnivelprecio
     *
     * @param integer $numnivelprecio
     * @return Almacenes
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
     * Set numregionimpuestoId
     *
     * @param integer $numregionimpuestoId
     * @return Almacenes
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
     * Set numnivelcomunicaciones
     *
     * @param integer $numnivelcomunicaciones
     * @return Almacenes
     */
    public function setNumnivelcomunicaciones($numnivelcomunicaciones)
    {
        $this->numnivelcomunicaciones = $numnivelcomunicaciones;

        return $this;
    }

    /**
     * Get numnivelcomunicaciones
     *
     * @return integer 
     */
    public function getNumnivelcomunicaciones()
    {
        return $this->numnivelcomunicaciones;
    }

    /**
     * Set numtipotraspaso
     *
     * @param integer $numtipotraspaso
     * @return Almacenes
     */
    public function setNumtipotraspaso($numtipotraspaso)
    {
        $this->numtipotraspaso = $numtipotraspaso;

        return $this;
    }

    /**
     * Get numtipotraspaso
     *
     * @return integer 
     */
    public function getNumtipotraspaso()
    {
        return $this->numtipotraspaso;
    }

    /**
     * Set numdiasenvio
     *
     * @param integer $numdiasenvio
     * @return Almacenes
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
     * Set nummedioenvioId
     *
     * @param integer $nummedioenvioId
     * @return Almacenes
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
     * Set logcontrolarinventario
     *
     * @param boolean $logcontrolarinventario
     * @return Almacenes
     */
    public function setLogcontrolarinventario($logcontrolarinventario)
    {
        $this->logcontrolarinventario = $logcontrolarinventario;

        return $this;
    }

    /**
     * Get logcontrolarinventario
     *
     * @return boolean 
     */
    public function getLogcontrolarinventario()
    {
        return $this->logcontrolarinventario;
    }

    /**
     * Set dteultimatomainventario
     *
     * @param \DateTime $dteultimatomainventario
     * @return Almacenes
     */
    public function setDteultimatomainventario($dteultimatomainventario)
    {
        $this->dteultimatomainventario = $dteultimatomainventario;

        return $this;
    }

    /**
     * Get dteultimatomainventario
     *
     * @return \DateTime 
     */
    public function getDteultimatomainventario()
    {
        return $this->dteultimatomainventario;
    }

    /**
     * Set numcertificadodigitalId
     *
     * @param integer $numcertificadodigitalId
     * @return Almacenes
     */
    public function setNumcertificadodigitalId($numcertificadodigitalId)
    {
        $this->numcertificadodigitalId = $numcertificadodigitalId;

        return $this;
    }

    /**
     * Get numcertificadodigitalId
     *
     * @return integer 
     */
    public function getNumcertificadodigitalId()
    {
        return $this->numcertificadodigitalId;
    }

    /**
     * Set logcomprobantefiscaldigital
     *
     * @param boolean $logcomprobantefiscaldigital
     * @return Almacenes
     */
    public function setLogcomprobantefiscaldigital($logcomprobantefiscaldigital)
    {
        $this->logcomprobantefiscaldigital = $logcomprobantefiscaldigital;

        return $this;
    }

    /**
     * Get logcomprobantefiscaldigital
     *
     * @return boolean 
     */
    public function getLogcomprobantefiscaldigital()
    {
        return $this->logcomprobantefiscaldigital;
    }

    /**
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Almacenes
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
     * @return Almacenes
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
     * @return Almacenes
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
     * @return Almacenes
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
     * @return Almacenes
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
     * Set strcodigoacceso
     *
     * @param string $strcodigoacceso
     * @return Almacenes
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Almacenes
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
     * @return Almacenes
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
     * @return Almacenes
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
     * @return Almacenes
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
     * @return Almacenes
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
     * @return Almacenes
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
     * Set numcuentabancariacajaId
     *
     * @param integer $numcuentabancariacajaId
     * @return Almacenes
     */
    public function setNumcuentabancariacajaId($numcuentabancariacajaId)
    {
        $this->numcuentabancariacajaId = $numcuentabancariacajaId;

        return $this;
    }

    /**
     * Get numcuentabancariacajaId
     *
     * @return integer 
     */
    public function getNumcuentabancariacajaId()
    {
        return $this->numcuentabancariacajaId;
    }

    /**
     * Set numcuentabancariadepositoId
     *
     * @param integer $numcuentabancariadepositoId
     * @return Almacenes
     */
    public function setNumcuentabancariadepositoId($numcuentabancariadepositoId)
    {
        $this->numcuentabancariadepositoId = $numcuentabancariadepositoId;

        return $this;
    }

    /**
     * Get numcuentabancariadepositoId
     *
     * @return integer 
     */
    public function getNumcuentabancariadepositoId()
    {
        return $this->numcuentabancariadepositoId;
    }

    /**
     * Set numservicioexpedicionId
     *
     * @param integer $numservicioexpedicionId
     * @return Almacenes
     */
    public function setNumservicioexpedicionId($numservicioexpedicionId)
    {
        $this->numservicioexpedicionId = $numservicioexpedicionId;

        return $this;
    }

    /**
     * Get numservicioexpedicionId
     *
     * @return integer 
     */
    public function getNumservicioexpedicionId()
    {
        return $this->numservicioexpedicionId;
    }
}
