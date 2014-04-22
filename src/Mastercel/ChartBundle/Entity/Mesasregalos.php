<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesasregalos
 *
 * @ORM\Table(name="MesasRegalos", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"DteAniversario"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Mesasregalos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumMesaRegalo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummesaregaloId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteAniversario", type="datetime", nullable=true)
     */
    private $dteaniversario;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFestejado_id", type="integer", nullable=true)
     */
    private $numfestejadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFestejada_id", type="integer", nullable=true)
     */
    private $numfestejadaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDireccionEnvio", type="integer", nullable=true)
     */
    private $numtipodireccionenvio = '0';

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
     * Get nummesaregaloId
     *
     * @return integer 
     */
    public function getNummesaregaloId()
    {
        return $this->nummesaregaloId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Mesasregalos
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
     * Set dteaniversario
     *
     * @param \DateTime $dteaniversario
     * @return Mesasregalos
     */
    public function setDteaniversario($dteaniversario)
    {
        $this->dteaniversario = $dteaniversario;

        return $this;
    }

    /**
     * Get dteaniversario
     *
     * @return \DateTime 
     */
    public function getDteaniversario()
    {
        return $this->dteaniversario;
    }

    /**
     * Set numfestejadoId
     *
     * @param integer $numfestejadoId
     * @return Mesasregalos
     */
    public function setNumfestejadoId($numfestejadoId)
    {
        $this->numfestejadoId = $numfestejadoId;

        return $this;
    }

    /**
     * Get numfestejadoId
     *
     * @return integer 
     */
    public function getNumfestejadoId()
    {
        return $this->numfestejadoId;
    }

    /**
     * Set numfestejadaId
     *
     * @param integer $numfestejadaId
     * @return Mesasregalos
     */
    public function setNumfestejadaId($numfestejadaId)
    {
        $this->numfestejadaId = $numfestejadaId;

        return $this;
    }

    /**
     * Get numfestejadaId
     *
     * @return integer 
     */
    public function getNumfestejadaId()
    {
        return $this->numfestejadaId;
    }

    /**
     * Set numtipodireccionenvio
     *
     * @param integer $numtipodireccionenvio
     * @return Mesasregalos
     */
    public function setNumtipodireccionenvio($numtipodireccionenvio)
    {
        $this->numtipodireccionenvio = $numtipodireccionenvio;

        return $this;
    }

    /**
     * Get numtipodireccionenvio
     *
     * @return integer 
     */
    public function getNumtipodireccionenvio()
    {
        return $this->numtipodireccionenvio;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Mesasregalos
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
     * @return Mesasregalos
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
     * @return Mesasregalos
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
     * @return Mesasregalos
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
     * @return Mesasregalos
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
     * @return Mesasregalos
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
