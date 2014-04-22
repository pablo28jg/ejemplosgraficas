<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablascampos
 *
 * @ORM\Table(name="TablasCampos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"NumTabla_id", "StrCampo_ky"})})
 * @ORM\Entity
 */
class Tablascampos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTabla_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtablaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCampo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcampoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCampo_ky", type="string", length=100, nullable=true)
     */
    private $strcampoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLongitud", type="integer", nullable=true)
     */
    private $numlongitud = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrValorMinimo", type="string", length=10, nullable=true)
     */
    private $strvalorminimo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrValorMaximo", type="string", length=10, nullable=true)
     */
    private $strvalormaximo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrValorOmision", type="string", length=10, nullable=true)
     */
    private $strvaloromision;

    /**
     * @var string
     *
     * @ORM\Column(name="StrFormato", type="string", length=10, nullable=true)
     */
    private $strformato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRequerido", type="boolean", nullable=true)
     */
    private $logrequerido = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDato", type="integer", nullable=true)
     */
    private $numtipodato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoLlave", type="integer", nullable=true)
     */
    private $numtipollave = '0';



    /**
     * Set numtablaId
     *
     * @param integer $numtablaId
     * @return Tablascampos
     */
    public function setNumtablaId($numtablaId)
    {
        $this->numtablaId = $numtablaId;

        return $this;
    }

    /**
     * Get numtablaId
     *
     * @return integer 
     */
    public function getNumtablaId()
    {
        return $this->numtablaId;
    }

    /**
     * Set numcampoId
     *
     * @param integer $numcampoId
     * @return Tablascampos
     */
    public function setNumcampoId($numcampoId)
    {
        $this->numcampoId = $numcampoId;

        return $this;
    }

    /**
     * Get numcampoId
     *
     * @return integer 
     */
    public function getNumcampoId()
    {
        return $this->numcampoId;
    }

    /**
     * Set strcampoKy
     *
     * @param string $strcampoKy
     * @return Tablascampos
     */
    public function setStrcampoKy($strcampoKy)
    {
        $this->strcampoKy = $strcampoKy;

        return $this;
    }

    /**
     * Get strcampoKy
     *
     * @return string 
     */
    public function getStrcampoKy()
    {
        return $this->strcampoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tablascampos
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
     * Set numlongitud
     *
     * @param integer $numlongitud
     * @return Tablascampos
     */
    public function setNumlongitud($numlongitud)
    {
        $this->numlongitud = $numlongitud;

        return $this;
    }

    /**
     * Get numlongitud
     *
     * @return integer 
     */
    public function getNumlongitud()
    {
        return $this->numlongitud;
    }

    /**
     * Set strvalorminimo
     *
     * @param string $strvalorminimo
     * @return Tablascampos
     */
    public function setStrvalorminimo($strvalorminimo)
    {
        $this->strvalorminimo = $strvalorminimo;

        return $this;
    }

    /**
     * Get strvalorminimo
     *
     * @return string 
     */
    public function getStrvalorminimo()
    {
        return $this->strvalorminimo;
    }

    /**
     * Set strvalormaximo
     *
     * @param string $strvalormaximo
     * @return Tablascampos
     */
    public function setStrvalormaximo($strvalormaximo)
    {
        $this->strvalormaximo = $strvalormaximo;

        return $this;
    }

    /**
     * Get strvalormaximo
     *
     * @return string 
     */
    public function getStrvalormaximo()
    {
        return $this->strvalormaximo;
    }

    /**
     * Set strvaloromision
     *
     * @param string $strvaloromision
     * @return Tablascampos
     */
    public function setStrvaloromision($strvaloromision)
    {
        $this->strvaloromision = $strvaloromision;

        return $this;
    }

    /**
     * Get strvaloromision
     *
     * @return string 
     */
    public function getStrvaloromision()
    {
        return $this->strvaloromision;
    }

    /**
     * Set strformato
     *
     * @param string $strformato
     * @return Tablascampos
     */
    public function setStrformato($strformato)
    {
        $this->strformato = $strformato;

        return $this;
    }

    /**
     * Get strformato
     *
     * @return string 
     */
    public function getStrformato()
    {
        return $this->strformato;
    }

    /**
     * Set logrequerido
     *
     * @param boolean $logrequerido
     * @return Tablascampos
     */
    public function setLogrequerido($logrequerido)
    {
        $this->logrequerido = $logrequerido;

        return $this;
    }

    /**
     * Get logrequerido
     *
     * @return boolean 
     */
    public function getLogrequerido()
    {
        return $this->logrequerido;
    }

    /**
     * Set numtipodato
     *
     * @param integer $numtipodato
     * @return Tablascampos
     */
    public function setNumtipodato($numtipodato)
    {
        $this->numtipodato = $numtipodato;

        return $this;
    }

    /**
     * Get numtipodato
     *
     * @return integer 
     */
    public function getNumtipodato()
    {
        return $this->numtipodato;
    }

    /**
     * Set numtipollave
     *
     * @param integer $numtipollave
     * @return Tablascampos
     */
    public function setNumtipollave($numtipollave)
    {
        $this->numtipollave = $numtipollave;

        return $this;
    }

    /**
     * Get numtipollave
     *
     * @return integer 
     */
    public function getNumtipollave()
    {
        return $this->numtipollave;
    }
}
