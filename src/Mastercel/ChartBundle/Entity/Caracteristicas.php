<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristicas
 *
 * @ORM\Table(name="Caracteristicas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrCaracteristica_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Caracteristicas
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
     * @ORM\Column(name="NumCaracteristicaEspecifica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaespecificaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTransacciones", type="string", length=30, nullable=true)
     */
    private $strtransacciones;

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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * Set numcaracteristicaespecificaId
     *
     * @param integer $numcaracteristicaespecificaId
     * @return Caracteristicas
     */
    public function setNumcaracteristicaespecificaId($numcaracteristicaespecificaId)
    {
        $this->numcaracteristicaespecificaId = $numcaracteristicaespecificaId;

        return $this;
    }

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
     * Set strtransacciones
     *
     * @param string $strtransacciones
     * @return Caracteristicas
     */
    public function setStrtransacciones($strtransacciones)
    {
        $this->strtransacciones = $strtransacciones;

        return $this;
    }

    /**
     * Get strtransacciones
     *
     * @return string 
     */
    public function getStrtransacciones()
    {
        return $this->strtransacciones;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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

    /**
     * Set numfamiliaId
     *
     * @param integer $numfamiliaId
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
     * @return Caracteristicas
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
}
