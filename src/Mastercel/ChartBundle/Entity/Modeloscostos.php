<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modeloscostos
 *
 * @ORM\Table(name="ModelosCostos", indexes={@ORM\Index(name="Indice_1", columns={"DteActualizacion"}), @ORM\Index(name="Indice_2", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Modeloscostos
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
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numempresaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrModelo_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strmodeloKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodo_id", type="integer", nullable=true)
     */
    private $numperiodoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_0", type="integer", nullable=true)
     */
    private $numcosto0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_1", type="integer", nullable=true)
     */
    private $numcosto1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_2", type="integer", nullable=true)
     */
    private $numcosto2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_3", type="integer", nullable=true)
     */
    private $numcosto3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_4", type="integer", nullable=true)
     */
    private $numcosto4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_5", type="integer", nullable=true)
     */
    private $numcosto5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_6", type="integer", nullable=true)
     */
    private $numcosto6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_7", type="integer", nullable=true)
     */
    private $numcosto7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_8", type="integer", nullable=true)
     */
    private $numcosto8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_9", type="integer", nullable=true)
     */
    private $numcosto9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_10", type="integer", nullable=true)
     */
    private $numcosto10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_11", type="integer", nullable=true)
     */
    private $numcosto11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_12", type="integer", nullable=true)
     */
    private $numcosto12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_13", type="integer", nullable=true)
     */
    private $numcosto13 = '0';

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
     * @return Modeloscostos
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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Modeloscostos
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
     * Set strmodeloKy
     *
     * @param string $strmodeloKy
     * @return Modeloscostos
     */
    public function setStrmodeloKy($strmodeloKy)
    {
        $this->strmodeloKy = $strmodeloKy;

        return $this;
    }

    /**
     * Get strmodeloKy
     *
     * @return string 
     */
    public function getStrmodeloKy()
    {
        return $this->strmodeloKy;
    }

    /**
     * Set numperiodoId
     *
     * @param integer $numperiodoId
     * @return Modeloscostos
     */
    public function setNumperiodoId($numperiodoId)
    {
        $this->numperiodoId = $numperiodoId;

        return $this;
    }

    /**
     * Get numperiodoId
     *
     * @return integer 
     */
    public function getNumperiodoId()
    {
        return $this->numperiodoId;
    }

    /**
     * Set numcosto0
     *
     * @param integer $numcosto0
     * @return Modeloscostos
     */
    public function setNumcosto0($numcosto0)
    {
        $this->numcosto0 = $numcosto0;

        return $this;
    }

    /**
     * Get numcosto0
     *
     * @return integer 
     */
    public function getNumcosto0()
    {
        return $this->numcosto0;
    }

    /**
     * Set numcosto1
     *
     * @param integer $numcosto1
     * @return Modeloscostos
     */
    public function setNumcosto1($numcosto1)
    {
        $this->numcosto1 = $numcosto1;

        return $this;
    }

    /**
     * Get numcosto1
     *
     * @return integer 
     */
    public function getNumcosto1()
    {
        return $this->numcosto1;
    }

    /**
     * Set numcosto2
     *
     * @param integer $numcosto2
     * @return Modeloscostos
     */
    public function setNumcosto2($numcosto2)
    {
        $this->numcosto2 = $numcosto2;

        return $this;
    }

    /**
     * Get numcosto2
     *
     * @return integer 
     */
    public function getNumcosto2()
    {
        return $this->numcosto2;
    }

    /**
     * Set numcosto3
     *
     * @param integer $numcosto3
     * @return Modeloscostos
     */
    public function setNumcosto3($numcosto3)
    {
        $this->numcosto3 = $numcosto3;

        return $this;
    }

    /**
     * Get numcosto3
     *
     * @return integer 
     */
    public function getNumcosto3()
    {
        return $this->numcosto3;
    }

    /**
     * Set numcosto4
     *
     * @param integer $numcosto4
     * @return Modeloscostos
     */
    public function setNumcosto4($numcosto4)
    {
        $this->numcosto4 = $numcosto4;

        return $this;
    }

    /**
     * Get numcosto4
     *
     * @return integer 
     */
    public function getNumcosto4()
    {
        return $this->numcosto4;
    }

    /**
     * Set numcosto5
     *
     * @param integer $numcosto5
     * @return Modeloscostos
     */
    public function setNumcosto5($numcosto5)
    {
        $this->numcosto5 = $numcosto5;

        return $this;
    }

    /**
     * Get numcosto5
     *
     * @return integer 
     */
    public function getNumcosto5()
    {
        return $this->numcosto5;
    }

    /**
     * Set numcosto6
     *
     * @param integer $numcosto6
     * @return Modeloscostos
     */
    public function setNumcosto6($numcosto6)
    {
        $this->numcosto6 = $numcosto6;

        return $this;
    }

    /**
     * Get numcosto6
     *
     * @return integer 
     */
    public function getNumcosto6()
    {
        return $this->numcosto6;
    }

    /**
     * Set numcosto7
     *
     * @param integer $numcosto7
     * @return Modeloscostos
     */
    public function setNumcosto7($numcosto7)
    {
        $this->numcosto7 = $numcosto7;

        return $this;
    }

    /**
     * Get numcosto7
     *
     * @return integer 
     */
    public function getNumcosto7()
    {
        return $this->numcosto7;
    }

    /**
     * Set numcosto8
     *
     * @param integer $numcosto8
     * @return Modeloscostos
     */
    public function setNumcosto8($numcosto8)
    {
        $this->numcosto8 = $numcosto8;

        return $this;
    }

    /**
     * Get numcosto8
     *
     * @return integer 
     */
    public function getNumcosto8()
    {
        return $this->numcosto8;
    }

    /**
     * Set numcosto9
     *
     * @param integer $numcosto9
     * @return Modeloscostos
     */
    public function setNumcosto9($numcosto9)
    {
        $this->numcosto9 = $numcosto9;

        return $this;
    }

    /**
     * Get numcosto9
     *
     * @return integer 
     */
    public function getNumcosto9()
    {
        return $this->numcosto9;
    }

    /**
     * Set numcosto10
     *
     * @param integer $numcosto10
     * @return Modeloscostos
     */
    public function setNumcosto10($numcosto10)
    {
        $this->numcosto10 = $numcosto10;

        return $this;
    }

    /**
     * Get numcosto10
     *
     * @return integer 
     */
    public function getNumcosto10()
    {
        return $this->numcosto10;
    }

    /**
     * Set numcosto11
     *
     * @param integer $numcosto11
     * @return Modeloscostos
     */
    public function setNumcosto11($numcosto11)
    {
        $this->numcosto11 = $numcosto11;

        return $this;
    }

    /**
     * Get numcosto11
     *
     * @return integer 
     */
    public function getNumcosto11()
    {
        return $this->numcosto11;
    }

    /**
     * Set numcosto12
     *
     * @param integer $numcosto12
     * @return Modeloscostos
     */
    public function setNumcosto12($numcosto12)
    {
        $this->numcosto12 = $numcosto12;

        return $this;
    }

    /**
     * Get numcosto12
     *
     * @return integer 
     */
    public function getNumcosto12()
    {
        return $this->numcosto12;
    }

    /**
     * Set numcosto13
     *
     * @param integer $numcosto13
     * @return Modeloscostos
     */
    public function setNumcosto13($numcosto13)
    {
        $this->numcosto13 = $numcosto13;

        return $this;
    }

    /**
     * Get numcosto13
     *
     * @return integer 
     */
    public function getNumcosto13()
    {
        return $this->numcosto13;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Modeloscostos
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
     * @return Modeloscostos
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
     * @return Modeloscostos
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
     * @return Modeloscostos
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
     * @return Modeloscostos
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
