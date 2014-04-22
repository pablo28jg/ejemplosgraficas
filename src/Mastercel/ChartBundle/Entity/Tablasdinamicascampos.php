<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablasdinamicascampos
 *
 * @ORM\Table(name="TablasDinamicasCampos", indexes={@ORM\Index(name="Indice_1", columns={"NumTablaDinamica_id", "NumOrden", "NumCampo_id"})})
 * @ORM\Entity
 */
class Tablasdinamicascampos
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
     * @ORM\Column(name="NumTablaDinamica_id", type="integer", nullable=true)
     */
    private $numtabladinamicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreTabla", type="string", length=60, nullable=true)
     */
    private $strnombretabla;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampo", type="string", length=60, nullable=true)
     */
    private $strnombrecampo;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAlias", type="string", length=60, nullable=true)
     */
    private $stralias;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreGrupo", type="string", length=60, nullable=true)
     */
    private $strnombregrupo;

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
     * @var boolean
     *
     * @ORM\Column(name="LogValorRequerido", type="boolean", nullable=true)
     */
    private $logvalorrequerido = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrFormato", type="string", length=15, nullable=true)
     */
    private $strformato;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoUbicacion", type="integer", nullable=true)
     */
    private $numtipoubicacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoArea", type="integer", nullable=true)
     */
    private $numtipoarea = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoIntervalo", type="integer", nullable=true)
     */
    private $numtipointervalo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoResumen", type="integer", nullable=true)
     */
    private $numtiporesumen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoVariacion", type="integer", nullable=true)
     */
    private $numtipovariacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoOrdenar", type="integer", nullable=true)
     */
    private $numtipoordenar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiposAreasPermitidas", type="integer", nullable=true)
     */
    private $numtiposareaspermitidas = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTiposOpciones", type="integer", nullable=true)
     */
    private $numtiposopciones = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoComponente", type="integer", nullable=true)
     */
    private $numtipocomponente = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoOperador", type="integer", nullable=true)
     */
    private $numtipooperador = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEmpresa", type="integer", nullable=true)
     */
    private $numtipoempresa = '0';

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
     * @ORM\Column(name="StrNombreCampoNivel", type="string", length=60, nullable=true)
     */
    private $strnombrecamponivel;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCriterioSeleccion", type="string", length=120, nullable=true)
     */
    private $strcriterioseleccion;

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
     * Set numtabladinamicaId
     *
     * @param integer $numtabladinamicaId
     * @return Tablasdinamicascampos
     */
    public function setNumtabladinamicaId($numtabladinamicaId)
    {
        $this->numtabladinamicaId = $numtabladinamicaId;

        return $this;
    }

    /**
     * Get numtabladinamicaId
     *
     * @return integer 
     */
    public function getNumtabladinamicaId()
    {
        return $this->numtabladinamicaId;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Tablasdinamicascampos
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
     * @return Tablasdinamicascampos
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
     * @return Tablasdinamicascampos
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
     * Set stralias
     *
     * @param string $stralias
     * @return Tablasdinamicascampos
     */
    public function setStralias($stralias)
    {
        $this->stralias = $stralias;

        return $this;
    }

    /**
     * Get stralias
     *
     * @return string 
     */
    public function getStralias()
    {
        return $this->stralias;
    }

    /**
     * Set strnombregrupo
     *
     * @param string $strnombregrupo
     * @return Tablasdinamicascampos
     */
    public function setStrnombregrupo($strnombregrupo)
    {
        $this->strnombregrupo = $strnombregrupo;

        return $this;
    }

    /**
     * Get strnombregrupo
     *
     * @return string 
     */
    public function getStrnombregrupo()
    {
        return $this->strnombregrupo;
    }

    /**
     * Set numtipodato
     *
     * @param integer $numtipodato
     * @return Tablasdinamicascampos
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
     * @return Tablasdinamicascampos
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
     * @return Tablasdinamicascampos
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
     * Set logvalorrequerido
     *
     * @param boolean $logvalorrequerido
     * @return Tablasdinamicascampos
     */
    public function setLogvalorrequerido($logvalorrequerido)
    {
        $this->logvalorrequerido = $logvalorrequerido;

        return $this;
    }

    /**
     * Get logvalorrequerido
     *
     * @return boolean 
     */
    public function getLogvalorrequerido()
    {
        return $this->logvalorrequerido;
    }

    /**
     * Set strformato
     *
     * @param string $strformato
     * @return Tablasdinamicascampos
     */
    public function setStrformato($strformato)
    {
        $this->strformato = $strformato;

        return $this;
    }

    /**
     * Get strformato
     *
     * @return string 
     */
    public function getStrformato()
    {
        return $this->strformato;
    }

    /**
     * Set numtipoubicacion
     *
     * @param integer $numtipoubicacion
     * @return Tablasdinamicascampos
     */
    public function setNumtipoubicacion($numtipoubicacion)
    {
        $this->numtipoubicacion = $numtipoubicacion;

        return $this;
    }

    /**
     * Get numtipoubicacion
     *
     * @return integer 
     */
    public function getNumtipoubicacion()
    {
        return $this->numtipoubicacion;
    }

    /**
     * Set numtipoarea
     *
     * @param integer $numtipoarea
     * @return Tablasdinamicascampos
     */
    public function setNumtipoarea($numtipoarea)
    {
        $this->numtipoarea = $numtipoarea;

        return $this;
    }

    /**
     * Get numtipoarea
     *
     * @return integer 
     */
    public function getNumtipoarea()
    {
        return $this->numtipoarea;
    }

    /**
     * Set numtipointervalo
     *
     * @param integer $numtipointervalo
     * @return Tablasdinamicascampos
     */
    public function setNumtipointervalo($numtipointervalo)
    {
        $this->numtipointervalo = $numtipointervalo;

        return $this;
    }

    /**
     * Get numtipointervalo
     *
     * @return integer 
     */
    public function getNumtipointervalo()
    {
        return $this->numtipointervalo;
    }

    /**
     * Set numtiporesumen
     *
     * @param integer $numtiporesumen
     * @return Tablasdinamicascampos
     */
    public function setNumtiporesumen($numtiporesumen)
    {
        $this->numtiporesumen = $numtiporesumen;

        return $this;
    }

    /**
     * Get numtiporesumen
     *
     * @return integer 
     */
    public function getNumtiporesumen()
    {
        return $this->numtiporesumen;
    }

    /**
     * Set numtipovariacion
     *
     * @param integer $numtipovariacion
     * @return Tablasdinamicascampos
     */
    public function setNumtipovariacion($numtipovariacion)
    {
        $this->numtipovariacion = $numtipovariacion;

        return $this;
    }

    /**
     * Get numtipovariacion
     *
     * @return integer 
     */
    public function getNumtipovariacion()
    {
        return $this->numtipovariacion;
    }

    /**
     * Set numtipoordenar
     *
     * @param integer $numtipoordenar
     * @return Tablasdinamicascampos
     */
    public function setNumtipoordenar($numtipoordenar)
    {
        $this->numtipoordenar = $numtipoordenar;

        return $this;
    }

    /**
     * Get numtipoordenar
     *
     * @return integer 
     */
    public function getNumtipoordenar()
    {
        return $this->numtipoordenar;
    }

    /**
     * Set numtiposareaspermitidas
     *
     * @param integer $numtiposareaspermitidas
     * @return Tablasdinamicascampos
     */
    public function setNumtiposareaspermitidas($numtiposareaspermitidas)
    {
        $this->numtiposareaspermitidas = $numtiposareaspermitidas;

        return $this;
    }

    /**
     * Get numtiposareaspermitidas
     *
     * @return integer 
     */
    public function getNumtiposareaspermitidas()
    {
        return $this->numtiposareaspermitidas;
    }

    /**
     * Set numtiposopciones
     *
     * @param integer $numtiposopciones
     * @return Tablasdinamicascampos
     */
    public function setNumtiposopciones($numtiposopciones)
    {
        $this->numtiposopciones = $numtiposopciones;

        return $this;
    }

    /**
     * Get numtiposopciones
     *
     * @return integer 
     */
    public function getNumtiposopciones()
    {
        return $this->numtiposopciones;
    }

    /**
     * Set numtipocomponente
     *
     * @param integer $numtipocomponente
     * @return Tablasdinamicascampos
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
     * Set numtipooperador
     *
     * @param integer $numtipooperador
     * @return Tablasdinamicascampos
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
     * Set numtipoempresa
     *
     * @param integer $numtipoempresa
     * @return Tablasdinamicascampos
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
     * Set strnombretablabusqueda
     *
     * @param string $strnombretablabusqueda
     * @return Tablasdinamicascampos
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
     * @return Tablasdinamicascampos
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
     * @return Tablasdinamicascampos
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
     * @return Tablasdinamicascampos
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
     * Set strnombrecamponivel
     *
     * @param string $strnombrecamponivel
     * @return Tablasdinamicascampos
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
     * Set strcriterioseleccion
     *
     * @param string $strcriterioseleccion
     * @return Tablasdinamicascampos
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
     * Set strcomandoseleccion
     *
     * @param string $strcomandoseleccion
     * @return Tablasdinamicascampos
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
