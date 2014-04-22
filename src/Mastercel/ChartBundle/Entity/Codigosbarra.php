<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codigosbarra
 *
 * @ORM\Table(name="CodigosBarra", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrCodigoBarra_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Codigosbarra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoBarra_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcodigobarraId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoBarra_ky", type="string", length=10, nullable=true)
     */
    private $strcodigobarraKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCodigoBarra", type="integer", nullable=true)
     */
    private $numtipocodigobarra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrPrefijo", type="string", length=20, nullable=true)
     */
    private $strprefijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSiguienteNumero", type="integer", nullable=true)
     */
    private $numsiguientenumero = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUltimoNumero", type="integer", nullable=true)
     */
    private $numultimonumero = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlertarNumero", type="integer", nullable=true)
     */
    private $numalertarnumero = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLongitudMinima", type="integer", nullable=true)
     */
    private $numlongitudminima = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLongitudMaxima", type="integer", nullable=true)
     */
    private $numlongitudmaxima = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAlfanumerico", type="boolean", nullable=true)
     */
    private $logalfanumerico = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCreacion", type="datetime", nullable=true)
     */
    private $dtecreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCreadoPor_id", type="integer", nullable=true)
     */
    private $numcreadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteActualizacion", type="datetime", nullable=true)
     */
    private $dteactualizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActualizadoPor_id", type="integer", nullable=true)
     */
    private $numactualizadoporId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';



    /**
     * Get numcodigobarraId
     *
     * @return integer 
     */
    public function getNumcodigobarraId()
    {
        return $this->numcodigobarraId;
    }

    /**
     * Set strcodigobarraKy
     *
     * @param string $strcodigobarraKy
     * @return Codigosbarra
     */
    public function setStrcodigobarraKy($strcodigobarraKy)
    {
        $this->strcodigobarraKy = $strcodigobarraKy;

        return $this;
    }

    /**
     * Get strcodigobarraKy
     *
     * @return string 
     */
    public function getStrcodigobarraKy()
    {
        return $this->strcodigobarraKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Codigosbarra
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
     * Set numtipocodigobarra
     *
     * @param integer $numtipocodigobarra
     * @return Codigosbarra
     */
    public function setNumtipocodigobarra($numtipocodigobarra)
    {
        $this->numtipocodigobarra = $numtipocodigobarra;

        return $this;
    }

    /**
     * Get numtipocodigobarra
     *
     * @return integer 
     */
    public function getNumtipocodigobarra()
    {
        return $this->numtipocodigobarra;
    }

    /**
     * Set strprefijo
     *
     * @param string $strprefijo
     * @return Codigosbarra
     */
    public function setStrprefijo($strprefijo)
    {
        $this->strprefijo = $strprefijo;

        return $this;
    }

    /**
     * Get strprefijo
     *
     * @return string 
     */
    public function getStrprefijo()
    {
        return $this->strprefijo;
    }

    /**
     * Set numsiguientenumero
     *
     * @param integer $numsiguientenumero
     * @return Codigosbarra
     */
    public function setNumsiguientenumero($numsiguientenumero)
    {
        $this->numsiguientenumero = $numsiguientenumero;

        return $this;
    }

    /**
     * Get numsiguientenumero
     *
     * @return integer 
     */
    public function getNumsiguientenumero()
    {
        return $this->numsiguientenumero;
    }

    /**
     * Set numultimonumero
     *
     * @param integer $numultimonumero
     * @return Codigosbarra
     */
    public function setNumultimonumero($numultimonumero)
    {
        $this->numultimonumero = $numultimonumero;

        return $this;
    }

    /**
     * Get numultimonumero
     *
     * @return integer 
     */
    public function getNumultimonumero()
    {
        return $this->numultimonumero;
    }

    /**
     * Set numalertarnumero
     *
     * @param integer $numalertarnumero
     * @return Codigosbarra
     */
    public function setNumalertarnumero($numalertarnumero)
    {
        $this->numalertarnumero = $numalertarnumero;

        return $this;
    }

    /**
     * Get numalertarnumero
     *
     * @return integer 
     */
    public function getNumalertarnumero()
    {
        return $this->numalertarnumero;
    }

    /**
     * Set numlongitudminima
     *
     * @param integer $numlongitudminima
     * @return Codigosbarra
     */
    public function setNumlongitudminima($numlongitudminima)
    {
        $this->numlongitudminima = $numlongitudminima;

        return $this;
    }

    /**
     * Get numlongitudminima
     *
     * @return integer 
     */
    public function getNumlongitudminima()
    {
        return $this->numlongitudminima;
    }

    /**
     * Set numlongitudmaxima
     *
     * @param integer $numlongitudmaxima
     * @return Codigosbarra
     */
    public function setNumlongitudmaxima($numlongitudmaxima)
    {
        $this->numlongitudmaxima = $numlongitudmaxima;

        return $this;
    }

    /**
     * Get numlongitudmaxima
     *
     * @return integer 
     */
    public function getNumlongitudmaxima()
    {
        return $this->numlongitudmaxima;
    }

    /**
     * Set logalfanumerico
     *
     * @param boolean $logalfanumerico
     * @return Codigosbarra
     */
    public function setLogalfanumerico($logalfanumerico)
    {
        $this->logalfanumerico = $logalfanumerico;

        return $this;
    }

    /**
     * Get logalfanumerico
     *
     * @return boolean 
     */
    public function getLogalfanumerico()
    {
        return $this->logalfanumerico;
    }

    /**
     * Set dtecreacion
     *
     * @param \DateTime $dtecreacion
     * @return Codigosbarra
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
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Codigosbarra
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
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Codigosbarra
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
     * Set numactualizadoporId
     *
     * @param integer $numactualizadoporId
     * @return Codigosbarra
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
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Codigosbarra
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
