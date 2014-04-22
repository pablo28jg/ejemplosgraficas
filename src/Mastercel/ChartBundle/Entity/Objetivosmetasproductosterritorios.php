<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objetivosmetasproductosterritorios
 *
 * @ORM\Table(name="ObjetivosMetasProductosTerritorios")
 * @ORM\Entity
 */
class Objetivosmetasproductosterritorios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumObjetivoMeta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numobjetivometaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumObjetivoPlanProducto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numobjetivoplanproductoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumObjetivoPlanTerritorio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numobjetivoplanterritorioId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_7", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_8", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta8 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_9", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta9 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_10", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_11", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta11 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_12", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta12 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_13", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta13 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_14", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta14 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_15", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta15 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_16", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta16 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_17", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta17 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_18", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta18 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_19", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta19 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_20", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta20 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_21", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta21 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_22", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta22 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_23", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta23 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_24", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta24 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_25", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta25 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_26", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta26 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_27", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta27 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_28", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta28 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_29", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta29 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_30", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta30 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_31", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta31 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_32", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta32 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_33", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta33 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_34", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta34 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_35", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta35 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_36", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta36 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_37", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta37 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_38", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta38 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_39", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta39 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_40", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta40 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_41", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta41 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_42", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta42 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_43", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta43 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_44", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta44 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_45", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta45 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_46", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta46 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_47", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta47 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_48", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta48 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_49", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta49 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_50", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta50 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_51", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta51 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumValorMeta_52", type="float", precision=53, scale=0, nullable=true)
     */
    private $numvalormeta52 = '0';



    /**
     * Set numobjetivometaId
     *
     * @param integer $numobjetivometaId
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumobjetivometaId($numobjetivometaId)
    {
        $this->numobjetivometaId = $numobjetivometaId;

        return $this;
    }

    /**
     * Get numobjetivometaId
     *
     * @return integer 
     */
    public function getNumobjetivometaId()
    {
        return $this->numobjetivometaId;
    }

    /**
     * Set numobjetivoplanproductoId
     *
     * @param integer $numobjetivoplanproductoId
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumobjetivoplanproductoId($numobjetivoplanproductoId)
    {
        $this->numobjetivoplanproductoId = $numobjetivoplanproductoId;

        return $this;
    }

    /**
     * Get numobjetivoplanproductoId
     *
     * @return integer 
     */
    public function getNumobjetivoplanproductoId()
    {
        return $this->numobjetivoplanproductoId;
    }

    /**
     * Set numobjetivoplanterritorioId
     *
     * @param integer $numobjetivoplanterritorioId
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumobjetivoplanterritorioId($numobjetivoplanterritorioId)
    {
        $this->numobjetivoplanterritorioId = $numobjetivoplanterritorioId;

        return $this;
    }

    /**
     * Get numobjetivoplanterritorioId
     *
     * @return integer 
     */
    public function getNumobjetivoplanterritorioId()
    {
        return $this->numobjetivoplanterritorioId;
    }

    /**
     * Set numvalormeta1
     *
     * @param float $numvalormeta1
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta1($numvalormeta1)
    {
        $this->numvalormeta1 = $numvalormeta1;

        return $this;
    }

    /**
     * Get numvalormeta1
     *
     * @return float 
     */
    public function getNumvalormeta1()
    {
        return $this->numvalormeta1;
    }

    /**
     * Set numvalormeta2
     *
     * @param float $numvalormeta2
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta2($numvalormeta2)
    {
        $this->numvalormeta2 = $numvalormeta2;

        return $this;
    }

    /**
     * Get numvalormeta2
     *
     * @return float 
     */
    public function getNumvalormeta2()
    {
        return $this->numvalormeta2;
    }

    /**
     * Set numvalormeta3
     *
     * @param float $numvalormeta3
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta3($numvalormeta3)
    {
        $this->numvalormeta3 = $numvalormeta3;

        return $this;
    }

    /**
     * Get numvalormeta3
     *
     * @return float 
     */
    public function getNumvalormeta3()
    {
        return $this->numvalormeta3;
    }

    /**
     * Set numvalormeta4
     *
     * @param float $numvalormeta4
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta4($numvalormeta4)
    {
        $this->numvalormeta4 = $numvalormeta4;

        return $this;
    }

    /**
     * Get numvalormeta4
     *
     * @return float 
     */
    public function getNumvalormeta4()
    {
        return $this->numvalormeta4;
    }

    /**
     * Set numvalormeta5
     *
     * @param float $numvalormeta5
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta5($numvalormeta5)
    {
        $this->numvalormeta5 = $numvalormeta5;

        return $this;
    }

    /**
     * Get numvalormeta5
     *
     * @return float 
     */
    public function getNumvalormeta5()
    {
        return $this->numvalormeta5;
    }

    /**
     * Set numvalormeta6
     *
     * @param float $numvalormeta6
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta6($numvalormeta6)
    {
        $this->numvalormeta6 = $numvalormeta6;

        return $this;
    }

    /**
     * Get numvalormeta6
     *
     * @return float 
     */
    public function getNumvalormeta6()
    {
        return $this->numvalormeta6;
    }

    /**
     * Set numvalormeta7
     *
     * @param float $numvalormeta7
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta7($numvalormeta7)
    {
        $this->numvalormeta7 = $numvalormeta7;

        return $this;
    }

    /**
     * Get numvalormeta7
     *
     * @return float 
     */
    public function getNumvalormeta7()
    {
        return $this->numvalormeta7;
    }

    /**
     * Set numvalormeta8
     *
     * @param float $numvalormeta8
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta8($numvalormeta8)
    {
        $this->numvalormeta8 = $numvalormeta8;

        return $this;
    }

    /**
     * Get numvalormeta8
     *
     * @return float 
     */
    public function getNumvalormeta8()
    {
        return $this->numvalormeta8;
    }

    /**
     * Set numvalormeta9
     *
     * @param float $numvalormeta9
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta9($numvalormeta9)
    {
        $this->numvalormeta9 = $numvalormeta9;

        return $this;
    }

    /**
     * Get numvalormeta9
     *
     * @return float 
     */
    public function getNumvalormeta9()
    {
        return $this->numvalormeta9;
    }

    /**
     * Set numvalormeta10
     *
     * @param float $numvalormeta10
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta10($numvalormeta10)
    {
        $this->numvalormeta10 = $numvalormeta10;

        return $this;
    }

    /**
     * Get numvalormeta10
     *
     * @return float 
     */
    public function getNumvalormeta10()
    {
        return $this->numvalormeta10;
    }

    /**
     * Set numvalormeta11
     *
     * @param float $numvalormeta11
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta11($numvalormeta11)
    {
        $this->numvalormeta11 = $numvalormeta11;

        return $this;
    }

    /**
     * Get numvalormeta11
     *
     * @return float 
     */
    public function getNumvalormeta11()
    {
        return $this->numvalormeta11;
    }

    /**
     * Set numvalormeta12
     *
     * @param float $numvalormeta12
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta12($numvalormeta12)
    {
        $this->numvalormeta12 = $numvalormeta12;

        return $this;
    }

    /**
     * Get numvalormeta12
     *
     * @return float 
     */
    public function getNumvalormeta12()
    {
        return $this->numvalormeta12;
    }

    /**
     * Set numvalormeta13
     *
     * @param float $numvalormeta13
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta13($numvalormeta13)
    {
        $this->numvalormeta13 = $numvalormeta13;

        return $this;
    }

    /**
     * Get numvalormeta13
     *
     * @return float 
     */
    public function getNumvalormeta13()
    {
        return $this->numvalormeta13;
    }

    /**
     * Set numvalormeta14
     *
     * @param float $numvalormeta14
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta14($numvalormeta14)
    {
        $this->numvalormeta14 = $numvalormeta14;

        return $this;
    }

    /**
     * Get numvalormeta14
     *
     * @return float 
     */
    public function getNumvalormeta14()
    {
        return $this->numvalormeta14;
    }

    /**
     * Set numvalormeta15
     *
     * @param float $numvalormeta15
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta15($numvalormeta15)
    {
        $this->numvalormeta15 = $numvalormeta15;

        return $this;
    }

    /**
     * Get numvalormeta15
     *
     * @return float 
     */
    public function getNumvalormeta15()
    {
        return $this->numvalormeta15;
    }

    /**
     * Set numvalormeta16
     *
     * @param float $numvalormeta16
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta16($numvalormeta16)
    {
        $this->numvalormeta16 = $numvalormeta16;

        return $this;
    }

    /**
     * Get numvalormeta16
     *
     * @return float 
     */
    public function getNumvalormeta16()
    {
        return $this->numvalormeta16;
    }

    /**
     * Set numvalormeta17
     *
     * @param float $numvalormeta17
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta17($numvalormeta17)
    {
        $this->numvalormeta17 = $numvalormeta17;

        return $this;
    }

    /**
     * Get numvalormeta17
     *
     * @return float 
     */
    public function getNumvalormeta17()
    {
        return $this->numvalormeta17;
    }

    /**
     * Set numvalormeta18
     *
     * @param float $numvalormeta18
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta18($numvalormeta18)
    {
        $this->numvalormeta18 = $numvalormeta18;

        return $this;
    }

    /**
     * Get numvalormeta18
     *
     * @return float 
     */
    public function getNumvalormeta18()
    {
        return $this->numvalormeta18;
    }

    /**
     * Set numvalormeta19
     *
     * @param float $numvalormeta19
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta19($numvalormeta19)
    {
        $this->numvalormeta19 = $numvalormeta19;

        return $this;
    }

    /**
     * Get numvalormeta19
     *
     * @return float 
     */
    public function getNumvalormeta19()
    {
        return $this->numvalormeta19;
    }

    /**
     * Set numvalormeta20
     *
     * @param float $numvalormeta20
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta20($numvalormeta20)
    {
        $this->numvalormeta20 = $numvalormeta20;

        return $this;
    }

    /**
     * Get numvalormeta20
     *
     * @return float 
     */
    public function getNumvalormeta20()
    {
        return $this->numvalormeta20;
    }

    /**
     * Set numvalormeta21
     *
     * @param float $numvalormeta21
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta21($numvalormeta21)
    {
        $this->numvalormeta21 = $numvalormeta21;

        return $this;
    }

    /**
     * Get numvalormeta21
     *
     * @return float 
     */
    public function getNumvalormeta21()
    {
        return $this->numvalormeta21;
    }

    /**
     * Set numvalormeta22
     *
     * @param float $numvalormeta22
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta22($numvalormeta22)
    {
        $this->numvalormeta22 = $numvalormeta22;

        return $this;
    }

    /**
     * Get numvalormeta22
     *
     * @return float 
     */
    public function getNumvalormeta22()
    {
        return $this->numvalormeta22;
    }

    /**
     * Set numvalormeta23
     *
     * @param float $numvalormeta23
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta23($numvalormeta23)
    {
        $this->numvalormeta23 = $numvalormeta23;

        return $this;
    }

    /**
     * Get numvalormeta23
     *
     * @return float 
     */
    public function getNumvalormeta23()
    {
        return $this->numvalormeta23;
    }

    /**
     * Set numvalormeta24
     *
     * @param float $numvalormeta24
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta24($numvalormeta24)
    {
        $this->numvalormeta24 = $numvalormeta24;

        return $this;
    }

    /**
     * Get numvalormeta24
     *
     * @return float 
     */
    public function getNumvalormeta24()
    {
        return $this->numvalormeta24;
    }

    /**
     * Set numvalormeta25
     *
     * @param float $numvalormeta25
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta25($numvalormeta25)
    {
        $this->numvalormeta25 = $numvalormeta25;

        return $this;
    }

    /**
     * Get numvalormeta25
     *
     * @return float 
     */
    public function getNumvalormeta25()
    {
        return $this->numvalormeta25;
    }

    /**
     * Set numvalormeta26
     *
     * @param float $numvalormeta26
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta26($numvalormeta26)
    {
        $this->numvalormeta26 = $numvalormeta26;

        return $this;
    }

    /**
     * Get numvalormeta26
     *
     * @return float 
     */
    public function getNumvalormeta26()
    {
        return $this->numvalormeta26;
    }

    /**
     * Set numvalormeta27
     *
     * @param float $numvalormeta27
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta27($numvalormeta27)
    {
        $this->numvalormeta27 = $numvalormeta27;

        return $this;
    }

    /**
     * Get numvalormeta27
     *
     * @return float 
     */
    public function getNumvalormeta27()
    {
        return $this->numvalormeta27;
    }

    /**
     * Set numvalormeta28
     *
     * @param float $numvalormeta28
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta28($numvalormeta28)
    {
        $this->numvalormeta28 = $numvalormeta28;

        return $this;
    }

    /**
     * Get numvalormeta28
     *
     * @return float 
     */
    public function getNumvalormeta28()
    {
        return $this->numvalormeta28;
    }

    /**
     * Set numvalormeta29
     *
     * @param float $numvalormeta29
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta29($numvalormeta29)
    {
        $this->numvalormeta29 = $numvalormeta29;

        return $this;
    }

    /**
     * Get numvalormeta29
     *
     * @return float 
     */
    public function getNumvalormeta29()
    {
        return $this->numvalormeta29;
    }

    /**
     * Set numvalormeta30
     *
     * @param float $numvalormeta30
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta30($numvalormeta30)
    {
        $this->numvalormeta30 = $numvalormeta30;

        return $this;
    }

    /**
     * Get numvalormeta30
     *
     * @return float 
     */
    public function getNumvalormeta30()
    {
        return $this->numvalormeta30;
    }

    /**
     * Set numvalormeta31
     *
     * @param float $numvalormeta31
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta31($numvalormeta31)
    {
        $this->numvalormeta31 = $numvalormeta31;

        return $this;
    }

    /**
     * Get numvalormeta31
     *
     * @return float 
     */
    public function getNumvalormeta31()
    {
        return $this->numvalormeta31;
    }

    /**
     * Set numvalormeta32
     *
     * @param float $numvalormeta32
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta32($numvalormeta32)
    {
        $this->numvalormeta32 = $numvalormeta32;

        return $this;
    }

    /**
     * Get numvalormeta32
     *
     * @return float 
     */
    public function getNumvalormeta32()
    {
        return $this->numvalormeta32;
    }

    /**
     * Set numvalormeta33
     *
     * @param float $numvalormeta33
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta33($numvalormeta33)
    {
        $this->numvalormeta33 = $numvalormeta33;

        return $this;
    }

    /**
     * Get numvalormeta33
     *
     * @return float 
     */
    public function getNumvalormeta33()
    {
        return $this->numvalormeta33;
    }

    /**
     * Set numvalormeta34
     *
     * @param float $numvalormeta34
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta34($numvalormeta34)
    {
        $this->numvalormeta34 = $numvalormeta34;

        return $this;
    }

    /**
     * Get numvalormeta34
     *
     * @return float 
     */
    public function getNumvalormeta34()
    {
        return $this->numvalormeta34;
    }

    /**
     * Set numvalormeta35
     *
     * @param float $numvalormeta35
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta35($numvalormeta35)
    {
        $this->numvalormeta35 = $numvalormeta35;

        return $this;
    }

    /**
     * Get numvalormeta35
     *
     * @return float 
     */
    public function getNumvalormeta35()
    {
        return $this->numvalormeta35;
    }

    /**
     * Set numvalormeta36
     *
     * @param float $numvalormeta36
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta36($numvalormeta36)
    {
        $this->numvalormeta36 = $numvalormeta36;

        return $this;
    }

    /**
     * Get numvalormeta36
     *
     * @return float 
     */
    public function getNumvalormeta36()
    {
        return $this->numvalormeta36;
    }

    /**
     * Set numvalormeta37
     *
     * @param float $numvalormeta37
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta37($numvalormeta37)
    {
        $this->numvalormeta37 = $numvalormeta37;

        return $this;
    }

    /**
     * Get numvalormeta37
     *
     * @return float 
     */
    public function getNumvalormeta37()
    {
        return $this->numvalormeta37;
    }

    /**
     * Set numvalormeta38
     *
     * @param float $numvalormeta38
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta38($numvalormeta38)
    {
        $this->numvalormeta38 = $numvalormeta38;

        return $this;
    }

    /**
     * Get numvalormeta38
     *
     * @return float 
     */
    public function getNumvalormeta38()
    {
        return $this->numvalormeta38;
    }

    /**
     * Set numvalormeta39
     *
     * @param float $numvalormeta39
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta39($numvalormeta39)
    {
        $this->numvalormeta39 = $numvalormeta39;

        return $this;
    }

    /**
     * Get numvalormeta39
     *
     * @return float 
     */
    public function getNumvalormeta39()
    {
        return $this->numvalormeta39;
    }

    /**
     * Set numvalormeta40
     *
     * @param float $numvalormeta40
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta40($numvalormeta40)
    {
        $this->numvalormeta40 = $numvalormeta40;

        return $this;
    }

    /**
     * Get numvalormeta40
     *
     * @return float 
     */
    public function getNumvalormeta40()
    {
        return $this->numvalormeta40;
    }

    /**
     * Set numvalormeta41
     *
     * @param float $numvalormeta41
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta41($numvalormeta41)
    {
        $this->numvalormeta41 = $numvalormeta41;

        return $this;
    }

    /**
     * Get numvalormeta41
     *
     * @return float 
     */
    public function getNumvalormeta41()
    {
        return $this->numvalormeta41;
    }

    /**
     * Set numvalormeta42
     *
     * @param float $numvalormeta42
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta42($numvalormeta42)
    {
        $this->numvalormeta42 = $numvalormeta42;

        return $this;
    }

    /**
     * Get numvalormeta42
     *
     * @return float 
     */
    public function getNumvalormeta42()
    {
        return $this->numvalormeta42;
    }

    /**
     * Set numvalormeta43
     *
     * @param float $numvalormeta43
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta43($numvalormeta43)
    {
        $this->numvalormeta43 = $numvalormeta43;

        return $this;
    }

    /**
     * Get numvalormeta43
     *
     * @return float 
     */
    public function getNumvalormeta43()
    {
        return $this->numvalormeta43;
    }

    /**
     * Set numvalormeta44
     *
     * @param float $numvalormeta44
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta44($numvalormeta44)
    {
        $this->numvalormeta44 = $numvalormeta44;

        return $this;
    }

    /**
     * Get numvalormeta44
     *
     * @return float 
     */
    public function getNumvalormeta44()
    {
        return $this->numvalormeta44;
    }

    /**
     * Set numvalormeta45
     *
     * @param float $numvalormeta45
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta45($numvalormeta45)
    {
        $this->numvalormeta45 = $numvalormeta45;

        return $this;
    }

    /**
     * Get numvalormeta45
     *
     * @return float 
     */
    public function getNumvalormeta45()
    {
        return $this->numvalormeta45;
    }

    /**
     * Set numvalormeta46
     *
     * @param float $numvalormeta46
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta46($numvalormeta46)
    {
        $this->numvalormeta46 = $numvalormeta46;

        return $this;
    }

    /**
     * Get numvalormeta46
     *
     * @return float 
     */
    public function getNumvalormeta46()
    {
        return $this->numvalormeta46;
    }

    /**
     * Set numvalormeta47
     *
     * @param float $numvalormeta47
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta47($numvalormeta47)
    {
        $this->numvalormeta47 = $numvalormeta47;

        return $this;
    }

    /**
     * Get numvalormeta47
     *
     * @return float 
     */
    public function getNumvalormeta47()
    {
        return $this->numvalormeta47;
    }

    /**
     * Set numvalormeta48
     *
     * @param float $numvalormeta48
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta48($numvalormeta48)
    {
        $this->numvalormeta48 = $numvalormeta48;

        return $this;
    }

    /**
     * Get numvalormeta48
     *
     * @return float 
     */
    public function getNumvalormeta48()
    {
        return $this->numvalormeta48;
    }

    /**
     * Set numvalormeta49
     *
     * @param float $numvalormeta49
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta49($numvalormeta49)
    {
        $this->numvalormeta49 = $numvalormeta49;

        return $this;
    }

    /**
     * Get numvalormeta49
     *
     * @return float 
     */
    public function getNumvalormeta49()
    {
        return $this->numvalormeta49;
    }

    /**
     * Set numvalormeta50
     *
     * @param float $numvalormeta50
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta50($numvalormeta50)
    {
        $this->numvalormeta50 = $numvalormeta50;

        return $this;
    }

    /**
     * Get numvalormeta50
     *
     * @return float 
     */
    public function getNumvalormeta50()
    {
        return $this->numvalormeta50;
    }

    /**
     * Set numvalormeta51
     *
     * @param float $numvalormeta51
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta51($numvalormeta51)
    {
        $this->numvalormeta51 = $numvalormeta51;

        return $this;
    }

    /**
     * Get numvalormeta51
     *
     * @return float 
     */
    public function getNumvalormeta51()
    {
        return $this->numvalormeta51;
    }

    /**
     * Set numvalormeta52
     *
     * @param float $numvalormeta52
     * @return Objetivosmetasproductosterritorios
     */
    public function setNumvalormeta52($numvalormeta52)
    {
        $this->numvalormeta52 = $numvalormeta52;

        return $this;
    }

    /**
     * Get numvalormeta52
     *
     * @return float 
     */
    public function getNumvalormeta52()
    {
        return $this->numvalormeta52;
    }
}
