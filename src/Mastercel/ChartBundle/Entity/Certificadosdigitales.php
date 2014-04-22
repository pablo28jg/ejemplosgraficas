<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificadosdigitales
 *
 * @ORM\Table(name="CertificadosDigitales", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrCertificadoDigital_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrNombre"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Certificadosdigitales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCertificadoDigital_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcertificadodigitalId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCertificadoDigital_ky", type="string", length=20, nullable=true)
     */
    private $strcertificadodigitalKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=60, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrRFC", type="string", length=13, nullable=true)
     */
    private $strrfc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteValidoDesde", type="datetime", nullable=true)
     */
    private $dtevalidodesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteValidoHasta", type="datetime", nullable=true)
     */
    private $dtevalidohasta;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ImgCertificadoDigital", type="text", length=16, nullable=true)
     */
    private $imgcertificadodigital;

    /**
     * @var string
     *
     * @ORM\Column(name="ImgLlavePrivada", type="text", length=16, nullable=true)
     */
    private $imgllaveprivada;

    /**
     * @var string
     *
     * @ORM\Column(name="StrContrasenaAcceso", type="string", length=100, nullable=true)
     */
    private $strcontrasenaacceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiasAvisoVigencia", type="integer", nullable=true)
     */
    private $numdiasavisovigencia = '0';

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
     * Get numcertificadodigitalId
     *
     * @return integer 
     */
    public function getNumcertificadodigitalId()
    {
        return $this->numcertificadodigitalId;
    }

    /**
     * Set strcertificadodigitalKy
     *
     * @param string $strcertificadodigitalKy
     * @return Certificadosdigitales
     */
    public function setStrcertificadodigitalKy($strcertificadodigitalKy)
    {
        $this->strcertificadodigitalKy = $strcertificadodigitalKy;

        return $this;
    }

    /**
     * Get strcertificadodigitalKy
     *
     * @return string 
     */
    public function getStrcertificadodigitalKy()
    {
        return $this->strcertificadodigitalKy;
    }

    /**
     * Set strnombre
     *
     * @param string $strnombre
     * @return Certificadosdigitales
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
     * Set strrfc
     *
     * @param string $strrfc
     * @return Certificadosdigitales
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
     * Set dtevalidodesde
     *
     * @param \DateTime $dtevalidodesde
     * @return Certificadosdigitales
     */
    public function setDtevalidodesde($dtevalidodesde)
    {
        $this->dtevalidodesde = $dtevalidodesde;

        return $this;
    }

    /**
     * Get dtevalidodesde
     *
     * @return \DateTime 
     */
    public function getDtevalidodesde()
    {
        return $this->dtevalidodesde;
    }

    /**
     * Set dtevalidohasta
     *
     * @param \DateTime $dtevalidohasta
     * @return Certificadosdigitales
     */
    public function setDtevalidohasta($dtevalidohasta)
    {
        $this->dtevalidohasta = $dtevalidohasta;

        return $this;
    }

    /**
     * Get dtevalidohasta
     *
     * @return \DateTime 
     */
    public function getDtevalidohasta()
    {
        return $this->dtevalidohasta;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Certificadosdigitales
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
     * Set imgcertificadodigital
     *
     * @param string $imgcertificadodigital
     * @return Certificadosdigitales
     */
    public function setImgcertificadodigital($imgcertificadodigital)
    {
        $this->imgcertificadodigital = $imgcertificadodigital;

        return $this;
    }

    /**
     * Get imgcertificadodigital
     *
     * @return string 
     */
    public function getImgcertificadodigital()
    {
        return $this->imgcertificadodigital;
    }

    /**
     * Set imgllaveprivada
     *
     * @param string $imgllaveprivada
     * @return Certificadosdigitales
     */
    public function setImgllaveprivada($imgllaveprivada)
    {
        $this->imgllaveprivada = $imgllaveprivada;

        return $this;
    }

    /**
     * Get imgllaveprivada
     *
     * @return string 
     */
    public function getImgllaveprivada()
    {
        return $this->imgllaveprivada;
    }

    /**
     * Set strcontrasenaacceso
     *
     * @param string $strcontrasenaacceso
     * @return Certificadosdigitales
     */
    public function setStrcontrasenaacceso($strcontrasenaacceso)
    {
        $this->strcontrasenaacceso = $strcontrasenaacceso;

        return $this;
    }

    /**
     * Get strcontrasenaacceso
     *
     * @return string 
     */
    public function getStrcontrasenaacceso()
    {
        return $this->strcontrasenaacceso;
    }

    /**
     * Set numdiasavisovigencia
     *
     * @param integer $numdiasavisovigencia
     * @return Certificadosdigitales
     */
    public function setNumdiasavisovigencia($numdiasavisovigencia)
    {
        $this->numdiasavisovigencia = $numdiasavisovigencia;

        return $this;
    }

    /**
     * Get numdiasavisovigencia
     *
     * @return integer 
     */
    public function getNumdiasavisovigencia()
    {
        return $this->numdiasavisovigencia;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Certificadosdigitales
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
     * @return Certificadosdigitales
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
     * @return Certificadosdigitales
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
     * @return Certificadosdigitales
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
     * @return Certificadosdigitales
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
     * @return Certificadosdigitales
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
