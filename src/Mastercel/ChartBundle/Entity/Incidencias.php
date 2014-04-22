<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidencias
 *
 * @ORM\Table(name="Incidencias", indexes={@ORM\Index(name="Indice_1", columns={"DteIncidencia", "NumTipoIncidencia", "NumEmpleado_id"}), @ORM\Index(name="Indice_2", columns={"DteIncidencia", "NumEmpleado_id", "NumTipoIncidencia"}), @ORM\Index(name="Indice_3", columns={"NumTipoIncidencia", "DteIncidencia", "NumEmpleado_id"}), @ORM\Index(name="Indice_4", columns={"NumTipoIncidencia", "NumEmpleado_id", "DteIncidencia"})})
 * @ORM\Entity
 */
class Incidencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpleado_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numempleadoId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteIncidencia", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dteincidencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumHorario_id", type="integer", nullable=true)
     */
    private $numhorarioId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmePrimerRegistro", type="datetime", nullable=true)
     */
    private $tmeprimerregistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeUltimoRegistro", type="datetime", nullable=true)
     */
    private $tmeultimoregistro;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiempoEntradaTemprano", type="integer", nullable=true)
     */
    private $numtiempoentradatemprano = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiempoSalidaTarde", type="integer", nullable=true)
     */
    private $numtiemposalidatarde = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiempoLaboradoIntervalos", type="integer", nullable=true)
     */
    private $numtiempolaboradointervalos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiempoLaboradoExtra", type="integer", nullable=true)
     */
    private $numtiempolaboradoextra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiempoLaborado", type="integer", nullable=true)
     */
    private $numtiempolaborado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiempoAusenciasConPermiso", type="integer", nullable=true)
     */
    private $numtiempoausenciasconpermiso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiempoAusenciasSinPermiso", type="integer", nullable=true)
     */
    private $numtiempoausenciassinpermiso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalAusenciasConPermiso", type="integer", nullable=true)
     */
    private $numtotalausenciasconpermiso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalAusenciasSinPermiso", type="integer", nullable=true)
     */
    private $numtotalausenciassinpermiso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoIncidencia", type="integer", nullable=true)
     */
    private $numtipoincidencia = '0';

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
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumJornada_id", type="integer", nullable=true)
     */
    private $numjornadaId = '0';



    /**
     * Set numempleadoId
     *
     * @param integer $numempleadoId
     * @return Incidencias
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
     * Set dteincidencia
     *
     * @param \DateTime $dteincidencia
     * @return Incidencias
     */
    public function setDteincidencia($dteincidencia)
    {
        $this->dteincidencia = $dteincidencia;

        return $this;
    }

    /**
     * Get dteincidencia
     *
     * @return \DateTime 
     */
    public function getDteincidencia()
    {
        return $this->dteincidencia;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Incidencias
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
     * Set numhorarioId
     *
     * @param integer $numhorarioId
     * @return Incidencias
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
     * Set tmeprimerregistro
     *
     * @param \DateTime $tmeprimerregistro
     * @return Incidencias
     */
    public function setTmeprimerregistro($tmeprimerregistro)
    {
        $this->tmeprimerregistro = $tmeprimerregistro;

        return $this;
    }

    /**
     * Get tmeprimerregistro
     *
     * @return \DateTime 
     */
    public function getTmeprimerregistro()
    {
        return $this->tmeprimerregistro;
    }

    /**
     * Set tmeultimoregistro
     *
     * @param \DateTime $tmeultimoregistro
     * @return Incidencias
     */
    public function setTmeultimoregistro($tmeultimoregistro)
    {
        $this->tmeultimoregistro = $tmeultimoregistro;

        return $this;
    }

    /**
     * Get tmeultimoregistro
     *
     * @return \DateTime 
     */
    public function getTmeultimoregistro()
    {
        return $this->tmeultimoregistro;
    }

    /**
     * Set numtiempoentradatemprano
     *
     * @param integer $numtiempoentradatemprano
     * @return Incidencias
     */
    public function setNumtiempoentradatemprano($numtiempoentradatemprano)
    {
        $this->numtiempoentradatemprano = $numtiempoentradatemprano;

        return $this;
    }

    /**
     * Get numtiempoentradatemprano
     *
     * @return integer 
     */
    public function getNumtiempoentradatemprano()
    {
        return $this->numtiempoentradatemprano;
    }

    /**
     * Set numtiemposalidatarde
     *
     * @param integer $numtiemposalidatarde
     * @return Incidencias
     */
    public function setNumtiemposalidatarde($numtiemposalidatarde)
    {
        $this->numtiemposalidatarde = $numtiemposalidatarde;

        return $this;
    }

    /**
     * Get numtiemposalidatarde
     *
     * @return integer 
     */
    public function getNumtiemposalidatarde()
    {
        return $this->numtiemposalidatarde;
    }

    /**
     * Set numtiempolaboradointervalos
     *
     * @param integer $numtiempolaboradointervalos
     * @return Incidencias
     */
    public function setNumtiempolaboradointervalos($numtiempolaboradointervalos)
    {
        $this->numtiempolaboradointervalos = $numtiempolaboradointervalos;

        return $this;
    }

    /**
     * Get numtiempolaboradointervalos
     *
     * @return integer 
     */
    public function getNumtiempolaboradointervalos()
    {
        return $this->numtiempolaboradointervalos;
    }

    /**
     * Set numtiempolaboradoextra
     *
     * @param integer $numtiempolaboradoextra
     * @return Incidencias
     */
    public function setNumtiempolaboradoextra($numtiempolaboradoextra)
    {
        $this->numtiempolaboradoextra = $numtiempolaboradoextra;

        return $this;
    }

    /**
     * Get numtiempolaboradoextra
     *
     * @return integer 
     */
    public function getNumtiempolaboradoextra()
    {
        return $this->numtiempolaboradoextra;
    }

    /**
     * Set numtiempolaborado
     *
     * @param integer $numtiempolaborado
     * @return Incidencias
     */
    public function setNumtiempolaborado($numtiempolaborado)
    {
        $this->numtiempolaborado = $numtiempolaborado;

        return $this;
    }

    /**
     * Get numtiempolaborado
     *
     * @return integer 
     */
    public function getNumtiempolaborado()
    {
        return $this->numtiempolaborado;
    }

    /**
     * Set numtiempoausenciasconpermiso
     *
     * @param integer $numtiempoausenciasconpermiso
     * @return Incidencias
     */
    public function setNumtiempoausenciasconpermiso($numtiempoausenciasconpermiso)
    {
        $this->numtiempoausenciasconpermiso = $numtiempoausenciasconpermiso;

        return $this;
    }

    /**
     * Get numtiempoausenciasconpermiso
     *
     * @return integer 
     */
    public function getNumtiempoausenciasconpermiso()
    {
        return $this->numtiempoausenciasconpermiso;
    }

    /**
     * Set numtiempoausenciassinpermiso
     *
     * @param integer $numtiempoausenciassinpermiso
     * @return Incidencias
     */
    public function setNumtiempoausenciassinpermiso($numtiempoausenciassinpermiso)
    {
        $this->numtiempoausenciassinpermiso = $numtiempoausenciassinpermiso;

        return $this;
    }

    /**
     * Get numtiempoausenciassinpermiso
     *
     * @return integer 
     */
    public function getNumtiempoausenciassinpermiso()
    {
        return $this->numtiempoausenciassinpermiso;
    }

    /**
     * Set numtotalausenciasconpermiso
     *
     * @param integer $numtotalausenciasconpermiso
     * @return Incidencias
     */
    public function setNumtotalausenciasconpermiso($numtotalausenciasconpermiso)
    {
        $this->numtotalausenciasconpermiso = $numtotalausenciasconpermiso;

        return $this;
    }

    /**
     * Get numtotalausenciasconpermiso
     *
     * @return integer 
     */
    public function getNumtotalausenciasconpermiso()
    {
        return $this->numtotalausenciasconpermiso;
    }

    /**
     * Set numtotalausenciassinpermiso
     *
     * @param integer $numtotalausenciassinpermiso
     * @return Incidencias
     */
    public function setNumtotalausenciassinpermiso($numtotalausenciassinpermiso)
    {
        $this->numtotalausenciassinpermiso = $numtotalausenciassinpermiso;

        return $this;
    }

    /**
     * Get numtotalausenciassinpermiso
     *
     * @return integer 
     */
    public function getNumtotalausenciassinpermiso()
    {
        return $this->numtotalausenciassinpermiso;
    }

    /**
     * Set numtipoincidencia
     *
     * @param integer $numtipoincidencia
     * @return Incidencias
     */
    public function setNumtipoincidencia($numtipoincidencia)
    {
        $this->numtipoincidencia = $numtipoincidencia;

        return $this;
    }

    /**
     * Get numtipoincidencia
     *
     * @return integer 
     */
    public function getNumtipoincidencia()
    {
        return $this->numtipoincidencia;
    }

    /**
     * Set numtipopermisolaboral
     *
     * @param integer $numtipopermisolaboral
     * @return Incidencias
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
     * @return Incidencias
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
     * @return Incidencias
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
     * @return Incidencias
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
     * @return Incidencias
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
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Incidencias
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
     * Set numjornadaId
     *
     * @param integer $numjornadaId
     * @return Incidencias
     */
    public function setNumjornadaId($numjornadaId)
    {
        $this->numjornadaId = $numjornadaId;

        return $this;
    }

    /**
     * Get numjornadaId
     *
     * @return integer 
     */
    public function getNumjornadaId()
    {
        return $this->numjornadaId;
    }
}
