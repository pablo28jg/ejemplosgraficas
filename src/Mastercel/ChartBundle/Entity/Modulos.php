<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulos
 *
 * @ORM\Table(name="Modulos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrModulo_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"NumTipoMenu", "NumOrdenAparicion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Modulos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumModulo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummoduloId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrModulo_ky", type="string", length=20, nullable=true)
     */
    private $strmoduloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoMenu", type="integer", nullable=true)
     */
    private $numtipomenu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoModulo", type="integer", nullable=true)
     */
    private $numtipomodulo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenAparicion", type="integer", nullable=true)
     */
    private $numordenaparicion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoAcceso", type="string", length=20, nullable=true)
     */
    private $strcodigoacceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImagen_id", type="integer", nullable=true)
     */
    private $numimagenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEmpresa", type="integer", nullable=true)
     */
    private $numtipoempresa = '0';

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
     * Get nummoduloId
     *
     * @return integer 
     */
    public function getNummoduloId()
    {
        return $this->nummoduloId;
    }

    /**
     * Set strmoduloKy
     *
     * @param string $strmoduloKy
     * @return Modulos
     */
    public function setStrmoduloKy($strmoduloKy)
    {
        $this->strmoduloKy = $strmoduloKy;

        return $this;
    }

    /**
     * Get strmoduloKy
     *
     * @return string 
     */
    public function getStrmoduloKy()
    {
        return $this->strmoduloKy;
    }

    /**
     * Set numtipomenu
     *
     * @param integer $numtipomenu
     * @return Modulos
     */
    public function setNumtipomenu($numtipomenu)
    {
        $this->numtipomenu = $numtipomenu;

        return $this;
    }

    /**
     * Get numtipomenu
     *
     * @return integer 
     */
    public function getNumtipomenu()
    {
        return $this->numtipomenu;
    }

    /**
     * Set numtipomodulo
     *
     * @param integer $numtipomodulo
     * @return Modulos
     */
    public function setNumtipomodulo($numtipomodulo)
    {
        $this->numtipomodulo = $numtipomodulo;

        return $this;
    }

    /**
     * Get numtipomodulo
     *
     * @return integer 
     */
    public function getNumtipomodulo()
    {
        return $this->numtipomodulo;
    }

    /**
     * Set numordenaparicion
     *
     * @param integer $numordenaparicion
     * @return Modulos
     */
    public function setNumordenaparicion($numordenaparicion)
    {
        $this->numordenaparicion = $numordenaparicion;

        return $this;
    }

    /**
     * Get numordenaparicion
     *
     * @return integer 
     */
    public function getNumordenaparicion()
    {
        return $this->numordenaparicion;
    }

    /**
     * Set strcodigoacceso
     *
     * @param string $strcodigoacceso
     * @return Modulos
     */
    public function setStrcodigoacceso($strcodigoacceso)
    {
        $this->strcodigoacceso = $strcodigoacceso;

        return $this;
    }

    /**
     * Get strcodigoacceso
     *
     * @return string 
     */
    public function getStrcodigoacceso()
    {
        return $this->strcodigoacceso;
    }

    /**
     * Set numimagenId
     *
     * @param integer $numimagenId
     * @return Modulos
     */
    public function setNumimagenId($numimagenId)
    {
        $this->numimagenId = $numimagenId;

        return $this;
    }

    /**
     * Get numimagenId
     *
     * @return integer 
     */
    public function getNumimagenId()
    {
        return $this->numimagenId;
    }

    /**
     * Set numtipoempresa
     *
     * @param integer $numtipoempresa
     * @return Modulos
     */
    public function setNumtipoempresa($numtipoempresa)
    {
        $this->numtipoempresa = $numtipoempresa;

        return $this;
    }

    /**
     * Get numtipoempresa
     *
     * @return integer 
     */
    public function getNumtipoempresa()
    {
        return $this->numtipoempresa;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Modulos
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
     * @return Modulos
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
     * @return Modulos
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
     * @return Modulos
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
     * @return Modulos
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
     * @return Modulos
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
     * @return Modulos
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
     * @return Modulos
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
