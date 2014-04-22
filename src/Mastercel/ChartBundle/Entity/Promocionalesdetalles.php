<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promocionalesdetalles
 *
 * @ORM\Table(name="PromocionalesDetalles", indexes={@ORM\Index(name="Indice_1", columns={"StrArticulo_ky"}), @ORM\Index(name="Indice_10", columns={"NumColor_id"}), @ORM\Index(name="Indice_11", columns={"NumLargo_id"}), @ORM\Index(name="Indice_12", columns={"NumTalla_id"}), @ORM\Index(name="Indice_13", columns={"NumClasificacion_1_id"}), @ORM\Index(name="Indice_14", columns={"NumClasificacion_2_id"}), @ORM\Index(name="Indice_15", columns={"NumClasificacion_3_id"}), @ORM\Index(name="Indice_16", columns={"NumClasificacion_4_id"}), @ORM\Index(name="Indice_2", columns={"NumCoordinado_id"}), @ORM\Index(name="Indice_3", columns={"StrModelo_ky"}), @ORM\Index(name="Indice_4", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_5", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_6", columns={"NumFamilia_id"}), @ORM\Index(name="Indice_7", columns={"NumMarca_id"}), @ORM\Index(name="Indice_8", columns={"NumTemporada_id"}), @ORM\Index(name="Indice_9", columns={"NumProveedor_id"})})
 * @ORM\Entity
 */
class Promocionalesdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPromocional_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numpromocionalId = '0';

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
     * @ORM\Column(name="NumPromocionalGrupo_id", type="integer", nullable=true)
     */
    private $numpromocionalgrupoId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadOfertar", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadofertar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioMinimo", type="integer", nullable=true)
     */
    private $numpreciominimo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioMaximo", type="integer", nullable=true)
     */
    private $numpreciomaximo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCliente", type="integer", nullable=true)
     */
    private $numtipocliente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrModelo_ky", type="string", length=20, nullable=true)
     */
    private $strmodeloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCoordinado_id", type="integer", nullable=true)
     */
    private $numcoordinadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFamilia_id", type="integer", nullable=true)
     */
    private $numfamiliaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMarca_id", type="integer", nullable=true)
     */
    private $nummarcaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTemporada_id", type="integer", nullable=true)
     */
    private $numtemporadaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumColor_id", type="integer", nullable=true)
     */
    private $numcolorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLargo_id", type="integer", nullable=true)
     */
    private $numlargoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTalla_id", type="integer", nullable=true)
     */
    private $numtallaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_1_id", type="integer", nullable=true)
     */
    private $numclasificacion1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_2_id", type="integer", nullable=true)
     */
    private $numclasificacion2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_3_id", type="integer", nullable=true)
     */
    private $numclasificacion3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_4_id", type="integer", nullable=true)
     */
    private $numclasificacion4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoSeleccion", type="integer", nullable=true)
     */
    private $numcodigoseleccion = '0';



    /**
     * Set numpromocionalId
     *
     * @param integer $numpromocionalId
     * @return Promocionalesdetalles
     */
    public function setNumpromocionalId($numpromocionalId)
    {
        $this->numpromocionalId = $numpromocionalId;

        return $this;
    }

    /**
     * Get numpromocionalId
     *
     * @return integer 
     */
    public function getNumpromocionalId()
    {
        return $this->numpromocionalId;
    }

    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Promocionalesdetalles
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
     * Set numpromocionalgrupoId
     *
     * @param integer $numpromocionalgrupoId
     * @return Promocionalesdetalles
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
     * Set numcantidadofertar
     *
     * @param float $numcantidadofertar
     * @return Promocionalesdetalles
     */
    public function setNumcantidadofertar($numcantidadofertar)
    {
        $this->numcantidadofertar = $numcantidadofertar;

        return $this;
    }

    /**
     * Get numcantidadofertar
     *
     * @return float 
     */
    public function getNumcantidadofertar()
    {
        return $this->numcantidadofertar;
    }

    /**
     * Set numpreciominimo
     *
     * @param integer $numpreciominimo
     * @return Promocionalesdetalles
     */
    public function setNumpreciominimo($numpreciominimo)
    {
        $this->numpreciominimo = $numpreciominimo;

        return $this;
    }

    /**
     * Get numpreciominimo
     *
     * @return integer 
     */
    public function getNumpreciominimo()
    {
        return $this->numpreciominimo;
    }

    /**
     * Set numpreciomaximo
     *
     * @param integer $numpreciomaximo
     * @return Promocionalesdetalles
     */
    public function setNumpreciomaximo($numpreciomaximo)
    {
        $this->numpreciomaximo = $numpreciomaximo;

        return $this;
    }

    /**
     * Get numpreciomaximo
     *
     * @return integer 
     */
    public function getNumpreciomaximo()
    {
        return $this->numpreciomaximo;
    }

    /**
     * Set numtipocliente
     *
     * @param integer $numtipocliente
     * @return Promocionalesdetalles
     */
    public function setNumtipocliente($numtipocliente)
    {
        $this->numtipocliente = $numtipocliente;

        return $this;
    }

    /**
     * Get numtipocliente
     *
     * @return integer 
     */
    public function getNumtipocliente()
    {
        return $this->numtipocliente;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Promocionalesdetalles
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
     * Set strmodeloKy
     *
     * @param string $strmodeloKy
     * @return Promocionalesdetalles
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
     * Set numcoordinadoId
     *
     * @param integer $numcoordinadoId
     * @return Promocionalesdetalles
     */
    public function setNumcoordinadoId($numcoordinadoId)
    {
        $this->numcoordinadoId = $numcoordinadoId;

        return $this;
    }

    /**
     * Get numcoordinadoId
     *
     * @return integer 
     */
    public function getNumcoordinadoId()
    {
        return $this->numcoordinadoId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Promocionalesdetalles
     */
    public function setNumalmacenId($numalmacenId)
    {
        $this->numalmacenId = $numalmacenId;

        return $this;
    }

    /**
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Promocionalesdetalles
     */
    public function setNumempresaId($numempresaId)
    {
        $this->numempresaId = $numempresaId;

        return $this;
    }

    /**
     * Get numempresaId
     *
     * @return integer 
     */
    public function getNumempresaId()
    {
        return $this->numempresaId;
    }

    /**
     * Set numfamiliaId
     *
     * @param integer $numfamiliaId
     * @return Promocionalesdetalles
     */
    public function setNumfamiliaId($numfamiliaId)
    {
        $this->numfamiliaId = $numfamiliaId;

        return $this;
    }

    /**
     * Get numfamiliaId
     *
     * @return integer 
     */
    public function getNumfamiliaId()
    {
        return $this->numfamiliaId;
    }

    /**
     * Set nummarcaId
     *
     * @param integer $nummarcaId
     * @return Promocionalesdetalles
     */
    public function setNummarcaId($nummarcaId)
    {
        $this->nummarcaId = $nummarcaId;

        return $this;
    }

    /**
     * Get nummarcaId
     *
     * @return integer 
     */
    public function getNummarcaId()
    {
        return $this->nummarcaId;
    }

    /**
     * Set numtemporadaId
     *
     * @param integer $numtemporadaId
     * @return Promocionalesdetalles
     */
    public function setNumtemporadaId($numtemporadaId)
    {
        $this->numtemporadaId = $numtemporadaId;

        return $this;
    }

    /**
     * Get numtemporadaId
     *
     * @return integer 
     */
    public function getNumtemporadaId()
    {
        return $this->numtemporadaId;
    }

    /**
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Promocionalesdetalles
     */
    public function setNumproveedorId($numproveedorId)
    {
        $this->numproveedorId = $numproveedorId;

        return $this;
    }

    /**
     * Get numproveedorId
     *
     * @return integer 
     */
    public function getNumproveedorId()
    {
        return $this->numproveedorId;
    }

    /**
     * Set numcolorId
     *
     * @param integer $numcolorId
     * @return Promocionalesdetalles
     */
    public function setNumcolorId($numcolorId)
    {
        $this->numcolorId = $numcolorId;

        return $this;
    }

    /**
     * Get numcolorId
     *
     * @return integer 
     */
    public function getNumcolorId()
    {
        return $this->numcolorId;
    }

    /**
     * Set numlargoId
     *
     * @param integer $numlargoId
     * @return Promocionalesdetalles
     */
    public function setNumlargoId($numlargoId)
    {
        $this->numlargoId = $numlargoId;

        return $this;
    }

    /**
     * Get numlargoId
     *
     * @return integer 
     */
    public function getNumlargoId()
    {
        return $this->numlargoId;
    }

    /**
     * Set numtallaId
     *
     * @param integer $numtallaId
     * @return Promocionalesdetalles
     */
    public function setNumtallaId($numtallaId)
    {
        $this->numtallaId = $numtallaId;

        return $this;
    }

    /**
     * Get numtallaId
     *
     * @return integer 
     */
    public function getNumtallaId()
    {
        return $this->numtallaId;
    }

    /**
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Promocionalesdetalles
     */
    public function setNumclasificacion1Id($numclasificacion1Id)
    {
        $this->numclasificacion1Id = $numclasificacion1Id;

        return $this;
    }

    /**
     * Get numclasificacion1Id
     *
     * @return integer 
     */
    public function getNumclasificacion1Id()
    {
        return $this->numclasificacion1Id;
    }

    /**
     * Set numclasificacion2Id
     *
     * @param integer $numclasificacion2Id
     * @return Promocionalesdetalles
     */
    public function setNumclasificacion2Id($numclasificacion2Id)
    {
        $this->numclasificacion2Id = $numclasificacion2Id;

        return $this;
    }

    /**
     * Get numclasificacion2Id
     *
     * @return integer 
     */
    public function getNumclasificacion2Id()
    {
        return $this->numclasificacion2Id;
    }

    /**
     * Set numclasificacion3Id
     *
     * @param integer $numclasificacion3Id
     * @return Promocionalesdetalles
     */
    public function setNumclasificacion3Id($numclasificacion3Id)
    {
        $this->numclasificacion3Id = $numclasificacion3Id;

        return $this;
    }

    /**
     * Get numclasificacion3Id
     *
     * @return integer 
     */
    public function getNumclasificacion3Id()
    {
        return $this->numclasificacion3Id;
    }

    /**
     * Set numclasificacion4Id
     *
     * @param integer $numclasificacion4Id
     * @return Promocionalesdetalles
     */
    public function setNumclasificacion4Id($numclasificacion4Id)
    {
        $this->numclasificacion4Id = $numclasificacion4Id;

        return $this;
    }

    /**
     * Get numclasificacion4Id
     *
     * @return integer 
     */
    public function getNumclasificacion4Id()
    {
        return $this->numclasificacion4Id;
    }

    /**
     * Set numcodigoseleccion
     *
     * @param integer $numcodigoseleccion
     * @return Promocionalesdetalles
     */
    public function setNumcodigoseleccion($numcodigoseleccion)
    {
        $this->numcodigoseleccion = $numcodigoseleccion;

        return $this;
    }

    /**
     * Get numcodigoseleccion
     *
     * @return integer 
     */
    public function getNumcodigoseleccion()
    {
        return $this->numcodigoseleccion;
    }
}
