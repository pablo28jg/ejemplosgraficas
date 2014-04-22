<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formaspago
 *
 * @ORM\Table(name="FormasPago", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrFormaPago_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_5", columns={"NumConceptoPagoProveedor_id"}), @ORM\Index(name="Indice_6", columns={"NumConceptoReembolsoProveedor_id"}), @ORM\Index(name="Indice_7", columns={"NumConceptoCobroCliente_id"}), @ORM\Index(name="Indice_8", columns={"NumConceptoReembolsoCliente_id"})})
 * @ORM\Entity
 */
class Formaspago
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumFormaPago_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numformapagoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrFormaPago_ky", type="string", length=10, nullable=true)
     */
    private $strformapagoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=true)
     */
    private $numcategoriaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSucursalBancaria_id", type="integer", nullable=true)
     */
    private $numsucursalbancariaId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumDiasRecuperacion", type="integer", nullable=true)
     */
    private $numdiasrecuperacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAutorizacion", type="integer", nullable=true)
     */
    private $numtipoautorizacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFormaPagoCambio_id", type="integer", nullable=true)
     */
    private $numformapagocambioId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRequiereImporte", type="boolean", nullable=true)
     */
    private $logrequiereimporte = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAutorizarImporte", type="boolean", nullable=true)
     */
    private $logautorizarimporte = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteAutorizado", type="integer", nullable=true)
     */
    private $numimporteautorizado = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAbrirCajon", type="boolean", nullable=true)
     */
    private $logabrircajon = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAplicarDevolucion", type="boolean", nullable=true)
     */
    private $logaplicardevolucion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConceptoPagoProveedor_id", type="integer", nullable=true)
     */
    private $numconceptopagoproveedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConceptoReembolsoProveedor_id", type="integer", nullable=true)
     */
    private $numconceptoreembolsoproveedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConceptoCobroCliente_id", type="integer", nullable=true)
     */
    private $numconceptocobroclienteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConceptoReembolsoCliente_id", type="integer", nullable=true)
     */
    private $numconceptoreembolsoclienteId = '0';

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
     * Get numformapagoId
     *
     * @return integer 
     */
    public function getNumformapagoId()
    {
        return $this->numformapagoId;
    }

    /**
     * Set strformapagoKy
     *
     * @param string $strformapagoKy
     * @return Formaspago
     */
    public function setStrformapagoKy($strformapagoKy)
    {
        $this->strformapagoKy = $strformapagoKy;

        return $this;
    }

    /**
     * Get strformapagoKy
     *
     * @return string 
     */
    public function getStrformapagoKy()
    {
        return $this->strformapagoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Formaspago
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
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Formaspago
     */
    public function setNumtipo($numtipo)
    {
        $this->numtipo = $numtipo;

        return $this;
    }

    /**
     * Get numtipo
     *
     * @return integer 
     */
    public function getNumtipo()
    {
        return $this->numtipo;
    }

    /**
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Formaspago
     */
    public function setNumcategoriaId($numcategoriaId)
    {
        $this->numcategoriaId = $numcategoriaId;

        return $this;
    }

    /**
     * Get numcategoriaId
     *
     * @return integer 
     */
    public function getNumcategoriaId()
    {
        return $this->numcategoriaId;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Formaspago
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
     * Set numsucursalbancariaId
     *
     * @param integer $numsucursalbancariaId
     * @return Formaspago
     */
    public function setNumsucursalbancariaId($numsucursalbancariaId)
    {
        $this->numsucursalbancariaId = $numsucursalbancariaId;

        return $this;
    }

    /**
     * Get numsucursalbancariaId
     *
     * @return integer 
     */
    public function getNumsucursalbancariaId()
    {
        return $this->numsucursalbancariaId;
    }

    /**
     * Set numporcentajecomision
     *
     * @param float $numporcentajecomision
     * @return Formaspago
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
     * @return Formaspago
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
     * @return Formaspago
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
     * Set numdiasrecuperacion
     *
     * @param integer $numdiasrecuperacion
     * @return Formaspago
     */
    public function setNumdiasrecuperacion($numdiasrecuperacion)
    {
        $this->numdiasrecuperacion = $numdiasrecuperacion;

        return $this;
    }

    /**
     * Get numdiasrecuperacion
     *
     * @return integer 
     */
    public function getNumdiasrecuperacion()
    {
        return $this->numdiasrecuperacion;
    }

    /**
     * Set numtipoautorizacion
     *
     * @param integer $numtipoautorizacion
     * @return Formaspago
     */
    public function setNumtipoautorizacion($numtipoautorizacion)
    {
        $this->numtipoautorizacion = $numtipoautorizacion;

        return $this;
    }

    /**
     * Get numtipoautorizacion
     *
     * @return integer 
     */
    public function getNumtipoautorizacion()
    {
        return $this->numtipoautorizacion;
    }

    /**
     * Set numformapagocambioId
     *
     * @param integer $numformapagocambioId
     * @return Formaspago
     */
    public function setNumformapagocambioId($numformapagocambioId)
    {
        $this->numformapagocambioId = $numformapagocambioId;

        return $this;
    }

    /**
     * Get numformapagocambioId
     *
     * @return integer 
     */
    public function getNumformapagocambioId()
    {
        return $this->numformapagocambioId;
    }

    /**
     * Set logrequiereimporte
     *
     * @param boolean $logrequiereimporte
     * @return Formaspago
     */
    public function setLogrequiereimporte($logrequiereimporte)
    {
        $this->logrequiereimporte = $logrequiereimporte;

        return $this;
    }

    /**
     * Get logrequiereimporte
     *
     * @return boolean 
     */
    public function getLogrequiereimporte()
    {
        return $this->logrequiereimporte;
    }

    /**
     * Set logautorizarimporte
     *
     * @param boolean $logautorizarimporte
     * @return Formaspago
     */
    public function setLogautorizarimporte($logautorizarimporte)
    {
        $this->logautorizarimporte = $logautorizarimporte;

        return $this;
    }

    /**
     * Get logautorizarimporte
     *
     * @return boolean 
     */
    public function getLogautorizarimporte()
    {
        return $this->logautorizarimporte;
    }

    /**
     * Set numimporteautorizado
     *
     * @param integer $numimporteautorizado
     * @return Formaspago
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
     * Set logabrircajon
     *
     * @param boolean $logabrircajon
     * @return Formaspago
     */
    public function setLogabrircajon($logabrircajon)
    {
        $this->logabrircajon = $logabrircajon;

        return $this;
    }

    /**
     * Get logabrircajon
     *
     * @return boolean 
     */
    public function getLogabrircajon()
    {
        return $this->logabrircajon;
    }

    /**
     * Set logaplicardevolucion
     *
     * @param boolean $logaplicardevolucion
     * @return Formaspago
     */
    public function setLogaplicardevolucion($logaplicardevolucion)
    {
        $this->logaplicardevolucion = $logaplicardevolucion;

        return $this;
    }

    /**
     * Get logaplicardevolucion
     *
     * @return boolean 
     */
    public function getLogaplicardevolucion()
    {
        return $this->logaplicardevolucion;
    }

    /**
     * Set numconceptopagoproveedorId
     *
     * @param integer $numconceptopagoproveedorId
     * @return Formaspago
     */
    public function setNumconceptopagoproveedorId($numconceptopagoproveedorId)
    {
        $this->numconceptopagoproveedorId = $numconceptopagoproveedorId;

        return $this;
    }

    /**
     * Get numconceptopagoproveedorId
     *
     * @return integer 
     */
    public function getNumconceptopagoproveedorId()
    {
        return $this->numconceptopagoproveedorId;
    }

    /**
     * Set numconceptoreembolsoproveedorId
     *
     * @param integer $numconceptoreembolsoproveedorId
     * @return Formaspago
     */
    public function setNumconceptoreembolsoproveedorId($numconceptoreembolsoproveedorId)
    {
        $this->numconceptoreembolsoproveedorId = $numconceptoreembolsoproveedorId;

        return $this;
    }

    /**
     * Get numconceptoreembolsoproveedorId
     *
     * @return integer 
     */
    public function getNumconceptoreembolsoproveedorId()
    {
        return $this->numconceptoreembolsoproveedorId;
    }

    /**
     * Set numconceptocobroclienteId
     *
     * @param integer $numconceptocobroclienteId
     * @return Formaspago
     */
    public function setNumconceptocobroclienteId($numconceptocobroclienteId)
    {
        $this->numconceptocobroclienteId = $numconceptocobroclienteId;

        return $this;
    }

    /**
     * Get numconceptocobroclienteId
     *
     * @return integer 
     */
    public function getNumconceptocobroclienteId()
    {
        return $this->numconceptocobroclienteId;
    }

    /**
     * Set numconceptoreembolsoclienteId
     *
     * @param integer $numconceptoreembolsoclienteId
     * @return Formaspago
     */
    public function setNumconceptoreembolsoclienteId($numconceptoreembolsoclienteId)
    {
        $this->numconceptoreembolsoclienteId = $numconceptoreembolsoclienteId;

        return $this;
    }

    /**
     * Get numconceptoreembolsoclienteId
     *
     * @return integer 
     */
    public function getNumconceptoreembolsoclienteId()
    {
        return $this->numconceptoreembolsoclienteId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Formaspago
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
     * @return Formaspago
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
     * @return Formaspago
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
     * @return Formaspago
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
     * @return Formaspago
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
     * @return Formaspago
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
