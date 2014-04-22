<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oportunidadescaracteristicas
 *
 * @ORM\Table(name="OportunidadesCaracteristicas", indexes={@ORM\Index(name="Indice_1", columns={"NumOportunidad_id", "NumAlmacen_id", "NumOportunidadCaracteristica_id", "StrArticulo_ky", "StrVariable"})})
 * @ORM\Entity
 */
class Oportunidadescaracteristicas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numoportunidadId = '0';

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
     * @ORM\Column(name="NumOportunidadCaracteristica_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numoportunidadcaracteristicaId = '0';

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
     * @ORM\Column(name="StrVariable", type="string", length=60, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;



    /**
     * Set numoportunidadId
     *
     * @param integer $numoportunidadId
     * @return Oportunidadescaracteristicas
     */
    public function setNumoportunidadId($numoportunidadId)
    {
        $this->numoportunidadId = $numoportunidadId;

        return $this;
    }

    /**
     * Get numoportunidadId
     *
     * @return integer 
     */
    public function getNumoportunidadId()
    {
        return $this->numoportunidadId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Oportunidadescaracteristicas
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
     * Set numoportunidadcaracteristicaId
     *
     * @param integer $numoportunidadcaracteristicaId
     * @return Oportunidadescaracteristicas
     */
    public function setNumoportunidadcaracteristicaId($numoportunidadcaracteristicaId)
    {
        $this->numoportunidadcaracteristicaId = $numoportunidadcaracteristicaId;

        return $this;
    }

    /**
     * Get numoportunidadcaracteristicaId
     *
     * @return integer 
     */
    public function getNumoportunidadcaracteristicaId()
    {
        return $this->numoportunidadcaracteristicaId;
    }

    /**
     * Set numcaracteristicaespecificaId
     *
     * @param integer $numcaracteristicaespecificaId
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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
     * @return Oportunidadescaracteristicas
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

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Oportunidadescaracteristicas
     */
    public function setStrarticuloKy($strarticuloKy)
    {
        $this->strarticuloKy = $strarticuloKy;

        return $this;
    }

    /**
     * Get strarticuloKy
     *
     * @return string 
     */
    public function getStrarticuloKy()
    {
        return $this->strarticuloKy;
    }
}
