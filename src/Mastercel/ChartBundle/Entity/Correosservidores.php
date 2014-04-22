<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correosservidores
 *
 * @ORM\Table(name="CorreosServidores")
 * @ORM\Entity
 */
class Correosservidores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumServidorCorreo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numservidorcorreoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrServidor", type="string", length=128, nullable=true)
     */
    private $strservidor;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPuerto", type="integer", nullable=true)
     */
    private $numpuerto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrUsuario", type="string", length=128, nullable=true)
     */
    private $strusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="StrContrasena", type="string", length=128, nullable=true)
     */
    private $strcontrasena;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogHabilitarSASL", type="boolean", nullable=true)
     */
    private $loghabilitarsasl = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAutenticacion", type="integer", nullable=true)
     */
    private $numtipoautenticacion = '0';

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
     * Get numservidorcorreoId
     *
     * @return integer 
     */
    public function getNumservidorcorreoId()
    {
        return $this->numservidorcorreoId;
    }

    /**
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Correosservidores
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
     * Set strservidor
     *
     * @param string $strservidor
     * @return Correosservidores
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
     * Set numpuerto
     *
     * @param integer $numpuerto
     * @return Correosservidores
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
     * Set strusuario
     *
     * @param string $strusuario
     * @return Correosservidores
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
     * @return Correosservidores
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
     * Set loghabilitarsasl
     *
     * @param boolean $loghabilitarsasl
     * @return Correosservidores
     */
    public function setLoghabilitarsasl($loghabilitarsasl)
    {
        $this->loghabilitarsasl = $loghabilitarsasl;

        return $this;
    }

    /**
     * Get loghabilitarsasl
     *
     * @return boolean 
     */
    public function getLoghabilitarsasl()
    {
        return $this->loghabilitarsasl;
    }

    /**
     * Set numtipoautenticacion
     *
     * @param integer $numtipoautenticacion
     * @return Correosservidores
     */
    public function setNumtipoautenticacion($numtipoautenticacion)
    {
        $this->numtipoautenticacion = $numtipoautenticacion;

        return $this;
    }

    /**
     * Get numtipoautenticacion
     *
     * @return integer 
     */
    public function getNumtipoautenticacion()
    {
        return $this->numtipoautenticacion;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Correosservidores
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
     * @return Correosservidores
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
     * @return Correosservidores
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
     * @return Correosservidores
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
     * @return Correosservidores
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
