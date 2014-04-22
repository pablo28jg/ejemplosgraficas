<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontablesdistribucionescuentas
 *
 * @ORM\Table(name="CuentasContablesDistribucionesCuentas", indexes={@ORM\Index(name="Indice_1", columns={"NumDistribucion_id", "NumTipoCuentaDistribucion"})})
 * @ORM\Entity
 */
class Cuentascontablesdistribucionescuentas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumDistribucion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numdistribucionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numempresaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaOrigen_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strcuentaorigenKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControlOrigen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcentrocontrolorigenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaDestino_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strcuentadestinoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControlDestino_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcentrocontroldestinoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCuentaDistribucion", type="integer", nullable=true)
     */
    private $numtipocuentadistribucion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentaje", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentaje = '0';



    /**
     * Set numdistribucionId
     *
     * @param integer $numdistribucionId
     * @return Cuentascontablesdistribucionescuentas
     */
    public function setNumdistribucionId($numdistribucionId)
    {
        $this->numdistribucionId = $numdistribucionId;

        return $this;
    }

    /**
     * Get numdistribucionId
     *
     * @return integer 
     */
    public function getNumdistribucionId()
    {
        return $this->numdistribucionId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Cuentascontablesdistribucionescuentas
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
     * Set strcuentaorigenKy
     *
     * @param string $strcuentaorigenKy
     * @return Cuentascontablesdistribucionescuentas
     */
    public function setStrcuentaorigenKy($strcuentaorigenKy)
    {
        $this->strcuentaorigenKy = $strcuentaorigenKy;

        return $this;
    }

    /**
     * Get strcuentaorigenKy
     *
     * @return string 
     */
    public function getStrcuentaorigenKy()
    {
        return $this->strcuentaorigenKy;
    }

    /**
     * Set numcentrocontrolorigenId
     *
     * @param integer $numcentrocontrolorigenId
     * @return Cuentascontablesdistribucionescuentas
     */
    public function setNumcentrocontrolorigenId($numcentrocontrolorigenId)
    {
        $this->numcentrocontrolorigenId = $numcentrocontrolorigenId;

        return $this;
    }

    /**
     * Get numcentrocontrolorigenId
     *
     * @return integer 
     */
    public function getNumcentrocontrolorigenId()
    {
        return $this->numcentrocontrolorigenId;
    }

    /**
     * Set strcuentadestinoKy
     *
     * @param string $strcuentadestinoKy
     * @return Cuentascontablesdistribucionescuentas
     */
    public function setStrcuentadestinoKy($strcuentadestinoKy)
    {
        $this->strcuentadestinoKy = $strcuentadestinoKy;

        return $this;
    }

    /**
     * Get strcuentadestinoKy
     *
     * @return string 
     */
    public function getStrcuentadestinoKy()
    {
        return $this->strcuentadestinoKy;
    }

    /**
     * Set numcentrocontroldestinoId
     *
     * @param integer $numcentrocontroldestinoId
     * @return Cuentascontablesdistribucionescuentas
     */
    public function setNumcentrocontroldestinoId($numcentrocontroldestinoId)
    {
        $this->numcentrocontroldestinoId = $numcentrocontroldestinoId;

        return $this;
    }

    /**
     * Get numcentrocontroldestinoId
     *
     * @return integer 
     */
    public function getNumcentrocontroldestinoId()
    {
        return $this->numcentrocontroldestinoId;
    }

    /**
     * Set numtipocuentadistribucion
     *
     * @param integer $numtipocuentadistribucion
     * @return Cuentascontablesdistribucionescuentas
     */
    public function setNumtipocuentadistribucion($numtipocuentadistribucion)
    {
        $this->numtipocuentadistribucion = $numtipocuentadistribucion;

        return $this;
    }

    /**
     * Get numtipocuentadistribucion
     *
     * @return integer 
     */
    public function getNumtipocuentadistribucion()
    {
        return $this->numtipocuentadistribucion;
    }

    /**
     * Set numporcentaje
     *
     * @param float $numporcentaje
     * @return Cuentascontablesdistribucionescuentas
     */
    public function setNumporcentaje($numporcentaje)
    {
        $this->numporcentaje = $numporcentaje;

        return $this;
    }

    /**
     * Get numporcentaje
     *
     * @return float 
     */
    public function getNumporcentaje()
    {
        return $this->numporcentaje;
    }
}
