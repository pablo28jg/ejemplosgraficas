<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediosenvio
 *
 * @ORM\Table(name="MediosEnvio", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrMedioEnvio_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Mediosenvio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMedioEnvio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummedioenvioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrMedioEnvio_ky", type="string", length=10, nullable=true)
     */
    private $strmedioenvioKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrRepresentante", type="string", length=60, nullable=true)
     */
    private $strrepresentante;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPuesto", type="string", length=60, nullable=true)
     */
    private $strpuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="StrRFC", type="string", length=15, nullable=true)
     */
    private $strrfc;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDireccion_id", type="integer", nullable=true)
     */
    private $numdireccionId = '0';

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
     * @ORM\Column(name="StrPaginaElectronica", type="string", length=60, nullable=true)
     */
    private $strpaginaelectronica;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCorreoElectronico_1", type="string", length=30, nullable=true)
     */
    private $strcorreoelectronico1;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCorreoElectronico_2", type="string", length=30, nullable=true)
     */
    private $strcorreoelectronico2;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCorreoElectronico_3", type="string", length=30, nullable=true)
     */
    private $strcorreoelectronico3;

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

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
     * Get nummedioenvioId
     *
     * @return integer 
     */
    public function getNummedioenvioId()
    {
        return $this->nummedioenvioId;
    }

    /**
     * Set strmedioenvioKy
     *
     * @param string $strmedioenvioKy
     * @return Mediosenvio
     */
    public function setStrmedioenvioKy($strmedioenvioKy)
    {
        $this->strmedioenvioKy = $strmedioenvioKy;

        return $this;
    }

    /**
     * Get strmedioenvioKy
     *
     * @return string 
     */
    public function getStrmedioenvioKy()
    {
        return $this->strmedioenvioKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Mediosenvio
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
     * Set strrepresentante
     *
     * @param string $strrepresentante
     * @return Mediosenvio
     */
    public function setStrrepresentante($strrepresentante)
    {
        $this->strrepresentante = $strrepresentante;

        return $this;
    }

    /**
     * Get strrepresentante
     *
     * @return string 
     */
    public function getStrrepresentante()
    {
        return $this->strrepresentante;
    }

    /**
     * Set strpuesto
     *
     * @param string $strpuesto
     * @return Mediosenvio
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
     * Set strrfc
     *
     * @param string $strrfc
     * @return Mediosenvio
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
     * Set numdireccionId
     *
     * @param integer $numdireccionId
     * @return Mediosenvio
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
     * Set strtelefono1
     *
     * @param string $strtelefono1
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * Set strpaginaelectronica
     *
     * @param string $strpaginaelectronica
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Mediosenvio
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
     * @return Mediosenvio
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
