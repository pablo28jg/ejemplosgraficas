<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontables
 *
 * @ORM\Table(name="CuentasContables", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"NumGrupo_id"}), @ORM\Index(name="Indice_3", columns={"NumMoneda_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_6", columns={"NumOrden_id", "NumNivel_id"}), @ORM\Index(name="Indice_7", columns={"StrCuentaMayor_ky"}), @ORM\Index(name="Indice_8", columns={"StrCuenta_1_ky"}), @ORM\Index(name="Indice_9", columns={"StrCuenta_2_ky"}), @ORM\Index(name="Indice_10", columns={"StrCuenta_3_ky"}), @ORM\Index(name="Indice_11", columns={"StrCuenta_4_ky"}), @ORM\Index(name="Indice_12", columns={"StrCuenta_5_ky"}), @ORM\Index(name="Indice_13", columns={"StrCuenta_6_ky"}), @ORM\Index(name="Indice_14", columns={"StrCuenta_7_ky"}), @ORM\Index(name="Indice_15", columns={"StrCuenta_8_ky"}), @ORM\Index(name="Indice_16", columns={"StrCuenta_9_ky"}), @ORM\Index(name="Indice_17", columns={"StrCuenta_10_ky"})})
 * @ORM\Entity
 */
class Cuentascontables
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strcuentaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaMayor_ky", type="string", length=20, nullable=true)
     */
    private $strcuentamayorKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden_id", type="integer", nullable=true)
     */
    private $numordenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_id", type="integer", nullable=true)
     */
    private $numnivelId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogUltimoNivel", type="boolean", nullable=true)
     */
    private $logultimonivel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupo_id", type="integer", nullable=true)
     */
    private $numgrupoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCategoriaCuenta", type="integer", nullable=true)
     */
    private $numtipocategoriacuenta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCuenta", type="integer", nullable=true)
     */
    private $numtipocuenta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoNaturaleza", type="integer", nullable=true)
     */
    private $numtiponaturaleza = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRegistroDiferenteMoneda", type="boolean", nullable=true)
     */
    private $logregistrodiferentemoneda = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoRegistro", type="integer", nullable=true)
     */
    private $numtiporegistro = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumValidacionEmpresa_id", type="integer", nullable=true)
     */
    private $numvalidacionempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumValidacionCentroControl_id", type="integer", nullable=true)
     */
    private $numvalidacioncentrocontrolId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogCuentaUtilidadPerdida", type="boolean", nullable=true)
     */
    private $logcuentautilidadperdida = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_1_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta1Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_2_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta2Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_3_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta3Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_4_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta4Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_5_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta5Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_6_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta6Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_7_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta7Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_8_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta8Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_9_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta9Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_10_ky", type="string", length=20, nullable=true)
     */
    private $strcuenta10Ky;

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
     * @var boolean
     *
     * @ORM\Column(name="LogAplicarCentroControl", type="boolean", nullable=true)
     */
    private $logaplicarcentrocontrol = '0';



    /**
     * Get strcuentaKy
     *
     * @return string 
     */
    public function getStrcuentaKy()
    {
        return $this->strcuentaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Cuentascontables
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
     * Set strcuentamayorKy
     *
     * @param string $strcuentamayorKy
     * @return Cuentascontables
     */
    public function setStrcuentamayorKy($strcuentamayorKy)
    {
        $this->strcuentamayorKy = $strcuentamayorKy;

        return $this;
    }

    /**
     * Get strcuentamayorKy
     *
     * @return string 
     */
    public function getStrcuentamayorKy()
    {
        return $this->strcuentamayorKy;
    }

    /**
     * Set numordenId
     *
     * @param integer $numordenId
     * @return Cuentascontables
     */
    public function setNumordenId($numordenId)
    {
        $this->numordenId = $numordenId;

        return $this;
    }

    /**
     * Get numordenId
     *
     * @return integer 
     */
    public function getNumordenId()
    {
        return $this->numordenId;
    }

    /**
     * Set numnivelId
     *
     * @param integer $numnivelId
     * @return Cuentascontables
     */
    public function setNumnivelId($numnivelId)
    {
        $this->numnivelId = $numnivelId;

        return $this;
    }

    /**
     * Get numnivelId
     *
     * @return integer 
     */
    public function getNumnivelId()
    {
        return $this->numnivelId;
    }

    /**
     * Set logultimonivel
     *
     * @param boolean $logultimonivel
     * @return Cuentascontables
     */
    public function setLogultimonivel($logultimonivel)
    {
        $this->logultimonivel = $logultimonivel;

        return $this;
    }

    /**
     * Get logultimonivel
     *
     * @return boolean 
     */
    public function getLogultimonivel()
    {
        return $this->logultimonivel;
    }

    /**
     * Set numgrupoId
     *
     * @param integer $numgrupoId
     * @return Cuentascontables
     */
    public function setNumgrupoId($numgrupoId)
    {
        $this->numgrupoId = $numgrupoId;

        return $this;
    }

    /**
     * Get numgrupoId
     *
     * @return integer 
     */
    public function getNumgrupoId()
    {
        return $this->numgrupoId;
    }

    /**
     * Set numtipocategoriacuenta
     *
     * @param integer $numtipocategoriacuenta
     * @return Cuentascontables
     */
    public function setNumtipocategoriacuenta($numtipocategoriacuenta)
    {
        $this->numtipocategoriacuenta = $numtipocategoriacuenta;

        return $this;
    }

    /**
     * Get numtipocategoriacuenta
     *
     * @return integer 
     */
    public function getNumtipocategoriacuenta()
    {
        return $this->numtipocategoriacuenta;
    }

    /**
     * Set numtipocuenta
     *
     * @param integer $numtipocuenta
     * @return Cuentascontables
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
     * Set numtiponaturaleza
     *
     * @param integer $numtiponaturaleza
     * @return Cuentascontables
     */
    public function setNumtiponaturaleza($numtiponaturaleza)
    {
        $this->numtiponaturaleza = $numtiponaturaleza;

        return $this;
    }

    /**
     * Get numtiponaturaleza
     *
     * @return integer 
     */
    public function getNumtiponaturaleza()
    {
        return $this->numtiponaturaleza;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Cuentascontables
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
     * Set logregistrodiferentemoneda
     *
     * @param boolean $logregistrodiferentemoneda
     * @return Cuentascontables
     */
    public function setLogregistrodiferentemoneda($logregistrodiferentemoneda)
    {
        $this->logregistrodiferentemoneda = $logregistrodiferentemoneda;

        return $this;
    }

    /**
     * Get logregistrodiferentemoneda
     *
     * @return boolean 
     */
    public function getLogregistrodiferentemoneda()
    {
        return $this->logregistrodiferentemoneda;
    }

    /**
     * Set numtiporegistro
     *
     * @param integer $numtiporegistro
     * @return Cuentascontables
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
     * Set numvalidacionempresaId
     *
     * @param integer $numvalidacionempresaId
     * @return Cuentascontables
     */
    public function setNumvalidacionempresaId($numvalidacionempresaId)
    {
        $this->numvalidacionempresaId = $numvalidacionempresaId;

        return $this;
    }

    /**
     * Get numvalidacionempresaId
     *
     * @return integer 
     */
    public function getNumvalidacionempresaId()
    {
        return $this->numvalidacionempresaId;
    }

    /**
     * Set numvalidacioncentrocontrolId
     *
     * @param integer $numvalidacioncentrocontrolId
     * @return Cuentascontables
     */
    public function setNumvalidacioncentrocontrolId($numvalidacioncentrocontrolId)
    {
        $this->numvalidacioncentrocontrolId = $numvalidacioncentrocontrolId;

        return $this;
    }

    /**
     * Get numvalidacioncentrocontrolId
     *
     * @return integer 
     */
    public function getNumvalidacioncentrocontrolId()
    {
        return $this->numvalidacioncentrocontrolId;
    }

    /**
     * Set logcuentautilidadperdida
     *
     * @param boolean $logcuentautilidadperdida
     * @return Cuentascontables
     */
    public function setLogcuentautilidadperdida($logcuentautilidadperdida)
    {
        $this->logcuentautilidadperdida = $logcuentautilidadperdida;

        return $this;
    }

    /**
     * Get logcuentautilidadperdida
     *
     * @return boolean 
     */
    public function getLogcuentautilidadperdida()
    {
        return $this->logcuentautilidadperdida;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Cuentascontables
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
     * Set strcuenta1Ky
     *
     * @param string $strcuenta1Ky
     * @return Cuentascontables
     */
    public function setStrcuenta1Ky($strcuenta1Ky)
    {
        $this->strcuenta1Ky = $strcuenta1Ky;

        return $this;
    }

    /**
     * Get strcuenta1Ky
     *
     * @return string 
     */
    public function getStrcuenta1Ky()
    {
        return $this->strcuenta1Ky;
    }

    /**
     * Set strcuenta2Ky
     *
     * @param string $strcuenta2Ky
     * @return Cuentascontables
     */
    public function setStrcuenta2Ky($strcuenta2Ky)
    {
        $this->strcuenta2Ky = $strcuenta2Ky;

        return $this;
    }

    /**
     * Get strcuenta2Ky
     *
     * @return string 
     */
    public function getStrcuenta2Ky()
    {
        return $this->strcuenta2Ky;
    }

    /**
     * Set strcuenta3Ky
     *
     * @param string $strcuenta3Ky
     * @return Cuentascontables
     */
    public function setStrcuenta3Ky($strcuenta3Ky)
    {
        $this->strcuenta3Ky = $strcuenta3Ky;

        return $this;
    }

    /**
     * Get strcuenta3Ky
     *
     * @return string 
     */
    public function getStrcuenta3Ky()
    {
        return $this->strcuenta3Ky;
    }

    /**
     * Set strcuenta4Ky
     *
     * @param string $strcuenta4Ky
     * @return Cuentascontables
     */
    public function setStrcuenta4Ky($strcuenta4Ky)
    {
        $this->strcuenta4Ky = $strcuenta4Ky;

        return $this;
    }

    /**
     * Get strcuenta4Ky
     *
     * @return string 
     */
    public function getStrcuenta4Ky()
    {
        return $this->strcuenta4Ky;
    }

    /**
     * Set strcuenta5Ky
     *
     * @param string $strcuenta5Ky
     * @return Cuentascontables
     */
    public function setStrcuenta5Ky($strcuenta5Ky)
    {
        $this->strcuenta5Ky = $strcuenta5Ky;

        return $this;
    }

    /**
     * Get strcuenta5Ky
     *
     * @return string 
     */
    public function getStrcuenta5Ky()
    {
        return $this->strcuenta5Ky;
    }

    /**
     * Set strcuenta6Ky
     *
     * @param string $strcuenta6Ky
     * @return Cuentascontables
     */
    public function setStrcuenta6Ky($strcuenta6Ky)
    {
        $this->strcuenta6Ky = $strcuenta6Ky;

        return $this;
    }

    /**
     * Get strcuenta6Ky
     *
     * @return string 
     */
    public function getStrcuenta6Ky()
    {
        return $this->strcuenta6Ky;
    }

    /**
     * Set strcuenta7Ky
     *
     * @param string $strcuenta7Ky
     * @return Cuentascontables
     */
    public function setStrcuenta7Ky($strcuenta7Ky)
    {
        $this->strcuenta7Ky = $strcuenta7Ky;

        return $this;
    }

    /**
     * Get strcuenta7Ky
     *
     * @return string 
     */
    public function getStrcuenta7Ky()
    {
        return $this->strcuenta7Ky;
    }

    /**
     * Set strcuenta8Ky
     *
     * @param string $strcuenta8Ky
     * @return Cuentascontables
     */
    public function setStrcuenta8Ky($strcuenta8Ky)
    {
        $this->strcuenta8Ky = $strcuenta8Ky;

        return $this;
    }

    /**
     * Get strcuenta8Ky
     *
     * @return string 
     */
    public function getStrcuenta8Ky()
    {
        return $this->strcuenta8Ky;
    }

    /**
     * Set strcuenta9Ky
     *
     * @param string $strcuenta9Ky
     * @return Cuentascontables
     */
    public function setStrcuenta9Ky($strcuenta9Ky)
    {
        $this->strcuenta9Ky = $strcuenta9Ky;

        return $this;
    }

    /**
     * Get strcuenta9Ky
     *
     * @return string 
     */
    public function getStrcuenta9Ky()
    {
        return $this->strcuenta9Ky;
    }

    /**
     * Set strcuenta10Ky
     *
     * @param string $strcuenta10Ky
     * @return Cuentascontables
     */
    public function setStrcuenta10Ky($strcuenta10Ky)
    {
        $this->strcuenta10Ky = $strcuenta10Ky;

        return $this;
    }

    /**
     * Get strcuenta10Ky
     *
     * @return string 
     */
    public function getStrcuenta10Ky()
    {
        return $this->strcuenta10Ky;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Cuentascontables
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
     * @return Cuentascontables
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
     * @return Cuentascontables
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
     * @return Cuentascontables
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
     * @return Cuentascontables
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
     * @return Cuentascontables
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
     * Set logaplicarcentrocontrol
     *
     * @param boolean $logaplicarcentrocontrol
     * @return Cuentascontables
     */
    public function setLogaplicarcentrocontrol($logaplicarcentrocontrol)
    {
        $this->logaplicarcentrocontrol = $logaplicarcentrocontrol;

        return $this;
    }

    /**
     * Get logaplicarcentrocontrol
     *
     * @return boolean 
     */
    public function getLogaplicarcentrocontrol()
    {
        return $this->logaplicarcentrocontrol;
    }
}
