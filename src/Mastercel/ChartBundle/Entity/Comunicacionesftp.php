<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunicacionesftp
 *
 * @ORM\Table(name="ComunicacionesFTP", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Comunicacionesftp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumFTP_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numftpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrServidor", type="string", length=60, nullable=true)
     */
    private $strservidor;

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
     * @var integer
     *
     * @ORM\Column(name="NumPuerto", type="integer", nullable=true)
     */
    private $numpuerto = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPasivo", type="boolean", nullable=true)
     */
    private $logpasivo = '0';

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
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get numftpId
     *
     * @return integer 
     */
    public function getNumftpId()
    {
        return $this->numftpId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Comunicacionesftp
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
     * Set strservidor
     *
     * @param string $strservidor
     * @return Comunicacionesftp
     */
    public function setStrservidor($strservidor)
    {
        $this->strservidor = $strservidor;

        return $this;
    }

    /**
     * Get strservidor
     *
     * @return string 
     */
    public function getStrservidor()
    {
        return $this->strservidor;
    }

    /**
     * Set strusuario
     *
     * @param string $strusuario
     * @return Comunicacionesftp
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
     * @return Comunicacionesftp
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
     * Set numpuerto
     *
     * @param integer $numpuerto
     * @return Comunicacionesftp
     */
    public function setNumpuerto($numpuerto)
    {
        $this->numpuerto = $numpuerto;

        return $this;
    }

    /**
     * Get numpuerto
     *
     * @return integer 
     */
    public function getNumpuerto()
    {
        return $this->numpuerto;
    }

    /**
     * Set logpasivo
     *
     * @param boolean $logpasivo
     * @return Comunicacionesftp
     */
    public function setLogpasivo($logpasivo)
    {
        $this->logpasivo = $logpasivo;

        return $this;
    }

    /**
     * Get logpasivo
     *
     * @return boolean 
     */
    public function getLogpasivo()
    {
        return $this->logpasivo;
    }

    /**
     * Set numintentosconexion
     *
     * @param integer $numintentosconexion
     * @return Comunicacionesftp
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
     * @return Comunicacionesftp
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
     * @return Comunicacionesftp
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
     * @return Comunicacionesftp
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
     * @return Comunicacionesftp
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
     * @return Comunicacionesftp
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
     * @return Comunicacionesftp
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
