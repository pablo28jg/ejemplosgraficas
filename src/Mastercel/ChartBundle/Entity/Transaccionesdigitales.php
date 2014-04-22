<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionesdigitales
 *
 * @ORM\Table(name="TransaccionesDigitales", indexes={@ORM\Index(name="Indice_1", columns={"DteTransaccion", "TmeTransaccion"}), @ORM\Index(name="Indice_2", columns={"DteCancelacion", "TmeCancelacion"}), @ORM\Index(name="Indice_3", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_4", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_5", columns={"NumEntidad_id"}), @ORM\Index(name="Indice_6", columns={"StrTransaccion"}), @ORM\Index(name="Indice_7", columns={"StrSerie", "NumFolio"}), @ORM\Index(name="Indice_8", columns={"NumFolio", "StrSerie"}), @ORM\Index(name="Indice_9", columns={"StrRFC"}), @ORM\Index(name="Indice_10", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Transaccionesdigitales
{
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
     * @var string
     *
     * @ORM\Column(name="StrTransaccion", type="string", length=10, nullable=true)
     */
    private $strtransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTransaccion", type="datetime", nullable=true)
     */
    private $dtetransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeTransaccion", type="datetime", nullable=true)
     */
    private $tmetransaccion;

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
     * @ORM\Column(name="StrRFC", type="string", length=13, nullable=true)
     */
    private $strrfc;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie", type="string", length=3, nullable=true)
     */
    private $strserie;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio", type="integer", nullable=true)
     */
    private $numfolio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAprobacion", type="integer", nullable=true)
     */
    private $numaprobacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAnioAprobacion", type="integer", nullable=true)
     */
    private $numanioaprobacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNumeroCertificado", type="string", length=20, nullable=true)
     */
    private $strnumerocertificado;

    /**
     * @var string
     *
     * @ORM\Column(name="MemCertificado", type="text", length=16, nullable=true)
     */
    private $memcertificado;

    /**
     * @var string
     *
     * @ORM\Column(name="MemXML", type="text", length=16, nullable=true)
     */
    private $memxml;

    /**
     * @var string
     *
     * @ORM\Column(name="MemCadenaOriginal", type="text", length=16, nullable=true)
     */
    private $memcadenaoriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="MemSelloDigital", type="text", length=16, nullable=true)
     */
    private $memsellodigital;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConcepto_id", type="integer", nullable=true)
     */
    private $numconceptoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuesto", type="integer", nullable=true)
     */
    private $numtotalimpuesto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalImpuestoRetenido", type="integer", nullable=true)
     */
    private $numtotalimpuestoretenido = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotal", type="integer", nullable=true)
     */
    private $numtotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="NumTipoCambio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numtipocambio = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '1';



    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transaccionesdigitales
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
     * @return Transaccionesdigitales
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
     * @return Transaccionesdigitales
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
     * Set strtransaccion
     *
     * @param string $strtransaccion
     * @return Transaccionesdigitales
     */
    public function setStrtransaccion($strtransaccion)
    {
        $this->strtransaccion = $strtransaccion;

        return $this;
    }

    /**
     * Get strtransaccion
     *
     * @return string 
     */
    public function getStrtransaccion()
    {
        return $this->strtransaccion;
    }

    /**
     * Set dtetransaccion
     *
     * @param \DateTime $dtetransaccion
     * @return Transaccionesdigitales
     */
    public function setDtetransaccion($dtetransaccion)
    {
        $this->dtetransaccion = $dtetransaccion;

        return $this;
    }

    /**
     * Get dtetransaccion
     *
     * @return \DateTime 
     */
    public function getDtetransaccion()
    {
        return $this->dtetransaccion;
    }

    /**
     * Set tmetransaccion
     *
     * @param \DateTime $tmetransaccion
     * @return Transaccionesdigitales
     */
    public function setTmetransaccion($tmetransaccion)
    {
        $this->tmetransaccion = $tmetransaccion;

        return $this;
    }

    /**
     * Get tmetransaccion
     *
     * @return \DateTime 
     */
    public function getTmetransaccion()
    {
        return $this->tmetransaccion;
    }

    /**
     * Set dtecancelacion
     *
     * @param \DateTime $dtecancelacion
     * @return Transaccionesdigitales
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
     * @return Transaccionesdigitales
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
     * Set strrfc
     *
     * @param string $strrfc
     * @return Transaccionesdigitales
     */
    public function setStrrfc($strrfc)
    {
        $this->strrfc = $strrfc;

        return $this;
    }

    /**
     * Get strrfc
     *
     * @return string 
     */
    public function getStrrfc()
    {
        return $this->strrfc;
    }

    /**
     * Set strserie
     *
     * @param string $strserie
     * @return Transaccionesdigitales
     */
    public function setStrserie($strserie)
    {
        $this->strserie = $strserie;

        return $this;
    }

    /**
     * Get strserie
     *
     * @return string 
     */
    public function getStrserie()
    {
        return $this->strserie;
    }

    /**
     * Set numfolio
     *
     * @param integer $numfolio
     * @return Transaccionesdigitales
     */
    public function setNumfolio($numfolio)
    {
        $this->numfolio = $numfolio;

        return $this;
    }

    /**
     * Get numfolio
     *
     * @return integer 
     */
    public function getNumfolio()
    {
        return $this->numfolio;
    }

    /**
     * Set numaprobacion
     *
     * @param integer $numaprobacion
     * @return Transaccionesdigitales
     */
    public function setNumaprobacion($numaprobacion)
    {
        $this->numaprobacion = $numaprobacion;

        return $this;
    }

    /**
     * Get numaprobacion
     *
     * @return integer 
     */
    public function getNumaprobacion()
    {
        return $this->numaprobacion;
    }

    /**
     * Set numanioaprobacion
     *
     * @param integer $numanioaprobacion
     * @return Transaccionesdigitales
     */
    public function setNumanioaprobacion($numanioaprobacion)
    {
        $this->numanioaprobacion = $numanioaprobacion;

        return $this;
    }

    /**
     * Get numanioaprobacion
     *
     * @return integer 
     */
    public function getNumanioaprobacion()
    {
        return $this->numanioaprobacion;
    }

    /**
     * Set strnumerocertificado
     *
     * @param string $strnumerocertificado
     * @return Transaccionesdigitales
     */
    public function setStrnumerocertificado($strnumerocertificado)
    {
        $this->strnumerocertificado = $strnumerocertificado;

        return $this;
    }

    /**
     * Get strnumerocertificado
     *
     * @return string 
     */
    public function getStrnumerocertificado()
    {
        return $this->strnumerocertificado;
    }

    /**
     * Set memcertificado
     *
     * @param string $memcertificado
     * @return Transaccionesdigitales
     */
    public function setMemcertificado($memcertificado)
    {
        $this->memcertificado = $memcertificado;

        return $this;
    }

    /**
     * Get memcertificado
     *
     * @return string 
     */
    public function getMemcertificado()
    {
        return $this->memcertificado;
    }

    /**
     * Set memxml
     *
     * @param string $memxml
     * @return Transaccionesdigitales
     */
    public function setMemxml($memxml)
    {
        $this->memxml = $memxml;

        return $this;
    }

    /**
     * Get memxml
     *
     * @return string 
     */
    public function getMemxml()
    {
        return $this->memxml;
    }

    /**
     * Set memcadenaoriginal
     *
     * @param string $memcadenaoriginal
     * @return Transaccionesdigitales
     */
    public function setMemcadenaoriginal($memcadenaoriginal)
    {
        $this->memcadenaoriginal = $memcadenaoriginal;

        return $this;
    }

    /**
     * Get memcadenaoriginal
     *
     * @return string 
     */
    public function getMemcadenaoriginal()
    {
        return $this->memcadenaoriginal;
    }

    /**
     * Set memsellodigital
     *
     * @param string $memsellodigital
     * @return Transaccionesdigitales
     */
    public function setMemsellodigital($memsellodigital)
    {
        $this->memsellodigital = $memsellodigital;

        return $this;
    }

    /**
     * Get memsellodigital
     *
     * @return string 
     */
    public function getMemsellodigital()
    {
        return $this->memsellodigital;
    }

    /**
     * Set numconceptoId
     *
     * @param integer $numconceptoId
     * @return Transaccionesdigitales
     */
    public function setNumconceptoId($numconceptoId)
    {
        $this->numconceptoId = $numconceptoId;

        return $this;
    }

    /**
     * Get numconceptoId
     *
     * @return integer 
     */
    public function getNumconceptoId()
    {
        return $this->numconceptoId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Transaccionesdigitales
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
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Transaccionesdigitales
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
     * Set numtotalimpuesto
     *
     * @param integer $numtotalimpuesto
     * @return Transaccionesdigitales
     */
    public function setNumtotalimpuesto($numtotalimpuesto)
    {
        $this->numtotalimpuesto = $numtotalimpuesto;

        return $this;
    }

    /**
     * Get numtotalimpuesto
     *
     * @return integer 
     */
    public function getNumtotalimpuesto()
    {
        return $this->numtotalimpuesto;
    }

    /**
     * Set numtotalimpuestoretenido
     *
     * @param integer $numtotalimpuestoretenido
     * @return Transaccionesdigitales
     */
    public function setNumtotalimpuestoretenido($numtotalimpuestoretenido)
    {
        $this->numtotalimpuestoretenido = $numtotalimpuestoretenido;

        return $this;
    }

    /**
     * Get numtotalimpuestoretenido
     *
     * @return integer 
     */
    public function getNumtotalimpuestoretenido()
    {
        return $this->numtotalimpuestoretenido;
    }

    /**
     * Set numtotal
     *
     * @param integer $numtotal
     * @return Transaccionesdigitales
     */
    public function setNumtotal($numtotal)
    {
        $this->numtotal = $numtotal;

        return $this;
    }

    /**
     * Get numtotal
     *
     * @return integer 
     */
    public function getNumtotal()
    {
        return $this->numtotal;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Transaccionesdigitales
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
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Transaccionesdigitales
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
     * @return Transaccionesdigitales
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
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Transaccionesdigitales
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
