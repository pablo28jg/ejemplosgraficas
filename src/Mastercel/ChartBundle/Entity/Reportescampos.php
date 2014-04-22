<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportescampos
 *
 * @ORM\Table(name="ReportesCampos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_2", columns={"StrNombreTabla", "StrNombreCampo", "NumReporte_id"})}, indexes={@ORM\Index(name="Indice_1", columns={"NumReporte_id", "NumOrden"})})
 * @ORM\Entity
 */
class Reportescampos
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
     * @ORM\Column(name="StrValorOmision", type="string", length=200, nullable=true)
     */
    private $strvaloromision;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEmpresa", type="integer", nullable=true)
     */
    private $numtipoempresa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogIncluirSubtitulo", type="boolean", nullable=true)
     */
    private $logincluirsubtitulo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogVariable", type="boolean", nullable=true)
     */
    private $logvariable = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogValorRequerido", type="boolean", nullable=true)
     */
    private $logvalorrequerido = '0';

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
     * @ORM\Column(name="StrNombreCampoNivel", type="string", length=150, nullable=true)
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
     * Set numreporteId
     *
     * @param integer $numreporteId
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
     * Set strnombregrupo
     *
     * @param string $strnombregrupo
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
     * Set logincluirsubtitulo
     *
     * @param boolean $logincluirsubtitulo
     * @return Reportescampos
     */
    public function setLogincluirsubtitulo($logincluirsubtitulo)
    {
        $this->logincluirsubtitulo = $logincluirsubtitulo;

        return $this;
    }

    /**
     * Get logincluirsubtitulo
     *
     * @return boolean 
     */
    public function getLogincluirsubtitulo()
    {
        return $this->logincluirsubtitulo;
    }

    /**
     * Set logvariable
     *
     * @param boolean $logvariable
     * @return Reportescampos
     */
    public function setLogvariable($logvariable)
    {
        $this->logvariable = $logvariable;

        return $this;
    }

    /**
     * Get logvariable
     *
     * @return boolean 
     */
    public function getLogvariable()
    {
        return $this->logvariable;
    }

    /**
     * Set logvalorrequerido
     *
     * @param boolean $logvalorrequerido
     * @return Reportescampos
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
     * Set numtipocomponente
     *
     * @param integer $numtipocomponente
     * @return Reportescampos
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
     * @return Reportescampos
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
     * Set strnombretablabusqueda
     *
     * @param string $strnombretablabusqueda
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
     * @return Reportescampos
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
