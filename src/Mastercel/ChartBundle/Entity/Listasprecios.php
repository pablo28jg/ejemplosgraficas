<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listasprecios
 *
 * @ORM\Table(name="ListasPrecios", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Listasprecios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumListaPrecio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numlistaprecioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelesPrecio", type="integer", nullable=true)
     */
    private $numnivelesprecio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCalculoPrecio", type="integer", nullable=true)
     */
    private $numtipocalculoprecio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoRedondeo", type="integer", nullable=true)
     */
    private $numtiporedondeo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteAumento", type="integer", nullable=true)
     */
    private $numimporteaumento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumValorAjuste", type="integer", nullable=true)
     */
    private $numvalorajuste = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPosiciones", type="integer", nullable=true)
     */
    private $numposiciones = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogCalculaCompra", type="boolean", nullable=true)
     */
    private $logcalculacompra = '0';

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
     * Get numlistaprecioId
     *
     * @return integer 
     */
    public function getNumlistaprecioId()
    {
        return $this->numlistaprecioId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Listasprecios
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
     * Set numnivelesprecio
     *
     * @param integer $numnivelesprecio
     * @return Listasprecios
     */
    public function setNumnivelesprecio($numnivelesprecio)
    {
        $this->numnivelesprecio = $numnivelesprecio;

        return $this;
    }

    /**
     * Get numnivelesprecio
     *
     * @return integer 
     */
    public function getNumnivelesprecio()
    {
        return $this->numnivelesprecio;
    }

    /**
     * Set numtipocalculoprecio
     *
     * @param integer $numtipocalculoprecio
     * @return Listasprecios
     */
    public function setNumtipocalculoprecio($numtipocalculoprecio)
    {
        $this->numtipocalculoprecio = $numtipocalculoprecio;

        return $this;
    }

    /**
     * Get numtipocalculoprecio
     *
     * @return integer 
     */
    public function getNumtipocalculoprecio()
    {
        return $this->numtipocalculoprecio;
    }

    /**
     * Set numtiporedondeo
     *
     * @param integer $numtiporedondeo
     * @return Listasprecios
     */
    public function setNumtiporedondeo($numtiporedondeo)
    {
        $this->numtiporedondeo = $numtiporedondeo;

        return $this;
    }

    /**
     * Get numtiporedondeo
     *
     * @return integer 
     */
    public function getNumtiporedondeo()
    {
        return $this->numtiporedondeo;
    }

    /**
     * Set numimporteaumento
     *
     * @param integer $numimporteaumento
     * @return Listasprecios
     */
    public function setNumimporteaumento($numimporteaumento)
    {
        $this->numimporteaumento = $numimporteaumento;

        return $this;
    }

    /**
     * Get numimporteaumento
     *
     * @return integer 
     */
    public function getNumimporteaumento()
    {
        return $this->numimporteaumento;
    }

    /**
     * Set numvalorajuste
     *
     * @param integer $numvalorajuste
     * @return Listasprecios
     */
    public function setNumvalorajuste($numvalorajuste)
    {
        $this->numvalorajuste = $numvalorajuste;

        return $this;
    }

    /**
     * Get numvalorajuste
     *
     * @return integer 
     */
    public function getNumvalorajuste()
    {
        return $this->numvalorajuste;
    }

    /**
     * Set numposiciones
     *
     * @param integer $numposiciones
     * @return Listasprecios
     */
    public function setNumposiciones($numposiciones)
    {
        $this->numposiciones = $numposiciones;

        return $this;
    }

    /**
     * Get numposiciones
     *
     * @return integer 
     */
    public function getNumposiciones()
    {
        return $this->numposiciones;
    }

    /**
     * Set logcalculacompra
     *
     * @param boolean $logcalculacompra
     * @return Listasprecios
     */
    public function setLogcalculacompra($logcalculacompra)
    {
        $this->logcalculacompra = $logcalculacompra;

        return $this;
    }

    /**
     * Get logcalculacompra
     *
     * @return boolean 
     */
    public function getLogcalculacompra()
    {
        return $this->logcalculacompra;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Listasprecios
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
     * @return Listasprecios
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
     * @return Listasprecios
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
     * @return Listasprecios
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
     * @return Listasprecios
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
