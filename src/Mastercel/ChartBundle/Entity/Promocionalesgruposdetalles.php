<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promocionalesgruposdetalles
 *
 * @ORM\Table(name="PromocionalesGruposDetalles", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"NumPromocionalGrupo_id", "StrArticulo_ky", "NumOpcion_id"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrArticulo_ky", "NumPromocionalGrupo_id"})})
 * @ORM\Entity
 */
class Promocionalesgruposdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPromocionalGrupo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numpromocionalgrupoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedida_id", type="integer", nullable=true)
     */
    private $numunidadmedidaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelPrecio", type="integer", nullable=true)
     */
    private $numnivelprecio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrecioVenta", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOpcion_id", type="integer", nullable=true)
     */
    private $numopcionId = '0';



    /**
     * Set numpromocionalgrupoId
     *
     * @param integer $numpromocionalgrupoId
     * @return Promocionalesgruposdetalles
     */
    public function setNumpromocionalgrupoId($numpromocionalgrupoId)
    {
        $this->numpromocionalgrupoId = $numpromocionalgrupoId;

        return $this;
    }

    /**
     * Get numpromocionalgrupoId
     *
     * @return integer 
     */
    public function getNumpromocionalgrupoId()
    {
        return $this->numpromocionalgrupoId;
    }

    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Promocionalesgruposdetalles
     */
    public function setNumconsecutivoId($numconsecutivoId)
    {
        $this->numconsecutivoId = $numconsecutivoId;

        return $this;
    }

    /**
     * Get numconsecutivoId
     *
     * @return integer 
     */
    public function getNumconsecutivoId()
    {
        return $this->numconsecutivoId;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Promocionalesgruposdetalles
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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Promocionalesgruposdetalles
     */
    public function setStrarticuloKy($strarticuloKy)
    {
        $this->strarticuloKy = $strarticuloKy;

        return $this;
    }

    /**
     * Get strarticuloKy
     *
     * @return string 
     */
    public function getStrarticuloKy()
    {
        return $this->strarticuloKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Promocionalesgruposdetalles
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
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Promocionalesgruposdetalles
     */
    public function setNumunidadmedidaId($numunidadmedidaId)
    {
        $this->numunidadmedidaId = $numunidadmedidaId;

        return $this;
    }

    /**
     * Get numunidadmedidaId
     *
     * @return integer 
     */
    public function getNumunidadmedidaId()
    {
        return $this->numunidadmedidaId;
    }

    /**
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Promocionalesgruposdetalles
     */
    public function setNumcantidad($numcantidad)
    {
        $this->numcantidad = $numcantidad;

        return $this;
    }

    /**
     * Get numcantidad
     *
     * @return float 
     */
    public function getNumcantidad()
    {
        return $this->numcantidad;
    }

    /**
     * Set numnivelprecio
     *
     * @param integer $numnivelprecio
     * @return Promocionalesgruposdetalles
     */
    public function setNumnivelprecio($numnivelprecio)
    {
        $this->numnivelprecio = $numnivelprecio;

        return $this;
    }

    /**
     * Get numnivelprecio
     *
     * @return integer 
     */
    public function getNumnivelprecio()
    {
        return $this->numnivelprecio;
    }

    /**
     * Set numprecioventa
     *
     * @param float $numprecioventa
     * @return Promocionalesgruposdetalles
     */
    public function setNumprecioventa($numprecioventa)
    {
        $this->numprecioventa = $numprecioventa;

        return $this;
    }

    /**
     * Get numprecioventa
     *
     * @return float 
     */
    public function getNumprecioventa()
    {
        return $this->numprecioventa;
    }

    /**
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Promocionalesgruposdetalles
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
     * Set numopcionId
     *
     * @param integer $numopcionId
     * @return Promocionalesgruposdetalles
     */
    public function setNumopcionId($numopcionId)
    {
        $this->numopcionId = $numopcionId;

        return $this;
    }

    /**
     * Get numopcionId
     *
     * @return integer 
     */
    public function getNumopcionId()
    {
        return $this->numopcionId;
    }
}
