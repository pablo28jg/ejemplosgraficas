<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Politicascomision
 *
 * @ORM\Table(name="PoliticasComision", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrPoliticaComision_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Politicascomision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPoliticaComision_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numpoliticacomisionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrPoliticaComision_ky", type="string", length=10, nullable=true)
     */
    private $strpoliticacomisionKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoMetodoPago", type="integer", nullable=true)
     */
    private $numtipometodopago = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCondicionPago", type="integer", nullable=true)
     */
    private $numtipocondicionpago = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoValor", type="integer", nullable=true)
     */
    private $numtipovalor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_1", type="integer", nullable=true)
     */
    private $numlimite1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_1", type="integer", nullable=true)
     */
    private $numimporte1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_2", type="integer", nullable=true)
     */
    private $numlimite2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_2", type="integer", nullable=true)
     */
    private $numimporte2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_3", type="integer", nullable=true)
     */
    private $numlimite3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_3", type="integer", nullable=true)
     */
    private $numimporte3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_4", type="integer", nullable=true)
     */
    private $numlimite4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_4", type="integer", nullable=true)
     */
    private $numimporte4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_5", type="integer", nullable=true)
     */
    private $numlimite5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_5", type="integer", nullable=true)
     */
    private $numimporte5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_6", type="integer", nullable=true)
     */
    private $numlimite6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_6", type="integer", nullable=true)
     */
    private $numimporte6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_7", type="integer", nullable=true)
     */
    private $numlimite7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_7", type="integer", nullable=true)
     */
    private $numimporte7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_8", type="integer", nullable=true)
     */
    private $numlimite8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_8", type="integer", nullable=true)
     */
    private $numimporte8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_9", type="integer", nullable=true)
     */
    private $numlimite9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_9", type="integer", nullable=true)
     */
    private $numimporte9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_10", type="integer", nullable=true)
     */
    private $numlimite10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumImporte_10", type="integer", nullable=true)
     */
    private $numimporte10 = '0';

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
     * Get numpoliticacomisionId
     *
     * @return integer 
     */
    public function getNumpoliticacomisionId()
    {
        return $this->numpoliticacomisionId;
    }

    /**
     * Set strpoliticacomisionKy
     *
     * @param string $strpoliticacomisionKy
     * @return Politicascomision
     */
    public function setStrpoliticacomisionKy($strpoliticacomisionKy)
    {
        $this->strpoliticacomisionKy = $strpoliticacomisionKy;

        return $this;
    }

    /**
     * Get strpoliticacomisionKy
     *
     * @return string 
     */
    public function getStrpoliticacomisionKy()
    {
        return $this->strpoliticacomisionKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Politicascomision
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
     * Set numtipometodopago
     *
     * @param integer $numtipometodopago
     * @return Politicascomision
     */
    public function setNumtipometodopago($numtipometodopago)
    {
        $this->numtipometodopago = $numtipometodopago;

        return $this;
    }

    /**
     * Get numtipometodopago
     *
     * @return integer 
     */
    public function getNumtipometodopago()
    {
        return $this->numtipometodopago;
    }

    /**
     * Set numtipocondicionpago
     *
     * @param integer $numtipocondicionpago
     * @return Politicascomision
     */
    public function setNumtipocondicionpago($numtipocondicionpago)
    {
        $this->numtipocondicionpago = $numtipocondicionpago;

        return $this;
    }

    /**
     * Get numtipocondicionpago
     *
     * @return integer 
     */
    public function getNumtipocondicionpago()
    {
        return $this->numtipocondicionpago;
    }

    /**
     * Set numtipovalor
     *
     * @param integer $numtipovalor
     * @return Politicascomision
     */
    public function setNumtipovalor($numtipovalor)
    {
        $this->numtipovalor = $numtipovalor;

        return $this;
    }

    /**
     * Get numtipovalor
     *
     * @return integer 
     */
    public function getNumtipovalor()
    {
        return $this->numtipovalor;
    }

    /**
     * Set numlimite1
     *
     * @param integer $numlimite1
     * @return Politicascomision
     */
    public function setNumlimite1($numlimite1)
    {
        $this->numlimite1 = $numlimite1;

        return $this;
    }

    /**
     * Get numlimite1
     *
     * @return integer 
     */
    public function getNumlimite1()
    {
        return $this->numlimite1;
    }

    /**
     * Set numimporte1
     *
     * @param integer $numimporte1
     * @return Politicascomision
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
     * Set numlimite2
     *
     * @param integer $numlimite2
     * @return Politicascomision
     */
    public function setNumlimite2($numlimite2)
    {
        $this->numlimite2 = $numlimite2;

        return $this;
    }

    /**
     * Get numlimite2
     *
     * @return integer 
     */
    public function getNumlimite2()
    {
        return $this->numlimite2;
    }

    /**
     * Set numimporte2
     *
     * @param integer $numimporte2
     * @return Politicascomision
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
     * Set numlimite3
     *
     * @param integer $numlimite3
     * @return Politicascomision
     */
    public function setNumlimite3($numlimite3)
    {
        $this->numlimite3 = $numlimite3;

        return $this;
    }

    /**
     * Get numlimite3
     *
     * @return integer 
     */
    public function getNumlimite3()
    {
        return $this->numlimite3;
    }

    /**
     * Set numimporte3
     *
     * @param integer $numimporte3
     * @return Politicascomision
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
     * Set numlimite4
     *
     * @param integer $numlimite4
     * @return Politicascomision
     */
    public function setNumlimite4($numlimite4)
    {
        $this->numlimite4 = $numlimite4;

        return $this;
    }

    /**
     * Get numlimite4
     *
     * @return integer 
     */
    public function getNumlimite4()
    {
        return $this->numlimite4;
    }

    /**
     * Set numimporte4
     *
     * @param integer $numimporte4
     * @return Politicascomision
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
     * Set numlimite5
     *
     * @param integer $numlimite5
     * @return Politicascomision
     */
    public function setNumlimite5($numlimite5)
    {
        $this->numlimite5 = $numlimite5;

        return $this;
    }

    /**
     * Get numlimite5
     *
     * @return integer 
     */
    public function getNumlimite5()
    {
        return $this->numlimite5;
    }

    /**
     * Set numimporte5
     *
     * @param integer $numimporte5
     * @return Politicascomision
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
     * Set numlimite6
     *
     * @param integer $numlimite6
     * @return Politicascomision
     */
    public function setNumlimite6($numlimite6)
    {
        $this->numlimite6 = $numlimite6;

        return $this;
    }

    /**
     * Get numlimite6
     *
     * @return integer 
     */
    public function getNumlimite6()
    {
        return $this->numlimite6;
    }

    /**
     * Set numimporte6
     *
     * @param integer $numimporte6
     * @return Politicascomision
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
     * Set numlimite7
     *
     * @param integer $numlimite7
     * @return Politicascomision
     */
    public function setNumlimite7($numlimite7)
    {
        $this->numlimite7 = $numlimite7;

        return $this;
    }

    /**
     * Get numlimite7
     *
     * @return integer 
     */
    public function getNumlimite7()
    {
        return $this->numlimite7;
    }

    /**
     * Set numimporte7
     *
     * @param integer $numimporte7
     * @return Politicascomision
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
     * Set numlimite8
     *
     * @param integer $numlimite8
     * @return Politicascomision
     */
    public function setNumlimite8($numlimite8)
    {
        $this->numlimite8 = $numlimite8;

        return $this;
    }

    /**
     * Get numlimite8
     *
     * @return integer 
     */
    public function getNumlimite8()
    {
        return $this->numlimite8;
    }

    /**
     * Set numimporte8
     *
     * @param integer $numimporte8
     * @return Politicascomision
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
     * Set numlimite9
     *
     * @param integer $numlimite9
     * @return Politicascomision
     */
    public function setNumlimite9($numlimite9)
    {
        $this->numlimite9 = $numlimite9;

        return $this;
    }

    /**
     * Get numlimite9
     *
     * @return integer 
     */
    public function getNumlimite9()
    {
        return $this->numlimite9;
    }

    /**
     * Set numimporte9
     *
     * @param integer $numimporte9
     * @return Politicascomision
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
     * Set numlimite10
     *
     * @param integer $numlimite10
     * @return Politicascomision
     */
    public function setNumlimite10($numlimite10)
    {
        $this->numlimite10 = $numlimite10;

        return $this;
    }

    /**
     * Get numlimite10
     *
     * @return integer 
     */
    public function getNumlimite10()
    {
        return $this->numlimite10;
    }

    /**
     * Set numimporte10
     *
     * @param integer $numimporte10
     * @return Politicascomision
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Politicascomision
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
     * @return Politicascomision
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
     * @return Politicascomision
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
     * @return Politicascomision
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
     * @return Politicascomision
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
