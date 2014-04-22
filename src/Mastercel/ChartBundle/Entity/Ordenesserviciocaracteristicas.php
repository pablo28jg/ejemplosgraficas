<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordenesserviciocaracteristicas
 *
 * @ORM\Table(name="OrdenesServicioCaracteristicas")
 * @ORM\Entity
 */
class Ordenesserviciocaracteristicas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenServicio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numordenservicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristicaEspecifica_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcaracteristicaespecificaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristicaGeneral_id", type="integer", nullable=true)
     */
    private $numcaracteristicageneralId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDato", type="integer", nullable=true)
     */
    private $numtipodato = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrVariable", type="string", length=30, nullable=true)
     */
    private $strvariable;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDatoTexto", type="string", length=150, nullable=true)
     */
    private $strdatotexto;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDatoEntero", type="integer", nullable=true)
     */
    private $numdatoentero = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogDatoLogico", type="boolean", nullable=true)
     */
    private $logdatologico = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumDatoReal", type="float", precision=53, scale=0, nullable=true)
     */
    private $numdatoreal = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteDatoFechaHora", type="datetime", nullable=true)
     */
    private $dtedatofechahora;

    /**
     * @var string
     *
     * @ORM\Column(name="MemDatoMemo", type="text", length=16, nullable=true)
     */
    private $memdatomemo;

    /**
     * @var string
     *
     * @ORM\Column(name="ImgDatoImagen", type="text", length=16, nullable=true)
     */
    private $imgdatoimagen;



    /**
     * Set numordenservicioId
     *
     * @param integer $numordenservicioId
     * @return Ordenesserviciocaracteristicas
     */
    public function setNumordenservicioId($numordenservicioId)
    {
        $this->numordenservicioId = $numordenservicioId;

        return $this;
    }

    /**
     * Get numordenservicioId
     *
     * @return integer 
     */
    public function getNumordenservicioId()
    {
        return $this->numordenservicioId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Ordenesserviciocaracteristicas
     */
    public function setNumalmacenId($numalmacenId)
    {
        $this->numalmacenId = $numalmacenId;

        return $this;
    }

    /**
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set numcaracteristicaespecificaId
     *
     * @param integer $numcaracteristicaespecificaId
     * @return Ordenesserviciocaracteristicas
     */
    public function setNumcaracteristicaespecificaId($numcaracteristicaespecificaId)
    {
        $this->numcaracteristicaespecificaId = $numcaracteristicaespecificaId;

        return $this;
    }

    /**
     * Get numcaracteristicaespecificaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaespecificaId()
    {
        return $this->numcaracteristicaespecificaId;
    }

    /**
     * Set numcaracteristicageneralId
     *
     * @param integer $numcaracteristicageneralId
     * @return Ordenesserviciocaracteristicas
     */
    public function setNumcaracteristicageneralId($numcaracteristicageneralId)
    {
        $this->numcaracteristicageneralId = $numcaracteristicageneralId;

        return $this;
    }

    /**
     * Get numcaracteristicageneralId
     *
     * @return integer 
     */
    public function getNumcaracteristicageneralId()
    {
        return $this->numcaracteristicageneralId;
    }

    /**
     * Set numtipodato
     *
     * @param integer $numtipodato
     * @return Ordenesserviciocaracteristicas
     */
    public function setNumtipodato($numtipodato)
    {
        $this->numtipodato = $numtipodato;

        return $this;
    }

    /**
     * Get numtipodato
     *
     * @return integer 
     */
    public function getNumtipodato()
    {
        return $this->numtipodato;
    }

    /**
     * Set strvariable
     *
     * @param string $strvariable
     * @return Ordenesserviciocaracteristicas
     */
    public function setStrvariable($strvariable)
    {
        $this->strvariable = $strvariable;

        return $this;
    }

    /**
     * Get strvariable
     *
     * @return string 
     */
    public function getStrvariable()
    {
        return $this->strvariable;
    }

    /**
     * Set strdatotexto
     *
     * @param string $strdatotexto
     * @return Ordenesserviciocaracteristicas
     */
    public function setStrdatotexto($strdatotexto)
    {
        $this->strdatotexto = $strdatotexto;

        return $this;
    }

    /**
     * Get strdatotexto
     *
     * @return string 
     */
    public function getStrdatotexto()
    {
        return $this->strdatotexto;
    }

    /**
     * Set numdatoentero
     *
     * @param integer $numdatoentero
     * @return Ordenesserviciocaracteristicas
     */
    public function setNumdatoentero($numdatoentero)
    {
        $this->numdatoentero = $numdatoentero;

        return $this;
    }

    /**
     * Get numdatoentero
     *
     * @return integer 
     */
    public function getNumdatoentero()
    {
        return $this->numdatoentero;
    }

    /**
     * Set logdatologico
     *
     * @param boolean $logdatologico
     * @return Ordenesserviciocaracteristicas
     */
    public function setLogdatologico($logdatologico)
    {
        $this->logdatologico = $logdatologico;

        return $this;
    }

    /**
     * Get logdatologico
     *
     * @return boolean 
     */
    public function getLogdatologico()
    {
        return $this->logdatologico;
    }

    /**
     * Set numdatoreal
     *
     * @param float $numdatoreal
     * @return Ordenesserviciocaracteristicas
     */
    public function setNumdatoreal($numdatoreal)
    {
        $this->numdatoreal = $numdatoreal;

        return $this;
    }

    /**
     * Get numdatoreal
     *
     * @return float 
     */
    public function getNumdatoreal()
    {
        return $this->numdatoreal;
    }

    /**
     * Set dtedatofechahora
     *
     * @param \DateTime $dtedatofechahora
     * @return Ordenesserviciocaracteristicas
     */
    public function setDtedatofechahora($dtedatofechahora)
    {
        $this->dtedatofechahora = $dtedatofechahora;

        return $this;
    }

    /**
     * Get dtedatofechahora
     *
     * @return \DateTime 
     */
    public function getDtedatofechahora()
    {
        return $this->dtedatofechahora;
    }

    /**
     * Set memdatomemo
     *
     * @param string $memdatomemo
     * @return Ordenesserviciocaracteristicas
     */
    public function setMemdatomemo($memdatomemo)
    {
        $this->memdatomemo = $memdatomemo;

        return $this;
    }

    /**
     * Get memdatomemo
     *
     * @return string 
     */
    public function getMemdatomemo()
    {
        return $this->memdatomemo;
    }

    /**
     * Set imgdatoimagen
     *
     * @param string $imgdatoimagen
     * @return Ordenesserviciocaracteristicas
     */
    public function setImgdatoimagen($imgdatoimagen)
    {
        $this->imgdatoimagen = $imgdatoimagen;

        return $this;
    }

    /**
     * Get imgdatoimagen
     *
     * @return string 
     */
    public function getImgdatoimagen()
    {
        return $this->imgdatoimagen;
    }
}
