<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadescontactos
 *
 * @ORM\Table(name="EntidadesContactos", indexes={@ORM\Index(name="Indice_14", columns={"NumClasificacion_1_id"}), @ORM\Index(name="Indice_15", columns={"NumClasificacion_2_id"}), @ORM\Index(name="Indice_16", columns={"NumClasificacion_3_id"}), @ORM\Index(name="Indice_17", columns={"NumClasificacion_4_id"}), @ORM\Index(name="Indice_18", columns={"NumTipoEstado"}), @ORM\Index(name="Indice_19", columns={"DteActualizacion"}), @ORM\Index(name="Indice_22", columns={"NumTipo"}), @ORM\Index(name="Indice_3", columns={"NumCategoria_id"}), @ORM\Index(name="Indice_31", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_6", columns={"NumAniversario_id"}), @ORM\Index(name="Indice_7", columns={"DteAniversario"})})
 * @ORM\Entity
 */
class Entidadescontactos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=true)
     */
    private $numcategoriaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAniversario_id", type="integer", nullable=true)
     */
    private $numaniversarioId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteAniversario", type="datetime", nullable=true)
     */
    private $dteaniversario;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumRegion_id", type="integer", nullable=true)
     */
    private $numregionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPublicidad_id", type="integer", nullable=true)
     */
    private $numpublicidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelPrecio", type="integer", nullable=true)
     */
    private $numnivelprecio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoPromocion_id", type="integer", nullable=true)
     */
    private $numcodigopromocionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoAcceso", type="string", length=60, nullable=true)
     */
    private $strcodigoacceso;

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
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

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
     * Get numentidadId
     *
     * @return integer 
     */
    public function getNumentidadId()
    {
        return $this->numentidadId;
    }

    /**
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Entidadescontactos
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
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Entidadescontactos
     */
    public function setNumcategoriaId($numcategoriaId)
    {
        $this->numcategoriaId = $numcategoriaId;

        return $this;
    }

    /**
     * Get numcategoriaId
     *
     * @return integer 
     */
    public function getNumcategoriaId()
    {
        return $this->numcategoriaId;
    }

    /**
     * Set numaniversarioId
     *
     * @param integer $numaniversarioId
     * @return Entidadescontactos
     */
    public function setNumaniversarioId($numaniversarioId)
    {
        $this->numaniversarioId = $numaniversarioId;

        return $this;
    }

    /**
     * Get numaniversarioId
     *
     * @return integer 
     */
    public function getNumaniversarioId()
    {
        return $this->numaniversarioId;
    }

    /**
     * Set dteaniversario
     *
     * @param \DateTime $dteaniversario
     * @return Entidadescontactos
     */
    public function setDteaniversario($dteaniversario)
    {
        $this->dteaniversario = $dteaniversario;

        return $this;
    }

    /**
     * Get dteaniversario
     *
     * @return \DateTime 
     */
    public function getDteaniversario()
    {
        return $this->dteaniversario;
    }

    /**
     * Set numregionId
     *
     * @param integer $numregionId
     * @return Entidadescontactos
     */
    public function setNumregionId($numregionId)
    {
        $this->numregionId = $numregionId;

        return $this;
    }

    /**
     * Get numregionId
     *
     * @return integer 
     */
    public function getNumregionId()
    {
        return $this->numregionId;
    }

    /**
     * Set numpublicidadId
     *
     * @param integer $numpublicidadId
     * @return Entidadescontactos
     */
    public function setNumpublicidadId($numpublicidadId)
    {
        $this->numpublicidadId = $numpublicidadId;

        return $this;
    }

    /**
     * Get numpublicidadId
     *
     * @return integer 
     */
    public function getNumpublicidadId()
    {
        return $this->numpublicidadId;
    }

    /**
     * Set numnivelprecio
     *
     * @param integer $numnivelprecio
     * @return Entidadescontactos
     */
    public function setNumnivelprecio($numnivelprecio)
    {
        $this->numnivelprecio = $numnivelprecio;

        return $this;
    }

    /**
     * Get numnivelprecio
     *
     * @return integer 
     */
    public function getNumnivelprecio()
    {
        return $this->numnivelprecio;
    }

    /**
     * Set numcodigopromocionId
     *
     * @param integer $numcodigopromocionId
     * @return Entidadescontactos
     */
    public function setNumcodigopromocionId($numcodigopromocionId)
    {
        $this->numcodigopromocionId = $numcodigopromocionId;

        return $this;
    }

    /**
     * Get numcodigopromocionId
     *
     * @return integer 
     */
    public function getNumcodigopromocionId()
    {
        return $this->numcodigopromocionId;
    }

    /**
     * Set strcodigoacceso
     *
     * @param string $strcodigoacceso
     * @return Entidadescontactos
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
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Entidadescontactos
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
     * @return Entidadescontactos
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
     * @return Entidadescontactos
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
     * @return Entidadescontactos
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
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Entidadescontactos
     */
    public function setMemobservaciones($memobservaciones)
    {
        $this->memobservaciones = $memobservaciones;

        return $this;
    }

    /**
     * Get memobservaciones
     *
     * @return string 
     */
    public function getMemobservaciones()
    {
        return $this->memobservaciones;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Entidadescontactos
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
     * @return Entidadescontactos
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
     * @return Entidadescontactos
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
     * @return Entidadescontactos
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
     * @return Entidadescontactos
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
     * @return Entidadescontactos
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
