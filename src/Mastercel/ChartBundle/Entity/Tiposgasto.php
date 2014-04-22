<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposgasto
 *
 * @ORM\Table(name="TiposGasto", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrTipoGasto_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumCategoria_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Tiposgasto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoGasto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numtipogastoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTipoGasto_ky", type="string", length=10, nullable=true)
     */
    private $strtipogastoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

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
     * @ORM\Column(name="NumImpuesto_id", type="integer", nullable=true)
     */
    private $numimpuestoId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogImpuestoIncluido", type="boolean", nullable=true)
     */
    private $logimpuestoincluido = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRequiereReferencia", type="boolean", nullable=true)
     */
    private $logrequierereferencia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedida_id", type="integer", nullable=true)
     */
    private $numunidadmedidaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifa", type="integer", nullable=true)
     */
    private $numtarifa = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidadesTarifa", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidadestarifa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandar", type="integer", nullable=true)
     */
    private $numcostoestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoPromedio", type="integer", nullable=true)
     */
    private $numcostopromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoReal", type="integer", nullable=true)
     */
    private $numcostoreal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuenta_id", type="integer", nullable=true)
     */
    private $numcuentaId = '0';

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
     * Get numtipogastoId
     *
     * @return integer 
     */
    public function getNumtipogastoId()
    {
        return $this->numtipogastoId;
    }

    /**
     * Set strtipogastoKy
     *
     * @param string $strtipogastoKy
     * @return Tiposgasto
     */
    public function setStrtipogastoKy($strtipogastoKy)
    {
        $this->strtipogastoKy = $strtipogastoKy;

        return $this;
    }

    /**
     * Get strtipogastoKy
     *
     * @return string 
     */
    public function getStrtipogastoKy()
    {
        return $this->strtipogastoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tiposgasto
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
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Tiposgasto
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
     * @return Tiposgasto
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
     * Set numimpuestoId
     *
     * @param integer $numimpuestoId
     * @return Tiposgasto
     */
    public function setNumimpuestoId($numimpuestoId)
    {
        $this->numimpuestoId = $numimpuestoId;

        return $this;
    }

    /**
     * Get numimpuestoId
     *
     * @return integer 
     */
    public function getNumimpuestoId()
    {
        return $this->numimpuestoId;
    }

    /**
     * Set logimpuestoincluido
     *
     * @param boolean $logimpuestoincluido
     * @return Tiposgasto
     */
    public function setLogimpuestoincluido($logimpuestoincluido)
    {
        $this->logimpuestoincluido = $logimpuestoincluido;

        return $this;
    }

    /**
     * Get logimpuestoincluido
     *
     * @return boolean 
     */
    public function getLogimpuestoincluido()
    {
        return $this->logimpuestoincluido;
    }

    /**
     * Set logrequierereferencia
     *
     * @param boolean $logrequierereferencia
     * @return Tiposgasto
     */
    public function setLogrequierereferencia($logrequierereferencia)
    {
        $this->logrequierereferencia = $logrequierereferencia;

        return $this;
    }

    /**
     * Get logrequierereferencia
     *
     * @return boolean 
     */
    public function getLogrequierereferencia()
    {
        return $this->logrequierereferencia;
    }

    /**
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Tiposgasto
     */
    public function setNumunidadmedidaId($numunidadmedidaId)
    {
        $this->numunidadmedidaId = $numunidadmedidaId;

        return $this;
    }

    /**
     * Get numunidadmedidaId
     *
     * @return integer 
     */
    public function getNumunidadmedidaId()
    {
        return $this->numunidadmedidaId;
    }

    /**
     * Set numtarifa
     *
     * @param integer $numtarifa
     * @return Tiposgasto
     */
    public function setNumtarifa($numtarifa)
    {
        $this->numtarifa = $numtarifa;

        return $this;
    }

    /**
     * Get numtarifa
     *
     * @return integer 
     */
    public function getNumtarifa()
    {
        return $this->numtarifa;
    }

    /**
     * Set numunidadestarifa
     *
     * @param float $numunidadestarifa
     * @return Tiposgasto
     */
    public function setNumunidadestarifa($numunidadestarifa)
    {
        $this->numunidadestarifa = $numunidadestarifa;

        return $this;
    }

    /**
     * Get numunidadestarifa
     *
     * @return float 
     */
    public function getNumunidadestarifa()
    {
        return $this->numunidadestarifa;
    }

    /**
     * Set numcostoestandar
     *
     * @param integer $numcostoestandar
     * @return Tiposgasto
     */
    public function setNumcostoestandar($numcostoestandar)
    {
        $this->numcostoestandar = $numcostoestandar;

        return $this;
    }

    /**
     * Get numcostoestandar
     *
     * @return integer 
     */
    public function getNumcostoestandar()
    {
        return $this->numcostoestandar;
    }

    /**
     * Set numcostopromedio
     *
     * @param integer $numcostopromedio
     * @return Tiposgasto
     */
    public function setNumcostopromedio($numcostopromedio)
    {
        $this->numcostopromedio = $numcostopromedio;

        return $this;
    }

    /**
     * Get numcostopromedio
     *
     * @return integer 
     */
    public function getNumcostopromedio()
    {
        return $this->numcostopromedio;
    }

    /**
     * Set numcostoreal
     *
     * @param integer $numcostoreal
     * @return Tiposgasto
     */
    public function setNumcostoreal($numcostoreal)
    {
        $this->numcostoreal = $numcostoreal;

        return $this;
    }

    /**
     * Get numcostoreal
     *
     * @return integer 
     */
    public function getNumcostoreal()
    {
        return $this->numcostoreal;
    }

    /**
     * Set numcuentaId
     *
     * @param integer $numcuentaId
     * @return Tiposgasto
     */
    public function setNumcuentaId($numcuentaId)
    {
        $this->numcuentaId = $numcuentaId;

        return $this;
    }

    /**
     * Get numcuentaId
     *
     * @return integer 
     */
    public function getNumcuentaId()
    {
        return $this->numcuentaId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Tiposgasto
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
     * @return Tiposgasto
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
     * @return Tiposgasto
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
     * @return Tiposgasto
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
     * @return Tiposgasto
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
