<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadessaldos
 *
 * @ORM\Table(name="EntidadesSaldos", indexes={@ORM\Index(name="Indice_60", columns={"DteActualizacion"}), @ORM\Index(name="Indice_70", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Entidadessaldos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCuenta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipocuenta = '0';

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
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodoInicial", type="integer", nullable=true)
     */
    private $numperiodoinicial = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldoInicial", type="integer", nullable=true)
     */
    private $numsaldoinicial = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_1", type="integer", nullable=true)
     */
    private $numcargos1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_2", type="integer", nullable=true)
     */
    private $numcargos2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_3", type="integer", nullable=true)
     */
    private $numcargos3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_4", type="integer", nullable=true)
     */
    private $numcargos4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_5", type="integer", nullable=true)
     */
    private $numcargos5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_6", type="integer", nullable=true)
     */
    private $numcargos6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_7", type="integer", nullable=true)
     */
    private $numcargos7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_8", type="integer", nullable=true)
     */
    private $numcargos8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_9", type="integer", nullable=true)
     */
    private $numcargos9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_10", type="integer", nullable=true)
     */
    private $numcargos10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_11", type="integer", nullable=true)
     */
    private $numcargos11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_12", type="integer", nullable=true)
     */
    private $numcargos12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCargos_13", type="integer", nullable=true)
     */
    private $numcargos13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_1", type="integer", nullable=true)
     */
    private $numabonos1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_2", type="integer", nullable=true)
     */
    private $numabonos2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_3", type="integer", nullable=true)
     */
    private $numabonos3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_4", type="integer", nullable=true)
     */
    private $numabonos4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_5", type="integer", nullable=true)
     */
    private $numabonos5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_6", type="integer", nullable=true)
     */
    private $numabonos6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_7", type="integer", nullable=true)
     */
    private $numabonos7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_8", type="integer", nullable=true)
     */
    private $numabonos8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_9", type="integer", nullable=true)
     */
    private $numabonos9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_10", type="integer", nullable=true)
     */
    private $numabonos10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_11", type="integer", nullable=true)
     */
    private $numabonos11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_12", type="integer", nullable=true)
     */
    private $numabonos12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAbonos_13", type="integer", nullable=true)
     */
    private $numabonos13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_1", type="integer", nullable=true)
     */
    private $numsaldoPer1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_2", type="integer", nullable=true)
     */
    private $numsaldoPer2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_3", type="integer", nullable=true)
     */
    private $numsaldoPer3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_4", type="integer", nullable=true)
     */
    private $numsaldoPer4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_5", type="integer", nullable=true)
     */
    private $numsaldoPer5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_6", type="integer", nullable=true)
     */
    private $numsaldoPer6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_7", type="integer", nullable=true)
     */
    private $numsaldoPer7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_8", type="integer", nullable=true)
     */
    private $numsaldoPer8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_9", type="integer", nullable=true)
     */
    private $numsaldoPer9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_10", type="integer", nullable=true)
     */
    private $numsaldoPer10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_11", type="integer", nullable=true)
     */
    private $numsaldoPer11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_12", type="integer", nullable=true)
     */
    private $numsaldoPer12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_PER_13", type="integer", nullable=true)
     */
    private $numsaldoPer13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_1", type="integer", nullable=true)
     */
    private $numsaldoEap1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_2", type="integer", nullable=true)
     */
    private $numsaldoEap2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_3", type="integer", nullable=true)
     */
    private $numsaldoEap3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_4", type="integer", nullable=true)
     */
    private $numsaldoEap4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_5", type="integer", nullable=true)
     */
    private $numsaldoEap5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_6", type="integer", nullable=true)
     */
    private $numsaldoEap6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_7", type="integer", nullable=true)
     */
    private $numsaldoEap7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_8", type="integer", nullable=true)
     */
    private $numsaldoEap8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_9", type="integer", nullable=true)
     */
    private $numsaldoEap9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_10", type="integer", nullable=true)
     */
    private $numsaldoEap10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_11", type="integer", nullable=true)
     */
    private $numsaldoEap11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_12", type="integer", nullable=true)
     */
    private $numsaldoEap12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSaldo_EAP_13", type="integer", nullable=true)
     */
    private $numsaldoEap13 = '0';

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
     * Set numtipocuenta
     *
     * @param integer $numtipocuenta
     * @return Entidadessaldos
     */
    public function setNumtipocuenta($numtipocuenta)
    {
        $this->numtipocuenta = $numtipocuenta;

        return $this;
    }

    /**
     * Get numtipocuenta
     *
     * @return integer 
     */
    public function getNumtipocuenta()
    {
        return $this->numtipocuenta;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Entidadessaldos
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
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Entidadessaldos
     */
    public function setNumentidadId($numentidadId)
    {
        $this->numentidadId = $numentidadId;

        return $this;
    }

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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Entidadessaldos
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
     * Set numperiodoinicial
     *
     * @param integer $numperiodoinicial
     * @return Entidadessaldos
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
     * Set numsaldoinicial
     *
     * @param integer $numsaldoinicial
     * @return Entidadessaldos
     */
    public function setNumsaldoinicial($numsaldoinicial)
    {
        $this->numsaldoinicial = $numsaldoinicial;

        return $this;
    }

    /**
     * Get numsaldoinicial
     *
     * @return integer 
     */
    public function getNumsaldoinicial()
    {
        return $this->numsaldoinicial;
    }

    /**
     * Set numcargos1
     *
     * @param integer $numcargos1
     * @return Entidadessaldos
     */
    public function setNumcargos1($numcargos1)
    {
        $this->numcargos1 = $numcargos1;

        return $this;
    }

    /**
     * Get numcargos1
     *
     * @return integer 
     */
    public function getNumcargos1()
    {
        return $this->numcargos1;
    }

    /**
     * Set numcargos2
     *
     * @param integer $numcargos2
     * @return Entidadessaldos
     */
    public function setNumcargos2($numcargos2)
    {
        $this->numcargos2 = $numcargos2;

        return $this;
    }

    /**
     * Get numcargos2
     *
     * @return integer 
     */
    public function getNumcargos2()
    {
        return $this->numcargos2;
    }

    /**
     * Set numcargos3
     *
     * @param integer $numcargos3
     * @return Entidadessaldos
     */
    public function setNumcargos3($numcargos3)
    {
        $this->numcargos3 = $numcargos3;

        return $this;
    }

    /**
     * Get numcargos3
     *
     * @return integer 
     */
    public function getNumcargos3()
    {
        return $this->numcargos3;
    }

    /**
     * Set numcargos4
     *
     * @param integer $numcargos4
     * @return Entidadessaldos
     */
    public function setNumcargos4($numcargos4)
    {
        $this->numcargos4 = $numcargos4;

        return $this;
    }

    /**
     * Get numcargos4
     *
     * @return integer 
     */
    public function getNumcargos4()
    {
        return $this->numcargos4;
    }

    /**
     * Set numcargos5
     *
     * @param integer $numcargos5
     * @return Entidadessaldos
     */
    public function setNumcargos5($numcargos5)
    {
        $this->numcargos5 = $numcargos5;

        return $this;
    }

    /**
     * Get numcargos5
     *
     * @return integer 
     */
    public function getNumcargos5()
    {
        return $this->numcargos5;
    }

    /**
     * Set numcargos6
     *
     * @param integer $numcargos6
     * @return Entidadessaldos
     */
    public function setNumcargos6($numcargos6)
    {
        $this->numcargos6 = $numcargos6;

        return $this;
    }

    /**
     * Get numcargos6
     *
     * @return integer 
     */
    public function getNumcargos6()
    {
        return $this->numcargos6;
    }

    /**
     * Set numcargos7
     *
     * @param integer $numcargos7
     * @return Entidadessaldos
     */
    public function setNumcargos7($numcargos7)
    {
        $this->numcargos7 = $numcargos7;

        return $this;
    }

    /**
     * Get numcargos7
     *
     * @return integer 
     */
    public function getNumcargos7()
    {
        return $this->numcargos7;
    }

    /**
     * Set numcargos8
     *
     * @param integer $numcargos8
     * @return Entidadessaldos
     */
    public function setNumcargos8($numcargos8)
    {
        $this->numcargos8 = $numcargos8;

        return $this;
    }

    /**
     * Get numcargos8
     *
     * @return integer 
     */
    public function getNumcargos8()
    {
        return $this->numcargos8;
    }

    /**
     * Set numcargos9
     *
     * @param integer $numcargos9
     * @return Entidadessaldos
     */
    public function setNumcargos9($numcargos9)
    {
        $this->numcargos9 = $numcargos9;

        return $this;
    }

    /**
     * Get numcargos9
     *
     * @return integer 
     */
    public function getNumcargos9()
    {
        return $this->numcargos9;
    }

    /**
     * Set numcargos10
     *
     * @param integer $numcargos10
     * @return Entidadessaldos
     */
    public function setNumcargos10($numcargos10)
    {
        $this->numcargos10 = $numcargos10;

        return $this;
    }

    /**
     * Get numcargos10
     *
     * @return integer 
     */
    public function getNumcargos10()
    {
        return $this->numcargos10;
    }

    /**
     * Set numcargos11
     *
     * @param integer $numcargos11
     * @return Entidadessaldos
     */
    public function setNumcargos11($numcargos11)
    {
        $this->numcargos11 = $numcargos11;

        return $this;
    }

    /**
     * Get numcargos11
     *
     * @return integer 
     */
    public function getNumcargos11()
    {
        return $this->numcargos11;
    }

    /**
     * Set numcargos12
     *
     * @param integer $numcargos12
     * @return Entidadessaldos
     */
    public function setNumcargos12($numcargos12)
    {
        $this->numcargos12 = $numcargos12;

        return $this;
    }

    /**
     * Get numcargos12
     *
     * @return integer 
     */
    public function getNumcargos12()
    {
        return $this->numcargos12;
    }

    /**
     * Set numcargos13
     *
     * @param integer $numcargos13
     * @return Entidadessaldos
     */
    public function setNumcargos13($numcargos13)
    {
        $this->numcargos13 = $numcargos13;

        return $this;
    }

    /**
     * Get numcargos13
     *
     * @return integer 
     */
    public function getNumcargos13()
    {
        return $this->numcargos13;
    }

    /**
     * Set numabonos1
     *
     * @param integer $numabonos1
     * @return Entidadessaldos
     */
    public function setNumabonos1($numabonos1)
    {
        $this->numabonos1 = $numabonos1;

        return $this;
    }

    /**
     * Get numabonos1
     *
     * @return integer 
     */
    public function getNumabonos1()
    {
        return $this->numabonos1;
    }

    /**
     * Set numabonos2
     *
     * @param integer $numabonos2
     * @return Entidadessaldos
     */
    public function setNumabonos2($numabonos2)
    {
        $this->numabonos2 = $numabonos2;

        return $this;
    }

    /**
     * Get numabonos2
     *
     * @return integer 
     */
    public function getNumabonos2()
    {
        return $this->numabonos2;
    }

    /**
     * Set numabonos3
     *
     * @param integer $numabonos3
     * @return Entidadessaldos
     */
    public function setNumabonos3($numabonos3)
    {
        $this->numabonos3 = $numabonos3;

        return $this;
    }

    /**
     * Get numabonos3
     *
     * @return integer 
     */
    public function getNumabonos3()
    {
        return $this->numabonos3;
    }

    /**
     * Set numabonos4
     *
     * @param integer $numabonos4
     * @return Entidadessaldos
     */
    public function setNumabonos4($numabonos4)
    {
        $this->numabonos4 = $numabonos4;

        return $this;
    }

    /**
     * Get numabonos4
     *
     * @return integer 
     */
    public function getNumabonos4()
    {
        return $this->numabonos4;
    }

    /**
     * Set numabonos5
     *
     * @param integer $numabonos5
     * @return Entidadessaldos
     */
    public function setNumabonos5($numabonos5)
    {
        $this->numabonos5 = $numabonos5;

        return $this;
    }

    /**
     * Get numabonos5
     *
     * @return integer 
     */
    public function getNumabonos5()
    {
        return $this->numabonos5;
    }

    /**
     * Set numabonos6
     *
     * @param integer $numabonos6
     * @return Entidadessaldos
     */
    public function setNumabonos6($numabonos6)
    {
        $this->numabonos6 = $numabonos6;

        return $this;
    }

    /**
     * Get numabonos6
     *
     * @return integer 
     */
    public function getNumabonos6()
    {
        return $this->numabonos6;
    }

    /**
     * Set numabonos7
     *
     * @param integer $numabonos7
     * @return Entidadessaldos
     */
    public function setNumabonos7($numabonos7)
    {
        $this->numabonos7 = $numabonos7;

        return $this;
    }

    /**
     * Get numabonos7
     *
     * @return integer 
     */
    public function getNumabonos7()
    {
        return $this->numabonos7;
    }

    /**
     * Set numabonos8
     *
     * @param integer $numabonos8
     * @return Entidadessaldos
     */
    public function setNumabonos8($numabonos8)
    {
        $this->numabonos8 = $numabonos8;

        return $this;
    }

    /**
     * Get numabonos8
     *
     * @return integer 
     */
    public function getNumabonos8()
    {
        return $this->numabonos8;
    }

    /**
     * Set numabonos9
     *
     * @param integer $numabonos9
     * @return Entidadessaldos
     */
    public function setNumabonos9($numabonos9)
    {
        $this->numabonos9 = $numabonos9;

        return $this;
    }

    /**
     * Get numabonos9
     *
     * @return integer 
     */
    public function getNumabonos9()
    {
        return $this->numabonos9;
    }

    /**
     * Set numabonos10
     *
     * @param integer $numabonos10
     * @return Entidadessaldos
     */
    public function setNumabonos10($numabonos10)
    {
        $this->numabonos10 = $numabonos10;

        return $this;
    }

    /**
     * Get numabonos10
     *
     * @return integer 
     */
    public function getNumabonos10()
    {
        return $this->numabonos10;
    }

    /**
     * Set numabonos11
     *
     * @param integer $numabonos11
     * @return Entidadessaldos
     */
    public function setNumabonos11($numabonos11)
    {
        $this->numabonos11 = $numabonos11;

        return $this;
    }

    /**
     * Get numabonos11
     *
     * @return integer 
     */
    public function getNumabonos11()
    {
        return $this->numabonos11;
    }

    /**
     * Set numabonos12
     *
     * @param integer $numabonos12
     * @return Entidadessaldos
     */
    public function setNumabonos12($numabonos12)
    {
        $this->numabonos12 = $numabonos12;

        return $this;
    }

    /**
     * Get numabonos12
     *
     * @return integer 
     */
    public function getNumabonos12()
    {
        return $this->numabonos12;
    }

    /**
     * Set numabonos13
     *
     * @param integer $numabonos13
     * @return Entidadessaldos
     */
    public function setNumabonos13($numabonos13)
    {
        $this->numabonos13 = $numabonos13;

        return $this;
    }

    /**
     * Get numabonos13
     *
     * @return integer 
     */
    public function getNumabonos13()
    {
        return $this->numabonos13;
    }

    /**
     * Set numsaldoPer1
     *
     * @param integer $numsaldoPer1
     * @return Entidadessaldos
     */
    public function setNumsaldoPer1($numsaldoPer1)
    {
        $this->numsaldoPer1 = $numsaldoPer1;

        return $this;
    }

    /**
     * Get numsaldoPer1
     *
     * @return integer 
     */
    public function getNumsaldoPer1()
    {
        return $this->numsaldoPer1;
    }

    /**
     * Set numsaldoPer2
     *
     * @param integer $numsaldoPer2
     * @return Entidadessaldos
     */
    public function setNumsaldoPer2($numsaldoPer2)
    {
        $this->numsaldoPer2 = $numsaldoPer2;

        return $this;
    }

    /**
     * Get numsaldoPer2
     *
     * @return integer 
     */
    public function getNumsaldoPer2()
    {
        return $this->numsaldoPer2;
    }

    /**
     * Set numsaldoPer3
     *
     * @param integer $numsaldoPer3
     * @return Entidadessaldos
     */
    public function setNumsaldoPer3($numsaldoPer3)
    {
        $this->numsaldoPer3 = $numsaldoPer3;

        return $this;
    }

    /**
     * Get numsaldoPer3
     *
     * @return integer 
     */
    public function getNumsaldoPer3()
    {
        return $this->numsaldoPer3;
    }

    /**
     * Set numsaldoPer4
     *
     * @param integer $numsaldoPer4
     * @return Entidadessaldos
     */
    public function setNumsaldoPer4($numsaldoPer4)
    {
        $this->numsaldoPer4 = $numsaldoPer4;

        return $this;
    }

    /**
     * Get numsaldoPer4
     *
     * @return integer 
     */
    public function getNumsaldoPer4()
    {
        return $this->numsaldoPer4;
    }

    /**
     * Set numsaldoPer5
     *
     * @param integer $numsaldoPer5
     * @return Entidadessaldos
     */
    public function setNumsaldoPer5($numsaldoPer5)
    {
        $this->numsaldoPer5 = $numsaldoPer5;

        return $this;
    }

    /**
     * Get numsaldoPer5
     *
     * @return integer 
     */
    public function getNumsaldoPer5()
    {
        return $this->numsaldoPer5;
    }

    /**
     * Set numsaldoPer6
     *
     * @param integer $numsaldoPer6
     * @return Entidadessaldos
     */
    public function setNumsaldoPer6($numsaldoPer6)
    {
        $this->numsaldoPer6 = $numsaldoPer6;

        return $this;
    }

    /**
     * Get numsaldoPer6
     *
     * @return integer 
     */
    public function getNumsaldoPer6()
    {
        return $this->numsaldoPer6;
    }

    /**
     * Set numsaldoPer7
     *
     * @param integer $numsaldoPer7
     * @return Entidadessaldos
     */
    public function setNumsaldoPer7($numsaldoPer7)
    {
        $this->numsaldoPer7 = $numsaldoPer7;

        return $this;
    }

    /**
     * Get numsaldoPer7
     *
     * @return integer 
     */
    public function getNumsaldoPer7()
    {
        return $this->numsaldoPer7;
    }

    /**
     * Set numsaldoPer8
     *
     * @param integer $numsaldoPer8
     * @return Entidadessaldos
     */
    public function setNumsaldoPer8($numsaldoPer8)
    {
        $this->numsaldoPer8 = $numsaldoPer8;

        return $this;
    }

    /**
     * Get numsaldoPer8
     *
     * @return integer 
     */
    public function getNumsaldoPer8()
    {
        return $this->numsaldoPer8;
    }

    /**
     * Set numsaldoPer9
     *
     * @param integer $numsaldoPer9
     * @return Entidadessaldos
     */
    public function setNumsaldoPer9($numsaldoPer9)
    {
        $this->numsaldoPer9 = $numsaldoPer9;

        return $this;
    }

    /**
     * Get numsaldoPer9
     *
     * @return integer 
     */
    public function getNumsaldoPer9()
    {
        return $this->numsaldoPer9;
    }

    /**
     * Set numsaldoPer10
     *
     * @param integer $numsaldoPer10
     * @return Entidadessaldos
     */
    public function setNumsaldoPer10($numsaldoPer10)
    {
        $this->numsaldoPer10 = $numsaldoPer10;

        return $this;
    }

    /**
     * Get numsaldoPer10
     *
     * @return integer 
     */
    public function getNumsaldoPer10()
    {
        return $this->numsaldoPer10;
    }

    /**
     * Set numsaldoPer11
     *
     * @param integer $numsaldoPer11
     * @return Entidadessaldos
     */
    public function setNumsaldoPer11($numsaldoPer11)
    {
        $this->numsaldoPer11 = $numsaldoPer11;

        return $this;
    }

    /**
     * Get numsaldoPer11
     *
     * @return integer 
     */
    public function getNumsaldoPer11()
    {
        return $this->numsaldoPer11;
    }

    /**
     * Set numsaldoPer12
     *
     * @param integer $numsaldoPer12
     * @return Entidadessaldos
     */
    public function setNumsaldoPer12($numsaldoPer12)
    {
        $this->numsaldoPer12 = $numsaldoPer12;

        return $this;
    }

    /**
     * Get numsaldoPer12
     *
     * @return integer 
     */
    public function getNumsaldoPer12()
    {
        return $this->numsaldoPer12;
    }

    /**
     * Set numsaldoPer13
     *
     * @param integer $numsaldoPer13
     * @return Entidadessaldos
     */
    public function setNumsaldoPer13($numsaldoPer13)
    {
        $this->numsaldoPer13 = $numsaldoPer13;

        return $this;
    }

    /**
     * Get numsaldoPer13
     *
     * @return integer 
     */
    public function getNumsaldoPer13()
    {
        return $this->numsaldoPer13;
    }

    /**
     * Set numsaldoEap1
     *
     * @param integer $numsaldoEap1
     * @return Entidadessaldos
     */
    public function setNumsaldoEap1($numsaldoEap1)
    {
        $this->numsaldoEap1 = $numsaldoEap1;

        return $this;
    }

    /**
     * Get numsaldoEap1
     *
     * @return integer 
     */
    public function getNumsaldoEap1()
    {
        return $this->numsaldoEap1;
    }

    /**
     * Set numsaldoEap2
     *
     * @param integer $numsaldoEap2
     * @return Entidadessaldos
     */
    public function setNumsaldoEap2($numsaldoEap2)
    {
        $this->numsaldoEap2 = $numsaldoEap2;

        return $this;
    }

    /**
     * Get numsaldoEap2
     *
     * @return integer 
     */
    public function getNumsaldoEap2()
    {
        return $this->numsaldoEap2;
    }

    /**
     * Set numsaldoEap3
     *
     * @param integer $numsaldoEap3
     * @return Entidadessaldos
     */
    public function setNumsaldoEap3($numsaldoEap3)
    {
        $this->numsaldoEap3 = $numsaldoEap3;

        return $this;
    }

    /**
     * Get numsaldoEap3
     *
     * @return integer 
     */
    public function getNumsaldoEap3()
    {
        return $this->numsaldoEap3;
    }

    /**
     * Set numsaldoEap4
     *
     * @param integer $numsaldoEap4
     * @return Entidadessaldos
     */
    public function setNumsaldoEap4($numsaldoEap4)
    {
        $this->numsaldoEap4 = $numsaldoEap4;

        return $this;
    }

    /**
     * Get numsaldoEap4
     *
     * @return integer 
     */
    public function getNumsaldoEap4()
    {
        return $this->numsaldoEap4;
    }

    /**
     * Set numsaldoEap5
     *
     * @param integer $numsaldoEap5
     * @return Entidadessaldos
     */
    public function setNumsaldoEap5($numsaldoEap5)
    {
        $this->numsaldoEap5 = $numsaldoEap5;

        return $this;
    }

    /**
     * Get numsaldoEap5
     *
     * @return integer 
     */
    public function getNumsaldoEap5()
    {
        return $this->numsaldoEap5;
    }

    /**
     * Set numsaldoEap6
     *
     * @param integer $numsaldoEap6
     * @return Entidadessaldos
     */
    public function setNumsaldoEap6($numsaldoEap6)
    {
        $this->numsaldoEap6 = $numsaldoEap6;

        return $this;
    }

    /**
     * Get numsaldoEap6
     *
     * @return integer 
     */
    public function getNumsaldoEap6()
    {
        return $this->numsaldoEap6;
    }

    /**
     * Set numsaldoEap7
     *
     * @param integer $numsaldoEap7
     * @return Entidadessaldos
     */
    public function setNumsaldoEap7($numsaldoEap7)
    {
        $this->numsaldoEap7 = $numsaldoEap7;

        return $this;
    }

    /**
     * Get numsaldoEap7
     *
     * @return integer 
     */
    public function getNumsaldoEap7()
    {
        return $this->numsaldoEap7;
    }

    /**
     * Set numsaldoEap8
     *
     * @param integer $numsaldoEap8
     * @return Entidadessaldos
     */
    public function setNumsaldoEap8($numsaldoEap8)
    {
        $this->numsaldoEap8 = $numsaldoEap8;

        return $this;
    }

    /**
     * Get numsaldoEap8
     *
     * @return integer 
     */
    public function getNumsaldoEap8()
    {
        return $this->numsaldoEap8;
    }

    /**
     * Set numsaldoEap9
     *
     * @param integer $numsaldoEap9
     * @return Entidadessaldos
     */
    public function setNumsaldoEap9($numsaldoEap9)
    {
        $this->numsaldoEap9 = $numsaldoEap9;

        return $this;
    }

    /**
     * Get numsaldoEap9
     *
     * @return integer 
     */
    public function getNumsaldoEap9()
    {
        return $this->numsaldoEap9;
    }

    /**
     * Set numsaldoEap10
     *
     * @param integer $numsaldoEap10
     * @return Entidadessaldos
     */
    public function setNumsaldoEap10($numsaldoEap10)
    {
        $this->numsaldoEap10 = $numsaldoEap10;

        return $this;
    }

    /**
     * Get numsaldoEap10
     *
     * @return integer 
     */
    public function getNumsaldoEap10()
    {
        return $this->numsaldoEap10;
    }

    /**
     * Set numsaldoEap11
     *
     * @param integer $numsaldoEap11
     * @return Entidadessaldos
     */
    public function setNumsaldoEap11($numsaldoEap11)
    {
        $this->numsaldoEap11 = $numsaldoEap11;

        return $this;
    }

    /**
     * Get numsaldoEap11
     *
     * @return integer 
     */
    public function getNumsaldoEap11()
    {
        return $this->numsaldoEap11;
    }

    /**
     * Set numsaldoEap12
     *
     * @param integer $numsaldoEap12
     * @return Entidadessaldos
     */
    public function setNumsaldoEap12($numsaldoEap12)
    {
        $this->numsaldoEap12 = $numsaldoEap12;

        return $this;
    }

    /**
     * Get numsaldoEap12
     *
     * @return integer 
     */
    public function getNumsaldoEap12()
    {
        return $this->numsaldoEap12;
    }

    /**
     * Set numsaldoEap13
     *
     * @param integer $numsaldoEap13
     * @return Entidadessaldos
     */
    public function setNumsaldoEap13($numsaldoEap13)
    {
        $this->numsaldoEap13 = $numsaldoEap13;

        return $this;
    }

    /**
     * Get numsaldoEap13
     *
     * @return integer 
     */
    public function getNumsaldoEap13()
    {
        return $this->numsaldoEap13;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Entidadessaldos
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
     * @return Entidadessaldos
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
