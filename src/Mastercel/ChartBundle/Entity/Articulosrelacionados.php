<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulosrelacionados
 *
 * @ORM\Table(name="ArticulosRelacionados", indexes={@ORM\Index(name="Indice_1", columns={"StrArticuloRelacionado_ky", "StrArticulo_ky"})})
 * @ORM\Entity
 */
class Articulosrelacionados
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
     * @ORM\Column(name="StrArticuloRelacionado_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strarticulorelacionadoKy;



    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Articulosrelacionados
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
     * Set strarticulorelacionadoKy
     *
     * @param string $strarticulorelacionadoKy
     * @return Articulosrelacionados
     */
    public function setStrarticulorelacionadoKy($strarticulorelacionadoKy)
    {
        $this->strarticulorelacionadoKy = $strarticulorelacionadoKy;

        return $this;
    }

    /**
     * Get strarticulorelacionadoKy
     *
     * @return string 
     */
    public function getStrarticulorelacionadoKy()
    {
        return $this->strarticulorelacionadoKy;
    }
}
