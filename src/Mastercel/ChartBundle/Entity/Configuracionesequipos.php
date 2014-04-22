<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracionesequipos
 *
 * @ORM\Table(name="ConfiguracionesEquipos")
 * @ORM\Entity
 */
class Configuracionesequipos
{
    /**
     * @var guid
     *
     * @ORM\Column(name="StrConfiguracionEquipo_ky", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strconfiguracionequipoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreMaquina", type="string", length=60, nullable=true)
     */
    private $strnombremaquina;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUsuario_id", type="integer", nullable=true)
     */
    private $numusuarioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLenguaje_id", type="integer", nullable=true)
     */
    private $numlenguajeId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaja", type="integer", nullable=true)
     */
    private $numcaja = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=true)
     */
    private $numtipotransaccion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogSolicitarPrecio", type="boolean", nullable=true)
     */
    private $logsolicitarprecio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoAperturaCajon", type="integer", nullable=true)
     */
    private $numcodigoaperturacajon = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoFormaVenta", type="integer", nullable=true)
     */
    private $numtipoformaventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTeclado_id", type="integer", nullable=true)
     */
    private $numtecladoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReciboCotizacion_id", type="integer", nullable=true)
     */
    private $numrecibocotizacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReciboPedido_id", type="integer", nullable=true)
     */
    private $numrecibopedidoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReciboVenta_id", type="integer", nullable=true)
     */
    private $numreciboventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReciboDevolucion_id", type="integer", nullable=true)
     */
    private $numrecibodevolucionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrImpresoraRecibo", type="string", length=120, nullable=true)
     */
    private $strimpresorarecibo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrImpresoraDocumento", type="string", length=120, nullable=true)
     */
    private $strimpresoradocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConfiguracion_id", type="integer", nullable=true)
     */
    private $numconfiguracionId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCreacion", type="datetime", nullable=true)
     */
    private $dtecreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteAutenticacion", type="datetime", nullable=true)
     */
    private $dteautenticacion;

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
     * Get strconfiguracionequipoKy
     *
     * @return guid 
     */
    public function getStrconfiguracionequipoKy()
    {
        return $this->strconfiguracionequipoKy;
    }

    /**
     * Set strnombremaquina
     *
     * @param string $strnombremaquina
     * @return Configuracionesequipos
     */
    public function setStrnombremaquina($strnombremaquina)
    {
        $this->strnombremaquina = $strnombremaquina;

        return $this;
    }

    /**
     * Get strnombremaquina
     *
     * @return string 
     */
    public function getStrnombremaquina()
    {
        return $this->strnombremaquina;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Configuracionesequipos
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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Configuracionesequipos
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
     * Set numusuarioId
     *
     * @param integer $numusuarioId
     * @return Configuracionesequipos
     */
    public function setNumusuarioId($numusuarioId)
    {
        $this->numusuarioId = $numusuarioId;

        return $this;
    }

    /**
     * Get numusuarioId
     *
     * @return integer 
     */
    public function getNumusuarioId()
    {
        return $this->numusuarioId;
    }

    /**
     * Set numlenguajeId
     *
     * @param integer $numlenguajeId
     * @return Configuracionesequipos
     */
    public function setNumlenguajeId($numlenguajeId)
    {
        $this->numlenguajeId = $numlenguajeId;

        return $this;
    }

    /**
     * Get numlenguajeId
     *
     * @return integer 
     */
    public function getNumlenguajeId()
    {
        return $this->numlenguajeId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Configuracionesequipos
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
     * Set numcaja
     *
     * @param integer $numcaja
     * @return Configuracionesequipos
     */
    public function setNumcaja($numcaja)
    {
        $this->numcaja = $numcaja;

        return $this;
    }

    /**
     * Get numcaja
     *
     * @return integer 
     */
    public function getNumcaja()
    {
        return $this->numcaja;
    }

    /**
     * Set numtipotransaccion
     *
     * @param integer $numtipotransaccion
     * @return Configuracionesequipos
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
     * Set logsolicitarprecio
     *
     * @param boolean $logsolicitarprecio
     * @return Configuracionesequipos
     */
    public function setLogsolicitarprecio($logsolicitarprecio)
    {
        $this->logsolicitarprecio = $logsolicitarprecio;

        return $this;
    }

    /**
     * Get logsolicitarprecio
     *
     * @return boolean 
     */
    public function getLogsolicitarprecio()
    {
        return $this->logsolicitarprecio;
    }

    /**
     * Set numcodigoaperturacajon
     *
     * @param integer $numcodigoaperturacajon
     * @return Configuracionesequipos
     */
    public function setNumcodigoaperturacajon($numcodigoaperturacajon)
    {
        $this->numcodigoaperturacajon = $numcodigoaperturacajon;

        return $this;
    }

    /**
     * Get numcodigoaperturacajon
     *
     * @return integer 
     */
    public function getNumcodigoaperturacajon()
    {
        return $this->numcodigoaperturacajon;
    }

    /**
     * Set numtipoformaventa
     *
     * @param integer $numtipoformaventa
     * @return Configuracionesequipos
     */
    public function setNumtipoformaventa($numtipoformaventa)
    {
        $this->numtipoformaventa = $numtipoformaventa;

        return $this;
    }

    /**
     * Get numtipoformaventa
     *
     * @return integer 
     */
    public function getNumtipoformaventa()
    {
        return $this->numtipoformaventa;
    }

    /**
     * Set numtecladoId
     *
     * @param integer $numtecladoId
     * @return Configuracionesequipos
     */
    public function setNumtecladoId($numtecladoId)
    {
        $this->numtecladoId = $numtecladoId;

        return $this;
    }

    /**
     * Get numtecladoId
     *
     * @return integer 
     */
    public function getNumtecladoId()
    {
        return $this->numtecladoId;
    }

    /**
     * Set numrecibocotizacionId
     *
     * @param integer $numrecibocotizacionId
     * @return Configuracionesequipos
     */
    public function setNumrecibocotizacionId($numrecibocotizacionId)
    {
        $this->numrecibocotizacionId = $numrecibocotizacionId;

        return $this;
    }

    /**
     * Get numrecibocotizacionId
     *
     * @return integer 
     */
    public function getNumrecibocotizacionId()
    {
        return $this->numrecibocotizacionId;
    }

    /**
     * Set numrecibopedidoId
     *
     * @param integer $numrecibopedidoId
     * @return Configuracionesequipos
     */
    public function setNumrecibopedidoId($numrecibopedidoId)
    {
        $this->numrecibopedidoId = $numrecibopedidoId;

        return $this;
    }

    /**
     * Get numrecibopedidoId
     *
     * @return integer 
     */
    public function getNumrecibopedidoId()
    {
        return $this->numrecibopedidoId;
    }

    /**
     * Set numreciboventaId
     *
     * @param integer $numreciboventaId
     * @return Configuracionesequipos
     */
    public function setNumreciboventaId($numreciboventaId)
    {
        $this->numreciboventaId = $numreciboventaId;

        return $this;
    }

    /**
     * Get numreciboventaId
     *
     * @return integer 
     */
    public function getNumreciboventaId()
    {
        return $this->numreciboventaId;
    }

    /**
     * Set numrecibodevolucionId
     *
     * @param integer $numrecibodevolucionId
     * @return Configuracionesequipos
     */
    public function setNumrecibodevolucionId($numrecibodevolucionId)
    {
        $this->numrecibodevolucionId = $numrecibodevolucionId;

        return $this;
    }

    /**
     * Get numrecibodevolucionId
     *
     * @return integer 
     */
    public function getNumrecibodevolucionId()
    {
        return $this->numrecibodevolucionId;
    }

    /**
     * Set strimpresorarecibo
     *
     * @param string $strimpresorarecibo
     * @return Configuracionesequipos
     */
    public function setStrimpresorarecibo($strimpresorarecibo)
    {
        $this->strimpresorarecibo = $strimpresorarecibo;

        return $this;
    }

    /**
     * Get strimpresorarecibo
     *
     * @return string 
     */
    public function getStrimpresorarecibo()
    {
        return $this->strimpresorarecibo;
    }

    /**
     * Set strimpresoradocumento
     *
     * @param string $strimpresoradocumento
     * @return Configuracionesequipos
     */
    public function setStrimpresoradocumento($strimpresoradocumento)
    {
        $this->strimpresoradocumento = $strimpresoradocumento;

        return $this;
    }

    /**
     * Get strimpresoradocumento
     *
     * @return string 
     */
    public function getStrimpresoradocumento()
    {
        return $this->strimpresoradocumento;
    }

    /**
     * Set numconfiguracionId
     *
     * @param integer $numconfiguracionId
     * @return Configuracionesequipos
     */
    public function setNumconfiguracionId($numconfiguracionId)
    {
        $this->numconfiguracionId = $numconfiguracionId;

        return $this;
    }

    /**
     * Get numconfiguracionId
     *
     * @return integer 
     */
    public function getNumconfiguracionId()
    {
        return $this->numconfiguracionId;
    }

    /**
     * Set dtecreacion
     *
     * @param \DateTime $dtecreacion
     * @return Configuracionesequipos
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
     * Set dteautenticacion
     *
     * @param \DateTime $dteautenticacion
     * @return Configuracionesequipos
     */
    public function setDteautenticacion($dteautenticacion)
    {
        $this->dteautenticacion = $dteautenticacion;

        return $this;
    }

    /**
     * Get dteautenticacion
     *
     * @return \DateTime 
     */
    public function getDteautenticacion()
    {
        return $this->dteautenticacion;
    }

    /**
     * Set numactualizadoporId
     *
     * @param integer $numactualizadoporId
     * @return Configuracionesequipos
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
     * @return Configuracionesequipos
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
     * @return Configuracionesequipos
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
