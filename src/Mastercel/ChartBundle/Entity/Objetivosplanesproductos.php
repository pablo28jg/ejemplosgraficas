<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objetivosplanesproductos
 *
 * @ORM\Table(name="ObjetivosPlanesProductos", indexes={@ORM\Index(name="Indice_1", columns={"NumObjetivoPlan_id"})})
 * @ORM\Entity
 */
class Objetivosplanesproductos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumObjetivoPlanProducto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numobjetivoplanproductoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumObjetivoPlan_id", type="integer", nullable=true)
     */
    private $numobjetivoplanId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrGrupo", type="string", length=60, nullable=true)
     */
    private $strgrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenAparicion", type="integer", nullable=true)
     */
    private $numordenaparicion = '0';

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
     * @ORM\Column(name="NumCoordinado_id", type="integer", nullable=true)
     */
    private $numcoordinadoId = '0';

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
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';



    /**
     * Get numobjetivoplanproductoId
     *
     * @return integer 
     */
    public function getNumobjetivoplanproductoId()
    {
        return $this->numobjetivoplanproductoId;
    }

    /**
     * Set numobjetivoplanId
     *
     * @param integer $numobjetivoplanId
     * @return Objetivosplanesproductos
     */
    public function setNumobjetivoplanId($numobjetivoplanId)
    {
        $this->numobjetivoplanId = $numobjetivoplanId;

        return $this;
    }

    /**
     * Get numobjetivoplanId
     *
     * @return integer 
     */
    public function getNumobjetivoplanId()
    {
        return $this->numobjetivoplanId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Objetivosplanesproductos
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
     * Set strgrupo
     *
     * @param string $strgrupo
     * @return Objetivosplanesproductos
     */
    public function setStrgrupo($strgrupo)
    {
        $this->strgrupo = $strgrupo;

        return $this;
    }

    /**
     * Get strgrupo
     *
     * @return string 
     */
    public function getStrgrupo()
    {
        return $this->strgrupo;
    }

    /**
     * Set numordenaparicion
     *
     * @param integer $numordenaparicion
     * @return Objetivosplanesproductos
     */
    public function setNumordenaparicion($numordenaparicion)
    {
        $this->numordenaparicion = $numordenaparicion;

        return $this;
    }

    /**
     * Get numordenaparicion
     *
     * @return integer 
     */
    public function getNumordenaparicion()
    {
        return $this->numordenaparicion;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * Set numfamiliaId
     *
     * @param integer $numfamiliaId
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * Set numcoordinadoId
     *
     * @param integer $numcoordinadoId
     * @return Objetivosplanesproductos
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
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * @return Objetivosplanesproductos
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
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Objetivosplanesproductos
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
}
