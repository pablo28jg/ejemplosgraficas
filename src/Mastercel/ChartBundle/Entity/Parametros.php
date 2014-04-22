<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametros
 *
 * @ORM\Table(name="Parametros", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrParametro_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Parametros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumParametro_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numparametroId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrParametro_ky", type="string", length=20, nullable=true)
     */
    private $strparametroKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreTabla", type="string", length=60, nullable=true)
     */
    private $strnombretabla;

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
     * @var string
     *
     * @ORM\Column(name="StrArchivoAyuda", type="string", length=30, nullable=true)
     */
    private $strarchivoayuda;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContextoAyuda", type="integer", nullable=true)
     */
    private $numcontextoayuda = '0';



    /**
     * Get numparametroId
     *
     * @return integer 
     */
    public function getNumparametroId()
    {
        return $this->numparametroId;
    }

    /**
     * Set strparametroKy
     *
     * @param string $strparametroKy
     * @return Parametros
     */
    public function setStrparametroKy($strparametroKy)
    {
        $this->strparametroKy = $strparametroKy;

        return $this;
    }

    /**
     * Get strparametroKy
     *
     * @return string 
     */
    public function getStrparametroKy()
    {
        return $this->strparametroKy;
    }

    /**
     * Set strnombretabla
     *
     * @param string $strnombretabla
     * @return Parametros
     */
    public function setStrnombretabla($strnombretabla)
    {
        $this->strnombretabla = $strnombretabla;

        return $this;
    }

    /**
     * Get strnombretabla
     *
     * @return string 
     */
    public function getStrnombretabla()
    {
        return $this->strnombretabla;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Parametros
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
     * @return Parametros
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
     * @return Parametros
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
     * @return Parametros
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
     * @return Parametros
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

    /**
     * Set strarchivoayuda
     *
     * @param string $strarchivoayuda
     * @return Parametros
     */
    public function setStrarchivoayuda($strarchivoayuda)
    {
        $this->strarchivoayuda = $strarchivoayuda;

        return $this;
    }

    /**
     * Get strarchivoayuda
     *
     * @return string 
     */
    public function getStrarchivoayuda()
    {
        return $this->strarchivoayuda;
    }

    /**
     * Set numcontextoayuda
     *
     * @param integer $numcontextoayuda
     * @return Parametros
     */
    public function setNumcontextoayuda($numcontextoayuda)
    {
        $this->numcontextoayuda = $numcontextoayuda;

        return $this;
    }

    /**
     * Get numcontextoayuda
     *
     * @return integer 
     */
    public function getNumcontextoayuda()
    {
        return $this->numcontextoayuda;
    }
}
