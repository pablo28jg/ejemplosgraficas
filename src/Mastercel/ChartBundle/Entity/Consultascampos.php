<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultascampos
 *
 * @ORM\Table(name="ConsultasCampos", indexes={@ORM\Index(name="Indice_1", columns={"NumConsulta_id", "NumOrden", "NumCampo_id"})})
 * @ORM\Entity
 */
class Consultascampos
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
     * @ORM\Column(name="NumConsulta_id", type="integer", nullable=true)
     */
    private $numconsultaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTotalizador", type="integer", nullable=true)
     */
    private $numtipototalizador = '0';

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
     * @ORM\Column(name="NumLongitud", type="integer", nullable=true)
     */
    private $numlongitud = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRegresarValor", type="boolean", nullable=true)
     */
    private $logregresarvalor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogVisible", type="boolean", nullable=true)
     */
    private $logvisible = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEmpresa", type="integer", nullable=true)
     */
    private $numtipoempresa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogFiltrar", type="boolean", nullable=true)
     */
    private $logfiltrar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDato", type="integer", nullable=true)
     */
    private $numtipodato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLongitudCampo", type="integer", nullable=true)
     */
    private $numlongitudcampo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrValorOmision", type="string", length=60, nullable=true)
     */
    private $strvaloromision;

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
     * @var string
     *
     * @ORM\Column(name="StrNombreCampoConsulta", type="string", length=60, nullable=true)
     */
    private $strnombrecampoconsulta;



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
     * Set numconsultaId
     *
     * @param integer $numconsultaId
     * @return Consultascampos
     */
    public function setNumconsultaId($numconsultaId)
    {
        $this->numconsultaId = $numconsultaId;

        return $this;
    }

    /**
     * Get numconsultaId
     *
     * @return integer 
     */
    public function getNumconsultaId()
    {
        return $this->numconsultaId;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Consultascampos
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
     * Set numtipototalizador
     *
     * @param integer $numtipototalizador
     * @return Consultascampos
     */
    public function setNumtipototalizador($numtipototalizador)
    {
        $this->numtipototalizador = $numtipototalizador;

        return $this;
    }

    /**
     * Get numtipototalizador
     *
     * @return integer 
     */
    public function getNumtipototalizador()
    {
        return $this->numtipototalizador;
    }

    /**
     * Set strnombretabla
     *
     * @param string $strnombretabla
     * @return Consultascampos
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
     * @return Consultascampos
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
     * @return Consultascampos
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
     * Set numlongitud
     *
     * @param integer $numlongitud
     * @return Consultascampos
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
     * Set logregresarvalor
     *
     * @param boolean $logregresarvalor
     * @return Consultascampos
     */
    public function setLogregresarvalor($logregresarvalor)
    {
        $this->logregresarvalor = $logregresarvalor;

        return $this;
    }

    /**
     * Get logregresarvalor
     *
     * @return boolean 
     */
    public function getLogregresarvalor()
    {
        return $this->logregresarvalor;
    }

    /**
     * Set logvisible
     *
     * @param boolean $logvisible
     * @return Consultascampos
     */
    public function setLogvisible($logvisible)
    {
        $this->logvisible = $logvisible;

        return $this;
    }

    /**
     * Get logvisible
     *
     * @return boolean 
     */
    public function getLogvisible()
    {
        return $this->logvisible;
    }

    /**
     * Set numtipoempresa
     *
     * @param integer $numtipoempresa
     * @return Consultascampos
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
     * Set logfiltrar
     *
     * @param boolean $logfiltrar
     * @return Consultascampos
     */
    public function setLogfiltrar($logfiltrar)
    {
        $this->logfiltrar = $logfiltrar;

        return $this;
    }

    /**
     * Get logfiltrar
     *
     * @return boolean 
     */
    public function getLogfiltrar()
    {
        return $this->logfiltrar;
    }

    /**
     * Set numtipodato
     *
     * @param integer $numtipodato
     * @return Consultascampos
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
     * Set numlongitudcampo
     *
     * @param integer $numlongitudcampo
     * @return Consultascampos
     */
    public function setNumlongitudcampo($numlongitudcampo)
    {
        $this->numlongitudcampo = $numlongitudcampo;

        return $this;
    }

    /**
     * Get numlongitudcampo
     *
     * @return integer 
     */
    public function getNumlongitudcampo()
    {
        return $this->numlongitudcampo;
    }

    /**
     * Set strvaloromision
     *
     * @param string $strvaloromision
     * @return Consultascampos
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
     * Set numtipocomponente
     *
     * @param integer $numtipocomponente
     * @return Consultascampos
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
     * @return Consultascampos
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
     * @return Consultascampos
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
     * @return Consultascampos
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
     * @return Consultascampos
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
     * @return Consultascampos
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
     * @return Consultascampos
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
     * @return Consultascampos
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
     * @return Consultascampos
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

    /**
     * Set strnombrecampoconsulta
     *
     * @param string $strnombrecampoconsulta
     * @return Consultascampos
     */
    public function setStrnombrecampoconsulta($strnombrecampoconsulta)
    {
        $this->strnombrecampoconsulta = $strnombrecampoconsulta;

        return $this;
    }

    /**
     * Get strnombrecampoconsulta
     *
     * @return string 
     */
    public function getStrnombrecampoconsulta()
    {
        return $this->strnombrecampoconsulta;
    }
}
