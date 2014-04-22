<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulosprecios
 *
 * @ORM\Table(name="ArticulosPrecios", indexes={@ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_2", columns={"StrModelo_ky", "NumListaPrecio_id", "NumNivelPrecio_id"})})
 * @ORM\Entity
 */
class Articulosprecios
{
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
     * @ORM\Column(name="NumListaPrecio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numlistaprecioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelPrecio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numnivelprecioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrModelo_ky", type="string", length=20, nullable=true)
     */
    private $strmodeloKy;

    /**
     * @var float
     *
     * @ORM\Column(name="NumMargenUtilidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $nummargenutilidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMonedaVenta_id", type="integer", nullable=true)
     */
    private $nummonedaventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedidaVenta_id", type="integer", nullable=true)
     */
    private $numunidadmedidaventaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPrctjDescuentoMaximo", type="float", precision=53, scale=0, nullable=true)
     */
    private $numprctjdescuentomaximo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioVenta", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCambioPrecio", type="datetime", nullable=true)
     */
    private $dtecambioprecio;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_1_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_2_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_3_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_4_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_5_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_6_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventa6Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseComision_1_id", type="integer", nullable=true)
     */
    private $numclasecomision1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseComision_2_id", type="integer", nullable=true)
     */
    private $numclasecomision2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseComision_3_id", type="integer", nullable=true)
     */
    private $numclasecomision3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseComision_4_id", type="integer", nullable=true)
     */
    private $numclasecomision4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseComision_5_id", type="integer", nullable=true)
     */
    private $numclasecomision5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClaseComision_6_id", type="integer", nullable=true)
     */
    private $numclasecomision6Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComision_1_id", type="integer", nullable=true)
     */
    private $numtipocomision1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComision_2_id", type="integer", nullable=true)
     */
    private $numtipocomision2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComision_3_id", type="integer", nullable=true)
     */
    private $numtipocomision3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComision_4_id", type="integer", nullable=true)
     */
    private $numtipocomision4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComision_5_id", type="integer", nullable=true)
     */
    private $numtipocomision5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComision_6_id", type="integer", nullable=true)
     */
    private $numtipocomision6Id = '0';

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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Articulosprecios
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
     * Set numlistaprecioId
     *
     * @param integer $numlistaprecioId
     * @return Articulosprecios
     */
    public function setNumlistaprecioId($numlistaprecioId)
    {
        $this->numlistaprecioId = $numlistaprecioId;

        return $this;
    }

    /**
     * Get numlistaprecioId
     *
     * @return integer 
     */
    public function getNumlistaprecioId()
    {
        return $this->numlistaprecioId;
    }

    /**
     * Set numnivelprecioId
     *
     * @param integer $numnivelprecioId
     * @return Articulosprecios
     */
    public function setNumnivelprecioId($numnivelprecioId)
    {
        $this->numnivelprecioId = $numnivelprecioId;

        return $this;
    }

    /**
     * Get numnivelprecioId
     *
     * @return integer 
     */
    public function getNumnivelprecioId()
    {
        return $this->numnivelprecioId;
    }

    /**
     * Set strmodeloKy
     *
     * @param string $strmodeloKy
     * @return Articulosprecios
     */
    public function setStrmodeloKy($strmodeloKy)
    {
        $this->strmodeloKy = $strmodeloKy;

        return $this;
    }

    /**
     * Get strmodeloKy
     *
     * @return string 
     */
    public function getStrmodeloKy()
    {
        return $this->strmodeloKy;
    }

    /**
     * Set nummargenutilidad
     *
     * @param float $nummargenutilidad
     * @return Articulosprecios
     */
    public function setNummargenutilidad($nummargenutilidad)
    {
        $this->nummargenutilidad = $nummargenutilidad;

        return $this;
    }

    /**
     * Get nummargenutilidad
     *
     * @return float 
     */
    public function getNummargenutilidad()
    {
        return $this->nummargenutilidad;
    }

    /**
     * Set nummonedaventaId
     *
     * @param integer $nummonedaventaId
     * @return Articulosprecios
     */
    public function setNummonedaventaId($nummonedaventaId)
    {
        $this->nummonedaventaId = $nummonedaventaId;

        return $this;
    }

    /**
     * Get nummonedaventaId
     *
     * @return integer 
     */
    public function getNummonedaventaId()
    {
        return $this->nummonedaventaId;
    }

    /**
     * Set numunidadmedidaventaId
     *
     * @param integer $numunidadmedidaventaId
     * @return Articulosprecios
     */
    public function setNumunidadmedidaventaId($numunidadmedidaventaId)
    {
        $this->numunidadmedidaventaId = $numunidadmedidaventaId;

        return $this;
    }

    /**
     * Get numunidadmedidaventaId
     *
     * @return integer 
     */
    public function getNumunidadmedidaventaId()
    {
        return $this->numunidadmedidaventaId;
    }

    /**
     * Set numprctjdescuentomaximo
     *
     * @param float $numprctjdescuentomaximo
     * @return Articulosprecios
     */
    public function setNumprctjdescuentomaximo($numprctjdescuentomaximo)
    {
        $this->numprctjdescuentomaximo = $numprctjdescuentomaximo;

        return $this;
    }

    /**
     * Get numprctjdescuentomaximo
     *
     * @return float 
     */
    public function getNumprctjdescuentomaximo()
    {
        return $this->numprctjdescuentomaximo;
    }

    /**
     * Set numprecioventa
     *
     * @param string $numprecioventa
     * @return Articulosprecios
     */
    public function setNumprecioventa($numprecioventa)
    {
        $this->numprecioventa = $numprecioventa;

        return $this;
    }

    /**
     * Get numprecioventa
     *
     * @return string 
     */
    public function getNumprecioventa()
    {
        return $this->numprecioventa;
    }

    /**
     * Set dtecambioprecio
     *
     * @param \DateTime $dtecambioprecio
     * @return Articulosprecios
     */
    public function setDtecambioprecio($dtecambioprecio)
    {
        $this->dtecambioprecio = $dtecambioprecio;

        return $this;
    }

    /**
     * Get dtecambioprecio
     *
     * @return \DateTime 
     */
    public function getDtecambioprecio()
    {
        return $this->dtecambioprecio;
    }

    /**
     * Set numgrupocomisionventa1Id
     *
     * @param integer $numgrupocomisionventa1Id
     * @return Articulosprecios
     */
    public function setNumgrupocomisionventa1Id($numgrupocomisionventa1Id)
    {
        $this->numgrupocomisionventa1Id = $numgrupocomisionventa1Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa1Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa1Id()
    {
        return $this->numgrupocomisionventa1Id;
    }

    /**
     * Set numgrupocomisionventa2Id
     *
     * @param integer $numgrupocomisionventa2Id
     * @return Articulosprecios
     */
    public function setNumgrupocomisionventa2Id($numgrupocomisionventa2Id)
    {
        $this->numgrupocomisionventa2Id = $numgrupocomisionventa2Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa2Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa2Id()
    {
        return $this->numgrupocomisionventa2Id;
    }

    /**
     * Set numgrupocomisionventa3Id
     *
     * @param integer $numgrupocomisionventa3Id
     * @return Articulosprecios
     */
    public function setNumgrupocomisionventa3Id($numgrupocomisionventa3Id)
    {
        $this->numgrupocomisionventa3Id = $numgrupocomisionventa3Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa3Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa3Id()
    {
        return $this->numgrupocomisionventa3Id;
    }

    /**
     * Set numgrupocomisionventa4Id
     *
     * @param integer $numgrupocomisionventa4Id
     * @return Articulosprecios
     */
    public function setNumgrupocomisionventa4Id($numgrupocomisionventa4Id)
    {
        $this->numgrupocomisionventa4Id = $numgrupocomisionventa4Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa4Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa4Id()
    {
        return $this->numgrupocomisionventa4Id;
    }

    /**
     * Set numgrupocomisionventa5Id
     *
     * @param integer $numgrupocomisionventa5Id
     * @return Articulosprecios
     */
    public function setNumgrupocomisionventa5Id($numgrupocomisionventa5Id)
    {
        $this->numgrupocomisionventa5Id = $numgrupocomisionventa5Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa5Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa5Id()
    {
        return $this->numgrupocomisionventa5Id;
    }

    /**
     * Set numgrupocomisionventa6Id
     *
     * @param integer $numgrupocomisionventa6Id
     * @return Articulosprecios
     */
    public function setNumgrupocomisionventa6Id($numgrupocomisionventa6Id)
    {
        $this->numgrupocomisionventa6Id = $numgrupocomisionventa6Id;

        return $this;
    }

    /**
     * Get numgrupocomisionventa6Id
     *
     * @return integer 
     */
    public function getNumgrupocomisionventa6Id()
    {
        return $this->numgrupocomisionventa6Id;
    }

    /**
     * Set numclasecomision1Id
     *
     * @param integer $numclasecomision1Id
     * @return Articulosprecios
     */
    public function setNumclasecomision1Id($numclasecomision1Id)
    {
        $this->numclasecomision1Id = $numclasecomision1Id;

        return $this;
    }

    /**
     * Get numclasecomision1Id
     *
     * @return integer 
     */
    public function getNumclasecomision1Id()
    {
        return $this->numclasecomision1Id;
    }

    /**
     * Set numclasecomision2Id
     *
     * @param integer $numclasecomision2Id
     * @return Articulosprecios
     */
    public function setNumclasecomision2Id($numclasecomision2Id)
    {
        $this->numclasecomision2Id = $numclasecomision2Id;

        return $this;
    }

    /**
     * Get numclasecomision2Id
     *
     * @return integer 
     */
    public function getNumclasecomision2Id()
    {
        return $this->numclasecomision2Id;
    }

    /**
     * Set numclasecomision3Id
     *
     * @param integer $numclasecomision3Id
     * @return Articulosprecios
     */
    public function setNumclasecomision3Id($numclasecomision3Id)
    {
        $this->numclasecomision3Id = $numclasecomision3Id;

        return $this;
    }

    /**
     * Get numclasecomision3Id
     *
     * @return integer 
     */
    public function getNumclasecomision3Id()
    {
        return $this->numclasecomision3Id;
    }

    /**
     * Set numclasecomision4Id
     *
     * @param integer $numclasecomision4Id
     * @return Articulosprecios
     */
    public function setNumclasecomision4Id($numclasecomision4Id)
    {
        $this->numclasecomision4Id = $numclasecomision4Id;

        return $this;
    }

    /**
     * Get numclasecomision4Id
     *
     * @return integer 
     */
    public function getNumclasecomision4Id()
    {
        return $this->numclasecomision4Id;
    }

    /**
     * Set numclasecomision5Id
     *
     * @param integer $numclasecomision5Id
     * @return Articulosprecios
     */
    public function setNumclasecomision5Id($numclasecomision5Id)
    {
        $this->numclasecomision5Id = $numclasecomision5Id;

        return $this;
    }

    /**
     * Get numclasecomision5Id
     *
     * @return integer 
     */
    public function getNumclasecomision5Id()
    {
        return $this->numclasecomision5Id;
    }

    /**
     * Set numclasecomision6Id
     *
     * @param integer $numclasecomision6Id
     * @return Articulosprecios
     */
    public function setNumclasecomision6Id($numclasecomision6Id)
    {
        $this->numclasecomision6Id = $numclasecomision6Id;

        return $this;
    }

    /**
     * Get numclasecomision6Id
     *
     * @return integer 
     */
    public function getNumclasecomision6Id()
    {
        return $this->numclasecomision6Id;
    }

    /**
     * Set numtipocomision1Id
     *
     * @param integer $numtipocomision1Id
     * @return Articulosprecios
     */
    public function setNumtipocomision1Id($numtipocomision1Id)
    {
        $this->numtipocomision1Id = $numtipocomision1Id;

        return $this;
    }

    /**
     * Get numtipocomision1Id
     *
     * @return integer 
     */
    public function getNumtipocomision1Id()
    {
        return $this->numtipocomision1Id;
    }

    /**
     * Set numtipocomision2Id
     *
     * @param integer $numtipocomision2Id
     * @return Articulosprecios
     */
    public function setNumtipocomision2Id($numtipocomision2Id)
    {
        $this->numtipocomision2Id = $numtipocomision2Id;

        return $this;
    }

    /**
     * Get numtipocomision2Id
     *
     * @return integer 
     */
    public function getNumtipocomision2Id()
    {
        return $this->numtipocomision2Id;
    }

    /**
     * Set numtipocomision3Id
     *
     * @param integer $numtipocomision3Id
     * @return Articulosprecios
     */
    public function setNumtipocomision3Id($numtipocomision3Id)
    {
        $this->numtipocomision3Id = $numtipocomision3Id;

        return $this;
    }

    /**
     * Get numtipocomision3Id
     *
     * @return integer 
     */
    public function getNumtipocomision3Id()
    {
        return $this->numtipocomision3Id;
    }

    /**
     * Set numtipocomision4Id
     *
     * @param integer $numtipocomision4Id
     * @return Articulosprecios
     */
    public function setNumtipocomision4Id($numtipocomision4Id)
    {
        $this->numtipocomision4Id = $numtipocomision4Id;

        return $this;
    }

    /**
     * Get numtipocomision4Id
     *
     * @return integer 
     */
    public function getNumtipocomision4Id()
    {
        return $this->numtipocomision4Id;
    }

    /**
     * Set numtipocomision5Id
     *
     * @param integer $numtipocomision5Id
     * @return Articulosprecios
     */
    public function setNumtipocomision5Id($numtipocomision5Id)
    {
        $this->numtipocomision5Id = $numtipocomision5Id;

        return $this;
    }

    /**
     * Get numtipocomision5Id
     *
     * @return integer 
     */
    public function getNumtipocomision5Id()
    {
        return $this->numtipocomision5Id;
    }

    /**
     * Set numtipocomision6Id
     *
     * @param integer $numtipocomision6Id
     * @return Articulosprecios
     */
    public function setNumtipocomision6Id($numtipocomision6Id)
    {
        $this->numtipocomision6Id = $numtipocomision6Id;

        return $this;
    }

    /**
     * Get numtipocomision6Id
     *
     * @return integer 
     */
    public function getNumtipocomision6Id()
    {
        return $this->numtipocomision6Id;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Articulosprecios
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
     * @return Articulosprecios
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
