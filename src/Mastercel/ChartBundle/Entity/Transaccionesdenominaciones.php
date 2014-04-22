<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionesdenominaciones
 *
 * @ORM\Table(name="TransaccionesDenominaciones", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"})})
 * @ORM\Entity
 */
class Transaccionesdenominaciones
{
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
     * @ORM\Column(name="NumCaja_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcajaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCorte_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcorteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCortePreliminar_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcortepreliminarId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumBalance_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numbalanceId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numfolioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFormaPago_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numformapagoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDenominacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numdenominacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

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
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCambio", type="integer", nullable=true)
     */
    private $numtipocambio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDenominacion", type="integer", nullable=true)
     */
    private $numtipodenominacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCantidad", type="integer", nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte", type="integer", nullable=true)
     */
    private $numimporte = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotal", type="integer", nullable=true)
     */
    private $numtotal = '0';

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
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Transaccionesdenominaciones
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
     * Set numcajaId
     *
     * @param integer $numcajaId
     * @return Transaccionesdenominaciones
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
     * @return Transaccionesdenominaciones
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
     * @return Transaccionesdenominaciones
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
     * @return Transaccionesdenominaciones
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
     * @return Transaccionesdenominaciones
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
     * Set numformapagoId
     *
     * @param integer $numformapagoId
     * @return Transaccionesdenominaciones
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
     * Set numdenominacionId
     *
     * @param integer $numdenominacionId
     * @return Transaccionesdenominaciones
     */
    public function setNumdenominacionId($numdenominacionId)
    {
        $this->numdenominacionId = $numdenominacionId;

        return $this;
    }

    /**
     * Get numdenominacionId
     *
     * @return integer 
     */
    public function getNumdenominacionId()
    {
        return $this->numdenominacionId;
    }

    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Transaccionesdenominaciones
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
     * Set dtetransaccion
     *
     * @param \DateTime $dtetransaccion
     * @return Transaccionesdenominaciones
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
     * @return Transaccionesdenominaciones
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
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Transaccionesdenominaciones
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
     * @param integer $numtipocambio
     * @return Transaccionesdenominaciones
     */
    public function setNumtipocambio($numtipocambio)
    {
        $this->numtipocambio = $numtipocambio;

        return $this;
    }

    /**
     * Get numtipocambio
     *
     * @return integer 
     */
    public function getNumtipocambio()
    {
        return $this->numtipocambio;
    }

    /**
     * Set numtipodenominacion
     *
     * @param integer $numtipodenominacion
     * @return Transaccionesdenominaciones
     */
    public function setNumtipodenominacion($numtipodenominacion)
    {
        $this->numtipodenominacion = $numtipodenominacion;

        return $this;
    }

    /**
     * Get numtipodenominacion
     *
     * @return integer 
     */
    public function getNumtipodenominacion()
    {
        return $this->numtipodenominacion;
    }

    /**
     * Set numcantidad
     *
     * @param integer $numcantidad
     * @return Transaccionesdenominaciones
     */
    public function setNumcantidad($numcantidad)
    {
        $this->numcantidad = $numcantidad;

        return $this;
    }

    /**
     * Get numcantidad
     *
     * @return integer 
     */
    public function getNumcantidad()
    {
        return $this->numcantidad;
    }

    /**
     * Set numimporte
     *
     * @param integer $numimporte
     * @return Transaccionesdenominaciones
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
     * Set numtotal
     *
     * @param integer $numtotal
     * @return Transaccionesdenominaciones
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Transaccionesdenominaciones
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
     * @return Transaccionesdenominaciones
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
     * @return Transaccionesdenominaciones
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
     * @return Transaccionesdenominaciones
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
}
