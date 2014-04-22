<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontablesgrupos
 *
 * @ORM\Table(name="CuentasContablesGrupos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrGrupo_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Cuentascontablesgrupos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numgrupoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrGrupo_ky", type="string", length=10, nullable=true)
     */
    private $strgrupoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCategoriaCuenta", type="integer", nullable=true)
     */
    private $numtipocategoriacuenta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCuenta", type="integer", nullable=true)
     */
    private $numtipocuenta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoNaturaleza", type="integer", nullable=true)
     */
    private $numtiponaturaleza = '0';

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
     * Get numgrupoId
     *
     * @return integer 
     */
    public function getNumgrupoId()
    {
        return $this->numgrupoId;
    }

    /**
     * Set strgrupoKy
     *
     * @param string $strgrupoKy
     * @return Cuentascontablesgrupos
     */
    public function setStrgrupoKy($strgrupoKy)
    {
        $this->strgrupoKy = $strgrupoKy;

        return $this;
    }

    /**
     * Get strgrupoKy
     *
     * @return string 
     */
    public function getStrgrupoKy()
    {
        return $this->strgrupoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Cuentascontablesgrupos
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
     * Set numtipocategoriacuenta
     *
     * @param integer $numtipocategoriacuenta
     * @return Cuentascontablesgrupos
     */
    public function setNumtipocategoriacuenta($numtipocategoriacuenta)
    {
        $this->numtipocategoriacuenta = $numtipocategoriacuenta;

        return $this;
    }

    /**
     * Get numtipocategoriacuenta
     *
     * @return integer 
     */
    public function getNumtipocategoriacuenta()
    {
        return $this->numtipocategoriacuenta;
    }

    /**
     * Set numtipocuenta
     *
     * @param integer $numtipocuenta
     * @return Cuentascontablesgrupos
     */
    public function setNumtipocuenta($numtipocuenta)
    {
        $this->numtipocuenta = $numtipocuenta;

        return $this;
    }

    /**
     * Get numtipocuenta
     *
     * @return integer 
     */
    public function getNumtipocuenta()
    {
        return $this->numtipocuenta;
    }

    /**
     * Set numtiponaturaleza
     *
     * @param integer $numtiponaturaleza
     * @return Cuentascontablesgrupos
     */
    public function setNumtiponaturaleza($numtiponaturaleza)
    {
        $this->numtiponaturaleza = $numtiponaturaleza;

        return $this;
    }

    /**
     * Get numtiponaturaleza
     *
     * @return integer 
     */
    public function getNumtiponaturaleza()
    {
        return $this->numtiponaturaleza;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Cuentascontablesgrupos
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
     * @return Cuentascontablesgrupos
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
     * @return Cuentascontablesgrupos
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
     * @return Cuentascontablesgrupos
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
     * @return Cuentascontablesgrupos
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
