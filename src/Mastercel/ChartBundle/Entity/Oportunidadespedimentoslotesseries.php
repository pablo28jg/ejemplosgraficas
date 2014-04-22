<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oportunidadespedimentoslotesseries
 *
 * @ORM\Table(name="OportunidadesPedimentosLotesSeries", indexes={@ORM\Index(name="Indice_1", columns={"NumOportunidad_id", "NumAlmacen_id", "NumOportunidadRegistro_id", "StrArticulo_ky"}), @ORM\Index(name="Indice_2", columns={"StrArticulo_ky"}), @ORM\Index(name="Indice_3", columns={"StrPedimento_ky"}), @ORM\Index(name="Indice_4", columns={"StrLote_ky"}), @ORM\Index(name="Indice_5", columns={"StrSerie_ky"}), @ORM\Index(name="Indice_6", columns={"StrSerieControl_ky"}), @ORM\Index(name="Indice_7", columns={"StrReferencia"})})
 * @ORM\Entity
 */
class Oportunidadespedimentoslotesseries
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
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidadRegistro_id", type="integer", nullable=true)
     */
    private $numoportunidadregistroId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPedimento_ky", type="string", length=20, nullable=true)
     */
    private $strpedimentoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrLote_ky", type="string", length=20, nullable=true)
     */
    private $strloteKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie_ky", type="string", length=20, nullable=true)
     */
    private $strserieKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerieControl_ky", type="string", length=20, nullable=true)
     */
    private $strseriecontrolKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedida_id", type="integer", nullable=true)
     */
    private $numunidadmedidaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorConversion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactorconversion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAfectacion", type="integer", nullable=true)
     */
    private $numtipoafectacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteExpiracion", type="datetime", nullable=true)
     */
    private $dteexpiracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMesesGarantia", type="integer", nullable=true)
     */
    private $nummesesgarantia = '0';



    /**
     * Set numoportunidadId
     *
     * @param integer $numoportunidadId
     * @return Oportunidadespedimentoslotesseries
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
     * @return Oportunidadespedimentoslotesseries
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Oportunidadespedimentoslotesseries
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
     * Set numoportunidadregistroId
     *
     * @param integer $numoportunidadregistroId
     * @return Oportunidadespedimentoslotesseries
     */
    public function setNumoportunidadregistroId($numoportunidadregistroId)
    {
        $this->numoportunidadregistroId = $numoportunidadregistroId;

        return $this;
    }

    /**
     * Get numoportunidadregistroId
     *
     * @return integer 
     */
    public function getNumoportunidadregistroId()
    {
        return $this->numoportunidadregistroId;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Oportunidadespedimentoslotesseries
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

    /**
     * Set strpedimentoKy
     *
     * @param string $strpedimentoKy
     * @return Oportunidadespedimentoslotesseries
     */
    public function setStrpedimentoKy($strpedimentoKy)
    {
        $this->strpedimentoKy = $strpedimentoKy;

        return $this;
    }

    /**
     * Get strpedimentoKy
     *
     * @return string 
     */
    public function getStrpedimentoKy()
    {
        return $this->strpedimentoKy;
    }

    /**
     * Set strloteKy
     *
     * @param string $strloteKy
     * @return Oportunidadespedimentoslotesseries
     */
    public function setStrloteKy($strloteKy)
    {
        $this->strloteKy = $strloteKy;

        return $this;
    }

    /**
     * Get strloteKy
     *
     * @return string 
     */
    public function getStrloteKy()
    {
        return $this->strloteKy;
    }

    /**
     * Set strserieKy
     *
     * @param string $strserieKy
     * @return Oportunidadespedimentoslotesseries
     */
    public function setStrserieKy($strserieKy)
    {
        $this->strserieKy = $strserieKy;

        return $this;
    }

    /**
     * Get strserieKy
     *
     * @return string 
     */
    public function getStrserieKy()
    {
        return $this->strserieKy;
    }

    /**
     * Set strseriecontrolKy
     *
     * @param string $strseriecontrolKy
     * @return Oportunidadespedimentoslotesseries
     */
    public function setStrseriecontrolKy($strseriecontrolKy)
    {
        $this->strseriecontrolKy = $strseriecontrolKy;

        return $this;
    }

    /**
     * Get strseriecontrolKy
     *
     * @return string 
     */
    public function getStrseriecontrolKy()
    {
        return $this->strseriecontrolKy;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Oportunidadespedimentoslotesseries
     */
    public function setStrreferencia($strreferencia)
    {
        $this->strreferencia = $strreferencia;

        return $this;
    }

    /**
     * Get strreferencia
     *
     * @return string 
     */
    public function getStrreferencia()
    {
        return $this->strreferencia;
    }

    /**
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Oportunidadespedimentoslotesseries
     */
    public function setNumunidadmedidaId($numunidadmedidaId)
    {
        $this->numunidadmedidaId = $numunidadmedidaId;

        return $this;
    }

    /**
     * Get numunidadmedidaId
     *
     * @return integer 
     */
    public function getNumunidadmedidaId()
    {
        return $this->numunidadmedidaId;
    }

    /**
     * Set numfactorconversion
     *
     * @param float $numfactorconversion
     * @return Oportunidadespedimentoslotesseries
     */
    public function setNumfactorconversion($numfactorconversion)
    {
        $this->numfactorconversion = $numfactorconversion;

        return $this;
    }

    /**
     * Get numfactorconversion
     *
     * @return float 
     */
    public function getNumfactorconversion()
    {
        return $this->numfactorconversion;
    }

    /**
     * Set numtipoafectacion
     *
     * @param integer $numtipoafectacion
     * @return Oportunidadespedimentoslotesseries
     */
    public function setNumtipoafectacion($numtipoafectacion)
    {
        $this->numtipoafectacion = $numtipoafectacion;

        return $this;
    }

    /**
     * Get numtipoafectacion
     *
     * @return integer 
     */
    public function getNumtipoafectacion()
    {
        return $this->numtipoafectacion;
    }

    /**
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Oportunidadespedimentoslotesseries
     */
    public function setNumcantidad($numcantidad)
    {
        $this->numcantidad = $numcantidad;

        return $this;
    }

    /**
     * Get numcantidad
     *
     * @return float 
     */
    public function getNumcantidad()
    {
        return $this->numcantidad;
    }

    /**
     * Set dteexpiracion
     *
     * @param \DateTime $dteexpiracion
     * @return Oportunidadespedimentoslotesseries
     */
    public function setDteexpiracion($dteexpiracion)
    {
        $this->dteexpiracion = $dteexpiracion;

        return $this;
    }

    /**
     * Get dteexpiracion
     *
     * @return \DateTime 
     */
    public function getDteexpiracion()
    {
        return $this->dteexpiracion;
    }

    /**
     * Set nummesesgarantia
     *
     * @param integer $nummesesgarantia
     * @return Oportunidadespedimentoslotesseries
     */
    public function setNummesesgarantia($nummesesgarantia)
    {
        $this->nummesesgarantia = $nummesesgarantia;

        return $this;
    }

    /**
     * Get nummesesgarantia
     *
     * @return integer 
     */
    public function getNummesesgarantia()
    {
        return $this->nummesesgarantia;
    }
}
