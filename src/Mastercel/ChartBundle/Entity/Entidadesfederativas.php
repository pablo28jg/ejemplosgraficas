<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadesfederativas
 *
 * @ORM\Table(name="EntidadesFederativas", indexes={@ORM\Index(name="Indice_1", columns={"StrAbreviacion"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumPais_id"}), @ORM\Index(name="Indice_4", columns={"StrCodigoPostalInicial", "StrCodigoPostalFinal"}), @ORM\Index(name="Indice_5", columns={"DteActualizacion"}), @ORM\Index(name="Indice_6", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Entidadesfederativas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidadFederativa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numentidadfederativaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAbreviacion", type="string", length=10, nullable=true)
     */
    private $strabreviacion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPais_id", type="integer", nullable=true)
     */
    private $numpaisId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoPostalInicial", type="string", length=5, nullable=true)
     */
    private $strcodigopostalinicial;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoPostalFinal", type="string", length=5, nullable=true)
     */
    private $strcodigopostalfinal;

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
     * Get numentidadfederativaId
     *
     * @return integer 
     */
    public function getNumentidadfederativaId()
    {
        return $this->numentidadfederativaId;
    }

    /**
     * Set strabreviacion
     *
     * @param string $strabreviacion
     * @return Entidadesfederativas
     */
    public function setStrabreviacion($strabreviacion)
    {
        $this->strabreviacion = $strabreviacion;

        return $this;
    }

    /**
     * Get strabreviacion
     *
     * @return string 
     */
    public function getStrabreviacion()
    {
        return $this->strabreviacion;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Entidadesfederativas
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
     * Set numpaisId
     *
     * @param integer $numpaisId
     * @return Entidadesfederativas
     */
    public function setNumpaisId($numpaisId)
    {
        $this->numpaisId = $numpaisId;

        return $this;
    }

    /**
     * Get numpaisId
     *
     * @return integer 
     */
    public function getNumpaisId()
    {
        return $this->numpaisId;
    }

    /**
     * Set strcodigopostalinicial
     *
     * @param string $strcodigopostalinicial
     * @return Entidadesfederativas
     */
    public function setStrcodigopostalinicial($strcodigopostalinicial)
    {
        $this->strcodigopostalinicial = $strcodigopostalinicial;

        return $this;
    }

    /**
     * Get strcodigopostalinicial
     *
     * @return string 
     */
    public function getStrcodigopostalinicial()
    {
        return $this->strcodigopostalinicial;
    }

    /**
     * Set strcodigopostalfinal
     *
     * @param string $strcodigopostalfinal
     * @return Entidadesfederativas
     */
    public function setStrcodigopostalfinal($strcodigopostalfinal)
    {
        $this->strcodigopostalfinal = $strcodigopostalfinal;

        return $this;
    }

    /**
     * Get strcodigopostalfinal
     *
     * @return string 
     */
    public function getStrcodigopostalfinal()
    {
        return $this->strcodigopostalfinal;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Entidadesfederativas
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
     * @return Entidadesfederativas
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
     * @return Entidadesfederativas
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
     * @return Entidadesfederativas
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
     * @return Entidadesfederativas
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
