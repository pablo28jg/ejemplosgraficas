<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serviciosexpedicion
 *
 * @ORM\Table(name="ServiciosExpedicion", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrServicioExpedicion_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrNombre"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Serviciosexpedicion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumServicioExpedicion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numservicioexpedicionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrServicioExpedicion_ky", type="string", length=10, nullable=true)
     */
    private $strservicioexpedicionKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=60, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrURL", type="string", length=120, nullable=true)
     */
    private $strurl;

    /**
     * @var string
     *
     * @ORM\Column(name="StrUsuario", type="string", length=100, nullable=true)
     */
    private $strusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="StrContrasena", type="string", length=100, nullable=true)
     */
    private $strcontrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="StrInterface", type="string", length=30, nullable=true)
     */
    private $strinterface;

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
     * Get numservicioexpedicionId
     *
     * @return integer 
     */
    public function getNumservicioexpedicionId()
    {
        return $this->numservicioexpedicionId;
    }

    /**
     * Set strservicioexpedicionKy
     *
     * @param string $strservicioexpedicionKy
     * @return Serviciosexpedicion
     */
    public function setStrservicioexpedicionKy($strservicioexpedicionKy)
    {
        $this->strservicioexpedicionKy = $strservicioexpedicionKy;

        return $this;
    }

    /**
     * Get strservicioexpedicionKy
     *
     * @return string 
     */
    public function getStrservicioexpedicionKy()
    {
        return $this->strservicioexpedicionKy;
    }

    /**
     * Set strnombre
     *
     * @param string $strnombre
     * @return Serviciosexpedicion
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
     * Set strurl
     *
     * @param string $strurl
     * @return Serviciosexpedicion
     */
    public function setStrurl($strurl)
    {
        $this->strurl = $strurl;

        return $this;
    }

    /**
     * Get strurl
     *
     * @return string 
     */
    public function getStrurl()
    {
        return $this->strurl;
    }

    /**
     * Set strusuario
     *
     * @param string $strusuario
     * @return Serviciosexpedicion
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
     * @return Serviciosexpedicion
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
     * Set strinterface
     *
     * @param string $strinterface
     * @return Serviciosexpedicion
     */
    public function setStrinterface($strinterface)
    {
        $this->strinterface = $strinterface;

        return $this;
    }

    /**
     * Get strinterface
     *
     * @return string 
     */
    public function getStrinterface()
    {
        return $this->strinterface;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Serviciosexpedicion
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
     * @return Serviciosexpedicion
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
     * @return Serviciosexpedicion
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
     * @return Serviciosexpedicion
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
     * @return Serviciosexpedicion
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
