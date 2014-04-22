<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etiquetasimprimir
 *
 * @ORM\Table(name="EtiquetasImprimir", indexes={@ORM\Index(name="Indice_1", columns={"StrNombreMaquina", "DteProceso"}), @ORM\Index(name="Indice_2", columns={"StrNombreMaquina", "NumOrdenImpresion"}), @ORM\Index(name="Indice_3", columns={"DteProceso"})})
 * @ORM\Entity
 */
class Etiquetasimprimir
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreMaquina", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strnombremaquina;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAsociado_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strasociadoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strarticuloKy;

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioVenta", type="integer", nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteProceso", type="datetime", nullable=true)
     */
    private $dteproceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenImpresion", type="integer", nullable=true)
     */
    private $numordenimpresion = '0';



    /**
     * Set strnombremaquina
     *
     * @param string $strnombremaquina
     * @return Etiquetasimprimir
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
     * Set strasociadoKy
     *
     * @param string $strasociadoKy
     * @return Etiquetasimprimir
     */
    public function setStrasociadoKy($strasociadoKy)
    {
        $this->strasociadoKy = $strasociadoKy;

        return $this;
    }

    /**
     * Get strasociadoKy
     *
     * @return string 
     */
    public function getStrasociadoKy()
    {
        return $this->strasociadoKy;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Etiquetasimprimir
     */
    public function setStrarticuloKy($strarticuloKy)
    {
        $this->strarticuloKy = $strarticuloKy;

        return $this;
    }

    /**
     * Get strarticuloKy
     *
     * @return string 
     */
    public function getStrarticuloKy()
    {
        return $this->strarticuloKy;
    }

    /**
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Etiquetasimprimir
     */
    public function setNumcantidad($numcantidad)
    {
        $this->numcantidad = $numcantidad;

        return $this;
    }

    /**
     * Get numcantidad
     *
     * @return float 
     */
    public function getNumcantidad()
    {
        return $this->numcantidad;
    }

    /**
     * Set numprecioventa
     *
     * @param integer $numprecioventa
     * @return Etiquetasimprimir
     */
    public function setNumprecioventa($numprecioventa)
    {
        $this->numprecioventa = $numprecioventa;

        return $this;
    }

    /**
     * Get numprecioventa
     *
     * @return integer 
     */
    public function getNumprecioventa()
    {
        return $this->numprecioventa;
    }

    /**
     * Set dteproceso
     *
     * @param \DateTime $dteproceso
     * @return Etiquetasimprimir
     */
    public function setDteproceso($dteproceso)
    {
        $this->dteproceso = $dteproceso;

        return $this;
    }

    /**
     * Get dteproceso
     *
     * @return \DateTime 
     */
    public function getDteproceso()
    {
        return $this->dteproceso;
    }

    /**
     * Set numordenimpresion
     *
     * @param integer $numordenimpresion
     * @return Etiquetasimprimir
     */
    public function setNumordenimpresion($numordenimpresion)
    {
        $this->numordenimpresion = $numordenimpresion;

        return $this;
    }

    /**
     * Get numordenimpresion
     *
     * @return integer 
     */
    public function getNumordenimpresion()
    {
        return $this->numordenimpresion;
    }
}
