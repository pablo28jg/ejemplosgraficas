<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correosmensajes
 *
 * @ORM\Table(name="CorreosMensajes", indexes={@ORM\Index(name="Indice_1", columns={"NumCuentaCorreo_id", "NumCarpeta_id"}), @ORM\Index(name="Indice_2", columns={"NumTipoEstado"})})
 * @ORM\Entity
 */
class Correosmensajes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMensajeCorreo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummensajecorreoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaCorreo_id", type="integer", nullable=true)
     */
    private $numcuentacorreoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCarpeta_id", type="integer", nullable=true)
     */
    private $numcarpetaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDe", type="string", length=128, nullable=true)
     */
    private $strde;

    /**
     * @var string
     *
     * @ORM\Column(name="MemPara", type="text", length=16, nullable=true)
     */
    private $mempara;

    /**
     * @var string
     *
     * @ORM\Column(name="MemCopiaPara", type="text", length=16, nullable=true)
     */
    private $memcopiapara;

    /**
     * @var string
     *
     * @ORM\Column(name="MemCopiaOcultaPara", type="text", length=16, nullable=true)
     */
    private $memcopiaocultapara;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAsunto", type="string", length=255, nullable=true)
     */
    private $strasunto;

    /**
     * @var string
     *
     * @ORM\Column(name="MemTexto", type="text", length=16, nullable=true)
     */
    private $memtexto;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoFormato", type="integer", nullable=true)
     */
    private $numtipoformato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPrioridad", type="integer", nullable=true)
     */
    private $numtipoprioridad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemArchivosAdjuntos", type="text", length=16, nullable=true)
     */
    private $memarchivosadjuntos;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCodificacionArchivos", type="integer", nullable=true)
     */
    private $numtipocodificacionarchivos = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEnvioRecepcion", type="datetime", nullable=true)
     */
    private $dteenviorecepcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEnviadoLeido", type="datetime", nullable=true)
     */
    private $dteenviadoleido;

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
     * @ORM\Column(name="LogSeleccionado", type="boolean", nullable=true)
     */
    private $logseleccionado = '0';



    /**
     * Get nummensajecorreoId
     *
     * @return integer 
     */
    public function getNummensajecorreoId()
    {
        return $this->nummensajecorreoId;
    }

    /**
     * Set numcuentacorreoId
     *
     * @param integer $numcuentacorreoId
     * @return Correosmensajes
     */
    public function setNumcuentacorreoId($numcuentacorreoId)
    {
        $this->numcuentacorreoId = $numcuentacorreoId;

        return $this;
    }

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
     * Set numcarpetaId
     *
     * @param integer $numcarpetaId
     * @return Correosmensajes
     */
    public function setNumcarpetaId($numcarpetaId)
    {
        $this->numcarpetaId = $numcarpetaId;

        return $this;
    }

    /**
     * Get numcarpetaId
     *
     * @return integer 
     */
    public function getNumcarpetaId()
    {
        return $this->numcarpetaId;
    }

    /**
     * Set strde
     *
     * @param string $strde
     * @return Correosmensajes
     */
    public function setStrde($strde)
    {
        $this->strde = $strde;

        return $this;
    }

    /**
     * Get strde
     *
     * @return string 
     */
    public function getStrde()
    {
        return $this->strde;
    }

    /**
     * Set mempara
     *
     * @param string $mempara
     * @return Correosmensajes
     */
    public function setMempara($mempara)
    {
        $this->mempara = $mempara;

        return $this;
    }

    /**
     * Get mempara
     *
     * @return string 
     */
    public function getMempara()
    {
        return $this->mempara;
    }

    /**
     * Set memcopiapara
     *
     * @param string $memcopiapara
     * @return Correosmensajes
     */
    public function setMemcopiapara($memcopiapara)
    {
        $this->memcopiapara = $memcopiapara;

        return $this;
    }

    /**
     * Get memcopiapara
     *
     * @return string 
     */
    public function getMemcopiapara()
    {
        return $this->memcopiapara;
    }

    /**
     * Set memcopiaocultapara
     *
     * @param string $memcopiaocultapara
     * @return Correosmensajes
     */
    public function setMemcopiaocultapara($memcopiaocultapara)
    {
        $this->memcopiaocultapara = $memcopiaocultapara;

        return $this;
    }

    /**
     * Get memcopiaocultapara
     *
     * @return string 
     */
    public function getMemcopiaocultapara()
    {
        return $this->memcopiaocultapara;
    }

    /**
     * Set strasunto
     *
     * @param string $strasunto
     * @return Correosmensajes
     */
    public function setStrasunto($strasunto)
    {
        $this->strasunto = $strasunto;

        return $this;
    }

    /**
     * Get strasunto
     *
     * @return string 
     */
    public function getStrasunto()
    {
        return $this->strasunto;
    }

    /**
     * Set memtexto
     *
     * @param string $memtexto
     * @return Correosmensajes
     */
    public function setMemtexto($memtexto)
    {
        $this->memtexto = $memtexto;

        return $this;
    }

    /**
     * Get memtexto
     *
     * @return string 
     */
    public function getMemtexto()
    {
        return $this->memtexto;
    }

    /**
     * Set numtipoformato
     *
     * @param integer $numtipoformato
     * @return Correosmensajes
     */
    public function setNumtipoformato($numtipoformato)
    {
        $this->numtipoformato = $numtipoformato;

        return $this;
    }

    /**
     * Get numtipoformato
     *
     * @return integer 
     */
    public function getNumtipoformato()
    {
        return $this->numtipoformato;
    }

    /**
     * Set numtipoprioridad
     *
     * @param integer $numtipoprioridad
     * @return Correosmensajes
     */
    public function setNumtipoprioridad($numtipoprioridad)
    {
        $this->numtipoprioridad = $numtipoprioridad;

        return $this;
    }

    /**
     * Get numtipoprioridad
     *
     * @return integer 
     */
    public function getNumtipoprioridad()
    {
        return $this->numtipoprioridad;
    }

    /**
     * Set memarchivosadjuntos
     *
     * @param string $memarchivosadjuntos
     * @return Correosmensajes
     */
    public function setMemarchivosadjuntos($memarchivosadjuntos)
    {
        $this->memarchivosadjuntos = $memarchivosadjuntos;

        return $this;
    }

    /**
     * Get memarchivosadjuntos
     *
     * @return string 
     */
    public function getMemarchivosadjuntos()
    {
        return $this->memarchivosadjuntos;
    }

    /**
     * Set numtipocodificacionarchivos
     *
     * @param integer $numtipocodificacionarchivos
     * @return Correosmensajes
     */
    public function setNumtipocodificacionarchivos($numtipocodificacionarchivos)
    {
        $this->numtipocodificacionarchivos = $numtipocodificacionarchivos;

        return $this;
    }

    /**
     * Get numtipocodificacionarchivos
     *
     * @return integer 
     */
    public function getNumtipocodificacionarchivos()
    {
        return $this->numtipocodificacionarchivos;
    }

    /**
     * Set dteenviorecepcion
     *
     * @param \DateTime $dteenviorecepcion
     * @return Correosmensajes
     */
    public function setDteenviorecepcion($dteenviorecepcion)
    {
        $this->dteenviorecepcion = $dteenviorecepcion;

        return $this;
    }

    /**
     * Get dteenviorecepcion
     *
     * @return \DateTime 
     */
    public function getDteenviorecepcion()
    {
        return $this->dteenviorecepcion;
    }

    /**
     * Set dteenviadoleido
     *
     * @param \DateTime $dteenviadoleido
     * @return Correosmensajes
     */
    public function setDteenviadoleido($dteenviadoleido)
    {
        $this->dteenviadoleido = $dteenviadoleido;

        return $this;
    }

    /**
     * Get dteenviadoleido
     *
     * @return \DateTime 
     */
    public function getDteenviadoleido()
    {
        return $this->dteenviadoleido;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Correosmensajes
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
     * @return Correosmensajes
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
     * @return Correosmensajes
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
     * @return Correosmensajes
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
     * @return Correosmensajes
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
     * @return Correosmensajes
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
     * Set logseleccionado
     *
     * @param boolean $logseleccionado
     * @return Correosmensajes
     */
    public function setLogseleccionado($logseleccionado)
    {
        $this->logseleccionado = $logseleccionado;

        return $this;
    }

    /**
     * Get logseleccionado
     *
     * @return boolean 
     */
    public function getLogseleccionado()
    {
        return $this->logseleccionado;
    }
}
