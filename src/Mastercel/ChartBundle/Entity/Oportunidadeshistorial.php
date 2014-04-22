<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oportunidadeshistorial
 *
 * @ORM\Table(name="OportunidadesHistorial", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_2", columns={"NumEjecutivo_id"}), @ORM\Index(name="Indice_3", columns={"NumOportunidadEtapa_id"}), @ORM\Index(name="Indice_4", columns={"DteOportunidadEtapaInicio"})})
 * @ORM\Entity
 */
class Oportunidadeshistorial
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
     * @ORM\Column(name="NumEjecutivo_id", type="integer", nullable=true)
     */
    private $numejecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOportunidadEtapa_id", type="integer", nullable=true)
     */
    private $numoportunidadetapaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteOportunidadEtapaInicio", type="datetime", nullable=true)
     */
    private $dteoportunidadetapainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteOportunidadEtapaTermino", type="datetime", nullable=true)
     */
    private $dteoportunidadetapatermino;



    /**
     * Set numoportunidadId
     *
     * @param integer $numoportunidadId
     * @return Oportunidadeshistorial
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
     * @return Oportunidadeshistorial
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
     * @return Oportunidadeshistorial
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
     * Set numejecutivoId
     *
     * @param integer $numejecutivoId
     * @return Oportunidadeshistorial
     */
    public function setNumejecutivoId($numejecutivoId)
    {
        $this->numejecutivoId = $numejecutivoId;

        return $this;
    }

    /**
     * Get numejecutivoId
     *
     * @return integer 
     */
    public function getNumejecutivoId()
    {
        return $this->numejecutivoId;
    }

    /**
     * Set numoportunidadetapaId
     *
     * @param integer $numoportunidadetapaId
     * @return Oportunidadeshistorial
     */
    public function setNumoportunidadetapaId($numoportunidadetapaId)
    {
        $this->numoportunidadetapaId = $numoportunidadetapaId;

        return $this;
    }

    /**
     * Get numoportunidadetapaId
     *
     * @return integer 
     */
    public function getNumoportunidadetapaId()
    {
        return $this->numoportunidadetapaId;
    }

    /**
     * Set dteoportunidadetapainicio
     *
     * @param \DateTime $dteoportunidadetapainicio
     * @return Oportunidadeshistorial
     */
    public function setDteoportunidadetapainicio($dteoportunidadetapainicio)
    {
        $this->dteoportunidadetapainicio = $dteoportunidadetapainicio;

        return $this;
    }

    /**
     * Get dteoportunidadetapainicio
     *
     * @return \DateTime 
     */
    public function getDteoportunidadetapainicio()
    {
        return $this->dteoportunidadetapainicio;
    }

    /**
     * Set dteoportunidadetapatermino
     *
     * @param \DateTime $dteoportunidadetapatermino
     * @return Oportunidadeshistorial
     */
    public function setDteoportunidadetapatermino($dteoportunidadetapatermino)
    {
        $this->dteoportunidadetapatermino = $dteoportunidadetapatermino;

        return $this;
    }

    /**
     * Get dteoportunidadetapatermino
     *
     * @return \DateTime 
     */
    public function getDteoportunidadetapatermino()
    {
        return $this->dteoportunidadetapatermino;
    }
}
