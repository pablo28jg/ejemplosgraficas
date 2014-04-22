<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datospagos
 *
 * @ORM\Table(name="DatosPagos")
 * @ORM\Entity
 */
class Datospagos
{
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
     * @ORM\Column(name="NumeroPago", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numeropago = '0';

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
     * @ORM\Column(name="NombreFactura", type="string", length=120, nullable=true)
     */
    private $nombrefactura;

    /**
     * @var string
     *
     * @ORM\Column(name="FormaPago", type="string", length=60, nullable=true)
     */
    private $formapago;

    /**
     * @var string
     *
     * @ORM\Column(name="Banco", type="string", length=60, nullable=true)
     */
    private $banco;

    /**
     * @var string
     *
     * @ORM\Column(name="Cuenta", type="string", length=60, nullable=true)
     */
    private $cuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=60, nullable=true)
     */
    private $referencia;

    /**
     * @var float
     *
     * @ORM\Column(name="Deposito", type="float", precision=53, scale=0, nullable=true)
     */
    private $deposito;

    /**
     * @var string
     *
     * @ORM\Column(name="Almacen", type="string", length=100, nullable=true)
     */
    private $almacen;



    /**
     * Set consecutivo
     *
     * @param integer $consecutivo
     * @return Datospagos
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
     * Set numeropago
     *
     * @param integer $numeropago
     * @return Datospagos
     */
    public function setNumeropago($numeropago)
    {
        $this->numeropago = $numeropago;

        return $this;
    }

    /**
     * Get numeropago
     *
     * @return integer 
     */
    public function getNumeropago()
    {
        return $this->numeropago;
    }

    /**
     * Set numerofactura
     *
     * @param integer $numerofactura
     * @return Datospagos
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
     * @return Datospagos
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
     * @return Datospagos
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
     * @return Datospagos
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
     * @return Datospagos
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
     * @return Datospagos
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
     * @return Datospagos
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
     * Set nombrefactura
     *
     * @param string $nombrefactura
     * @return Datospagos
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
     * Set formapago
     *
     * @param string $formapago
     * @return Datospagos
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

    /**
     * Set banco
     *
     * @param string $banco
     * @return Datospagos
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set cuenta
     *
     * @param string $cuenta
     * @return Datospagos
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string 
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Datospagos
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set deposito
     *
     * @param float $deposito
     * @return Datospagos
     */
    public function setDeposito($deposito)
    {
        $this->deposito = $deposito;

        return $this;
    }

    /**
     * Get deposito
     *
     * @return float 
     */
    public function getDeposito()
    {
        return $this->deposito;
    }

    /**
     * Set almacen
     *
     * @param string $almacen
     * @return Datospagos
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
}
