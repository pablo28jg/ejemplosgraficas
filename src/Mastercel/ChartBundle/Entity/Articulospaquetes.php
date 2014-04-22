<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulospaquetes
 *
 * @ORM\Table(name="ArticulosPaquetes", indexes={@ORM\Index(name="Indice_1", columns={"StrArticulo_ky", "StrPaquete_ky"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"})})
 * @ORM\Entity
 */
class Articulospaquetes
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrPaquete_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strpaqueteKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strarticuloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="LogControlSerie", type="boolean", nullable=true)
     */
    private $logcontrolserie = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajePrecioVenta", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeprecioventa = '0';

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
     * Set strpaqueteKy
     *
     * @param string $strpaqueteKy
     * @return Articulospaquetes
     */
    public function setStrpaqueteKy($strpaqueteKy)
    {
        $this->strpaqueteKy = $strpaqueteKy;

        return $this;
    }

    /**
     * Get strpaqueteKy
     *
     * @return string 
     */
    public function getStrpaqueteKy()
    {
        return $this->strpaqueteKy;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Articulospaquetes
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
     * Set numorden
     *
     * @param integer $numorden
     * @return Articulospaquetes
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
     * @return Articulospaquetes
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
     * @return Articulospaquetes
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
     * @return Articulospaquetes
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
     * Set logcontrolserie
     *
     * @param boolean $logcontrolserie
     * @return Articulospaquetes
     */
    public function setLogcontrolserie($logcontrolserie)
    {
        $this->logcontrolserie = $logcontrolserie;

        return $this;
    }

    /**
     * Get logcontrolserie
     *
     * @return boolean 
     */
    public function getLogcontrolserie()
    {
        return $this->logcontrolserie;
    }

    /**
     * Set numporcentajeprecioventa
     *
     * @param float $numporcentajeprecioventa
     * @return Articulospaquetes
     */
    public function setNumporcentajeprecioventa($numporcentajeprecioventa)
    {
        $this->numporcentajeprecioventa = $numporcentajeprecioventa;

        return $this;
    }

    /**
     * Get numporcentajeprecioventa
     *
     * @return float 
     */
    public function getNumporcentajeprecioventa()
    {
        return $this->numporcentajeprecioventa;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Articulospaquetes
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
     * @return Articulospaquetes
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
