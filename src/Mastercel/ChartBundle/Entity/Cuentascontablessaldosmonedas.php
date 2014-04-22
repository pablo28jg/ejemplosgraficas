<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontablessaldosmonedas
 *
 * @ORM\Table(name="CuentasContablesSaldosMonedas", indexes={@ORM\Index(name="Indice_1", columns={"NumEjercicio_id", "NumEmpresa_id", "NumCentroControl_id", "StrCuenta_ky", "NumMoneda_id"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Cuentascontablessaldosmonedas
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
     * @ORM\Column(name="StrCuenta_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strcuentaKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nummonedaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodoInicial", type="integer", nullable=true)
     */
    private $numperiodoinicial = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldoInicial_MN", type="integer", nullable=true)
     */
    private $numsaldoinicialMn = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldoInicial_ME", type="integer", nullable=true)
     */
    private $numsaldoinicialMe = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_1", type="integer", nullable=true)
     */
    private $numsaldoPerMn1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_2", type="integer", nullable=true)
     */
    private $numsaldoPerMn2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_3", type="integer", nullable=true)
     */
    private $numsaldoPerMn3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_4", type="integer", nullable=true)
     */
    private $numsaldoPerMn4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_5", type="integer", nullable=true)
     */
    private $numsaldoPerMn5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_6", type="integer", nullable=true)
     */
    private $numsaldoPerMn6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_7", type="integer", nullable=true)
     */
    private $numsaldoPerMn7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_8", type="integer", nullable=true)
     */
    private $numsaldoPerMn8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_9", type="integer", nullable=true)
     */
    private $numsaldoPerMn9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_10", type="integer", nullable=true)
     */
    private $numsaldoPerMn10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_11", type="integer", nullable=true)
     */
    private $numsaldoPerMn11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_12", type="integer", nullable=true)
     */
    private $numsaldoPerMn12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_MN_13", type="integer", nullable=true)
     */
    private $numsaldoPerMn13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_1", type="integer", nullable=true)
     */
    private $numsaldoEapMn1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_2", type="integer", nullable=true)
     */
    private $numsaldoEapMn2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_3", type="integer", nullable=true)
     */
    private $numsaldoEapMn3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_4", type="integer", nullable=true)
     */
    private $numsaldoEapMn4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_5", type="integer", nullable=true)
     */
    private $numsaldoEapMn5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_6", type="integer", nullable=true)
     */
    private $numsaldoEapMn6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_7", type="integer", nullable=true)
     */
    private $numsaldoEapMn7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_8", type="integer", nullable=true)
     */
    private $numsaldoEapMn8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_9", type="integer", nullable=true)
     */
    private $numsaldoEapMn9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_10", type="integer", nullable=true)
     */
    private $numsaldoEapMn10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_11", type="integer", nullable=true)
     */
    private $numsaldoEapMn11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_12", type="integer", nullable=true)
     */
    private $numsaldoEapMn12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_MN_13", type="integer", nullable=true)
     */
    private $numsaldoEapMn13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_1", type="integer", nullable=true)
     */
    private $numsaldoPerMe1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_2", type="integer", nullable=true)
     */
    private $numsaldoPerMe2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_3", type="integer", nullable=true)
     */
    private $numsaldoPerMe3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_4", type="integer", nullable=true)
     */
    private $numsaldoPerMe4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_5", type="integer", nullable=true)
     */
    private $numsaldoPerMe5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_6", type="integer", nullable=true)
     */
    private $numsaldoPerMe6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_7", type="integer", nullable=true)
     */
    private $numsaldoPerMe7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_8", type="integer", nullable=true)
     */
    private $numsaldoPerMe8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_9", type="integer", nullable=true)
     */
    private $numsaldoPerMe9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_10", type="integer", nullable=true)
     */
    private $numsaldoPerMe10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_11", type="integer", nullable=true)
     */
    private $numsaldoPerMe11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_12", type="integer", nullable=true)
     */
    private $numsaldoPerMe12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_ME_13", type="integer", nullable=true)
     */
    private $numsaldoPerMe13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_1", type="integer", nullable=true)
     */
    private $numsaldoEapMe1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_2", type="integer", nullable=true)
     */
    private $numsaldoEapMe2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_3", type="integer", nullable=true)
     */
    private $numsaldoEapMe3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_4", type="integer", nullable=true)
     */
    private $numsaldoEapMe4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_5", type="integer", nullable=true)
     */
    private $numsaldoEapMe5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_6", type="integer", nullable=true)
     */
    private $numsaldoEapMe6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_7", type="integer", nullable=true)
     */
    private $numsaldoEapMe7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_8", type="integer", nullable=true)
     */
    private $numsaldoEapMe8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_9", type="integer", nullable=true)
     */
    private $numsaldoEapMe9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_10", type="integer", nullable=true)
     */
    private $numsaldoEapMe10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_11", type="integer", nullable=true)
     */
    private $numsaldoEapMe11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_12", type="integer", nullable=true)
     */
    private $numsaldoEapMe12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_ME_13", type="integer", nullable=true)
     */
    private $numsaldoEapMe13 = '0';

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
     * @return Cuentascontablessaldosmonedas
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
     * @return Cuentascontablessaldosmonedas
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
     * Set strcuentaKy
     *
     * @param string $strcuentaKy
     * @return Cuentascontablessaldosmonedas
     */
    public function setStrcuentaKy($strcuentaKy)
    {
        $this->strcuentaKy = $strcuentaKy;

        return $this;
    }

    /**
     * Get strcuentaKy
     *
     * @return string 
     */
    public function getStrcuentaKy()
    {
        return $this->strcuentaKy;
    }

    /**
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Cuentascontablessaldosmonedas
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
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Cuentascontablessaldosmonedas
     */
    public function setNummonedaId($nummonedaId)
    {
        $this->nummonedaId = $nummonedaId;

        return $this;
    }

    /**
     * Get nummonedaId
     *
     * @return integer 
     */
    public function getNummonedaId()
    {
        return $this->nummonedaId;
    }

    /**
     * Set numperiodoinicial
     *
     * @param integer $numperiodoinicial
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumperiodoinicial($numperiodoinicial)
    {
        $this->numperiodoinicial = $numperiodoinicial;

        return $this;
    }

    /**
     * Get numperiodoinicial
     *
     * @return integer 
     */
    public function getNumperiodoinicial()
    {
        return $this->numperiodoinicial;
    }

    /**
     * Set numsaldoinicialMn
     *
     * @param integer $numsaldoinicialMn
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoinicialMn($numsaldoinicialMn)
    {
        $this->numsaldoinicialMn = $numsaldoinicialMn;

        return $this;
    }

    /**
     * Get numsaldoinicialMn
     *
     * @return integer 
     */
    public function getNumsaldoinicialMn()
    {
        return $this->numsaldoinicialMn;
    }

    /**
     * Set numsaldoinicialMe
     *
     * @param integer $numsaldoinicialMe
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoinicialMe($numsaldoinicialMe)
    {
        $this->numsaldoinicialMe = $numsaldoinicialMe;

        return $this;
    }

    /**
     * Get numsaldoinicialMe
     *
     * @return integer 
     */
    public function getNumsaldoinicialMe()
    {
        return $this->numsaldoinicialMe;
    }

    /**
     * Set numsaldoPerMn1
     *
     * @param integer $numsaldoPerMn1
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn1($numsaldoPerMn1)
    {
        $this->numsaldoPerMn1 = $numsaldoPerMn1;

        return $this;
    }

    /**
     * Get numsaldoPerMn1
     *
     * @return integer 
     */
    public function getNumsaldoPerMn1()
    {
        return $this->numsaldoPerMn1;
    }

    /**
     * Set numsaldoPerMn2
     *
     * @param integer $numsaldoPerMn2
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn2($numsaldoPerMn2)
    {
        $this->numsaldoPerMn2 = $numsaldoPerMn2;

        return $this;
    }

    /**
     * Get numsaldoPerMn2
     *
     * @return integer 
     */
    public function getNumsaldoPerMn2()
    {
        return $this->numsaldoPerMn2;
    }

    /**
     * Set numsaldoPerMn3
     *
     * @param integer $numsaldoPerMn3
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn3($numsaldoPerMn3)
    {
        $this->numsaldoPerMn3 = $numsaldoPerMn3;

        return $this;
    }

    /**
     * Get numsaldoPerMn3
     *
     * @return integer 
     */
    public function getNumsaldoPerMn3()
    {
        return $this->numsaldoPerMn3;
    }

    /**
     * Set numsaldoPerMn4
     *
     * @param integer $numsaldoPerMn4
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn4($numsaldoPerMn4)
    {
        $this->numsaldoPerMn4 = $numsaldoPerMn4;

        return $this;
    }

    /**
     * Get numsaldoPerMn4
     *
     * @return integer 
     */
    public function getNumsaldoPerMn4()
    {
        return $this->numsaldoPerMn4;
    }

    /**
     * Set numsaldoPerMn5
     *
     * @param integer $numsaldoPerMn5
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn5($numsaldoPerMn5)
    {
        $this->numsaldoPerMn5 = $numsaldoPerMn5;

        return $this;
    }

    /**
     * Get numsaldoPerMn5
     *
     * @return integer 
     */
    public function getNumsaldoPerMn5()
    {
        return $this->numsaldoPerMn5;
    }

    /**
     * Set numsaldoPerMn6
     *
     * @param integer $numsaldoPerMn6
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn6($numsaldoPerMn6)
    {
        $this->numsaldoPerMn6 = $numsaldoPerMn6;

        return $this;
    }

    /**
     * Get numsaldoPerMn6
     *
     * @return integer 
     */
    public function getNumsaldoPerMn6()
    {
        return $this->numsaldoPerMn6;
    }

    /**
     * Set numsaldoPerMn7
     *
     * @param integer $numsaldoPerMn7
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn7($numsaldoPerMn7)
    {
        $this->numsaldoPerMn7 = $numsaldoPerMn7;

        return $this;
    }

    /**
     * Get numsaldoPerMn7
     *
     * @return integer 
     */
    public function getNumsaldoPerMn7()
    {
        return $this->numsaldoPerMn7;
    }

    /**
     * Set numsaldoPerMn8
     *
     * @param integer $numsaldoPerMn8
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn8($numsaldoPerMn8)
    {
        $this->numsaldoPerMn8 = $numsaldoPerMn8;

        return $this;
    }

    /**
     * Get numsaldoPerMn8
     *
     * @return integer 
     */
    public function getNumsaldoPerMn8()
    {
        return $this->numsaldoPerMn8;
    }

    /**
     * Set numsaldoPerMn9
     *
     * @param integer $numsaldoPerMn9
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn9($numsaldoPerMn9)
    {
        $this->numsaldoPerMn9 = $numsaldoPerMn9;

        return $this;
    }

    /**
     * Get numsaldoPerMn9
     *
     * @return integer 
     */
    public function getNumsaldoPerMn9()
    {
        return $this->numsaldoPerMn9;
    }

    /**
     * Set numsaldoPerMn10
     *
     * @param integer $numsaldoPerMn10
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn10($numsaldoPerMn10)
    {
        $this->numsaldoPerMn10 = $numsaldoPerMn10;

        return $this;
    }

    /**
     * Get numsaldoPerMn10
     *
     * @return integer 
     */
    public function getNumsaldoPerMn10()
    {
        return $this->numsaldoPerMn10;
    }

    /**
     * Set numsaldoPerMn11
     *
     * @param integer $numsaldoPerMn11
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn11($numsaldoPerMn11)
    {
        $this->numsaldoPerMn11 = $numsaldoPerMn11;

        return $this;
    }

    /**
     * Get numsaldoPerMn11
     *
     * @return integer 
     */
    public function getNumsaldoPerMn11()
    {
        return $this->numsaldoPerMn11;
    }

    /**
     * Set numsaldoPerMn12
     *
     * @param integer $numsaldoPerMn12
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn12($numsaldoPerMn12)
    {
        $this->numsaldoPerMn12 = $numsaldoPerMn12;

        return $this;
    }

    /**
     * Get numsaldoPerMn12
     *
     * @return integer 
     */
    public function getNumsaldoPerMn12()
    {
        return $this->numsaldoPerMn12;
    }

    /**
     * Set numsaldoPerMn13
     *
     * @param integer $numsaldoPerMn13
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMn13($numsaldoPerMn13)
    {
        $this->numsaldoPerMn13 = $numsaldoPerMn13;

        return $this;
    }

    /**
     * Get numsaldoPerMn13
     *
     * @return integer 
     */
    public function getNumsaldoPerMn13()
    {
        return $this->numsaldoPerMn13;
    }

    /**
     * Set numsaldoEapMn1
     *
     * @param integer $numsaldoEapMn1
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn1($numsaldoEapMn1)
    {
        $this->numsaldoEapMn1 = $numsaldoEapMn1;

        return $this;
    }

    /**
     * Get numsaldoEapMn1
     *
     * @return integer 
     */
    public function getNumsaldoEapMn1()
    {
        return $this->numsaldoEapMn1;
    }

    /**
     * Set numsaldoEapMn2
     *
     * @param integer $numsaldoEapMn2
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn2($numsaldoEapMn2)
    {
        $this->numsaldoEapMn2 = $numsaldoEapMn2;

        return $this;
    }

    /**
     * Get numsaldoEapMn2
     *
     * @return integer 
     */
    public function getNumsaldoEapMn2()
    {
        return $this->numsaldoEapMn2;
    }

    /**
     * Set numsaldoEapMn3
     *
     * @param integer $numsaldoEapMn3
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn3($numsaldoEapMn3)
    {
        $this->numsaldoEapMn3 = $numsaldoEapMn3;

        return $this;
    }

    /**
     * Get numsaldoEapMn3
     *
     * @return integer 
     */
    public function getNumsaldoEapMn3()
    {
        return $this->numsaldoEapMn3;
    }

    /**
     * Set numsaldoEapMn4
     *
     * @param integer $numsaldoEapMn4
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn4($numsaldoEapMn4)
    {
        $this->numsaldoEapMn4 = $numsaldoEapMn4;

        return $this;
    }

    /**
     * Get numsaldoEapMn4
     *
     * @return integer 
     */
    public function getNumsaldoEapMn4()
    {
        return $this->numsaldoEapMn4;
    }

    /**
     * Set numsaldoEapMn5
     *
     * @param integer $numsaldoEapMn5
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn5($numsaldoEapMn5)
    {
        $this->numsaldoEapMn5 = $numsaldoEapMn5;

        return $this;
    }

    /**
     * Get numsaldoEapMn5
     *
     * @return integer 
     */
    public function getNumsaldoEapMn5()
    {
        return $this->numsaldoEapMn5;
    }

    /**
     * Set numsaldoEapMn6
     *
     * @param integer $numsaldoEapMn6
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn6($numsaldoEapMn6)
    {
        $this->numsaldoEapMn6 = $numsaldoEapMn6;

        return $this;
    }

    /**
     * Get numsaldoEapMn6
     *
     * @return integer 
     */
    public function getNumsaldoEapMn6()
    {
        return $this->numsaldoEapMn6;
    }

    /**
     * Set numsaldoEapMn7
     *
     * @param integer $numsaldoEapMn7
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn7($numsaldoEapMn7)
    {
        $this->numsaldoEapMn7 = $numsaldoEapMn7;

        return $this;
    }

    /**
     * Get numsaldoEapMn7
     *
     * @return integer 
     */
    public function getNumsaldoEapMn7()
    {
        return $this->numsaldoEapMn7;
    }

    /**
     * Set numsaldoEapMn8
     *
     * @param integer $numsaldoEapMn8
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn8($numsaldoEapMn8)
    {
        $this->numsaldoEapMn8 = $numsaldoEapMn8;

        return $this;
    }

    /**
     * Get numsaldoEapMn8
     *
     * @return integer 
     */
    public function getNumsaldoEapMn8()
    {
        return $this->numsaldoEapMn8;
    }

    /**
     * Set numsaldoEapMn9
     *
     * @param integer $numsaldoEapMn9
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn9($numsaldoEapMn9)
    {
        $this->numsaldoEapMn9 = $numsaldoEapMn9;

        return $this;
    }

    /**
     * Get numsaldoEapMn9
     *
     * @return integer 
     */
    public function getNumsaldoEapMn9()
    {
        return $this->numsaldoEapMn9;
    }

    /**
     * Set numsaldoEapMn10
     *
     * @param integer $numsaldoEapMn10
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn10($numsaldoEapMn10)
    {
        $this->numsaldoEapMn10 = $numsaldoEapMn10;

        return $this;
    }

    /**
     * Get numsaldoEapMn10
     *
     * @return integer 
     */
    public function getNumsaldoEapMn10()
    {
        return $this->numsaldoEapMn10;
    }

    /**
     * Set numsaldoEapMn11
     *
     * @param integer $numsaldoEapMn11
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn11($numsaldoEapMn11)
    {
        $this->numsaldoEapMn11 = $numsaldoEapMn11;

        return $this;
    }

    /**
     * Get numsaldoEapMn11
     *
     * @return integer 
     */
    public function getNumsaldoEapMn11()
    {
        return $this->numsaldoEapMn11;
    }

    /**
     * Set numsaldoEapMn12
     *
     * @param integer $numsaldoEapMn12
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn12($numsaldoEapMn12)
    {
        $this->numsaldoEapMn12 = $numsaldoEapMn12;

        return $this;
    }

    /**
     * Get numsaldoEapMn12
     *
     * @return integer 
     */
    public function getNumsaldoEapMn12()
    {
        return $this->numsaldoEapMn12;
    }

    /**
     * Set numsaldoEapMn13
     *
     * @param integer $numsaldoEapMn13
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMn13($numsaldoEapMn13)
    {
        $this->numsaldoEapMn13 = $numsaldoEapMn13;

        return $this;
    }

    /**
     * Get numsaldoEapMn13
     *
     * @return integer 
     */
    public function getNumsaldoEapMn13()
    {
        return $this->numsaldoEapMn13;
    }

    /**
     * Set numsaldoPerMe1
     *
     * @param integer $numsaldoPerMe1
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe1($numsaldoPerMe1)
    {
        $this->numsaldoPerMe1 = $numsaldoPerMe1;

        return $this;
    }

    /**
     * Get numsaldoPerMe1
     *
     * @return integer 
     */
    public function getNumsaldoPerMe1()
    {
        return $this->numsaldoPerMe1;
    }

    /**
     * Set numsaldoPerMe2
     *
     * @param integer $numsaldoPerMe2
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe2($numsaldoPerMe2)
    {
        $this->numsaldoPerMe2 = $numsaldoPerMe2;

        return $this;
    }

    /**
     * Get numsaldoPerMe2
     *
     * @return integer 
     */
    public function getNumsaldoPerMe2()
    {
        return $this->numsaldoPerMe2;
    }

    /**
     * Set numsaldoPerMe3
     *
     * @param integer $numsaldoPerMe3
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe3($numsaldoPerMe3)
    {
        $this->numsaldoPerMe3 = $numsaldoPerMe3;

        return $this;
    }

    /**
     * Get numsaldoPerMe3
     *
     * @return integer 
     */
    public function getNumsaldoPerMe3()
    {
        return $this->numsaldoPerMe3;
    }

    /**
     * Set numsaldoPerMe4
     *
     * @param integer $numsaldoPerMe4
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe4($numsaldoPerMe4)
    {
        $this->numsaldoPerMe4 = $numsaldoPerMe4;

        return $this;
    }

    /**
     * Get numsaldoPerMe4
     *
     * @return integer 
     */
    public function getNumsaldoPerMe4()
    {
        return $this->numsaldoPerMe4;
    }

    /**
     * Set numsaldoPerMe5
     *
     * @param integer $numsaldoPerMe5
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe5($numsaldoPerMe5)
    {
        $this->numsaldoPerMe5 = $numsaldoPerMe5;

        return $this;
    }

    /**
     * Get numsaldoPerMe5
     *
     * @return integer 
     */
    public function getNumsaldoPerMe5()
    {
        return $this->numsaldoPerMe5;
    }

    /**
     * Set numsaldoPerMe6
     *
     * @param integer $numsaldoPerMe6
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe6($numsaldoPerMe6)
    {
        $this->numsaldoPerMe6 = $numsaldoPerMe6;

        return $this;
    }

    /**
     * Get numsaldoPerMe6
     *
     * @return integer 
     */
    public function getNumsaldoPerMe6()
    {
        return $this->numsaldoPerMe6;
    }

    /**
     * Set numsaldoPerMe7
     *
     * @param integer $numsaldoPerMe7
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe7($numsaldoPerMe7)
    {
        $this->numsaldoPerMe7 = $numsaldoPerMe7;

        return $this;
    }

    /**
     * Get numsaldoPerMe7
     *
     * @return integer 
     */
    public function getNumsaldoPerMe7()
    {
        return $this->numsaldoPerMe7;
    }

    /**
     * Set numsaldoPerMe8
     *
     * @param integer $numsaldoPerMe8
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe8($numsaldoPerMe8)
    {
        $this->numsaldoPerMe8 = $numsaldoPerMe8;

        return $this;
    }

    /**
     * Get numsaldoPerMe8
     *
     * @return integer 
     */
    public function getNumsaldoPerMe8()
    {
        return $this->numsaldoPerMe8;
    }

    /**
     * Set numsaldoPerMe9
     *
     * @param integer $numsaldoPerMe9
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe9($numsaldoPerMe9)
    {
        $this->numsaldoPerMe9 = $numsaldoPerMe9;

        return $this;
    }

    /**
     * Get numsaldoPerMe9
     *
     * @return integer 
     */
    public function getNumsaldoPerMe9()
    {
        return $this->numsaldoPerMe9;
    }

    /**
     * Set numsaldoPerMe10
     *
     * @param integer $numsaldoPerMe10
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe10($numsaldoPerMe10)
    {
        $this->numsaldoPerMe10 = $numsaldoPerMe10;

        return $this;
    }

    /**
     * Get numsaldoPerMe10
     *
     * @return integer 
     */
    public function getNumsaldoPerMe10()
    {
        return $this->numsaldoPerMe10;
    }

    /**
     * Set numsaldoPerMe11
     *
     * @param integer $numsaldoPerMe11
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe11($numsaldoPerMe11)
    {
        $this->numsaldoPerMe11 = $numsaldoPerMe11;

        return $this;
    }

    /**
     * Get numsaldoPerMe11
     *
     * @return integer 
     */
    public function getNumsaldoPerMe11()
    {
        return $this->numsaldoPerMe11;
    }

    /**
     * Set numsaldoPerMe12
     *
     * @param integer $numsaldoPerMe12
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe12($numsaldoPerMe12)
    {
        $this->numsaldoPerMe12 = $numsaldoPerMe12;

        return $this;
    }

    /**
     * Get numsaldoPerMe12
     *
     * @return integer 
     */
    public function getNumsaldoPerMe12()
    {
        return $this->numsaldoPerMe12;
    }

    /**
     * Set numsaldoPerMe13
     *
     * @param integer $numsaldoPerMe13
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoPerMe13($numsaldoPerMe13)
    {
        $this->numsaldoPerMe13 = $numsaldoPerMe13;

        return $this;
    }

    /**
     * Get numsaldoPerMe13
     *
     * @return integer 
     */
    public function getNumsaldoPerMe13()
    {
        return $this->numsaldoPerMe13;
    }

    /**
     * Set numsaldoEapMe1
     *
     * @param integer $numsaldoEapMe1
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe1($numsaldoEapMe1)
    {
        $this->numsaldoEapMe1 = $numsaldoEapMe1;

        return $this;
    }

    /**
     * Get numsaldoEapMe1
     *
     * @return integer 
     */
    public function getNumsaldoEapMe1()
    {
        return $this->numsaldoEapMe1;
    }

    /**
     * Set numsaldoEapMe2
     *
     * @param integer $numsaldoEapMe2
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe2($numsaldoEapMe2)
    {
        $this->numsaldoEapMe2 = $numsaldoEapMe2;

        return $this;
    }

    /**
     * Get numsaldoEapMe2
     *
     * @return integer 
     */
    public function getNumsaldoEapMe2()
    {
        return $this->numsaldoEapMe2;
    }

    /**
     * Set numsaldoEapMe3
     *
     * @param integer $numsaldoEapMe3
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe3($numsaldoEapMe3)
    {
        $this->numsaldoEapMe3 = $numsaldoEapMe3;

        return $this;
    }

    /**
     * Get numsaldoEapMe3
     *
     * @return integer 
     */
    public function getNumsaldoEapMe3()
    {
        return $this->numsaldoEapMe3;
    }

    /**
     * Set numsaldoEapMe4
     *
     * @param integer $numsaldoEapMe4
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe4($numsaldoEapMe4)
    {
        $this->numsaldoEapMe4 = $numsaldoEapMe4;

        return $this;
    }

    /**
     * Get numsaldoEapMe4
     *
     * @return integer 
     */
    public function getNumsaldoEapMe4()
    {
        return $this->numsaldoEapMe4;
    }

    /**
     * Set numsaldoEapMe5
     *
     * @param integer $numsaldoEapMe5
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe5($numsaldoEapMe5)
    {
        $this->numsaldoEapMe5 = $numsaldoEapMe5;

        return $this;
    }

    /**
     * Get numsaldoEapMe5
     *
     * @return integer 
     */
    public function getNumsaldoEapMe5()
    {
        return $this->numsaldoEapMe5;
    }

    /**
     * Set numsaldoEapMe6
     *
     * @param integer $numsaldoEapMe6
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe6($numsaldoEapMe6)
    {
        $this->numsaldoEapMe6 = $numsaldoEapMe6;

        return $this;
    }

    /**
     * Get numsaldoEapMe6
     *
     * @return integer 
     */
    public function getNumsaldoEapMe6()
    {
        return $this->numsaldoEapMe6;
    }

    /**
     * Set numsaldoEapMe7
     *
     * @param integer $numsaldoEapMe7
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe7($numsaldoEapMe7)
    {
        $this->numsaldoEapMe7 = $numsaldoEapMe7;

        return $this;
    }

    /**
     * Get numsaldoEapMe7
     *
     * @return integer 
     */
    public function getNumsaldoEapMe7()
    {
        return $this->numsaldoEapMe7;
    }

    /**
     * Set numsaldoEapMe8
     *
     * @param integer $numsaldoEapMe8
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe8($numsaldoEapMe8)
    {
        $this->numsaldoEapMe8 = $numsaldoEapMe8;

        return $this;
    }

    /**
     * Get numsaldoEapMe8
     *
     * @return integer 
     */
    public function getNumsaldoEapMe8()
    {
        return $this->numsaldoEapMe8;
    }

    /**
     * Set numsaldoEapMe9
     *
     * @param integer $numsaldoEapMe9
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe9($numsaldoEapMe9)
    {
        $this->numsaldoEapMe9 = $numsaldoEapMe9;

        return $this;
    }

    /**
     * Get numsaldoEapMe9
     *
     * @return integer 
     */
    public function getNumsaldoEapMe9()
    {
        return $this->numsaldoEapMe9;
    }

    /**
     * Set numsaldoEapMe10
     *
     * @param integer $numsaldoEapMe10
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe10($numsaldoEapMe10)
    {
        $this->numsaldoEapMe10 = $numsaldoEapMe10;

        return $this;
    }

    /**
     * Get numsaldoEapMe10
     *
     * @return integer 
     */
    public function getNumsaldoEapMe10()
    {
        return $this->numsaldoEapMe10;
    }

    /**
     * Set numsaldoEapMe11
     *
     * @param integer $numsaldoEapMe11
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe11($numsaldoEapMe11)
    {
        $this->numsaldoEapMe11 = $numsaldoEapMe11;

        return $this;
    }

    /**
     * Get numsaldoEapMe11
     *
     * @return integer 
     */
    public function getNumsaldoEapMe11()
    {
        return $this->numsaldoEapMe11;
    }

    /**
     * Set numsaldoEapMe12
     *
     * @param integer $numsaldoEapMe12
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe12($numsaldoEapMe12)
    {
        $this->numsaldoEapMe12 = $numsaldoEapMe12;

        return $this;
    }

    /**
     * Get numsaldoEapMe12
     *
     * @return integer 
     */
    public function getNumsaldoEapMe12()
    {
        return $this->numsaldoEapMe12;
    }

    /**
     * Set numsaldoEapMe13
     *
     * @param integer $numsaldoEapMe13
     * @return Cuentascontablessaldosmonedas
     */
    public function setNumsaldoEapMe13($numsaldoEapMe13)
    {
        $this->numsaldoEapMe13 = $numsaldoEapMe13;

        return $this;
    }

    /**
     * Get numsaldoEapMe13
     *
     * @return integer 
     */
    public function getNumsaldoEapMe13()
    {
        return $this->numsaldoEapMe13;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Cuentascontablessaldosmonedas
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
     * @return Cuentascontablessaldosmonedas
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
