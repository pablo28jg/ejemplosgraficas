<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoriascostoproduccion
 *
 * @ORM\Table(name="CategoriasCostoProduccion", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrCategoria_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumTipoClasificacionCosto"}), @ORM\Index(name="Indice_4", columns={"NumTipoElementoCosto"}), @ORM\Index(name="Indice_5", columns={"DteActualizacion"}), @ORM\Index(name="Indice_6", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Categoriascostoproduccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcategoriaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCategoria_ky", type="string", length=10, nullable=true)
     */
    private $strcategoriaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoClasificacionCosto", type="integer", nullable=true)
     */
    private $numtipoclasificacioncosto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoElementoCosto", type="integer", nullable=true)
     */
    private $numtipoelementocosto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPatronCosto", type="integer", nullable=true)
     */
    private $numtipopatroncosto = '0';

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
     * Get numcategoriaId
     *
     * @return integer 
     */
    public function getNumcategoriaId()
    {
        return $this->numcategoriaId;
    }

    /**
     * Set strcategoriaKy
     *
     * @param string $strcategoriaKy
     * @return Categoriascostoproduccion
     */
    public function setStrcategoriaKy($strcategoriaKy)
    {
        $this->strcategoriaKy = $strcategoriaKy;

        return $this;
    }

    /**
     * Get strcategoriaKy
     *
     * @return string 
     */
    public function getStrcategoriaKy()
    {
        return $this->strcategoriaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Categoriascostoproduccion
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
     * Set numtipoclasificacioncosto
     *
     * @param integer $numtipoclasificacioncosto
     * @return Categoriascostoproduccion
     */
    public function setNumtipoclasificacioncosto($numtipoclasificacioncosto)
    {
        $this->numtipoclasificacioncosto = $numtipoclasificacioncosto;

        return $this;
    }

    /**
     * Get numtipoclasificacioncosto
     *
     * @return integer 
     */
    public function getNumtipoclasificacioncosto()
    {
        return $this->numtipoclasificacioncosto;
    }

    /**
     * Set numtipoelementocosto
     *
     * @param integer $numtipoelementocosto
     * @return Categoriascostoproduccion
     */
    public function setNumtipoelementocosto($numtipoelementocosto)
    {
        $this->numtipoelementocosto = $numtipoelementocosto;

        return $this;
    }

    /**
     * Get numtipoelementocosto
     *
     * @return integer 
     */
    public function getNumtipoelementocosto()
    {
        return $this->numtipoelementocosto;
    }

    /**
     * Set numtipopatroncosto
     *
     * @param integer $numtipopatroncosto
     * @return Categoriascostoproduccion
     */
    public function setNumtipopatroncosto($numtipopatroncosto)
    {
        $this->numtipopatroncosto = $numtipopatroncosto;

        return $this;
    }

    /**
     * Get numtipopatroncosto
     *
     * @return integer 
     */
    public function getNumtipopatroncosto()
    {
        return $this->numtipopatroncosto;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Categoriascostoproduccion
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
     * @return Categoriascostoproduccion
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
     * @return Categoriascostoproduccion
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
     * @return Categoriascostoproduccion
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
     * @return Categoriascostoproduccion
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
