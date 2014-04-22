<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontablesdistribuciones
 *
 * @ORM\Table(name="CuentasContablesDistribuciones", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrDistribucion_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumEmpresa_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Cuentascontablesdistribuciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumDistribucion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numdistribucionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDistribucion_ky", type="string", length=10, nullable=true)
     */
    private $strdistribucionKy;

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
     * @ORM\Column(name="NumOrdenProceso", type="integer", nullable=true)
     */
    private $numordenproceso = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteUltimaRevision", type="datetime", nullable=true)
     */
    private $dteultimarevision;

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
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



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
     * Set strdistribucionKy
     *
     * @param string $strdistribucionKy
     * @return Cuentascontablesdistribuciones
     */
    public function setStrdistribucionKy($strdistribucionKy)
    {
        $this->strdistribucionKy = $strdistribucionKy;

        return $this;
    }

    /**
     * Get strdistribucionKy
     *
     * @return string 
     */
    public function getStrdistribucionKy()
    {
        return $this->strdistribucionKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Cuentascontablesdistribuciones
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
     * @return Cuentascontablesdistribuciones
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
     * Set numordenproceso
     *
     * @param integer $numordenproceso
     * @return Cuentascontablesdistribuciones
     */
    public function setNumordenproceso($numordenproceso)
    {
        $this->numordenproceso = $numordenproceso;

        return $this;
    }

    /**
     * Get numordenproceso
     *
     * @return integer 
     */
    public function getNumordenproceso()
    {
        return $this->numordenproceso;
    }

    /**
     * Set dteultimarevision
     *
     * @param \DateTime $dteultimarevision
     * @return Cuentascontablesdistribuciones
     */
    public function setDteultimarevision($dteultimarevision)
    {
        $this->dteultimarevision = $dteultimarevision;

        return $this;
    }

    /**
     * Get dteultimarevision
     *
     * @return \DateTime 
     */
    public function getDteultimarevision()
    {
        return $this->dteultimarevision;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Cuentascontablesdistribuciones
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
     * @return Cuentascontablesdistribuciones
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
     * @return Cuentascontablesdistribuciones
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
     * @return Cuentascontablesdistribuciones
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Cuentascontablesdistribuciones
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

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Cuentascontablesdistribuciones
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
