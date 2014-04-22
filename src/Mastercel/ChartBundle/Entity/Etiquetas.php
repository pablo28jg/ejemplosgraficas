<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etiquetas
 *
 * @ORM\Table(name="Etiquetas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrEtiqueta_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Etiquetas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEtiqueta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numetiquetaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrEtiqueta_ky", type="string", length=10, nullable=true)
     */
    private $stretiquetaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEtiquetasAlPaso", type="integer", nullable=true)
     */
    private $numetiquetasalpaso = '0';

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
     * Get numetiquetaId
     *
     * @return integer 
     */
    public function getNumetiquetaId()
    {
        return $this->numetiquetaId;
    }

    /**
     * Set stretiquetaKy
     *
     * @param string $stretiquetaKy
     * @return Etiquetas
     */
    public function setStretiquetaKy($stretiquetaKy)
    {
        $this->stretiquetaKy = $stretiquetaKy;

        return $this;
    }

    /**
     * Get stretiquetaKy
     *
     * @return string 
     */
    public function getStretiquetaKy()
    {
        return $this->stretiquetaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Etiquetas
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
     * Set numetiquetasalpaso
     *
     * @param integer $numetiquetasalpaso
     * @return Etiquetas
     */
    public function setNumetiquetasalpaso($numetiquetasalpaso)
    {
        $this->numetiquetasalpaso = $numetiquetasalpaso;

        return $this;
    }

    /**
     * Get numetiquetasalpaso
     *
     * @return integer 
     */
    public function getNumetiquetasalpaso()
    {
        return $this->numetiquetasalpaso;
    }

    /**
     * Set meminstruccionaccess
     *
     * @param string $meminstruccionaccess
     * @return Etiquetas
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
     * @return Etiquetas
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

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Etiquetas
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
     * @return Etiquetas
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
     * @return Etiquetas
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
     * @return Etiquetas
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
     * @return Etiquetas
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
