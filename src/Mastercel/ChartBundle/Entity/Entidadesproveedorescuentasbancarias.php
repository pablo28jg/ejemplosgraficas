<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadesproveedorescuentasbancarias
 *
 * @ORM\Table(name="EntidadesProveedoresCuentasBancarias")
 * @ORM\Entity
 */
class Entidadesproveedorescuentasbancarias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numentidadId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaBancaria_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strcuentabancariaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumBanco_id", type="integer", nullable=true)
     */
    private $numbancoId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogOmision", type="boolean", nullable=true)
     */
    private $logomision = '0';



    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Entidadesproveedorescuentasbancarias
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
     * Set strcuentabancariaKy
     *
     * @param string $strcuentabancariaKy
     * @return Entidadesproveedorescuentasbancarias
     */
    public function setStrcuentabancariaKy($strcuentabancariaKy)
    {
        $this->strcuentabancariaKy = $strcuentabancariaKy;

        return $this;
    }

    /**
     * Get strcuentabancariaKy
     *
     * @return string 
     */
    public function getStrcuentabancariaKy()
    {
        return $this->strcuentabancariaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Entidadesproveedorescuentasbancarias
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
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Entidadesproveedorescuentasbancarias
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
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Entidadesproveedorescuentasbancarias
     */
    public function setNummonedaId($nummonedaId)
    {
        $this->nummonedaId = $nummonedaId;

        return $this;
    }

    /**
     * Get nummonedaId
     *
     * @return integer 
     */
    public function getNummonedaId()
    {
        return $this->nummonedaId;
    }

    /**
     * Set numbancoId
     *
     * @param integer $numbancoId
     * @return Entidadesproveedorescuentasbancarias
     */
    public function setNumbancoId($numbancoId)
    {
        $this->numbancoId = $numbancoId;

        return $this;
    }

    /**
     * Get numbancoId
     *
     * @return integer 
     */
    public function getNumbancoId()
    {
        return $this->numbancoId;
    }

    /**
     * Set logomision
     *
     * @param boolean $logomision
     * @return Entidadesproveedorescuentasbancarias
     */
    public function setLogomision($logomision)
    {
        $this->logomision = $logomision;

        return $this;
    }

    /**
     * Get logomision
     *
     * @return boolean 
     */
    public function getLogomision()
    {
        return $this->logomision;
    }
}
