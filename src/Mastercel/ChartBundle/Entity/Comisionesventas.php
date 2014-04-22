<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comisionesventas
 *
 * @ORM\Table(name="ComisionesVentas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrComisionVenta_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Comisionesventas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumComisionVenta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcomisionventaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrComisionVenta_ky", type="string", length=10, nullable=true)
     */
    private $strcomisionventaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporteComision", type="integer", nullable=true)
     */
    private $numimportecomision = '0';

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
     * Get numcomisionventaId
     *
     * @return integer 
     */
    public function getNumcomisionventaId()
    {
        return $this->numcomisionventaId;
    }

    /**
     * Set strcomisionventaKy
     *
     * @param string $strcomisionventaKy
     * @return Comisionesventas
     */
    public function setStrcomisionventaKy($strcomisionventaKy)
    {
        $this->strcomisionventaKy = $strcomisionventaKy;

        return $this;
    }

    /**
     * Get strcomisionventaKy
     *
     * @return string 
     */
    public function getStrcomisionventaKy()
    {
        return $this->strcomisionventaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Comisionesventas
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
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Comisionesventas
     */
    public function setNumtipo($numtipo)
    {
        $this->numtipo = $numtipo;

        return $this;
    }

    /**
     * Get numtipo
     *
     * @return integer 
     */
    public function getNumtipo()
    {
        return $this->numtipo;
    }

    /**
     * Set numporcentajecomision
     *
     * @param float $numporcentajecomision
     * @return Comisionesventas
     */
    public function setNumporcentajecomision($numporcentajecomision)
    {
        $this->numporcentajecomision = $numporcentajecomision;

        return $this;
    }

    /**
     * Get numporcentajecomision
     *
     * @return float 
     */
    public function getNumporcentajecomision()
    {
        return $this->numporcentajecomision;
    }

    /**
     * Set numimportecomision
     *
     * @param integer $numimportecomision
     * @return Comisionesventas
     */
    public function setNumimportecomision($numimportecomision)
    {
        $this->numimportecomision = $numimportecomision;

        return $this;
    }

    /**
     * Get numimportecomision
     *
     * @return integer 
     */
    public function getNumimportecomision()
    {
        return $this->numimportecomision;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Comisionesventas
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
     * @return Comisionesventas
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
     * @return Comisionesventas
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
     * @return Comisionesventas
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
     * @return Comisionesventas
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
