<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionesmovimientos
 *
 * @ORM\Table(name="TransaccionesMovimientos", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id", "NumCaja_id", "NumCorte_id", "NumBalance_id", "NumFolio_id", "NumFormaPago_id"}), @ORM\Index(name="Indice_2", columns={"DteTransaccion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEjercicio_id", "NumPeriodo"}), @ORM\Index(name="Indice_5", columns={"NumEjercicio_id", "NumSemana"}), @ORM\Index(name="Indice_6", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Transaccionesmovimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMovimiento_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nummovimientoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumCaja_id", type="integer", nullable=true)
     */
    private $numcajaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCorte_id", type="integer", nullable=true)
     */
    private $numcorteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCortePreliminar_id", type="integer", nullable=true)
     */
    private $numcortepreliminarId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumBalance_id", type="integer", nullable=true)
     */
    private $numbalanceId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio_id", type="integer", nullable=true)
     */
    private $numfolioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=true)
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodo", type="integer", nullable=true)
     */
    private $numperiodo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSemana", type="integer", nullable=true)
     */
    private $numsemana = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_3_id", type="integer", nullable=true)
     */
    private $numvendedor3Id = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumImporte", type="integer", nullable=true)
     */
    private $numimporte = '0';

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
     * Set nummovimientoId
     *
     * @param integer $nummovimientoId
     * @return Transaccionesmovimientos
     */
    public function setNummovimientoId($nummovimientoId)
    {
        $this->nummovimientoId = $nummovimientoId;

        return $this;
    }

    /**
     * Get nummovimientoId
     *
     * @return integer 
     */
    public function getNummovimientoId()
    {
        return $this->nummovimientoId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Transaccionesmovimientos
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
     * Set dtetransaccion
     *
     * @param \DateTime $dtetransaccion
     * @return Transaccionesmovimientos
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
     * @return Transaccionesmovimientos
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
     * Set numcajaId
     *
     * @param integer $numcajaId
     * @return Transaccionesmovimientos
     */
    public function setNumcajaId($numcajaId)
    {
        $this->numcajaId = $numcajaId;

        return $this;
    }

    /**
     * Get numcajaId
     *
     * @return integer 
     */
    public function getNumcajaId()
    {
        return $this->numcajaId;
    }

    /**
     * Set numcorteId
     *
     * @param integer $numcorteId
     * @return Transaccionesmovimientos
     */
    public function setNumcorteId($numcorteId)
    {
        $this->numcorteId = $numcorteId;

        return $this;
    }

    /**
     * Get numcorteId
     *
     * @return integer 
     */
    public function getNumcorteId()
    {
        return $this->numcorteId;
    }

    /**
     * Set numcortepreliminarId
     *
     * @param integer $numcortepreliminarId
     * @return Transaccionesmovimientos
     */
    public function setNumcortepreliminarId($numcortepreliminarId)
    {
        $this->numcortepreliminarId = $numcortepreliminarId;

        return $this;
    }

    /**
     * Get numcortepreliminarId
     *
     * @return integer 
     */
    public function getNumcortepreliminarId()
    {
        return $this->numcortepreliminarId;
    }

    /**
     * Set numbalanceId
     *
     * @param integer $numbalanceId
     * @return Transaccionesmovimientos
     */
    public function setNumbalanceId($numbalanceId)
    {
        $this->numbalanceId = $numbalanceId;

        return $this;
    }

    /**
     * Get numbalanceId
     *
     * @return integer 
     */
    public function getNumbalanceId()
    {
        return $this->numbalanceId;
    }

    /**
     * Set numfolioId
     *
     * @param integer $numfolioId
     * @return Transaccionesmovimientos
     */
    public function setNumfolioId($numfolioId)
    {
        $this->numfolioId = $numfolioId;

        return $this;
    }

    /**
     * Get numfolioId
     *
     * @return integer 
     */
    public function getNumfolioId()
    {
        return $this->numfolioId;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Transaccionesmovimientos
     */
    public function setNumejercicioId($numejercicioId)
    {
        $this->numejercicioId = $numejercicioId;

        return $this;
    }

    /**
     * Get numejercicioId
     *
     * @return integer 
     */
    public function getNumejercicioId()
    {
        return $this->numejercicioId;
    }

    /**
     * Set numperiodo
     *
     * @param integer $numperiodo
     * @return Transaccionesmovimientos
     */
    public function setNumperiodo($numperiodo)
    {
        $this->numperiodo = $numperiodo;

        return $this;
    }

    /**
     * Get numperiodo
     *
     * @return integer 
     */
    public function getNumperiodo()
    {
        return $this->numperiodo;
    }

    /**
     * Set numsemana
     *
     * @param integer $numsemana
     * @return Transaccionesmovimientos
     */
    public function setNumsemana($numsemana)
    {
        $this->numsemana = $numsemana;

        return $this;
    }

    /**
     * Get numsemana
     *
     * @return integer 
     */
    public function getNumsemana()
    {
        return $this->numsemana;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Transaccionesmovimientos
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
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Transaccionesmovimientos
     */
    public function setNumcentrocontrolId($numcentrocontrolId)
    {
        $this->numcentrocontrolId = $numcentrocontrolId;

        return $this;
    }

    /**
     * Get numcentrocontrolId
     *
     * @return integer 
     */
    public function getNumcentrocontrolId()
    {
        return $this->numcentrocontrolId;
    }

    /**
     * Set numvendedor3Id
     *
     * @param integer $numvendedor3Id
     * @return Transaccionesmovimientos
     */
    public function setNumvendedor3Id($numvendedor3Id)
    {
        $this->numvendedor3Id = $numvendedor3Id;

        return $this;
    }

    /**
     * Get numvendedor3Id
     *
     * @return integer 
     */
    public function getNumvendedor3Id()
    {
        return $this->numvendedor3Id;
    }

    /**
     * Set numformapagoId
     *
     * @param integer $numformapagoId
     * @return Transaccionesmovimientos
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
     * @return Transaccionesmovimientos
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
     * @return Transaccionesmovimientos
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
     * Set numimporte
     *
     * @param integer $numimporte
     * @return Transaccionesmovimientos
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Transaccionesmovimientos
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
     * @return Transaccionesmovimientos
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
     * @return Transaccionesmovimientos
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
     * @return Transaccionesmovimientos
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
     * @return Transaccionesmovimientos
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
     * @return Transaccionesmovimientos
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
