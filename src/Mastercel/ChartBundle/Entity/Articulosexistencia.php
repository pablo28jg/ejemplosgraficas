<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulosexistencia
 *
 * @ORM\Table(name="ArticulosExistencia", indexes={@ORM\Index(name="Indice_1", columns={"NumEjercicio_id", "StrArticulo_ky", "NumAlmacen_id"}), @ORM\Index(name="Indice_2", columns={"NumAlmacen_id", "StrArticulo_ky", "NumEjercicio_id"}), @ORM\Index(name="Indice_3", columns={"StrArticulo_ky", "NumAlmacen_id", "NumEjercicio_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_6", columns={"NumEjercicio_id", "StrArticulo_ky", "StrSerie_ky"}), @ORM\Index(name="Indice_7", columns={"NumEjercicio_id", "NumAlmacen_id", "StrArticulo_ky", "StrSerie_ky"}), @ORM\Index(name="Indice_8", columns={"NumEjercicio_id", "NumAlmacen_id", "StrArticulo_ky", "StrSerieControl_ky"}), @ORM\Index(name="Indice_9", columns={"StrSerie_ky", "NumEjercicio_id", "NumAlmacen_id", "StrArticulo_ky"}), @ORM\Index(name="Indice_10", columns={"StrSerieControl_ky", "NumEjercicio_id", "NumAlmacen_id", "StrArticulo_ky"})})
 * @ORM\Entity
 */
class Articulosexistencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPedimento_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strpedimentoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrLote_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strloteKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strserieKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerieControl_ky", type="string", length=20, nullable=true)
     */
    private $strseriecontrolKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadOrdenada", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadordenada = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadPedida", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadpedida = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadDisponible", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidaddisponible = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadApartada", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadapartada = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadBackOrder", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadbackorder = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadTransito", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadtransito = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadInicial", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadinicial = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_7", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_8", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas8 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_9", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas9 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_10", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_11", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas11 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_12", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas12 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadEntradas_13", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadentradas13 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_7", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_8", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas8 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_9", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas9 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_10", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_11", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas11 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_12", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas12 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadSalidas_13", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadsalidas13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoInicial", type="integer", nullable=true)
     */
    private $numcostoinicial = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_1", type="integer", nullable=true)
     */
    private $numcostoentradas1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_2", type="integer", nullable=true)
     */
    private $numcostoentradas2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_3", type="integer", nullable=true)
     */
    private $numcostoentradas3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_4", type="integer", nullable=true)
     */
    private $numcostoentradas4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_5", type="integer", nullable=true)
     */
    private $numcostoentradas5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_6", type="integer", nullable=true)
     */
    private $numcostoentradas6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_7", type="integer", nullable=true)
     */
    private $numcostoentradas7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_8", type="integer", nullable=true)
     */
    private $numcostoentradas8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_9", type="integer", nullable=true)
     */
    private $numcostoentradas9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_10", type="integer", nullable=true)
     */
    private $numcostoentradas10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_11", type="integer", nullable=true)
     */
    private $numcostoentradas11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_12", type="integer", nullable=true)
     */
    private $numcostoentradas12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEntradas_13", type="integer", nullable=true)
     */
    private $numcostoentradas13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_1", type="integer", nullable=true)
     */
    private $numcostosalidas1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_2", type="integer", nullable=true)
     */
    private $numcostosalidas2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_3", type="integer", nullable=true)
     */
    private $numcostosalidas3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_4", type="integer", nullable=true)
     */
    private $numcostosalidas4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_5", type="integer", nullable=true)
     */
    private $numcostosalidas5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_6", type="integer", nullable=true)
     */
    private $numcostosalidas6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_7", type="integer", nullable=true)
     */
    private $numcostosalidas7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_8", type="integer", nullable=true)
     */
    private $numcostosalidas8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_9", type="integer", nullable=true)
     */
    private $numcostosalidas9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_10", type="integer", nullable=true)
     */
    private $numcostosalidas10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_11", type="integer", nullable=true)
     */
    private $numcostosalidas11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_12", type="integer", nullable=true)
     */
    private $numcostosalidas12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoSalidas_13", type="integer", nullable=true)
     */
    private $numcostosalidas13 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_1", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_2", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_3", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_4", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_5", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_6", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_7", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto7 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_8", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto8 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_9", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto9 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_10", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto10 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_11", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto11 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCosto_12", type="decimal", precision=18, scale=8, nullable=true)
     */
    private $numcosto12 = '0';

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
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Articulosexistencia
     */
    public function setNumejercicioId($numejercicioId)
    {
        $this->numejercicioId = $numejercicioId;

        return $this;
    }

    /**
     * Get numejercicioId
     *
     * @return integer 
     */
    public function getNumejercicioId()
    {
        return $this->numejercicioId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Articulosexistencia
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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Articulosexistencia
     */
    public function setStrarticuloKy($strarticuloKy)
    {
        $this->strarticuloKy = $strarticuloKy;

        return $this;
    }

    /**
     * Get strarticuloKy
     *
     * @return string 
     */
    public function getStrarticuloKy()
    {
        return $this->strarticuloKy;
    }

    /**
     * Set strpedimentoKy
     *
     * @param string $strpedimentoKy
     * @return Articulosexistencia
     */
    public function setStrpedimentoKy($strpedimentoKy)
    {
        $this->strpedimentoKy = $strpedimentoKy;

        return $this;
    }

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
     * Set strloteKy
     *
     * @param string $strloteKy
     * @return Articulosexistencia
     */
    public function setStrloteKy($strloteKy)
    {
        $this->strloteKy = $strloteKy;

        return $this;
    }

    /**
     * Get strloteKy
     *
     * @return string 
     */
    public function getStrloteKy()
    {
        return $this->strloteKy;
    }

    /**
     * Set strserieKy
     *
     * @param string $strserieKy
     * @return Articulosexistencia
     */
    public function setStrserieKy($strserieKy)
    {
        $this->strserieKy = $strserieKy;

        return $this;
    }

    /**
     * Get strserieKy
     *
     * @return string 
     */
    public function getStrserieKy()
    {
        return $this->strserieKy;
    }

    /**
     * Set strseriecontrolKy
     *
     * @param string $strseriecontrolKy
     * @return Articulosexistencia
     */
    public function setStrseriecontrolKy($strseriecontrolKy)
    {
        $this->strseriecontrolKy = $strseriecontrolKy;

        return $this;
    }

    /**
     * Get strseriecontrolKy
     *
     * @return string 
     */
    public function getStrseriecontrolKy()
    {
        return $this->strseriecontrolKy;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Articulosexistencia
     */
    public function setStrreferencia($strreferencia)
    {
        $this->strreferencia = $strreferencia;

        return $this;
    }

    /**
     * Get strreferencia
     *
     * @return string 
     */
    public function getStrreferencia()
    {
        return $this->strreferencia;
    }

    /**
     * Set numcantidadordenada
     *
     * @param float $numcantidadordenada
     * @return Articulosexistencia
     */
    public function setNumcantidadordenada($numcantidadordenada)
    {
        $this->numcantidadordenada = $numcantidadordenada;

        return $this;
    }

    /**
     * Get numcantidadordenada
     *
     * @return float 
     */
    public function getNumcantidadordenada()
    {
        return $this->numcantidadordenada;
    }

    /**
     * Set numcantidadpedida
     *
     * @param float $numcantidadpedida
     * @return Articulosexistencia
     */
    public function setNumcantidadpedida($numcantidadpedida)
    {
        $this->numcantidadpedida = $numcantidadpedida;

        return $this;
    }

    /**
     * Get numcantidadpedida
     *
     * @return float 
     */
    public function getNumcantidadpedida()
    {
        return $this->numcantidadpedida;
    }

    /**
     * Set numcantidaddisponible
     *
     * @param float $numcantidaddisponible
     * @return Articulosexistencia
     */
    public function setNumcantidaddisponible($numcantidaddisponible)
    {
        $this->numcantidaddisponible = $numcantidaddisponible;

        return $this;
    }

    /**
     * Get numcantidaddisponible
     *
     * @return float 
     */
    public function getNumcantidaddisponible()
    {
        return $this->numcantidaddisponible;
    }

    /**
     * Set numcantidadapartada
     *
     * @param float $numcantidadapartada
     * @return Articulosexistencia
     */
    public function setNumcantidadapartada($numcantidadapartada)
    {
        $this->numcantidadapartada = $numcantidadapartada;

        return $this;
    }

    /**
     * Get numcantidadapartada
     *
     * @return float 
     */
    public function getNumcantidadapartada()
    {
        return $this->numcantidadapartada;
    }

    /**
     * Set numcantidadbackorder
     *
     * @param float $numcantidadbackorder
     * @return Articulosexistencia
     */
    public function setNumcantidadbackorder($numcantidadbackorder)
    {
        $this->numcantidadbackorder = $numcantidadbackorder;

        return $this;
    }

    /**
     * Get numcantidadbackorder
     *
     * @return float 
     */
    public function getNumcantidadbackorder()
    {
        return $this->numcantidadbackorder;
    }

    /**
     * Set numcantidadtransito
     *
     * @param float $numcantidadtransito
     * @return Articulosexistencia
     */
    public function setNumcantidadtransito($numcantidadtransito)
    {
        $this->numcantidadtransito = $numcantidadtransito;

        return $this;
    }

    /**
     * Get numcantidadtransito
     *
     * @return float 
     */
    public function getNumcantidadtransito()
    {
        return $this->numcantidadtransito;
    }

    /**
     * Set numcantidadinicial
     *
     * @param float $numcantidadinicial
     * @return Articulosexistencia
     */
    public function setNumcantidadinicial($numcantidadinicial)
    {
        $this->numcantidadinicial = $numcantidadinicial;

        return $this;
    }

    /**
     * Get numcantidadinicial
     *
     * @return float 
     */
    public function getNumcantidadinicial()
    {
        return $this->numcantidadinicial;
    }

    /**
     * Set numcantidadentradas1
     *
     * @param float $numcantidadentradas1
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas1($numcantidadentradas1)
    {
        $this->numcantidadentradas1 = $numcantidadentradas1;

        return $this;
    }

    /**
     * Get numcantidadentradas1
     *
     * @return float 
     */
    public function getNumcantidadentradas1()
    {
        return $this->numcantidadentradas1;
    }

    /**
     * Set numcantidadentradas2
     *
     * @param float $numcantidadentradas2
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas2($numcantidadentradas2)
    {
        $this->numcantidadentradas2 = $numcantidadentradas2;

        return $this;
    }

    /**
     * Get numcantidadentradas2
     *
     * @return float 
     */
    public function getNumcantidadentradas2()
    {
        return $this->numcantidadentradas2;
    }

    /**
     * Set numcantidadentradas3
     *
     * @param float $numcantidadentradas3
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas3($numcantidadentradas3)
    {
        $this->numcantidadentradas3 = $numcantidadentradas3;

        return $this;
    }

    /**
     * Get numcantidadentradas3
     *
     * @return float 
     */
    public function getNumcantidadentradas3()
    {
        return $this->numcantidadentradas3;
    }

    /**
     * Set numcantidadentradas4
     *
     * @param float $numcantidadentradas4
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas4($numcantidadentradas4)
    {
        $this->numcantidadentradas4 = $numcantidadentradas4;

        return $this;
    }

    /**
     * Get numcantidadentradas4
     *
     * @return float 
     */
    public function getNumcantidadentradas4()
    {
        return $this->numcantidadentradas4;
    }

    /**
     * Set numcantidadentradas5
     *
     * @param float $numcantidadentradas5
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas5($numcantidadentradas5)
    {
        $this->numcantidadentradas5 = $numcantidadentradas5;

        return $this;
    }

    /**
     * Get numcantidadentradas5
     *
     * @return float 
     */
    public function getNumcantidadentradas5()
    {
        return $this->numcantidadentradas5;
    }

    /**
     * Set numcantidadentradas6
     *
     * @param float $numcantidadentradas6
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas6($numcantidadentradas6)
    {
        $this->numcantidadentradas6 = $numcantidadentradas6;

        return $this;
    }

    /**
     * Get numcantidadentradas6
     *
     * @return float 
     */
    public function getNumcantidadentradas6()
    {
        return $this->numcantidadentradas6;
    }

    /**
     * Set numcantidadentradas7
     *
     * @param float $numcantidadentradas7
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas7($numcantidadentradas7)
    {
        $this->numcantidadentradas7 = $numcantidadentradas7;

        return $this;
    }

    /**
     * Get numcantidadentradas7
     *
     * @return float 
     */
    public function getNumcantidadentradas7()
    {
        return $this->numcantidadentradas7;
    }

    /**
     * Set numcantidadentradas8
     *
     * @param float $numcantidadentradas8
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas8($numcantidadentradas8)
    {
        $this->numcantidadentradas8 = $numcantidadentradas8;

        return $this;
    }

    /**
     * Get numcantidadentradas8
     *
     * @return float 
     */
    public function getNumcantidadentradas8()
    {
        return $this->numcantidadentradas8;
    }

    /**
     * Set numcantidadentradas9
     *
     * @param float $numcantidadentradas9
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas9($numcantidadentradas9)
    {
        $this->numcantidadentradas9 = $numcantidadentradas9;

        return $this;
    }

    /**
     * Get numcantidadentradas9
     *
     * @return float 
     */
    public function getNumcantidadentradas9()
    {
        return $this->numcantidadentradas9;
    }

    /**
     * Set numcantidadentradas10
     *
     * @param float $numcantidadentradas10
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas10($numcantidadentradas10)
    {
        $this->numcantidadentradas10 = $numcantidadentradas10;

        return $this;
    }

    /**
     * Get numcantidadentradas10
     *
     * @return float 
     */
    public function getNumcantidadentradas10()
    {
        return $this->numcantidadentradas10;
    }

    /**
     * Set numcantidadentradas11
     *
     * @param float $numcantidadentradas11
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas11($numcantidadentradas11)
    {
        $this->numcantidadentradas11 = $numcantidadentradas11;

        return $this;
    }

    /**
     * Get numcantidadentradas11
     *
     * @return float 
     */
    public function getNumcantidadentradas11()
    {
        return $this->numcantidadentradas11;
    }

    /**
     * Set numcantidadentradas12
     *
     * @param float $numcantidadentradas12
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas12($numcantidadentradas12)
    {
        $this->numcantidadentradas12 = $numcantidadentradas12;

        return $this;
    }

    /**
     * Get numcantidadentradas12
     *
     * @return float 
     */
    public function getNumcantidadentradas12()
    {
        return $this->numcantidadentradas12;
    }

    /**
     * Set numcantidadentradas13
     *
     * @param float $numcantidadentradas13
     * @return Articulosexistencia
     */
    public function setNumcantidadentradas13($numcantidadentradas13)
    {
        $this->numcantidadentradas13 = $numcantidadentradas13;

        return $this;
    }

    /**
     * Get numcantidadentradas13
     *
     * @return float 
     */
    public function getNumcantidadentradas13()
    {
        return $this->numcantidadentradas13;
    }

    /**
     * Set numcantidadsalidas1
     *
     * @param float $numcantidadsalidas1
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas1($numcantidadsalidas1)
    {
        $this->numcantidadsalidas1 = $numcantidadsalidas1;

        return $this;
    }

    /**
     * Get numcantidadsalidas1
     *
     * @return float 
     */
    public function getNumcantidadsalidas1()
    {
        return $this->numcantidadsalidas1;
    }

    /**
     * Set numcantidadsalidas2
     *
     * @param float $numcantidadsalidas2
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas2($numcantidadsalidas2)
    {
        $this->numcantidadsalidas2 = $numcantidadsalidas2;

        return $this;
    }

    /**
     * Get numcantidadsalidas2
     *
     * @return float 
     */
    public function getNumcantidadsalidas2()
    {
        return $this->numcantidadsalidas2;
    }

    /**
     * Set numcantidadsalidas3
     *
     * @param float $numcantidadsalidas3
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas3($numcantidadsalidas3)
    {
        $this->numcantidadsalidas3 = $numcantidadsalidas3;

        return $this;
    }

    /**
     * Get numcantidadsalidas3
     *
     * @return float 
     */
    public function getNumcantidadsalidas3()
    {
        return $this->numcantidadsalidas3;
    }

    /**
     * Set numcantidadsalidas4
     *
     * @param float $numcantidadsalidas4
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas4($numcantidadsalidas4)
    {
        $this->numcantidadsalidas4 = $numcantidadsalidas4;

        return $this;
    }

    /**
     * Get numcantidadsalidas4
     *
     * @return float 
     */
    public function getNumcantidadsalidas4()
    {
        return $this->numcantidadsalidas4;
    }

    /**
     * Set numcantidadsalidas5
     *
     * @param float $numcantidadsalidas5
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas5($numcantidadsalidas5)
    {
        $this->numcantidadsalidas5 = $numcantidadsalidas5;

        return $this;
    }

    /**
     * Get numcantidadsalidas5
     *
     * @return float 
     */
    public function getNumcantidadsalidas5()
    {
        return $this->numcantidadsalidas5;
    }

    /**
     * Set numcantidadsalidas6
     *
     * @param float $numcantidadsalidas6
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas6($numcantidadsalidas6)
    {
        $this->numcantidadsalidas6 = $numcantidadsalidas6;

        return $this;
    }

    /**
     * Get numcantidadsalidas6
     *
     * @return float 
     */
    public function getNumcantidadsalidas6()
    {
        return $this->numcantidadsalidas6;
    }

    /**
     * Set numcantidadsalidas7
     *
     * @param float $numcantidadsalidas7
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas7($numcantidadsalidas7)
    {
        $this->numcantidadsalidas7 = $numcantidadsalidas7;

        return $this;
    }

    /**
     * Get numcantidadsalidas7
     *
     * @return float 
     */
    public function getNumcantidadsalidas7()
    {
        return $this->numcantidadsalidas7;
    }

    /**
     * Set numcantidadsalidas8
     *
     * @param float $numcantidadsalidas8
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas8($numcantidadsalidas8)
    {
        $this->numcantidadsalidas8 = $numcantidadsalidas8;

        return $this;
    }

    /**
     * Get numcantidadsalidas8
     *
     * @return float 
     */
    public function getNumcantidadsalidas8()
    {
        return $this->numcantidadsalidas8;
    }

    /**
     * Set numcantidadsalidas9
     *
     * @param float $numcantidadsalidas9
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas9($numcantidadsalidas9)
    {
        $this->numcantidadsalidas9 = $numcantidadsalidas9;

        return $this;
    }

    /**
     * Get numcantidadsalidas9
     *
     * @return float 
     */
    public function getNumcantidadsalidas9()
    {
        return $this->numcantidadsalidas9;
    }

    /**
     * Set numcantidadsalidas10
     *
     * @param float $numcantidadsalidas10
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas10($numcantidadsalidas10)
    {
        $this->numcantidadsalidas10 = $numcantidadsalidas10;

        return $this;
    }

    /**
     * Get numcantidadsalidas10
     *
     * @return float 
     */
    public function getNumcantidadsalidas10()
    {
        return $this->numcantidadsalidas10;
    }

    /**
     * Set numcantidadsalidas11
     *
     * @param float $numcantidadsalidas11
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas11($numcantidadsalidas11)
    {
        $this->numcantidadsalidas11 = $numcantidadsalidas11;

        return $this;
    }

    /**
     * Get numcantidadsalidas11
     *
     * @return float 
     */
    public function getNumcantidadsalidas11()
    {
        return $this->numcantidadsalidas11;
    }

    /**
     * Set numcantidadsalidas12
     *
     * @param float $numcantidadsalidas12
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas12($numcantidadsalidas12)
    {
        $this->numcantidadsalidas12 = $numcantidadsalidas12;

        return $this;
    }

    /**
     * Get numcantidadsalidas12
     *
     * @return float 
     */
    public function getNumcantidadsalidas12()
    {
        return $this->numcantidadsalidas12;
    }

    /**
     * Set numcantidadsalidas13
     *
     * @param float $numcantidadsalidas13
     * @return Articulosexistencia
     */
    public function setNumcantidadsalidas13($numcantidadsalidas13)
    {
        $this->numcantidadsalidas13 = $numcantidadsalidas13;

        return $this;
    }

    /**
     * Get numcantidadsalidas13
     *
     * @return float 
     */
    public function getNumcantidadsalidas13()
    {
        return $this->numcantidadsalidas13;
    }

    /**
     * Set numcostoinicial
     *
     * @param integer $numcostoinicial
     * @return Articulosexistencia
     */
    public function setNumcostoinicial($numcostoinicial)
    {
        $this->numcostoinicial = $numcostoinicial;

        return $this;
    }

    /**
     * Get numcostoinicial
     *
     * @return integer 
     */
    public function getNumcostoinicial()
    {
        return $this->numcostoinicial;
    }

    /**
     * Set numcostoentradas1
     *
     * @param integer $numcostoentradas1
     * @return Articulosexistencia
     */
    public function setNumcostoentradas1($numcostoentradas1)
    {
        $this->numcostoentradas1 = $numcostoentradas1;

        return $this;
    }

    /**
     * Get numcostoentradas1
     *
     * @return integer 
     */
    public function getNumcostoentradas1()
    {
        return $this->numcostoentradas1;
    }

    /**
     * Set numcostoentradas2
     *
     * @param integer $numcostoentradas2
     * @return Articulosexistencia
     */
    public function setNumcostoentradas2($numcostoentradas2)
    {
        $this->numcostoentradas2 = $numcostoentradas2;

        return $this;
    }

    /**
     * Get numcostoentradas2
     *
     * @return integer 
     */
    public function getNumcostoentradas2()
    {
        return $this->numcostoentradas2;
    }

    /**
     * Set numcostoentradas3
     *
     * @param integer $numcostoentradas3
     * @return Articulosexistencia
     */
    public function setNumcostoentradas3($numcostoentradas3)
    {
        $this->numcostoentradas3 = $numcostoentradas3;

        return $this;
    }

    /**
     * Get numcostoentradas3
     *
     * @return integer 
     */
    public function getNumcostoentradas3()
    {
        return $this->numcostoentradas3;
    }

    /**
     * Set numcostoentradas4
     *
     * @param integer $numcostoentradas4
     * @return Articulosexistencia
     */
    public function setNumcostoentradas4($numcostoentradas4)
    {
        $this->numcostoentradas4 = $numcostoentradas4;

        return $this;
    }

    /**
     * Get numcostoentradas4
     *
     * @return integer 
     */
    public function getNumcostoentradas4()
    {
        return $this->numcostoentradas4;
    }

    /**
     * Set numcostoentradas5
     *
     * @param integer $numcostoentradas5
     * @return Articulosexistencia
     */
    public function setNumcostoentradas5($numcostoentradas5)
    {
        $this->numcostoentradas5 = $numcostoentradas5;

        return $this;
    }

    /**
     * Get numcostoentradas5
     *
     * @return integer 
     */
    public function getNumcostoentradas5()
    {
        return $this->numcostoentradas5;
    }

    /**
     * Set numcostoentradas6
     *
     * @param integer $numcostoentradas6
     * @return Articulosexistencia
     */
    public function setNumcostoentradas6($numcostoentradas6)
    {
        $this->numcostoentradas6 = $numcostoentradas6;

        return $this;
    }

    /**
     * Get numcostoentradas6
     *
     * @return integer 
     */
    public function getNumcostoentradas6()
    {
        return $this->numcostoentradas6;
    }

    /**
     * Set numcostoentradas7
     *
     * @param integer $numcostoentradas7
     * @return Articulosexistencia
     */
    public function setNumcostoentradas7($numcostoentradas7)
    {
        $this->numcostoentradas7 = $numcostoentradas7;

        return $this;
    }

    /**
     * Get numcostoentradas7
     *
     * @return integer 
     */
    public function getNumcostoentradas7()
    {
        return $this->numcostoentradas7;
    }

    /**
     * Set numcostoentradas8
     *
     * @param integer $numcostoentradas8
     * @return Articulosexistencia
     */
    public function setNumcostoentradas8($numcostoentradas8)
    {
        $this->numcostoentradas8 = $numcostoentradas8;

        return $this;
    }

    /**
     * Get numcostoentradas8
     *
     * @return integer 
     */
    public function getNumcostoentradas8()
    {
        return $this->numcostoentradas8;
    }

    /**
     * Set numcostoentradas9
     *
     * @param integer $numcostoentradas9
     * @return Articulosexistencia
     */
    public function setNumcostoentradas9($numcostoentradas9)
    {
        $this->numcostoentradas9 = $numcostoentradas9;

        return $this;
    }

    /**
     * Get numcostoentradas9
     *
     * @return integer 
     */
    public function getNumcostoentradas9()
    {
        return $this->numcostoentradas9;
    }

    /**
     * Set numcostoentradas10
     *
     * @param integer $numcostoentradas10
     * @return Articulosexistencia
     */
    public function setNumcostoentradas10($numcostoentradas10)
    {
        $this->numcostoentradas10 = $numcostoentradas10;

        return $this;
    }

    /**
     * Get numcostoentradas10
     *
     * @return integer 
     */
    public function getNumcostoentradas10()
    {
        return $this->numcostoentradas10;
    }

    /**
     * Set numcostoentradas11
     *
     * @param integer $numcostoentradas11
     * @return Articulosexistencia
     */
    public function setNumcostoentradas11($numcostoentradas11)
    {
        $this->numcostoentradas11 = $numcostoentradas11;

        return $this;
    }

    /**
     * Get numcostoentradas11
     *
     * @return integer 
     */
    public function getNumcostoentradas11()
    {
        return $this->numcostoentradas11;
    }

    /**
     * Set numcostoentradas12
     *
     * @param integer $numcostoentradas12
     * @return Articulosexistencia
     */
    public function setNumcostoentradas12($numcostoentradas12)
    {
        $this->numcostoentradas12 = $numcostoentradas12;

        return $this;
    }

    /**
     * Get numcostoentradas12
     *
     * @return integer 
     */
    public function getNumcostoentradas12()
    {
        return $this->numcostoentradas12;
    }

    /**
     * Set numcostoentradas13
     *
     * @param integer $numcostoentradas13
     * @return Articulosexistencia
     */
    public function setNumcostoentradas13($numcostoentradas13)
    {
        $this->numcostoentradas13 = $numcostoentradas13;

        return $this;
    }

    /**
     * Get numcostoentradas13
     *
     * @return integer 
     */
    public function getNumcostoentradas13()
    {
        return $this->numcostoentradas13;
    }

    /**
     * Set numcostosalidas1
     *
     * @param integer $numcostosalidas1
     * @return Articulosexistencia
     */
    public function setNumcostosalidas1($numcostosalidas1)
    {
        $this->numcostosalidas1 = $numcostosalidas1;

        return $this;
    }

    /**
     * Get numcostosalidas1
     *
     * @return integer 
     */
    public function getNumcostosalidas1()
    {
        return $this->numcostosalidas1;
    }

    /**
     * Set numcostosalidas2
     *
     * @param integer $numcostosalidas2
     * @return Articulosexistencia
     */
    public function setNumcostosalidas2($numcostosalidas2)
    {
        $this->numcostosalidas2 = $numcostosalidas2;

        return $this;
    }

    /**
     * Get numcostosalidas2
     *
     * @return integer 
     */
    public function getNumcostosalidas2()
    {
        return $this->numcostosalidas2;
    }

    /**
     * Set numcostosalidas3
     *
     * @param integer $numcostosalidas3
     * @return Articulosexistencia
     */
    public function setNumcostosalidas3($numcostosalidas3)
    {
        $this->numcostosalidas3 = $numcostosalidas3;

        return $this;
    }

    /**
     * Get numcostosalidas3
     *
     * @return integer 
     */
    public function getNumcostosalidas3()
    {
        return $this->numcostosalidas3;
    }

    /**
     * Set numcostosalidas4
     *
     * @param integer $numcostosalidas4
     * @return Articulosexistencia
     */
    public function setNumcostosalidas4($numcostosalidas4)
    {
        $this->numcostosalidas4 = $numcostosalidas4;

        return $this;
    }

    /**
     * Get numcostosalidas4
     *
     * @return integer 
     */
    public function getNumcostosalidas4()
    {
        return $this->numcostosalidas4;
    }

    /**
     * Set numcostosalidas5
     *
     * @param integer $numcostosalidas5
     * @return Articulosexistencia
     */
    public function setNumcostosalidas5($numcostosalidas5)
    {
        $this->numcostosalidas5 = $numcostosalidas5;

        return $this;
    }

    /**
     * Get numcostosalidas5
     *
     * @return integer 
     */
    public function getNumcostosalidas5()
    {
        return $this->numcostosalidas5;
    }

    /**
     * Set numcostosalidas6
     *
     * @param integer $numcostosalidas6
     * @return Articulosexistencia
     */
    public function setNumcostosalidas6($numcostosalidas6)
    {
        $this->numcostosalidas6 = $numcostosalidas6;

        return $this;
    }

    /**
     * Get numcostosalidas6
     *
     * @return integer 
     */
    public function getNumcostosalidas6()
    {
        return $this->numcostosalidas6;
    }

    /**
     * Set numcostosalidas7
     *
     * @param integer $numcostosalidas7
     * @return Articulosexistencia
     */
    public function setNumcostosalidas7($numcostosalidas7)
    {
        $this->numcostosalidas7 = $numcostosalidas7;

        return $this;
    }

    /**
     * Get numcostosalidas7
     *
     * @return integer 
     */
    public function getNumcostosalidas7()
    {
        return $this->numcostosalidas7;
    }

    /**
     * Set numcostosalidas8
     *
     * @param integer $numcostosalidas8
     * @return Articulosexistencia
     */
    public function setNumcostosalidas8($numcostosalidas8)
    {
        $this->numcostosalidas8 = $numcostosalidas8;

        return $this;
    }

    /**
     * Get numcostosalidas8
     *
     * @return integer 
     */
    public function getNumcostosalidas8()
    {
        return $this->numcostosalidas8;
    }

    /**
     * Set numcostosalidas9
     *
     * @param integer $numcostosalidas9
     * @return Articulosexistencia
     */
    public function setNumcostosalidas9($numcostosalidas9)
    {
        $this->numcostosalidas9 = $numcostosalidas9;

        return $this;
    }

    /**
     * Get numcostosalidas9
     *
     * @return integer 
     */
    public function getNumcostosalidas9()
    {
        return $this->numcostosalidas9;
    }

    /**
     * Set numcostosalidas10
     *
     * @param integer $numcostosalidas10
     * @return Articulosexistencia
     */
    public function setNumcostosalidas10($numcostosalidas10)
    {
        $this->numcostosalidas10 = $numcostosalidas10;

        return $this;
    }

    /**
     * Get numcostosalidas10
     *
     * @return integer 
     */
    public function getNumcostosalidas10()
    {
        return $this->numcostosalidas10;
    }

    /**
     * Set numcostosalidas11
     *
     * @param integer $numcostosalidas11
     * @return Articulosexistencia
     */
    public function setNumcostosalidas11($numcostosalidas11)
    {
        $this->numcostosalidas11 = $numcostosalidas11;

        return $this;
    }

    /**
     * Get numcostosalidas11
     *
     * @return integer 
     */
    public function getNumcostosalidas11()
    {
        return $this->numcostosalidas11;
    }

    /**
     * Set numcostosalidas12
     *
     * @param integer $numcostosalidas12
     * @return Articulosexistencia
     */
    public function setNumcostosalidas12($numcostosalidas12)
    {
        $this->numcostosalidas12 = $numcostosalidas12;

        return $this;
    }

    /**
     * Get numcostosalidas12
     *
     * @return integer 
     */
    public function getNumcostosalidas12()
    {
        return $this->numcostosalidas12;
    }

    /**
     * Set numcostosalidas13
     *
     * @param integer $numcostosalidas13
     * @return Articulosexistencia
     */
    public function setNumcostosalidas13($numcostosalidas13)
    {
        $this->numcostosalidas13 = $numcostosalidas13;

        return $this;
    }

    /**
     * Get numcostosalidas13
     *
     * @return integer 
     */
    public function getNumcostosalidas13()
    {
        return $this->numcostosalidas13;
    }

    /**
     * Set numcosto
     *
     * @param string $numcosto
     * @return Articulosexistencia
     */
    public function setNumcosto($numcosto)
    {
        $this->numcosto = $numcosto;

        return $this;
    }

    /**
     * Get numcosto
     *
     * @return string 
     */
    public function getNumcosto()
    {
        return $this->numcosto;
    }

    /**
     * Set numcosto1
     *
     * @param string $numcosto1
     * @return Articulosexistencia
     */
    public function setNumcosto1($numcosto1)
    {
        $this->numcosto1 = $numcosto1;

        return $this;
    }

    /**
     * Get numcosto1
     *
     * @return string 
     */
    public function getNumcosto1()
    {
        return $this->numcosto1;
    }

    /**
     * Set numcosto2
     *
     * @param string $numcosto2
     * @return Articulosexistencia
     */
    public function setNumcosto2($numcosto2)
    {
        $this->numcosto2 = $numcosto2;

        return $this;
    }

    /**
     * Get numcosto2
     *
     * @return string 
     */
    public function getNumcosto2()
    {
        return $this->numcosto2;
    }

    /**
     * Set numcosto3
     *
     * @param string $numcosto3
     * @return Articulosexistencia
     */
    public function setNumcosto3($numcosto3)
    {
        $this->numcosto3 = $numcosto3;

        return $this;
    }

    /**
     * Get numcosto3
     *
     * @return string 
     */
    public function getNumcosto3()
    {
        return $this->numcosto3;
    }

    /**
     * Set numcosto4
     *
     * @param string $numcosto4
     * @return Articulosexistencia
     */
    public function setNumcosto4($numcosto4)
    {
        $this->numcosto4 = $numcosto4;

        return $this;
    }

    /**
     * Get numcosto4
     *
     * @return string 
     */
    public function getNumcosto4()
    {
        return $this->numcosto4;
    }

    /**
     * Set numcosto5
     *
     * @param string $numcosto5
     * @return Articulosexistencia
     */
    public function setNumcosto5($numcosto5)
    {
        $this->numcosto5 = $numcosto5;

        return $this;
    }

    /**
     * Get numcosto5
     *
     * @return string 
     */
    public function getNumcosto5()
    {
        return $this->numcosto5;
    }

    /**
     * Set numcosto6
     *
     * @param string $numcosto6
     * @return Articulosexistencia
     */
    public function setNumcosto6($numcosto6)
    {
        $this->numcosto6 = $numcosto6;

        return $this;
    }

    /**
     * Get numcosto6
     *
     * @return string 
     */
    public function getNumcosto6()
    {
        return $this->numcosto6;
    }

    /**
     * Set numcosto7
     *
     * @param string $numcosto7
     * @return Articulosexistencia
     */
    public function setNumcosto7($numcosto7)
    {
        $this->numcosto7 = $numcosto7;

        return $this;
    }

    /**
     * Get numcosto7
     *
     * @return string 
     */
    public function getNumcosto7()
    {
        return $this->numcosto7;
    }

    /**
     * Set numcosto8
     *
     * @param string $numcosto8
     * @return Articulosexistencia
     */
    public function setNumcosto8($numcosto8)
    {
        $this->numcosto8 = $numcosto8;

        return $this;
    }

    /**
     * Get numcosto8
     *
     * @return string 
     */
    public function getNumcosto8()
    {
        return $this->numcosto8;
    }

    /**
     * Set numcosto9
     *
     * @param string $numcosto9
     * @return Articulosexistencia
     */
    public function setNumcosto9($numcosto9)
    {
        $this->numcosto9 = $numcosto9;

        return $this;
    }

    /**
     * Get numcosto9
     *
     * @return string 
     */
    public function getNumcosto9()
    {
        return $this->numcosto9;
    }

    /**
     * Set numcosto10
     *
     * @param string $numcosto10
     * @return Articulosexistencia
     */
    public function setNumcosto10($numcosto10)
    {
        $this->numcosto10 = $numcosto10;

        return $this;
    }

    /**
     * Get numcosto10
     *
     * @return string 
     */
    public function getNumcosto10()
    {
        return $this->numcosto10;
    }

    /**
     * Set numcosto11
     *
     * @param string $numcosto11
     * @return Articulosexistencia
     */
    public function setNumcosto11($numcosto11)
    {
        $this->numcosto11 = $numcosto11;

        return $this;
    }

    /**
     * Get numcosto11
     *
     * @return string 
     */
    public function getNumcosto11()
    {
        return $this->numcosto11;
    }

    /**
     * Set numcosto12
     *
     * @param string $numcosto12
     * @return Articulosexistencia
     */
    public function setNumcosto12($numcosto12)
    {
        $this->numcosto12 = $numcosto12;

        return $this;
    }

    /**
     * Get numcosto12
     *
     * @return string 
     */
    public function getNumcosto12()
    {
        return $this->numcosto12;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Articulosexistencia
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
     * @return Articulosexistencia
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
