<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistencias
 *
 * @ORM\Table(name="Asistencias", indexes={@ORM\Index(name="Indice_1", columns={"DteAsistencia", "NumEmpleado_id"}), @ORM\Index(name="Indice_2", columns={"NumEmpleado_id", "DteAsistencia"})})
 * @ORM\Entity
 */
class Asistencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpleado_id", type="integer", nullable=true)
     */
    private $numempleadoId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteAsistencia", type="datetime", nullable=true)
     */
    private $dteasistencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrIdentificadorEquipo_ky", type="string", length=60, nullable=true)
     */
    private $stridentificadorequipoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSesion_id", type="integer", nullable=true)
     */
    private $numsesionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAsistencia", type="integer", nullable=true)
     */
    private $numtipoasistencia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPermiso_id", type="integer", nullable=true)
     */
    private $numpermisoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAutorizadoPor_id", type="integer", nullable=true)
     */
    private $numautorizadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteAutorizacion", type="datetime", nullable=true)
     */
    private $dteautorizacion;



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
     * Set numempleadoId
     *
     * @param integer $numempleadoId
     * @return Asistencias
     */
    public function setNumempleadoId($numempleadoId)
    {
        $this->numempleadoId = $numempleadoId;

        return $this;
    }

    /**
     * Get numempleadoId
     *
     * @return integer 
     */
    public function getNumempleadoId()
    {
        return $this->numempleadoId;
    }

    /**
     * Set dteasistencia
     *
     * @param \DateTime $dteasistencia
     * @return Asistencias
     */
    public function setDteasistencia($dteasistencia)
    {
        $this->dteasistencia = $dteasistencia;

        return $this;
    }

    /**
     * Get dteasistencia
     *
     * @return \DateTime 
     */
    public function getDteasistencia()
    {
        return $this->dteasistencia;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Asistencias
     */
    public function setNumalmacenId($numalmacenId)
    {
        $this->numalmacenId = $numalmacenId;

        return $this;
    }

    /**
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Asistencias
     */
    public function setNumempresaId($numempresaId)
    {
        $this->numempresaId = $numempresaId;

        return $this;
    }

    /**
     * Get numempresaId
     *
     * @return integer 
     */
    public function getNumempresaId()
    {
        return $this->numempresaId;
    }

    /**
     * Set stridentificadorequipoKy
     *
     * @param string $stridentificadorequipoKy
     * @return Asistencias
     */
    public function setStridentificadorequipoKy($stridentificadorequipoKy)
    {
        $this->stridentificadorequipoKy = $stridentificadorequipoKy;

        return $this;
    }

    /**
     * Get stridentificadorequipoKy
     *
     * @return string 
     */
    public function getStridentificadorequipoKy()
    {
        return $this->stridentificadorequipoKy;
    }

    /**
     * Set numsesionId
     *
     * @param integer $numsesionId
     * @return Asistencias
     */
    public function setNumsesionId($numsesionId)
    {
        $this->numsesionId = $numsesionId;

        return $this;
    }

    /**
     * Get numsesionId
     *
     * @return integer 
     */
    public function getNumsesionId()
    {
        return $this->numsesionId;
    }

    /**
     * Set numtipoasistencia
     *
     * @param integer $numtipoasistencia
     * @return Asistencias
     */
    public function setNumtipoasistencia($numtipoasistencia)
    {
        $this->numtipoasistencia = $numtipoasistencia;

        return $this;
    }

    /**
     * Get numtipoasistencia
     *
     * @return integer 
     */
    public function getNumtipoasistencia()
    {
        return $this->numtipoasistencia;
    }

    /**
     * Set numpermisoId
     *
     * @param integer $numpermisoId
     * @return Asistencias
     */
    public function setNumpermisoId($numpermisoId)
    {
        $this->numpermisoId = $numpermisoId;

        return $this;
    }

    /**
     * Get numpermisoId
     *
     * @return integer 
     */
    public function getNumpermisoId()
    {
        return $this->numpermisoId;
    }

    /**
     * Set numautorizadoporId
     *
     * @param integer $numautorizadoporId
     * @return Asistencias
     */
    public function setNumautorizadoporId($numautorizadoporId)
    {
        $this->numautorizadoporId = $numautorizadoporId;

        return $this;
    }

    /**
     * Get numautorizadoporId
     *
     * @return integer 
     */
    public function getNumautorizadoporId()
    {
        return $this->numautorizadoporId;
    }

    /**
     * Set dteautorizacion
     *
     * @param \DateTime $dteautorizacion
     * @return Asistencias
     */
    public function setDteautorizacion($dteautorizacion)
    {
        $this->dteautorizacion = $dteautorizacion;

        return $this;
    }

    /**
     * Get dteautorizacion
     *
     * @return \DateTime 
     */
    public function getDteautorizacion()
    {
        return $this->dteautorizacion;
    }
}
