<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyectospresupuestos
 *
 * @ORM\Table(name="ProyectosPresupuestos", indexes={@ORM\Index(name="Indice_1", columns={"NumProyecto_id"}), @ORM\Index(name="Indice_2", columns={"NumActividad_id"}), @ORM\Index(name="Indice_3", columns={"NumGrupoCuenta_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Proyectospresupuestos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProyecto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numproyectoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActividad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numactividadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoCuenta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numgrupocuentaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteRevision", type="datetime", nullable=true)
     */
    private $dterevision;

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_7", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_8", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad8 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_9", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad9 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_10", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_11", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad11 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_12", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad12 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumUnidad_13", type="float", precision=53, scale=0, nullable=true)
     */
    private $numunidad13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_1", type="integer", nullable=true)
     */
    private $numimporte1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_2", type="integer", nullable=true)
     */
    private $numimporte2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_3", type="integer", nullable=true)
     */
    private $numimporte3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_4", type="integer", nullable=true)
     */
    private $numimporte4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_5", type="integer", nullable=true)
     */
    private $numimporte5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_6", type="integer", nullable=true)
     */
    private $numimporte6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_7", type="integer", nullable=true)
     */
    private $numimporte7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_8", type="integer", nullable=true)
     */
    private $numimporte8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_9", type="integer", nullable=true)
     */
    private $numimporte9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_10", type="integer", nullable=true)
     */
    private $numimporte10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_11", type="integer", nullable=true)
     */
    private $numimporte11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_12", type="integer", nullable=true)
     */
    private $numimporte12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_13", type="integer", nullable=true)
     */
    private $numimporte13 = '0';

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
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Proyectospresupuestos
     */
    public function setNumejercicioId($numejercicioId)
    {
        $this->numejercicioId = $numejercicioId;

        return $this;
    }

    /**
     * Get numejercicioId
     *
     * @return integer 
     */
    public function getNumejercicioId()
    {
        return $this->numejercicioId;
    }

    /**
     * Set numproyectoId
     *
     * @param integer $numproyectoId
     * @return Proyectospresupuestos
     */
    public function setNumproyectoId($numproyectoId)
    {
        $this->numproyectoId = $numproyectoId;

        return $this;
    }

    /**
     * Get numproyectoId
     *
     * @return integer 
     */
    public function getNumproyectoId()
    {
        return $this->numproyectoId;
    }

    /**
     * Set numactividadId
     *
     * @param integer $numactividadId
     * @return Proyectospresupuestos
     */
    public function setNumactividadId($numactividadId)
    {
        $this->numactividadId = $numactividadId;

        return $this;
    }

    /**
     * Get numactividadId
     *
     * @return integer 
     */
    public function getNumactividadId()
    {
        return $this->numactividadId;
    }

    /**
     * Set numgrupocuentaId
     *
     * @param integer $numgrupocuentaId
     * @return Proyectospresupuestos
     */
    public function setNumgrupocuentaId($numgrupocuentaId)
    {
        $this->numgrupocuentaId = $numgrupocuentaId;

        return $this;
    }

    /**
     * Get numgrupocuentaId
     *
     * @return integer 
     */
    public function getNumgrupocuentaId()
    {
        return $this->numgrupocuentaId;
    }

    /**
     * Set dterevision
     *
     * @param \DateTime $dterevision
     * @return Proyectospresupuestos
     */
    public function setDterevision($dterevision)
    {
        $this->dterevision = $dterevision;

        return $this;
    }

    /**
     * Get dterevision
     *
     * @return \DateTime 
     */
    public function getDterevision()
    {
        return $this->dterevision;
    }

    /**
     * Set numunidad1
     *
     * @param float $numunidad1
     * @return Proyectospresupuestos
     */
    public function setNumunidad1($numunidad1)
    {
        $this->numunidad1 = $numunidad1;

        return $this;
    }

    /**
     * Get numunidad1
     *
     * @return float 
     */
    public function getNumunidad1()
    {
        return $this->numunidad1;
    }

    /**
     * Set numunidad2
     *
     * @param float $numunidad2
     * @return Proyectospresupuestos
     */
    public function setNumunidad2($numunidad2)
    {
        $this->numunidad2 = $numunidad2;

        return $this;
    }

    /**
     * Get numunidad2
     *
     * @return float 
     */
    public function getNumunidad2()
    {
        return $this->numunidad2;
    }

    /**
     * Set numunidad3
     *
     * @param float $numunidad3
     * @return Proyectospresupuestos
     */
    public function setNumunidad3($numunidad3)
    {
        $this->numunidad3 = $numunidad3;

        return $this;
    }

    /**
     * Get numunidad3
     *
     * @return float 
     */
    public function getNumunidad3()
    {
        return $this->numunidad3;
    }

    /**
     * Set numunidad4
     *
     * @param float $numunidad4
     * @return Proyectospresupuestos
     */
    public function setNumunidad4($numunidad4)
    {
        $this->numunidad4 = $numunidad4;

        return $this;
    }

    /**
     * Get numunidad4
     *
     * @return float 
     */
    public function getNumunidad4()
    {
        return $this->numunidad4;
    }

    /**
     * Set numunidad5
     *
     * @param float $numunidad5
     * @return Proyectospresupuestos
     */
    public function setNumunidad5($numunidad5)
    {
        $this->numunidad5 = $numunidad5;

        return $this;
    }

    /**
     * Get numunidad5
     *
     * @return float 
     */
    public function getNumunidad5()
    {
        return $this->numunidad5;
    }

    /**
     * Set numunidad6
     *
     * @param float $numunidad6
     * @return Proyectospresupuestos
     */
    public function setNumunidad6($numunidad6)
    {
        $this->numunidad6 = $numunidad6;

        return $this;
    }

    /**
     * Get numunidad6
     *
     * @return float 
     */
    public function getNumunidad6()
    {
        return $this->numunidad6;
    }

    /**
     * Set numunidad7
     *
     * @param float $numunidad7
     * @return Proyectospresupuestos
     */
    public function setNumunidad7($numunidad7)
    {
        $this->numunidad7 = $numunidad7;

        return $this;
    }

    /**
     * Get numunidad7
     *
     * @return float 
     */
    public function getNumunidad7()
    {
        return $this->numunidad7;
    }

    /**
     * Set numunidad8
     *
     * @param float $numunidad8
     * @return Proyectospresupuestos
     */
    public function setNumunidad8($numunidad8)
    {
        $this->numunidad8 = $numunidad8;

        return $this;
    }

    /**
     * Get numunidad8
     *
     * @return float 
     */
    public function getNumunidad8()
    {
        return $this->numunidad8;
    }

    /**
     * Set numunidad9
     *
     * @param float $numunidad9
     * @return Proyectospresupuestos
     */
    public function setNumunidad9($numunidad9)
    {
        $this->numunidad9 = $numunidad9;

        return $this;
    }

    /**
     * Get numunidad9
     *
     * @return float 
     */
    public function getNumunidad9()
    {
        return $this->numunidad9;
    }

    /**
     * Set numunidad10
     *
     * @param float $numunidad10
     * @return Proyectospresupuestos
     */
    public function setNumunidad10($numunidad10)
    {
        $this->numunidad10 = $numunidad10;

        return $this;
    }

    /**
     * Get numunidad10
     *
     * @return float 
     */
    public function getNumunidad10()
    {
        return $this->numunidad10;
    }

    /**
     * Set numunidad11
     *
     * @param float $numunidad11
     * @return Proyectospresupuestos
     */
    public function setNumunidad11($numunidad11)
    {
        $this->numunidad11 = $numunidad11;

        return $this;
    }

    /**
     * Get numunidad11
     *
     * @return float 
     */
    public function getNumunidad11()
    {
        return $this->numunidad11;
    }

    /**
     * Set numunidad12
     *
     * @param float $numunidad12
     * @return Proyectospresupuestos
     */
    public function setNumunidad12($numunidad12)
    {
        $this->numunidad12 = $numunidad12;

        return $this;
    }

    /**
     * Get numunidad12
     *
     * @return float 
     */
    public function getNumunidad12()
    {
        return $this->numunidad12;
    }

    /**
     * Set numunidad13
     *
     * @param float $numunidad13
     * @return Proyectospresupuestos
     */
    public function setNumunidad13($numunidad13)
    {
        $this->numunidad13 = $numunidad13;

        return $this;
    }

    /**
     * Get numunidad13
     *
     * @return float 
     */
    public function getNumunidad13()
    {
        return $this->numunidad13;
    }

    /**
     * Set numimporte1
     *
     * @param integer $numimporte1
     * @return Proyectospresupuestos
     */
    public function setNumimporte1($numimporte1)
    {
        $this->numimporte1 = $numimporte1;

        return $this;
    }

    /**
     * Get numimporte1
     *
     * @return integer 
     */
    public function getNumimporte1()
    {
        return $this->numimporte1;
    }

    /**
     * Set numimporte2
     *
     * @param integer $numimporte2
     * @return Proyectospresupuestos
     */
    public function setNumimporte2($numimporte2)
    {
        $this->numimporte2 = $numimporte2;

        return $this;
    }

    /**
     * Get numimporte2
     *
     * @return integer 
     */
    public function getNumimporte2()
    {
        return $this->numimporte2;
    }

    /**
     * Set numimporte3
     *
     * @param integer $numimporte3
     * @return Proyectospresupuestos
     */
    public function setNumimporte3($numimporte3)
    {
        $this->numimporte3 = $numimporte3;

        return $this;
    }

    /**
     * Get numimporte3
     *
     * @return integer 
     */
    public function getNumimporte3()
    {
        return $this->numimporte3;
    }

    /**
     * Set numimporte4
     *
     * @param integer $numimporte4
     * @return Proyectospresupuestos
     */
    public function setNumimporte4($numimporte4)
    {
        $this->numimporte4 = $numimporte4;

        return $this;
    }

    /**
     * Get numimporte4
     *
     * @return integer 
     */
    public function getNumimporte4()
    {
        return $this->numimporte4;
    }

    /**
     * Set numimporte5
     *
     * @param integer $numimporte5
     * @return Proyectospresupuestos
     */
    public function setNumimporte5($numimporte5)
    {
        $this->numimporte5 = $numimporte5;

        return $this;
    }

    /**
     * Get numimporte5
     *
     * @return integer 
     */
    public function getNumimporte5()
    {
        return $this->numimporte5;
    }

    /**
     * Set numimporte6
     *
     * @param integer $numimporte6
     * @return Proyectospresupuestos
     */
    public function setNumimporte6($numimporte6)
    {
        $this->numimporte6 = $numimporte6;

        return $this;
    }

    /**
     * Get numimporte6
     *
     * @return integer 
     */
    public function getNumimporte6()
    {
        return $this->numimporte6;
    }

    /**
     * Set numimporte7
     *
     * @param integer $numimporte7
     * @return Proyectospresupuestos
     */
    public function setNumimporte7($numimporte7)
    {
        $this->numimporte7 = $numimporte7;

        return $this;
    }

    /**
     * Get numimporte7
     *
     * @return integer 
     */
    public function getNumimporte7()
    {
        return $this->numimporte7;
    }

    /**
     * Set numimporte8
     *
     * @param integer $numimporte8
     * @return Proyectospresupuestos
     */
    public function setNumimporte8($numimporte8)
    {
        $this->numimporte8 = $numimporte8;

        return $this;
    }

    /**
     * Get numimporte8
     *
     * @return integer 
     */
    public function getNumimporte8()
    {
        return $this->numimporte8;
    }

    /**
     * Set numimporte9
     *
     * @param integer $numimporte9
     * @return Proyectospresupuestos
     */
    public function setNumimporte9($numimporte9)
    {
        $this->numimporte9 = $numimporte9;

        return $this;
    }

    /**
     * Get numimporte9
     *
     * @return integer 
     */
    public function getNumimporte9()
    {
        return $this->numimporte9;
    }

    /**
     * Set numimporte10
     *
     * @param integer $numimporte10
     * @return Proyectospresupuestos
     */
    public function setNumimporte10($numimporte10)
    {
        $this->numimporte10 = $numimporte10;

        return $this;
    }

    /**
     * Get numimporte10
     *
     * @return integer 
     */
    public function getNumimporte10()
    {
        return $this->numimporte10;
    }

    /**
     * Set numimporte11
     *
     * @param integer $numimporte11
     * @return Proyectospresupuestos
     */
    public function setNumimporte11($numimporte11)
    {
        $this->numimporte11 = $numimporte11;

        return $this;
    }

    /**
     * Get numimporte11
     *
     * @return integer 
     */
    public function getNumimporte11()
    {
        return $this->numimporte11;
    }

    /**
     * Set numimporte12
     *
     * @param integer $numimporte12
     * @return Proyectospresupuestos
     */
    public function setNumimporte12($numimporte12)
    {
        $this->numimporte12 = $numimporte12;

        return $this;
    }

    /**
     * Get numimporte12
     *
     * @return integer 
     */
    public function getNumimporte12()
    {
        return $this->numimporte12;
    }

    /**
     * Set numimporte13
     *
     * @param integer $numimporte13
     * @return Proyectospresupuestos
     */
    public function setNumimporte13($numimporte13)
    {
        $this->numimporte13 = $numimporte13;

        return $this;
    }

    /**
     * Get numimporte13
     *
     * @return integer 
     */
    public function getNumimporte13()
    {
        return $this->numimporte13;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Proyectospresupuestos
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
     * @return Proyectospresupuestos
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
     * @return Proyectospresupuestos
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
     * @return Proyectospresupuestos
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
     * @return Proyectospresupuestos
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
