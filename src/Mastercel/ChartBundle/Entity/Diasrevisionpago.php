<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diasrevisionpago
 *
 * @ORM\Table(name="DiasRevisionPago", indexes={@ORM\Index(name="Indice_1", columns={"StrDiaRevisionPago_ky"}), @ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Diasrevisionpago
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiaRevisionPago_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numdiarevisionpagoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDiaRevisionPago_ky", type="string", length=10, nullable=true)
     */
    private $strdiarevisionpagoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDiaRevision", type="integer", nullable=true)
     */
    private $numtipodiarevision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCalculoDiaRevision", type="integer", nullable=true)
     */
    private $numtipocalculodiarevision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrHorariosRevision", type="string", length=30, nullable=true)
     */
    private $strhorariosrevision;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDiaPago", type="integer", nullable=true)
     */
    private $numtipodiapago = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCalculoDiaPago", type="integer", nullable=true)
     */
    private $numtipocalculodiapago = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrHorariosPago", type="string", length=30, nullable=true)
     */
    private $strhorariospago;

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
     * Get numdiarevisionpagoId
     *
     * @return integer 
     */
    public function getNumdiarevisionpagoId()
    {
        return $this->numdiarevisionpagoId;
    }

    /**
     * Set strdiarevisionpagoKy
     *
     * @param string $strdiarevisionpagoKy
     * @return Diasrevisionpago
     */
    public function setStrdiarevisionpagoKy($strdiarevisionpagoKy)
    {
        $this->strdiarevisionpagoKy = $strdiarevisionpagoKy;

        return $this;
    }

    /**
     * Get strdiarevisionpagoKy
     *
     * @return string 
     */
    public function getStrdiarevisionpagoKy()
    {
        return $this->strdiarevisionpagoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Diasrevisionpago
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
     * Set numtipodiarevision
     *
     * @param integer $numtipodiarevision
     * @return Diasrevisionpago
     */
    public function setNumtipodiarevision($numtipodiarevision)
    {
        $this->numtipodiarevision = $numtipodiarevision;

        return $this;
    }

    /**
     * Get numtipodiarevision
     *
     * @return integer 
     */
    public function getNumtipodiarevision()
    {
        return $this->numtipodiarevision;
    }

    /**
     * Set numtipocalculodiarevision
     *
     * @param integer $numtipocalculodiarevision
     * @return Diasrevisionpago
     */
    public function setNumtipocalculodiarevision($numtipocalculodiarevision)
    {
        $this->numtipocalculodiarevision = $numtipocalculodiarevision;

        return $this;
    }

    /**
     * Get numtipocalculodiarevision
     *
     * @return integer 
     */
    public function getNumtipocalculodiarevision()
    {
        return $this->numtipocalculodiarevision;
    }

    /**
     * Set strhorariosrevision
     *
     * @param string $strhorariosrevision
     * @return Diasrevisionpago
     */
    public function setStrhorariosrevision($strhorariosrevision)
    {
        $this->strhorariosrevision = $strhorariosrevision;

        return $this;
    }

    /**
     * Get strhorariosrevision
     *
     * @return string 
     */
    public function getStrhorariosrevision()
    {
        return $this->strhorariosrevision;
    }

    /**
     * Set numtipodiapago
     *
     * @param integer $numtipodiapago
     * @return Diasrevisionpago
     */
    public function setNumtipodiapago($numtipodiapago)
    {
        $this->numtipodiapago = $numtipodiapago;

        return $this;
    }

    /**
     * Get numtipodiapago
     *
     * @return integer 
     */
    public function getNumtipodiapago()
    {
        return $this->numtipodiapago;
    }

    /**
     * Set numtipocalculodiapago
     *
     * @param integer $numtipocalculodiapago
     * @return Diasrevisionpago
     */
    public function setNumtipocalculodiapago($numtipocalculodiapago)
    {
        $this->numtipocalculodiapago = $numtipocalculodiapago;

        return $this;
    }

    /**
     * Get numtipocalculodiapago
     *
     * @return integer 
     */
    public function getNumtipocalculodiapago()
    {
        return $this->numtipocalculodiapago;
    }

    /**
     * Set strhorariospago
     *
     * @param string $strhorariospago
     * @return Diasrevisionpago
     */
    public function setStrhorariospago($strhorariospago)
    {
        $this->strhorariospago = $strhorariospago;

        return $this;
    }

    /**
     * Get strhorariospago
     *
     * @return string 
     */
    public function getStrhorariospago()
    {
        return $this->strhorariospago;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Diasrevisionpago
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
     * @return Diasrevisionpago
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
     * @return Diasrevisionpago
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
     * @return Diasrevisionpago
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
     * @return Diasrevisionpago
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
