<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datosfacturas
 *
 * @ORM\Table(name="DatosFacturas")
 * @ORM\Entity
 */
class Datosfacturas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Almacen", type="string", length=100, nullable=true)
     */
    private $almacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consecutivo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $consecutivo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumeroFactura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerofactura = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="LineaArchivo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lineaarchivo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NombreArchivo", type="string", length=60, nullable=true)
     */
    private $nombrearchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Hoja", type="string", length=60, nullable=true)
     */
    private $hoja;

    /**
     * @var string
     *
     * @ORM\Column(name="NombrePlaza", type="string", length=60, nullable=true)
     */
    private $nombreplaza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaPago", type="datetime", nullable=true)
     */
    private $fechapago;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreCliente", type="string", length=120, nullable=true)
     */
    private $nombrecliente;

    /**
     * @var string
     *
     * @ORM\Column(name="CodigoArticulo", type="string", length=20, nullable=true)
     */
    private $codigoarticulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="Cantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="PrecioUnitario", type="float", precision=53, scale=0, nullable=true)
     */
    private $preciounitario;

    /**
     * @var float
     *
     * @ORM\Column(name="Importe", type="float", precision=53, scale=0, nullable=true)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Serie", type="string", length=20, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreFactura", type="string", length=120, nullable=true)
     */
    private $nombrefactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=120, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="FormaPago", type="string", length=60, nullable=true)
     */
    private $formapago;



    /**
     * Set almacen
     *
     * @param string $almacen
     * @return Datosfacturas
     */
    public function setAlmacen($almacen)
    {
        $this->almacen = $almacen;

        return $this;
    }

    /**
     * Get almacen
     *
     * @return string 
     */
    public function getAlmacen()
    {
        return $this->almacen;
    }

    /**
     * Set consecutivo
     *
     * @param integer $consecutivo
     * @return Datosfacturas
     */
    public function setConsecutivo($consecutivo)
    {
        $this->consecutivo = $consecutivo;

        return $this;
    }

    /**
     * Get consecutivo
     *
     * @return integer 
     */
    public function getConsecutivo()
    {
        return $this->consecutivo;
    }

    /**
     * Set numerofactura
     *
     * @param integer $numerofactura
     * @return Datosfacturas
     */
    public function setNumerofactura($numerofactura)
    {
        $this->numerofactura = $numerofactura;

        return $this;
    }

    /**
     * Get numerofactura
     *
     * @return integer 
     */
    public function getNumerofactura()
    {
        return $this->numerofactura;
    }

    /**
     * Set lineaarchivo
     *
     * @param integer $lineaarchivo
     * @return Datosfacturas
     */
    public function setLineaarchivo($lineaarchivo)
    {
        $this->lineaarchivo = $lineaarchivo;

        return $this;
    }

    /**
     * Get lineaarchivo
     *
     * @return integer 
     */
    public function getLineaarchivo()
    {
        return $this->lineaarchivo;
    }

    /**
     * Set nombrearchivo
     *
     * @param string $nombrearchivo
     * @return Datosfacturas
     */
    public function setNombrearchivo($nombrearchivo)
    {
        $this->nombrearchivo = $nombrearchivo;

        return $this;
    }

    /**
     * Get nombrearchivo
     *
     * @return string 
     */
    public function getNombrearchivo()
    {
        return $this->nombrearchivo;
    }

    /**
     * Set hoja
     *
     * @param string $hoja
     * @return Datosfacturas
     */
    public function setHoja($hoja)
    {
        $this->hoja = $hoja;

        return $this;
    }

    /**
     * Get hoja
     *
     * @return string 
     */
    public function getHoja()
    {
        return $this->hoja;
    }

    /**
     * Set nombreplaza
     *
     * @param string $nombreplaza
     * @return Datosfacturas
     */
    public function setNombreplaza($nombreplaza)
    {
        $this->nombreplaza = $nombreplaza;

        return $this;
    }

    /**
     * Get nombreplaza
     *
     * @return string 
     */
    public function getNombreplaza()
    {
        return $this->nombreplaza;
    }

    /**
     * Set fechapago
     *
     * @param \DateTime $fechapago
     * @return Datosfacturas
     */
    public function setFechapago($fechapago)
    {
        $this->fechapago = $fechapago;

        return $this;
    }

    /**
     * Get fechapago
     *
     * @return \DateTime 
     */
    public function getFechapago()
    {
        return $this->fechapago;
    }

    /**
     * Set nombrecliente
     *
     * @param string $nombrecliente
     * @return Datosfacturas
     */
    public function setNombrecliente($nombrecliente)
    {
        $this->nombrecliente = $nombrecliente;

        return $this;
    }

    /**
     * Get nombrecliente
     *
     * @return string 
     */
    public function getNombrecliente()
    {
        return $this->nombrecliente;
    }

    /**
     * Set codigoarticulo
     *
     * @param string $codigoarticulo
     * @return Datosfacturas
     */
    public function setCodigoarticulo($codigoarticulo)
    {
        $this->codigoarticulo = $codigoarticulo;

        return $this;
    }

    /**
     * Get codigoarticulo
     *
     * @return string 
     */
    public function getCodigoarticulo()
    {
        return $this->codigoarticulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Datosfacturas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     * @return Datosfacturas
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set preciounitario
     *
     * @param float $preciounitario
     * @return Datosfacturas
     */
    public function setPreciounitario($preciounitario)
    {
        $this->preciounitario = $preciounitario;

        return $this;
    }

    /**
     * Get preciounitario
     *
     * @return float 
     */
    public function getPreciounitario()
    {
        return $this->preciounitario;
    }

    /**
     * Set importe
     *
     * @param float $importe
     * @return Datosfacturas
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return float 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set serie
     *
     * @param string $serie
     * @return Datosfacturas
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Datosfacturas
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set nombrefactura
     *
     * @param string $nombrefactura
     * @return Datosfacturas
     */
    public function setNombrefactura($nombrefactura)
    {
        $this->nombrefactura = $nombrefactura;

        return $this;
    }

    /**
     * Get nombrefactura
     *
     * @return string 
     */
    public function getNombrefactura()
    {
        return $this->nombrefactura;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Datosfacturas
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set formapago
     *
     * @param string $formapago
     * @return Datosfacturas
     */
    public function setFormapago($formapago)
    {
        $this->formapago = $formapago;

        return $this;
    }

    /**
     * Get formapago
     *
     * @return string 
     */
    public function getFormapago()
    {
        return $this->formapago;
    }
}
