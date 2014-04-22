<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recibosdetalles
 *
 * @ORM\Table(name="RecibosDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumRecibo_id", "NumTipo", "NumLinea"})})
 * @ORM\Entity
 */
class Recibosdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumRecibo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numreciboId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipo = '0';

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
     * @ORM\Column(name="NumLinea", type="integer", nullable=true)
     */
    private $numlinea = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTitulo", type="string", length=60, nullable=true)
     */
    private $strtitulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAlineacion", type="integer", nullable=true)
     */
    private $numtipoalineacion = '0';

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
     * Set numreciboId
     *
     * @param integer $numreciboId
     * @return Recibosdetalles
     */
    public function setNumreciboId($numreciboId)
    {
        $this->numreciboId = $numreciboId;

        return $this;
    }

    /**
     * Get numreciboId
     *
     * @return integer 
     */
    public function getNumreciboId()
    {
        return $this->numreciboId;
    }

    /**
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Recibosdetalles
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Recibosdetalles
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
     * Set numlinea
     *
     * @param integer $numlinea
     * @return Recibosdetalles
     */
    public function setNumlinea($numlinea)
    {
        $this->numlinea = $numlinea;

        return $this;
    }

    /**
     * Get numlinea
     *
     * @return integer 
     */
    public function getNumlinea()
    {
        return $this->numlinea;
    }

    /**
     * Set strtitulo
     *
     * @param string $strtitulo
     * @return Recibosdetalles
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
     * Set numtipoalineacion
     *
     * @param integer $numtipoalineacion
     * @return Recibosdetalles
     */
    public function setNumtipoalineacion($numtipoalineacion)
    {
        $this->numtipoalineacion = $numtipoalineacion;

        return $this;
    }

    /**
     * Get numtipoalineacion
     *
     * @return integer 
     */
    public function getNumtipoalineacion()
    {
        return $this->numtipoalineacion;
    }

    /**
     * Set strletranombre
     *
     * @param string $strletranombre
     * @return Recibosdetalles
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
     * @return Recibosdetalles
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
     * @return Recibosdetalles
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
     * @return Recibosdetalles
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
     * @return Recibosdetalles
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
     * @return Recibosdetalles
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
     * @return Recibosdetalles
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
