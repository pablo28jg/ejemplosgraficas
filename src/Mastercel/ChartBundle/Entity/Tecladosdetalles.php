<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecladosdetalles
 *
 * @ORM\Table(name="TecladosDetalles")
 * @ORM\Entity
 */
class Tecladosdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTeclado_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtecladoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numnivelId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTecla_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numteclaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTitulo", type="string", length=30, nullable=true)
     */
    private $strtitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="GraDibujo", type="text", length=16, nullable=true)
     */
    private $gradibujo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumColor", type="integer", nullable=true)
     */
    private $numcolor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTeclasRapidas", type="string", length=20, nullable=true)
     */
    private $strteclasrapidas;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoFuncion", type="integer", nullable=true)
     */
    private $numtipofuncion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelCargar", type="integer", nullable=true)
     */
    private $numnivelcargar = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDato", type="string", length=20, nullable=true)
     */
    private $strdato;

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogDatoSegmentado", type="boolean", nullable=true)
     */
    private $logdatosegmentado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSegmentoDato", type="integer", nullable=true)
     */
    private $numsegmentodato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelAutorizacion", type="integer", nullable=true)
     */
    private $numnivelautorizacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrLetraNombre", type="string", length=20, nullable=true)
     */
    private $strletranombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLetraAncho", type="integer", nullable=true)
     */
    private $numletraancho = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLetraColor", type="integer", nullable=true)
     */
    private $numletracolor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloGruesa", type="boolean", nullable=true)
     */
    private $logletraestilogruesa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloCursiva", type="boolean", nullable=true)
     */
    private $logletraestilocursiva = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloSubrayada", type="boolean", nullable=true)
     */
    private $logletraestilosubrayada = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloTachada", type="boolean", nullable=true)
     */
    private $logletraestilotachada = '0';



    /**
     * Set numtecladoId
     *
     * @param integer $numtecladoId
     * @return Tecladosdetalles
     */
    public function setNumtecladoId($numtecladoId)
    {
        $this->numtecladoId = $numtecladoId;

        return $this;
    }

    /**
     * Get numtecladoId
     *
     * @return integer 
     */
    public function getNumtecladoId()
    {
        return $this->numtecladoId;
    }

    /**
     * Set numnivelId
     *
     * @param integer $numnivelId
     * @return Tecladosdetalles
     */
    public function setNumnivelId($numnivelId)
    {
        $this->numnivelId = $numnivelId;

        return $this;
    }

    /**
     * Get numnivelId
     *
     * @return integer 
     */
    public function getNumnivelId()
    {
        return $this->numnivelId;
    }

    /**
     * Set numteclaId
     *
     * @param integer $numteclaId
     * @return Tecladosdetalles
     */
    public function setNumteclaId($numteclaId)
    {
        $this->numteclaId = $numteclaId;

        return $this;
    }

    /**
     * Get numteclaId
     *
     * @return integer 
     */
    public function getNumteclaId()
    {
        return $this->numteclaId;
    }

    /**
     * Set strtitulo
     *
     * @param string $strtitulo
     * @return Tecladosdetalles
     */
    public function setStrtitulo($strtitulo)
    {
        $this->strtitulo = $strtitulo;

        return $this;
    }

    /**
     * Get strtitulo
     *
     * @return string 
     */
    public function getStrtitulo()
    {
        return $this->strtitulo;
    }

    /**
     * Set gradibujo
     *
     * @param string $gradibujo
     * @return Tecladosdetalles
     */
    public function setGradibujo($gradibujo)
    {
        $this->gradibujo = $gradibujo;

        return $this;
    }

    /**
     * Get gradibujo
     *
     * @return string 
     */
    public function getGradibujo()
    {
        return $this->gradibujo;
    }

    /**
     * Set numcolor
     *
     * @param integer $numcolor
     * @return Tecladosdetalles
     */
    public function setNumcolor($numcolor)
    {
        $this->numcolor = $numcolor;

        return $this;
    }

    /**
     * Get numcolor
     *
     * @return integer 
     */
    public function getNumcolor()
    {
        return $this->numcolor;
    }

    /**
     * Set strteclasrapidas
     *
     * @param string $strteclasrapidas
     * @return Tecladosdetalles
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
     * Set numtipofuncion
     *
     * @param integer $numtipofuncion
     * @return Tecladosdetalles
     */
    public function setNumtipofuncion($numtipofuncion)
    {
        $this->numtipofuncion = $numtipofuncion;

        return $this;
    }

    /**
     * Get numtipofuncion
     *
     * @return integer 
     */
    public function getNumtipofuncion()
    {
        return $this->numtipofuncion;
    }

    /**
     * Set numnivelcargar
     *
     * @param integer $numnivelcargar
     * @return Tecladosdetalles
     */
    public function setNumnivelcargar($numnivelcargar)
    {
        $this->numnivelcargar = $numnivelcargar;

        return $this;
    }

    /**
     * Get numnivelcargar
     *
     * @return integer 
     */
    public function getNumnivelcargar()
    {
        return $this->numnivelcargar;
    }

    /**
     * Set strdato
     *
     * @param string $strdato
     * @return Tecladosdetalles
     */
    public function setStrdato($strdato)
    {
        $this->strdato = $strdato;

        return $this;
    }

    /**
     * Get strdato
     *
     * @return string 
     */
    public function getStrdato()
    {
        return $this->strdato;
    }

    /**
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Tecladosdetalles
     */
    public function setNumcantidad($numcantidad)
    {
        $this->numcantidad = $numcantidad;

        return $this;
    }

    /**
     * Get numcantidad
     *
     * @return float 
     */
    public function getNumcantidad()
    {
        return $this->numcantidad;
    }

    /**
     * Set logdatosegmentado
     *
     * @param boolean $logdatosegmentado
     * @return Tecladosdetalles
     */
    public function setLogdatosegmentado($logdatosegmentado)
    {
        $this->logdatosegmentado = $logdatosegmentado;

        return $this;
    }

    /**
     * Get logdatosegmentado
     *
     * @return boolean 
     */
    public function getLogdatosegmentado()
    {
        return $this->logdatosegmentado;
    }

    /**
     * Set numsegmentodato
     *
     * @param integer $numsegmentodato
     * @return Tecladosdetalles
     */
    public function setNumsegmentodato($numsegmentodato)
    {
        $this->numsegmentodato = $numsegmentodato;

        return $this;
    }

    /**
     * Get numsegmentodato
     *
     * @return integer 
     */
    public function getNumsegmentodato()
    {
        return $this->numsegmentodato;
    }

    /**
     * Set numnivelautorizacion
     *
     * @param integer $numnivelautorizacion
     * @return Tecladosdetalles
     */
    public function setNumnivelautorizacion($numnivelautorizacion)
    {
        $this->numnivelautorizacion = $numnivelautorizacion;

        return $this;
    }

    /**
     * Get numnivelautorizacion
     *
     * @return integer 
     */
    public function getNumnivelautorizacion()
    {
        return $this->numnivelautorizacion;
    }

    /**
     * Set strletranombre
     *
     * @param string $strletranombre
     * @return Tecladosdetalles
     */
    public function setStrletranombre($strletranombre)
    {
        $this->strletranombre = $strletranombre;

        return $this;
    }

    /**
     * Get strletranombre
     *
     * @return string 
     */
    public function getStrletranombre()
    {
        return $this->strletranombre;
    }

    /**
     * Set numletraancho
     *
     * @param integer $numletraancho
     * @return Tecladosdetalles
     */
    public function setNumletraancho($numletraancho)
    {
        $this->numletraancho = $numletraancho;

        return $this;
    }

    /**
     * Get numletraancho
     *
     * @return integer 
     */
    public function getNumletraancho()
    {
        return $this->numletraancho;
    }

    /**
     * Set numletracolor
     *
     * @param integer $numletracolor
     * @return Tecladosdetalles
     */
    public function setNumletracolor($numletracolor)
    {
        $this->numletracolor = $numletracolor;

        return $this;
    }

    /**
     * Get numletracolor
     *
     * @return integer 
     */
    public function getNumletracolor()
    {
        return $this->numletracolor;
    }

    /**
     * Set logletraestilogruesa
     *
     * @param boolean $logletraestilogruesa
     * @return Tecladosdetalles
     */
    public function setLogletraestilogruesa($logletraestilogruesa)
    {
        $this->logletraestilogruesa = $logletraestilogruesa;

        return $this;
    }

    /**
     * Get logletraestilogruesa
     *
     * @return boolean 
     */
    public function getLogletraestilogruesa()
    {
        return $this->logletraestilogruesa;
    }

    /**
     * Set logletraestilocursiva
     *
     * @param boolean $logletraestilocursiva
     * @return Tecladosdetalles
     */
    public function setLogletraestilocursiva($logletraestilocursiva)
    {
        $this->logletraestilocursiva = $logletraestilocursiva;

        return $this;
    }

    /**
     * Get logletraestilocursiva
     *
     * @return boolean 
     */
    public function getLogletraestilocursiva()
    {
        return $this->logletraestilocursiva;
    }

    /**
     * Set logletraestilosubrayada
     *
     * @param boolean $logletraestilosubrayada
     * @return Tecladosdetalles
     */
    public function setLogletraestilosubrayada($logletraestilosubrayada)
    {
        $this->logletraestilosubrayada = $logletraestilosubrayada;

        return $this;
    }

    /**
     * Get logletraestilosubrayada
     *
     * @return boolean 
     */
    public function getLogletraestilosubrayada()
    {
        return $this->logletraestilosubrayada;
    }

    /**
     * Set logletraestilotachada
     *
     * @param boolean $logletraestilotachada
     * @return Tecladosdetalles
     */
    public function setLogletraestilotachada($logletraestilotachada)
    {
        $this->logletraestilotachada = $logletraestilotachada;

        return $this;
    }

    /**
     * Get logletraestilotachada
     *
     * @return boolean 
     */
    public function getLogletraestilotachada()
    {
        return $this->logletraestilotachada;
    }
}
