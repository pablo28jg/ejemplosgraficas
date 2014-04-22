<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunicacionesalmacenes
 *
 * @ORM\Table(name="ComunicacionesAlmacenes", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_2", columns={"StrPrefijoArchivo"})}, indexes={@ORM\Index(name="Indice_1", columns={"NumTipoComunicacion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Comunicacionesalmacenes
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
     * @var integer
     *
     * @ORM\Column(name="NumTipoComunicacion", type="integer", nullable=true)
     */
    private $numtipocomunicacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDireccionCorreo", type="string", length=60, nullable=true)
     */
    private $strdireccioncorreo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrServidorCorreoEntrante", type="string", length=60, nullable=true)
     */
    private $strservidorcorreoentrante;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPuertoCorreoEntrante", type="integer", nullable=true)
     */
    private $numpuertocorreoentrante = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrServidorCorreoSaliente", type="string", length=60, nullable=true)
     */
    private $strservidorcorreosaliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPuertoCorreoSaliente", type="integer", nullable=true)
     */
    private $numpuertocorreosaliente = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRequiereAutentificacion", type="boolean", nullable=true)
     */
    private $logrequiereautentificacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaCorreo", type="string", length=30, nullable=true)
     */
    private $strcuentacorreo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrContrasenaCorreo", type="string", length=30, nullable=true)
     */
    private $strcontrasenacorreo;

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
     * @var string
     *
     * @ORM\Column(name="StrNombreMaquina", type="string", length=30, nullable=true)
     */
    private $strnombremaquina;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDirectorioEnviados", type="string", length=200, nullable=true)
     */
    private $strdirectorioenviados;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPrefijoArchivo", type="string", length=30, nullable=true)
     */
    private $strprefijoarchivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogBorrarArchivosEnviados", type="boolean", nullable=true)
     */
    private $logborrararchivosenviados = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSiguienteArchivoEnviado", type="integer", nullable=true)
     */
    private $numsiguientearchivoenviado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrContrasenaArchivo", type="string", length=10, nullable=true)
     */
    private $strcontrasenaarchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDirectorioRecibidos", type="string", length=200, nullable=true)
     */
    private $strdirectoriorecibidos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogSobrescribirArchivosRecibidos", type="boolean", nullable=true)
     */
    private $logsobrescribirarchivosrecibidos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDirectorioActualizados", type="string", length=200, nullable=true)
     */
    private $strdirectorioactualizados;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogBorrarArchivosActualizados", type="boolean", nullable=true)
     */
    private $logborrararchivosactualizados = '0';

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
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set numtipocomunicacion
     *
     * @param integer $numtipocomunicacion
     * @return Comunicacionesalmacenes
     */
    public function setNumtipocomunicacion($numtipocomunicacion)
    {
        $this->numtipocomunicacion = $numtipocomunicacion;

        return $this;
    }

    /**
     * Get numtipocomunicacion
     *
     * @return integer 
     */
    public function getNumtipocomunicacion()
    {
        return $this->numtipocomunicacion;
    }

    /**
     * Set strdireccioncorreo
     *
     * @param string $strdireccioncorreo
     * @return Comunicacionesalmacenes
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
     * Set strservidorcorreoentrante
     *
     * @param string $strservidorcorreoentrante
     * @return Comunicacionesalmacenes
     */
    public function setStrservidorcorreoentrante($strservidorcorreoentrante)
    {
        $this->strservidorcorreoentrante = $strservidorcorreoentrante;

        return $this;
    }

    /**
     * Get strservidorcorreoentrante
     *
     * @return string 
     */
    public function getStrservidorcorreoentrante()
    {
        return $this->strservidorcorreoentrante;
    }

    /**
     * Set numpuertocorreoentrante
     *
     * @param integer $numpuertocorreoentrante
     * @return Comunicacionesalmacenes
     */
    public function setNumpuertocorreoentrante($numpuertocorreoentrante)
    {
        $this->numpuertocorreoentrante = $numpuertocorreoentrante;

        return $this;
    }

    /**
     * Get numpuertocorreoentrante
     *
     * @return integer 
     */
    public function getNumpuertocorreoentrante()
    {
        return $this->numpuertocorreoentrante;
    }

    /**
     * Set strservidorcorreosaliente
     *
     * @param string $strservidorcorreosaliente
     * @return Comunicacionesalmacenes
     */
    public function setStrservidorcorreosaliente($strservidorcorreosaliente)
    {
        $this->strservidorcorreosaliente = $strservidorcorreosaliente;

        return $this;
    }

    /**
     * Get strservidorcorreosaliente
     *
     * @return string 
     */
    public function getStrservidorcorreosaliente()
    {
        return $this->strservidorcorreosaliente;
    }

    /**
     * Set numpuertocorreosaliente
     *
     * @param integer $numpuertocorreosaliente
     * @return Comunicacionesalmacenes
     */
    public function setNumpuertocorreosaliente($numpuertocorreosaliente)
    {
        $this->numpuertocorreosaliente = $numpuertocorreosaliente;

        return $this;
    }

    /**
     * Get numpuertocorreosaliente
     *
     * @return integer 
     */
    public function getNumpuertocorreosaliente()
    {
        return $this->numpuertocorreosaliente;
    }

    /**
     * Set logrequiereautentificacion
     *
     * @param boolean $logrequiereautentificacion
     * @return Comunicacionesalmacenes
     */
    public function setLogrequiereautentificacion($logrequiereautentificacion)
    {
        $this->logrequiereautentificacion = $logrequiereautentificacion;

        return $this;
    }

    /**
     * Get logrequiereautentificacion
     *
     * @return boolean 
     */
    public function getLogrequiereautentificacion()
    {
        return $this->logrequiereautentificacion;
    }

    /**
     * Set strcuentacorreo
     *
     * @param string $strcuentacorreo
     * @return Comunicacionesalmacenes
     */
    public function setStrcuentacorreo($strcuentacorreo)
    {
        $this->strcuentacorreo = $strcuentacorreo;

        return $this;
    }

    /**
     * Get strcuentacorreo
     *
     * @return string 
     */
    public function getStrcuentacorreo()
    {
        return $this->strcuentacorreo;
    }

    /**
     * Set strcontrasenacorreo
     *
     * @param string $strcontrasenacorreo
     * @return Comunicacionesalmacenes
     */
    public function setStrcontrasenacorreo($strcontrasenacorreo)
    {
        $this->strcontrasenacorreo = $strcontrasenacorreo;

        return $this;
    }

    /**
     * Get strcontrasenacorreo
     *
     * @return string 
     */
    public function getStrcontrasenacorreo()
    {
        return $this->strcontrasenacorreo;
    }

    /**
     * Set numintentosconexion
     *
     * @param integer $numintentosconexion
     * @return Comunicacionesalmacenes
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
     * @return Comunicacionesalmacenes
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
     * Set strnombremaquina
     *
     * @param string $strnombremaquina
     * @return Comunicacionesalmacenes
     */
    public function setStrnombremaquina($strnombremaquina)
    {
        $this->strnombremaquina = $strnombremaquina;

        return $this;
    }

    /**
     * Get strnombremaquina
     *
     * @return string 
     */
    public function getStrnombremaquina()
    {
        return $this->strnombremaquina;
    }

    /**
     * Set strdirectorioenviados
     *
     * @param string $strdirectorioenviados
     * @return Comunicacionesalmacenes
     */
    public function setStrdirectorioenviados($strdirectorioenviados)
    {
        $this->strdirectorioenviados = $strdirectorioenviados;

        return $this;
    }

    /**
     * Get strdirectorioenviados
     *
     * @return string 
     */
    public function getStrdirectorioenviados()
    {
        return $this->strdirectorioenviados;
    }

    /**
     * Set strprefijoarchivo
     *
     * @param string $strprefijoarchivo
     * @return Comunicacionesalmacenes
     */
    public function setStrprefijoarchivo($strprefijoarchivo)
    {
        $this->strprefijoarchivo = $strprefijoarchivo;

        return $this;
    }

    /**
     * Get strprefijoarchivo
     *
     * @return string 
     */
    public function getStrprefijoarchivo()
    {
        return $this->strprefijoarchivo;
    }

    /**
     * Set logborrararchivosenviados
     *
     * @param boolean $logborrararchivosenviados
     * @return Comunicacionesalmacenes
     */
    public function setLogborrararchivosenviados($logborrararchivosenviados)
    {
        $this->logborrararchivosenviados = $logborrararchivosenviados;

        return $this;
    }

    /**
     * Get logborrararchivosenviados
     *
     * @return boolean 
     */
    public function getLogborrararchivosenviados()
    {
        return $this->logborrararchivosenviados;
    }

    /**
     * Set numsiguientearchivoenviado
     *
     * @param integer $numsiguientearchivoenviado
     * @return Comunicacionesalmacenes
     */
    public function setNumsiguientearchivoenviado($numsiguientearchivoenviado)
    {
        $this->numsiguientearchivoenviado = $numsiguientearchivoenviado;

        return $this;
    }

    /**
     * Get numsiguientearchivoenviado
     *
     * @return integer 
     */
    public function getNumsiguientearchivoenviado()
    {
        return $this->numsiguientearchivoenviado;
    }

    /**
     * Set strcontrasenaarchivo
     *
     * @param string $strcontrasenaarchivo
     * @return Comunicacionesalmacenes
     */
    public function setStrcontrasenaarchivo($strcontrasenaarchivo)
    {
        $this->strcontrasenaarchivo = $strcontrasenaarchivo;

        return $this;
    }

    /**
     * Get strcontrasenaarchivo
     *
     * @return string 
     */
    public function getStrcontrasenaarchivo()
    {
        return $this->strcontrasenaarchivo;
    }

    /**
     * Set strdirectoriorecibidos
     *
     * @param string $strdirectoriorecibidos
     * @return Comunicacionesalmacenes
     */
    public function setStrdirectoriorecibidos($strdirectoriorecibidos)
    {
        $this->strdirectoriorecibidos = $strdirectoriorecibidos;

        return $this;
    }

    /**
     * Get strdirectoriorecibidos
     *
     * @return string 
     */
    public function getStrdirectoriorecibidos()
    {
        return $this->strdirectoriorecibidos;
    }

    /**
     * Set logsobrescribirarchivosrecibidos
     *
     * @param boolean $logsobrescribirarchivosrecibidos
     * @return Comunicacionesalmacenes
     */
    public function setLogsobrescribirarchivosrecibidos($logsobrescribirarchivosrecibidos)
    {
        $this->logsobrescribirarchivosrecibidos = $logsobrescribirarchivosrecibidos;

        return $this;
    }

    /**
     * Get logsobrescribirarchivosrecibidos
     *
     * @return boolean 
     */
    public function getLogsobrescribirarchivosrecibidos()
    {
        return $this->logsobrescribirarchivosrecibidos;
    }

    /**
     * Set strdirectorioactualizados
     *
     * @param string $strdirectorioactualizados
     * @return Comunicacionesalmacenes
     */
    public function setStrdirectorioactualizados($strdirectorioactualizados)
    {
        $this->strdirectorioactualizados = $strdirectorioactualizados;

        return $this;
    }

    /**
     * Get strdirectorioactualizados
     *
     * @return string 
     */
    public function getStrdirectorioactualizados()
    {
        return $this->strdirectorioactualizados;
    }

    /**
     * Set logborrararchivosactualizados
     *
     * @param boolean $logborrararchivosactualizados
     * @return Comunicacionesalmacenes
     */
    public function setLogborrararchivosactualizados($logborrararchivosactualizados)
    {
        $this->logborrararchivosactualizados = $logborrararchivosactualizados;

        return $this;
    }

    /**
     * Get logborrararchivosactualizados
     *
     * @return boolean 
     */
    public function getLogborrararchivosactualizados()
    {
        return $this->logborrararchivosactualizados;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Comunicacionesalmacenes
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
     * @return Comunicacionesalmacenes
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
     * @return Comunicacionesalmacenes
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
     * @return Comunicacionesalmacenes
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
     * @return Comunicacionesalmacenes
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
     * @return Comunicacionesalmacenes
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
