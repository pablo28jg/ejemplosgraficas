<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documentos
 *
 * @ORM\Table(name="Documentos", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"NumEntidad_id"}), @ORM\Index(name="Indice_3", columns={"NumTransaccion_id", "NumAlmacen_id", "NumTipoTransaccion"}), @ORM\Index(name="Indice_4", columns={"NumOportunidad_id", "NumAlmacen_id"}), @ORM\Index(name="Indice_5", columns={"NumProspecto_id"})})
 * @ORM\Entity
 */
class Documentos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumDocumento_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numdocumentoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDocumentoTipo_id", type="integer", nullable=true)
     */
    private $numdocumentotipoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="ImgDocumento", type="text", length=16, nullable=true)
     */
    private $imgdocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreArchivo", type="string", length=100, nullable=true)
     */
    private $strnombrearchivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLongitudArchivo", type="integer", nullable=true)
     */
    private $numlongitudarchivo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEntidad", type="integer", nullable=true)
     */
    private $numtipoentidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccion_id", type="integer", nullable=true)
     */
    private $numtransaccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=true)
     */
    private $numtipotransaccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidad_id", type="integer", nullable=true)
     */
    private $numoportunidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProspecto_id", type="integer", nullable=true)
     */
    private $numprospectoId = '0';

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
     * Get numdocumentoId
     *
     * @return integer 
     */
    public function getNumdocumentoId()
    {
        return $this->numdocumentoId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Documentos
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
     * Set numdocumentotipoId
     *
     * @param integer $numdocumentotipoId
     * @return Documentos
     */
    public function setNumdocumentotipoId($numdocumentotipoId)
    {
        $this->numdocumentotipoId = $numdocumentotipoId;

        return $this;
    }

    /**
     * Get numdocumentotipoId
     *
     * @return integer 
     */
    public function getNumdocumentotipoId()
    {
        return $this->numdocumentotipoId;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Documentos
     */
    public function setMemobservaciones($memobservaciones)
    {
        $this->memobservaciones = $memobservaciones;

        return $this;
    }

    /**
     * Get memobservaciones
     *
     * @return string 
     */
    public function getMemobservaciones()
    {
        return $this->memobservaciones;
    }

    /**
     * Set imgdocumento
     *
     * @param string $imgdocumento
     * @return Documentos
     */
    public function setImgdocumento($imgdocumento)
    {
        $this->imgdocumento = $imgdocumento;

        return $this;
    }

    /**
     * Get imgdocumento
     *
     * @return string 
     */
    public function getImgdocumento()
    {
        return $this->imgdocumento;
    }

    /**
     * Set strnombrearchivo
     *
     * @param string $strnombrearchivo
     * @return Documentos
     */
    public function setStrnombrearchivo($strnombrearchivo)
    {
        $this->strnombrearchivo = $strnombrearchivo;

        return $this;
    }

    /**
     * Get strnombrearchivo
     *
     * @return string 
     */
    public function getStrnombrearchivo()
    {
        return $this->strnombrearchivo;
    }

    /**
     * Set numlongitudarchivo
     *
     * @param integer $numlongitudarchivo
     * @return Documentos
     */
    public function setNumlongitudarchivo($numlongitudarchivo)
    {
        $this->numlongitudarchivo = $numlongitudarchivo;

        return $this;
    }

    /**
     * Get numlongitudarchivo
     *
     * @return integer 
     */
    public function getNumlongitudarchivo()
    {
        return $this->numlongitudarchivo;
    }

    /**
     * Set numtipoentidad
     *
     * @param integer $numtipoentidad
     * @return Documentos
     */
    public function setNumtipoentidad($numtipoentidad)
    {
        $this->numtipoentidad = $numtipoentidad;

        return $this;
    }

    /**
     * Get numtipoentidad
     *
     * @return integer 
     */
    public function getNumtipoentidad()
    {
        return $this->numtipoentidad;
    }

    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Documentos
     */
    public function setNumentidadId($numentidadId)
    {
        $this->numentidadId = $numentidadId;

        return $this;
    }

    /**
     * Get numentidadId
     *
     * @return integer 
     */
    public function getNumentidadId()
    {
        return $this->numentidadId;
    }

    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Documentos
     */
    public function setNumtransaccionId($numtransaccionId)
    {
        $this->numtransaccionId = $numtransaccionId;

        return $this;
    }

    /**
     * Get numtransaccionId
     *
     * @return integer 
     */
    public function getNumtransaccionId()
    {
        return $this->numtransaccionId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Documentos
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
     * Set numtipotransaccion
     *
     * @param integer $numtipotransaccion
     * @return Documentos
     */
    public function setNumtipotransaccion($numtipotransaccion)
    {
        $this->numtipotransaccion = $numtipotransaccion;

        return $this;
    }

    /**
     * Get numtipotransaccion
     *
     * @return integer 
     */
    public function getNumtipotransaccion()
    {
        return $this->numtipotransaccion;
    }

    /**
     * Set numoportunidadId
     *
     * @param integer $numoportunidadId
     * @return Documentos
     */
    public function setNumoportunidadId($numoportunidadId)
    {
        $this->numoportunidadId = $numoportunidadId;

        return $this;
    }

    /**
     * Get numoportunidadId
     *
     * @return integer 
     */
    public function getNumoportunidadId()
    {
        return $this->numoportunidadId;
    }

    /**
     * Set numprospectoId
     *
     * @param integer $numprospectoId
     * @return Documentos
     */
    public function setNumprospectoId($numprospectoId)
    {
        $this->numprospectoId = $numprospectoId;

        return $this;
    }

    /**
     * Get numprospectoId
     *
     * @return integer 
     */
    public function getNumprospectoId()
    {
        return $this->numprospectoId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Documentos
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
     * @return Documentos
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
     * @return Documentos
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
     * @return Documentos
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
     * @return Documentos
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
