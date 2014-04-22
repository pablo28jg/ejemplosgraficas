<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Series
 *
 * @ORM\Table(name="Series", indexes={@ORM\Index(name="Indice_1", columns={"StrSerie_ky", "StrArticulo_ky"}), @ORM\Index(name="Indice_2", columns={"NumAlmacenVenta_id"}), @ORM\Index(name="Indice_3", columns={"NumCliente_id"}), @ORM\Index(name="Indice_4", columns={"NumVendedor_id"}), @ORM\Index(name="Indice_5", columns={"DteCreacion"})})
 * @ORM\Entity
 */
class Series
{
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
     * @ORM\Column(name="StrSerie_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strserieKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCliente_id", type="integer", nullable=true)
     */
    private $numclienteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_id", type="integer", nullable=true)
     */
    private $numvendedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioVenta", type="integer", nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumComisionVendedor", type="integer", nullable=true)
     */
    private $numcomisionvendedor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenVenta_id", type="integer", nullable=true)
     */
    private $numalmacenventaId = '0';

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
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Series
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
     * Set strserieKy
     *
     * @param string $strserieKy
     * @return Series
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
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Series
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
     * Set numclienteId
     *
     * @param integer $numclienteId
     * @return Series
     */
    public function setNumclienteId($numclienteId)
    {
        $this->numclienteId = $numclienteId;

        return $this;
    }

    /**
     * Get numclienteId
     *
     * @return integer 
     */
    public function getNumclienteId()
    {
        return $this->numclienteId;
    }

    /**
     * Set numvendedorId
     *
     * @param integer $numvendedorId
     * @return Series
     */
    public function setNumvendedorId($numvendedorId)
    {
        $this->numvendedorId = $numvendedorId;

        return $this;
    }

    /**
     * Get numvendedorId
     *
     * @return integer 
     */
    public function getNumvendedorId()
    {
        return $this->numvendedorId;
    }

    /**
     * Set numprecioventa
     *
     * @param integer $numprecioventa
     * @return Series
     */
    public function setNumprecioventa($numprecioventa)
    {
        $this->numprecioventa = $numprecioventa;

        return $this;
    }

    /**
     * Get numprecioventa
     *
     * @return integer 
     */
    public function getNumprecioventa()
    {
        return $this->numprecioventa;
    }

    /**
     * Set numcomisionvendedor
     *
     * @param integer $numcomisionvendedor
     * @return Series
     */
    public function setNumcomisionvendedor($numcomisionvendedor)
    {
        $this->numcomisionvendedor = $numcomisionvendedor;

        return $this;
    }

    /**
     * Get numcomisionvendedor
     *
     * @return integer 
     */
    public function getNumcomisionvendedor()
    {
        return $this->numcomisionvendedor;
    }

    /**
     * Set numalmacenventaId
     *
     * @param integer $numalmacenventaId
     * @return Series
     */
    public function setNumalmacenventaId($numalmacenventaId)
    {
        $this->numalmacenventaId = $numalmacenventaId;

        return $this;
    }

    /**
     * Get numalmacenventaId
     *
     * @return integer 
     */
    public function getNumalmacenventaId()
    {
        return $this->numalmacenventaId;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Series
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
     * @return Series
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
}
