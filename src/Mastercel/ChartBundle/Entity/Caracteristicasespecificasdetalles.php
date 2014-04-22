<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristicasespecificasdetalles
 *
 * @ORM\Table(name="CaracteristicasEspecificasDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumCaracteristica_id", "NumOrden"})})
 * @ORM\Entity
 */
class Caracteristicasespecificasdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristicaEspecifica_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcaracteristicaespecificaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristicaGeneral_id", type="integer", nullable=true)
     */
    private $numcaracteristicageneralId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionCategoria", type="string", length=60, nullable=true)
     */
    private $strdescripcioncategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="StrVariable", type="string", length=60, nullable=true)
     */
    private $strvariable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogValorRequerido", type="boolean", nullable=true)
     */
    private $logvalorrequerido = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogVisible", type="boolean", nullable=true)
     */
    private $logvisible = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemFuncion", type="text", length=16, nullable=true)
     */
    private $memfuncion;



    /**
     * Get numcaracteristicaespecificaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaespecificaId()
    {
        return $this->numcaracteristicaespecificaId;
    }

    /**
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Caracteristicasespecificasdetalles
     */
    public function setNumcaracteristicaId($numcaracteristicaId)
    {
        $this->numcaracteristicaId = $numcaracteristicaId;

        return $this;
    }

    /**
     * Get numcaracteristicaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaId()
    {
        return $this->numcaracteristicaId;
    }

    /**
     * Set numcaracteristicageneralId
     *
     * @param integer $numcaracteristicageneralId
     * @return Caracteristicasespecificasdetalles
     */
    public function setNumcaracteristicageneralId($numcaracteristicageneralId)
    {
        $this->numcaracteristicageneralId = $numcaracteristicageneralId;

        return $this;
    }

    /**
     * Get numcaracteristicageneralId
     *
     * @return integer 
     */
    public function getNumcaracteristicageneralId()
    {
        return $this->numcaracteristicageneralId;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Caracteristicasespecificasdetalles
     */
    public function setNumorden($numorden)
    {
        $this->numorden = $numorden;

        return $this;
    }

    /**
     * Get numorden
     *
     * @return integer 
     */
    public function getNumorden()
    {
        return $this->numorden;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Caracteristicasespecificasdetalles
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
     * Set strdescripcioncategoria
     *
     * @param string $strdescripcioncategoria
     * @return Caracteristicasespecificasdetalles
     */
    public function setStrdescripcioncategoria($strdescripcioncategoria)
    {
        $this->strdescripcioncategoria = $strdescripcioncategoria;

        return $this;
    }

    /**
     * Get strdescripcioncategoria
     *
     * @return string 
     */
    public function getStrdescripcioncategoria()
    {
        return $this->strdescripcioncategoria;
    }

    /**
     * Set strvariable
     *
     * @param string $strvariable
     * @return Caracteristicasespecificasdetalles
     */
    public function setStrvariable($strvariable)
    {
        $this->strvariable = $strvariable;

        return $this;
    }

    /**
     * Get strvariable
     *
     * @return string 
     */
    public function getStrvariable()
    {
        return $this->strvariable;
    }

    /**
     * Set logvalorrequerido
     *
     * @param boolean $logvalorrequerido
     * @return Caracteristicasespecificasdetalles
     */
    public function setLogvalorrequerido($logvalorrequerido)
    {
        $this->logvalorrequerido = $logvalorrequerido;

        return $this;
    }

    /**
     * Get logvalorrequerido
     *
     * @return boolean 
     */
    public function getLogvalorrequerido()
    {
        return $this->logvalorrequerido;
    }

    /**
     * Set logvisible
     *
     * @param boolean $logvisible
     * @return Caracteristicasespecificasdetalles
     */
    public function setLogvisible($logvisible)
    {
        $this->logvisible = $logvisible;

        return $this;
    }

    /**
     * Get logvisible
     *
     * @return boolean 
     */
    public function getLogvisible()
    {
        return $this->logvisible;
    }

    /**
     * Set memfuncion
     *
     * @param string $memfuncion
     * @return Caracteristicasespecificasdetalles
     */
    public function setMemfuncion($memfuncion)
    {
        $this->memfuncion = $memfuncion;

        return $this;
    }

    /**
     * Get memfuncion
     *
     * @return string 
     */
    public function getMemfuncion()
    {
        return $this->memfuncion;
    }
}
