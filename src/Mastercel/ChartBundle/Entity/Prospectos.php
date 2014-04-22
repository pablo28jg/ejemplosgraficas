<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prospectos
 *
 * @ORM\Table(name="Prospectos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrProspecto_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"NumProspectoPadre_id"}), @ORM\Index(name="Indice_3", columns={"StrNombre"}), @ORM\Index(name="Indice_4", columns={"StrRFC"}), @ORM\Index(name="Indice_5", columns={"StrCURP"}), @ORM\Index(name="Indice_6", columns={"DteNacimiento"}), @ORM\Index(name="Indice_7", columns={"DteActualizacion"}), @ORM\Index(name="Indice_8", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_9", columns={"NumVendedor_1_id"}), @ORM\Index(name="Indice_10", columns={"NumEjecutivo_id"}), @ORM\Index(name="Indice_11", columns={"NumEntidad_id"})})
 * @ORM\Entity
 */
class Prospectos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumProspecto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numprospectoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProspectoPadre_id", type="integer", nullable=true)
     */
    private $numprospectopadreId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrProspecto_ky", type="string", length=20, nullable=true)
     */
    private $strprospectoKy;

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
     * @var string
     *
     * @ORM\Column(name="StrContacto", type="string", length=110, nullable=true)
     */
    private $strcontacto;

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
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRegionImpuesto_id", type="integer", nullable=true)
     */
    private $numregionimpuestoId = '0';

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
     * @ORM\Column(name="NumNivelPrecio", type="integer", nullable=true)
     */
    private $numnivelprecio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMedioEnvio_id", type="integer", nullable=true)
     */
    private $nummedioenvioId = '0';

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
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

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
     * Get numprospectoId
     *
     * @return integer 
     */
    public function getNumprospectoId()
    {
        return $this->numprospectoId;
    }

    /**
     * Set numprospectopadreId
     *
     * @param integer $numprospectopadreId
     * @return Prospectos
     */
    public function setNumprospectopadreId($numprospectopadreId)
    {
        $this->numprospectopadreId = $numprospectopadreId;

        return $this;
    }

    /**
     * Get numprospectopadreId
     *
     * @return integer 
     */
    public function getNumprospectopadreId()
    {
        return $this->numprospectopadreId;
    }

    /**
     * Set strprospectoKy
     *
     * @param string $strprospectoKy
     * @return Prospectos
     */
    public function setStrprospectoKy($strprospectoKy)
    {
        $this->strprospectoKy = $strprospectoKy;

        return $this;
    }

    /**
     * Get strprospectoKy
     *
     * @return string 
     */
    public function getStrprospectoKy()
    {
        return $this->strprospectoKy;
    }

    /**
     * Set numtipopersona
     *
     * @param integer $numtipopersona
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * Set numtipoidentificacion
     *
     * @param integer $numtipoidentificacion
     * @return Prospectos
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
     * @return Prospectos
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

    /**
     * Set strcontacto
     *
     * @param string $strcontacto
     * @return Prospectos
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
     * Set strprofesion
     *
     * @param string $strprofesion
     * @return Prospectos
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
     * @return Prospectos
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
     * Set strpuesto
     *
     * @param string $strpuesto
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * Set numgiroId
     *
     * @param integer $numgiroId
     * @return Prospectos
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
     * @return Prospectos
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
     * Set numdireccionId
     *
     * @param integer $numdireccionId
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * Set strtelefono1
     *
     * @param string $strtelefono1
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * Set strdiashorarios1
     *
     * @param string $strdiashorarios1
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * Set strpaginaelectronica
     *
     * @param string $strpaginaelectronica
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Prospectos
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
     * Set numregionimpuestoId
     *
     * @param integer $numregionimpuestoId
     * @return Prospectos
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
     * Set numcondicionId
     *
     * @param integer $numcondicionId
     * @return Prospectos
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
     * @return Prospectos
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
     * Set numnivelprecio
     *
     * @param integer $numnivelprecio
     * @return Prospectos
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
     * Set nummedioenvioId
     *
     * @param integer $nummedioenvioId
     * @return Prospectos
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
     * Set numejecutivoId
     *
     * @param integer $numejecutivoId
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * Set strmetodopago
     *
     * @param string $strmetodopago
     * @return Prospectos
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
     * @return Prospectos
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

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Prospectos
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
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Prospectos
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
     * @return Prospectos
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
