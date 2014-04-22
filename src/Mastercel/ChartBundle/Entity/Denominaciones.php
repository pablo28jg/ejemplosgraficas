<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Denominaciones
 *
 * @ORM\Table(name="Denominaciones", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrDenominacion_ky"}), @ORM\UniqueConstraint(name="Indice_2", columns={"NumTipoDenominacion", "NumValor"})}, indexes={@ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Denominaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumDenominacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numdenominacionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDenominacion_ky", type="string", length=10, nullable=true)
     */
    private $strdenominacionKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDenominacion", type="integer", nullable=true)
     */
    private $numtipodenominacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumValor", type="integer", nullable=true)
     */
    private $numvalor = '0';

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
     * Get numdenominacionId
     *
     * @return integer 
     */
    public function getNumdenominacionId()
    {
        return $this->numdenominacionId;
    }

    /**
     * Set strdenominacionKy
     *
     * @param string $strdenominacionKy
     * @return Denominaciones
     */
    public function setStrdenominacionKy($strdenominacionKy)
    {
        $this->strdenominacionKy = $strdenominacionKy;

        return $this;
    }

    /**
     * Get strdenominacionKy
     *
     * @return string 
     */
    public function getStrdenominacionKy()
    {
        return $this->strdenominacionKy;
    }

    /**
     * Set numtipodenominacion
     *
     * @param integer $numtipodenominacion
     * @return Denominaciones
     */
    public function setNumtipodenominacion($numtipodenominacion)
    {
        $this->numtipodenominacion = $numtipodenominacion;

        return $this;
    }

    /**
     * Get numtipodenominacion
     *
     * @return integer 
     */
    public function getNumtipodenominacion()
    {
        return $this->numtipodenominacion;
    }

    /**
     * Set numvalor
     *
     * @param integer $numvalor
     * @return Denominaciones
     */
    public function setNumvalor($numvalor)
    {
        $this->numvalor = $numvalor;

        return $this;
    }

    /**
     * Get numvalor
     *
     * @return integer 
     */
    public function getNumvalor()
    {
        return $this->numvalor;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Denominaciones
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
     * @return Denominaciones
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
     * @return Denominaciones
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
     * @return Denominaciones
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
     * @return Denominaciones
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
