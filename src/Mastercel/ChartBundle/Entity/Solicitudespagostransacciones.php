<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudespagostransacciones
 *
 * @ORM\Table(name="SolicitudesPagosTransacciones", indexes={@ORM\Index(name="Indice_1", columns={"NumTransaccion_id", "NumAlmacen_id", "NumTipoTransaccion"})})
 * @ORM\Entity
 */
class Solicitudespagostransacciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumSolicitud_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numsolicitudId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenSolicitud_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacensolicitudId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo", type="integer", nullable=true)
     */
    private $numsaldo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticuloDescuento_ky", type="string", length=20, nullable=true)
     */
    private $strarticulodescuentoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcionDescuento", type="string", length=100, nullable=true)
     */
    private $strdescripciondescuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteDescuento", type="integer", nullable=true)
     */
    private $numimportedescuento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCantidadDocumentos", type="integer", nullable=true)
     */
    private $numcantidaddocumentos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteDocumentos", type="integer", nullable=true)
     */
    private $numimportedocumentos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteSolicitado", type="integer", nullable=true)
     */
    private $numimportesolicitado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteAutorizado", type="integer", nullable=true)
     */
    private $numimporteautorizado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Set numsolicitudId
     *
     * @param integer $numsolicitudId
     * @return Solicitudespagostransacciones
     */
    public function setNumsolicitudId($numsolicitudId)
    {
        $this->numsolicitudId = $numsolicitudId;

        return $this;
    }

    /**
     * Get numsolicitudId
     *
     * @return integer 
     */
    public function getNumsolicitudId()
    {
        return $this->numsolicitudId;
    }

    /**
     * Set numalmacensolicitudId
     *
     * @param integer $numalmacensolicitudId
     * @return Solicitudespagostransacciones
     */
    public function setNumalmacensolicitudId($numalmacensolicitudId)
    {
        $this->numalmacensolicitudId = $numalmacensolicitudId;

        return $this;
    }

    /**
     * Get numalmacensolicitudId
     *
     * @return integer 
     */
    public function getNumalmacensolicitudId()
    {
        return $this->numalmacensolicitudId;
    }

    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Solicitudespagostransacciones
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
     * @return Solicitudespagostransacciones
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
     * @return Solicitudespagostransacciones
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
     * Set numsaldo
     *
     * @param integer $numsaldo
     * @return Solicitudespagostransacciones
     */
    public function setNumsaldo($numsaldo)
    {
        $this->numsaldo = $numsaldo;

        return $this;
    }

    /**
     * Get numsaldo
     *
     * @return integer 
     */
    public function getNumsaldo()
    {
        return $this->numsaldo;
    }

    /**
     * Set strarticulodescuentoKy
     *
     * @param string $strarticulodescuentoKy
     * @return Solicitudespagostransacciones
     */
    public function setStrarticulodescuentoKy($strarticulodescuentoKy)
    {
        $this->strarticulodescuentoKy = $strarticulodescuentoKy;

        return $this;
    }

    /**
     * Get strarticulodescuentoKy
     *
     * @return string 
     */
    public function getStrarticulodescuentoKy()
    {
        return $this->strarticulodescuentoKy;
    }

    /**
     * Set strdescripciondescuento
     *
     * @param string $strdescripciondescuento
     * @return Solicitudespagostransacciones
     */
    public function setStrdescripciondescuento($strdescripciondescuento)
    {
        $this->strdescripciondescuento = $strdescripciondescuento;

        return $this;
    }

    /**
     * Get strdescripciondescuento
     *
     * @return string 
     */
    public function getStrdescripciondescuento()
    {
        return $this->strdescripciondescuento;
    }

    /**
     * Set numimportedescuento
     *
     * @param integer $numimportedescuento
     * @return Solicitudespagostransacciones
     */
    public function setNumimportedescuento($numimportedescuento)
    {
        $this->numimportedescuento = $numimportedescuento;

        return $this;
    }

    /**
     * Get numimportedescuento
     *
     * @return integer 
     */
    public function getNumimportedescuento()
    {
        return $this->numimportedescuento;
    }

    /**
     * Set numcantidaddocumentos
     *
     * @param integer $numcantidaddocumentos
     * @return Solicitudespagostransacciones
     */
    public function setNumcantidaddocumentos($numcantidaddocumentos)
    {
        $this->numcantidaddocumentos = $numcantidaddocumentos;

        return $this;
    }

    /**
     * Get numcantidaddocumentos
     *
     * @return integer 
     */
    public function getNumcantidaddocumentos()
    {
        return $this->numcantidaddocumentos;
    }

    /**
     * Set numimportedocumentos
     *
     * @param integer $numimportedocumentos
     * @return Solicitudespagostransacciones
     */
    public function setNumimportedocumentos($numimportedocumentos)
    {
        $this->numimportedocumentos = $numimportedocumentos;

        return $this;
    }

    /**
     * Get numimportedocumentos
     *
     * @return integer 
     */
    public function getNumimportedocumentos()
    {
        return $this->numimportedocumentos;
    }

    /**
     * Set numimportesolicitado
     *
     * @param integer $numimportesolicitado
     * @return Solicitudespagostransacciones
     */
    public function setNumimportesolicitado($numimportesolicitado)
    {
        $this->numimportesolicitado = $numimportesolicitado;

        return $this;
    }

    /**
     * Get numimportesolicitado
     *
     * @return integer 
     */
    public function getNumimportesolicitado()
    {
        return $this->numimportesolicitado;
    }

    /**
     * Set numimporteautorizado
     *
     * @param integer $numimporteautorizado
     * @return Solicitudespagostransacciones
     */
    public function setNumimporteautorizado($numimporteautorizado)
    {
        $this->numimporteautorizado = $numimporteautorizado;

        return $this;
    }

    /**
     * Get numimporteautorizado
     *
     * @return integer 
     */
    public function getNumimporteautorizado()
    {
        return $this->numimporteautorizado;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Solicitudespagostransacciones
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Solicitudespagostransacciones
     */
    public function setNumtipoestado($numtipoestado)
    {
        $this->numtipoestado = $numtipoestado;

        return $this;
    }

    /**
     * Get numtipoestado
     *
     * @return integer 
     */
    public function getNumtipoestado()
    {
        return $this->numtipoestado;
    }

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Solicitudespagostransacciones
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
