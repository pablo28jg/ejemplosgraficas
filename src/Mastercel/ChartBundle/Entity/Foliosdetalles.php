<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foliosdetalles
 *
 * @ORM\Table(name="FoliosDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumFolio_id", "NumAlmacen_id", "NumConcepto_id"}), @ORM\Index(name="Indice_2", columns={"NumFolio_id", "NumAlmacen_id"}), @ORM\Index(name="Indice_3", columns={"NumFolio_id", "NumConcepto_id"})})
 * @ORM\Entity
 */
class Foliosdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numfolioId = '0';

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
     * @ORM\Column(name="NumConcepto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconceptoId = '0';

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
     * @ORM\Column(name="NumTipoFormato", type="integer", nullable=true)
     */
    private $numtipoformato = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie", type="string", length=3, nullable=true)
     */
    private $strserie;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolio", type="integer", nullable=true)
     */
    private $numfolio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFolioDigital_id", type="integer", nullable=true)
     */
    private $numfoliodigitalId = '0';



    /**
     * Set numfolioId
     *
     * @param integer $numfolioId
     * @return Foliosdetalles
     */
    public function setNumfolioId($numfolioId)
    {
        $this->numfolioId = $numfolioId;

        return $this;
    }

    /**
     * Get numfolioId
     *
     * @return integer 
     */
    public function getNumfolioId()
    {
        return $this->numfolioId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Foliosdetalles
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
     * Set numconceptoId
     *
     * @param integer $numconceptoId
     * @return Foliosdetalles
     */
    public function setNumconceptoId($numconceptoId)
    {
        $this->numconceptoId = $numconceptoId;

        return $this;
    }

    /**
     * Get numconceptoId
     *
     * @return integer 
     */
    public function getNumconceptoId()
    {
        return $this->numconceptoId;
    }

    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Foliosdetalles
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
     * Set numtipoformato
     *
     * @param integer $numtipoformato
     * @return Foliosdetalles
     */
    public function setNumtipoformato($numtipoformato)
    {
        $this->numtipoformato = $numtipoformato;

        return $this;
    }

    /**
     * Get numtipoformato
     *
     * @return integer 
     */
    public function getNumtipoformato()
    {
        return $this->numtipoformato;
    }

    /**
     * Set strserie
     *
     * @param string $strserie
     * @return Foliosdetalles
     */
    public function setStrserie($strserie)
    {
        $this->strserie = $strserie;

        return $this;
    }

    /**
     * Get strserie
     *
     * @return string 
     */
    public function getStrserie()
    {
        return $this->strserie;
    }

    /**
     * Set numfolio
     *
     * @param integer $numfolio
     * @return Foliosdetalles
     */
    public function setNumfolio($numfolio)
    {
        $this->numfolio = $numfolio;

        return $this;
    }

    /**
     * Get numfolio
     *
     * @return integer 
     */
    public function getNumfolio()
    {
        return $this->numfolio;
    }

    /**
     * Set numfoliodigitalId
     *
     * @param integer $numfoliodigitalId
     * @return Foliosdetalles
     */
    public function setNumfoliodigitalId($numfoliodigitalId)
    {
        $this->numfoliodigitalId = $numfoliodigitalId;

        return $this;
    }

    /**
     * Get numfoliodigitalId
     *
     * @return integer 
     */
    public function getNumfoliodigitalId()
    {
        return $this->numfoliodigitalId;
    }
}
