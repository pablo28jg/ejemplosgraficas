<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correoscarpetas
 *
 * @ORM\Table(name="CorreosCarpetas", indexes={@ORM\Index(name="Indice_1", columns={"NumJerarquia_id"}), @ORM\Index(name="Indice_2", columns={"NumCuentaCorreo_id"})})
 * @ORM\Entity
 */
class Correoscarpetas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCarpeta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcarpetaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=128, nullable=true)
     */
    private $strnombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumJerarquia_id", type="integer", nullable=true)
     */
    private $numjerarquiaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaCorreo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcuentacorreoId = '0';

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
     * Set numcarpetaId
     *
     * @param integer $numcarpetaId
     * @return Correoscarpetas
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
     * Set strnombre
     *
     * @param string $strnombre
     * @return Correoscarpetas
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
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Correoscarpetas
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
     * Set numjerarquiaId
     *
     * @param integer $numjerarquiaId
     * @return Correoscarpetas
     */
    public function setNumjerarquiaId($numjerarquiaId)
    {
        $this->numjerarquiaId = $numjerarquiaId;

        return $this;
    }

    /**
     * Get numjerarquiaId
     *
     * @return integer 
     */
    public function getNumjerarquiaId()
    {
        return $this->numjerarquiaId;
    }

    /**
     * Set numcuentacorreoId
     *
     * @param integer $numcuentacorreoId
     * @return Correoscarpetas
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Correoscarpetas
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
     * @return Correoscarpetas
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
     * @return Correoscarpetas
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
     * @return Correoscarpetas
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
     * @return Correoscarpetas
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
