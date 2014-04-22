<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportesopciones
 *
 * @ORM\Table(name="ReportesOpciones", indexes={@ORM\Index(name="Indice_1", columns={"NumReporte_id", "NumOrden"}), @ORM\Index(name="Indice_2", columns={"StrNombreReporte"})})
 * @ORM\Entity
 */
class Reportesopciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOpcion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numopcionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=true)
     */
    private $numreporteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreReporte", type="string", length=30, nullable=true)
     */
    private $strnombrereporte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogOpcionOmision", type="boolean", nullable=true)
     */
    private $logopcionomision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemInstruccionAccess", type="text", length=16, nullable=true)
     */
    private $meminstruccionaccess;

    /**
     * @var string
     *
     * @ORM\Column(name="MemInstruccionSqlSrv", type="text", length=16, nullable=true)
     */
    private $meminstruccionsqlsrv;



    /**
     * Get numopcionId
     *
     * @return integer 
     */
    public function getNumopcionId()
    {
        return $this->numopcionId;
    }

    /**
     * Set numreporteId
     *
     * @param integer $numreporteId
     * @return Reportesopciones
     */
    public function setNumreporteId($numreporteId)
    {
        $this->numreporteId = $numreporteId;

        return $this;
    }

    /**
     * Get numreporteId
     *
     * @return integer 
     */
    public function getNumreporteId()
    {
        return $this->numreporteId;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Reportesopciones
     */
    public function setNumorden($numorden)
    {
        $this->numorden = $numorden;

        return $this;
    }

    /**
     * Get numorden
     *
     * @return integer 
     */
    public function getNumorden()
    {
        return $this->numorden;
    }

    /**
     * Set strnombrereporte
     *
     * @param string $strnombrereporte
     * @return Reportesopciones
     */
    public function setStrnombrereporte($strnombrereporte)
    {
        $this->strnombrereporte = $strnombrereporte;

        return $this;
    }

    /**
     * Get strnombrereporte
     *
     * @return string 
     */
    public function getStrnombrereporte()
    {
        return $this->strnombrereporte;
    }

    /**
     * Set logopcionomision
     *
     * @param boolean $logopcionomision
     * @return Reportesopciones
     */
    public function setLogopcionomision($logopcionomision)
    {
        $this->logopcionomision = $logopcionomision;

        return $this;
    }

    /**
     * Get logopcionomision
     *
     * @return boolean 
     */
    public function getLogopcionomision()
    {
        return $this->logopcionomision;
    }

    /**
     * Set meminstruccionaccess
     *
     * @param string $meminstruccionaccess
     * @return Reportesopciones
     */
    public function setMeminstruccionaccess($meminstruccionaccess)
    {
        $this->meminstruccionaccess = $meminstruccionaccess;

        return $this;
    }

    /**
     * Get meminstruccionaccess
     *
     * @return string 
     */
    public function getMeminstruccionaccess()
    {
        return $this->meminstruccionaccess;
    }

    /**
     * Set meminstruccionsqlsrv
     *
     * @param string $meminstruccionsqlsrv
     * @return Reportesopciones
     */
    public function setMeminstruccionsqlsrv($meminstruccionsqlsrv)
    {
        $this->meminstruccionsqlsrv = $meminstruccionsqlsrv;

        return $this;
    }

    /**
     * Get meminstruccionsqlsrv
     *
     * @return string 
     */
    public function getMeminstruccionsqlsrv()
    {
        return $this->meminstruccionsqlsrv;
    }
}
