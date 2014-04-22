<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aumentosrebajas
 *
 * @ORM\Table(name="AumentosRebajas", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrAumentoRebaja_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Aumentosrebajas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumAumentoRebaja_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numaumentorebajaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAumentoRebaja_ky", type="string", length=10, nullable=true)
     */
    private $straumentorebajaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAumentoRebaja", type="integer", nullable=true)
     */
    private $numtipoaumentorebaja = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAplicacion", type="integer", nullable=true)
     */
    private $numtipoaplicacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelPrecio", type="integer", nullable=true)
     */
    private $numnivelprecio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioNeto", type="integer", nullable=true)
     */
    private $numprecioneto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntregar", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentregar = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadCobrar", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadcobrar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoValor", type="integer", nullable=true)
     */
    private $numtipovalor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogPorcentajeReal", type="boolean", nullable=true)
     */
    private $logporcentajereal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_1", type="integer", nullable=true)
     */
    private $numlimite1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_2", type="integer", nullable=true)
     */
    private $numlimite2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_3", type="integer", nullable=true)
     */
    private $numlimite3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_4", type="integer", nullable=true)
     */
    private $numlimite4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_5", type="integer", nullable=true)
     */
    private $numlimite5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_6", type="integer", nullable=true)
     */
    private $numlimite6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_7", type="integer", nullable=true)
     */
    private $numlimite7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_8", type="integer", nullable=true)
     */
    private $numlimite8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_9", type="integer", nullable=true)
     */
    private $numlimite9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimite_10", type="integer", nullable=true)
     */
    private $numlimite10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_7", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_8", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte8 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_9", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte9 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeImporte_10", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeimporte10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeMonedero", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajemonedero = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="LogPagarComision", type="boolean", nullable=true)
     */
    private $logpagarcomision = '0';



    /**
     * Get numaumentorebajaId
     *
     * @return integer 
     */
    public function getNumaumentorebajaId()
    {
        return $this->numaumentorebajaId;
    }

    /**
     * Set straumentorebajaKy
     *
     * @param string $straumentorebajaKy
     * @return Aumentosrebajas
     */
    public function setStraumentorebajaKy($straumentorebajaKy)
    {
        $this->straumentorebajaKy = $straumentorebajaKy;

        return $this;
    }

    /**
     * Get straumentorebajaKy
     *
     * @return string 
     */
    public function getStraumentorebajaKy()
    {
        return $this->straumentorebajaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Aumentosrebajas
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
     * Set numtipoaumentorebaja
     *
     * @param integer $numtipoaumentorebaja
     * @return Aumentosrebajas
     */
    public function setNumtipoaumentorebaja($numtipoaumentorebaja)
    {
        $this->numtipoaumentorebaja = $numtipoaumentorebaja;

        return $this;
    }

    /**
     * Get numtipoaumentorebaja
     *
     * @return integer 
     */
    public function getNumtipoaumentorebaja()
    {
        return $this->numtipoaumentorebaja;
    }

    /**
     * Set numtipoaplicacion
     *
     * @param integer $numtipoaplicacion
     * @return Aumentosrebajas
     */
    public function setNumtipoaplicacion($numtipoaplicacion)
    {
        $this->numtipoaplicacion = $numtipoaplicacion;

        return $this;
    }

    /**
     * Get numtipoaplicacion
     *
     * @return integer 
     */
    public function getNumtipoaplicacion()
    {
        return $this->numtipoaplicacion;
    }

    /**
     * Set numnivelprecio
     *
     * @param integer $numnivelprecio
     * @return Aumentosrebajas
     */
    public function setNumnivelprecio($numnivelprecio)
    {
        $this->numnivelprecio = $numnivelprecio;

        return $this;
    }

    /**
     * Get numnivelprecio
     *
     * @return integer 
     */
    public function getNumnivelprecio()
    {
        return $this->numnivelprecio;
    }

    /**
     * Set numprecioneto
     *
     * @param integer $numprecioneto
     * @return Aumentosrebajas
     */
    public function setNumprecioneto($numprecioneto)
    {
        $this->numprecioneto = $numprecioneto;

        return $this;
    }

    /**
     * Get numprecioneto
     *
     * @return integer 
     */
    public function getNumprecioneto()
    {
        return $this->numprecioneto;
    }

    /**
     * Set numcantidadentregar
     *
     * @param float $numcantidadentregar
     * @return Aumentosrebajas
     */
    public function setNumcantidadentregar($numcantidadentregar)
    {
        $this->numcantidadentregar = $numcantidadentregar;

        return $this;
    }

    /**
     * Get numcantidadentregar
     *
     * @return float 
     */
    public function getNumcantidadentregar()
    {
        return $this->numcantidadentregar;
    }

    /**
     * Set numcantidadcobrar
     *
     * @param float $numcantidadcobrar
     * @return Aumentosrebajas
     */
    public function setNumcantidadcobrar($numcantidadcobrar)
    {
        $this->numcantidadcobrar = $numcantidadcobrar;

        return $this;
    }

    /**
     * Get numcantidadcobrar
     *
     * @return float 
     */
    public function getNumcantidadcobrar()
    {
        return $this->numcantidadcobrar;
    }

    /**
     * Set numtipovalor
     *
     * @param integer $numtipovalor
     * @return Aumentosrebajas
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
     * Set logporcentajereal
     *
     * @param boolean $logporcentajereal
     * @return Aumentosrebajas
     */
    public function setLogporcentajereal($logporcentajereal)
    {
        $this->logporcentajereal = $logporcentajereal;

        return $this;
    }

    /**
     * Get logporcentajereal
     *
     * @return boolean 
     */
    public function getLogporcentajereal()
    {
        return $this->logporcentajereal;
    }

    /**
     * Set numlimite1
     *
     * @param integer $numlimite1
     * @return Aumentosrebajas
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
     * Set numlimite2
     *
     * @param integer $numlimite2
     * @return Aumentosrebajas
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
     * Set numlimite3
     *
     * @param integer $numlimite3
     * @return Aumentosrebajas
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
     * Set numlimite4
     *
     * @param integer $numlimite4
     * @return Aumentosrebajas
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
     * Set numlimite5
     *
     * @param integer $numlimite5
     * @return Aumentosrebajas
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
     * Set numlimite6
     *
     * @param integer $numlimite6
     * @return Aumentosrebajas
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
     * Set numlimite7
     *
     * @param integer $numlimite7
     * @return Aumentosrebajas
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
     * Set numlimite8
     *
     * @param integer $numlimite8
     * @return Aumentosrebajas
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
     * Set numlimite9
     *
     * @param integer $numlimite9
     * @return Aumentosrebajas
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
     * Set numlimite10
     *
     * @param integer $numlimite10
     * @return Aumentosrebajas
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
     * Set numporcentajeimporte1
     *
     * @param float $numporcentajeimporte1
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte1($numporcentajeimporte1)
    {
        $this->numporcentajeimporte1 = $numporcentajeimporte1;

        return $this;
    }

    /**
     * Get numporcentajeimporte1
     *
     * @return float 
     */
    public function getNumporcentajeimporte1()
    {
        return $this->numporcentajeimporte1;
    }

    /**
     * Set numporcentajeimporte2
     *
     * @param float $numporcentajeimporte2
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte2($numporcentajeimporte2)
    {
        $this->numporcentajeimporte2 = $numporcentajeimporte2;

        return $this;
    }

    /**
     * Get numporcentajeimporte2
     *
     * @return float 
     */
    public function getNumporcentajeimporte2()
    {
        return $this->numporcentajeimporte2;
    }

    /**
     * Set numporcentajeimporte3
     *
     * @param float $numporcentajeimporte3
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte3($numporcentajeimporte3)
    {
        $this->numporcentajeimporte3 = $numporcentajeimporte3;

        return $this;
    }

    /**
     * Get numporcentajeimporte3
     *
     * @return float 
     */
    public function getNumporcentajeimporte3()
    {
        return $this->numporcentajeimporte3;
    }

    /**
     * Set numporcentajeimporte4
     *
     * @param float $numporcentajeimporte4
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte4($numporcentajeimporte4)
    {
        $this->numporcentajeimporte4 = $numporcentajeimporte4;

        return $this;
    }

    /**
     * Get numporcentajeimporte4
     *
     * @return float 
     */
    public function getNumporcentajeimporte4()
    {
        return $this->numporcentajeimporte4;
    }

    /**
     * Set numporcentajeimporte5
     *
     * @param float $numporcentajeimporte5
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte5($numporcentajeimporte5)
    {
        $this->numporcentajeimporte5 = $numporcentajeimporte5;

        return $this;
    }

    /**
     * Get numporcentajeimporte5
     *
     * @return float 
     */
    public function getNumporcentajeimporte5()
    {
        return $this->numporcentajeimporte5;
    }

    /**
     * Set numporcentajeimporte6
     *
     * @param float $numporcentajeimporte6
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte6($numporcentajeimporte6)
    {
        $this->numporcentajeimporte6 = $numporcentajeimporte6;

        return $this;
    }

    /**
     * Get numporcentajeimporte6
     *
     * @return float 
     */
    public function getNumporcentajeimporte6()
    {
        return $this->numporcentajeimporte6;
    }

    /**
     * Set numporcentajeimporte7
     *
     * @param float $numporcentajeimporte7
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte7($numporcentajeimporte7)
    {
        $this->numporcentajeimporte7 = $numporcentajeimporte7;

        return $this;
    }

    /**
     * Get numporcentajeimporte7
     *
     * @return float 
     */
    public function getNumporcentajeimporte7()
    {
        return $this->numporcentajeimporte7;
    }

    /**
     * Set numporcentajeimporte8
     *
     * @param float $numporcentajeimporte8
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte8($numporcentajeimporte8)
    {
        $this->numporcentajeimporte8 = $numporcentajeimporte8;

        return $this;
    }

    /**
     * Get numporcentajeimporte8
     *
     * @return float 
     */
    public function getNumporcentajeimporte8()
    {
        return $this->numporcentajeimporte8;
    }

    /**
     * Set numporcentajeimporte9
     *
     * @param float $numporcentajeimporte9
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte9($numporcentajeimporte9)
    {
        $this->numporcentajeimporte9 = $numporcentajeimporte9;

        return $this;
    }

    /**
     * Get numporcentajeimporte9
     *
     * @return float 
     */
    public function getNumporcentajeimporte9()
    {
        return $this->numporcentajeimporte9;
    }

    /**
     * Set numporcentajeimporte10
     *
     * @param float $numporcentajeimporte10
     * @return Aumentosrebajas
     */
    public function setNumporcentajeimporte10($numporcentajeimporte10)
    {
        $this->numporcentajeimporte10 = $numporcentajeimporte10;

        return $this;
    }

    /**
     * Get numporcentajeimporte10
     *
     * @return float 
     */
    public function getNumporcentajeimporte10()
    {
        return $this->numporcentajeimporte10;
    }

    /**
     * Set numporcentajemonedero
     *
     * @param float $numporcentajemonedero
     * @return Aumentosrebajas
     */
    public function setNumporcentajemonedero($numporcentajemonedero)
    {
        $this->numporcentajemonedero = $numporcentajemonedero;

        return $this;
    }

    /**
     * Get numporcentajemonedero
     *
     * @return float 
     */
    public function getNumporcentajemonedero()
    {
        return $this->numporcentajemonedero;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Aumentosrebajas
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
     * @return Aumentosrebajas
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
     * @return Aumentosrebajas
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
     * @return Aumentosrebajas
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
     * @return Aumentosrebajas
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
     * Set logpagarcomision
     *
     * @param boolean $logpagarcomision
     * @return Aumentosrebajas
     */
    public function setLogpagarcomision($logpagarcomision)
    {
        $this->logpagarcomision = $logpagarcomision;

        return $this;
    }

    /**
     * Get logpagarcomision
     *
     * @return boolean 
     */
    public function getLogpagarcomision()
    {
        return $this->logpagarcomision;
    }
}
