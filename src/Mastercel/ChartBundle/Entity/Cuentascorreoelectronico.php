<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascorreoelectronico
 *
 * @ORM\Table(name="CuentasCorreoElectronico", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Cuentascorreoelectronico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaCorreo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcuentacorreoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=60, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDireccionCorreo", type="string", length=60, nullable=true)
     */
    private $strdireccioncorreo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrUsuario", type="string", length=60, nullable=true)
     */
    private $strusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="StrContrasena", type="string", length=60, nullable=true)
     */
    private $strcontrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="StrServidorEntrante", type="string", length=60, nullable=true)
     */
    private $strservidorentrante;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPuertoEntrante", type="integer", nullable=true)
     */
    private $numpuertoentrante = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrServidorSaliente", type="string", length=60, nullable=true)
     */
    private $strservidorsaliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPuertoSaliente", type="integer", nullable=true)
     */
    private $numpuertosaliente = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRequiereAutenticacion", type="boolean", nullable=true)
     */
    private $logrequiereautenticacion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogInicioSesionSPA", type="boolean", nullable=true)
     */
    private $loginiciosesionspa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumIntentosConexion", type="integer", nullable=true)
     */
    private $numintentosconexion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiempoEsperaConexion", type="integer", nullable=true)
     */
    private $numtiempoesperaconexion = '0';

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
     * Get numcuentacorreoId
     *
     * @return integer 
     */
    public function getNumcuentacorreoId()
    {
        return $this->numcuentacorreoId;
    }

    /**
     * Set strnombre
     *
     * @param string $strnombre
     * @return Cuentascorreoelectronico
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
     * Set strdireccioncorreo
     *
     * @param string $strdireccioncorreo
     * @return Cuentascorreoelectronico
     */
    public function setStrdireccioncorreo($strdireccioncorreo)
    {
        $this->strdireccioncorreo = $strdireccioncorreo;

        return $this;
    }

    /**
     * Get strdireccioncorreo
     *
     * @return string 
     */
    public function getStrdireccioncorreo()
    {
        return $this->strdireccioncorreo;
    }

    /**
     * Set strusuario
     *
     * @param string $strusuario
     * @return Cuentascorreoelectronico
     */
    public function setStrusuario($strusuario)
    {
        $this->strusuario = $strusuario;

        return $this;
    }

    /**
     * Get strusuario
     *
     * @return string 
     */
    public function getStrusuario()
    {
        return $this->strusuario;
    }

    /**
     * Set strcontrasena
     *
     * @param string $strcontrasena
     * @return Cuentascorreoelectronico
     */
    public function setStrcontrasena($strcontrasena)
    {
        $this->strcontrasena = $strcontrasena;

        return $this;
    }

    /**
     * Get strcontrasena
     *
     * @return string 
     */
    public function getStrcontrasena()
    {
        return $this->strcontrasena;
    }

    /**
     * Set strservidorentrante
     *
     * @param string $strservidorentrante
     * @return Cuentascorreoelectronico
     */
    public function setStrservidorentrante($strservidorentrante)
    {
        $this->strservidorentrante = $strservidorentrante;

        return $this;
    }

    /**
     * Get strservidorentrante
     *
     * @return string 
     */
    public function getStrservidorentrante()
    {
        return $this->strservidorentrante;
    }

    /**
     * Set numpuertoentrante
     *
     * @param integer $numpuertoentrante
     * @return Cuentascorreoelectronico
     */
    public function setNumpuertoentrante($numpuertoentrante)
    {
        $this->numpuertoentrante = $numpuertoentrante;

        return $this;
    }

    /**
     * Get numpuertoentrante
     *
     * @return integer 
     */
    public function getNumpuertoentrante()
    {
        return $this->numpuertoentrante;
    }

    /**
     * Set strservidorsaliente
     *
     * @param string $strservidorsaliente
     * @return Cuentascorreoelectronico
     */
    public function setStrservidorsaliente($strservidorsaliente)
    {
        $this->strservidorsaliente = $strservidorsaliente;

        return $this;
    }

    /**
     * Get strservidorsaliente
     *
     * @return string 
     */
    public function getStrservidorsaliente()
    {
        return $this->strservidorsaliente;
    }

    /**
     * Set numpuertosaliente
     *
     * @param integer $numpuertosaliente
     * @return Cuentascorreoelectronico
     */
    public function setNumpuertosaliente($numpuertosaliente)
    {
        $this->numpuertosaliente = $numpuertosaliente;

        return $this;
    }

    /**
     * Get numpuertosaliente
     *
     * @return integer 
     */
    public function getNumpuertosaliente()
    {
        return $this->numpuertosaliente;
    }

    /**
     * Set logrequiereautenticacion
     *
     * @param boolean $logrequiereautenticacion
     * @return Cuentascorreoelectronico
     */
    public function setLogrequiereautenticacion($logrequiereautenticacion)
    {
        $this->logrequiereautenticacion = $logrequiereautenticacion;

        return $this;
    }

    /**
     * Get logrequiereautenticacion
     *
     * @return boolean 
     */
    public function getLogrequiereautenticacion()
    {
        return $this->logrequiereautenticacion;
    }

    /**
     * Set loginiciosesionspa
     *
     * @param boolean $loginiciosesionspa
     * @return Cuentascorreoelectronico
     */
    public function setLoginiciosesionspa($loginiciosesionspa)
    {
        $this->loginiciosesionspa = $loginiciosesionspa;

        return $this;
    }

    /**
     * Get loginiciosesionspa
     *
     * @return boolean 
     */
    public function getLoginiciosesionspa()
    {
        return $this->loginiciosesionspa;
    }

    /**
     * Set numintentosconexion
     *
     * @param integer $numintentosconexion
     * @return Cuentascorreoelectronico
     */
    public function setNumintentosconexion($numintentosconexion)
    {
        $this->numintentosconexion = $numintentosconexion;

        return $this;
    }

    /**
     * Get numintentosconexion
     *
     * @return integer 
     */
    public function getNumintentosconexion()
    {
        return $this->numintentosconexion;
    }

    /**
     * Set numtiempoesperaconexion
     *
     * @param integer $numtiempoesperaconexion
     * @return Cuentascorreoelectronico
     */
    public function setNumtiempoesperaconexion($numtiempoesperaconexion)
    {
        $this->numtiempoesperaconexion = $numtiempoesperaconexion;

        return $this;
    }

    /**
     * Get numtiempoesperaconexion
     *
     * @return integer 
     */
    public function getNumtiempoesperaconexion()
    {
        return $this->numtiempoesperaconexion;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Cuentascorreoelectronico
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
     * @return Cuentascorreoelectronico
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
     * @return Cuentascorreoelectronico
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
     * @return Cuentascorreoelectronico
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
     * @return Cuentascorreoelectronico
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
     * @return Cuentascorreoelectronico
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
