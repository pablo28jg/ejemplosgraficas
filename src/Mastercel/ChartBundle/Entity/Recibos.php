<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recibos
 *
 * @ORM\Table(name="Recibos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrRecibo_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Recibos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumRecibo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numreciboId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrRecibo_ky", type="string", length=10, nullable=true)
     */
    private $strreciboKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrLetraNombre_1", type="string", length=20, nullable=true)
     */
    private $strletranombre1;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLetraAncho_1", type="integer", nullable=true)
     */
    private $numletraancho1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLetraColor_1", type="integer", nullable=true)
     */
    private $numletracolor1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloGruesa_1", type="boolean", nullable=true)
     */
    private $logletraestilogruesa1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloCursiva_1", type="boolean", nullable=true)
     */
    private $logletraestilocursiva1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloSubrayada_1", type="boolean", nullable=true)
     */
    private $logletraestilosubrayada1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloTachada_1", type="boolean", nullable=true)
     */
    private $logletraestilotachada1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrLetraNombre_2", type="string", length=20, nullable=true)
     */
    private $strletranombre2;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLetraAncho_2", type="integer", nullable=true)
     */
    private $numletraancho2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLetraColor_2", type="integer", nullable=true)
     */
    private $numletracolor2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloGruesa_2", type="boolean", nullable=true)
     */
    private $logletraestilogruesa2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloCursiva_2", type="boolean", nullable=true)
     */
    private $logletraestilocursiva2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloSubrayada_2", type="boolean", nullable=true)
     */
    private $logletraestilosubrayada2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloTachada_2", type="boolean", nullable=true)
     */
    private $logletraestilotachada2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrLetraNombre_3", type="string", length=20, nullable=true)
     */
    private $strletranombre3;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLetraAncho_3", type="integer", nullable=true)
     */
    private $numletraancho3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLetraColor_3", type="integer", nullable=true)
     */
    private $numletracolor3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloGruesa_3", type="boolean", nullable=true)
     */
    private $logletraestilogruesa3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloCursiva_3", type="boolean", nullable=true)
     */
    private $logletraestilocursiva3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloSubrayada_3", type="boolean", nullable=true)
     */
    private $logletraestilosubrayada3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogLetraEstiloTachada_3", type="boolean", nullable=true)
     */
    private $logletraestilotachada3 = '0';

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
     * Get numreciboId
     *
     * @return integer 
     */
    public function getNumreciboId()
    {
        return $this->numreciboId;
    }

    /**
     * Set strreciboKy
     *
     * @param string $strreciboKy
     * @return Recibos
     */
    public function setStrreciboKy($strreciboKy)
    {
        $this->strreciboKy = $strreciboKy;

        return $this;
    }

    /**
     * Get strreciboKy
     *
     * @return string 
     */
    public function getStrreciboKy()
    {
        return $this->strreciboKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Recibos
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
     * Set strletranombre1
     *
     * @param string $strletranombre1
     * @return Recibos
     */
    public function setStrletranombre1($strletranombre1)
    {
        $this->strletranombre1 = $strletranombre1;

        return $this;
    }

    /**
     * Get strletranombre1
     *
     * @return string 
     */
    public function getStrletranombre1()
    {
        return $this->strletranombre1;
    }

    /**
     * Set numletraancho1
     *
     * @param integer $numletraancho1
     * @return Recibos
     */
    public function setNumletraancho1($numletraancho1)
    {
        $this->numletraancho1 = $numletraancho1;

        return $this;
    }

    /**
     * Get numletraancho1
     *
     * @return integer 
     */
    public function getNumletraancho1()
    {
        return $this->numletraancho1;
    }

    /**
     * Set numletracolor1
     *
     * @param integer $numletracolor1
     * @return Recibos
     */
    public function setNumletracolor1($numletracolor1)
    {
        $this->numletracolor1 = $numletracolor1;

        return $this;
    }

    /**
     * Get numletracolor1
     *
     * @return integer 
     */
    public function getNumletracolor1()
    {
        return $this->numletracolor1;
    }

    /**
     * Set logletraestilogruesa1
     *
     * @param boolean $logletraestilogruesa1
     * @return Recibos
     */
    public function setLogletraestilogruesa1($logletraestilogruesa1)
    {
        $this->logletraestilogruesa1 = $logletraestilogruesa1;

        return $this;
    }

    /**
     * Get logletraestilogruesa1
     *
     * @return boolean 
     */
    public function getLogletraestilogruesa1()
    {
        return $this->logletraestilogruesa1;
    }

    /**
     * Set logletraestilocursiva1
     *
     * @param boolean $logletraestilocursiva1
     * @return Recibos
     */
    public function setLogletraestilocursiva1($logletraestilocursiva1)
    {
        $this->logletraestilocursiva1 = $logletraestilocursiva1;

        return $this;
    }

    /**
     * Get logletraestilocursiva1
     *
     * @return boolean 
     */
    public function getLogletraestilocursiva1()
    {
        return $this->logletraestilocursiva1;
    }

    /**
     * Set logletraestilosubrayada1
     *
     * @param boolean $logletraestilosubrayada1
     * @return Recibos
     */
    public function setLogletraestilosubrayada1($logletraestilosubrayada1)
    {
        $this->logletraestilosubrayada1 = $logletraestilosubrayada1;

        return $this;
    }

    /**
     * Get logletraestilosubrayada1
     *
     * @return boolean 
     */
    public function getLogletraestilosubrayada1()
    {
        return $this->logletraestilosubrayada1;
    }

    /**
     * Set logletraestilotachada1
     *
     * @param boolean $logletraestilotachada1
     * @return Recibos
     */
    public function setLogletraestilotachada1($logletraestilotachada1)
    {
        $this->logletraestilotachada1 = $logletraestilotachada1;

        return $this;
    }

    /**
     * Get logletraestilotachada1
     *
     * @return boolean 
     */
    public function getLogletraestilotachada1()
    {
        return $this->logletraestilotachada1;
    }

    /**
     * Set strletranombre2
     *
     * @param string $strletranombre2
     * @return Recibos
     */
    public function setStrletranombre2($strletranombre2)
    {
        $this->strletranombre2 = $strletranombre2;

        return $this;
    }

    /**
     * Get strletranombre2
     *
     * @return string 
     */
    public function getStrletranombre2()
    {
        return $this->strletranombre2;
    }

    /**
     * Set numletraancho2
     *
     * @param integer $numletraancho2
     * @return Recibos
     */
    public function setNumletraancho2($numletraancho2)
    {
        $this->numletraancho2 = $numletraancho2;

        return $this;
    }

    /**
     * Get numletraancho2
     *
     * @return integer 
     */
    public function getNumletraancho2()
    {
        return $this->numletraancho2;
    }

    /**
     * Set numletracolor2
     *
     * @param integer $numletracolor2
     * @return Recibos
     */
    public function setNumletracolor2($numletracolor2)
    {
        $this->numletracolor2 = $numletracolor2;

        return $this;
    }

    /**
     * Get numletracolor2
     *
     * @return integer 
     */
    public function getNumletracolor2()
    {
        return $this->numletracolor2;
    }

    /**
     * Set logletraestilogruesa2
     *
     * @param boolean $logletraestilogruesa2
     * @return Recibos
     */
    public function setLogletraestilogruesa2($logletraestilogruesa2)
    {
        $this->logletraestilogruesa2 = $logletraestilogruesa2;

        return $this;
    }

    /**
     * Get logletraestilogruesa2
     *
     * @return boolean 
     */
    public function getLogletraestilogruesa2()
    {
        return $this->logletraestilogruesa2;
    }

    /**
     * Set logletraestilocursiva2
     *
     * @param boolean $logletraestilocursiva2
     * @return Recibos
     */
    public function setLogletraestilocursiva2($logletraestilocursiva2)
    {
        $this->logletraestilocursiva2 = $logletraestilocursiva2;

        return $this;
    }

    /**
     * Get logletraestilocursiva2
     *
     * @return boolean 
     */
    public function getLogletraestilocursiva2()
    {
        return $this->logletraestilocursiva2;
    }

    /**
     * Set logletraestilosubrayada2
     *
     * @param boolean $logletraestilosubrayada2
     * @return Recibos
     */
    public function setLogletraestilosubrayada2($logletraestilosubrayada2)
    {
        $this->logletraestilosubrayada2 = $logletraestilosubrayada2;

        return $this;
    }

    /**
     * Get logletraestilosubrayada2
     *
     * @return boolean 
     */
    public function getLogletraestilosubrayada2()
    {
        return $this->logletraestilosubrayada2;
    }

    /**
     * Set logletraestilotachada2
     *
     * @param boolean $logletraestilotachada2
     * @return Recibos
     */
    public function setLogletraestilotachada2($logletraestilotachada2)
    {
        $this->logletraestilotachada2 = $logletraestilotachada2;

        return $this;
    }

    /**
     * Get logletraestilotachada2
     *
     * @return boolean 
     */
    public function getLogletraestilotachada2()
    {
        return $this->logletraestilotachada2;
    }

    /**
     * Set strletranombre3
     *
     * @param string $strletranombre3
     * @return Recibos
     */
    public function setStrletranombre3($strletranombre3)
    {
        $this->strletranombre3 = $strletranombre3;

        return $this;
    }

    /**
     * Get strletranombre3
     *
     * @return string 
     */
    public function getStrletranombre3()
    {
        return $this->strletranombre3;
    }

    /**
     * Set numletraancho3
     *
     * @param integer $numletraancho3
     * @return Recibos
     */
    public function setNumletraancho3($numletraancho3)
    {
        $this->numletraancho3 = $numletraancho3;

        return $this;
    }

    /**
     * Get numletraancho3
     *
     * @return integer 
     */
    public function getNumletraancho3()
    {
        return $this->numletraancho3;
    }

    /**
     * Set numletracolor3
     *
     * @param integer $numletracolor3
     * @return Recibos
     */
    public function setNumletracolor3($numletracolor3)
    {
        $this->numletracolor3 = $numletracolor3;

        return $this;
    }

    /**
     * Get numletracolor3
     *
     * @return integer 
     */
    public function getNumletracolor3()
    {
        return $this->numletracolor3;
    }

    /**
     * Set logletraestilogruesa3
     *
     * @param boolean $logletraestilogruesa3
     * @return Recibos
     */
    public function setLogletraestilogruesa3($logletraestilogruesa3)
    {
        $this->logletraestilogruesa3 = $logletraestilogruesa3;

        return $this;
    }

    /**
     * Get logletraestilogruesa3
     *
     * @return boolean 
     */
    public function getLogletraestilogruesa3()
    {
        return $this->logletraestilogruesa3;
    }

    /**
     * Set logletraestilocursiva3
     *
     * @param boolean $logletraestilocursiva3
     * @return Recibos
     */
    public function setLogletraestilocursiva3($logletraestilocursiva3)
    {
        $this->logletraestilocursiva3 = $logletraestilocursiva3;

        return $this;
    }

    /**
     * Get logletraestilocursiva3
     *
     * @return boolean 
     */
    public function getLogletraestilocursiva3()
    {
        return $this->logletraestilocursiva3;
    }

    /**
     * Set logletraestilosubrayada3
     *
     * @param boolean $logletraestilosubrayada3
     * @return Recibos
     */
    public function setLogletraestilosubrayada3($logletraestilosubrayada3)
    {
        $this->logletraestilosubrayada3 = $logletraestilosubrayada3;

        return $this;
    }

    /**
     * Get logletraestilosubrayada3
     *
     * @return boolean 
     */
    public function getLogletraestilosubrayada3()
    {
        return $this->logletraestilosubrayada3;
    }

    /**
     * Set logletraestilotachada3
     *
     * @param boolean $logletraestilotachada3
     * @return Recibos
     */
    public function setLogletraestilotachada3($logletraestilotachada3)
    {
        $this->logletraestilotachada3 = $logletraestilotachada3;

        return $this;
    }

    /**
     * Get logletraestilotachada3
     *
     * @return boolean 
     */
    public function getLogletraestilotachada3()
    {
        return $this->logletraestilotachada3;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Recibos
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
     * @return Recibos
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
     * @return Recibos
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
     * @return Recibos
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
     * @return Recibos
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
     * @return Recibos
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
