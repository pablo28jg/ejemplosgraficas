<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monederoselectronicos
 *
 * @ORM\Table(name="MonederosElectronicos", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_2", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_3", columns={"NumCreadoPor_id"}), @ORM\Index(name="Indice_4", columns={"NumActivadoPor_id"}), @ORM\Index(name="Indice_5", columns={"DteCreacion"}), @ORM\Index(name="Indice_6", columns={"DteVigencia"}), @ORM\Index(name="Indice_7", columns={"DteActivacion"}), @ORM\Index(name="Indice_8", columns={"DteUltimaVenta"}), @ORM\Index(name="Indice_9", columns={"NumTipoEstado"})})
 * @ORM\Entity
 */
class Monederoselectronicos
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrMonedero_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strmonederoKy;

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
     * @var \DateTime
     *
     * @ORM\Column(name="DteVigencia", type="datetime", nullable=true)
     */
    private $dtevigencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActivadoPor_id", type="integer", nullable=true)
     */
    private $numactivadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteActivacion", type="datetime", nullable=true)
     */
    private $dteactivacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteUltimaVenta", type="datetime", nullable=true)
     */
    private $dteultimaventa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalObtenido", type="integer", nullable=true)
     */
    private $numtotalobtenido = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalUtilizado", type="integer", nullable=true)
     */
    private $numtotalutilizado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=true)
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



    /**
     * Get strmonederoKy
     *
     * @return string 
     */
    public function getStrmonederoKy()
    {
        return $this->strmonederoKy;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Monederoselectronicos
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
     * @return Monederoselectronicos
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
     * Set dtevigencia
     *
     * @param \DateTime $dtevigencia
     * @return Monederoselectronicos
     */
    public function setDtevigencia($dtevigencia)
    {
        $this->dtevigencia = $dtevigencia;

        return $this;
    }

    /**
     * Get dtevigencia
     *
     * @return \DateTime 
     */
    public function getDtevigencia()
    {
        return $this->dtevigencia;
    }

    /**
     * Set numactivadoporId
     *
     * @param integer $numactivadoporId
     * @return Monederoselectronicos
     */
    public function setNumactivadoporId($numactivadoporId)
    {
        $this->numactivadoporId = $numactivadoporId;

        return $this;
    }

    /**
     * Get numactivadoporId
     *
     * @return integer 
     */
    public function getNumactivadoporId()
    {
        return $this->numactivadoporId;
    }

    /**
     * Set dteactivacion
     *
     * @param \DateTime $dteactivacion
     * @return Monederoselectronicos
     */
    public function setDteactivacion($dteactivacion)
    {
        $this->dteactivacion = $dteactivacion;

        return $this;
    }

    /**
     * Get dteactivacion
     *
     * @return \DateTime 
     */
    public function getDteactivacion()
    {
        return $this->dteactivacion;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Monederoselectronicos
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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Monederoselectronicos
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
     * Set dteultimaventa
     *
     * @param \DateTime $dteultimaventa
     * @return Monederoselectronicos
     */
    public function setDteultimaventa($dteultimaventa)
    {
        $this->dteultimaventa = $dteultimaventa;

        return $this;
    }

    /**
     * Get dteultimaventa
     *
     * @return \DateTime 
     */
    public function getDteultimaventa()
    {
        return $this->dteultimaventa;
    }

    /**
     * Set numtotalobtenido
     *
     * @param integer $numtotalobtenido
     * @return Monederoselectronicos
     */
    public function setNumtotalobtenido($numtotalobtenido)
    {
        $this->numtotalobtenido = $numtotalobtenido;

        return $this;
    }

    /**
     * Get numtotalobtenido
     *
     * @return integer 
     */
    public function getNumtotalobtenido()
    {
        return $this->numtotalobtenido;
    }

    /**
     * Set numtotalutilizado
     *
     * @param integer $numtotalutilizado
     * @return Monederoselectronicos
     */
    public function setNumtotalutilizado($numtotalutilizado)
    {
        $this->numtotalutilizado = $numtotalutilizado;

        return $this;
    }

    /**
     * Get numtotalutilizado
     *
     * @return integer 
     */
    public function getNumtotalutilizado()
    {
        return $this->numtotalutilizado;
    }

    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Monederoselectronicos
     */
    public function setNumentidadId($numentidadId)
    {
        $this->numentidadId = $numentidadId;

        return $this;
    }

    /**
     * Get numentidadId
     *
     * @return integer 
     */
    public function getNumentidadId()
    {
        return $this->numentidadId;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Monederoselectronicos
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
}
