<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tallas
 *
 * @ORM\Table(name="Tallas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrTalla_ky", "NumJerarquia_id"})}, indexes={@ORM\Index(name="Indice_10", columns={"NumNivel_5_id"}), @ORM\Index(name="Indice_11", columns={"NumNivel_6_id"}), @ORM\Index(name="Indice_12", columns={"NumNivel_7_id"}), @ORM\Index(name="Indice_13", columns={"NumNivel_8_id"}), @ORM\Index(name="Indice_14", columns={"NumNivel_9_id"}), @ORM\Index(name="Indice_15", columns={"NumNivel_10_id"}), @ORM\Index(name="Indice_16", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumJerarquia_id", "StrTalla_ky"}), @ORM\Index(name="Indice_5", columns={"NumOrden_id", "NumNivel_id"}), @ORM\Index(name="Indice_6", columns={"NumNivel_1_id"}), @ORM\Index(name="Indice_7", columns={"NumNivel_2_id"}), @ORM\Index(name="Indice_8", columns={"NumNivel_3_id"}), @ORM\Index(name="Indice_9", columns={"NumNivel_4_id"})})
 * @ORM\Entity
 */
class Tallas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTalla_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numtallaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumJerarquia_id", type="integer", nullable=true)
     */
    private $numjerarquiaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden_id", type="integer", nullable=true)
     */
    private $numordenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_id", type="integer", nullable=true)
     */
    private $numnivelId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogUltimoNivel", type="boolean", nullable=true)
     */
    private $logultimonivel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTalla_ky", type="string", length=10, nullable=true)
     */
    private $strtallaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPosicion", type="integer", nullable=true)
     */
    private $numposicion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProporcion", type="integer", nullable=true)
     */
    private $numproporcion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_1_id", type="integer", nullable=true)
     */
    private $numclasificacion1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_2_id", type="integer", nullable=true)
     */
    private $numclasificacion2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_3_id", type="integer", nullable=true)
     */
    private $numclasificacion3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_4_id", type="integer", nullable=true)
     */
    private $numclasificacion4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_1_id", type="integer", nullable=true)
     */
    private $numnivel1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_2_id", type="integer", nullable=true)
     */
    private $numnivel2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_3_id", type="integer", nullable=true)
     */
    private $numnivel3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_4_id", type="integer", nullable=true)
     */
    private $numnivel4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_5_id", type="integer", nullable=true)
     */
    private $numnivel5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_6_id", type="integer", nullable=true)
     */
    private $numnivel6Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_7_id", type="integer", nullable=true)
     */
    private $numnivel7Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_8_id", type="integer", nullable=true)
     */
    private $numnivel8Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_9_id", type="integer", nullable=true)
     */
    private $numnivel9Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_10_id", type="integer", nullable=true)
     */
    private $numnivel10Id = '0';

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
     * Get numtallaId
     *
     * @return integer 
     */
    public function getNumtallaId()
    {
        return $this->numtallaId;
    }

    /**
     * Set numjerarquiaId
     *
     * @param integer $numjerarquiaId
     * @return Tallas
     */
    public function setNumjerarquiaId($numjerarquiaId)
    {
        $this->numjerarquiaId = $numjerarquiaId;

        return $this;
    }

    /**
     * Get numjerarquiaId
     *
     * @return integer 
     */
    public function getNumjerarquiaId()
    {
        return $this->numjerarquiaId;
    }

    /**
     * Set numordenId
     *
     * @param integer $numordenId
     * @return Tallas
     */
    public function setNumordenId($numordenId)
    {
        $this->numordenId = $numordenId;

        return $this;
    }

    /**
     * Get numordenId
     *
     * @return integer 
     */
    public function getNumordenId()
    {
        return $this->numordenId;
    }

    /**
     * Set numnivelId
     *
     * @param integer $numnivelId
     * @return Tallas
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
     * Set logultimonivel
     *
     * @param boolean $logultimonivel
     * @return Tallas
     */
    public function setLogultimonivel($logultimonivel)
    {
        $this->logultimonivel = $logultimonivel;

        return $this;
    }

    /**
     * Get logultimonivel
     *
     * @return boolean 
     */
    public function getLogultimonivel()
    {
        return $this->logultimonivel;
    }

    /**
     * Set strtallaKy
     *
     * @param string $strtallaKy
     * @return Tallas
     */
    public function setStrtallaKy($strtallaKy)
    {
        $this->strtallaKy = $strtallaKy;

        return $this;
    }

    /**
     * Get strtallaKy
     *
     * @return string 
     */
    public function getStrtallaKy()
    {
        return $this->strtallaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Tallas
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
     * Set numposicion
     *
     * @param integer $numposicion
     * @return Tallas
     */
    public function setNumposicion($numposicion)
    {
        $this->numposicion = $numposicion;

        return $this;
    }

    /**
     * Get numposicion
     *
     * @return integer 
     */
    public function getNumposicion()
    {
        return $this->numposicion;
    }

    /**
     * Set numproporcion
     *
     * @param integer $numproporcion
     * @return Tallas
     */
    public function setNumproporcion($numproporcion)
    {
        $this->numproporcion = $numproporcion;

        return $this;
    }

    /**
     * Get numproporcion
     *
     * @return integer 
     */
    public function getNumproporcion()
    {
        return $this->numproporcion;
    }

    /**
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Tallas
     */
    public function setNumclasificacion1Id($numclasificacion1Id)
    {
        $this->numclasificacion1Id = $numclasificacion1Id;

        return $this;
    }

    /**
     * Get numclasificacion1Id
     *
     * @return integer 
     */
    public function getNumclasificacion1Id()
    {
        return $this->numclasificacion1Id;
    }

    /**
     * Set numclasificacion2Id
     *
     * @param integer $numclasificacion2Id
     * @return Tallas
     */
    public function setNumclasificacion2Id($numclasificacion2Id)
    {
        $this->numclasificacion2Id = $numclasificacion2Id;

        return $this;
    }

    /**
     * Get numclasificacion2Id
     *
     * @return integer 
     */
    public function getNumclasificacion2Id()
    {
        return $this->numclasificacion2Id;
    }

    /**
     * Set numclasificacion3Id
     *
     * @param integer $numclasificacion3Id
     * @return Tallas
     */
    public function setNumclasificacion3Id($numclasificacion3Id)
    {
        $this->numclasificacion3Id = $numclasificacion3Id;

        return $this;
    }

    /**
     * Get numclasificacion3Id
     *
     * @return integer 
     */
    public function getNumclasificacion3Id()
    {
        return $this->numclasificacion3Id;
    }

    /**
     * Set numclasificacion4Id
     *
     * @param integer $numclasificacion4Id
     * @return Tallas
     */
    public function setNumclasificacion4Id($numclasificacion4Id)
    {
        $this->numclasificacion4Id = $numclasificacion4Id;

        return $this;
    }

    /**
     * Get numclasificacion4Id
     *
     * @return integer 
     */
    public function getNumclasificacion4Id()
    {
        return $this->numclasificacion4Id;
    }

    /**
     * Set numnivel1Id
     *
     * @param integer $numnivel1Id
     * @return Tallas
     */
    public function setNumnivel1Id($numnivel1Id)
    {
        $this->numnivel1Id = $numnivel1Id;

        return $this;
    }

    /**
     * Get numnivel1Id
     *
     * @return integer 
     */
    public function getNumnivel1Id()
    {
        return $this->numnivel1Id;
    }

    /**
     * Set numnivel2Id
     *
     * @param integer $numnivel2Id
     * @return Tallas
     */
    public function setNumnivel2Id($numnivel2Id)
    {
        $this->numnivel2Id = $numnivel2Id;

        return $this;
    }

    /**
     * Get numnivel2Id
     *
     * @return integer 
     */
    public function getNumnivel2Id()
    {
        return $this->numnivel2Id;
    }

    /**
     * Set numnivel3Id
     *
     * @param integer $numnivel3Id
     * @return Tallas
     */
    public function setNumnivel3Id($numnivel3Id)
    {
        $this->numnivel3Id = $numnivel3Id;

        return $this;
    }

    /**
     * Get numnivel3Id
     *
     * @return integer 
     */
    public function getNumnivel3Id()
    {
        return $this->numnivel3Id;
    }

    /**
     * Set numnivel4Id
     *
     * @param integer $numnivel4Id
     * @return Tallas
     */
    public function setNumnivel4Id($numnivel4Id)
    {
        $this->numnivel4Id = $numnivel4Id;

        return $this;
    }

    /**
     * Get numnivel4Id
     *
     * @return integer 
     */
    public function getNumnivel4Id()
    {
        return $this->numnivel4Id;
    }

    /**
     * Set numnivel5Id
     *
     * @param integer $numnivel5Id
     * @return Tallas
     */
    public function setNumnivel5Id($numnivel5Id)
    {
        $this->numnivel5Id = $numnivel5Id;

        return $this;
    }

    /**
     * Get numnivel5Id
     *
     * @return integer 
     */
    public function getNumnivel5Id()
    {
        return $this->numnivel5Id;
    }

    /**
     * Set numnivel6Id
     *
     * @param integer $numnivel6Id
     * @return Tallas
     */
    public function setNumnivel6Id($numnivel6Id)
    {
        $this->numnivel6Id = $numnivel6Id;

        return $this;
    }

    /**
     * Get numnivel6Id
     *
     * @return integer 
     */
    public function getNumnivel6Id()
    {
        return $this->numnivel6Id;
    }

    /**
     * Set numnivel7Id
     *
     * @param integer $numnivel7Id
     * @return Tallas
     */
    public function setNumnivel7Id($numnivel7Id)
    {
        $this->numnivel7Id = $numnivel7Id;

        return $this;
    }

    /**
     * Get numnivel7Id
     *
     * @return integer 
     */
    public function getNumnivel7Id()
    {
        return $this->numnivel7Id;
    }

    /**
     * Set numnivel8Id
     *
     * @param integer $numnivel8Id
     * @return Tallas
     */
    public function setNumnivel8Id($numnivel8Id)
    {
        $this->numnivel8Id = $numnivel8Id;

        return $this;
    }

    /**
     * Get numnivel8Id
     *
     * @return integer 
     */
    public function getNumnivel8Id()
    {
        return $this->numnivel8Id;
    }

    /**
     * Set numnivel9Id
     *
     * @param integer $numnivel9Id
     * @return Tallas
     */
    public function setNumnivel9Id($numnivel9Id)
    {
        $this->numnivel9Id = $numnivel9Id;

        return $this;
    }

    /**
     * Get numnivel9Id
     *
     * @return integer 
     */
    public function getNumnivel9Id()
    {
        return $this->numnivel9Id;
    }

    /**
     * Set numnivel10Id
     *
     * @param integer $numnivel10Id
     * @return Tallas
     */
    public function setNumnivel10Id($numnivel10Id)
    {
        $this->numnivel10Id = $numnivel10Id;

        return $this;
    }

    /**
     * Get numnivel10Id
     *
     * @return integer 
     */
    public function getNumnivel10Id()
    {
        return $this->numnivel10Id;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Tallas
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
     * @return Tallas
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
     * @return Tallas
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
     * @return Tallas
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
     * @return Tallas
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
