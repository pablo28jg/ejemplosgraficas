<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristicasasignaciones
 *
 * @ORM\Table(name="CaracteristicasAsignaciones", indexes={@ORM\Index(name="Indice_1", columns={"NumCaracteristica_id", "NumConsecutivo_id", "NumCaracteristicaEspecifica_id"}), @ORM\Index(name="Indice_2", columns={"NumCaracteristicaEspecifica_id"})})
 * @ORM\Entity
 */
class Caracteristicasasignaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcaracteristicaId = '0';

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
     * @ORM\Column(name="NumTipoDato", type="integer", nullable=true)
     */
    private $numtipodato = '0';

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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Caracteristicasasignaciones
     */
    public function setNumconsecutivoId($numconsecutivoId)
    {
        $this->numconsecutivoId = $numconsecutivoId;

        return $this;
    }

    /**
     * Get numconsecutivoId
     *
     * @return integer 
     */
    public function getNumconsecutivoId()
    {
        return $this->numconsecutivoId;
    }

    /**
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Caracteristicasasignaciones
     */
    public function setNumcaracteristicaId($numcaracteristicaId)
    {
        $this->numcaracteristicaId = $numcaracteristicaId;

        return $this;
    }

    /**
     * Get numcaracteristicaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaId()
    {
        return $this->numcaracteristicaId;
    }

    /**
     * Set numcaracteristicaespecificaId
     *
     * @param integer $numcaracteristicaespecificaId
     * @return Caracteristicasasignaciones
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
     * Set numtipodato
     *
     * @param integer $numtipodato
     * @return Caracteristicasasignaciones
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
     * Set strdatotexto
     *
     * @param string $strdatotexto
     * @return Caracteristicasasignaciones
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
     * @return Caracteristicasasignaciones
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
     * @return Caracteristicasasignaciones
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
     * @return Caracteristicasasignaciones
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
     * @return Caracteristicasasignaciones
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
     * @return Caracteristicasasignaciones
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
     * @return Caracteristicasasignaciones
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
