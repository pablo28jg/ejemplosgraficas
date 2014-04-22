<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correoscuentas
 *
 * @ORM\Table(name="CorreosCuentas", indexes={@ORM\Index(name="Indice_1", columns={"StrNombre"}), @ORM\Index(name="Indice_2", columns={"NumConfiguracionCorreo_id"}), @ORM\Index(name="Indice_3", columns={"NumServidorCorreoEntrante_id"}), @ORM\Index(name="Indice_4", columns={"NumServidorCorreoSaliente_id"}), @ORM\Index(name="Indice_5", columns={"NumEntidad_id"})})
 * @ORM\Entity
 */
class Correoscuentas
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
     * @ORM\Column(name="StrNombre", type="string", length=128, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=256, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDireccionCorreo", type="string", length=128, nullable=true)
     */
    private $strdireccioncorreo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrContrasena", type="string", length=128, nullable=true)
     */
    private $strcontrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="StrMostrarComo", type="string", length=128, nullable=true)
     */
    private $strmostrarcomo;

    /**
     * @var string
     *
     * @ORM\Column(name="MemFirma", type="text", length=16, nullable=true)
     */
    private $memfirma;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConfiguracionCorreo_id", type="integer", nullable=true)
     */
    private $numconfiguracioncorreoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumServidorCorreoEntrante_id", type="integer", nullable=true)
     */
    private $numservidorcorreoentranteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumServidorCorreoSaliente_id", type="integer", nullable=true)
     */
    private $numservidorcorreosalienteId = '0';

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
     * @return Correoscuentas
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
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Correoscuentas
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
     * Set strdireccioncorreo
     *
     * @param string $strdireccioncorreo
     * @return Correoscuentas
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
     * Set strcontrasena
     *
     * @param string $strcontrasena
     * @return Correoscuentas
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
     * Set strmostrarcomo
     *
     * @param string $strmostrarcomo
     * @return Correoscuentas
     */
    public function setStrmostrarcomo($strmostrarcomo)
    {
        $this->strmostrarcomo = $strmostrarcomo;

        return $this;
    }

    /**
     * Get strmostrarcomo
     *
     * @return string 
     */
    public function getStrmostrarcomo()
    {
        return $this->strmostrarcomo;
    }

    /**
     * Set memfirma
     *
     * @param string $memfirma
     * @return Correoscuentas
     */
    public function setMemfirma($memfirma)
    {
        $this->memfirma = $memfirma;

        return $this;
    }

    /**
     * Get memfirma
     *
     * @return string 
     */
    public function getMemfirma()
    {
        return $this->memfirma;
    }

    /**
     * Set numconfiguracioncorreoId
     *
     * @param integer $numconfiguracioncorreoId
     * @return Correoscuentas
     */
    public function setNumconfiguracioncorreoId($numconfiguracioncorreoId)
    {
        $this->numconfiguracioncorreoId = $numconfiguracioncorreoId;

        return $this;
    }

    /**
     * Get numconfiguracioncorreoId
     *
     * @return integer 
     */
    public function getNumconfiguracioncorreoId()
    {
        return $this->numconfiguracioncorreoId;
    }

    /**
     * Set numservidorcorreoentranteId
     *
     * @param integer $numservidorcorreoentranteId
     * @return Correoscuentas
     */
    public function setNumservidorcorreoentranteId($numservidorcorreoentranteId)
    {
        $this->numservidorcorreoentranteId = $numservidorcorreoentranteId;

        return $this;
    }

    /**
     * Get numservidorcorreoentranteId
     *
     * @return integer 
     */
    public function getNumservidorcorreoentranteId()
    {
        return $this->numservidorcorreoentranteId;
    }

    /**
     * Set numservidorcorreosalienteId
     *
     * @param integer $numservidorcorreosalienteId
     * @return Correoscuentas
     */
    public function setNumservidorcorreosalienteId($numservidorcorreosalienteId)
    {
        $this->numservidorcorreosalienteId = $numservidorcorreosalienteId;

        return $this;
    }

    /**
     * Get numservidorcorreosalienteId
     *
     * @return integer 
     */
    public function getNumservidorcorreosalienteId()
    {
        return $this->numservidorcorreosalienteId;
    }

    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Correoscuentas
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
     * @return Correoscuentas
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
     * @return Correoscuentas
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
     * @return Correoscuentas
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
     * @return Correoscuentas
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
     * @return Correoscuentas
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
