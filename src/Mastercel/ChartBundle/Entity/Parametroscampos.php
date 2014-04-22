<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametroscampos
 *
 * @ORM\Table(name="ParametrosCampos", indexes={@ORM\Index(name="Indice_1", columns={"NumParametro_id", "NumOrden"}), @ORM\Index(name="Indice_2", columns={"NumSeccion_id", "NumOrden"})})
 * @ORM\Entity
 */
class Parametroscampos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCampo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcampoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSeccion_id", type="integer", nullable=true)
     */
    private $numseccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumParametro_id", type="integer", nullable=true)
     */
    private $numparametroId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampo", type="string", length=60, nullable=true)
     */
    private $strnombrecampo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampoGrupo", type="string", length=60, nullable=true)
     */
    private $strnombrecampogrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDato", type="integer", nullable=true)
     */
    private $numtipodato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLongitud", type="integer", nullable=true)
     */
    private $numlongitud = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrValorOmision", type="string", length=60, nullable=true)
     */
    private $strvaloromision;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEmpresa", type="integer", nullable=true)
     */
    private $numtipoempresa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComponente", type="integer", nullable=true)
     */
    private $numtipocomponente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreTablaBusqueda", type="string", length=60, nullable=true)
     */
    private $strnombretablabusqueda;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampoMostrar", type="string", length=150, nullable=true)
     */
    private $strnombrecampomostrar;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampoRetornar", type="string", length=60, nullable=true)
     */
    private $strnombrecamporetornar;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampoIndice", type="string", length=150, nullable=true)
     */
    private $strnombrecampoindice;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCriterioSeleccion", type="string", length=120, nullable=true)
     */
    private $strcriterioseleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampoNivel", type="string", length=150, nullable=true)
     */
    private $strnombrecamponivel;

    /**
     * @var string
     *
     * @ORM\Column(name="StrComandoSeleccion", type="text", length=16, nullable=true)
     */
    private $strcomandoseleccion;



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
     * Set numseccionId
     *
     * @param integer $numseccionId
     * @return Parametroscampos
     */
    public function setNumseccionId($numseccionId)
    {
        $this->numseccionId = $numseccionId;

        return $this;
    }

    /**
     * Get numseccionId
     *
     * @return integer 
     */
    public function getNumseccionId()
    {
        return $this->numseccionId;
    }

    /**
     * Set numparametroId
     *
     * @param integer $numparametroId
     * @return Parametroscampos
     */
    public function setNumparametroId($numparametroId)
    {
        $this->numparametroId = $numparametroId;

        return $this;
    }

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
     * Set numorden
     *
     * @param integer $numorden
     * @return Parametroscampos
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
     * Set strnombrecampo
     *
     * @param string $strnombrecampo
     * @return Parametroscampos
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
     * Set strnombrecampogrupo
     *
     * @param string $strnombrecampogrupo
     * @return Parametroscampos
     */
    public function setStrnombrecampogrupo($strnombrecampogrupo)
    {
        $this->strnombrecampogrupo = $strnombrecampogrupo;

        return $this;
    }

    /**
     * Get strnombrecampogrupo
     *
     * @return string 
     */
    public function getStrnombrecampogrupo()
    {
        return $this->strnombrecampogrupo;
    }

    /**
     * Set numtipodato
     *
     * @param integer $numtipodato
     * @return Parametroscampos
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
     * Set numlongitud
     *
     * @param integer $numlongitud
     * @return Parametroscampos
     */
    public function setNumlongitud($numlongitud)
    {
        $this->numlongitud = $numlongitud;

        return $this;
    }

    /**
     * Get numlongitud
     *
     * @return integer 
     */
    public function getNumlongitud()
    {
        return $this->numlongitud;
    }

    /**
     * Set strvaloromision
     *
     * @param string $strvaloromision
     * @return Parametroscampos
     */
    public function setStrvaloromision($strvaloromision)
    {
        $this->strvaloromision = $strvaloromision;

        return $this;
    }

    /**
     * Get strvaloromision
     *
     * @return string 
     */
    public function getStrvaloromision()
    {
        return $this->strvaloromision;
    }

    /**
     * Set numtipoempresa
     *
     * @param integer $numtipoempresa
     * @return Parametroscampos
     */
    public function setNumtipoempresa($numtipoempresa)
    {
        $this->numtipoempresa = $numtipoempresa;

        return $this;
    }

    /**
     * Get numtipoempresa
     *
     * @return integer 
     */
    public function getNumtipoempresa()
    {
        return $this->numtipoempresa;
    }

    /**
     * Set numtipocomponente
     *
     * @param integer $numtipocomponente
     * @return Parametroscampos
     */
    public function setNumtipocomponente($numtipocomponente)
    {
        $this->numtipocomponente = $numtipocomponente;

        return $this;
    }

    /**
     * Get numtipocomponente
     *
     * @return integer 
     */
    public function getNumtipocomponente()
    {
        return $this->numtipocomponente;
    }

    /**
     * Set strnombretablabusqueda
     *
     * @param string $strnombretablabusqueda
     * @return Parametroscampos
     */
    public function setStrnombretablabusqueda($strnombretablabusqueda)
    {
        $this->strnombretablabusqueda = $strnombretablabusqueda;

        return $this;
    }

    /**
     * Get strnombretablabusqueda
     *
     * @return string 
     */
    public function getStrnombretablabusqueda()
    {
        return $this->strnombretablabusqueda;
    }

    /**
     * Set strnombrecampomostrar
     *
     * @param string $strnombrecampomostrar
     * @return Parametroscampos
     */
    public function setStrnombrecampomostrar($strnombrecampomostrar)
    {
        $this->strnombrecampomostrar = $strnombrecampomostrar;

        return $this;
    }

    /**
     * Get strnombrecampomostrar
     *
     * @return string 
     */
    public function getStrnombrecampomostrar()
    {
        return $this->strnombrecampomostrar;
    }

    /**
     * Set strnombrecamporetornar
     *
     * @param string $strnombrecamporetornar
     * @return Parametroscampos
     */
    public function setStrnombrecamporetornar($strnombrecamporetornar)
    {
        $this->strnombrecamporetornar = $strnombrecamporetornar;

        return $this;
    }

    /**
     * Get strnombrecamporetornar
     *
     * @return string 
     */
    public function getStrnombrecamporetornar()
    {
        return $this->strnombrecamporetornar;
    }

    /**
     * Set strnombrecampoindice
     *
     * @param string $strnombrecampoindice
     * @return Parametroscampos
     */
    public function setStrnombrecampoindice($strnombrecampoindice)
    {
        $this->strnombrecampoindice = $strnombrecampoindice;

        return $this;
    }

    /**
     * Get strnombrecampoindice
     *
     * @return string 
     */
    public function getStrnombrecampoindice()
    {
        return $this->strnombrecampoindice;
    }

    /**
     * Set strcriterioseleccion
     *
     * @param string $strcriterioseleccion
     * @return Parametroscampos
     */
    public function setStrcriterioseleccion($strcriterioseleccion)
    {
        $this->strcriterioseleccion = $strcriterioseleccion;

        return $this;
    }

    /**
     * Get strcriterioseleccion
     *
     * @return string 
     */
    public function getStrcriterioseleccion()
    {
        return $this->strcriterioseleccion;
    }

    /**
     * Set strnombrecamponivel
     *
     * @param string $strnombrecamponivel
     * @return Parametroscampos
     */
    public function setStrnombrecamponivel($strnombrecamponivel)
    {
        $this->strnombrecamponivel = $strnombrecamponivel;

        return $this;
    }

    /**
     * Get strnombrecamponivel
     *
     * @return string 
     */
    public function getStrnombrecamponivel()
    {
        return $this->strnombrecamponivel;
    }

    /**
     * Set strcomandoseleccion
     *
     * @param string $strcomandoseleccion
     * @return Parametroscampos
     */
    public function setStrcomandoseleccion($strcomandoseleccion)
    {
        $this->strcomandoseleccion = $strcomandoseleccion;

        return $this;
    }

    /**
     * Get strcomandoseleccion
     *
     * @return string 
     */
    public function getStrcomandoseleccion()
    {
        return $this->strcomandoseleccion;
    }
}
