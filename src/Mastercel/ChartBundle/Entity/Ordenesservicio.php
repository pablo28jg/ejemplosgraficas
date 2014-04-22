<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordenesservicio
 *
 * @ORM\Table(name="OrdenesServicio", indexes={@ORM\Index(name="Indice_1", columns={"DteDocumento"}), @ORM\Index(name="Indice_2", columns={"StrArticulo_ky", "StrSerie_ky"}), @ORM\Index(name="Indice_3", columns={"StrSerie_ky", "StrArticulo_ky"}), @ORM\Index(name="Indice_4", columns={"StrArticuloRelacionado_ky", "StrSerieRelacionado_ky"}), @ORM\Index(name="Indice_5", columns={"StrSerieRelacionado_ky", "StrArticuloRelacionado_ky"}), @ORM\Index(name="Indice_6", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_7", columns={"DteActualizacion"})})
 * @ORM\Entity
 */
class Ordenesservicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenServicio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numordenservicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDocumento", type="string", length=10, nullable=true)
     */
    private $strdocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteDocumento", type="datetime", nullable=true)
     */
    private $dtedocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeDocumento", type="datetime", nullable=true)
     */
    private $tmedocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCancelacion", type="datetime", nullable=true)
     */
    private $dtecancelacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeCancelacion", type="datetime", nullable=true)
     */
    private $tmecancelacion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie_ky", type="string", length=20, nullable=true)
     */
    private $strserieKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticuloRelacionado_ky", type="string", length=20, nullable=true)
     */
    private $strarticulorelacionadoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerieRelacionado_ky", type="string", length=20, nullable=true)
     */
    private $strserierelacionadoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteExpiracionGarantia", type="datetime", nullable=true)
     */
    private $dteexpiraciongarantia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCliente_id", type="integer", nullable=true)
     */
    private $numclienteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_id", type="integer", nullable=true)
     */
    private $numvendedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFallaReportada_id", type="integer", nullable=true)
     */
    private $numfallareportadaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemFallaReportada", type="text", length=16, nullable=true)
     */
    private $memfallareportada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtePromesaReparacion", type="datetime", nullable=true)
     */
    private $dtepromesareparacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEnvioReparacion", type="datetime", nullable=true)
     */
    private $dteenvioreparacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteRecepcionReparacion", type="datetime", nullable=true)
     */
    private $dterecepcionreparacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReingreso", type="integer", nullable=true)
     */
    private $numreingreso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenVenta_id", type="integer", nullable=true)
     */
    private $numordenventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenOrdenVenta_id", type="integer", nullable=true)
     */
    private $numalmacenordenventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenCompra_id", type="integer", nullable=true)
     */
    private $numordencompraId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenOrdenCompra_id", type="integer", nullable=true)
     */
    private $numalmacenordencompraId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_id", type="integer", nullable=true)
     */
    private $numclasificacionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

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
     * Set numordenservicioId
     *
     * @param integer $numordenservicioId
     * @return Ordenesservicio
     */
    public function setNumordenservicioId($numordenservicioId)
    {
        $this->numordenservicioId = $numordenservicioId;

        return $this;
    }

    /**
     * Get numordenservicioId
     *
     * @return integer 
     */
    public function getNumordenservicioId()
    {
        return $this->numordenservicioId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Ordenesservicio
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
     * Set strdocumento
     *
     * @param string $strdocumento
     * @return Ordenesservicio
     */
    public function setStrdocumento($strdocumento)
    {
        $this->strdocumento = $strdocumento;

        return $this;
    }

    /**
     * Get strdocumento
     *
     * @return string 
     */
    public function getStrdocumento()
    {
        return $this->strdocumento;
    }

    /**
     * Set dtedocumento
     *
     * @param \DateTime $dtedocumento
     * @return Ordenesservicio
     */
    public function setDtedocumento($dtedocumento)
    {
        $this->dtedocumento = $dtedocumento;

        return $this;
    }

    /**
     * Get dtedocumento
     *
     * @return \DateTime 
     */
    public function getDtedocumento()
    {
        return $this->dtedocumento;
    }

    /**
     * Set tmedocumento
     *
     * @param \DateTime $tmedocumento
     * @return Ordenesservicio
     */
    public function setTmedocumento($tmedocumento)
    {
        $this->tmedocumento = $tmedocumento;

        return $this;
    }

    /**
     * Get tmedocumento
     *
     * @return \DateTime 
     */
    public function getTmedocumento()
    {
        return $this->tmedocumento;
    }

    /**
     * Set dtecancelacion
     *
     * @param \DateTime $dtecancelacion
     * @return Ordenesservicio
     */
    public function setDtecancelacion($dtecancelacion)
    {
        $this->dtecancelacion = $dtecancelacion;

        return $this;
    }

    /**
     * Get dtecancelacion
     *
     * @return \DateTime 
     */
    public function getDtecancelacion()
    {
        return $this->dtecancelacion;
    }

    /**
     * Set tmecancelacion
     *
     * @param \DateTime $tmecancelacion
     * @return Ordenesservicio
     */
    public function setTmecancelacion($tmecancelacion)
    {
        $this->tmecancelacion = $tmecancelacion;

        return $this;
    }

    /**
     * Get tmecancelacion
     *
     * @return \DateTime 
     */
    public function getTmecancelacion()
    {
        return $this->tmecancelacion;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Ordenesservicio
     */
    public function setStrreferencia($strreferencia)
    {
        $this->strreferencia = $strreferencia;

        return $this;
    }

    /**
     * Get strreferencia
     *
     * @return string 
     */
    public function getStrreferencia()
    {
        return $this->strreferencia;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Ordenesservicio
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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Ordenesservicio
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
     * Set strserieKy
     *
     * @param string $strserieKy
     * @return Ordenesservicio
     */
    public function setStrserieKy($strserieKy)
    {
        $this->strserieKy = $strserieKy;

        return $this;
    }

    /**
     * Get strserieKy
     *
     * @return string 
     */
    public function getStrserieKy()
    {
        return $this->strserieKy;
    }

    /**
     * Set strarticulorelacionadoKy
     *
     * @param string $strarticulorelacionadoKy
     * @return Ordenesservicio
     */
    public function setStrarticulorelacionadoKy($strarticulorelacionadoKy)
    {
        $this->strarticulorelacionadoKy = $strarticulorelacionadoKy;

        return $this;
    }

    /**
     * Get strarticulorelacionadoKy
     *
     * @return string 
     */
    public function getStrarticulorelacionadoKy()
    {
        return $this->strarticulorelacionadoKy;
    }

    /**
     * Set strserierelacionadoKy
     *
     * @param string $strserierelacionadoKy
     * @return Ordenesservicio
     */
    public function setStrserierelacionadoKy($strserierelacionadoKy)
    {
        $this->strserierelacionadoKy = $strserierelacionadoKy;

        return $this;
    }

    /**
     * Get strserierelacionadoKy
     *
     * @return string 
     */
    public function getStrserierelacionadoKy()
    {
        return $this->strserierelacionadoKy;
    }

    /**
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Ordenesservicio
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
     * Set dteexpiraciongarantia
     *
     * @param \DateTime $dteexpiraciongarantia
     * @return Ordenesservicio
     */
    public function setDteexpiraciongarantia($dteexpiraciongarantia)
    {
        $this->dteexpiraciongarantia = $dteexpiraciongarantia;

        return $this;
    }

    /**
     * Get dteexpiraciongarantia
     *
     * @return \DateTime 
     */
    public function getDteexpiraciongarantia()
    {
        return $this->dteexpiraciongarantia;
    }

    /**
     * Set numclienteId
     *
     * @param integer $numclienteId
     * @return Ordenesservicio
     */
    public function setNumclienteId($numclienteId)
    {
        $this->numclienteId = $numclienteId;

        return $this;
    }

    /**
     * Get numclienteId
     *
     * @return integer 
     */
    public function getNumclienteId()
    {
        return $this->numclienteId;
    }

    /**
     * Set numvendedorId
     *
     * @param integer $numvendedorId
     * @return Ordenesservicio
     */
    public function setNumvendedorId($numvendedorId)
    {
        $this->numvendedorId = $numvendedorId;

        return $this;
    }

    /**
     * Get numvendedorId
     *
     * @return integer 
     */
    public function getNumvendedorId()
    {
        return $this->numvendedorId;
    }

    /**
     * Set numfallareportadaId
     *
     * @param integer $numfallareportadaId
     * @return Ordenesservicio
     */
    public function setNumfallareportadaId($numfallareportadaId)
    {
        $this->numfallareportadaId = $numfallareportadaId;

        return $this;
    }

    /**
     * Get numfallareportadaId
     *
     * @return integer 
     */
    public function getNumfallareportadaId()
    {
        return $this->numfallareportadaId;
    }

    /**
     * Set memfallareportada
     *
     * @param string $memfallareportada
     * @return Ordenesservicio
     */
    public function setMemfallareportada($memfallareportada)
    {
        $this->memfallareportada = $memfallareportada;

        return $this;
    }

    /**
     * Get memfallareportada
     *
     * @return string 
     */
    public function getMemfallareportada()
    {
        return $this->memfallareportada;
    }

    /**
     * Set dtepromesareparacion
     *
     * @param \DateTime $dtepromesareparacion
     * @return Ordenesservicio
     */
    public function setDtepromesareparacion($dtepromesareparacion)
    {
        $this->dtepromesareparacion = $dtepromesareparacion;

        return $this;
    }

    /**
     * Get dtepromesareparacion
     *
     * @return \DateTime 
     */
    public function getDtepromesareparacion()
    {
        return $this->dtepromesareparacion;
    }

    /**
     * Set dteenvioreparacion
     *
     * @param \DateTime $dteenvioreparacion
     * @return Ordenesservicio
     */
    public function setDteenvioreparacion($dteenvioreparacion)
    {
        $this->dteenvioreparacion = $dteenvioreparacion;

        return $this;
    }

    /**
     * Get dteenvioreparacion
     *
     * @return \DateTime 
     */
    public function getDteenvioreparacion()
    {
        return $this->dteenvioreparacion;
    }

    /**
     * Set dterecepcionreparacion
     *
     * @param \DateTime $dterecepcionreparacion
     * @return Ordenesservicio
     */
    public function setDterecepcionreparacion($dterecepcionreparacion)
    {
        $this->dterecepcionreparacion = $dterecepcionreparacion;

        return $this;
    }

    /**
     * Get dterecepcionreparacion
     *
     * @return \DateTime 
     */
    public function getDterecepcionreparacion()
    {
        return $this->dterecepcionreparacion;
    }

    /**
     * Set numreingreso
     *
     * @param integer $numreingreso
     * @return Ordenesservicio
     */
    public function setNumreingreso($numreingreso)
    {
        $this->numreingreso = $numreingreso;

        return $this;
    }

    /**
     * Get numreingreso
     *
     * @return integer 
     */
    public function getNumreingreso()
    {
        return $this->numreingreso;
    }

    /**
     * Set numordenventaId
     *
     * @param integer $numordenventaId
     * @return Ordenesservicio
     */
    public function setNumordenventaId($numordenventaId)
    {
        $this->numordenventaId = $numordenventaId;

        return $this;
    }

    /**
     * Get numordenventaId
     *
     * @return integer 
     */
    public function getNumordenventaId()
    {
        return $this->numordenventaId;
    }

    /**
     * Set numalmacenordenventaId
     *
     * @param integer $numalmacenordenventaId
     * @return Ordenesservicio
     */
    public function setNumalmacenordenventaId($numalmacenordenventaId)
    {
        $this->numalmacenordenventaId = $numalmacenordenventaId;

        return $this;
    }

    /**
     * Get numalmacenordenventaId
     *
     * @return integer 
     */
    public function getNumalmacenordenventaId()
    {
        return $this->numalmacenordenventaId;
    }

    /**
     * Set numordencompraId
     *
     * @param integer $numordencompraId
     * @return Ordenesservicio
     */
    public function setNumordencompraId($numordencompraId)
    {
        $this->numordencompraId = $numordencompraId;

        return $this;
    }

    /**
     * Get numordencompraId
     *
     * @return integer 
     */
    public function getNumordencompraId()
    {
        return $this->numordencompraId;
    }

    /**
     * Set numalmacenordencompraId
     *
     * @param integer $numalmacenordencompraId
     * @return Ordenesservicio
     */
    public function setNumalmacenordencompraId($numalmacenordencompraId)
    {
        $this->numalmacenordencompraId = $numalmacenordencompraId;

        return $this;
    }

    /**
     * Get numalmacenordencompraId
     *
     * @return integer 
     */
    public function getNumalmacenordencompraId()
    {
        return $this->numalmacenordencompraId;
    }

    /**
     * Set numclasificacionId
     *
     * @param integer $numclasificacionId
     * @return Ordenesservicio
     */
    public function setNumclasificacionId($numclasificacionId)
    {
        $this->numclasificacionId = $numclasificacionId;

        return $this;
    }

    /**
     * Get numclasificacionId
     *
     * @return integer 
     */
    public function getNumclasificacionId()
    {
        return $this->numclasificacionId;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Ordenesservicio
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Ordenesservicio
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
     * @return Ordenesservicio
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
     * @return Ordenesservicio
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
     * @return Ordenesservicio
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Ordenesservicio
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
     * @return Ordenesservicio
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
