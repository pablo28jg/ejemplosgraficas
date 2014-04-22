<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportesparametros
 *
 * @ORM\Table(name="ReportesParametros", indexes={@ORM\Index(name="Indice_1", columns={"NumReporte_id", "NumTipoParametro", "NumOpcion_id", "NumCampo_id", "NumValor_id", "NumOrden"})})
 * @ORM\Entity
 */
class Reportesparametros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumParametro_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numparametroId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoParametro", type="integer", nullable=true)
     */
    private $numtipoparametro = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOpcion_id", type="integer", nullable=true)
     */
    private $numopcionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCampo_id", type="integer", nullable=true)
     */
    private $numcampoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumValor_id", type="integer", nullable=true)
     */
    private $numvalorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=true)
     */
    private $numreporteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreTabla", type="string", length=30, nullable=true)
     */
    private $strnombretabla;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampo", type="string", length=60, nullable=true)
     */
    private $strnombrecampo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogOrdenDescendente", type="boolean", nullable=true)
     */
    private $logordendescendente = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoOperador", type="integer", nullable=true)
     */
    private $numtipooperador = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrValor", type="string", length=60, nullable=true)
     */
    private $strvalor;



    /**
     * Get numparametroId
     *
     * @return integer 
     */
    public function getNumparametroId()
    {
        return $this->numparametroId;
    }

    /**
     * Set numtipoparametro
     *
     * @param integer $numtipoparametro
     * @return Reportesparametros
     */
    public function setNumtipoparametro($numtipoparametro)
    {
        $this->numtipoparametro = $numtipoparametro;

        return $this;
    }

    /**
     * Get numtipoparametro
     *
     * @return integer 
     */
    public function getNumtipoparametro()
    {
        return $this->numtipoparametro;
    }

    /**
     * Set numopcionId
     *
     * @param integer $numopcionId
     * @return Reportesparametros
     */
    public function setNumopcionId($numopcionId)
    {
        $this->numopcionId = $numopcionId;

        return $this;
    }

    /**
     * Get numopcionId
     *
     * @return integer 
     */
    public function getNumopcionId()
    {
        return $this->numopcionId;
    }

    /**
     * Set numcampoId
     *
     * @param integer $numcampoId
     * @return Reportesparametros
     */
    public function setNumcampoId($numcampoId)
    {
        $this->numcampoId = $numcampoId;

        return $this;
    }

    /**
     * Get numcampoId
     *
     * @return integer 
     */
    public function getNumcampoId()
    {
        return $this->numcampoId;
    }

    /**
     * Set numvalorId
     *
     * @param integer $numvalorId
     * @return Reportesparametros
     */
    public function setNumvalorId($numvalorId)
    {
        $this->numvalorId = $numvalorId;

        return $this;
    }

    /**
     * Get numvalorId
     *
     * @return integer 
     */
    public function getNumvalorId()
    {
        return $this->numvalorId;
    }

    /**
     * Set numreporteId
     *
     * @param integer $numreporteId
     * @return Reportesparametros
     */
    public function setNumreporteId($numreporteId)
    {
        $this->numreporteId = $numreporteId;

        return $this;
    }

    /**
     * Get numreporteId
     *
     * @return integer 
     */
    public function getNumreporteId()
    {
        return $this->numreporteId;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Reportesparametros
     */
    public function setNumorden($numorden)
    {
        $this->numorden = $numorden;

        return $this;
    }

    /**
     * Get numorden
     *
     * @return integer 
     */
    public function getNumorden()
    {
        return $this->numorden;
    }

    /**
     * Set strnombretabla
     *
     * @param string $strnombretabla
     * @return Reportesparametros
     */
    public function setStrnombretabla($strnombretabla)
    {
        $this->strnombretabla = $strnombretabla;

        return $this;
    }

    /**
     * Get strnombretabla
     *
     * @return string 
     */
    public function getStrnombretabla()
    {
        return $this->strnombretabla;
    }

    /**
     * Set strnombrecampo
     *
     * @param string $strnombrecampo
     * @return Reportesparametros
     */
    public function setStrnombrecampo($strnombrecampo)
    {
        $this->strnombrecampo = $strnombrecampo;

        return $this;
    }

    /**
     * Get strnombrecampo
     *
     * @return string 
     */
    public function getStrnombrecampo()
    {
        return $this->strnombrecampo;
    }

    /**
     * Set logordendescendente
     *
     * @param boolean $logordendescendente
     * @return Reportesparametros
     */
    public function setLogordendescendente($logordendescendente)
    {
        $this->logordendescendente = $logordendescendente;

        return $this;
    }

    /**
     * Get logordendescendente
     *
     * @return boolean 
     */
    public function getLogordendescendente()
    {
        return $this->logordendescendente;
    }

    /**
     * Set numtipooperador
     *
     * @param integer $numtipooperador
     * @return Reportesparametros
     */
    public function setNumtipooperador($numtipooperador)
    {
        $this->numtipooperador = $numtipooperador;

        return $this;
    }

    /**
     * Get numtipooperador
     *
     * @return integer 
     */
    public function getNumtipooperador()
    {
        return $this->numtipooperador;
    }

    /**
     * Set strvalor
     *
     * @param string $strvalor
     * @return Reportesparametros
     */
    public function setStrvalor($strvalor)
    {
        $this->strvalor = $strvalor;

        return $this;
    }

    /**
     * Get strvalor
     *
     * @return string 
     */
    public function getStrvalor()
    {
        return $this->strvalor;
    }
}
