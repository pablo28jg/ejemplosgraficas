<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direcciones
 *
 * @ORM\Table(name="Direcciones", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacenOrigen_id"}), @ORM\Index(name="Indice_10", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_11", columns={"NumCliente_id"}), @ORM\Index(name="Indice_12", columns={"NumContacto_id"}), @ORM\Index(name="Indice_13", columns={"NumEmpleado_id"}), @ORM\Index(name="Indice_14", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_15", columns={"NumMedioEnvio_id"}), @ORM\Index(name="Indice_16", columns={"NumProveedor_id"}), @ORM\Index(name="Indice_17", columns={"NumSucursalBancaria_id"}), @ORM\Index(name="Indice_18", columns={"NumVendedor_id"}), @ORM\Index(name="Indice_19", columns={"NumUsuario_id"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_20", columns={"DteActualizacion"}), @ORM\Index(name="Indice_21", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_3", columns={"StrNombre"}), @ORM\Index(name="Indice_4", columns={"NumAsentamientoTipo_id"}), @ORM\Index(name="Indice_5", columns={"NumCiudad_id"}), @ORM\Index(name="Indice_6", columns={"NumMunicipio_id"}), @ORM\Index(name="Indice_7", columns={"NumEntidadFederativa_id"}), @ORM\Index(name="Indice_8", columns={"NumPais_id"})})
 * @ORM\Entity
 */
class Direcciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumDireccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numdireccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenOrigen_id", type="integer", nullable=true)
     */
    private $numalmacenorigenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=110, nullable=true)
     */
    private $strnombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPais_id", type="integer", nullable=true)
     */
    private $numpaisId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidadFederativa_id", type="integer", nullable=true)
     */
    private $numentidadfederativaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrEntidadFederativa", type="string", length=60, nullable=true)
     */
    private $strentidadfederativa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCiudad_id", type="integer", nullable=true)
     */
    private $numciudadId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCiudad", type="string", length=60, nullable=true)
     */
    private $strciudad;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMunicipio_id", type="integer", nullable=true)
     */
    private $nummunicipioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrMunicipio", type="string", length=60, nullable=true)
     */
    private $strmunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoPostal", type="string", length=5, nullable=true)
     */
    private $strcodigopostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAsentamientoTipo_id", type="integer", nullable=true)
     */
    private $numasentamientotipoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAsentamiento_id", type="integer", nullable=true)
     */
    private $numasentamientoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAsentamiento", type="string", length=60, nullable=true)
     */
    private $strasentamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVialidadTipo_id", type="integer", nullable=true)
     */
    private $numvialidadtipoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrVialidad", type="string", length=60, nullable=true)
     */
    private $strvialidad;

    /**
     * @var string
     *
     * @ORM\Column(name="StrExterior", type="string", length=30, nullable=true)
     */
    private $strexterior;

    /**
     * @var string
     *
     * @ORM\Column(name="StrInterior", type="string", length=30, nullable=true)
     */
    private $strinterior;

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=60, nullable=true)
     */
    private $strreferencia;

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
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCliente_id", type="integer", nullable=true)
     */
    private $numclienteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContacto_id", type="integer", nullable=true)
     */
    private $numcontactoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpleado_id", type="integer", nullable=true)
     */
    private $numempleadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMedioEnvio_id", type="integer", nullable=true)
     */
    private $nummedioenvioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSucursalBancaria_id", type="integer", nullable=true)
     */
    private $numsucursalbancariaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_id", type="integer", nullable=true)
     */
    private $numvendedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUsuario_id", type="integer", nullable=true)
     */
    private $numusuarioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTipoDirecciones", type="string", length=10, nullable=true)
     */
    private $strtipodirecciones;

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
     * Get numdireccionId
     *
     * @return integer 
     */
    public function getNumdireccionId()
    {
        return $this->numdireccionId;
    }

    /**
     * Set numalmacenorigenId
     *
     * @param integer $numalmacenorigenId
     * @return Direcciones
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Direcciones
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
     * Set strnombre
     *
     * @param string $strnombre
     * @return Direcciones
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
     * Set numpaisId
     *
     * @param integer $numpaisId
     * @return Direcciones
     */
    public function setNumpaisId($numpaisId)
    {
        $this->numpaisId = $numpaisId;

        return $this;
    }

    /**
     * Get numpaisId
     *
     * @return integer 
     */
    public function getNumpaisId()
    {
        return $this->numpaisId;
    }

    /**
     * Set numentidadfederativaId
     *
     * @param integer $numentidadfederativaId
     * @return Direcciones
     */
    public function setNumentidadfederativaId($numentidadfederativaId)
    {
        $this->numentidadfederativaId = $numentidadfederativaId;

        return $this;
    }

    /**
     * Get numentidadfederativaId
     *
     * @return integer 
     */
    public function getNumentidadfederativaId()
    {
        return $this->numentidadfederativaId;
    }

    /**
     * Set strentidadfederativa
     *
     * @param string $strentidadfederativa
     * @return Direcciones
     */
    public function setStrentidadfederativa($strentidadfederativa)
    {
        $this->strentidadfederativa = $strentidadfederativa;

        return $this;
    }

    /**
     * Get strentidadfederativa
     *
     * @return string 
     */
    public function getStrentidadfederativa()
    {
        return $this->strentidadfederativa;
    }

    /**
     * Set numciudadId
     *
     * @param integer $numciudadId
     * @return Direcciones
     */
    public function setNumciudadId($numciudadId)
    {
        $this->numciudadId = $numciudadId;

        return $this;
    }

    /**
     * Get numciudadId
     *
     * @return integer 
     */
    public function getNumciudadId()
    {
        return $this->numciudadId;
    }

    /**
     * Set strciudad
     *
     * @param string $strciudad
     * @return Direcciones
     */
    public function setStrciudad($strciudad)
    {
        $this->strciudad = $strciudad;

        return $this;
    }

    /**
     * Get strciudad
     *
     * @return string 
     */
    public function getStrciudad()
    {
        return $this->strciudad;
    }

    /**
     * Set nummunicipioId
     *
     * @param integer $nummunicipioId
     * @return Direcciones
     */
    public function setNummunicipioId($nummunicipioId)
    {
        $this->nummunicipioId = $nummunicipioId;

        return $this;
    }

    /**
     * Get nummunicipioId
     *
     * @return integer 
     */
    public function getNummunicipioId()
    {
        return $this->nummunicipioId;
    }

    /**
     * Set strmunicipio
     *
     * @param string $strmunicipio
     * @return Direcciones
     */
    public function setStrmunicipio($strmunicipio)
    {
        $this->strmunicipio = $strmunicipio;

        return $this;
    }

    /**
     * Get strmunicipio
     *
     * @return string 
     */
    public function getStrmunicipio()
    {
        return $this->strmunicipio;
    }

    /**
     * Set strcodigopostal
     *
     * @param string $strcodigopostal
     * @return Direcciones
     */
    public function setStrcodigopostal($strcodigopostal)
    {
        $this->strcodigopostal = $strcodigopostal;

        return $this;
    }

    /**
     * Get strcodigopostal
     *
     * @return string 
     */
    public function getStrcodigopostal()
    {
        return $this->strcodigopostal;
    }

    /**
     * Set numasentamientotipoId
     *
     * @param integer $numasentamientotipoId
     * @return Direcciones
     */
    public function setNumasentamientotipoId($numasentamientotipoId)
    {
        $this->numasentamientotipoId = $numasentamientotipoId;

        return $this;
    }

    /**
     * Get numasentamientotipoId
     *
     * @return integer 
     */
    public function getNumasentamientotipoId()
    {
        return $this->numasentamientotipoId;
    }

    /**
     * Set numasentamientoId
     *
     * @param integer $numasentamientoId
     * @return Direcciones
     */
    public function setNumasentamientoId($numasentamientoId)
    {
        $this->numasentamientoId = $numasentamientoId;

        return $this;
    }

    /**
     * Get numasentamientoId
     *
     * @return integer 
     */
    public function getNumasentamientoId()
    {
        return $this->numasentamientoId;
    }

    /**
     * Set strasentamiento
     *
     * @param string $strasentamiento
     * @return Direcciones
     */
    public function setStrasentamiento($strasentamiento)
    {
        $this->strasentamiento = $strasentamiento;

        return $this;
    }

    /**
     * Get strasentamiento
     *
     * @return string 
     */
    public function getStrasentamiento()
    {
        return $this->strasentamiento;
    }

    /**
     * Set numvialidadtipoId
     *
     * @param integer $numvialidadtipoId
     * @return Direcciones
     */
    public function setNumvialidadtipoId($numvialidadtipoId)
    {
        $this->numvialidadtipoId = $numvialidadtipoId;

        return $this;
    }

    /**
     * Get numvialidadtipoId
     *
     * @return integer 
     */
    public function getNumvialidadtipoId()
    {
        return $this->numvialidadtipoId;
    }

    /**
     * Set strvialidad
     *
     * @param string $strvialidad
     * @return Direcciones
     */
    public function setStrvialidad($strvialidad)
    {
        $this->strvialidad = $strvialidad;

        return $this;
    }

    /**
     * Get strvialidad
     *
     * @return string 
     */
    public function getStrvialidad()
    {
        return $this->strvialidad;
    }

    /**
     * Set strexterior
     *
     * @param string $strexterior
     * @return Direcciones
     */
    public function setStrexterior($strexterior)
    {
        $this->strexterior = $strexterior;

        return $this;
    }

    /**
     * Get strexterior
     *
     * @return string 
     */
    public function getStrexterior()
    {
        return $this->strexterior;
    }

    /**
     * Set strinterior
     *
     * @param string $strinterior
     * @return Direcciones
     */
    public function setStrinterior($strinterior)
    {
        $this->strinterior = $strinterior;

        return $this;
    }

    /**
     * Get strinterior
     *
     * @return string 
     */
    public function getStrinterior()
    {
        return $this->strinterior;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Direcciones
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
     * Set strtelefono1
     *
     * @param string $strtelefono1
     * @return Direcciones
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
     * @return Direcciones
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
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Direcciones
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
     * Set numclienteId
     *
     * @param integer $numclienteId
     * @return Direcciones
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
     * Set numcontactoId
     *
     * @param integer $numcontactoId
     * @return Direcciones
     */
    public function setNumcontactoId($numcontactoId)
    {
        $this->numcontactoId = $numcontactoId;

        return $this;
    }

    /**
     * Get numcontactoId
     *
     * @return integer 
     */
    public function getNumcontactoId()
    {
        return $this->numcontactoId;
    }

    /**
     * Set numempleadoId
     *
     * @param integer $numempleadoId
     * @return Direcciones
     */
    public function setNumempleadoId($numempleadoId)
    {
        $this->numempleadoId = $numempleadoId;

        return $this;
    }

    /**
     * Get numempleadoId
     *
     * @return integer 
     */
    public function getNumempleadoId()
    {
        return $this->numempleadoId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Direcciones
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
     * Set nummedioenvioId
     *
     * @param integer $nummedioenvioId
     * @return Direcciones
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
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Direcciones
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
     * Set numsucursalbancariaId
     *
     * @param integer $numsucursalbancariaId
     * @return Direcciones
     */
    public function setNumsucursalbancariaId($numsucursalbancariaId)
    {
        $this->numsucursalbancariaId = $numsucursalbancariaId;

        return $this;
    }

    /**
     * Get numsucursalbancariaId
     *
     * @return integer 
     */
    public function getNumsucursalbancariaId()
    {
        return $this->numsucursalbancariaId;
    }

    /**
     * Set numvendedorId
     *
     * @param integer $numvendedorId
     * @return Direcciones
     */
    public function setNumvendedorId($numvendedorId)
    {
        $this->numvendedorId = $numvendedorId;

        return $this;
    }

    /**
     * Get numvendedorId
     *
     * @return integer 
     */
    public function getNumvendedorId()
    {
        return $this->numvendedorId;
    }

    /**
     * Set numusuarioId
     *
     * @param integer $numusuarioId
     * @return Direcciones
     */
    public function setNumusuarioId($numusuarioId)
    {
        $this->numusuarioId = $numusuarioId;

        return $this;
    }

    /**
     * Get numusuarioId
     *
     * @return integer 
     */
    public function getNumusuarioId()
    {
        return $this->numusuarioId;
    }

    /**
     * Set strtipodirecciones
     *
     * @param string $strtipodirecciones
     * @return Direcciones
     */
    public function setStrtipodirecciones($strtipodirecciones)
    {
        $this->strtipodirecciones = $strtipodirecciones;

        return $this;
    }

    /**
     * Get strtipodirecciones
     *
     * @return string 
     */
    public function getStrtipodirecciones()
    {
        return $this->strtipodirecciones;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Direcciones
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
     * @return Direcciones
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
     * @return Direcciones
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
     * @return Direcciones
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
     * @return Direcciones
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
     * @return Direcciones
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
