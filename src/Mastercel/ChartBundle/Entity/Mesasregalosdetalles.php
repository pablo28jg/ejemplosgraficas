<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesasregalosdetalles
 *
 * @ORM\Table(name="MesasRegalosDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumMesaRegalo_id"}), @ORM\Index(name="Indice_2", columns={"StrArticulo_ky"})})
 * @ORM\Entity
 */
class Mesasregalosdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMesaRegalo_id", type="integer", nullable=true)
     */
    private $nummesaregaloId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAumentoRebaja_id", type="integer", nullable=true)
     */
    private $numaumentorebajaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPuntosGenerados", type="float", precision=53, scale=0, nullable=true)
     */
    private $numpuntosgenerados = '0';



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
     * Set nummesaregaloId
     *
     * @param integer $nummesaregaloId
     * @return Mesasregalosdetalles
     */
    public function setNummesaregaloId($nummesaregaloId)
    {
        $this->nummesaregaloId = $nummesaregaloId;

        return $this;
    }

    /**
     * Get nummesaregaloId
     *
     * @return integer 
     */
    public function getNummesaregaloId()
    {
        return $this->nummesaregaloId;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Mesasregalosdetalles
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
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Mesasregalosdetalles
     */
    public function setNumcantidad($numcantidad)
    {
        $this->numcantidad = $numcantidad;

        return $this;
    }

    /**
     * Get numcantidad
     *
     * @return float 
     */
    public function getNumcantidad()
    {
        return $this->numcantidad;
    }

    /**
     * Set numaumentorebajaId
     *
     * @param integer $numaumentorebajaId
     * @return Mesasregalosdetalles
     */
    public function setNumaumentorebajaId($numaumentorebajaId)
    {
        $this->numaumentorebajaId = $numaumentorebajaId;

        return $this;
    }

    /**
     * Get numaumentorebajaId
     *
     * @return integer 
     */
    public function getNumaumentorebajaId()
    {
        return $this->numaumentorebajaId;
    }

    /**
     * Set numpuntosgenerados
     *
     * @param float $numpuntosgenerados
     * @return Mesasregalosdetalles
     */
    public function setNumpuntosgenerados($numpuntosgenerados)
    {
        $this->numpuntosgenerados = $numpuntosgenerados;

        return $this;
    }

    /**
     * Get numpuntosgenerados
     *
     * @return float 
     */
    public function getNumpuntosgenerados()
    {
        return $this->numpuntosgenerados;
    }
}
