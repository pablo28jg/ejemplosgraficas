<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedimentos
 *
 * @ORM\Table(name="Pedimentos", indexes={@ORM\Index(name="Indice_1", columns={"DtePedimento"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Pedimentos
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrPedimento_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strpedimentoKy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtePedimento", type="datetime", nullable=true)
     */
    private $dtepedimento;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAduana", type="string", length=60, nullable=true)
     */
    private $straduana;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPaisOrigen_id", type="integer", nullable=true)
     */
    private $numpaisorigenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArancel", type="string", length=60, nullable=true)
     */
    private $strarancel;

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
     * Get strpedimentoKy
     *
     * @return string 
     */
    public function getStrpedimentoKy()
    {
        return $this->strpedimentoKy;
    }

    /**
     * Set dtepedimento
     *
     * @param \DateTime $dtepedimento
     * @return Pedimentos
     */
    public function setDtepedimento($dtepedimento)
    {
        $this->dtepedimento = $dtepedimento;

        return $this;
    }

    /**
     * Get dtepedimento
     *
     * @return \DateTime 
     */
    public function getDtepedimento()
    {
        return $this->dtepedimento;
    }

    /**
     * Set straduana
     *
     * @param string $straduana
     * @return Pedimentos
     */
    public function setStraduana($straduana)
    {
        $this->straduana = $straduana;

        return $this;
    }

    /**
     * Get straduana
     *
     * @return string 
     */
    public function getStraduana()
    {
        return $this->straduana;
    }

    /**
     * Set numpaisorigenId
     *
     * @param integer $numpaisorigenId
     * @return Pedimentos
     */
    public function setNumpaisorigenId($numpaisorigenId)
    {
        $this->numpaisorigenId = $numpaisorigenId;

        return $this;
    }

    /**
     * Get numpaisorigenId
     *
     * @return integer 
     */
    public function getNumpaisorigenId()
    {
        return $this->numpaisorigenId;
    }

    /**
     * Set strarancel
     *
     * @param string $strarancel
     * @return Pedimentos
     */
    public function setStrarancel($strarancel)
    {
        $this->strarancel = $strarancel;

        return $this;
    }

    /**
     * Get strarancel
     *
     * @return string 
     */
    public function getStrarancel()
    {
        return $this->strarancel;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Pedimentos
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
     * @return Pedimentos
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
     * @return Pedimentos
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
     * @return Pedimentos
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
     * @return Pedimentos
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
