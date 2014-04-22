<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opciones
 *
 * @ORM\Table(name="Opciones", indexes={@ORM\Index(name="Indice_1", columns={"StrOpcion_ky"}), @ORM\Index(name="Indice_2", columns={"NumModulo_id", "NumOrdenAparicion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Opciones
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
     * @var string
     *
     * @ORM\Column(name="StrOpcion_ky", type="string", length=20, nullable=true)
     */
    private $stropcionKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumModulo_id", type="integer", nullable=true)
     */
    private $nummoduloId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenAparicion", type="integer", nullable=true)
     */
    private $numordenaparicion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTeclasRapidas", type="string", length=20, nullable=true)
     */
    private $strteclasrapidas;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoSeparador", type="integer", nullable=true)
     */
    private $numtiposeparador = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoOpcion", type="integer", nullable=true)
     */
    private $numtipoopcion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPrograma", type="integer", nullable=true)
     */
    private $numtipoprograma = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoForma", type="integer", nullable=true)
     */
    private $numtipoforma = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrPrograma", type="string", length=50, nullable=true)
     */
    private $strprograma;

    /**
     * @var string
     *
     * @ORM\Column(name="StrParametros", type="string", length=50, nullable=true)
     */
    private $strparametros;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArchivoAyuda", type="string", length=20, nullable=true)
     */
    private $strarchivoayuda;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContextoAyuda", type="integer", nullable=true)
     */
    private $numcontextoayuda = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAcceso", type="integer", nullable=true)
     */
    private $numacceso = '0';

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
     * @ORM\Column(name="NumTipoUbicacion", type="integer", nullable=true)
     */
    private $numtipoubicacion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogIncluirMenu", type="boolean", nullable=true)
     */
    private $logincluirmenu = '0';

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
     * Get numopcionId
     *
     * @return integer 
     */
    public function getNumopcionId()
    {
        return $this->numopcionId;
    }

    /**
     * Set stropcionKy
     *
     * @param string $stropcionKy
     * @return Opciones
     */
    public function setStropcionKy($stropcionKy)
    {
        $this->stropcionKy = $stropcionKy;

        return $this;
    }

    /**
     * Get stropcionKy
     *
     * @return string 
     */
    public function getStropcionKy()
    {
        return $this->stropcionKy;
    }

    /**
     * Set nummoduloId
     *
     * @param integer $nummoduloId
     * @return Opciones
     */
    public function setNummoduloId($nummoduloId)
    {
        $this->nummoduloId = $nummoduloId;

        return $this;
    }

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
     * Set numordenaparicion
     *
     * @param integer $numordenaparicion
     * @return Opciones
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
     * Set strteclasrapidas
     *
     * @param string $strteclasrapidas
     * @return Opciones
     */
    public function setStrteclasrapidas($strteclasrapidas)
    {
        $this->strteclasrapidas = $strteclasrapidas;

        return $this;
    }

    /**
     * Get strteclasrapidas
     *
     * @return string 
     */
    public function getStrteclasrapidas()
    {
        return $this->strteclasrapidas;
    }

    /**
     * Set numtiposeparador
     *
     * @param integer $numtiposeparador
     * @return Opciones
     */
    public function setNumtiposeparador($numtiposeparador)
    {
        $this->numtiposeparador = $numtiposeparador;

        return $this;
    }

    /**
     * Get numtiposeparador
     *
     * @return integer 
     */
    public function getNumtiposeparador()
    {
        return $this->numtiposeparador;
    }

    /**
     * Set numtipoopcion
     *
     * @param integer $numtipoopcion
     * @return Opciones
     */
    public function setNumtipoopcion($numtipoopcion)
    {
        $this->numtipoopcion = $numtipoopcion;

        return $this;
    }

    /**
     * Get numtipoopcion
     *
     * @return integer 
     */
    public function getNumtipoopcion()
    {
        return $this->numtipoopcion;
    }

    /**
     * Set numtipoprograma
     *
     * @param integer $numtipoprograma
     * @return Opciones
     */
    public function setNumtipoprograma($numtipoprograma)
    {
        $this->numtipoprograma = $numtipoprograma;

        return $this;
    }

    /**
     * Get numtipoprograma
     *
     * @return integer 
     */
    public function getNumtipoprograma()
    {
        return $this->numtipoprograma;
    }

    /**
     * Set numtipoforma
     *
     * @param integer $numtipoforma
     * @return Opciones
     */
    public function setNumtipoforma($numtipoforma)
    {
        $this->numtipoforma = $numtipoforma;

        return $this;
    }

    /**
     * Get numtipoforma
     *
     * @return integer 
     */
    public function getNumtipoforma()
    {
        return $this->numtipoforma;
    }

    /**
     * Set strprograma
     *
     * @param string $strprograma
     * @return Opciones
     */
    public function setStrprograma($strprograma)
    {
        $this->strprograma = $strprograma;

        return $this;
    }

    /**
     * Get strprograma
     *
     * @return string 
     */
    public function getStrprograma()
    {
        return $this->strprograma;
    }

    /**
     * Set strparametros
     *
     * @param string $strparametros
     * @return Opciones
     */
    public function setStrparametros($strparametros)
    {
        $this->strparametros = $strparametros;

        return $this;
    }

    /**
     * Get strparametros
     *
     * @return string 
     */
    public function getStrparametros()
    {
        return $this->strparametros;
    }

    /**
     * Set strarchivoayuda
     *
     * @param string $strarchivoayuda
     * @return Opciones
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
     * @return Opciones
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

    /**
     * Set numacceso
     *
     * @param integer $numacceso
     * @return Opciones
     */
    public function setNumacceso($numacceso)
    {
        $this->numacceso = $numacceso;

        return $this;
    }

    /**
     * Get numacceso
     *
     * @return integer 
     */
    public function getNumacceso()
    {
        return $this->numacceso;
    }

    /**
     * Set strcodigoacceso
     *
     * @param string $strcodigoacceso
     * @return Opciones
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
     * @return Opciones
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
     * Set numtipoubicacion
     *
     * @param integer $numtipoubicacion
     * @return Opciones
     */
    public function setNumtipoubicacion($numtipoubicacion)
    {
        $this->numtipoubicacion = $numtipoubicacion;

        return $this;
    }

    /**
     * Get numtipoubicacion
     *
     * @return integer 
     */
    public function getNumtipoubicacion()
    {
        return $this->numtipoubicacion;
    }

    /**
     * Set logincluirmenu
     *
     * @param boolean $logincluirmenu
     * @return Opciones
     */
    public function setLogincluirmenu($logincluirmenu)
    {
        $this->logincluirmenu = $logincluirmenu;

        return $this;
    }

    /**
     * Get logincluirmenu
     *
     * @return boolean 
     */
    public function getLogincluirmenu()
    {
        return $this->logincluirmenu;
    }

    /**
     * Set numtipoempresa
     *
     * @param integer $numtipoempresa
     * @return Opciones
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
     * @return Opciones
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
     * @return Opciones
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
     * @return Opciones
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
     * @return Opciones
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
     * @return Opciones
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
     * @return Opciones
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
