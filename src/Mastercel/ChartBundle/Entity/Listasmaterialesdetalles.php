<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listasmaterialesdetalles
 *
 * @ORM\Table(name="ListasMaterialesDetalles", indexes={@ORM\Index(name="Indice_1", columns={"StrArticulo_ky"}), @ORM\Index(name="Indice_2", columns={"NumAlmacenRequisicionMaterial_id"}), @ORM\Index(name="Indice_3", columns={"NumOperacionEstandar_id"}), @ORM\Index(name="Indice_4", columns={"StrListaMaterial_ky", "NumSecuencia"})})
 * @ORM\Entity
 */
class Listasmaterialesdetalles
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrListaMaterial_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strlistamaterialKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSecuencia", type="integer", nullable=true)
     */
    private $numsecuencia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedida_id", type="integer", nullable=true)
     */
    private $numunidadmedidaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorConversion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactorconversion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadRequerida", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadrequerida = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoFactorDesperdicio", type="integer", nullable=true)
     */
    private $numtipofactordesperdicio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDesperdicio", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordesperdicio = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogDesperdicioUnidad", type="boolean", nullable=true)
     */
    private $logdesperdiciounidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenRequisicionMaterial_id", type="integer", nullable=true)
     */
    private $numalmacenrequisicionmaterialId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOperacionEstandar_id", type="integer", nullable=true)
     */
    private $numoperacionestandarId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDibujo_id", type="integer", nullable=true)
     */
    private $numdibujoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNumeroDibujo", type="string", length=20, nullable=true)
     */
    private $strnumerodibujo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoriaCosto_id", type="integer", nullable=true)
     */
    private $numcategoriacostoId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEfectiva", type="datetime", nullable=true)
     */
    private $dteefectiva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteExpiracion", type="datetime", nullable=true)
     */
    private $dteexpiracion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogUsarFormulaCantidad", type="boolean", nullable=true)
     */
    private $logusarformulacantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemFormulaCantidad", type="text", length=16, nullable=true)
     */
    private $memformulacantidad;



    /**
     * Set strlistamaterialKy
     *
     * @param string $strlistamaterialKy
     * @return Listasmaterialesdetalles
     */
    public function setStrlistamaterialKy($strlistamaterialKy)
    {
        $this->strlistamaterialKy = $strlistamaterialKy;

        return $this;
    }

    /**
     * Get strlistamaterialKy
     *
     * @return string 
     */
    public function getStrlistamaterialKy()
    {
        return $this->strlistamaterialKy;
    }

    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Listasmaterialesdetalles
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
     * Set numsecuencia
     *
     * @param integer $numsecuencia
     * @return Listasmaterialesdetalles
     */
    public function setNumsecuencia($numsecuencia)
    {
        $this->numsecuencia = $numsecuencia;

        return $this;
    }

    /**
     * Get numsecuencia
     *
     * @return integer 
     */
    public function getNumsecuencia()
    {
        return $this->numsecuencia;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Listasmaterialesdetalles
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
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Listasmaterialesdetalles
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
     * Set numfactorconversion
     *
     * @param float $numfactorconversion
     * @return Listasmaterialesdetalles
     */
    public function setNumfactorconversion($numfactorconversion)
    {
        $this->numfactorconversion = $numfactorconversion;

        return $this;
    }

    /**
     * Get numfactorconversion
     *
     * @return float 
     */
    public function getNumfactorconversion()
    {
        return $this->numfactorconversion;
    }

    /**
     * Set numcantidadrequerida
     *
     * @param float $numcantidadrequerida
     * @return Listasmaterialesdetalles
     */
    public function setNumcantidadrequerida($numcantidadrequerida)
    {
        $this->numcantidadrequerida = $numcantidadrequerida;

        return $this;
    }

    /**
     * Get numcantidadrequerida
     *
     * @return float 
     */
    public function getNumcantidadrequerida()
    {
        return $this->numcantidadrequerida;
    }

    /**
     * Set numtipofactordesperdicio
     *
     * @param integer $numtipofactordesperdicio
     * @return Listasmaterialesdetalles
     */
    public function setNumtipofactordesperdicio($numtipofactordesperdicio)
    {
        $this->numtipofactordesperdicio = $numtipofactordesperdicio;

        return $this;
    }

    /**
     * Get numtipofactordesperdicio
     *
     * @return integer 
     */
    public function getNumtipofactordesperdicio()
    {
        return $this->numtipofactordesperdicio;
    }

    /**
     * Set numfactordesperdicio
     *
     * @param float $numfactordesperdicio
     * @return Listasmaterialesdetalles
     */
    public function setNumfactordesperdicio($numfactordesperdicio)
    {
        $this->numfactordesperdicio = $numfactordesperdicio;

        return $this;
    }

    /**
     * Get numfactordesperdicio
     *
     * @return float 
     */
    public function getNumfactordesperdicio()
    {
        return $this->numfactordesperdicio;
    }

    /**
     * Set logdesperdiciounidad
     *
     * @param boolean $logdesperdiciounidad
     * @return Listasmaterialesdetalles
     */
    public function setLogdesperdiciounidad($logdesperdiciounidad)
    {
        $this->logdesperdiciounidad = $logdesperdiciounidad;

        return $this;
    }

    /**
     * Get logdesperdiciounidad
     *
     * @return boolean 
     */
    public function getLogdesperdiciounidad()
    {
        return $this->logdesperdiciounidad;
    }

    /**
     * Set numalmacenrequisicionmaterialId
     *
     * @param integer $numalmacenrequisicionmaterialId
     * @return Listasmaterialesdetalles
     */
    public function setNumalmacenrequisicionmaterialId($numalmacenrequisicionmaterialId)
    {
        $this->numalmacenrequisicionmaterialId = $numalmacenrequisicionmaterialId;

        return $this;
    }

    /**
     * Get numalmacenrequisicionmaterialId
     *
     * @return integer 
     */
    public function getNumalmacenrequisicionmaterialId()
    {
        return $this->numalmacenrequisicionmaterialId;
    }

    /**
     * Set numoperacionestandarId
     *
     * @param integer $numoperacionestandarId
     * @return Listasmaterialesdetalles
     */
    public function setNumoperacionestandarId($numoperacionestandarId)
    {
        $this->numoperacionestandarId = $numoperacionestandarId;

        return $this;
    }

    /**
     * Get numoperacionestandarId
     *
     * @return integer 
     */
    public function getNumoperacionestandarId()
    {
        return $this->numoperacionestandarId;
    }

    /**
     * Set numdibujoId
     *
     * @param integer $numdibujoId
     * @return Listasmaterialesdetalles
     */
    public function setNumdibujoId($numdibujoId)
    {
        $this->numdibujoId = $numdibujoId;

        return $this;
    }

    /**
     * Get numdibujoId
     *
     * @return integer 
     */
    public function getNumdibujoId()
    {
        return $this->numdibujoId;
    }

    /**
     * Set strnumerodibujo
     *
     * @param string $strnumerodibujo
     * @return Listasmaterialesdetalles
     */
    public function setStrnumerodibujo($strnumerodibujo)
    {
        $this->strnumerodibujo = $strnumerodibujo;

        return $this;
    }

    /**
     * Get strnumerodibujo
     *
     * @return string 
     */
    public function getStrnumerodibujo()
    {
        return $this->strnumerodibujo;
    }

    /**
     * Set numcategoriacostoId
     *
     * @param integer $numcategoriacostoId
     * @return Listasmaterialesdetalles
     */
    public function setNumcategoriacostoId($numcategoriacostoId)
    {
        $this->numcategoriacostoId = $numcategoriacostoId;

        return $this;
    }

    /**
     * Get numcategoriacostoId
     *
     * @return integer 
     */
    public function getNumcategoriacostoId()
    {
        return $this->numcategoriacostoId;
    }

    /**
     * Set dteefectiva
     *
     * @param \DateTime $dteefectiva
     * @return Listasmaterialesdetalles
     */
    public function setDteefectiva($dteefectiva)
    {
        $this->dteefectiva = $dteefectiva;

        return $this;
    }

    /**
     * Get dteefectiva
     *
     * @return \DateTime 
     */
    public function getDteefectiva()
    {
        return $this->dteefectiva;
    }

    /**
     * Set dteexpiracion
     *
     * @param \DateTime $dteexpiracion
     * @return Listasmaterialesdetalles
     */
    public function setDteexpiracion($dteexpiracion)
    {
        $this->dteexpiracion = $dteexpiracion;

        return $this;
    }

    /**
     * Get dteexpiracion
     *
     * @return \DateTime 
     */
    public function getDteexpiracion()
    {
        return $this->dteexpiracion;
    }

    /**
     * Set logusarformulacantidad
     *
     * @param boolean $logusarformulacantidad
     * @return Listasmaterialesdetalles
     */
    public function setLogusarformulacantidad($logusarformulacantidad)
    {
        $this->logusarformulacantidad = $logusarformulacantidad;

        return $this;
    }

    /**
     * Get logusarformulacantidad
     *
     * @return boolean 
     */
    public function getLogusarformulacantidad()
    {
        return $this->logusarformulacantidad;
    }

    /**
     * Set memformulacantidad
     *
     * @param string $memformulacantidad
     * @return Listasmaterialesdetalles
     */
    public function setMemformulacantidad($memformulacantidad)
    {
        $this->memformulacantidad = $memformulacantidad;

        return $this;
    }

    /**
     * Get memformulacantidad
     *
     * @return string 
     */
    public function getMemformulacantidad()
    {
        return $this->memformulacantidad;
    }
}
