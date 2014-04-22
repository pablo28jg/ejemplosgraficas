<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidades
 *
 * @ORM\Table(name="Entidades", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrEntidad_ky"})}, indexes={@ORM\Index(name="Indice_10", columns={"StrRFC"}), @ORM\Index(name="Indice_11", columns={"StrCURP"}), @ORM\Index(name="Indice_12", columns={"NumEsUsuario"}), @ORM\Index(name="Indice_2", columns={"StrNombre"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_5", columns={"NumTipoSexo"}), @ORM\Index(name="Indice_6", columns={"DteNacimiento"}), @ORM\Index(name="Indice_7", columns={"NumTipoRegistro"}), @ORM\Index(name="Indice_8", columns={"NumCliente_id"}), @ORM\Index(name="Indice_9", columns={"NumProveedor_id"}), @ORM\Index(name="Indice_13", columns={"NumEsProveedor"}), @ORM\Index(name="Indice_14", columns={"NumEsCliente"}), @ORM\Index(name="Indice_15", columns={"NumEsContacto"}), @ORM\Index(name="Indice_16", columns={"NumEsVendedor"}), @ORM\Index(name="Indice_17", columns={"NumEsEmpleado"})})
 * @ORM\Entity
 */
class Entidades
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
     * @var string
     *
     * @ORM\Column(name="StrEntidad_ky", type="string", length=20, nullable=true)
     */
    private $strentidadKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPersona", type="integer", nullable=true)
     */
    private $numtipopersona = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=110, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPrimerNombre", type="string", length=30, nullable=true)
     */
    private $strprimernombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSegundoNombre", type="string", length=30, nullable=true)
     */
    private $strsegundonombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrApellidoPaterno", type="string", length=30, nullable=true)
     */
    private $strapellidopaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="StrApellidoMaterno", type="string", length=30, nullable=true)
     */
    private $strapellidomaterno;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoSexo", type="integer", nullable=true)
     */
    private $numtiposexo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteNacimiento", type="datetime", nullable=true)
     */
    private $dtenacimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTratamiento_id", type="integer", nullable=true)
     */
    private $numtratamientoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrContacto", type="string", length=110, nullable=true)
     */
    private $strcontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPuesto", type="string", length=60, nullable=true)
     */
    private $strpuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDepartamento", type="string", length=60, nullable=true)
     */
    private $strdepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="StrRFC", type="string", length=15, nullable=true)
     */
    private $strrfc;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCURP", type="string", length=20, nullable=true)
     */
    private $strcurp;

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
     * @ORM\Column(name="StrPaginaElectronica", type="string", length=60, nullable=true)
     */
    private $strpaginaelectronica;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCorreoElectronico_1", type="string", length=60, nullable=true)
     */
    private $strcorreoelectronico1;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCorreoElectronico_2", type="string", length=60, nullable=true)
     */
    private $strcorreoelectronico2;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCorreoElectronico_3", type="string", length=60, nullable=true)
     */
    private $strcorreoelectronico3;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPerfil_id", type="integer", nullable=true)
     */
    private $numperfilId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLenguaje_id", type="integer", nullable=true)
     */
    private $numlenguajeId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasContrasena", type="integer", nullable=true)
     */
    private $numdiascontrasena = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteVencimiento", type="datetime", nullable=true)
     */
    private $dtevencimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContrasenaAcceso", type="integer", nullable=true)
     */
    private $numcontrasenaacceso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContrasenaPerfil", type="integer", nullable=true)
     */
    private $numcontrasenaperfil = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoRegistro", type="integer", nullable=true)
     */
    private $numtiporegistro = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCliente_id", type="integer", nullable=true)
     */
    private $numclienteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTipoEntidades", type="string", length=10, nullable=true)
     */
    private $strtipoentidades;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEsUsuario", type="smallint", nullable=true)
     */
    private $numesusuario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEsProveedor", type="smallint", nullable=true)
     */
    private $numesproveedor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEsCliente", type="smallint", nullable=true)
     */
    private $numescliente = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEsContacto", type="smallint", nullable=true)
     */
    private $numescontacto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEsVendedor", type="smallint", nullable=true)
     */
    private $numesvendedor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEsEmpleado", type="smallint", nullable=true)
     */
    private $numesempleado = '0';

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
     * @ORM\Column(name="NumDireccionCorrespondencia_id", type="integer", nullable=true)
     */
    private $numdireccioncorrespondenciaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_1", type="string", length=60, nullable=true)
     */
    private $strdiashorarios1;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_2", type="string", length=60, nullable=true)
     */
    private $strdiashorarios2;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_3", type="string", length=60, nullable=true)
     */
    private $strdiashorarios3;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_4", type="string", length=60, nullable=true)
     */
    private $strdiashorarios4;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_5", type="string", length=60, nullable=true)
     */
    private $strdiashorarios5;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_6", type="string", length=60, nullable=true)
     */
    private $strdiashorarios6;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_7", type="string", length=60, nullable=true)
     */
    private $strdiashorarios7;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_8", type="string", length=60, nullable=true)
     */
    private $strdiashorarios8;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_9", type="string", length=60, nullable=true)
     */
    private $strdiashorarios9;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_10", type="string", length=60, nullable=true)
     */
    private $strdiashorarios10;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_11", type="string", length=60, nullable=true)
     */
    private $strdiashorarios11;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_12", type="string", length=60, nullable=true)
     */
    private $strdiashorarios12;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiasHorarios_13", type="string", length=60, nullable=true)
     */
    private $strdiashorarios13;

    /**
     * @var string
     *
     * @ORM\Column(name="StrProfesion", type="string", length=60, nullable=true)
     */
    private $strprofesion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrOcupacion", type="string", length=60, nullable=true)
     */
    private $strocupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoIdentificacion", type="integer", nullable=true)
     */
    private $numtipoidentificacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrIdentificacion", type="string", length=30, nullable=true)
     */
    private $stridentificacion;



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
     * Set strentidadKy
     *
     * @param string $strentidadKy
     * @return Entidades
     */
    public function setStrentidadKy($strentidadKy)
    {
        $this->strentidadKy = $strentidadKy;

        return $this;
    }

    /**
     * Get strentidadKy
     *
     * @return string 
     */
    public function getStrentidadKy()
    {
        return $this->strentidadKy;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Entidades
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
     * Set numtipopersona
     *
     * @param integer $numtipopersona
     * @return Entidades
     */
    public function setNumtipopersona($numtipopersona)
    {
        $this->numtipopersona = $numtipopersona;

        return $this;
    }

    /**
     * Get numtipopersona
     *
     * @return integer 
     */
    public function getNumtipopersona()
    {
        return $this->numtipopersona;
    }

    /**
     * Set strnombre
     *
     * @param string $strnombre
     * @return Entidades
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
     * Set strprimernombre
     *
     * @param string $strprimernombre
     * @return Entidades
     */
    public function setStrprimernombre($strprimernombre)
    {
        $this->strprimernombre = $strprimernombre;

        return $this;
    }

    /**
     * Get strprimernombre
     *
     * @return string 
     */
    public function getStrprimernombre()
    {
        return $this->strprimernombre;
    }

    /**
     * Set strsegundonombre
     *
     * @param string $strsegundonombre
     * @return Entidades
     */
    public function setStrsegundonombre($strsegundonombre)
    {
        $this->strsegundonombre = $strsegundonombre;

        return $this;
    }

    /**
     * Get strsegundonombre
     *
     * @return string 
     */
    public function getStrsegundonombre()
    {
        return $this->strsegundonombre;
    }

    /**
     * Set strapellidopaterno
     *
     * @param string $strapellidopaterno
     * @return Entidades
     */
    public function setStrapellidopaterno($strapellidopaterno)
    {
        $this->strapellidopaterno = $strapellidopaterno;

        return $this;
    }

    /**
     * Get strapellidopaterno
     *
     * @return string 
     */
    public function getStrapellidopaterno()
    {
        return $this->strapellidopaterno;
    }

    /**
     * Set strapellidomaterno
     *
     * @param string $strapellidomaterno
     * @return Entidades
     */
    public function setStrapellidomaterno($strapellidomaterno)
    {
        $this->strapellidomaterno = $strapellidomaterno;

        return $this;
    }

    /**
     * Get strapellidomaterno
     *
     * @return string 
     */
    public function getStrapellidomaterno()
    {
        return $this->strapellidomaterno;
    }

    /**
     * Set numtiposexo
     *
     * @param integer $numtiposexo
     * @return Entidades
     */
    public function setNumtiposexo($numtiposexo)
    {
        $this->numtiposexo = $numtiposexo;

        return $this;
    }

    /**
     * Get numtiposexo
     *
     * @return integer 
     */
    public function getNumtiposexo()
    {
        return $this->numtiposexo;
    }

    /**
     * Set dtenacimiento
     *
     * @param \DateTime $dtenacimiento
     * @return Entidades
     */
    public function setDtenacimiento($dtenacimiento)
    {
        $this->dtenacimiento = $dtenacimiento;

        return $this;
    }

    /**
     * Get dtenacimiento
     *
     * @return \DateTime 
     */
    public function getDtenacimiento()
    {
        return $this->dtenacimiento;
    }

    /**
     * Set numtratamientoId
     *
     * @param integer $numtratamientoId
     * @return Entidades
     */
    public function setNumtratamientoId($numtratamientoId)
    {
        $this->numtratamientoId = $numtratamientoId;

        return $this;
    }

    /**
     * Get numtratamientoId
     *
     * @return integer 
     */
    public function getNumtratamientoId()
    {
        return $this->numtratamientoId;
    }

    /**
     * Set strcontacto
     *
     * @param string $strcontacto
     * @return Entidades
     */
    public function setStrcontacto($strcontacto)
    {
        $this->strcontacto = $strcontacto;

        return $this;
    }

    /**
     * Get strcontacto
     *
     * @return string 
     */
    public function getStrcontacto()
    {
        return $this->strcontacto;
    }

    /**
     * Set strpuesto
     *
     * @param string $strpuesto
     * @return Entidades
     */
    public function setStrpuesto($strpuesto)
    {
        $this->strpuesto = $strpuesto;

        return $this;
    }

    /**
     * Get strpuesto
     *
     * @return string 
     */
    public function getStrpuesto()
    {
        return $this->strpuesto;
    }

    /**
     * Set strdepartamento
     *
     * @param string $strdepartamento
     * @return Entidades
     */
    public function setStrdepartamento($strdepartamento)
    {
        $this->strdepartamento = $strdepartamento;

        return $this;
    }

    /**
     * Get strdepartamento
     *
     * @return string 
     */
    public function getStrdepartamento()
    {
        return $this->strdepartamento;
    }

    /**
     * Set strrfc
     *
     * @param string $strrfc
     * @return Entidades
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
     * Set strcurp
     *
     * @param string $strcurp
     * @return Entidades
     */
    public function setStrcurp($strcurp)
    {
        $this->strcurp = $strcurp;

        return $this;
    }

    /**
     * Get strcurp
     *
     * @return string 
     */
    public function getStrcurp()
    {
        return $this->strcurp;
    }

    /**
     * Set numdireccionId
     *
     * @param integer $numdireccionId
     * @return Entidades
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
     * @return Entidades
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
     * Set strtelefono1
     *
     * @param string $strtelefono1
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * Set strpaginaelectronica
     *
     * @param string $strpaginaelectronica
     * @return Entidades
     */
    public function setStrpaginaelectronica($strpaginaelectronica)
    {
        $this->strpaginaelectronica = $strpaginaelectronica;

        return $this;
    }

    /**
     * Get strpaginaelectronica
     *
     * @return string 
     */
    public function getStrpaginaelectronica()
    {
        return $this->strpaginaelectronica;
    }

    /**
     * Set strcorreoelectronico1
     *
     * @param string $strcorreoelectronico1
     * @return Entidades
     */
    public function setStrcorreoelectronico1($strcorreoelectronico1)
    {
        $this->strcorreoelectronico1 = $strcorreoelectronico1;

        return $this;
    }

    /**
     * Get strcorreoelectronico1
     *
     * @return string 
     */
    public function getStrcorreoelectronico1()
    {
        return $this->strcorreoelectronico1;
    }

    /**
     * Set strcorreoelectronico2
     *
     * @param string $strcorreoelectronico2
     * @return Entidades
     */
    public function setStrcorreoelectronico2($strcorreoelectronico2)
    {
        $this->strcorreoelectronico2 = $strcorreoelectronico2;

        return $this;
    }

    /**
     * Get strcorreoelectronico2
     *
     * @return string 
     */
    public function getStrcorreoelectronico2()
    {
        return $this->strcorreoelectronico2;
    }

    /**
     * Set strcorreoelectronico3
     *
     * @param string $strcorreoelectronico3
     * @return Entidades
     */
    public function setStrcorreoelectronico3($strcorreoelectronico3)
    {
        $this->strcorreoelectronico3 = $strcorreoelectronico3;

        return $this;
    }

    /**
     * Get strcorreoelectronico3
     *
     * @return string 
     */
    public function getStrcorreoelectronico3()
    {
        return $this->strcorreoelectronico3;
    }

    /**
     * Set numperfilId
     *
     * @param integer $numperfilId
     * @return Entidades
     */
    public function setNumperfilId($numperfilId)
    {
        $this->numperfilId = $numperfilId;

        return $this;
    }

    /**
     * Get numperfilId
     *
     * @return integer 
     */
    public function getNumperfilId()
    {
        return $this->numperfilId;
    }

    /**
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Entidades
     */
    public function setNumlenguajeId($numlenguajeId)
    {
        $this->numlenguajeId = $numlenguajeId;

        return $this;
    }

    /**
     * Get numlenguajeId
     *
     * @return integer 
     */
    public function getNumlenguajeId()
    {
        return $this->numlenguajeId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Entidades
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
     * Set numdiascontrasena
     *
     * @param integer $numdiascontrasena
     * @return Entidades
     */
    public function setNumdiascontrasena($numdiascontrasena)
    {
        $this->numdiascontrasena = $numdiascontrasena;

        return $this;
    }

    /**
     * Get numdiascontrasena
     *
     * @return integer 
     */
    public function getNumdiascontrasena()
    {
        return $this->numdiascontrasena;
    }

    /**
     * Set dtevencimiento
     *
     * @param \DateTime $dtevencimiento
     * @return Entidades
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
     * Set numcontrasenaacceso
     *
     * @param integer $numcontrasenaacceso
     * @return Entidades
     */
    public function setNumcontrasenaacceso($numcontrasenaacceso)
    {
        $this->numcontrasenaacceso = $numcontrasenaacceso;

        return $this;
    }

    /**
     * Get numcontrasenaacceso
     *
     * @return integer 
     */
    public function getNumcontrasenaacceso()
    {
        return $this->numcontrasenaacceso;
    }

    /**
     * Set numcontrasenaperfil
     *
     * @param integer $numcontrasenaperfil
     * @return Entidades
     */
    public function setNumcontrasenaperfil($numcontrasenaperfil)
    {
        $this->numcontrasenaperfil = $numcontrasenaperfil;

        return $this;
    }

    /**
     * Get numcontrasenaperfil
     *
     * @return integer 
     */
    public function getNumcontrasenaperfil()
    {
        return $this->numcontrasenaperfil;
    }

    /**
     * Set numtiporegistro
     *
     * @param integer $numtiporegistro
     * @return Entidades
     */
    public function setNumtiporegistro($numtiporegistro)
    {
        $this->numtiporegistro = $numtiporegistro;

        return $this;
    }

    /**
     * Get numtiporegistro
     *
     * @return integer 
     */
    public function getNumtiporegistro()
    {
        return $this->numtiporegistro;
    }

    /**
     * Set numclienteId
     *
     * @param integer $numclienteId
     * @return Entidades
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
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Entidades
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
     * Set strtipoentidades
     *
     * @param string $strtipoentidades
     * @return Entidades
     */
    public function setStrtipoentidades($strtipoentidades)
    {
        $this->strtipoentidades = $strtipoentidades;

        return $this;
    }

    /**
     * Get strtipoentidades
     *
     * @return string 
     */
    public function getStrtipoentidades()
    {
        return $this->strtipoentidades;
    }

    /**
     * Set numesusuario
     *
     * @param integer $numesusuario
     * @return Entidades
     */
    public function setNumesusuario($numesusuario)
    {
        $this->numesusuario = $numesusuario;

        return $this;
    }

    /**
     * Get numesusuario
     *
     * @return integer 
     */
    public function getNumesusuario()
    {
        return $this->numesusuario;
    }

    /**
     * Set numesproveedor
     *
     * @param integer $numesproveedor
     * @return Entidades
     */
    public function setNumesproveedor($numesproveedor)
    {
        $this->numesproveedor = $numesproveedor;

        return $this;
    }

    /**
     * Get numesproveedor
     *
     * @return integer 
     */
    public function getNumesproveedor()
    {
        return $this->numesproveedor;
    }

    /**
     * Set numescliente
     *
     * @param integer $numescliente
     * @return Entidades
     */
    public function setNumescliente($numescliente)
    {
        $this->numescliente = $numescliente;

        return $this;
    }

    /**
     * Get numescliente
     *
     * @return integer 
     */
    public function getNumescliente()
    {
        return $this->numescliente;
    }

    /**
     * Set numescontacto
     *
     * @param integer $numescontacto
     * @return Entidades
     */
    public function setNumescontacto($numescontacto)
    {
        $this->numescontacto = $numescontacto;

        return $this;
    }

    /**
     * Get numescontacto
     *
     * @return integer 
     */
    public function getNumescontacto()
    {
        return $this->numescontacto;
    }

    /**
     * Set numesvendedor
     *
     * @param integer $numesvendedor
     * @return Entidades
     */
    public function setNumesvendedor($numesvendedor)
    {
        $this->numesvendedor = $numesvendedor;

        return $this;
    }

    /**
     * Get numesvendedor
     *
     * @return integer 
     */
    public function getNumesvendedor()
    {
        return $this->numesvendedor;
    }

    /**
     * Set numesempleado
     *
     * @param integer $numesempleado
     * @return Entidades
     */
    public function setNumesempleado($numesempleado)
    {
        $this->numesempleado = $numesempleado;

        return $this;
    }

    /**
     * Get numesempleado
     *
     * @return integer 
     */
    public function getNumesempleado()
    {
        return $this->numesempleado;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * @return Entidades
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
     * Set numdireccioncorrespondenciaId
     *
     * @param integer $numdireccioncorrespondenciaId
     * @return Entidades
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
     * Set strdiashorarios1
     *
     * @param string $strdiashorarios1
     * @return Entidades
     */
    public function setStrdiashorarios1($strdiashorarios1)
    {
        $this->strdiashorarios1 = $strdiashorarios1;

        return $this;
    }

    /**
     * Get strdiashorarios1
     *
     * @return string 
     */
    public function getStrdiashorarios1()
    {
        return $this->strdiashorarios1;
    }

    /**
     * Set strdiashorarios2
     *
     * @param string $strdiashorarios2
     * @return Entidades
     */
    public function setStrdiashorarios2($strdiashorarios2)
    {
        $this->strdiashorarios2 = $strdiashorarios2;

        return $this;
    }

    /**
     * Get strdiashorarios2
     *
     * @return string 
     */
    public function getStrdiashorarios2()
    {
        return $this->strdiashorarios2;
    }

    /**
     * Set strdiashorarios3
     *
     * @param string $strdiashorarios3
     * @return Entidades
     */
    public function setStrdiashorarios3($strdiashorarios3)
    {
        $this->strdiashorarios3 = $strdiashorarios3;

        return $this;
    }

    /**
     * Get strdiashorarios3
     *
     * @return string 
     */
    public function getStrdiashorarios3()
    {
        return $this->strdiashorarios3;
    }

    /**
     * Set strdiashorarios4
     *
     * @param string $strdiashorarios4
     * @return Entidades
     */
    public function setStrdiashorarios4($strdiashorarios4)
    {
        $this->strdiashorarios4 = $strdiashorarios4;

        return $this;
    }

    /**
     * Get strdiashorarios4
     *
     * @return string 
     */
    public function getStrdiashorarios4()
    {
        return $this->strdiashorarios4;
    }

    /**
     * Set strdiashorarios5
     *
     * @param string $strdiashorarios5
     * @return Entidades
     */
    public function setStrdiashorarios5($strdiashorarios5)
    {
        $this->strdiashorarios5 = $strdiashorarios5;

        return $this;
    }

    /**
     * Get strdiashorarios5
     *
     * @return string 
     */
    public function getStrdiashorarios5()
    {
        return $this->strdiashorarios5;
    }

    /**
     * Set strdiashorarios6
     *
     * @param string $strdiashorarios6
     * @return Entidades
     */
    public function setStrdiashorarios6($strdiashorarios6)
    {
        $this->strdiashorarios6 = $strdiashorarios6;

        return $this;
    }

    /**
     * Get strdiashorarios6
     *
     * @return string 
     */
    public function getStrdiashorarios6()
    {
        return $this->strdiashorarios6;
    }

    /**
     * Set strdiashorarios7
     *
     * @param string $strdiashorarios7
     * @return Entidades
     */
    public function setStrdiashorarios7($strdiashorarios7)
    {
        $this->strdiashorarios7 = $strdiashorarios7;

        return $this;
    }

    /**
     * Get strdiashorarios7
     *
     * @return string 
     */
    public function getStrdiashorarios7()
    {
        return $this->strdiashorarios7;
    }

    /**
     * Set strdiashorarios8
     *
     * @param string $strdiashorarios8
     * @return Entidades
     */
    public function setStrdiashorarios8($strdiashorarios8)
    {
        $this->strdiashorarios8 = $strdiashorarios8;

        return $this;
    }

    /**
     * Get strdiashorarios8
     *
     * @return string 
     */
    public function getStrdiashorarios8()
    {
        return $this->strdiashorarios8;
    }

    /**
     * Set strdiashorarios9
     *
     * @param string $strdiashorarios9
     * @return Entidades
     */
    public function setStrdiashorarios9($strdiashorarios9)
    {
        $this->strdiashorarios9 = $strdiashorarios9;

        return $this;
    }

    /**
     * Get strdiashorarios9
     *
     * @return string 
     */
    public function getStrdiashorarios9()
    {
        return $this->strdiashorarios9;
    }

    /**
     * Set strdiashorarios10
     *
     * @param string $strdiashorarios10
     * @return Entidades
     */
    public function setStrdiashorarios10($strdiashorarios10)
    {
        $this->strdiashorarios10 = $strdiashorarios10;

        return $this;
    }

    /**
     * Get strdiashorarios10
     *
     * @return string 
     */
    public function getStrdiashorarios10()
    {
        return $this->strdiashorarios10;
    }

    /**
     * Set strdiashorarios11
     *
     * @param string $strdiashorarios11
     * @return Entidades
     */
    public function setStrdiashorarios11($strdiashorarios11)
    {
        $this->strdiashorarios11 = $strdiashorarios11;

        return $this;
    }

    /**
     * Get strdiashorarios11
     *
     * @return string 
     */
    public function getStrdiashorarios11()
    {
        return $this->strdiashorarios11;
    }

    /**
     * Set strdiashorarios12
     *
     * @param string $strdiashorarios12
     * @return Entidades
     */
    public function setStrdiashorarios12($strdiashorarios12)
    {
        $this->strdiashorarios12 = $strdiashorarios12;

        return $this;
    }

    /**
     * Get strdiashorarios12
     *
     * @return string 
     */
    public function getStrdiashorarios12()
    {
        return $this->strdiashorarios12;
    }

    /**
     * Set strdiashorarios13
     *
     * @param string $strdiashorarios13
     * @return Entidades
     */
    public function setStrdiashorarios13($strdiashorarios13)
    {
        $this->strdiashorarios13 = $strdiashorarios13;

        return $this;
    }

    /**
     * Get strdiashorarios13
     *
     * @return string 
     */
    public function getStrdiashorarios13()
    {
        return $this->strdiashorarios13;
    }

    /**
     * Set strprofesion
     *
     * @param string $strprofesion
     * @return Entidades
     */
    public function setStrprofesion($strprofesion)
    {
        $this->strprofesion = $strprofesion;

        return $this;
    }

    /**
     * Get strprofesion
     *
     * @return string 
     */
    public function getStrprofesion()
    {
        return $this->strprofesion;
    }

    /**
     * Set strocupacion
     *
     * @param string $strocupacion
     * @return Entidades
     */
    public function setStrocupacion($strocupacion)
    {
        $this->strocupacion = $strocupacion;

        return $this;
    }

    /**
     * Get strocupacion
     *
     * @return string 
     */
    public function getStrocupacion()
    {
        return $this->strocupacion;
    }

    /**
     * Set numtipoidentificacion
     *
     * @param integer $numtipoidentificacion
     * @return Entidades
     */
    public function setNumtipoidentificacion($numtipoidentificacion)
    {
        $this->numtipoidentificacion = $numtipoidentificacion;

        return $this;
    }

    /**
     * Get numtipoidentificacion
     *
     * @return integer 
     */
    public function getNumtipoidentificacion()
    {
        return $this->numtipoidentificacion;
    }

    /**
     * Set stridentificacion
     *
     * @param string $stridentificacion
     * @return Entidades
     */
    public function setStridentificacion($stridentificacion)
    {
        $this->stridentificacion = $stridentificacion;

        return $this;
    }

    /**
     * Get stridentificacion
     *
     * @return string 
     */
    public function getStridentificacion()
    {
        return $this->stridentificacion;
    }
}
