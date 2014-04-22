<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licencias
 *
 * @ORM\Table(name="Licencias", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrIdentificadorEquipo_ky", "NumSesion_id"})})
 * @ORM\Entity
 */
class Licencias
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie_ky", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strserieKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrIdentificadorEquipo_ky", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stridentificadorequipoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSesion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numsesionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoActivacion", type="string", length=60, nullable=true)
     */
    private $strcodigoactivacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAutenticacion", type="integer", nullable=true)
     */
    private $numautenticacion = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteAutenticacion", type="datetime", nullable=true)
     */
    private $dteautenticacion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAutenticacion", type="string", length=60, nullable=true)
     */
    private $strautenticacion;



    /**
     * Set strserieKy
     *
     * @param string $strserieKy
     * @return Licencias
     */
    public function setStrserieKy($strserieKy)
    {
        $this->strserieKy = $strserieKy;

        return $this;
    }

    /**
     * Get strserieKy
     *
     * @return string 
     */
    public function getStrserieKy()
    {
        return $this->strserieKy;
    }

    /**
     * Set stridentificadorequipoKy
     *
     * @param string $stridentificadorequipoKy
     * @return Licencias
     */
    public function setStridentificadorequipoKy($stridentificadorequipoKy)
    {
        $this->stridentificadorequipoKy = $stridentificadorequipoKy;

        return $this;
    }

    /**
     * Get stridentificadorequipoKy
     *
     * @return string 
     */
    public function getStridentificadorequipoKy()
    {
        return $this->stridentificadorequipoKy;
    }

    /**
     * Set numsesionId
     *
     * @param integer $numsesionId
     * @return Licencias
     */
    public function setNumsesionId($numsesionId)
    {
        $this->numsesionId = $numsesionId;

        return $this;
    }

    /**
     * Get numsesionId
     *
     * @return integer 
     */
    public function getNumsesionId()
    {
        return $this->numsesionId;
    }

    /**
     * Set strcodigoactivacion
     *
     * @param string $strcodigoactivacion
     * @return Licencias
     */
    public function setStrcodigoactivacion($strcodigoactivacion)
    {
        $this->strcodigoactivacion = $strcodigoactivacion;

        return $this;
    }

    /**
     * Get strcodigoactivacion
     *
     * @return string 
     */
    public function getStrcodigoactivacion()
    {
        return $this->strcodigoactivacion;
    }

    /**
     * Set numautenticacion
     *
     * @param integer $numautenticacion
     * @return Licencias
     */
    public function setNumautenticacion($numautenticacion)
    {
        $this->numautenticacion = $numautenticacion;

        return $this;
    }

    /**
     * Get numautenticacion
     *
     * @return integer 
     */
    public function getNumautenticacion()
    {
        return $this->numautenticacion;
    }

    /**
     * Set dteautenticacion
     *
     * @param \DateTime $dteautenticacion
     * @return Licencias
     */
    public function setDteautenticacion($dteautenticacion)
    {
        $this->dteautenticacion = $dteautenticacion;

        return $this;
    }

    /**
     * Get dteautenticacion
     *
     * @return \DateTime 
     */
    public function getDteautenticacion()
    {
        return $this->dteautenticacion;
    }

    /**
     * Set strautenticacion
     *
     * @param string $strautenticacion
     * @return Licencias
     */
    public function setStrautenticacion($strautenticacion)
    {
        $this->strautenticacion = $strautenticacion;

        return $this;
    }

    /**
     * Get strautenticacion
     *
     * @return string 
     */
    public function getStrautenticacion()
    {
        return $this->strautenticacion;
    }
}
