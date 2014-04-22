<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conciliacionvalores
 *
 * @ORM\Table(name="ConciliacionValores", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrConciliacion_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumOrdenOperacion"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Conciliacionvalores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConciliacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconciliacionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrConciliacion_ky", type="string", length=10, nullable=true)
     */
    private $strconciliacionKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoValor", type="integer", nullable=true)
     */
    private $numtipovalor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoOperacion", type="integer", nullable=true)
     */
    private $numtipooperacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenOperacion", type="integer", nullable=true)
     */
    private $numordenoperacion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogInvertirValor", type="boolean", nullable=true)
     */
    private $loginvertirvalor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_1", type="boolean", nullable=true)
     */
    private $logacumularen1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_2", type="boolean", nullable=true)
     */
    private $logacumularen2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_3", type="boolean", nullable=true)
     */
    private $logacumularen3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_4", type="boolean", nullable=true)
     */
    private $logacumularen4 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_5", type="boolean", nullable=true)
     */
    private $logacumularen5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAcumuladorTomar", type="integer", nullable=true)
     */
    private $numacumuladortomar = '0';

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
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get numconciliacionId
     *
     * @return integer 
     */
    public function getNumconciliacionId()
    {
        return $this->numconciliacionId;
    }

    /**
     * Set strconciliacionKy
     *
     * @param string $strconciliacionKy
     * @return Conciliacionvalores
     */
    public function setStrconciliacionKy($strconciliacionKy)
    {
        $this->strconciliacionKy = $strconciliacionKy;

        return $this;
    }

    /**
     * Get strconciliacionKy
     *
     * @return string 
     */
    public function getStrconciliacionKy()
    {
        return $this->strconciliacionKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Conciliacionvalores
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
     * Set numtipovalor
     *
     * @param integer $numtipovalor
     * @return Conciliacionvalores
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
     * Set numtipooperacion
     *
     * @param integer $numtipooperacion
     * @return Conciliacionvalores
     */
    public function setNumtipooperacion($numtipooperacion)
    {
        $this->numtipooperacion = $numtipooperacion;

        return $this;
    }

    /**
     * Get numtipooperacion
     *
     * @return integer 
     */
    public function getNumtipooperacion()
    {
        return $this->numtipooperacion;
    }

    /**
     * Set numordenoperacion
     *
     * @param integer $numordenoperacion
     * @return Conciliacionvalores
     */
    public function setNumordenoperacion($numordenoperacion)
    {
        $this->numordenoperacion = $numordenoperacion;

        return $this;
    }

    /**
     * Get numordenoperacion
     *
     * @return integer 
     */
    public function getNumordenoperacion()
    {
        return $this->numordenoperacion;
    }

    /**
     * Set loginvertirvalor
     *
     * @param boolean $loginvertirvalor
     * @return Conciliacionvalores
     */
    public function setLoginvertirvalor($loginvertirvalor)
    {
        $this->loginvertirvalor = $loginvertirvalor;

        return $this;
    }

    /**
     * Get loginvertirvalor
     *
     * @return boolean 
     */
    public function getLoginvertirvalor()
    {
        return $this->loginvertirvalor;
    }

    /**
     * Set logacumularen1
     *
     * @param boolean $logacumularen1
     * @return Conciliacionvalores
     */
    public function setLogacumularen1($logacumularen1)
    {
        $this->logacumularen1 = $logacumularen1;

        return $this;
    }

    /**
     * Get logacumularen1
     *
     * @return boolean 
     */
    public function getLogacumularen1()
    {
        return $this->logacumularen1;
    }

    /**
     * Set logacumularen2
     *
     * @param boolean $logacumularen2
     * @return Conciliacionvalores
     */
    public function setLogacumularen2($logacumularen2)
    {
        $this->logacumularen2 = $logacumularen2;

        return $this;
    }

    /**
     * Get logacumularen2
     *
     * @return boolean 
     */
    public function getLogacumularen2()
    {
        return $this->logacumularen2;
    }

    /**
     * Set logacumularen3
     *
     * @param boolean $logacumularen3
     * @return Conciliacionvalores
     */
    public function setLogacumularen3($logacumularen3)
    {
        $this->logacumularen3 = $logacumularen3;

        return $this;
    }

    /**
     * Get logacumularen3
     *
     * @return boolean 
     */
    public function getLogacumularen3()
    {
        return $this->logacumularen3;
    }

    /**
     * Set logacumularen4
     *
     * @param boolean $logacumularen4
     * @return Conciliacionvalores
     */
    public function setLogacumularen4($logacumularen4)
    {
        $this->logacumularen4 = $logacumularen4;

        return $this;
    }

    /**
     * Get logacumularen4
     *
     * @return boolean 
     */
    public function getLogacumularen4()
    {
        return $this->logacumularen4;
    }

    /**
     * Set logacumularen5
     *
     * @param boolean $logacumularen5
     * @return Conciliacionvalores
     */
    public function setLogacumularen5($logacumularen5)
    {
        $this->logacumularen5 = $logacumularen5;

        return $this;
    }

    /**
     * Get logacumularen5
     *
     * @return boolean 
     */
    public function getLogacumularen5()
    {
        return $this->logacumularen5;
    }

    /**
     * Set numacumuladortomar
     *
     * @param integer $numacumuladortomar
     * @return Conciliacionvalores
     */
    public function setNumacumuladortomar($numacumuladortomar)
    {
        $this->numacumuladortomar = $numacumuladortomar;

        return $this;
    }

    /**
     * Get numacumuladortomar
     *
     * @return integer 
     */
    public function getNumacumuladortomar()
    {
        return $this->numacumuladortomar;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Conciliacionvalores
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
     * @return Conciliacionvalores
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
     * @return Conciliacionvalores
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
     * @return Conciliacionvalores
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
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Conciliacionvalores
     */
    public function setNumtipoestado($numtipoestado)
    {
        $this->numtipoestado = $numtipoestado;

        return $this;
    }

    /**
     * Get numtipoestado
     *
     * @return integer 
     */
    public function getNumtipoestado()
    {
        return $this->numtipoestado;
    }

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Conciliacionvalores
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
