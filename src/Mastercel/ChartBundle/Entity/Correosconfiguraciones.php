<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correosconfiguraciones
 *
 * @ORM\Table(name="CorreosConfiguraciones", indexes={@ORM\Index(name="Indice_1", columns={"NumServidorCorreo_id"})})
 * @ORM\Entity
 */
class Correosconfiguraciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConfiguracionCorreo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconfiguracioncorreoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=128, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogArchivarEnviados", type="boolean", nullable=true)
     */
    private $logarchivarenviados = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogArchivarEliminados", type="boolean", nullable=true)
     */
    private $logarchivareliminados = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogEliminarAntiguos", type="boolean", nullable=true)
     */
    private $logeliminarantiguos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEliminarDespuesDias", type="integer", nullable=true)
     */
    private $numeliminardespuesdias = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogIncluirmeCopiaOculta", type="boolean", nullable=true)
     */
    private $logincluirmecopiaoculta = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogMostrarNoLeidos", type="boolean", nullable=true)
     */
    private $logmostrarnoleidos = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogCerrarSinLeer", type="boolean", nullable=true)
     */
    private $logcerrarsinleer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumServidorCorreo_id", type="integer", nullable=true)
     */
    private $numservidorcorreoId = '0';

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
     * Get numconfiguracioncorreoId
     *
     * @return integer 
     */
    public function getNumconfiguracioncorreoId()
    {
        return $this->numconfiguracioncorreoId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Correosconfiguraciones
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
     * Set logarchivarenviados
     *
     * @param boolean $logarchivarenviados
     * @return Correosconfiguraciones
     */
    public function setLogarchivarenviados($logarchivarenviados)
    {
        $this->logarchivarenviados = $logarchivarenviados;

        return $this;
    }

    /**
     * Get logarchivarenviados
     *
     * @return boolean 
     */
    public function getLogarchivarenviados()
    {
        return $this->logarchivarenviados;
    }

    /**
     * Set logarchivareliminados
     *
     * @param boolean $logarchivareliminados
     * @return Correosconfiguraciones
     */
    public function setLogarchivareliminados($logarchivareliminados)
    {
        $this->logarchivareliminados = $logarchivareliminados;

        return $this;
    }

    /**
     * Get logarchivareliminados
     *
     * @return boolean 
     */
    public function getLogarchivareliminados()
    {
        return $this->logarchivareliminados;
    }

    /**
     * Set logeliminarantiguos
     *
     * @param boolean $logeliminarantiguos
     * @return Correosconfiguraciones
     */
    public function setLogeliminarantiguos($logeliminarantiguos)
    {
        $this->logeliminarantiguos = $logeliminarantiguos;

        return $this;
    }

    /**
     * Get logeliminarantiguos
     *
     * @return boolean 
     */
    public function getLogeliminarantiguos()
    {
        return $this->logeliminarantiguos;
    }

    /**
     * Set numeliminardespuesdias
     *
     * @param integer $numeliminardespuesdias
     * @return Correosconfiguraciones
     */
    public function setNumeliminardespuesdias($numeliminardespuesdias)
    {
        $this->numeliminardespuesdias = $numeliminardespuesdias;

        return $this;
    }

    /**
     * Get numeliminardespuesdias
     *
     * @return integer 
     */
    public function getNumeliminardespuesdias()
    {
        return $this->numeliminardespuesdias;
    }

    /**
     * Set logincluirmecopiaoculta
     *
     * @param boolean $logincluirmecopiaoculta
     * @return Correosconfiguraciones
     */
    public function setLogincluirmecopiaoculta($logincluirmecopiaoculta)
    {
        $this->logincluirmecopiaoculta = $logincluirmecopiaoculta;

        return $this;
    }

    /**
     * Get logincluirmecopiaoculta
     *
     * @return boolean 
     */
    public function getLogincluirmecopiaoculta()
    {
        return $this->logincluirmecopiaoculta;
    }

    /**
     * Set logmostrarnoleidos
     *
     * @param boolean $logmostrarnoleidos
     * @return Correosconfiguraciones
     */
    public function setLogmostrarnoleidos($logmostrarnoleidos)
    {
        $this->logmostrarnoleidos = $logmostrarnoleidos;

        return $this;
    }

    /**
     * Get logmostrarnoleidos
     *
     * @return boolean 
     */
    public function getLogmostrarnoleidos()
    {
        return $this->logmostrarnoleidos;
    }

    /**
     * Set logcerrarsinleer
     *
     * @param boolean $logcerrarsinleer
     * @return Correosconfiguraciones
     */
    public function setLogcerrarsinleer($logcerrarsinleer)
    {
        $this->logcerrarsinleer = $logcerrarsinleer;

        return $this;
    }

    /**
     * Get logcerrarsinleer
     *
     * @return boolean 
     */
    public function getLogcerrarsinleer()
    {
        return $this->logcerrarsinleer;
    }

    /**
     * Set numservidorcorreoId
     *
     * @param integer $numservidorcorreoId
     * @return Correosconfiguraciones
     */
    public function setNumservidorcorreoId($numservidorcorreoId)
    {
        $this->numservidorcorreoId = $numservidorcorreoId;

        return $this;
    }

    /**
     * Get numservidorcorreoId
     *
     * @return integer 
     */
    public function getNumservidorcorreoId()
    {
        return $this->numservidorcorreoId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Correosconfiguraciones
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
     * @return Correosconfiguraciones
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
     * @return Correosconfiguraciones
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
     * @return Correosconfiguraciones
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
     * @return Correosconfiguraciones
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
