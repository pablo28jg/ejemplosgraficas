<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flujostrabajotareas
 *
 * @ORM\Table(name="FlujosTrabajoTareas")
 * @ORM\Entity
 */
class Flujostrabajotareas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarea_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numtareaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombre", type="string", length=60, nullable=true)
     */
    private $strnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAsunto", type="string", length=60, nullable=true)
     */
    private $strasunto;

    /**
     * @var string
     *
     * @ORM\Column(name="MemDescripcion", type="text", length=16, nullable=true)
     */
    private $memdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemComentarios", type="text", length=16, nullable=true)
     */
    private $memcomentarios;

    /**
     * @var string
     *
     * @ORM\Column(name="StrUsuario_ky", type="string", length=60, nullable=true)
     */
    private $strusuarioKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrUsuarioModifico_ky", type="string", length=60, nullable=true)
     */
    private $strusuariomodificoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="MemDiagrama", type="text", length=16, nullable=true)
     */
    private $memdiagrama;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFlujoTrabajo_id", type="integer", nullable=true)
     */
    private $numflujotrabajoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumInstancia_id", type="integer", nullable=true)
     */
    private $numinstanciaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTerminado", type="string", length=1, nullable=true)
     */
    private $strterminado;

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
     * Get numtareaId
     *
     * @return integer 
     */
    public function getNumtareaId()
    {
        return $this->numtareaId;
    }

    /**
     * Set strnombre
     *
     * @param string $strnombre
     * @return Flujostrabajotareas
     */
    public function setStrnombre($strnombre)
    {
        $this->strnombre = $strnombre;

        return $this;
    }

    /**
     * Get strnombre
     *
     * @return string 
     */
    public function getStrnombre()
    {
        return $this->strnombre;
    }

    /**
     * Set strasunto
     *
     * @param string $strasunto
     * @return Flujostrabajotareas
     */
    public function setStrasunto($strasunto)
    {
        $this->strasunto = $strasunto;

        return $this;
    }

    /**
     * Get strasunto
     *
     * @return string 
     */
    public function getStrasunto()
    {
        return $this->strasunto;
    }

    /**
     * Set memdescripcion
     *
     * @param string $memdescripcion
     * @return Flujostrabajotareas
     */
    public function setMemdescripcion($memdescripcion)
    {
        $this->memdescripcion = $memdescripcion;

        return $this;
    }

    /**
     * Get memdescripcion
     *
     * @return string 
     */
    public function getMemdescripcion()
    {
        return $this->memdescripcion;
    }

    /**
     * Set memcomentarios
     *
     * @param string $memcomentarios
     * @return Flujostrabajotareas
     */
    public function setMemcomentarios($memcomentarios)
    {
        $this->memcomentarios = $memcomentarios;

        return $this;
    }

    /**
     * Get memcomentarios
     *
     * @return string 
     */
    public function getMemcomentarios()
    {
        return $this->memcomentarios;
    }

    /**
     * Set strusuarioKy
     *
     * @param string $strusuarioKy
     * @return Flujostrabajotareas
     */
    public function setStrusuarioKy($strusuarioKy)
    {
        $this->strusuarioKy = $strusuarioKy;

        return $this;
    }

    /**
     * Get strusuarioKy
     *
     * @return string 
     */
    public function getStrusuarioKy()
    {
        return $this->strusuarioKy;
    }

    /**
     * Set strusuariomodificoKy
     *
     * @param string $strusuariomodificoKy
     * @return Flujostrabajotareas
     */
    public function setStrusuariomodificoKy($strusuariomodificoKy)
    {
        $this->strusuariomodificoKy = $strusuariomodificoKy;

        return $this;
    }

    /**
     * Get strusuariomodificoKy
     *
     * @return string 
     */
    public function getStrusuariomodificoKy()
    {
        return $this->strusuariomodificoKy;
    }

    /**
     * Set memdiagrama
     *
     * @param string $memdiagrama
     * @return Flujostrabajotareas
     */
    public function setMemdiagrama($memdiagrama)
    {
        $this->memdiagrama = $memdiagrama;

        return $this;
    }

    /**
     * Get memdiagrama
     *
     * @return string 
     */
    public function getMemdiagrama()
    {
        return $this->memdiagrama;
    }

    /**
     * Set numflujotrabajoId
     *
     * @param integer $numflujotrabajoId
     * @return Flujostrabajotareas
     */
    public function setNumflujotrabajoId($numflujotrabajoId)
    {
        $this->numflujotrabajoId = $numflujotrabajoId;

        return $this;
    }

    /**
     * Get numflujotrabajoId
     *
     * @return integer 
     */
    public function getNumflujotrabajoId()
    {
        return $this->numflujotrabajoId;
    }

    /**
     * Set numinstanciaId
     *
     * @param integer $numinstanciaId
     * @return Flujostrabajotareas
     */
    public function setNuminstanciaId($numinstanciaId)
    {
        $this->numinstanciaId = $numinstanciaId;

        return $this;
    }

    /**
     * Get numinstanciaId
     *
     * @return integer 
     */
    public function getNuminstanciaId()
    {
        return $this->numinstanciaId;
    }

    /**
     * Set strterminado
     *
     * @param string $strterminado
     * @return Flujostrabajotareas
     */
    public function setStrterminado($strterminado)
    {
        $this->strterminado = $strterminado;

        return $this;
    }

    /**
     * Get strterminado
     *
     * @return string 
     */
    public function getStrterminado()
    {
        return $this->strterminado;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Flujostrabajotareas
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
     * @return Flujostrabajotareas
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
     * @return Flujostrabajotareas
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
     * @return Flujostrabajotareas
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
}
