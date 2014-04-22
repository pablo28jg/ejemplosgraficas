<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oportunidadesdepositos
 *
 * @ORM\Table(name="OportunidadesDepositos", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_2", columns={"NumProspecto_id"}), @ORM\Index(name="Indice_3", columns={"DteDeposito"}), @ORM\Index(name="Indice_4", columns={"StrConcepto"}), @ORM\Index(name="Indice_5", columns={"NumFormaPago_id"}), @ORM\Index(name="Indice_6", columns={"StrReferencia"}), @ORM\Index(name="Indice_7", columns={"NumMoneda_id"})})
 * @ORM\Entity
 */
class Oportunidadesdepositos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numoportunidadId = '0';

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
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProspecto_id", type="integer", nullable=true)
     */
    private $numprospectoId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteDeposito", type="datetime", nullable=true)
     */
    private $dtedeposito;

    /**
     * @var string
     *
     * @ORM\Column(name="StrConcepto", type="string", length=60, nullable=true)
     */
    private $strconcepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFormaPago_id", type="integer", nullable=true)
     */
    private $numformapagoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte", type="integer", nullable=true)
     */
    private $numimporte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTarjeta", type="string", length=20, nullable=true)
     */
    private $strtarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumBanco_id", type="integer", nullable=true)
     */
    private $numbancoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoValidacion", type="string", length=5, nullable=true)
     */
    private $strcodigovalidacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteVencimientoTarjeta", type="datetime", nullable=true)
     */
    private $dtevencimientotarjeta;

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteComision", type="integer", nullable=true)
     */
    private $numimportecomision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuestoComision_id", type="integer", nullable=true)
     */
    private $numimpuestocomisionId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImpuestoComision", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimpuestocomision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaBancaria_id", type="integer", nullable=true)
     */
    private $numcuentabancariaId = '0';

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
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Set numoportunidadId
     *
     * @param integer $numoportunidadId
     * @return Oportunidadesdepositos
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
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Oportunidadesdepositos
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Oportunidadesdepositos
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
     * Set numprospectoId
     *
     * @param integer $numprospectoId
     * @return Oportunidadesdepositos
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
     * Set dtedeposito
     *
     * @param \DateTime $dtedeposito
     * @return Oportunidadesdepositos
     */
    public function setDtedeposito($dtedeposito)
    {
        $this->dtedeposito = $dtedeposito;

        return $this;
    }

    /**
     * Get dtedeposito
     *
     * @return \DateTime 
     */
    public function getDtedeposito()
    {
        return $this->dtedeposito;
    }

    /**
     * Set strconcepto
     *
     * @param string $strconcepto
     * @return Oportunidadesdepositos
     */
    public function setStrconcepto($strconcepto)
    {
        $this->strconcepto = $strconcepto;

        return $this;
    }

    /**
     * Get strconcepto
     *
     * @return string 
     */
    public function getStrconcepto()
    {
        return $this->strconcepto;
    }

    /**
     * Set numformapagoId
     *
     * @param integer $numformapagoId
     * @return Oportunidadesdepositos
     */
    public function setNumformapagoId($numformapagoId)
    {
        $this->numformapagoId = $numformapagoId;

        return $this;
    }

    /**
     * Get numformapagoId
     *
     * @return integer 
     */
    public function getNumformapagoId()
    {
        return $this->numformapagoId;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Oportunidadesdepositos
     */
    public function setNummonedaId($nummonedaId)
    {
        $this->nummonedaId = $nummonedaId;

        return $this;
    }

    /**
     * Get nummonedaId
     *
     * @return integer 
     */
    public function getNummonedaId()
    {
        return $this->nummonedaId;
    }

    /**
     * Set numtipocambio
     *
     * @param float $numtipocambio
     * @return Oportunidadesdepositos
     */
    public function setNumtipocambio($numtipocambio)
    {
        $this->numtipocambio = $numtipocambio;

        return $this;
    }

    /**
     * Get numtipocambio
     *
     * @return float 
     */
    public function getNumtipocambio()
    {
        return $this->numtipocambio;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Oportunidadesdepositos
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
     * Set numimporte
     *
     * @param integer $numimporte
     * @return Oportunidadesdepositos
     */
    public function setNumimporte($numimporte)
    {
        $this->numimporte = $numimporte;

        return $this;
    }

    /**
     * Get numimporte
     *
     * @return integer 
     */
    public function getNumimporte()
    {
        return $this->numimporte;
    }

    /**
     * Set strtarjeta
     *
     * @param string $strtarjeta
     * @return Oportunidadesdepositos
     */
    public function setStrtarjeta($strtarjeta)
    {
        $this->strtarjeta = $strtarjeta;

        return $this;
    }

    /**
     * Get strtarjeta
     *
     * @return string 
     */
    public function getStrtarjeta()
    {
        return $this->strtarjeta;
    }

    /**
     * Set numbancoId
     *
     * @param integer $numbancoId
     * @return Oportunidadesdepositos
     */
    public function setNumbancoId($numbancoId)
    {
        $this->numbancoId = $numbancoId;

        return $this;
    }

    /**
     * Get numbancoId
     *
     * @return integer 
     */
    public function getNumbancoId()
    {
        return $this->numbancoId;
    }

    /**
     * Set strcodigovalidacion
     *
     * @param string $strcodigovalidacion
     * @return Oportunidadesdepositos
     */
    public function setStrcodigovalidacion($strcodigovalidacion)
    {
        $this->strcodigovalidacion = $strcodigovalidacion;

        return $this;
    }

    /**
     * Get strcodigovalidacion
     *
     * @return string 
     */
    public function getStrcodigovalidacion()
    {
        return $this->strcodigovalidacion;
    }

    /**
     * Set dtevencimientotarjeta
     *
     * @param \DateTime $dtevencimientotarjeta
     * @return Oportunidadesdepositos
     */
    public function setDtevencimientotarjeta($dtevencimientotarjeta)
    {
        $this->dtevencimientotarjeta = $dtevencimientotarjeta;

        return $this;
    }

    /**
     * Get dtevencimientotarjeta
     *
     * @return \DateTime 
     */
    public function getDtevencimientotarjeta()
    {
        return $this->dtevencimientotarjeta;
    }

    /**
     * Set numporcentajecomision
     *
     * @param float $numporcentajecomision
     * @return Oportunidadesdepositos
     */
    public function setNumporcentajecomision($numporcentajecomision)
    {
        $this->numporcentajecomision = $numporcentajecomision;

        return $this;
    }

    /**
     * Get numporcentajecomision
     *
     * @return float 
     */
    public function getNumporcentajecomision()
    {
        return $this->numporcentajecomision;
    }

    /**
     * Set numimportecomision
     *
     * @param integer $numimportecomision
     * @return Oportunidadesdepositos
     */
    public function setNumimportecomision($numimportecomision)
    {
        $this->numimportecomision = $numimportecomision;

        return $this;
    }

    /**
     * Get numimportecomision
     *
     * @return integer 
     */
    public function getNumimportecomision()
    {
        return $this->numimportecomision;
    }

    /**
     * Set numimpuestocomisionId
     *
     * @param integer $numimpuestocomisionId
     * @return Oportunidadesdepositos
     */
    public function setNumimpuestocomisionId($numimpuestocomisionId)
    {
        $this->numimpuestocomisionId = $numimpuestocomisionId;

        return $this;
    }

    /**
     * Get numimpuestocomisionId
     *
     * @return integer 
     */
    public function getNumimpuestocomisionId()
    {
        return $this->numimpuestocomisionId;
    }

    /**
     * Set numporcentajeimpuestocomision
     *
     * @param float $numporcentajeimpuestocomision
     * @return Oportunidadesdepositos
     */
    public function setNumporcentajeimpuestocomision($numporcentajeimpuestocomision)
    {
        $this->numporcentajeimpuestocomision = $numporcentajeimpuestocomision;

        return $this;
    }

    /**
     * Get numporcentajeimpuestocomision
     *
     * @return float 
     */
    public function getNumporcentajeimpuestocomision()
    {
        return $this->numporcentajeimpuestocomision;
    }

    /**
     * Set numcuentabancariaId
     *
     * @param integer $numcuentabancariaId
     * @return Oportunidadesdepositos
     */
    public function setNumcuentabancariaId($numcuentabancariaId)
    {
        $this->numcuentabancariaId = $numcuentabancariaId;

        return $this;
    }

    /**
     * Get numcuentabancariaId
     *
     * @return integer 
     */
    public function getNumcuentabancariaId()
    {
        return $this->numcuentabancariaId;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Oportunidadesdepositos
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
     * @return Oportunidadesdepositos
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
     * @return Oportunidadesdepositos
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
     * @return Oportunidadesdepositos
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
     * @return Oportunidadesdepositos
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
     * @return Oportunidadesdepositos
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
