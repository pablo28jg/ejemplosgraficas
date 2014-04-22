<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objetivosplanes
 *
 * @ORM\Table(name="ObjetivosPlanes", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrObjetivoPlan_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Objetivosplanes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumObjetivoPlan_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numobjetivoplanId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrObjetivoPlan_ky", type="string", length=10, nullable=true)
     */
    private $strobjetivoplanKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoObjetivo", type="integer", nullable=true)
     */
    private $numtipoobjetivo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoUnidad", type="integer", nullable=true)
     */
    private $numtipounidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPeriodo", type="integer", nullable=true)
     */
    private $numtipoperiodo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodos", type="integer", nullable=true)
     */
    private $numperiodos = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_7", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_8", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion8 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_9", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion9 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_10", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_11", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion11 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_12", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion12 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_13", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion13 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_14", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion14 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_15", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion15 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_16", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion16 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_17", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion17 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_18", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion18 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_19", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion19 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_20", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion20 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_21", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion21 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_22", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion22 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_23", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion23 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_24", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion24 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_25", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion25 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_26", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion26 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_27", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion27 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_28", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion28 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_29", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion29 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_30", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion30 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_31", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion31 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_32", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion32 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_33", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion33 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_34", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion34 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_35", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion35 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_36", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion36 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_37", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion37 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_38", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion38 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_39", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion39 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_40", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion40 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_41", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion41 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_42", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion42 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_43", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion43 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_44", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion44 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_45", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion45 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_46", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion46 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_47", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion47 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_48", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion48 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_49", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion49 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_50", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion50 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_51", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion51 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion_52", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion52 = '0';

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
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get numobjetivoplanId
     *
     * @return integer 
     */
    public function getNumobjetivoplanId()
    {
        return $this->numobjetivoplanId;
    }

    /**
     * Set strobjetivoplanKy
     *
     * @param string $strobjetivoplanKy
     * @return Objetivosplanes
     */
    public function setStrobjetivoplanKy($strobjetivoplanKy)
    {
        $this->strobjetivoplanKy = $strobjetivoplanKy;

        return $this;
    }

    /**
     * Get strobjetivoplanKy
     *
     * @return string 
     */
    public function getStrobjetivoplanKy()
    {
        return $this->strobjetivoplanKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Objetivosplanes
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
     * Set numtipoobjetivo
     *
     * @param integer $numtipoobjetivo
     * @return Objetivosplanes
     */
    public function setNumtipoobjetivo($numtipoobjetivo)
    {
        $this->numtipoobjetivo = $numtipoobjetivo;

        return $this;
    }

    /**
     * Get numtipoobjetivo
     *
     * @return integer 
     */
    public function getNumtipoobjetivo()
    {
        return $this->numtipoobjetivo;
    }

    /**
     * Set numtipounidad
     *
     * @param integer $numtipounidad
     * @return Objetivosplanes
     */
    public function setNumtipounidad($numtipounidad)
    {
        $this->numtipounidad = $numtipounidad;

        return $this;
    }

    /**
     * Get numtipounidad
     *
     * @return integer 
     */
    public function getNumtipounidad()
    {
        return $this->numtipounidad;
    }

    /**
     * Set numtipoperiodo
     *
     * @param integer $numtipoperiodo
     * @return Objetivosplanes
     */
    public function setNumtipoperiodo($numtipoperiodo)
    {
        $this->numtipoperiodo = $numtipoperiodo;

        return $this;
    }

    /**
     * Get numtipoperiodo
     *
     * @return integer 
     */
    public function getNumtipoperiodo()
    {
        return $this->numtipoperiodo;
    }

    /**
     * Set numperiodos
     *
     * @param integer $numperiodos
     * @return Objetivosplanes
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
     * Set numfactordistribucion1
     *
     * @param float $numfactordistribucion1
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion1($numfactordistribucion1)
    {
        $this->numfactordistribucion1 = $numfactordistribucion1;

        return $this;
    }

    /**
     * Get numfactordistribucion1
     *
     * @return float 
     */
    public function getNumfactordistribucion1()
    {
        return $this->numfactordistribucion1;
    }

    /**
     * Set numfactordistribucion2
     *
     * @param float $numfactordistribucion2
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion2($numfactordistribucion2)
    {
        $this->numfactordistribucion2 = $numfactordistribucion2;

        return $this;
    }

    /**
     * Get numfactordistribucion2
     *
     * @return float 
     */
    public function getNumfactordistribucion2()
    {
        return $this->numfactordistribucion2;
    }

    /**
     * Set numfactordistribucion3
     *
     * @param float $numfactordistribucion3
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion3($numfactordistribucion3)
    {
        $this->numfactordistribucion3 = $numfactordistribucion3;

        return $this;
    }

    /**
     * Get numfactordistribucion3
     *
     * @return float 
     */
    public function getNumfactordistribucion3()
    {
        return $this->numfactordistribucion3;
    }

    /**
     * Set numfactordistribucion4
     *
     * @param float $numfactordistribucion4
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion4($numfactordistribucion4)
    {
        $this->numfactordistribucion4 = $numfactordistribucion4;

        return $this;
    }

    /**
     * Get numfactordistribucion4
     *
     * @return float 
     */
    public function getNumfactordistribucion4()
    {
        return $this->numfactordistribucion4;
    }

    /**
     * Set numfactordistribucion5
     *
     * @param float $numfactordistribucion5
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion5($numfactordistribucion5)
    {
        $this->numfactordistribucion5 = $numfactordistribucion5;

        return $this;
    }

    /**
     * Get numfactordistribucion5
     *
     * @return float 
     */
    public function getNumfactordistribucion5()
    {
        return $this->numfactordistribucion5;
    }

    /**
     * Set numfactordistribucion6
     *
     * @param float $numfactordistribucion6
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion6($numfactordistribucion6)
    {
        $this->numfactordistribucion6 = $numfactordistribucion6;

        return $this;
    }

    /**
     * Get numfactordistribucion6
     *
     * @return float 
     */
    public function getNumfactordistribucion6()
    {
        return $this->numfactordistribucion6;
    }

    /**
     * Set numfactordistribucion7
     *
     * @param float $numfactordistribucion7
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion7($numfactordistribucion7)
    {
        $this->numfactordistribucion7 = $numfactordistribucion7;

        return $this;
    }

    /**
     * Get numfactordistribucion7
     *
     * @return float 
     */
    public function getNumfactordistribucion7()
    {
        return $this->numfactordistribucion7;
    }

    /**
     * Set numfactordistribucion8
     *
     * @param float $numfactordistribucion8
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion8($numfactordistribucion8)
    {
        $this->numfactordistribucion8 = $numfactordistribucion8;

        return $this;
    }

    /**
     * Get numfactordistribucion8
     *
     * @return float 
     */
    public function getNumfactordistribucion8()
    {
        return $this->numfactordistribucion8;
    }

    /**
     * Set numfactordistribucion9
     *
     * @param float $numfactordistribucion9
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion9($numfactordistribucion9)
    {
        $this->numfactordistribucion9 = $numfactordistribucion9;

        return $this;
    }

    /**
     * Get numfactordistribucion9
     *
     * @return float 
     */
    public function getNumfactordistribucion9()
    {
        return $this->numfactordistribucion9;
    }

    /**
     * Set numfactordistribucion10
     *
     * @param float $numfactordistribucion10
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion10($numfactordistribucion10)
    {
        $this->numfactordistribucion10 = $numfactordistribucion10;

        return $this;
    }

    /**
     * Get numfactordistribucion10
     *
     * @return float 
     */
    public function getNumfactordistribucion10()
    {
        return $this->numfactordistribucion10;
    }

    /**
     * Set numfactordistribucion11
     *
     * @param float $numfactordistribucion11
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion11($numfactordistribucion11)
    {
        $this->numfactordistribucion11 = $numfactordistribucion11;

        return $this;
    }

    /**
     * Get numfactordistribucion11
     *
     * @return float 
     */
    public function getNumfactordistribucion11()
    {
        return $this->numfactordistribucion11;
    }

    /**
     * Set numfactordistribucion12
     *
     * @param float $numfactordistribucion12
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion12($numfactordistribucion12)
    {
        $this->numfactordistribucion12 = $numfactordistribucion12;

        return $this;
    }

    /**
     * Get numfactordistribucion12
     *
     * @return float 
     */
    public function getNumfactordistribucion12()
    {
        return $this->numfactordistribucion12;
    }

    /**
     * Set numfactordistribucion13
     *
     * @param float $numfactordistribucion13
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion13($numfactordistribucion13)
    {
        $this->numfactordistribucion13 = $numfactordistribucion13;

        return $this;
    }

    /**
     * Get numfactordistribucion13
     *
     * @return float 
     */
    public function getNumfactordistribucion13()
    {
        return $this->numfactordistribucion13;
    }

    /**
     * Set numfactordistribucion14
     *
     * @param float $numfactordistribucion14
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion14($numfactordistribucion14)
    {
        $this->numfactordistribucion14 = $numfactordistribucion14;

        return $this;
    }

    /**
     * Get numfactordistribucion14
     *
     * @return float 
     */
    public function getNumfactordistribucion14()
    {
        return $this->numfactordistribucion14;
    }

    /**
     * Set numfactordistribucion15
     *
     * @param float $numfactordistribucion15
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion15($numfactordistribucion15)
    {
        $this->numfactordistribucion15 = $numfactordistribucion15;

        return $this;
    }

    /**
     * Get numfactordistribucion15
     *
     * @return float 
     */
    public function getNumfactordistribucion15()
    {
        return $this->numfactordistribucion15;
    }

    /**
     * Set numfactordistribucion16
     *
     * @param float $numfactordistribucion16
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion16($numfactordistribucion16)
    {
        $this->numfactordistribucion16 = $numfactordistribucion16;

        return $this;
    }

    /**
     * Get numfactordistribucion16
     *
     * @return float 
     */
    public function getNumfactordistribucion16()
    {
        return $this->numfactordistribucion16;
    }

    /**
     * Set numfactordistribucion17
     *
     * @param float $numfactordistribucion17
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion17($numfactordistribucion17)
    {
        $this->numfactordistribucion17 = $numfactordistribucion17;

        return $this;
    }

    /**
     * Get numfactordistribucion17
     *
     * @return float 
     */
    public function getNumfactordistribucion17()
    {
        return $this->numfactordistribucion17;
    }

    /**
     * Set numfactordistribucion18
     *
     * @param float $numfactordistribucion18
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion18($numfactordistribucion18)
    {
        $this->numfactordistribucion18 = $numfactordistribucion18;

        return $this;
    }

    /**
     * Get numfactordistribucion18
     *
     * @return float 
     */
    public function getNumfactordistribucion18()
    {
        return $this->numfactordistribucion18;
    }

    /**
     * Set numfactordistribucion19
     *
     * @param float $numfactordistribucion19
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion19($numfactordistribucion19)
    {
        $this->numfactordistribucion19 = $numfactordistribucion19;

        return $this;
    }

    /**
     * Get numfactordistribucion19
     *
     * @return float 
     */
    public function getNumfactordistribucion19()
    {
        return $this->numfactordistribucion19;
    }

    /**
     * Set numfactordistribucion20
     *
     * @param float $numfactordistribucion20
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion20($numfactordistribucion20)
    {
        $this->numfactordistribucion20 = $numfactordistribucion20;

        return $this;
    }

    /**
     * Get numfactordistribucion20
     *
     * @return float 
     */
    public function getNumfactordistribucion20()
    {
        return $this->numfactordistribucion20;
    }

    /**
     * Set numfactordistribucion21
     *
     * @param float $numfactordistribucion21
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion21($numfactordistribucion21)
    {
        $this->numfactordistribucion21 = $numfactordistribucion21;

        return $this;
    }

    /**
     * Get numfactordistribucion21
     *
     * @return float 
     */
    public function getNumfactordistribucion21()
    {
        return $this->numfactordistribucion21;
    }

    /**
     * Set numfactordistribucion22
     *
     * @param float $numfactordistribucion22
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion22($numfactordistribucion22)
    {
        $this->numfactordistribucion22 = $numfactordistribucion22;

        return $this;
    }

    /**
     * Get numfactordistribucion22
     *
     * @return float 
     */
    public function getNumfactordistribucion22()
    {
        return $this->numfactordistribucion22;
    }

    /**
     * Set numfactordistribucion23
     *
     * @param float $numfactordistribucion23
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion23($numfactordistribucion23)
    {
        $this->numfactordistribucion23 = $numfactordistribucion23;

        return $this;
    }

    /**
     * Get numfactordistribucion23
     *
     * @return float 
     */
    public function getNumfactordistribucion23()
    {
        return $this->numfactordistribucion23;
    }

    /**
     * Set numfactordistribucion24
     *
     * @param float $numfactordistribucion24
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion24($numfactordistribucion24)
    {
        $this->numfactordistribucion24 = $numfactordistribucion24;

        return $this;
    }

    /**
     * Get numfactordistribucion24
     *
     * @return float 
     */
    public function getNumfactordistribucion24()
    {
        return $this->numfactordistribucion24;
    }

    /**
     * Set numfactordistribucion25
     *
     * @param float $numfactordistribucion25
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion25($numfactordistribucion25)
    {
        $this->numfactordistribucion25 = $numfactordistribucion25;

        return $this;
    }

    /**
     * Get numfactordistribucion25
     *
     * @return float 
     */
    public function getNumfactordistribucion25()
    {
        return $this->numfactordistribucion25;
    }

    /**
     * Set numfactordistribucion26
     *
     * @param float $numfactordistribucion26
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion26($numfactordistribucion26)
    {
        $this->numfactordistribucion26 = $numfactordistribucion26;

        return $this;
    }

    /**
     * Get numfactordistribucion26
     *
     * @return float 
     */
    public function getNumfactordistribucion26()
    {
        return $this->numfactordistribucion26;
    }

    /**
     * Set numfactordistribucion27
     *
     * @param float $numfactordistribucion27
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion27($numfactordistribucion27)
    {
        $this->numfactordistribucion27 = $numfactordistribucion27;

        return $this;
    }

    /**
     * Get numfactordistribucion27
     *
     * @return float 
     */
    public function getNumfactordistribucion27()
    {
        return $this->numfactordistribucion27;
    }

    /**
     * Set numfactordistribucion28
     *
     * @param float $numfactordistribucion28
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion28($numfactordistribucion28)
    {
        $this->numfactordistribucion28 = $numfactordistribucion28;

        return $this;
    }

    /**
     * Get numfactordistribucion28
     *
     * @return float 
     */
    public function getNumfactordistribucion28()
    {
        return $this->numfactordistribucion28;
    }

    /**
     * Set numfactordistribucion29
     *
     * @param float $numfactordistribucion29
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion29($numfactordistribucion29)
    {
        $this->numfactordistribucion29 = $numfactordistribucion29;

        return $this;
    }

    /**
     * Get numfactordistribucion29
     *
     * @return float 
     */
    public function getNumfactordistribucion29()
    {
        return $this->numfactordistribucion29;
    }

    /**
     * Set numfactordistribucion30
     *
     * @param float $numfactordistribucion30
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion30($numfactordistribucion30)
    {
        $this->numfactordistribucion30 = $numfactordistribucion30;

        return $this;
    }

    /**
     * Get numfactordistribucion30
     *
     * @return float 
     */
    public function getNumfactordistribucion30()
    {
        return $this->numfactordistribucion30;
    }

    /**
     * Set numfactordistribucion31
     *
     * @param float $numfactordistribucion31
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion31($numfactordistribucion31)
    {
        $this->numfactordistribucion31 = $numfactordistribucion31;

        return $this;
    }

    /**
     * Get numfactordistribucion31
     *
     * @return float 
     */
    public function getNumfactordistribucion31()
    {
        return $this->numfactordistribucion31;
    }

    /**
     * Set numfactordistribucion32
     *
     * @param float $numfactordistribucion32
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion32($numfactordistribucion32)
    {
        $this->numfactordistribucion32 = $numfactordistribucion32;

        return $this;
    }

    /**
     * Get numfactordistribucion32
     *
     * @return float 
     */
    public function getNumfactordistribucion32()
    {
        return $this->numfactordistribucion32;
    }

    /**
     * Set numfactordistribucion33
     *
     * @param float $numfactordistribucion33
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion33($numfactordistribucion33)
    {
        $this->numfactordistribucion33 = $numfactordistribucion33;

        return $this;
    }

    /**
     * Get numfactordistribucion33
     *
     * @return float 
     */
    public function getNumfactordistribucion33()
    {
        return $this->numfactordistribucion33;
    }

    /**
     * Set numfactordistribucion34
     *
     * @param float $numfactordistribucion34
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion34($numfactordistribucion34)
    {
        $this->numfactordistribucion34 = $numfactordistribucion34;

        return $this;
    }

    /**
     * Get numfactordistribucion34
     *
     * @return float 
     */
    public function getNumfactordistribucion34()
    {
        return $this->numfactordistribucion34;
    }

    /**
     * Set numfactordistribucion35
     *
     * @param float $numfactordistribucion35
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion35($numfactordistribucion35)
    {
        $this->numfactordistribucion35 = $numfactordistribucion35;

        return $this;
    }

    /**
     * Get numfactordistribucion35
     *
     * @return float 
     */
    public function getNumfactordistribucion35()
    {
        return $this->numfactordistribucion35;
    }

    /**
     * Set numfactordistribucion36
     *
     * @param float $numfactordistribucion36
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion36($numfactordistribucion36)
    {
        $this->numfactordistribucion36 = $numfactordistribucion36;

        return $this;
    }

    /**
     * Get numfactordistribucion36
     *
     * @return float 
     */
    public function getNumfactordistribucion36()
    {
        return $this->numfactordistribucion36;
    }

    /**
     * Set numfactordistribucion37
     *
     * @param float $numfactordistribucion37
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion37($numfactordistribucion37)
    {
        $this->numfactordistribucion37 = $numfactordistribucion37;

        return $this;
    }

    /**
     * Get numfactordistribucion37
     *
     * @return float 
     */
    public function getNumfactordistribucion37()
    {
        return $this->numfactordistribucion37;
    }

    /**
     * Set numfactordistribucion38
     *
     * @param float $numfactordistribucion38
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion38($numfactordistribucion38)
    {
        $this->numfactordistribucion38 = $numfactordistribucion38;

        return $this;
    }

    /**
     * Get numfactordistribucion38
     *
     * @return float 
     */
    public function getNumfactordistribucion38()
    {
        return $this->numfactordistribucion38;
    }

    /**
     * Set numfactordistribucion39
     *
     * @param float $numfactordistribucion39
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion39($numfactordistribucion39)
    {
        $this->numfactordistribucion39 = $numfactordistribucion39;

        return $this;
    }

    /**
     * Get numfactordistribucion39
     *
     * @return float 
     */
    public function getNumfactordistribucion39()
    {
        return $this->numfactordistribucion39;
    }

    /**
     * Set numfactordistribucion40
     *
     * @param float $numfactordistribucion40
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion40($numfactordistribucion40)
    {
        $this->numfactordistribucion40 = $numfactordistribucion40;

        return $this;
    }

    /**
     * Get numfactordistribucion40
     *
     * @return float 
     */
    public function getNumfactordistribucion40()
    {
        return $this->numfactordistribucion40;
    }

    /**
     * Set numfactordistribucion41
     *
     * @param float $numfactordistribucion41
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion41($numfactordistribucion41)
    {
        $this->numfactordistribucion41 = $numfactordistribucion41;

        return $this;
    }

    /**
     * Get numfactordistribucion41
     *
     * @return float 
     */
    public function getNumfactordistribucion41()
    {
        return $this->numfactordistribucion41;
    }

    /**
     * Set numfactordistribucion42
     *
     * @param float $numfactordistribucion42
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion42($numfactordistribucion42)
    {
        $this->numfactordistribucion42 = $numfactordistribucion42;

        return $this;
    }

    /**
     * Get numfactordistribucion42
     *
     * @return float 
     */
    public function getNumfactordistribucion42()
    {
        return $this->numfactordistribucion42;
    }

    /**
     * Set numfactordistribucion43
     *
     * @param float $numfactordistribucion43
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion43($numfactordistribucion43)
    {
        $this->numfactordistribucion43 = $numfactordistribucion43;

        return $this;
    }

    /**
     * Get numfactordistribucion43
     *
     * @return float 
     */
    public function getNumfactordistribucion43()
    {
        return $this->numfactordistribucion43;
    }

    /**
     * Set numfactordistribucion44
     *
     * @param float $numfactordistribucion44
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion44($numfactordistribucion44)
    {
        $this->numfactordistribucion44 = $numfactordistribucion44;

        return $this;
    }

    /**
     * Get numfactordistribucion44
     *
     * @return float 
     */
    public function getNumfactordistribucion44()
    {
        return $this->numfactordistribucion44;
    }

    /**
     * Set numfactordistribucion45
     *
     * @param float $numfactordistribucion45
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion45($numfactordistribucion45)
    {
        $this->numfactordistribucion45 = $numfactordistribucion45;

        return $this;
    }

    /**
     * Get numfactordistribucion45
     *
     * @return float 
     */
    public function getNumfactordistribucion45()
    {
        return $this->numfactordistribucion45;
    }

    /**
     * Set numfactordistribucion46
     *
     * @param float $numfactordistribucion46
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion46($numfactordistribucion46)
    {
        $this->numfactordistribucion46 = $numfactordistribucion46;

        return $this;
    }

    /**
     * Get numfactordistribucion46
     *
     * @return float 
     */
    public function getNumfactordistribucion46()
    {
        return $this->numfactordistribucion46;
    }

    /**
     * Set numfactordistribucion47
     *
     * @param float $numfactordistribucion47
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion47($numfactordistribucion47)
    {
        $this->numfactordistribucion47 = $numfactordistribucion47;

        return $this;
    }

    /**
     * Get numfactordistribucion47
     *
     * @return float 
     */
    public function getNumfactordistribucion47()
    {
        return $this->numfactordistribucion47;
    }

    /**
     * Set numfactordistribucion48
     *
     * @param float $numfactordistribucion48
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion48($numfactordistribucion48)
    {
        $this->numfactordistribucion48 = $numfactordistribucion48;

        return $this;
    }

    /**
     * Get numfactordistribucion48
     *
     * @return float 
     */
    public function getNumfactordistribucion48()
    {
        return $this->numfactordistribucion48;
    }

    /**
     * Set numfactordistribucion49
     *
     * @param float $numfactordistribucion49
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion49($numfactordistribucion49)
    {
        $this->numfactordistribucion49 = $numfactordistribucion49;

        return $this;
    }

    /**
     * Get numfactordistribucion49
     *
     * @return float 
     */
    public function getNumfactordistribucion49()
    {
        return $this->numfactordistribucion49;
    }

    /**
     * Set numfactordistribucion50
     *
     * @param float $numfactordistribucion50
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion50($numfactordistribucion50)
    {
        $this->numfactordistribucion50 = $numfactordistribucion50;

        return $this;
    }

    /**
     * Get numfactordistribucion50
     *
     * @return float 
     */
    public function getNumfactordistribucion50()
    {
        return $this->numfactordistribucion50;
    }

    /**
     * Set numfactordistribucion51
     *
     * @param float $numfactordistribucion51
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion51($numfactordistribucion51)
    {
        $this->numfactordistribucion51 = $numfactordistribucion51;

        return $this;
    }

    /**
     * Get numfactordistribucion51
     *
     * @return float 
     */
    public function getNumfactordistribucion51()
    {
        return $this->numfactordistribucion51;
    }

    /**
     * Set numfactordistribucion52
     *
     * @param float $numfactordistribucion52
     * @return Objetivosplanes
     */
    public function setNumfactordistribucion52($numfactordistribucion52)
    {
        $this->numfactordistribucion52 = $numfactordistribucion52;

        return $this;
    }

    /**
     * Get numfactordistribucion52
     *
     * @return float 
     */
    public function getNumfactordistribucion52()
    {
        return $this->numfactordistribucion52;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Objetivosplanes
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
     * @return Objetivosplanes
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
     * @return Objetivosplanes
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
     * @return Objetivosplanes
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
     * @return Objetivosplanes
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
     * @return Objetivosplanes
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
