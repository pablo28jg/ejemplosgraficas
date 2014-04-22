<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permisosasistencias
 *
 * @ORM\Table(name="PermisosAsistencias", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrPermiso_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Permisosasistencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPermiso_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numpermisoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrPermiso_ky", type="string", length=10, nullable=true)
     */
    private $strpermisoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPermisoLaboral", type="integer", nullable=true)
     */
    private $numtipopermisolaboral = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoGoceSueldo", type="integer", nullable=true)
     */
    private $numtipogocesueldo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoJustificanteLaboral", type="integer", nullable=true)
     */
    private $numtipojustificantelaboral = '0';

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
     * Get numpermisoId
     *
     * @return integer 
     */
    public function getNumpermisoId()
    {
        return $this->numpermisoId;
    }

    /**
     * Set strpermisoKy
     *
     * @param string $strpermisoKy
     * @return Permisosasistencias
     */
    public function setStrpermisoKy($strpermisoKy)
    {
        $this->strpermisoKy = $strpermisoKy;

        return $this;
    }

    /**
     * Get strpermisoKy
     *
     * @return string 
     */
    public function getStrpermisoKy()
    {
        return $this->strpermisoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Permisosasistencias
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
     * Set numtipopermisolaboral
     *
     * @param integer $numtipopermisolaboral
     * @return Permisosasistencias
     */
    public function setNumtipopermisolaboral($numtipopermisolaboral)
    {
        $this->numtipopermisolaboral = $numtipopermisolaboral;

        return $this;
    }

    /**
     * Get numtipopermisolaboral
     *
     * @return integer 
     */
    public function getNumtipopermisolaboral()
    {
        return $this->numtipopermisolaboral;
    }

    /**
     * Set numtipogocesueldo
     *
     * @param integer $numtipogocesueldo
     * @return Permisosasistencias
     */
    public function setNumtipogocesueldo($numtipogocesueldo)
    {
        $this->numtipogocesueldo = $numtipogocesueldo;

        return $this;
    }

    /**
     * Get numtipogocesueldo
     *
     * @return integer 
     */
    public function getNumtipogocesueldo()
    {
        return $this->numtipogocesueldo;
    }

    /**
     * Set numtipojustificantelaboral
     *
     * @param integer $numtipojustificantelaboral
     * @return Permisosasistencias
     */
    public function setNumtipojustificantelaboral($numtipojustificantelaboral)
    {
        $this->numtipojustificantelaboral = $numtipojustificantelaboral;

        return $this;
    }

    /**
     * Get numtipojustificantelaboral
     *
     * @return integer 
     */
    public function getNumtipojustificantelaboral()
    {
        return $this->numtipojustificantelaboral;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Permisosasistencias
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
     * @return Permisosasistencias
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
     * @return Permisosasistencias
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
     * @return Permisosasistencias
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
     * @return Permisosasistencias
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
