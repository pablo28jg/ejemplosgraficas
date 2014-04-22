<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadesempleados
 *
 * @ORM\Table(name="EntidadesEmpleados", indexes={@ORM\Index(name="Indice_14", columns={"NumTipoEstado"}), @ORM\Index(name="Indice_16", columns={"DteActualizacion"}), @ORM\Index(name="Indice_19", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_3", columns={"NumDepartamento_id"}), @ORM\Index(name="Indice_4", columns={"NumPuesto_id"}), @ORM\Index(name="Indice_5", columns={"NumTarifaServicio_id"}), @ORM\Index(name="Indice_6", columns={"NumCategoria_id"})})
 * @ORM\Entity
 */
class Entidadesempleados
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
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=true)
     */
    private $numcategoriaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDepartamento_id", type="integer", nullable=true)
     */
    private $numdepartamentoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPuesto_id", type="integer", nullable=true)
     */
    private $numpuestoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrIMSS", type="string", length=20, nullable=true)
     */
    private $strimss;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFoto_id", type="integer", nullable=true)
     */
    private $numfotoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTarifaServicio_id", type="integer", nullable=true)
     */
    private $numtarifaservicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelServicio", type="integer", nullable=true)
     */
    private $numnivelservicio = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteIngreso", type="datetime", nullable=true)
     */
    private $dteingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSueldoBruto", type="integer", nullable=true)
     */
    private $numsueldobruto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandar", type="integer", nullable=true)
     */
    private $numcostoestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoPromedio", type="integer", nullable=true)
     */
    private $numcostopromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoReal", type="integer", nullable=true)
     */
    private $numcostoreal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContrasena", type="integer", nullable=true)
     */
    private $numcontrasena = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumTipoSexo", type="integer", nullable=true)
     */
    private $numtiposexo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoCivil", type="integer", nullable=true)
     */
    private $numtipoestadocivil = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNacionalidad_id", type="integer", nullable=true)
     */
    private $numnacionalidadId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAFORE", type="string", length=20, nullable=true)
     */
    private $strafore;

    /**
     * @var string
     *
     * @ORM\Column(name="StrINFONAVIT", type="string", length=20, nullable=true)
     */
    private $strinfonavit;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPASAPORTE", type="string", length=20, nullable=true)
     */
    private $strpasaporte;

    /**
     * @var string
     *
     * @ORM\Column(name="StrIFE", type="string", length=20, nullable=true)
     */
    private $strife;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumHorario_id", type="integer", nullable=true)
     */
    private $numhorarioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumJefeInmediato_id", type="integer", nullable=true)
     */
    private $numjefeinmediatoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoNomina", type="integer", nullable=true)
     */
    private $numtiponomina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoContratoLaboral", type="integer", nullable=true)
     */
    private $numtipocontratolaboral = '0';



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
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Entidadesempleados
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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Entidadesempleados
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
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Entidadesempleados
     */
    public function setNumcentrocontrolId($numcentrocontrolId)
    {
        $this->numcentrocontrolId = $numcentrocontrolId;

        return $this;
    }

    /**
     * Get numcentrocontrolId
     *
     * @return integer 
     */
    public function getNumcentrocontrolId()
    {
        return $this->numcentrocontrolId;
    }

    /**
     * Set numdepartamentoId
     *
     * @param integer $numdepartamentoId
     * @return Entidadesempleados
     */
    public function setNumdepartamentoId($numdepartamentoId)
    {
        $this->numdepartamentoId = $numdepartamentoId;

        return $this;
    }

    /**
     * Get numdepartamentoId
     *
     * @return integer 
     */
    public function getNumdepartamentoId()
    {
        return $this->numdepartamentoId;
    }

    /**
     * Set numpuestoId
     *
     * @param integer $numpuestoId
     * @return Entidadesempleados
     */
    public function setNumpuestoId($numpuestoId)
    {
        $this->numpuestoId = $numpuestoId;

        return $this;
    }

    /**
     * Get numpuestoId
     *
     * @return integer 
     */
    public function getNumpuestoId()
    {
        return $this->numpuestoId;
    }

    /**
     * Set strimss
     *
     * @param string $strimss
     * @return Entidadesempleados
     */
    public function setStrimss($strimss)
    {
        $this->strimss = $strimss;

        return $this;
    }

    /**
     * Get strimss
     *
     * @return string 
     */
    public function getStrimss()
    {
        return $this->strimss;
    }

    /**
     * Set numfotoId
     *
     * @param integer $numfotoId
     * @return Entidadesempleados
     */
    public function setNumfotoId($numfotoId)
    {
        $this->numfotoId = $numfotoId;

        return $this;
    }

    /**
     * Get numfotoId
     *
     * @return integer 
     */
    public function getNumfotoId()
    {
        return $this->numfotoId;
    }

    /**
     * Set numtarifaservicioId
     *
     * @param integer $numtarifaservicioId
     * @return Entidadesempleados
     */
    public function setNumtarifaservicioId($numtarifaservicioId)
    {
        $this->numtarifaservicioId = $numtarifaservicioId;

        return $this;
    }

    /**
     * Get numtarifaservicioId
     *
     * @return integer 
     */
    public function getNumtarifaservicioId()
    {
        return $this->numtarifaservicioId;
    }

    /**
     * Set numnivelservicio
     *
     * @param integer $numnivelservicio
     * @return Entidadesempleados
     */
    public function setNumnivelservicio($numnivelservicio)
    {
        $this->numnivelservicio = $numnivelservicio;

        return $this;
    }

    /**
     * Get numnivelservicio
     *
     * @return integer 
     */
    public function getNumnivelservicio()
    {
        return $this->numnivelservicio;
    }

    /**
     * Set dteingreso
     *
     * @param \DateTime $dteingreso
     * @return Entidadesempleados
     */
    public function setDteingreso($dteingreso)
    {
        $this->dteingreso = $dteingreso;

        return $this;
    }

    /**
     * Get dteingreso
     *
     * @return \DateTime 
     */
    public function getDteingreso()
    {
        return $this->dteingreso;
    }

    /**
     * Set numsueldobruto
     *
     * @param integer $numsueldobruto
     * @return Entidadesempleados
     */
    public function setNumsueldobruto($numsueldobruto)
    {
        $this->numsueldobruto = $numsueldobruto;

        return $this;
    }

    /**
     * Get numsueldobruto
     *
     * @return integer 
     */
    public function getNumsueldobruto()
    {
        return $this->numsueldobruto;
    }

    /**
     * Set numcostoestandar
     *
     * @param integer $numcostoestandar
     * @return Entidadesempleados
     */
    public function setNumcostoestandar($numcostoestandar)
    {
        $this->numcostoestandar = $numcostoestandar;

        return $this;
    }

    /**
     * Get numcostoestandar
     *
     * @return integer 
     */
    public function getNumcostoestandar()
    {
        return $this->numcostoestandar;
    }

    /**
     * Set numcostopromedio
     *
     * @param integer $numcostopromedio
     * @return Entidadesempleados
     */
    public function setNumcostopromedio($numcostopromedio)
    {
        $this->numcostopromedio = $numcostopromedio;

        return $this;
    }

    /**
     * Get numcostopromedio
     *
     * @return integer 
     */
    public function getNumcostopromedio()
    {
        return $this->numcostopromedio;
    }

    /**
     * Set numcostoreal
     *
     * @param integer $numcostoreal
     * @return Entidadesempleados
     */
    public function setNumcostoreal($numcostoreal)
    {
        $this->numcostoreal = $numcostoreal;

        return $this;
    }

    /**
     * Get numcostoreal
     *
     * @return integer 
     */
    public function getNumcostoreal()
    {
        return $this->numcostoreal;
    }

    /**
     * Set numcontrasena
     *
     * @param integer $numcontrasena
     * @return Entidadesempleados
     */
    public function setNumcontrasena($numcontrasena)
    {
        $this->numcontrasena = $numcontrasena;

        return $this;
    }

    /**
     * Get numcontrasena
     *
     * @return integer 
     */
    public function getNumcontrasena()
    {
        return $this->numcontrasena;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Entidadesempleados
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
     * @return Entidadesempleados
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
     * @return Entidadesempleados
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
     * @return Entidadesempleados
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
     * @return Entidadesempleados
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
     * @return Entidadesempleados
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
     * @return Entidadesempleados
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
     * Set numtiposexo
     *
     * @param integer $numtiposexo
     * @return Entidadesempleados
     */
    public function setNumtiposexo($numtiposexo)
    {
        $this->numtiposexo = $numtiposexo;

        return $this;
    }

    /**
     * Get numtiposexo
     *
     * @return integer 
     */
    public function getNumtiposexo()
    {
        return $this->numtiposexo;
    }

    /**
     * Set numtipoestadocivil
     *
     * @param integer $numtipoestadocivil
     * @return Entidadesempleados
     */
    public function setNumtipoestadocivil($numtipoestadocivil)
    {
        $this->numtipoestadocivil = $numtipoestadocivil;

        return $this;
    }

    /**
     * Get numtipoestadocivil
     *
     * @return integer 
     */
    public function getNumtipoestadocivil()
    {
        return $this->numtipoestadocivil;
    }

    /**
     * Set numnacionalidadId
     *
     * @param integer $numnacionalidadId
     * @return Entidadesempleados
     */
    public function setNumnacionalidadId($numnacionalidadId)
    {
        $this->numnacionalidadId = $numnacionalidadId;

        return $this;
    }

    /**
     * Get numnacionalidadId
     *
     * @return integer 
     */
    public function getNumnacionalidadId()
    {
        return $this->numnacionalidadId;
    }

    /**
     * Set strafore
     *
     * @param string $strafore
     * @return Entidadesempleados
     */
    public function setStrafore($strafore)
    {
        $this->strafore = $strafore;

        return $this;
    }

    /**
     * Get strafore
     *
     * @return string 
     */
    public function getStrafore()
    {
        return $this->strafore;
    }

    /**
     * Set strinfonavit
     *
     * @param string $strinfonavit
     * @return Entidadesempleados
     */
    public function setStrinfonavit($strinfonavit)
    {
        $this->strinfonavit = $strinfonavit;

        return $this;
    }

    /**
     * Get strinfonavit
     *
     * @return string 
     */
    public function getStrinfonavit()
    {
        return $this->strinfonavit;
    }

    /**
     * Set strpasaporte
     *
     * @param string $strpasaporte
     * @return Entidadesempleados
     */
    public function setStrpasaporte($strpasaporte)
    {
        $this->strpasaporte = $strpasaporte;

        return $this;
    }

    /**
     * Get strpasaporte
     *
     * @return string 
     */
    public function getStrpasaporte()
    {
        return $this->strpasaporte;
    }

    /**
     * Set strife
     *
     * @param string $strife
     * @return Entidadesempleados
     */
    public function setStrife($strife)
    {
        $this->strife = $strife;

        return $this;
    }

    /**
     * Get strife
     *
     * @return string 
     */
    public function getStrife()
    {
        return $this->strife;
    }

    /**
     * Set numhorarioId
     *
     * @param integer $numhorarioId
     * @return Entidadesempleados
     */
    public function setNumhorarioId($numhorarioId)
    {
        $this->numhorarioId = $numhorarioId;

        return $this;
    }

    /**
     * Get numhorarioId
     *
     * @return integer 
     */
    public function getNumhorarioId()
    {
        return $this->numhorarioId;
    }

    /**
     * Set numjefeinmediatoId
     *
     * @param integer $numjefeinmediatoId
     * @return Entidadesempleados
     */
    public function setNumjefeinmediatoId($numjefeinmediatoId)
    {
        $this->numjefeinmediatoId = $numjefeinmediatoId;

        return $this;
    }

    /**
     * Get numjefeinmediatoId
     *
     * @return integer 
     */
    public function getNumjefeinmediatoId()
    {
        return $this->numjefeinmediatoId;
    }

    /**
     * Set numtiponomina
     *
     * @param integer $numtiponomina
     * @return Entidadesempleados
     */
    public function setNumtiponomina($numtiponomina)
    {
        $this->numtiponomina = $numtiponomina;

        return $this;
    }

    /**
     * Get numtiponomina
     *
     * @return integer 
     */
    public function getNumtiponomina()
    {
        return $this->numtiponomina;
    }

    /**
     * Set numtipocontratolaboral
     *
     * @param integer $numtipocontratolaboral
     * @return Entidadesempleados
     */
    public function setNumtipocontratolaboral($numtipocontratolaboral)
    {
        $this->numtipocontratolaboral = $numtipocontratolaboral;

        return $this;
    }

    /**
     * Get numtipocontratolaboral
     *
     * @return integer 
     */
    public function getNumtipocontratolaboral()
    {
        return $this->numtipocontratolaboral;
    }
}
