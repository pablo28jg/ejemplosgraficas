<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condicionesdetalles
 *
 * @ORM\Table(name="CondicionesDetalles", indexes={@ORM\Index(name="Indice_1", columns={"StrArticulo_ky"}), @ORM\Index(name="Indice_2", columns={"StrModelo_ky"})})
 * @ORM\Entity
 */
class Condicionesdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCondicion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcondicionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrModelo_ky", type="string", length=20, nullable=true)
     */
    private $strmodeloKy;

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentaje_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentaje1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentaje_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentaje2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumPrecioCompra", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numpreciocompra = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPorcentajeSobreCantidad", type="boolean", nullable=true)
     */
    private $logporcentajesobrecantidad = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPorcentajeReal", type="boolean", nullable=true)
     */
    private $logporcentajereal = '0';



    /**
     * Set numcondicionId
     *
     * @param integer $numcondicionId
     * @return Condicionesdetalles
     */
    public function setNumcondicionId($numcondicionId)
    {
        $this->numcondicionId = $numcondicionId;

        return $this;
    }

    /**
     * Get numcondicionId
     *
     * @return integer 
     */
    public function getNumcondicionId()
    {
        return $this->numcondicionId;
    }

    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Condicionesdetalles
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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Condicionesdetalles
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
     * Set strmodeloKy
     *
     * @param string $strmodeloKy
     * @return Condicionesdetalles
     */
    public function setStrmodeloKy($strmodeloKy)
    {
        $this->strmodeloKy = $strmodeloKy;

        return $this;
    }

    /**
     * Get strmodeloKy
     *
     * @return string 
     */
    public function getStrmodeloKy()
    {
        return $this->strmodeloKy;
    }

    /**
     * Set numporcentaje1
     *
     * @param float $numporcentaje1
     * @return Condicionesdetalles
     */
    public function setNumporcentaje1($numporcentaje1)
    {
        $this->numporcentaje1 = $numporcentaje1;

        return $this;
    }

    /**
     * Get numporcentaje1
     *
     * @return float 
     */
    public function getNumporcentaje1()
    {
        return $this->numporcentaje1;
    }

    /**
     * Set numporcentaje2
     *
     * @param float $numporcentaje2
     * @return Condicionesdetalles
     */
    public function setNumporcentaje2($numporcentaje2)
    {
        $this->numporcentaje2 = $numporcentaje2;

        return $this;
    }

    /**
     * Get numporcentaje2
     *
     * @return float 
     */
    public function getNumporcentaje2()
    {
        return $this->numporcentaje2;
    }

    /**
     * Set numpreciocompra
     *
     * @param string $numpreciocompra
     * @return Condicionesdetalles
     */
    public function setNumpreciocompra($numpreciocompra)
    {
        $this->numpreciocompra = $numpreciocompra;

        return $this;
    }

    /**
     * Get numpreciocompra
     *
     * @return string 
     */
    public function getNumpreciocompra()
    {
        return $this->numpreciocompra;
    }

    /**
     * Set logporcentajesobrecantidad
     *
     * @param boolean $logporcentajesobrecantidad
     * @return Condicionesdetalles
     */
    public function setLogporcentajesobrecantidad($logporcentajesobrecantidad)
    {
        $this->logporcentajesobrecantidad = $logporcentajesobrecantidad;

        return $this;
    }

    /**
     * Get logporcentajesobrecantidad
     *
     * @return boolean 
     */
    public function getLogporcentajesobrecantidad()
    {
        return $this->logporcentajesobrecantidad;
    }

    /**
     * Set logporcentajereal
     *
     * @param boolean $logporcentajereal
     * @return Condicionesdetalles
     */
    public function setLogporcentajereal($logporcentajereal)
    {
        $this->logporcentajereal = $logporcentajereal;

        return $this;
    }

    /**
     * Get logporcentajereal
     *
     * @return boolean 
     */
    public function getLogporcentajereal()
    {
        return $this->logporcentajereal;
    }
}
