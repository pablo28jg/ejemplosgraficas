<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulosconcepto
 *
 * @ORM\Table(name="ArticulosConcepto", indexes={@ORM\Index(name="Indice_1", columns={"NumEjercicio_id", "NumAlmacen_id", "StrArticulo_ky", "NumConcepto_id"}), @ORM\Index(name="Indice_2", columns={"NumEjercicio_id", "StrArticulo_ky", "NumAlmacen_id", "NumConcepto_id"}), @ORM\Index(name="Indice_3", columns={"NumEjercicio_id", "StrArticulo_ky", "NumConcepto_id", "NumAlmacen_id"}), @ORM\Index(name="Indice_4", columns={"NumEjercicio_id", "NumConcepto_id", "NumAlmacen_id", "StrArticulo_ky"}), @ORM\Index(name="Indice_5", columns={"NumEjercicio_id", "NumConcepto_id", "StrArticulo_ky", "NumAlmacen_id"}), @ORM\Index(name="Indice_6", columns={"NumAlmacen_id", "StrArticulo_ky", "NumConcepto_id", "NumEjercicio_id"}), @ORM\Index(name="Indice_7", columns={"StrArticulo_ky", "NumAlmacen_id", "NumConcepto_id", "NumEjercicio_id"}), @ORM\Index(name="Indice_8", columns={"DteActualizacion"}), @ORM\Index(name="Indice_9", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Articulosconcepto
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
     * @var integer
     *
     * @ORM\Column(name="NumConcepto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconceptoId = '0';

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
     * @var float
     *
     * @ORM\Column(name="NumCantidad_1", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_2", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_3", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_4", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_5", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_6", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_7", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_8", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad8 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_9", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad9 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_10", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_11", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad11 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_12", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad12 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad_13", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_1", type="integer", nullable=true)
     */
    private $numcosto1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_2", type="integer", nullable=true)
     */
    private $numcosto2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_3", type="integer", nullable=true)
     */
    private $numcosto3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_4", type="integer", nullable=true)
     */
    private $numcosto4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_5", type="integer", nullable=true)
     */
    private $numcosto5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_6", type="integer", nullable=true)
     */
    private $numcosto6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_7", type="integer", nullable=true)
     */
    private $numcosto7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_8", type="integer", nullable=true)
     */
    private $numcosto8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_9", type="integer", nullable=true)
     */
    private $numcosto9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_10", type="integer", nullable=true)
     */
    private $numcosto10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_11", type="integer", nullable=true)
     */
    private $numcosto11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_12", type="integer", nullable=true)
     */
    private $numcosto12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCosto_13", type="integer", nullable=true)
     */
    private $numcosto13 = '0';

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
     * @return Articulosconcepto
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
     * @return Articulosconcepto
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
     * @return Articulosconcepto
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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Articulosconcepto
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
     * @return Articulosconcepto
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
     * @return Articulosconcepto
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
     * @return Articulosconcepto
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
     * Set numcantidad1
     *
     * @param float $numcantidad1
     * @return Articulosconcepto
     */
    public function setNumcantidad1($numcantidad1)
    {
        $this->numcantidad1 = $numcantidad1;

        return $this;
    }

    /**
     * Get numcantidad1
     *
     * @return float 
     */
    public function getNumcantidad1()
    {
        return $this->numcantidad1;
    }

    /**
     * Set numcantidad2
     *
     * @param float $numcantidad2
     * @return Articulosconcepto
     */
    public function setNumcantidad2($numcantidad2)
    {
        $this->numcantidad2 = $numcantidad2;

        return $this;
    }

    /**
     * Get numcantidad2
     *
     * @return float 
     */
    public function getNumcantidad2()
    {
        return $this->numcantidad2;
    }

    /**
     * Set numcantidad3
     *
     * @param float $numcantidad3
     * @return Articulosconcepto
     */
    public function setNumcantidad3($numcantidad3)
    {
        $this->numcantidad3 = $numcantidad3;

        return $this;
    }

    /**
     * Get numcantidad3
     *
     * @return float 
     */
    public function getNumcantidad3()
    {
        return $this->numcantidad3;
    }

    /**
     * Set numcantidad4
     *
     * @param float $numcantidad4
     * @return Articulosconcepto
     */
    public function setNumcantidad4($numcantidad4)
    {
        $this->numcantidad4 = $numcantidad4;

        return $this;
    }

    /**
     * Get numcantidad4
     *
     * @return float 
     */
    public function getNumcantidad4()
    {
        return $this->numcantidad4;
    }

    /**
     * Set numcantidad5
     *
     * @param float $numcantidad5
     * @return Articulosconcepto
     */
    public function setNumcantidad5($numcantidad5)
    {
        $this->numcantidad5 = $numcantidad5;

        return $this;
    }

    /**
     * Get numcantidad5
     *
     * @return float 
     */
    public function getNumcantidad5()
    {
        return $this->numcantidad5;
    }

    /**
     * Set numcantidad6
     *
     * @param float $numcantidad6
     * @return Articulosconcepto
     */
    public function setNumcantidad6($numcantidad6)
    {
        $this->numcantidad6 = $numcantidad6;

        return $this;
    }

    /**
     * Get numcantidad6
     *
     * @return float 
     */
    public function getNumcantidad6()
    {
        return $this->numcantidad6;
    }

    /**
     * Set numcantidad7
     *
     * @param float $numcantidad7
     * @return Articulosconcepto
     */
    public function setNumcantidad7($numcantidad7)
    {
        $this->numcantidad7 = $numcantidad7;

        return $this;
    }

    /**
     * Get numcantidad7
     *
     * @return float 
     */
    public function getNumcantidad7()
    {
        return $this->numcantidad7;
    }

    /**
     * Set numcantidad8
     *
     * @param float $numcantidad8
     * @return Articulosconcepto
     */
    public function setNumcantidad8($numcantidad8)
    {
        $this->numcantidad8 = $numcantidad8;

        return $this;
    }

    /**
     * Get numcantidad8
     *
     * @return float 
     */
    public function getNumcantidad8()
    {
        return $this->numcantidad8;
    }

    /**
     * Set numcantidad9
     *
     * @param float $numcantidad9
     * @return Articulosconcepto
     */
    public function setNumcantidad9($numcantidad9)
    {
        $this->numcantidad9 = $numcantidad9;

        return $this;
    }

    /**
     * Get numcantidad9
     *
     * @return float 
     */
    public function getNumcantidad9()
    {
        return $this->numcantidad9;
    }

    /**
     * Set numcantidad10
     *
     * @param float $numcantidad10
     * @return Articulosconcepto
     */
    public function setNumcantidad10($numcantidad10)
    {
        $this->numcantidad10 = $numcantidad10;

        return $this;
    }

    /**
     * Get numcantidad10
     *
     * @return float 
     */
    public function getNumcantidad10()
    {
        return $this->numcantidad10;
    }

    /**
     * Set numcantidad11
     *
     * @param float $numcantidad11
     * @return Articulosconcepto
     */
    public function setNumcantidad11($numcantidad11)
    {
        $this->numcantidad11 = $numcantidad11;

        return $this;
    }

    /**
     * Get numcantidad11
     *
     * @return float 
     */
    public function getNumcantidad11()
    {
        return $this->numcantidad11;
    }

    /**
     * Set numcantidad12
     *
     * @param float $numcantidad12
     * @return Articulosconcepto
     */
    public function setNumcantidad12($numcantidad12)
    {
        $this->numcantidad12 = $numcantidad12;

        return $this;
    }

    /**
     * Get numcantidad12
     *
     * @return float 
     */
    public function getNumcantidad12()
    {
        return $this->numcantidad12;
    }

    /**
     * Set numcantidad13
     *
     * @param float $numcantidad13
     * @return Articulosconcepto
     */
    public function setNumcantidad13($numcantidad13)
    {
        $this->numcantidad13 = $numcantidad13;

        return $this;
    }

    /**
     * Get numcantidad13
     *
     * @return float 
     */
    public function getNumcantidad13()
    {
        return $this->numcantidad13;
    }

    /**
     * Set numcosto1
     *
     * @param integer $numcosto1
     * @return Articulosconcepto
     */
    public function setNumcosto1($numcosto1)
    {
        $this->numcosto1 = $numcosto1;

        return $this;
    }

    /**
     * Get numcosto1
     *
     * @return integer 
     */
    public function getNumcosto1()
    {
        return $this->numcosto1;
    }

    /**
     * Set numcosto2
     *
     * @param integer $numcosto2
     * @return Articulosconcepto
     */
    public function setNumcosto2($numcosto2)
    {
        $this->numcosto2 = $numcosto2;

        return $this;
    }

    /**
     * Get numcosto2
     *
     * @return integer 
     */
    public function getNumcosto2()
    {
        return $this->numcosto2;
    }

    /**
     * Set numcosto3
     *
     * @param integer $numcosto3
     * @return Articulosconcepto
     */
    public function setNumcosto3($numcosto3)
    {
        $this->numcosto3 = $numcosto3;

        return $this;
    }

    /**
     * Get numcosto3
     *
     * @return integer 
     */
    public function getNumcosto3()
    {
        return $this->numcosto3;
    }

    /**
     * Set numcosto4
     *
     * @param integer $numcosto4
     * @return Articulosconcepto
     */
    public function setNumcosto4($numcosto4)
    {
        $this->numcosto4 = $numcosto4;

        return $this;
    }

    /**
     * Get numcosto4
     *
     * @return integer 
     */
    public function getNumcosto4()
    {
        return $this->numcosto4;
    }

    /**
     * Set numcosto5
     *
     * @param integer $numcosto5
     * @return Articulosconcepto
     */
    public function setNumcosto5($numcosto5)
    {
        $this->numcosto5 = $numcosto5;

        return $this;
    }

    /**
     * Get numcosto5
     *
     * @return integer 
     */
    public function getNumcosto5()
    {
        return $this->numcosto5;
    }

    /**
     * Set numcosto6
     *
     * @param integer $numcosto6
     * @return Articulosconcepto
     */
    public function setNumcosto6($numcosto6)
    {
        $this->numcosto6 = $numcosto6;

        return $this;
    }

    /**
     * Get numcosto6
     *
     * @return integer 
     */
    public function getNumcosto6()
    {
        return $this->numcosto6;
    }

    /**
     * Set numcosto7
     *
     * @param integer $numcosto7
     * @return Articulosconcepto
     */
    public function setNumcosto7($numcosto7)
    {
        $this->numcosto7 = $numcosto7;

        return $this;
    }

    /**
     * Get numcosto7
     *
     * @return integer 
     */
    public function getNumcosto7()
    {
        return $this->numcosto7;
    }

    /**
     * Set numcosto8
     *
     * @param integer $numcosto8
     * @return Articulosconcepto
     */
    public function setNumcosto8($numcosto8)
    {
        $this->numcosto8 = $numcosto8;

        return $this;
    }

    /**
     * Get numcosto8
     *
     * @return integer 
     */
    public function getNumcosto8()
    {
        return $this->numcosto8;
    }

    /**
     * Set numcosto9
     *
     * @param integer $numcosto9
     * @return Articulosconcepto
     */
    public function setNumcosto9($numcosto9)
    {
        $this->numcosto9 = $numcosto9;

        return $this;
    }

    /**
     * Get numcosto9
     *
     * @return integer 
     */
    public function getNumcosto9()
    {
        return $this->numcosto9;
    }

    /**
     * Set numcosto10
     *
     * @param integer $numcosto10
     * @return Articulosconcepto
     */
    public function setNumcosto10($numcosto10)
    {
        $this->numcosto10 = $numcosto10;

        return $this;
    }

    /**
     * Get numcosto10
     *
     * @return integer 
     */
    public function getNumcosto10()
    {
        return $this->numcosto10;
    }

    /**
     * Set numcosto11
     *
     * @param integer $numcosto11
     * @return Articulosconcepto
     */
    public function setNumcosto11($numcosto11)
    {
        $this->numcosto11 = $numcosto11;

        return $this;
    }

    /**
     * Get numcosto11
     *
     * @return integer 
     */
    public function getNumcosto11()
    {
        return $this->numcosto11;
    }

    /**
     * Set numcosto12
     *
     * @param integer $numcosto12
     * @return Articulosconcepto
     */
    public function setNumcosto12($numcosto12)
    {
        $this->numcosto12 = $numcosto12;

        return $this;
    }

    /**
     * Get numcosto12
     *
     * @return integer 
     */
    public function getNumcosto12()
    {
        return $this->numcosto12;
    }

    /**
     * Set numcosto13
     *
     * @param integer $numcosto13
     * @return Articulosconcepto
     */
    public function setNumcosto13($numcosto13)
    {
        $this->numcosto13 = $numcosto13;

        return $this;
    }

    /**
     * Get numcosto13
     *
     * @return integer 
     */
    public function getNumcosto13()
    {
        return $this->numcosto13;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Articulosconcepto
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
     * @return Articulosconcepto
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
