<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristicasespecificas
 *
 * @ORM\Table(name="CaracteristicasEspecificas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrCaracteristica_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Caracteristicasespecificas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcaracteristicaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCaracteristica_ky", type="string", length=10, nullable=true)
     */
    private $strcaracteristicaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVariable_id", type="integer", nullable=true)
     */
    private $numvariableId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemFuncion", type="text", length=16, nullable=true)
     */
    private $memfuncion;

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
     * Get numcaracteristicaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaId()
    {
        return $this->numcaracteristicaId;
    }

    /**
     * Set strcaracteristicaKy
     *
     * @param string $strcaracteristicaKy
     * @return Caracteristicasespecificas
     */
    public function setStrcaracteristicaKy($strcaracteristicaKy)
    {
        $this->strcaracteristicaKy = $strcaracteristicaKy;

        return $this;
    }

    /**
     * Get strcaracteristicaKy
     *
     * @return string 
     */
    public function getStrcaracteristicaKy()
    {
        return $this->strcaracteristicaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Caracteristicasespecificas
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
     * Set numvariableId
     *
     * @param integer $numvariableId
     * @return Caracteristicasespecificas
     */
    public function setNumvariableId($numvariableId)
    {
        $this->numvariableId = $numvariableId;

        return $this;
    }

    /**
     * Get numvariableId
     *
     * @return integer 
     */
    public function getNumvariableId()
    {
        return $this->numvariableId;
    }

    /**
     * Set memfuncion
     *
     * @param string $memfuncion
     * @return Caracteristicasespecificas
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

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Caracteristicasespecificas
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
     * @return Caracteristicasespecificas
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
     * @return Caracteristicasespecificas
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
     * @return Caracteristicasespecificas
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
     * @return Caracteristicasespecificas
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
