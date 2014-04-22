<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ejercicios
 *
 * @ORM\Table(name="Ejercicios", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"DteInicioEjercicio"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Ejercicios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numejercicioId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodos", type="integer", nullable=true)
     */
    private $numperiodos = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioEjercicio", type="datetime", nullable=true)
     */
    private $dteinicioejercicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoEjercicio", type="datetime", nullable=true)
     */
    private $dteterminoejercicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodoActual", type="integer", nullable=true)
     */
    private $numperiodoactual = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_1", type="datetime", nullable=true)
     */
    private $dteinicioperiodo1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_1", type="datetime", nullable=true)
     */
    private $dteterminoperiodo1;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_1", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo1 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_2", type="datetime", nullable=true)
     */
    private $dteinicioperiodo2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_2", type="datetime", nullable=true)
     */
    private $dteterminoperiodo2;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_2", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo2 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_3", type="datetime", nullable=true)
     */
    private $dteinicioperiodo3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_3", type="datetime", nullable=true)
     */
    private $dteterminoperiodo3;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_3", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo3 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_4", type="datetime", nullable=true)
     */
    private $dteinicioperiodo4;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_4", type="datetime", nullable=true)
     */
    private $dteterminoperiodo4;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_4", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo4 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_5", type="datetime", nullable=true)
     */
    private $dteinicioperiodo5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_5", type="datetime", nullable=true)
     */
    private $dteterminoperiodo5;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_5", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo5 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_6", type="datetime", nullable=true)
     */
    private $dteinicioperiodo6;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_6", type="datetime", nullable=true)
     */
    private $dteterminoperiodo6;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_6", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo6 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_7", type="datetime", nullable=true)
     */
    private $dteinicioperiodo7;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_7", type="datetime", nullable=true)
     */
    private $dteterminoperiodo7;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_7", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo7 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_8", type="datetime", nullable=true)
     */
    private $dteinicioperiodo8;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_8", type="datetime", nullable=true)
     */
    private $dteterminoperiodo8;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_8", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo8 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_9", type="datetime", nullable=true)
     */
    private $dteinicioperiodo9;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_9", type="datetime", nullable=true)
     */
    private $dteterminoperiodo9;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_9", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo9 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_10", type="datetime", nullable=true)
     */
    private $dteinicioperiodo10;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_10", type="datetime", nullable=true)
     */
    private $dteterminoperiodo10;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_10", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo10 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_11", type="datetime", nullable=true)
     */
    private $dteinicioperiodo11;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_11", type="datetime", nullable=true)
     */
    private $dteterminoperiodo11;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_11", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo11 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_12", type="datetime", nullable=true)
     */
    private $dteinicioperiodo12;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_12", type="datetime", nullable=true)
     */
    private $dteterminoperiodo12;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_12", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo12 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteInicioPeriodo_13", type="datetime", nullable=true)
     */
    private $dteinicioperiodo13;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTerminoPeriodo_13", type="datetime", nullable=true)
     */
    private $dteterminoperiodo13;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoPeriodo_13", type="integer", nullable=true)
     */
    private $numtipoestadoperiodo13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoEjercicio", type="integer", nullable=true)
     */
    private $numtipoestadoejercicio = '0';

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
     * Get numejercicioId
     *
     * @return integer 
     */
    public function getNumejercicioId()
    {
        return $this->numejercicioId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Ejercicios
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
     * Set numperiodos
     *
     * @param integer $numperiodos
     * @return Ejercicios
     */
    public function setNumperiodos($numperiodos)
    {
        $this->numperiodos = $numperiodos;

        return $this;
    }

    /**
     * Get numperiodos
     *
     * @return integer 
     */
    public function getNumperiodos()
    {
        return $this->numperiodos;
    }

    /**
     * Set dteinicioejercicio
     *
     * @param \DateTime $dteinicioejercicio
     * @return Ejercicios
     */
    public function setDteinicioejercicio($dteinicioejercicio)
    {
        $this->dteinicioejercicio = $dteinicioejercicio;

        return $this;
    }

    /**
     * Get dteinicioejercicio
     *
     * @return \DateTime 
     */
    public function getDteinicioejercicio()
    {
        return $this->dteinicioejercicio;
    }

    /**
     * Set dteterminoejercicio
     *
     * @param \DateTime $dteterminoejercicio
     * @return Ejercicios
     */
    public function setDteterminoejercicio($dteterminoejercicio)
    {
        $this->dteterminoejercicio = $dteterminoejercicio;

        return $this;
    }

    /**
     * Get dteterminoejercicio
     *
     * @return \DateTime 
     */
    public function getDteterminoejercicio()
    {
        return $this->dteterminoejercicio;
    }

    /**
     * Set numperiodoactual
     *
     * @param integer $numperiodoactual
     * @return Ejercicios
     */
    public function setNumperiodoactual($numperiodoactual)
    {
        $this->numperiodoactual = $numperiodoactual;

        return $this;
    }

    /**
     * Get numperiodoactual
     *
     * @return integer 
     */
    public function getNumperiodoactual()
    {
        return $this->numperiodoactual;
    }

    /**
     * Set dteinicioperiodo1
     *
     * @param \DateTime $dteinicioperiodo1
     * @return Ejercicios
     */
    public function setDteinicioperiodo1($dteinicioperiodo1)
    {
        $this->dteinicioperiodo1 = $dteinicioperiodo1;

        return $this;
    }

    /**
     * Get dteinicioperiodo1
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo1()
    {
        return $this->dteinicioperiodo1;
    }

    /**
     * Set dteterminoperiodo1
     *
     * @param \DateTime $dteterminoperiodo1
     * @return Ejercicios
     */
    public function setDteterminoperiodo1($dteterminoperiodo1)
    {
        $this->dteterminoperiodo1 = $dteterminoperiodo1;

        return $this;
    }

    /**
     * Get dteterminoperiodo1
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo1()
    {
        return $this->dteterminoperiodo1;
    }

    /**
     * Set numtipoestadoperiodo1
     *
     * @param integer $numtipoestadoperiodo1
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo1($numtipoestadoperiodo1)
    {
        $this->numtipoestadoperiodo1 = $numtipoestadoperiodo1;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo1
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo1()
    {
        return $this->numtipoestadoperiodo1;
    }

    /**
     * Set dteinicioperiodo2
     *
     * @param \DateTime $dteinicioperiodo2
     * @return Ejercicios
     */
    public function setDteinicioperiodo2($dteinicioperiodo2)
    {
        $this->dteinicioperiodo2 = $dteinicioperiodo2;

        return $this;
    }

    /**
     * Get dteinicioperiodo2
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo2()
    {
        return $this->dteinicioperiodo2;
    }

    /**
     * Set dteterminoperiodo2
     *
     * @param \DateTime $dteterminoperiodo2
     * @return Ejercicios
     */
    public function setDteterminoperiodo2($dteterminoperiodo2)
    {
        $this->dteterminoperiodo2 = $dteterminoperiodo2;

        return $this;
    }

    /**
     * Get dteterminoperiodo2
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo2()
    {
        return $this->dteterminoperiodo2;
    }

    /**
     * Set numtipoestadoperiodo2
     *
     * @param integer $numtipoestadoperiodo2
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo2($numtipoestadoperiodo2)
    {
        $this->numtipoestadoperiodo2 = $numtipoestadoperiodo2;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo2
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo2()
    {
        return $this->numtipoestadoperiodo2;
    }

    /**
     * Set dteinicioperiodo3
     *
     * @param \DateTime $dteinicioperiodo3
     * @return Ejercicios
     */
    public function setDteinicioperiodo3($dteinicioperiodo3)
    {
        $this->dteinicioperiodo3 = $dteinicioperiodo3;

        return $this;
    }

    /**
     * Get dteinicioperiodo3
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo3()
    {
        return $this->dteinicioperiodo3;
    }

    /**
     * Set dteterminoperiodo3
     *
     * @param \DateTime $dteterminoperiodo3
     * @return Ejercicios
     */
    public function setDteterminoperiodo3($dteterminoperiodo3)
    {
        $this->dteterminoperiodo3 = $dteterminoperiodo3;

        return $this;
    }

    /**
     * Get dteterminoperiodo3
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo3()
    {
        return $this->dteterminoperiodo3;
    }

    /**
     * Set numtipoestadoperiodo3
     *
     * @param integer $numtipoestadoperiodo3
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo3($numtipoestadoperiodo3)
    {
        $this->numtipoestadoperiodo3 = $numtipoestadoperiodo3;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo3
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo3()
    {
        return $this->numtipoestadoperiodo3;
    }

    /**
     * Set dteinicioperiodo4
     *
     * @param \DateTime $dteinicioperiodo4
     * @return Ejercicios
     */
    public function setDteinicioperiodo4($dteinicioperiodo4)
    {
        $this->dteinicioperiodo4 = $dteinicioperiodo4;

        return $this;
    }

    /**
     * Get dteinicioperiodo4
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo4()
    {
        return $this->dteinicioperiodo4;
    }

    /**
     * Set dteterminoperiodo4
     *
     * @param \DateTime $dteterminoperiodo4
     * @return Ejercicios
     */
    public function setDteterminoperiodo4($dteterminoperiodo4)
    {
        $this->dteterminoperiodo4 = $dteterminoperiodo4;

        return $this;
    }

    /**
     * Get dteterminoperiodo4
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo4()
    {
        return $this->dteterminoperiodo4;
    }

    /**
     * Set numtipoestadoperiodo4
     *
     * @param integer $numtipoestadoperiodo4
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo4($numtipoestadoperiodo4)
    {
        $this->numtipoestadoperiodo4 = $numtipoestadoperiodo4;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo4
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo4()
    {
        return $this->numtipoestadoperiodo4;
    }

    /**
     * Set dteinicioperiodo5
     *
     * @param \DateTime $dteinicioperiodo5
     * @return Ejercicios
     */
    public function setDteinicioperiodo5($dteinicioperiodo5)
    {
        $this->dteinicioperiodo5 = $dteinicioperiodo5;

        return $this;
    }

    /**
     * Get dteinicioperiodo5
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo5()
    {
        return $this->dteinicioperiodo5;
    }

    /**
     * Set dteterminoperiodo5
     *
     * @param \DateTime $dteterminoperiodo5
     * @return Ejercicios
     */
    public function setDteterminoperiodo5($dteterminoperiodo5)
    {
        $this->dteterminoperiodo5 = $dteterminoperiodo5;

        return $this;
    }

    /**
     * Get dteterminoperiodo5
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo5()
    {
        return $this->dteterminoperiodo5;
    }

    /**
     * Set numtipoestadoperiodo5
     *
     * @param integer $numtipoestadoperiodo5
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo5($numtipoestadoperiodo5)
    {
        $this->numtipoestadoperiodo5 = $numtipoestadoperiodo5;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo5
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo5()
    {
        return $this->numtipoestadoperiodo5;
    }

    /**
     * Set dteinicioperiodo6
     *
     * @param \DateTime $dteinicioperiodo6
     * @return Ejercicios
     */
    public function setDteinicioperiodo6($dteinicioperiodo6)
    {
        $this->dteinicioperiodo6 = $dteinicioperiodo6;

        return $this;
    }

    /**
     * Get dteinicioperiodo6
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo6()
    {
        return $this->dteinicioperiodo6;
    }

    /**
     * Set dteterminoperiodo6
     *
     * @param \DateTime $dteterminoperiodo6
     * @return Ejercicios
     */
    public function setDteterminoperiodo6($dteterminoperiodo6)
    {
        $this->dteterminoperiodo6 = $dteterminoperiodo6;

        return $this;
    }

    /**
     * Get dteterminoperiodo6
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo6()
    {
        return $this->dteterminoperiodo6;
    }

    /**
     * Set numtipoestadoperiodo6
     *
     * @param integer $numtipoestadoperiodo6
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo6($numtipoestadoperiodo6)
    {
        $this->numtipoestadoperiodo6 = $numtipoestadoperiodo6;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo6
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo6()
    {
        return $this->numtipoestadoperiodo6;
    }

    /**
     * Set dteinicioperiodo7
     *
     * @param \DateTime $dteinicioperiodo7
     * @return Ejercicios
     */
    public function setDteinicioperiodo7($dteinicioperiodo7)
    {
        $this->dteinicioperiodo7 = $dteinicioperiodo7;

        return $this;
    }

    /**
     * Get dteinicioperiodo7
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo7()
    {
        return $this->dteinicioperiodo7;
    }

    /**
     * Set dteterminoperiodo7
     *
     * @param \DateTime $dteterminoperiodo7
     * @return Ejercicios
     */
    public function setDteterminoperiodo7($dteterminoperiodo7)
    {
        $this->dteterminoperiodo7 = $dteterminoperiodo7;

        return $this;
    }

    /**
     * Get dteterminoperiodo7
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo7()
    {
        return $this->dteterminoperiodo7;
    }

    /**
     * Set numtipoestadoperiodo7
     *
     * @param integer $numtipoestadoperiodo7
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo7($numtipoestadoperiodo7)
    {
        $this->numtipoestadoperiodo7 = $numtipoestadoperiodo7;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo7
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo7()
    {
        return $this->numtipoestadoperiodo7;
    }

    /**
     * Set dteinicioperiodo8
     *
     * @param \DateTime $dteinicioperiodo8
     * @return Ejercicios
     */
    public function setDteinicioperiodo8($dteinicioperiodo8)
    {
        $this->dteinicioperiodo8 = $dteinicioperiodo8;

        return $this;
    }

    /**
     * Get dteinicioperiodo8
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo8()
    {
        return $this->dteinicioperiodo8;
    }

    /**
     * Set dteterminoperiodo8
     *
     * @param \DateTime $dteterminoperiodo8
     * @return Ejercicios
     */
    public function setDteterminoperiodo8($dteterminoperiodo8)
    {
        $this->dteterminoperiodo8 = $dteterminoperiodo8;

        return $this;
    }

    /**
     * Get dteterminoperiodo8
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo8()
    {
        return $this->dteterminoperiodo8;
    }

    /**
     * Set numtipoestadoperiodo8
     *
     * @param integer $numtipoestadoperiodo8
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo8($numtipoestadoperiodo8)
    {
        $this->numtipoestadoperiodo8 = $numtipoestadoperiodo8;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo8
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo8()
    {
        return $this->numtipoestadoperiodo8;
    }

    /**
     * Set dteinicioperiodo9
     *
     * @param \DateTime $dteinicioperiodo9
     * @return Ejercicios
     */
    public function setDteinicioperiodo9($dteinicioperiodo9)
    {
        $this->dteinicioperiodo9 = $dteinicioperiodo9;

        return $this;
    }

    /**
     * Get dteinicioperiodo9
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo9()
    {
        return $this->dteinicioperiodo9;
    }

    /**
     * Set dteterminoperiodo9
     *
     * @param \DateTime $dteterminoperiodo9
     * @return Ejercicios
     */
    public function setDteterminoperiodo9($dteterminoperiodo9)
    {
        $this->dteterminoperiodo9 = $dteterminoperiodo9;

        return $this;
    }

    /**
     * Get dteterminoperiodo9
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo9()
    {
        return $this->dteterminoperiodo9;
    }

    /**
     * Set numtipoestadoperiodo9
     *
     * @param integer $numtipoestadoperiodo9
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo9($numtipoestadoperiodo9)
    {
        $this->numtipoestadoperiodo9 = $numtipoestadoperiodo9;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo9
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo9()
    {
        return $this->numtipoestadoperiodo9;
    }

    /**
     * Set dteinicioperiodo10
     *
     * @param \DateTime $dteinicioperiodo10
     * @return Ejercicios
     */
    public function setDteinicioperiodo10($dteinicioperiodo10)
    {
        $this->dteinicioperiodo10 = $dteinicioperiodo10;

        return $this;
    }

    /**
     * Get dteinicioperiodo10
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo10()
    {
        return $this->dteinicioperiodo10;
    }

    /**
     * Set dteterminoperiodo10
     *
     * @param \DateTime $dteterminoperiodo10
     * @return Ejercicios
     */
    public function setDteterminoperiodo10($dteterminoperiodo10)
    {
        $this->dteterminoperiodo10 = $dteterminoperiodo10;

        return $this;
    }

    /**
     * Get dteterminoperiodo10
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo10()
    {
        return $this->dteterminoperiodo10;
    }

    /**
     * Set numtipoestadoperiodo10
     *
     * @param integer $numtipoestadoperiodo10
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo10($numtipoestadoperiodo10)
    {
        $this->numtipoestadoperiodo10 = $numtipoestadoperiodo10;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo10
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo10()
    {
        return $this->numtipoestadoperiodo10;
    }

    /**
     * Set dteinicioperiodo11
     *
     * @param \DateTime $dteinicioperiodo11
     * @return Ejercicios
     */
    public function setDteinicioperiodo11($dteinicioperiodo11)
    {
        $this->dteinicioperiodo11 = $dteinicioperiodo11;

        return $this;
    }

    /**
     * Get dteinicioperiodo11
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo11()
    {
        return $this->dteinicioperiodo11;
    }

    /**
     * Set dteterminoperiodo11
     *
     * @param \DateTime $dteterminoperiodo11
     * @return Ejercicios
     */
    public function setDteterminoperiodo11($dteterminoperiodo11)
    {
        $this->dteterminoperiodo11 = $dteterminoperiodo11;

        return $this;
    }

    /**
     * Get dteterminoperiodo11
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo11()
    {
        return $this->dteterminoperiodo11;
    }

    /**
     * Set numtipoestadoperiodo11
     *
     * @param integer $numtipoestadoperiodo11
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo11($numtipoestadoperiodo11)
    {
        $this->numtipoestadoperiodo11 = $numtipoestadoperiodo11;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo11
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo11()
    {
        return $this->numtipoestadoperiodo11;
    }

    /**
     * Set dteinicioperiodo12
     *
     * @param \DateTime $dteinicioperiodo12
     * @return Ejercicios
     */
    public function setDteinicioperiodo12($dteinicioperiodo12)
    {
        $this->dteinicioperiodo12 = $dteinicioperiodo12;

        return $this;
    }

    /**
     * Get dteinicioperiodo12
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo12()
    {
        return $this->dteinicioperiodo12;
    }

    /**
     * Set dteterminoperiodo12
     *
     * @param \DateTime $dteterminoperiodo12
     * @return Ejercicios
     */
    public function setDteterminoperiodo12($dteterminoperiodo12)
    {
        $this->dteterminoperiodo12 = $dteterminoperiodo12;

        return $this;
    }

    /**
     * Get dteterminoperiodo12
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo12()
    {
        return $this->dteterminoperiodo12;
    }

    /**
     * Set numtipoestadoperiodo12
     *
     * @param integer $numtipoestadoperiodo12
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo12($numtipoestadoperiodo12)
    {
        $this->numtipoestadoperiodo12 = $numtipoestadoperiodo12;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo12
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo12()
    {
        return $this->numtipoestadoperiodo12;
    }

    /**
     * Set dteinicioperiodo13
     *
     * @param \DateTime $dteinicioperiodo13
     * @return Ejercicios
     */
    public function setDteinicioperiodo13($dteinicioperiodo13)
    {
        $this->dteinicioperiodo13 = $dteinicioperiodo13;

        return $this;
    }

    /**
     * Get dteinicioperiodo13
     *
     * @return \DateTime 
     */
    public function getDteinicioperiodo13()
    {
        return $this->dteinicioperiodo13;
    }

    /**
     * Set dteterminoperiodo13
     *
     * @param \DateTime $dteterminoperiodo13
     * @return Ejercicios
     */
    public function setDteterminoperiodo13($dteterminoperiodo13)
    {
        $this->dteterminoperiodo13 = $dteterminoperiodo13;

        return $this;
    }

    /**
     * Get dteterminoperiodo13
     *
     * @return \DateTime 
     */
    public function getDteterminoperiodo13()
    {
        return $this->dteterminoperiodo13;
    }

    /**
     * Set numtipoestadoperiodo13
     *
     * @param integer $numtipoestadoperiodo13
     * @return Ejercicios
     */
    public function setNumtipoestadoperiodo13($numtipoestadoperiodo13)
    {
        $this->numtipoestadoperiodo13 = $numtipoestadoperiodo13;

        return $this;
    }

    /**
     * Get numtipoestadoperiodo13
     *
     * @return integer 
     */
    public function getNumtipoestadoperiodo13()
    {
        return $this->numtipoestadoperiodo13;
    }

    /**
     * Set numtipoestadoejercicio
     *
     * @param integer $numtipoestadoejercicio
     * @return Ejercicios
     */
    public function setNumtipoestadoejercicio($numtipoestadoejercicio)
    {
        $this->numtipoestadoejercicio = $numtipoestadoejercicio;

        return $this;
    }

    /**
     * Get numtipoestadoejercicio
     *
     * @return integer 
     */
    public function getNumtipoestadoejercicio()
    {
        return $this->numtipoestadoejercicio;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Ejercicios
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
     * @return Ejercicios
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
     * @return Ejercicios
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
     * @return Ejercicios
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
     * @return Ejercicios
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
